<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

namespace think\db;

use Error;
use PDO;
use PDOStatement;
use think\Db;
use think\db\exception\BindParamException;
use think\Debug;
use think\Exception;
use think\exception\PDOException;
use think\Log;
use Throwable;

/**
 * Class Connection
 * @package think
 * @method Query table(string $table) 指定数据表（含前缀）
 * @method Query name(string $name) 指定数据表（不含前缀）
 */
abstract class Connection
{
    protected static $event = [];
    /** @var PDOStatement PDO操作实例 */
    protected $PDOStatement;
    // 返回或者影响记录数
    /** @var string 当前SQL指令 */
    protected $queryStr = '';
    // 事务指令数
    protected $numRows = 0;
    // 错误信息
    protected $transTimes = 0;
    protected $error = '';
    /** @var PDO[] 数据库连接ID 支持多个连接 */
    protected $links = [];
    /** @var PDO 当前连接ID */
    protected $linkID;
    protected $linkRead;
    // 查询结果类型
    protected $linkWrite;
    // 字段属性大小写
    protected $fetchType = PDO::FETCH_ASSOC;
    // 监听回调
    protected $attrCase = PDO::CASE_LOWER;
    // 使用Builder类
    protected $builder;
    // 数据库连接参数配置
    protected $config = [
        // 数据库类型
        'type' => '',
        // 服务器地址
        'hostname' => '',
        // 数据库名
        'database' => '',
        // 用户名
        'username' => '',
        // 密码
        'password' => '',
        // 端口
        'hostport' => '',
        // 连接dsn
        'dsn' => '',
        // 数据库连接参数
        'params' => [],
        // 数据库编码默认采用utf8
        'charset' => 'utf8',
        // 数据库表前缀
        'prefix' => '',
        // 数据库调试模式
        'debug' => FALSE,
        // 数据库部署方式:0 集中式(单一服务器),1 分布式(主从服务器)
        'deploy' => 0,
        // 数据库读写是否分离 主从式有效
        'rw_separate' => FALSE,
        // 读写分离后 主服务器数量
        'master_num' => 1,
        // 指定从服务器序号
        'slave_no' => '',
        // 是否严格检查字段是否存在
        'fields_strict' => TRUE,
        // 数据返回类型
        'result_type' => PDO::FETCH_ASSOC,
        // 数据集返回类型
        'resultset_type' => 'array',
        // 自动写入时间戳字段
        'auto_timestamp' => FALSE,
        // 时间字段取出后的默认时间格式
        'datetime_format' => 'Y-m-d H:i:s',
        // 是否需要进行SQL性能分析
        'sql_explain' => FALSE,
        // Builder类
        'builder' => '',
        // Query类
        'query' => '\\think\\db\\Query',
        // 是否需要断线重连
        'break_reconnect' => FALSE,
    ];
    // PDO连接参数
    protected $params = [
        PDO::ATTR_CASE => PDO::CASE_NATURAL,
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_ORACLE_NULLS => PDO::NULL_NATURAL,
        PDO::ATTR_STRINGIFY_FETCHES => FALSE,
        PDO::ATTR_EMULATE_PREPARES => FALSE,
    ];
    // 绑定参数
    protected $bind = [];

    /**
     * 构造函数 读取数据库配置信息
     * @access public
     * @param array $config 数据库配置数组
     */
    public function __construct(array $config = [])
    {
        if( !empty($config)) {
            $this->config = array_merge($this->config, $config);
        }
    }

    /**
     * 获取当前连接器类对应的Builder类
     * @access public
     * @return string
     */
    public function getBuilder()
    {
        if( !empty($this->builder)) {
            return $this->builder;
        } else {
            return $this->getConfig('builder') ?: '\\think\\db\\builder\\' . ucfirst($this->getConfig('type'));
        }
    }

    /**
     * 获取数据库的配置参数
     * @access public
     * @param string $config 配置名称
     * @return mixed
     */
    public function getConfig($config = '')
    {
        return $config ? $this->config[ $config ] : $this->config;
    }

    /**
     * 设置数据库的配置参数
     * @access public
     * @param string|array $config 配置名称
     * @param mixed $value 配置值
     * @return void
     */
    public function setConfig($config, $value = '')
    {
        if(is_array($config)) {
            $this->config = array_merge($this->config, $config);
        } else {
            $this->config[ $config ] = $value;
        }
    }

    /**
     * 调用Query类的查询方法
     * @access public
     * @param string $method 方法名称
     * @param array $args 调用参数
     * @return mixed
     */
    public function __call($method, $args)
    {
        return call_user_func_array([$this->getQuery(), $method], $args);
    }

    /**
     * 获取新的查询对象
     * @access protected
     * @return Query
     */
    protected function getQuery()
    {
        $class = $this->config['query'];
        return new $class($this);
    }

    /**
     * 取得数据表的字段信息
     * @access public
     * @param string $tableName
     * @return array
     */
    abstract public function getFields($tableName);

    /**
     * 取得数据库的表信息
     * @access public
     * @param string $dbName
     * @return array
     */
    abstract public function getTables($dbName);

    /**
     * 对返数据表字段信息进行大小写转换出来
     * @access public
     * @param array $info 字段信息
     * @return array
     */
    public function fieldCase($info)
    {
        // 字段大小写转换
        switch($this->attrCase) {
            case PDO::CASE_LOWER:
                $info = array_change_key_case($info);
                break;
            case PDO::CASE_UPPER:
                $info = array_change_key_case($info, CASE_UPPER);
                break;
            case PDO::CASE_NATURAL:
            default:
                // 不做转换
        }
        return $info;
    }

    /**
     * 获取PDO对象
     * @access public
     * @return \PDO|false
     */
    public function getPdo()
    {
        if( !$this->linkID) {
            return FALSE;
        } else {
            return $this->linkID;
        }
    }

    /**
     * 执行查询 返回数据集
     * @access public
     * @param string $sql sql指令
     * @param array $bind 参数绑定
     * @param bool $master 是否在主服务器读操作
     * @param bool $pdo 是否返回PDO对象
     * @return mixed
     * @throws PDOException
     * @throws \Exception
     */
    public function query($sql, $bind = [], $master = FALSE, $pdo = FALSE)
    {
        $sql = str_replace('__PREFIX__', C('database.prefix'), $sql); // 替换前缀
        $this->initConnect($master);
        if( !$this->linkID) {
            return FALSE;
        }

        $master && $sql = '/*master*/' . $sql;
        // 记录SQL语句
        $this->queryStr = $sql;
        if($bind) {
            $this->bind = $bind;
        }

        Db::$queryTimes++;
        try {
            // 调试开始
            $this->debug(TRUE);

            // 释放前次的查询结果
            if( !empty($this->PDOStatement)) {
                $this->free();
            }
            // 预处理
            if(empty($this->PDOStatement)) {
                $this->PDOStatement = $this->linkID->prepare($sql);
            }
            // 是否为存储过程调用
            $procedure = in_array(strtolower(substr(trim($sql), 0, 4)), ['call', 'exec']);
            // 参数绑定
            if($procedure) {
                $this->bindParam($bind);
            } else {
                $this->bindValue($bind);
            }
            // 执行查询
            $this->PDOStatement->execute();
            // 调试结束
            $this->debug(FALSE);
            // 返回结果集
            return $this->getResult($pdo, $procedure);
        } catch(\PDOException $e) {
            if($this->isBreak($e)) {
                return $this->close()->query($sql, $bind, $master, $pdo);
            }
            echo '错误语句:' . $sql;
            throw new PDOException($e, $this->config, $this->getLastsql());
        } catch(Throwable $e) {
            if($this->isBreak($e)) {
                return $this->close()->query($sql, $bind, $master, $pdo);
            }
            echo '错误语句:' . $sql;
            throw $e;
        } catch(\Exception $e) {
            if($this->isBreak($e)) {
                return $this->close()->query($sql, $bind, $master, $pdo);
            }
            echo '错误语句:' . $sql;
            throw $e;
        }
    }

    /**
     * 初始化数据库连接
     * @access protected
     * @param boolean $master 是否主服务器
     * @return void
     */
    protected function initConnect($master = TRUE)
    {
        if( !empty($this->config['deploy'])) {
            // 采用分布式数据库
            if($master || $this->transTimes) {
                if( !$this->linkWrite) {
                    $this->linkWrite = $this->multiConnect(TRUE);
                }
                $this->linkID = $this->linkWrite;
            } else {
                if( !$this->linkRead) {
                    $this->linkRead = $this->multiConnect(FALSE);
                }
                $this->linkID = $this->linkRead;
            }
        } else if( !$this->linkID) {
            // 默认单数据库
            $this->linkID = $this->connect();
        }
    }

    /**
     * 连接分布式服务器
     * @access protected
     * @param boolean $master 主服务器
     * @return PDO
     */
    protected function multiConnect($master = FALSE)
    {
        $_config = [];
        // 分布式数据库配置解析
        foreach(['username', 'password', 'hostname', 'hostport', 'database', 'dsn', 'charset'] as $name) {
            $_config[ $name ] = explode(',', $this->config[ $name ]);
        }

        // 主服务器序号
        $m = floor(mt_rand(0, $this->config['master_num'] - 1));

        if($this->config['rw_separate']) {
            // 主从式采用读写分离
            if($master) // 主服务器写入
            {
                $r = $m;
            } else if(is_numeric($this->config['slave_no'])) {
                // 指定服务器读
                $r = $this->config['slave_no'];
            } else {
                // 读操作连接从服务器 每次随机连接的数据库
                $r = floor(mt_rand($this->config['master_num'], count($_config['hostname']) - 1));
            }
        } else {
            // 读写操作不区分服务器 每次随机连接的数据库
            $r = floor(mt_rand(0, count($_config['hostname']) - 1));
        }
        $dbMaster = FALSE;
        if($m != $r) {
            $dbMaster = [];
            foreach(['username', 'password', 'hostname', 'hostport', 'database', 'dsn', 'charset'] as $name) {
                $dbMaster[ $name ] = isset($_config[ $name ][ $m ]) ? $_config[ $name ][ $m ] : $_config[ $name ][0];
            }
        }
        $dbConfig = [];
        foreach(['username', 'password', 'hostname', 'hostport', 'database', 'dsn', 'charset'] as $name) {
            $dbConfig[ $name ] = isset($_config[ $name ][ $r ]) ? $_config[ $name ][ $r ] : $_config[ $name ][0];
        }
        return $this->connect($dbConfig, $r, $r == $m ? FALSE : $dbMaster);
    }

    /**
     * 连接数据库方法
     * @access public
     * @param array $config 连接参数
     * @param integer $linkNum 连接序号
     * @param array|bool $autoConnection 是否自动连接主数据库（用于分布式）
     * @return PDO
     * @throws Exception
     */
    public function connect(array $config = [], $linkNum = 0, $autoConnection = FALSE)
    {
        if( !isset($this->links[ $linkNum ])) {
            if( !$config) {
                $config = $this->config;
            } else {
                $config = array_merge($this->config, $config);
            }
            // 连接参数
            if(isset($config['params']) && is_array($config['params'])) {
                $params = $config['params'] + $this->params;
            } else {
                $params = $this->params;
            }
            // 记录当前字段属性大小写设置
            $this->attrCase = $params[ PDO::ATTR_CASE ];

            // 数据返回类型
            if(isset($config['result_type'])) {
                $this->fetchType = $config['result_type'];
            }
            try {
                if(empty($config['dsn'])) {
                    $config['dsn'] = $this->parseDsn($config);
                }
                if($config['debug']) {
                    $startTime = microtime(TRUE);
                }
                $this->links[ $linkNum ] = new PDO($config['dsn'], $config['username'], $config['password'], $params);
                if($config['debug']) {
                    // 记录数据库连接信息
                    Log::record('[ DB ] CONNECT:[ UseTime:' . number_format(microtime(TRUE) - $startTime, 6) . 's ] ' . $config['dsn'], 'sql');
                }
            } catch(\PDOException $e) {
                if($autoConnection) {
                    Log::record($e->getMessage(), 'error');
                    return $this->connect($autoConnection, $linkNum);
                } else {
                    throw $e;
                }
            }
        }
        return $this->links[ $linkNum ];
    }

    /**
     * 解析pdo连接的dsn信息
     * @access protected
     * @param array $config 连接信息
     * @return string
     */
    abstract protected function parseDsn($config);

    /**
     * 数据库调试 记录当前SQL及分析性能
     * @access protected
     * @param boolean $start 调试开始标记 true 开始 false 结束
     * @param string $sql 执行的SQL语句 留空自动获取
     * @return void
     */
    protected function debug($start, $sql = '')
    {
        if( !empty($this->config['debug'])) {
            // 开启数据库调试模式
            if($start) {
                Debug::remark('queryStartTime', 'time');
            } else {
                // 记录操作结束时间
                Debug::remark('queryEndTime', 'time');
                $runtime = Debug::getRangeTime('queryStartTime', 'queryEndTime');
                $sql = $sql ?: $this->getLastsql();
                $result = [];
                // SQL性能分析
                if($this->config['sql_explain'] && 0 === stripos(trim($sql), 'select')) {
                    $result = $this->getExplain($sql);
                }
                // SQL监听
                $this->trigger($sql, $runtime, $result);
            }
        }
    }

    /**
     * 获取最近一次查询的sql语句
     * @access public
     * @return string
     */
    public function getLastSql()
    {
        return $this->getRealSql($this->queryStr, $this->bind);
    }

    /**
     * 根据参数绑定组装最终的SQL语句 便于调试
     * @access public
     * @param string $sql 带参数绑定的sql语句
     * @param array $bind 参数绑定列表
     * @return string
     */
    public function getRealSql($sql, array $bind = [])
    {
        if(is_array($sql)) {
            $sql = implode(';', $sql);
        }

        foreach($bind as $key => $val) {
            $value = is_array($val) ? $val[0] : $val;
            $type = is_array($val) ? $val[1] : PDO::PARAM_STR;
            if(PDO::PARAM_STR == $type) {
                $value = $this->quote($value);
            } else if(PDO::PARAM_INT == $type) {
                $value = (float)$value;
            }
            // 判断占位符
            $sql = is_numeric($key) ?
                substr_replace($sql, $value, strpos($sql, '?'), 1) :
                str_replace(
                    [':' . $key . ')', ':' . $key . ',', ':' . $key . ' ', ':' . $key . PHP_EOL],
                    [$value . ')', $value . ',', $value . ' ', $value . PHP_EOL],
                    $sql . ' ');
        }
        return rtrim($sql);
    }

    /**
     * SQL指令安全过滤
     * @access public
     * @param string $str SQL字符串
     * @param bool $master 是否主库查询
     * @return string
     */
    public function quote($str, $master = TRUE)
    {
        $this->initConnect($master);
        return $this->linkID ? $this->linkID->quote($str) : $str;
    }

    /**
     * SQL性能分析
     * @access protected
     * @param string $sql
     * @return array
     */
    abstract protected function getExplain($sql);

    /**
     * 触发SQL事件
     * @access protected
     * @param string $sql SQL语句
     * @param float $runtime SQL运行时间
     * @param mixed $explain SQL分析
     * @return bool
     */
    protected function trigger($sql, $runtime, $explain = [])
    {
        if( !empty(self::$event)) {
            foreach(self::$event as $callback) {
                if(is_callable($callback)) {
                    call_user_func_array($callback, [$sql, $runtime, $explain]);
                }
            }
        } else {
            // 未注册监听则记录到日志中
            Log::record('[ SQL ] ' . $sql . ' [ RunTime:' . $runtime . 's ]', 'sql');
            if( !empty($explain)) {
                Log::record('[ EXPLAIN : ' . var_export($explain, TRUE) . ' ]', 'sql');
            }
        }
    }

    /**
     * 释放查询结果
     * @access public
     */
    public function free()
    {
        $this->PDOStatement = null;
    }

    /**
     * 存储过程的输入输出参数绑定
     * @access public
     * @param array $bind 要绑定的参数列表
     * @return void
     * @throws BindParamException
     */
    protected function bindParam($bind)
    {
        foreach($bind as $key => $val) {
            $param = is_numeric($key) ? $key + 1 : ':' . $key;
            if(is_array($val)) {
                array_unshift($val, $param);
                $result = call_user_func_array([$this->PDOStatement, 'bindParam'], $val);
            } else {
                $result = $this->PDOStatement->bindValue($param, $val);
            }
            if( !$result) {
                $param = array_shift($val);
                throw new BindParamException(
                    "Error occurred  when binding parameters '{$param}'",
                    $this->config,
                    $this->getLastsql(),
                    $bind
                );
            }
        }
    }

    /**
     * 参数绑定
     * 支持 ['name'=>'value','id'=>123] 对应命名占位符
     * 或者 ['value',123] 对应问号占位符
     * @access public
     * @param array $bind 要绑定的参数列表
     * @return void
     * @throws BindParamException
     */
    protected function bindValue(array $bind = [])
    {
        foreach($bind as $key => $val) {
            // 占位符
            $param = is_numeric($key) ? $key + 1 : ':' . $key;
            if(is_array($val)) {
                if(PDO::PARAM_INT == $val[1] && '' === $val[0]) {
                    $val[0] = 0;
                }
                $result = $this->PDOStatement->bindValue($param, $val[0], $val[1]);
            } else {
                $result = $this->PDOStatement->bindValue($param, $val);
            }
            if( !$result) {
                throw new BindParamException(
                    "Error occurred  when binding parameters '{$param}'",
                    $this->config,
                    $this->getLastsql(),
                    $bind
                );
            }
        }
    }

    /**
     * 获得数据集数组
     * @access protected
     * @param bool $pdo 是否返回PDOStatement
     * @param bool $procedure 是否存储过程
     * @return PDOStatement|array
     */
    protected function getResult($pdo = FALSE, $procedure = FALSE)
    {
        if($pdo) {
            // 返回PDOStatement对象处理
            return $this->PDOStatement;
        }
        if($procedure) {
            // 存储过程返回结果
            return $this->procedure();
        }
        $result = $this->PDOStatement->fetchAll($this->fetchType);
        $this->numRows = count($result);
        return $result;
    }

    /**
     * 获得存储过程数据集
     * @access protected
     * @return array
     */
    protected function procedure()
    {
        $item = [];
        do {
            $result = $this->getResult();
            if($result) {
                $item[] = $result;
            }
        } while($this->PDOStatement->nextRowset());
        $this->numRows = count($item);
        return $item;
    }

    /**
     * 是否断线
     * @access protected
     * @param \PDOException|\Exception $e 异常对象
     * @return bool
     */
    protected function isBreak($e)
    {
        if( !$this->config['break_reconnect']) {
            return FALSE;
        }

        $info = [
            'server has gone away',
            'no connection to the server',
            'Lost connection',
            'is dead or not enabled',
            'Error while sending',
            'decryption failed or bad record mac',
            'server closed the connection unexpectedly',
            'SSL connection has been closed unexpectedly',
            'Error writing data to the connection',
            'Resource deadlock avoided',
        ];

        $error = $e->getMessage();

        foreach($info as $msg) {
            if(FALSE !== stripos($error, $msg)) {
                return TRUE;
            }
        }
        return FALSE;
    }

    /**
     * 关闭数据库（或者重新连接）
     * @access public
     * @return $this
     */
    public function close()
    {
        $this->linkID = null;
        $this->linkWrite = null;
        $this->linkRead = null;
        $this->links = [];
        return $this;
    }

    /**
     * 执行数据库事务
     * @access public
     * @param callable $callback 数据操作方法回调
     * @return mixed
     * @throws PDOException
     * @throws \Exception
     * @throws \Throwable
     */
    public function transaction($callback)
    {
        $this->startTrans();
        try {
            $result = null;
            if(is_callable($callback)) {
                $result = call_user_func_array($callback, [$this]);
            }
            $this->commit();
            return $result;
        } catch(\Exception $e) {
            $this->rollback();
            throw $e;
        } catch(Throwable $e) {
            $this->rollback();
            throw $e;
        }
    }

    /**
     * 启动事务
     * @access public
     * @return bool|mixed
     * @throws \Exception
     */
    public function startTrans()
    {
        $this->initConnect(TRUE);
        if( !$this->linkID) {
            return FALSE;
        }

        ++$this->transTimes;
        try {
            if(1 == $this->transTimes) {
                $this->linkID->beginTransaction();
            } else if($this->transTimes > 1 && $this->supportSavepoint()) {
                $this->linkID->exec(
                    $this->parseSavepoint('trans' . $this->transTimes)
                );
            }

        } catch(\PDOException $e) {
            if($this->isBreak($e)) {
                return $this->close()->startTrans();
            }
            throw $e;
        } catch(\Exception $e) {
            if($this->isBreak($e)) {
                return $this->close()->startTrans();
            }
            throw $e;
        } catch(Error $e) {
            if($this->isBreak($e)) {
                return $this->close()->startTrans();
            }
            throw $e;
        }
    }

    /**
     * 是否支持事务嵌套
     * @return bool
     */
    protected function supportSavepoint()
    {
        return FALSE;
    }

    /**
     * 生成定义保存点的SQL
     * @param $name
     * @return string
     */
    protected function parseSavepoint($name)
    {
        return 'SAVEPOINT ' . $name;
    }

    /**
     * 用于非自动提交状态下面的查询提交
     * @access public
     * @return void
     * @throws PDOException
     */
    public function commit()
    {
        $this->initConnect(TRUE);

        if(1 == $this->transTimes) {
            $this->linkID->commit();
        }

        --$this->transTimes;
    }

    /**
     * 事务回滚
     * @access public
     * @return void
     * @throws PDOException
     */
    public function rollback()
    {
        $this->initConnect(TRUE);

        if(1 == $this->transTimes) {
            $this->linkID->rollBack();
        } else if($this->transTimes > 1 && $this->supportSavepoint()) {
            $this->linkID->exec(
                $this->parseSavepointRollBack('trans' . $this->transTimes)
            );
        }

        $this->transTimes = max(0, $this->transTimes - 1);
    }

    /**
     * 生成回滚到保存点的SQL
     * @param $name
     * @return string
     */
    protected function parseSavepointRollBack($name)
    {
        return 'ROLLBACK TO SAVEPOINT ' . $name;
    }

    /**
     * 批处理执行SQL语句
     * 批处理的指令都认为是execute操作
     * @access public
     * @param array $sqlArray SQL批处理指令
     * @return boolean
     */
    public function batchQuery($sqlArray = [], $bind = [])
    {
        if( !is_array($sqlArray)) {
            return FALSE;
        }
        // 自动启动事务支持
        $this->startTrans();
        try {
            foreach($sqlArray as $sql) {
                $this->execute($sql, $bind);
            }
            // 提交事务
            $this->commit();
        } catch(\Exception $e) {
            $this->rollback();
            throw $e;
        }

        return TRUE;
    }

    /**
     * 执行语句
     * @access public
     * @param string $sql sql指令
     * @param array $bind 参数绑定
     * @return int
     * @throws PDOException
     * @throws \Exception
     */
    public function execute($sql, $bind = [])
    {
        $sql = str_replace('__PREFIX__', C('database.prefix'), $sql); // 替换前缀
        $this->initConnect(TRUE);
        if( !$this->linkID) {
            return FALSE;
        }

        // 记录SQL语句
        $this->queryStr = $sql;
        if($bind) {
            $this->bind = $bind;
        }

        Db::$executeTimes++;
        try {
            // 调试开始
            $this->debug(TRUE);

            //释放前次的查询结果
            if( !empty($this->PDOStatement) && $this->PDOStatement->queryString != $sql) {
                $this->free();
            }
            // 预处理
            if(empty($this->PDOStatement)) {
                $this->PDOStatement = $this->linkID->prepare($sql);
            }
            // 是否为存储过程调用
            $procedure = in_array(strtolower(substr(trim($sql), 0, 4)), ['call', 'exec']);
            // 参数绑定
            if($procedure) {
                $this->bindParam($bind);
            } else {
                $this->bindValue($bind);
            }
            // 执行语句
            $this->PDOStatement->execute();
            // 调试结束
            $this->debug(FALSE);

            $this->numRows = $this->PDOStatement->rowCount();
            return $this->numRows;
        } catch(\PDOException $e) {
            if($this->isBreak($e)) {
                return $this->close()->execute($sql, $bind);
            }
            echo '错误语句:' . $sql;
            throw new PDOException($e, $this->config, $this->getLastsql());
        } catch(Throwable $e) {
            if($this->isBreak($e)) {
                return $this->close()->execute($sql, $bind);
            }
            echo '错误语句:' . $sql;
            throw $e;
        } catch(\Exception $e) {
            if($this->isBreak($e)) {
                return $this->close()->execute($sql, $bind);
            }
            echo '错误语句:' . $sql;
            throw $e;
        }
    }

    /**
     * 获得查询次数
     * @access public
     * @param boolean $execute 是否包含所有查询
     * @return integer
     */
    public function getQueryTimes($execute = FALSE)
    {
        return $execute ? Db::$queryTimes + Db::$executeTimes : Db::$queryTimes;
    }

    /**
     * 获得执行次数
     * @access public
     * @return integer
     */
    public function getExecuteTimes()
    {
        return Db::$executeTimes;
    }

    /**
     * 获取最近插入的ID
     * @access public
     * @param string $sequence 自增序列名
     * @return string
     */
    public function getLastInsID($sequence = null)
    {
        return $this->linkID->lastInsertId($sequence);
    }

    /**
     * 获取返回或者影响的记录数
     * @access public
     * @return integer
     */
    public function getNumRows()
    {
        return $this->numRows;
    }

    /**
     * 获取最近的错误信息
     * @access public
     * @return string
     */
    public function getError()
    {
        if($this->PDOStatement) {
            $error = $this->PDOStatement->errorInfo();
            $error = $error[1] . ':' . $error[2];
        } else {
            $error = '';
        }
        if('' != $this->queryStr) {
            $error .= "\n [ SQL语句 ] : " . $this->getLastsql();
        }
        return $error;
    }

    /**
     * 监听SQL执行
     * @access public
     * @param callable $callback 回调方法
     * @return void
     */
    public function listen($callback)
    {
        self::$event[] = $callback;
    }

    /**
     * 析构方法
     * @access public
     */
    public function __destruct()
    {
        // 释放查询
        if($this->PDOStatement) {
            $this->free();
        }
        // 关闭连接
        $this->close();
    }
}
