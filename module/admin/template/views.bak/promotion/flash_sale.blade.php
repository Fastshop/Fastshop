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
<script src="/public/static/js/layer/laydate/laydate.js"></script>
<body style="background-color: rgb(255, 255, 255); overflow: auto; cursor: default; -moz-user-select: inherit;">
<div id="append_parent"></div>
<div id="ajaxwaitid"></div>
<div class="page">
	<div class="fixed-bar">
		<div class="item-title">
			<div class="subject">
				<h3>抢购管理</h3>
				<h5>网站系统抢购活动审核与管理</h5>
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
			<li>抢购管理, 由平台设置管理.</li>
			<li>抢购活动开始结束时间跨度必须为两个小时，因为前台抢购活动展示是以每两个小时为一场，否则前台无法展示</li>
		</ul>
	</div>
	<div class="flexigrid">
		<div class="mDiv">
			<div class="ftitle">
				<h3>抢购活动列表</h3>
				<h5>(共{{ $pager->totalRows }}条记录)</h5>
                <div class="fbutton">
                    <a href="http://help.tp-shop.cn/Index/Help/info/cat_id/5/id/47.html" target="_blank">
                        <div class="add" title="帮助">
                            <span>帮助</span>
                        </div>
                    </a>
                </div>
			</div>
			<a href=""><div title="刷新数据" class="pReload"><i class="fa fa-refresh"></i></div></a>
		</div>
		<div class="hDiv">
			<div class="hDivBox">
				<table cellspacing="0" cellpadding="0">
					<thead>
					<tr>
						<th class="sign" axis="col0">
							<div style="width: 24px;"><i class="ico-check"></i></div>
						</th>
						<th align="left" abbr="article_title" axis="col3" class="">
							<div style="text-align: left; width: 240px;" class="">活动名称</div>
						</th>
						<th align="left" abbr="article_time" axis="col6" class="">
							<div style="text-align: left; width: 240px;" class="">活动商品</div>
						</th>
						<th align="left" abbr="ac_id" axis="col4" class="">
							<div style="text-align: left; width: 50px;" class="">抢购总量</div>
						</th>
						<th align="center" abbr="article_show" axis="col5" class="">
							<div style="text-align: center; width: 50px;" class="">抢购价格</div>
						</th>
						<th align="center" abbr="article_time" axis="col6" class="">
							<div style="text-align: center; width: 120px;" class="">开始时间</div>
						</th>
						<th align="center" abbr="article_time" axis="col6" class="">
							<div style="text-align: center; width: 120px;" class="">结束时间</div>
						</th>
						<th align="center" abbr="article_time" axis="col6" class="">
							<div style="text-align: center; width: 50px;" class="">已购买</div>
						</th>
						<th align="center" abbr="article_time" axis="col6" class="">
							<div style="text-align: center; width: 50px;" class="">订单数量</div>
						</th>
						<th align="center" abbr="article_time" axis="col6" class="">
							<div style="text-align: center; width: 50px;" class="">活动状态</div>
						</th>
						<th align="center" abbr="article_time" axis="col6" class="">
							<div style="text-align: center; width: 80px;" class="">是否启动</div>
						</th>
						<th align="left" axis="col1" class="handle">
							<div style="text-align: center; width: 150px;">操作</div>
						</th>
						<th style="width:100%" axis="col7">
							<div></div>
						</th>
					</tr>
					</thead>
				</table>
			</div>
		</div>
		<div class="tDiv">
			<div class="tDiv2">
				<a href="{{ U('Promotion/flash_sale_info') }}">
					<div class="fbutton">
						<div title="添加活动" class="add">
							<span><i class="fa fa-plus"></i>添加活动</span>
						</div>
					</div>
				</a>
			</div>
			<div style="clear:both"></div>
		</div>
		<div class="bDiv" style="height: auto;">
			<div id="flexigrid" cellpadding="0" cellspacing="0" border="0">
				<table>
					<tbody>
					@foreach( $prom_list ?: [] as $k => $vo )

						<tr>
							<td class="sign">
								<div style="width: 24px;"><i class="ico-check"></i></div>
							</td>
							<td align="left" class="">
								<div style="text-align: left; width: 240px;"><a href="{{ U('Home/Goods/goodsInfo',['id'=>$vo['goods_id'],'item_id'=>$vo['item_id']]) }}">{{ $vo['title'] }}</a></div>
							</td>
							<td align="left" class="">
								<div style="text-align: left; width: 240px;">{{ $vo['goods_name'] }}</div>
							</td>
							<td align="left" class="">
								<div style="text-align: center; width: 50px;">{{ $vo['goods_num'] }}</div>
							</td>
							<td align="left" class="">
								<div style="text-align: center; width: 50px;">{{ $vo['price'] }}</div>
							</td>
							<td align="left" class="">
								<div style="text-align: center; width: 120px;">{{ date('Y-m-d H:i:s',$vo['start_time']) }}</div>
							</td>
							<td align="left" class="">
								<div style="text-align: center; width: 120px;">{{ date('Y-m-d H:i:s',$vo['end_time']) }}</div>
							</td>
							<td align="left" class="">
								<div style="text-align: center; width: 50px;">{{ $vo['buy_num'] }}</div>
							</td>
							<td align="left" class="">
								<div style="text-align: center; width: 50px;">{{ $vo['order_num'] }}</div>
							</td>
							<td align="left" class="">
								<div style="text-align: center; width: 50px;">{{ $vo['status_desc'] }}</div>
							</td>

							<td align="left" class="">
								<div style="text-align: center; width: 80px;">
									@if($vo['is_end'] == 0) 
										<span class="yes" onClick="changeTableVal2('flash_sale','id','{{ $vo['id'] }}','is_end',this,'是','否','{{ $vo['status_desc'] }}')" ><i class="fa fa-check-circle"></i>是</span>
										@else
										<span class="no" onClick="changeTableVal2('flash_sale','id','{{ $vo['id'] }}','is_end',this,'是','否')" ><i class="fa fa-ban"></i>否</span>
									 @endif 
								</div>
							</td>


							<td align="left" class="handle">
								<div style="text-align: left; width: 150px; max-width:170px;">
									<a class="btn blue" href="{{ U('Promotion/flash_sale_info',array('id'=>$vo['id'])) }}"><i class="fa fa-pencil-square-o"></i>编辑</a>
									<a class="btn red" href="javascript:void(0)" data-url="{{ U('Promotion/flash_sale_del') }}" data-id="{{ $vo['id'] }}" onClick="delfun(this)"><i class="fa fa-trash-o"></i>删除</a>
								</div>
							</td>
							<td align="" class="" style="width: 100%;">
								<div>&nbsp;</div>
							</td>
						</tr>
					
@endforeach
					</tbody>
				</table>
			</div>
			<div class="iDiv" style="display: none;"></div>
		</div>
		<!--分页位置-->
		{{ $page }} </div>
</div>
<script>
	$(document).ready(function(){
		// 表格行点击选中切换
		$('#flexigrid > table>tbody >tr').click(function(){
			$(this).toggleClass('trSelected');
		});

		// 点击刷新数据
		$('.fa-refresh').click(function(){
			location.href = location.href;
		});
	});

    // 修改指定表的指定字段值 包括有按钮点击切换是否 或者 排序 或者输入框文字
    function changeTableVal2(table, id_name, id_value, field, obj,yes,no,status) {
        if (status == '进行中') {
            layer.confirm('活动进行中，确认关闭？', {
                btn: ['确定', '取消'] //按钮
            },function () {
                var value = $(obj).val();
                if(yes == '' || typeof(yes)== 'undefined')yes='是';
                if(no == '' || typeof(no) == 'undefined')no='否';
                if ($(obj).hasClass('yes')) // 图片点击是否操作
                {
                    $(obj).removeClass('no').addClass('yes');
                    $(obj).html("<i class='fa fa-check-circle'></i>"+yes+"");
                    value = 1;
                } else if ($(obj).hasClass('yes')) { // 图片点击是否操作
                    $(obj).removeClass('yes').addClass('no');
                    $(obj).html("<i class='fa fa-ban'></i>"+no+"");
                    value = 0;
                }

                $.ajax({
                    url: "/index.php?m=Admin&c=promotion&a=change_prom_is_end&id="+id_value,
                    dataType :'JSON',
                    success: function (data) {
                        console.log(data)
                        if (data.status == 1) {
                            if (!$(obj).hasClass('no') && !$(obj).hasClass('yes'))
                                layer.msg('更新成功', {icon: 1});
                            window.location.reload();
                        }else{
                            layer.msg(data.msg, {icon: 2});
						}
                    }
                });
            },function (index) {
                layer.close(index);
				return false;
            })
        }else{
            var value = $(obj).val();
            if(yes == '' || typeof(yes)== 'undefined')yes='是';
            if(no == '' || typeof(no) == 'undefined')no='否';
            if ($(obj).hasClass('yes')) // 图片点击是否操作
            {
                $(obj).removeClass('no').addClass('yes');
                $(obj).html("<i class='fa fa-check-circle'></i>"+yes+"");
                value = 1;
            } else if ($(obj).hasClass('yes')) { // 图片点击是否操作
                $(obj).removeClass('yes').addClass('no');
                $(obj).html("<i class='fa fa-ban'></i>"+no+"");
                value = 0;
            }

            $.ajax({
                url: "/index.php?m=Admin&c=promotion&a=change_prom_is_end&id="+id_value,
                dataType :'JSON',
                success: function (data) {
                    console.log(data)
                    if (data.status == 1) {
                        if (!$(obj).hasClass('no') && !$(obj).hasClass('yes'))
                            layer.msg('更新成功', {icon: 1});
                        window.location.reload();
                    }else{
                        layer.msg(data.msg, {icon: 2});
                    }
                }
            });
		}

    }

	function changeStatus(status,id,tab){
		if(status>1){
			layer.confirm('确认删除？', {btn: ['确定','取消']}, function(){
				$.ajax({
					type : 'GET',
					url : "{{ U('Promotion/activity_handle') }}",
					data : {'id':id,'tab':tab,'status':status},
					dataType :'JSON',
					success : function(res){
						layer.closeAll();
						if(res == 1){
							layer.msg('操作成功', {icon: 1});
							window.location.reload();
						}else{
							layer.msg('操作失败', {icon: 2,time: 2000});
						}
					}
				});
			}, function(index){
				layer.close(index);
				return false;// 取消
			});
		}else{
			$.ajax({
				type : 'GET',
				url : "{{ U('Promotion/activity_handle') }}",
				data : {'id':id,'tab':tab,'status':status},
				dataType :'JSON',
				success : function(res){
					if(res == 1){
						layer.msg('操作成功', {icon: 1});
						window.location.reload();
					}else{
						layer.msg('操作失败', {icon: 2,time: 2000});
					}
					layer.closeAll();
				}
			});
		}
	}

	function delfun(obj) {
		// 删除按钮
		layer.confirm('确认删除？', {
			btn: ['确定', '取消'] //按钮
		}, function () {
			$.ajax({
				type: 'post',
				url: $(obj).attr('data-url'),
				data : {act:'del',del_id:$(obj).attr('data-id')},
				dataType: 'json',
				success: function (data) {
					layer.closeAll();
					if (data) {
						$(obj).parent().parent().parent().remove();
					} else {
						layer.alert('删除失败', {icon: 2});  //alert('删除失败');
					}
				}
			})
		}, function () {
			layer.closeAll();
		});
	}
</script>
</body>
</html>