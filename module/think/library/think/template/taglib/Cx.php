<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

namespace think\template\taglib;

use think\template\TagLib;

/**
 * CX标签库解析类
 * @category   Think
 * @package  Think
 * @subpackage  Driver.Taglib
 * @author    liu21st <liu21st@gmail.com>
 */
class Cx extends Taglib
{

    // 标签定义
    protected $tags = [
        // 标签定义： attr 属性列表 close 是否闭合（0 或者1 默认1） alias 标签别名 level 嵌套层次
        'php'        => ['attr' => ''],
        'volist'     => ['attr' => 'name,id,offset,length,key,mod', 'alias' => 'iterate'],
        'foreach'    => ['attr' => 'name,id,item,key,offset,length,mod', 'expression' => true],
        'if'         => ['attr' => 'condition', 'expression' => true],
        'elseif'     => ['attr' => 'condition', 'close' => 0, 'expression' => true],
        'else'       => ['attr' => '', 'close' => 0],
        'switch'     => ['attr' => 'name', 'expression' => true],
        'case'       => ['attr' => 'value,break', 'expression' => true],
        'default'    => ['attr' => '', 'close' => 0],
        'compare'    => ['attr' => 'name,value,type', 'alias' => ['eq,equal,notequal,neq,gt,lt,egt,elt,heq,nheq', 'type']],
        'range'      => ['attr' => 'name,value,type', 'alias' => ['in,notin,between,notbetween', 'type']],
        'empty'      => ['attr' => 'name'],
        'notempty'   => ['attr' => 'name'],
        'present'    => ['attr' => 'name'],
        'notpresent' => ['attr' => 'name'],
        'defined'    => ['attr' => 'name'],
        'notdefined' => ['attr' => 'name'],
        'load'       => ['attr' => 'file,href,type,value,basepath', 'close' => 0, 'alias' => ['import,css,js', 'type']],
        'assign'     => ['attr' => 'name,value', 'close' => 0],
        'define'     => ['attr' => 'name,value', 'close' => 0],
        'for'        => ['attr' => 'start,end,name,comparison,step'],
        'url'        => ['attr' => 'link,vars,suffix,domain', 'close' => 0, 'expression' => true],
        'function'   => ['attr' => 'name,vars,use,call'],
        'tpshop'     => ['attr'=>'sql,key,item,result_name','close'=>1,'level'=>3], // tpshop sql 万能标签
        'adv'        => ['attr'=>'limit,order,where,item','close'=>1],        
    ];

    
	public function tagTpshop($tag, $content)
        {
            
            $sql = $tag['sql']; // sql 语句
            
            
            //
            //
            //  file_put_contents('a.html', $sql.PHP_EOL, FILE_APPEND);
            $sql = str_replace(' eq ', ' = ', $sql); // 等于
            $sql = str_replace(' neq  ', ' != ', $sql); // 不等于            
            $sql = str_replace(' gt ', ' > ', $sql);// 大于
            $sql = str_replace(' egt ', ' >= ', $sql);// 大于等于
            $sql = str_replace(' lt ', ' < ', $sql);// 小于
            $sql = str_replace(' elt ', ' <= ', $sql);// 小于等于
            //$sql = str_replace(' heq ', ' == ', $sql);// 恒等于
            //$sql = str_replace(' nheq ', ' !== ', $sql);// 不恒等于
            
            //$sql = str_replace('__PREFIX__', C('database.prefix'), $sql); // 替换前缀
                                                
            $key  =  !empty($tag['key']) ? $tag['key'] : 'key';// 返回的变量key
            $item  =  !empty($tag['item']) ? $tag['item'] : 'item';// 返回的变量item	
            $result_name  =  !empty($tag['result_name']) ? $tag['result_name'] : 'result_name';// 返回的变量key			
            $t  =  !empty($tag['t']) ? $tag['t'] : TPSHOP_CACHE_TIME;// 缓存时间
            //$Model = new \Think\Model();
            //$name = 'sql_result_'.$item.rand(10000000,99999999); // 数据库结果集返回命名
            $name = 'sql_result_'.$item;//.rand(10000000,99999999); // 数据库结果集返回命名
            //$this->tpl->tVar[$name] = $Model->query($sql); // 变量存储到模板里面去                      
            $parseStr   =   ' @foreach(tpl_query("'.$sql.'") as $'.$key.'=>$'.$item.') ';
            //$parseStr  .=   $this->tpl->parse($content).$tag['level'];
            $parseStr  .=   $content;
            $parseStr  .=   ' @endforeach ';
           
            if(!empty($parseStr)) {
                return $parseStr;
            }
            return ;
    }     
	public function tagAdv($tag, $content)
        {
     	$order = $tag['order']; //排序
        $limit = !empty($tag['limit']) ? $tag['limit'] : '1'; 
        $where = $tag['where']; //查询条件
        $item  = !empty($tag['item']) ? $tag['item'] : 'item';// 返回的变量item	
        $key  =  !empty($tag['key']) ? $tag['key'] : 'key';// 返回的变量key
        $pid  =  !empty($tag['pid']) ? $tag['pid'] : '0';// 返回的变量key
           
            $var = '"'.implode('","',compact('order', 'limit', 'where', 'item', 'key', 'pid')).'"';

        $str = " @foreach( tpl_adv($var) as \$$key => \$$item ) ".  $content;
        $str .= ' @endforeach ';
            if(!empty($str)) {
                return $str;
            }
            return ;
	}    
    
    /**
     * php标签解析
     * 格式：
     * {php}echo $name{/php}
     * @access public
     * @param array $tag 标签属性
     * @param string $content 标签内容
     * @return string
     */
    public function tagPhp($tag, $content)
    {
        $parseStr = '<?php ' . $content . ' ?>';
        return $parseStr;
    }

    /**
     * volist标签解析 循环输出数据集
     * 格式：
     * {volist name="userList" id="user" empty=""}
     * {user.username}
     * {user.email}
     * {/volist}
     * @access public
     * @param array $tag 标签属性
     * @param string $content 标签内容
     * @return string|void
     */
    public function tagVolist($tag, $content)
    {
        $name   = $tag['name'];
        $id     = $tag['id'];
        $empty  = isset($tag['empty']) ? $tag['empty'] : '';
        $key    = !empty($tag['key']) ? $tag['key'] : 'i';
        $mod    = isset($tag['mod']) ? $tag['mod'] : '2';
        $offset = !empty($tag['offset']) && is_numeric($tag['offset']) ? intval($tag['offset']) : 0;
        $length = !empty($tag['length']) && is_numeric($tag['length']) ? intval($tag['length']) : 'null';
        // 允许使用函数设定数据集 <volist name=":fun('arg')" id="vo">{$vo.name}</volist>
        $parseStr = '<?php ';
        $flag     = substr($name, 0, 1);
        if (':' == $flag) {
            $name = $this->autoBuildVar($name);
            $parseStr .= '$_result=' . $name . ';';
            $name = '$_result';
        } else {
            $name = $this->autoBuildVar($name);
        }

        return " @foreach( $name ?: [] as \$$key => \$$id )\n$content\n@endforeach";

        $parseStr .= 'if(is_array(' . $name . ') || ' . $name . ' instanceof \think\Collection || ' . $name . ' instanceof \think\Paginator): $' . $key . ' = 0;';
        // 设置了输出数组长度
        if (0 != $offset || 'null' != $length) {
            $parseStr .= '$__LIST__ = is_array(' . $name . ') ? array_slice(' . $name . ',' . $offset . ',' . $length . ', true) : ' . $name . '->slice(' . $offset . ',' . $length . ', true); ';
        } else {
            $parseStr .= ' $__LIST__ = ' . $name . ';';
        }
        $parseStr .= 'if( count($__LIST__)==0 ) : echo "' . $empty . '" ;';
        $parseStr .= 'else: ';
        $parseStr .= 'foreach($__LIST__ as $key=>$' . $id . '): ';
        $parseStr .= '$mod = ($' . $key . ' % ' . $mod . ' );';
        $parseStr .= '++$' . $key . ';?>';
        $parseStr .= $content;
        $parseStr .= '<?php endforeach; endif; else: echo "' . $empty . '" ;endif; ?>';

        if (!empty($parseStr)) {
            return $parseStr;
        }
        return;
    }

    /**
     * foreach标签解析 循环输出数据集
     * 格式：
     * {foreach name="userList" id="user" key="key" index="i" mod="2" offset="3" length="5" empty=""}
     * {user.username}
     * {/foreach}
     * @access public
     * @param array $tag 标签属性
     * @param string $content 标签内容
     * @return string|void
     */
    public function tagForeach($tag, $content)
    {
        // 直接使用表达式
        if (!empty($tag['expression'])) {
            $expression = ltrim(rtrim($tag['expression'], ')'), '(');
            $expression = $this->autoBuildVar($expression);
            $parseStr   = ' @foreach(' . $expression . ') ';
            $parseStr .= $content;
            $parseStr .= ' @endforeach ';
            return $parseStr;
        }
        $name   = $tag['name'];
        $key    = !empty($tag['key']) ? $tag['key'] : 'key';
        $item   = !empty($tag['id']) ? $tag['id'] : $tag['item'];
        $empty  = isset($tag['empty']) ? $tag['empty'] : '';
        $offset = !empty($tag['offset']) && is_numeric($tag['offset']) ? intval($tag['offset']) : 0;
        $length = !empty($tag['length']) && is_numeric($tag['length']) ? intval($tag['length']) : 'null';



        $parseStr = '<?php ';
        // 支持用函数传数组
        if (':' == substr($name, 0, 1)) {
            $var  = '$_' . uniqid();
            $name = $this->autoBuildVar($name);
            $parseStr .= $var . '=' . $name . '; ';
            $name = $var;
        } else {
            $name = $this->autoBuildVar($name);
        }

        return "@foreach( $name ?: [] as \$$key => \$$item )\n$content\n@endforeach";

        $parseStr .= 'if(is_array(' . $name . ') || ' . $name . ' instanceof \think\Collection || ' . $name . ' instanceof \think\Paginator): ';
        // 设置了输出数组长度
        if (0 != $offset || 'null' != $length) {
            if (!isset($var)) {
                $var = '$_' . uniqid();
            }
            $parseStr .= $var . ' = is_array(' . $name . ') ? array_slice(' . $name . ',' . $offset . ',' . $length . ', true) : ' . $name . '->slice(' . $offset . ',' . $length . ', true); ';
        } else {
            $var = &$name;
        }

        $parseStr .= 'if( count(' . $var . ')==0 ) : echo "' . $empty . '" ;';
        $parseStr .= 'else: ';

        // 设置了索引项
        if (isset($tag['index'])) {
            $index = $tag['index'];
            $parseStr .= '$' . $index . '=0; ';
        }
        $parseStr .= 'foreach(' . $var . ' as $' . $key . '=>$' . $item . '): ';
        // 设置了索引项
        if (isset($tag['index'])) {
            $index = $tag['index'];
            if (isset($tag['mod'])) {
                $mod = (int) $tag['mod'];
                $parseStr .= '$mod = ($' . $index . ' % ' . $mod . '); ';
            }
            $parseStr .= '++$' . $index . '; ';
        }
        $parseStr .= '?>';
        // 循环体中的内容
        $parseStr .= $content;
        $parseStr .= '<?php endforeach; endif; else: echo "' . $empty . '" ;endif; ?>';

        if (!empty($parseStr)) {
            return $parseStr;
        }
        return;
    }

    /**
     * if标签解析
     * 格式：
     * {if condition=" $a eq 1"}
     * {elseif condition="$a eq 2" /}
     * {else /}
     * {/if}
     * 表达式支持 eq neq gt egt lt elt == > >= < <= or and || &&
     * @access public
     * @param array $tag 标签属性
     * @param string $content 标签内容
     * @return string
     */
    public function tagIf($tag, $content)
    {
        $condition = !empty($tag['expression']) ? $tag['expression'] : $tag['condition'];
        $condition = $this->parseCondition($condition);
        $parseStr  = '@if(' . $condition . ') ' . $content . ' @endif ';
        return $parseStr;
    }

    /**
     * elseif标签解析
     * 格式：见if标签
     * @access public
     * @param array $tag 标签属性
     * @param string $content 标签内容
     * @return string
     */
    public function tagElseif($tag, $content)
    {
        $condition = !empty($tag['expression']) ? $tag['expression'] : $tag['condition'];
        $condition = $this->parseCondition($condition);
        $parseStr  = '@elseif(' . $condition . ')';
        return $parseStr;
    }

    /**
     * else标签解析
     * 格式：见if标签
     * @access public
     * @param array $tag 标签属性
     * @return string
     */
    public function tagElse($tag)
    {
        $parseStr = '@else';
        return $parseStr;
    }

    /**
     * switch标签解析
     * 格式：
     * {switch name="a.name"}
     * {case value="1" break="false"}1{/case}
     * {case value="2" }2{/case}
     * {default /}other
     * {/switch}
     * @access public
     * @param array $tag 标签属性
     * @param string $content 标签内容
     * @return string
     */
    public function tagSwitch($tag, $content)
    {
        $name     = !empty($tag['expression']) ? $tag['expression'] : $tag['name'];
        $name     = $this->autoBuildVar($name);
        $parseStr = '@switch(' . $name . ')' . $content . '@endswitch';
        return $parseStr;
    }

    /**
     * case标签解析 需要配合switch才有效
     * @access public
     * @param array $tag 标签属性
     * @param string $content 标签内容
     * @return string
     */
    public function tagCase($tag, $content)
    {
        $value = isset($tag['expression']) ? $tag['expression'] : $tag['value'];
        $flag  = substr($value, 0, 1);
        if ('$' == $flag || ':' == $flag) {
            $value = $this->autoBuildVar($value);
            $value = 'case ' . $value . ':';
        } elseif (strpos($value, '|')) {
            $values = explode('|', $value);
            $value  = '';
            foreach ($values as $val) {
                $value .= '@case("' . addslashes($val) . "\")";
            }
        } else {
            $value = '@case("' . $value . "\")";
        }
        $parseStr = $value . $content;
        $isBreak  = isset($tag['break']) ? $tag['break'] : '';
        if ('' == $isBreak || $isBreak) {
            $parseStr .= '@break';
        }
        return $parseStr;
    }

    /**
     * default标签解析 需要配合switch才有效
     * 使用： {default /}ddfdf
     * @access public
     * @param array $tag 标签属性
     * @param string $content 标签内容
     * @return string
     */
    public function tagDefault($tag)
    {
        $parseStr = '@default';
        return $parseStr;
    }

    /**
     * compare标签解析
     * 用于值的比较 支持 eq neq gt lt egt elt heq nheq 默认是eq
     * 格式： {compare name="" type="eq" value="" }content{/compare}
     * @access public
     * @param array $tag 标签属性
     * @param string $content 标签内容
     * @return string
     */
    public function tagCompare($tag, $content)
    {
        $name  = $tag['name'];
        $value = $tag['value'];
        $type  = isset($tag['type']) ? $tag['type'] : 'eq'; // 比较类型
        $name  = $this->autoBuildVar($name);
        $flag  = substr($value, 0, 1);
        if ('$' == $flag || ':' == $flag) {
            $value = $this->autoBuildVar($value);
        } else {
            $value = '\'' . $value . '\'';
        }
        switch ($type) {
            case 'equal':
                $type = 'eq';
                break;
            case 'notequal':
                $type = 'neq';
                break;
        }
        $type     = $this->parseCondition(' ' . $type . ' ');
        $parseStr = '@if(' . $name . ' ' . $type . ' ' . $value . ') ' . $content . ' @endif ';
        return $parseStr;
    }

    /**
     * range标签解析
     * 如果某个变量存在于某个范围 则输出内容 type= in 表示在范围内 否则表示在范围外
     * 格式： {range name="var|function"  value="val" type='in|notin' }content{/range}
     * example: {range name="a"  value="1,2,3" type='in' }content{/range}
     * @access public
     * @param array $tag 标签属性
     * @param string $content 标签内容
     * @return string
     */
    public function tagRange($tag, $content)
    {
        $name  = $tag['name'];
        $value = $tag['value'];
        $type  = isset($tag['type']) ? $tag['type'] : 'in'; // 比较类型

        $name = $this->autoBuildVar($name);
        $flag = substr($value, 0, 1);
        if ('$' == $flag || ':' == $flag) {
            $value = $this->autoBuildVar($value);
            $str   = 'is_array(' . $value . ') ? ' . $value . ' : explode(\',\',' . $value . ')';
        } else {
            $value = '"' . $value . '"';
            $str   = 'explode(\',\',' . $value . ')';
        }
        if ('between' == $type) {
            $parseStr = '<?php $_RANGE_VAR_=' . $str . "?>\n@if(" . $name . ' >= $_RANGE_VAR_[0] && ' . $name . ' <= $_RANGE_VAR_[1]) ' . $content . ' @endif ';
        } elseif ('notbetween' == $type) {
            $parseStr = '<?php $_RANGE_VAR_=' . $str . "?>\n@if(" . $name . ' < $_RANGE_VAR_[0] || ' . $name . ' > $_RANGE_VAR_[1]) ' . $content . ' @endif ';
        } else {
            $fun      = ('in' == $type) ? 'in_array' : '!in_array';
            $parseStr = '@if(' . $fun . '((' . $name . '), ' . $str . ')) ' . $content . ' @endif ';
        }
        return $parseStr;
    }

    /**
     * present标签解析
     * 如果某个变量已经设置 则输出内容
     * 格式： {present name="" }content{/present}
     * @access public
     * @param array $tag 标签属性
     * @param string $content 标签内容
     * @return string
     */
    public function tagPresent($tag, $content)
    {
        $name     = $tag['name'];
        $name     = $this->autoBuildVar($name);
        $parseStr = '@isset(' . $name . ')' . $content . '@endisset';
        return $parseStr;
    }

    /**
     * notpresent标签解析
     * 如果某个变量没有设置，则输出内容
     * 格式： {notpresent name="" }content{/notpresent}
     * @access public
     * @param array $tag 标签属性
     * @param string $content 标签内容
     * @return string
     */
    public function tagNotpresent($tag, $content)
    {
        $name     = $tag['name'];
        $name     = $this->autoBuildVar($name);
        $parseStr = '@unless(' . $name . ')' . $content . '@endunless';
        return $parseStr;
    }

    /**
     * empty标签解析
     * 如果某个变量为empty 则输出内容
     * 格式： {empty name="" }content{/empty}
     * @access public
     * @param array $tag 标签属性
     * @param string $content 标签内容
     * @return string
     */
    public function tagEmpty($tag, $content)
    {
        $name     = $tag['name'];
        $name     = $this->autoBuildVar($name);
        $parseStr = '@if(tp_empty(' . $name . ')) ' . $content . ' @endif ';
        return $parseStr;
    }

    /**
     * notempty标签解析
     * 如果某个变量不为empty 则输出内容
     * 格式： {notempty name="" }content{/notempty}
     * @access public
     * @param array $tag 标签属性
     * @param string $content 标签内容
     * @return string
     */
    public function tagNotempty($tag, $content)
    {
        $name     = $tag['name'];
        $name     = $this->autoBuildVar($name);
        $parseStr = '@if(!tp_empty(' . $name . ')) ' . $content . ' @endif ';
        return $parseStr;
    }

    /**
     * 判断是否已经定义了该常量
     * {defined name='TXT'}已定义{/defined}
     * @param array $tag
     * @param string $content
     * @return string
     */
    public function tagDefined($tag, $content)
    {
        $name     = $tag['name'];
        $parseStr = '@if(defined("' . $name . '")) ' . $content . ' @endif ';
        return $parseStr;
    }

    /**
     * 判断是否没有定义了该常量
     * {notdefined name='TXT'}已定义{/notdefined}
     * @param array $tag
     * @param string $content
     * @return string
     */
    public function tagNotdefined($tag, $content)
    {
        $name     = $tag['name'];
        $parseStr = '@if(!defined("' . $name . '")) ' . $content . ' @endif ';
        return $parseStr;
    }

    /**
     * load 标签解析 {load file="/static/js/base.js" /}
     * 格式：{load file="/static/css/base.css" /}
     * @access public
     * @param array $tag 标签属性
     * @param string $content 标签内容
     * @return string
     */
    public function tagLoad($tag, $content)
    {
        $file     = isset($tag['file']) ? $tag['file'] : $tag['href'];
        $type     = isset($tag['type']) ? strtolower($tag['type']) : '';
        $parseStr = '';
        $endStr   = '';
        // 判断是否存在加载条件 允许使用函数判断(默认为isset)
        if (isset($tag['value'])) {
            $name = $tag['value'];
            $name = $this->autoBuildVar($name);
            $name = 'isset(' . $name . ')';
            $parseStr .= '@if(' . $name . ') ';
            $endStr = ' @endif ';
        }

        // 文件方式导入
        $array = explode(',', $file);
        foreach ($array as $val) {
            $type = strtolower(substr(strrchr($val, '.'), 1));
            switch ($type) {
                case 'js':
                    $parseStr .= '<script type="text/javascript" src="' . $val . '"></script>';
                    break;
                case 'css':
                    $parseStr .= '<link rel="stylesheet" type="text/css" href="' . $val . '" />';
                    break;
                case 'php':
                    $parseStr .= '<?php include "' . $val . '"; ?>';
                    break;
            }
        }
        return $parseStr . $endStr;
    }

    /**
     * assign标签解析
     * 在模板中给某个变量赋值 支持变量赋值
     * 格式： {assign name="" value="" /}
     * @access public
     * @param array $tag 标签属性
     * @param string $content 标签内容
     * @return string
     */
    public function tagAssign($tag, $content)
    {
        $name = $this->autoBuildVar($tag['name']);
        $flag = substr($tag['value'], 0, 1);
        if ('$' == $flag || ':' == $flag) {
            $value = $this->autoBuildVar($tag['value']);
        } else {
            $value = '\'' . $tag['value'] . '\'';
        }
        $parseStr = '<?php ' . $name . ' = ' . $value . '; ?>';
        return $parseStr;
    }

    /**
     * define标签解析
     * 在模板中定义常量 支持变量赋值
     * 格式： {define name="" value="" /}
     * @access public
     * @param array $tag 标签属性
     * @param string $content 标签内容
     * @return string
     */
    public function tagDefine($tag, $content)
    {
        $name = '\'' . $tag['name'] . '\'';
        $flag = substr($tag['value'], 0, 1);
        if ('$' == $flag || ':' == $flag) {
            $value = $this->autoBuildVar($tag['value']);
        } else {
            $value = '\'' . $tag['value'] . '\'';
        }
        $parseStr = '<?php define(' . $name . ', ' . $value . '); ?>';
        return $parseStr;
    }

    /**
     * for标签解析
     * 格式：
     * {for start="" end="" comparison="" step="" name=""}
     * content
     * {/for}
     * @access public
     * @param array $tag 标签属性
     * @param string $content 标签内容
     * @return string
     */
    public function tagFor($tag, $content)
    {
        //设置默认值
        $start      = 0;
        $end        = 0;
        $step       = 1;
        $comparison = 'lt';
        $name       = 'i';
        $rand       = rand(); //添加随机数，防止嵌套变量冲突
        //获取属性
        foreach ($tag as $key => $value) {
            $value = trim($value);
            $flag  = substr($value, 0, 1);
            if ('$' == $flag || ':' == $flag) {
                $value = $this->autoBuildVar($value);
            }

            switch ($key) {
                case 'start':
                    $start = $value;
                    break;
                case 'end':
                    $end = $value;
                    break;
                case 'step':
                    $step = $value;
                    break;
                case 'comparison':
                    $comparison = $value;
                    break;
                case 'name':
                    $name = $value;
                    break;
            }
        }

        $parseStr = '<?php $__FOR_START_' . $rand . '__=' . $start . ';$__FOR_END_' . $rand . '__=' . $end . ';?>';
        $parseStr .= ' @for($' . $name . '=$__FOR_START_' . $rand . '__;' . $this->parseCondition('$' . $name . ' ' . $comparison . ' $__FOR_END_' . $rand . '__') . ';$' . $name . '+=' . $step . ') ';
        $parseStr .= $content;
        $parseStr .= ' @endfor ';
        return $parseStr;
    }

    /**
     * url函数的tag标签
     * 格式：{url link="模块/控制器/方法" vars="参数" suffix="true或者false 是否带有后缀" domain="true或者false 是否携带域名" /}
     * @access public
     * @param array $tag 标签属性
     * @param string $content 标签内容
     * @return string
     */
    public function tagUrl($tag, $content)
    {
        $url    = isset($tag['link']) ? $tag['link'] : '';
        $vars   = isset($tag['vars']) ? $tag['vars'] : '';
        $suffix = isset($tag['suffix']) ? $tag['suffix'] : 'true';
        $domain = isset($tag['domain']) ? $tag['domain'] : 'false';
        return '{{ url("' . $url . '","' . $vars . '",' . $suffix . ',' . $domain . ') }}';
    }

    /**
     * function标签解析 匿名函数，可实现递归
     * 使用：
     * {function name="func" vars="$data" call="$list" use="&$a,&$b"}
     *      {if is_array($data)}
     *          {foreach $data as $val}
     *              {~func($val) /}
     *          {/foreach}
     *      {else /}
     *          {$data}
     *      {/if}
     * {/function}
     * @access public
     * @param array $tag 标签属性
     * @param string $content 标签内容
     * @return string
     */
    public function tagFunction($tag, $content)
    {
        $name = !empty($tag['name']) ? $tag['name'] : 'func';
        $vars = !empty($tag['vars']) ? $tag['vars'] : '';
        $call = !empty($tag['call']) ? $tag['call'] : '';
        $use  = ['&$' . $name];
        if (!empty($tag['use'])) {
            foreach (explode(',', $tag['use']) as $val) {
                $use[] = '&' . ltrim(trim($val), '&');
            }
        }
        $parseStr = '<?php $' . $name . ' = function(' . $vars . ') use(' . implode(',', $use) . ') {';
        $parseStr .= ' ?>' . $content . '<?php }; ';
        $parseStr .= $call ? '$' . $name . '(' . $call . '); ?>' : '?>';
        return $parseStr;
    }
}