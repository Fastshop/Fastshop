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
<body style="background-color: #FFF; overflow: auto;">
<div id="append_parent"></div>
<div id="ajaxwaitid"></div>
<div class="page">
    <div class="fixed-bar">
        <div class="item-title">
            <div class="subject">
                <h3>商城设置</h3>
                <h5>网站全局内容基本选项设置</h5>
            </div>
            <ul class="tab-base nc-row">
                @foreach( $group_list ?: [] as $k => $v )

                    <li><a href="{{ U('System/index',['inc_type'=> $k]) }}" @if($k==$inc_type) class="current" @endif ><span>{{ $v }}</span></a></li>
                
@endforeach
            </ul>
        </div>
    </div>
    <!-- 操作说明 -->
    <div class="explanation" id="explanation">
        <div class="title" id="checkZoom"><i class="fa fa-lightbulb-o"></i>
            <h4 title="提示相关设置操作时应注意的要点">操作提示</h4>
            <span id="explanationZoom" title="收起提示"></span></div>
        <ul>
            <li>系统平台全局设置,包括基础设置、购物、短信、邮件、水印和分销等相关模块。</li>
        </ul>
    </div>
    <form method="post" id="handlepost" action="{{ U('System/handle') }}">
        <input type="hidden" name="inc_type" value="{{ $inc_type }}">
        <div class="ncap-form-default">
            <dl class="row">
                <dt class="tit">
                    <label for="smtp_server">邮件发送服务器(SMTP)</label>
                </dt>
                <dd class="opt">
                    <input id="smtp_server" name="smtp_server" value="{{ $config['smtp_server'] }}" class="input-txt" type="text"/>
                    <p class="notic">发送邮箱的smtp地址。如: smtp.gmail.com或smtp.qq.com</p>
                </dd>
            </dl>
            <dl class="row">
                <dt class="tit">
                    <label for="smtp_port">服务器(SMTP)端口</label>
                </dt>
                <dd class="opt">
                    <input id="smtp_port" name="smtp_port" value="{{ $config['smtp_port'] ?: 25 }}" class="input-txt" type="text"/>
                    <p class="notic">smtp的端口。默认为25。具体请参看各STMP服务商的设置说明 （如果使用Gmail，请将端口设为465）</p>
                </dd>
            </dl>
            <dl class="row">
                <dt class="tit">
                    <label for="smtp_user">邮箱账号</label>
                </dt>
                <dd class="opt">
                    <input id="smtp_user" name="smtp_user" value="{{ $config['smtp_user'] }}" class="input-txt" type="text"/>
                    <p class="notic">使用发送邮件的邮箱账号</p>
                </dd>
            </dl>
            <dl class="row">
                <dt class="tit">
                    <label for="smtp_pwd">邮箱密码/授权码</label>
                </dt>
                <dd class="opt">
                    <input id="smtp_pwd"  name="smtp_pwd" value="{{ $config['smtp_pwd'] }}" class="input-txt" type="text"/>
                    <p class="notic">使用发送邮件的邮箱密码,或者授权码。具体请参看各STMP服务商的设置说明</p>
                </dd>
            </dl>
            <dl class="row">
                <dt class="tit">注册启用邮箱</dt>
                <dd class="opt">
                    <div class="onoff">
                        <label for="regis_smtp_enable1" class="cb-enable @if($config['regis_smtp_enable'] == 1) selected @endif ">开启</label>
                        <label for="regis_smtp_enable0" class="cb-disable @if($config['regis_smtp_enable'] == 0) selected @endif ">关闭</label>
                        <input id="regis_smtp_enable1" name="regis_smtp_enable" @if($config['regis_smtp_enable'] == 1) checked="checked" @endif  value="1" type="radio">
                        <input id="regis_smtp_enable0" name="regis_smtp_enable" @if($config['regis_smtp_enable'] == 0) checked="checked" @endif  value="0" type="radio">
                    </div>
                    <p class="notic">用户注册时使用邮箱验证</p>
                </dd>
            </dl>
            <dl class="row">
                <dt class="tit">测试接收的邮件地址</dt>
                <dd class="opt">
                    <input value="{{ $config['test_eamil'] }}" name="test_eamil" id="test_eamil" class="input-txt" type="text">
                    <input value="测试" class="input-btn" onclick="sendEmail()" type="button">
                    <p class="notic">首次请先保存配置再测试</p>
                </dd>
            </dl>
            <div class="bot"><a href="JavaScript:void(0);" class="ncap-btn-big ncap-btn-green" onclick="adsubmit();">确认提交</a></div>
        </div>
    </form>
</div>
<div id="goTop"><a href="JavaScript:void(0);" id="btntop"><i class="fa fa-angle-up"></i></a><a href="JavaScript:void(0);" id="btnbottom"><i class="fa fa-angle-down"></i></a></div>
<script>
    var flag = true;
    function adsubmit(){
        check_form();
        if(flag){
            $('#handlepost').submit();
        }
    }

    function check_form(){
        if($('input[name="smtp_server"]').val() == ''){
            layer.alert("请填写邮件发送服务器地址！",{icon:2});
            flag = false;
            return;
        }
        if($('input[name="smtp_user"]').val() == '' || !checkEmail($('input[name="smtp_user"]').val())){
            layer.alert("请填写正确的邮箱账号！",{icon:2});
            flag = false;
            return;
        }
        if($('input[name="smtp_pwd"]').val() == ''){
            layer.alert("请填写发送邮箱密码！",{icon:2});
            flag = false;
            return;
        }
    }
    function sendEmail() {
        var email = $('#test_eamil').val();
        if (email == '') {
            layer.alert("请填写正确的测试邮箱账号！",{icon:2});
            return;
        } else {
            $.ajax({
                type: "post",
                data: $('#handlepost').serialize(),
                dataType: 'json',
                url: "{{ U('System/send_email') }}",
                success: function (res) {
                    if (res.status == 1) {
                        layer.msg('发送成功', {icon: 1});
                    } else {
                        layer.msg(res.msg, {icon: 2, time: 2000});
                    }
                }
            })
        }
    }
</script>
</body>
</html>