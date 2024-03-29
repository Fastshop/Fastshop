<!doctype html>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<!-- Apple devices fullscreen -->
<meta name="apple-mobile-web-app-capable" content="yes">
<!-- Apple devices fullscreen -->
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
<link href="/public/static/css/main.css" rel="stylesheet" type="text/css">
<link href="/public/static/css/page.css" rel="stylesheet" type="text/css">
<link href="/public/static/font/css/font-awesome.min.css" rel="stylesheet" />
<!--[if IE 7]>
  <link rel="stylesheet" href="/public/static/font/css/font-awesome-ie7.min.css">
<![endif]-->
<link href="/public/static/js/jquery-ui/jquery-ui.min.css" rel="stylesheet" type="text/css"/>
<link href="/public/static/js/perfect-scrollbar.min.css" rel="stylesheet" type="text/css"/>
<style type="text/css">html, body { overflow: visible;}</style>
<script type="text/javascript" src="/public/static/js/jquery.js"></script>
<script type="text/javascript" src="/public/static/js/jquery-ui/jquery-ui.min.js"></script>
<script type="text/javascript" src="/public/static/js/layer/layer.js"></script><!-- 弹窗js 参考文档 http://layer.layui.com/-->
<script type="text/javascript" src="/public/static/js/admin.js"></script>
<script type="text/javascript" src="/public/static/js/jquery.validation.min.js"></script>
<script type="text/javascript" src="/public/static/js/common.js"></script>
<script type="text/javascript" src="/public/static/js/perfect-scrollbar.min.js"></script>
<script type="text/javascript" src="/public/static/js/jquery.mousewheel.js"></script>
<script src="/public/js/myFormValidate.js"></script>
<script src="/public/js/myAjax2.js"></script>
<script src="/public/js/global.js"></script>
    <script type="text/javascript">
    function delfunc(obj){
    	layer.confirm('确认删除？', {
    		  btn: ['确定','取消'] //按钮
    		}, function(){
    		    // 确定
   				$.ajax({
   					type : 'post',
   					url : $(obj).attr('data-url'),
   					data : {act:'del',del_id:$(obj).attr('data-id')},
   					dataType : 'json',
   					success : function(data){
						layer.closeAll();
   						if(data.status==1){
                            layer.msg(data.msg, {icon: 1, time: 2000},function(){
                                location.href = '';
//                                $(obj).parent().parent().parent().remove();
                            });
   						}else{
   							layer.msg(data, {icon: 2,time: 2000});
   						}
   					}
   				})
    		}, function(index){
    			layer.close(index);
    			return false;// 取消
    		}
    	);
    }

    function selectAll(name,obj){
    	$('input[name*='+name+']').prop('checked', $(obj).checked);
    }

    function get_help(obj){

		window.open("http://www.tp-shop.cn/");
		return false;

        layer.open({
            type: 2,
            title: '帮助手册',
            shadeClose: true,
            shade: 0.3,
            area: ['70%', '80%'],
            content: $(obj).attr('data-url'),
        });
    }

    function delAll(obj,name){
    	var a = [];
    	$('input[name*='+name+']').each(function(i,o){
    		if($(o).is(':checked')){
    			a.push($(o).val());
    		}
    	})
    	if(a.length == 0){
    		layer.alert('请选择删除项', {icon: 2});
    		return;
    	}
    	layer.confirm('确认删除？', {btn: ['确定','取消'] }, function(){
    			$.ajax({
    				type : 'get',
    				url : $(obj).attr('data-url'),
    				data : {act:'del',del_id:a},
    				dataType : 'json',
    				success : function(data){
						layer.closeAll();
    					if(data == 1){
    						layer.msg('操作成功', {icon: 1});
    						$('input[name*='+name+']').each(function(i,o){
    							if($(o).is(':checked')){
    								$(o).parent().parent().remove();
    							}
    						})
    					}else{
    						layer.msg(data, {icon: 2,time: 2000});
    					}
    				}
    			})
    		}, function(index){
    			layer.close(index);
    			return false;// 取消
    		}
    	);
    }

    /**
     * 全选
     * @param obj
     */
    function checkAllSign(obj){
        $(obj).toggleClass('trSelected');
        if($(obj).hasClass('trSelected')){
            $('#flexigrid > table>tbody >tr').addClass('trSelected');
        }else{
            $('#flexigrid > table>tbody >tr').removeClass('trSelected');
        }
    }
    /**
     * 批量公共操作（删，改）
     * @returns {boolean}
     */
    function publicHandleAll(type){
        var ids = '';
        $('#flexigrid .trSelected').each(function(i,o){
//            ids.push($(o).data('id'));
            ids += $(o).data('id')+',';
        });
        if(ids == ''){
            layer.msg('至少选择一项', {icon: 2, time: 2000});
            return false;
        }
        publicHandle(ids,type); //调用删除函数
    }
    /**
     * 公共操作（删，改）
     * @param type
     * @returns {boolean}
     */
    function publicHandle(ids,handle_type){
        layer.confirm('确认当前操作？', {
                    btn: ['确定', '取消'] //按钮
                }, function () {
                    // 确定
                    $.ajax({
                        url: $('#flexigrid').data('url'),
                        type:'post',
                        data:{ids:ids,type:handle_type},
                        dataType:'JSON',
                        success: function (data) {
                            layer.closeAll();
                            if (data.status == 1){
                                layer.msg(data.msg, {icon: 1, time: 2000},function(){
                                    location.href = data.url;
                                });
                            }else{
                                layer.msg(data.msg, {icon: 2, time: 2000});
                            }
                        }
                    });
                }, function (index) {
                    layer.close(index);
                }
        );
    }
</script>  

</head>
<style>
    .flexigrid .pReload{float:right;}
    .flexigrid .bDiv {min-height: 0px;}
</style>
<body style="background-color: rgb(255, 255, 255); overflow: auto; cursor: default; -moz-user-select: inherit;">
<div id="append_parent"></div>
<div id="ajaxwaitid"></div>
<div class="page">
    <div class="fixed-bar">
        <div class="item-title">
            <div class="subject">
                <h3>运费模板</h3>
                <h5>运费模板列表与管理</h5>
            </div>
        </div>
    </div>
    <!-- 操作说明 -->
    <div id="explanation" class="explanation" style="color: rgb(44, 188, 163); background-color: rgb(237, 251, 248); width: 99%; height: 100%;">
        <div id="checkZoom" class="title"><i class="fa fa-lightbulb-o"></i>
            <h4 title="提示相关设置操作时应注意的要点">操作提示</h4>
            <span title="收起提示" id="explanationZoom" style="display: block;"></span>
        </div>
        <ul>
            <li>运费模板, 由平台设置管理.</li>
        </ul>
    </div>
    <div class="flexigrid" style="width: 987px;">
        <div class="tDiv2">
            <div class="fbutton">
                <a href="{{ U('Freight/info') }}">
                    <div class="add" title="新增运费模板">
                        <span>新增运费模板</span>
                    </div>
                </a>
            </div>
        </div>
        <div style="clear:both"></div>
    </div>
     @foreach( $template_list ?: [] as $i => $template )

        <div class="flexigrid" style="width: 987px;">
            <div class="mDiv">
                <div class="ftitle">
                    <h3>{{ $template['template_name'] }}</h3>
                    <h5>{{ $template['type_desc'] }}</h5>
                </div>
                <div title="删除运费模板" data-template-id="{{ $template['template_id'] }}" class="pReload delete_template"><i class="fa fa-trash-o"></i></div>
                <a href="{{ U('Freight/info',['template_id'=>$template['template_id']]) }}"><div title="编辑运费模板" class="pReload"><i class="fa fa-pencil-square-o"></i></div></a>
            </div>
            <div class="hDiv">
                <div class="hDivBox">
                    <table cellspacing="0" cellpadding="0">
                        <thead>
                        <tr>
                            <th align="left" abbr="article_title" axis="col3" class="">
                                <div style="text-align: center; width: 300px;" class="">配送区域</div>
                            </th>
                            <th align="left" abbr="ac_id" axis="col4" class="">
                                <div style="text-align: center; width: 150px;" class="">首{{ $template['type_desc'] }}({{ $template['unit_desc'] }})</div>
                            </th>
                            <th align="left" abbr="ac_id" axis="col4" class="">
                                <div style="text-align: center; width: 150px;" class="">运费(元)</div>
                            </th>
                            <th align="center" abbr="article_show" axis="col5" class="">
                                <div style="text-align: center; width: 150px;" class="">续{{ $template['type_desc'] }}({{ $template['unit_desc'] }})</div>
                            </th>
                            <th align="center" abbr="article_time" axis="col6" class="">
                                <div style="text-align: center; width: 150px;" class="">运费(元)</div>
                            </th>
                        </tr>
                        </thead>
                    </table>
                </div>
            </div>
            <div class="bDiv" style="height: auto;">
                <div>
                    <table>
                        <tbody>
                         @foreach( $template['freightConfig'] ?: [] as $i => $config )

                            <tr>
                                <td align="left" class="">
                                    <div style="text-align: center; width: 300px;">
                                        @if($config['is_default'] == 1) 
                                            中国
                                            @else
                                             @foreach( $config['freightRegion'] ?: [] as $i => $freight_region )

                                                {{ $freight_region['region']['name'] }},
                                            
@endforeach
                                         @endif 
                                    </div>
                                </td>
                                <td align="left" class="">
                                    <div style="text-align: center; width: 150px;">{{ $config['first_unit'] }}</div>
                                </td>
                                <td align="left" class="">
                                    <div style="text-align: center; width: 150px;">{{ $config['first_money'] }}</div>
                                </td>
                                <td align="left" class="">
                                    <div style="text-align: center; width: 150px;">{{ $config['continue_unit'] }}</div>
                                </td>
                                <td align="left" class="">
                                    <div style="text-align: center; width: 150px;">{{ $config['continue_money'] }}</div>
                                </td>
                            </tr>
                        
@endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    
@endforeach
</div>
{{ $page }}
<script>
    $(document).ready(function(){
        // 表格行点击选中切换
        $('#flexigrid > table>tbody >tr').click(function(){
            $(this).toggleClass('trSelected');
        });

    });
    //删除运费确定事件
    $(function () {
        $(document).on("click", '.delete_template', function (e) {
            var template_id = $(this).data('template-id');
            layer.confirm('确认删除？', {
                        btn: ['确定', '取消'] //按钮
                    }, function () {
                        $.ajax({
                            type: 'post',
                            url: "{{ U('Freight/delete') }}",
                            data: {template_id: template_id},
                            dataType: 'json',
                            success: function (data) {
                                layer.closeAll();
                                if (data.status == 1) {
                                    layer.msg(data.msg, {icon: 1, time: 2000}, function () {
                                        window.location.reload();
                                    });
                                } else if (data.status == -1) {
                                    layer.confirm(data.msg, {
                                                btn: ['确定', '取消'] //按钮
                                            }, function () {
                                                $.ajax({
                                                    type: 'post',
                                                    url: "{{ U('Freight/delete') }}",
                                                    data: {template_id: template_id, action: 'confirm'},
                                                    dataType: 'json',
                                                    success: function (data) {
                                                        layer.closeAll();
                                                        if (data.status == 1) {
                                                            layer.msg(data.msg, {icon: 1, time: 2000}, function () {
                                                                window.location.reload();
                                                            });
                                                        } else if (data.status == -1) {
                                                            layer.msg(data.msg, {icon: 2, time: 2000});
                                                        } else {
                                                            layer.msg(data.msg, {icon: 2, time: 2000});
                                                        }
                                                    }
                                                })
                                            }, function (index) {
                                                layer.close(index);
                                            }
                                    );
                                } else {
                                    layer.msg(data.msg, {icon: 2, time: 2000});
                                }
                            }
                        })
                    }, function (index) {
                        layer.close(index);
                    }
            );
        })
    })
</script>
</body>
</html>