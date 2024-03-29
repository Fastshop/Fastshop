<link rel="stylesheet" type="text/css" href="/assets/static/css/base.css"/>
<link rel="shortcut icon" type="image/x-icon" href="{{ $tpshop_config['shop_info_store_ico'] ?: '/public/static/images/logo/storeico_default.png' }}" media="screen"/>
<div class="tpshop-tm-hander">
	<div class="top-hander">
		<div class="[w] pr clearfix">
			<div class="fl">
			    @if(strtolower(ACTION_NAME) != 'goodsinfo') 
                      <link rel="stylesheet" href="/assets/static/css/location.css" type="text/css"><!-- 收货地址，物流运费 -->
                      <div class="sendaddress pr fl">
                          <span>送货至：</span>
                          <!-- <span>深圳<i class="share-a_a1"></i></span>-->
                          <span>
                              <ul class="list1">
                                  <li class="summary-stock though-line">
                                      <div class="dd" style="border-right:0px;width:200px;">
                                          <div class="store-selector add_cj_p">
                                              <div class="text"><div></div><b></b></div>
                                              <div onclick="$(this).parent().removeClass('hover')" class="close"></div>
                                          </div>
                                      </div>
                                  </li>
                              </ul>
                          </span>
                      </div>
					<script src="/public/js/locationJson.js"></script>
				  	<script src="/assets/static/js/location.js"></script>
					<script>doInitRegion();</script>
                 @endif 
				<div class="fl nologin">
					<a class="red" href="{{ U('Home/user/login') }}">登录</a>
					<a href="{{ U('Home/user/reg') }}">注册</a>
				</div>
				<div class="fl islogin hide">
					<a class="red userinfo" href="{{ U('Home/user/index') }}"></a>
					<a  href="{{ U('Home/user/logout') }}"  title="退出" target="_self">安全退出</a>
				</div>
			</div>
			<ul class="top-ri-header fr clearfix">
				<li><a target="_blank" href="{{ U('Home/Order/order_list') }}">我的订单</a></li>
				<li class="spacer"></li>
				<li><a target="_blank" href="{{ U('Home/User/visit_log') }}">我的浏览</a></li>
				<li class="spacer"></li>
				<li><a target="_blank" href="{{ U('Home/User/goods_collect') }}">我的收藏</a></li>
				<li class="spacer"></li>
				<li><a target="_blank" href="http://help.tp-shop.cn/Index/Help/channel/cat_id/5.html">帮助中心</a></li>
				<li class="spacer"></li>
				<li class="hover-ba-navdh">
					<div class="nav-dh">
						<span>网站导航</span>
						<i class="share-a_a1"></i>
					</div>
					<ul class="conta-hv-nav clearfix">
                        <li>
                            <a href="{{ U('Home/Activity/promoteList') }}">优惠活动</a>
                        </li>
                        <li>
                            <a href="{{ U('Home/Activity/pre_sell_list') }}">预售活动</a>
                        </li>
                        <!--<li>
                            <a href="{{ U('Home/Goods/integralMall') }}">拍卖活动</a>
                        </li>-->
                        <li>
                            <a href="{{ U('Home/Goods/integralMall') }}">兑换中心</a>
                        </li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
	<div class="nav-middan-z [w] clearfix">
		<a class="ecsc-logo" href="{{ U('Home/index/index') }}">
            <img src="{{ $tpshop_config['shop_info_store_logo'] ?: '/public/static/images/logo/pc_home_logo_default.png' }}"/>
        </a>
		<div class="ecsc-search">
			<form id="searchForm" name="" method="get" action="{{ U('Home/Goods/search') }}" class="ecsc-search-form">
				<input autocomplete="off" name="q" id="q" type="text" value="{{ \think\Request::instance()->param('q') }}" class="ecsc-search-input" placeholder="请输入搜索关键字...">
				<button type="submit" class="ecsc-search-button">搜索</button>
    			<div class="candidate p">
                    <ul id="search_list"></ul>
                </div>
                <script type="text/javascript">
                    ;(function($){
                        $.fn.extend({
                            donetyping: function(callback,timeout){
                                timeout = timeout || 1e3;
                                var timeoutReference,
                                        doneTyping = function(el){
                                            if (!timeoutReference) return;
                                            timeoutReference = null;
                                            callback.call(el);
                                        };
                                return this.each(function(i,el){
                                    var $el = $(el);
                                    $el.is(':input') && $el.on('keyup keypress',function(e){
                                        if (e.type=='keyup' && e.keyCode!=8) return;
                                        if (timeoutReference) clearTimeout(timeoutReference);
                                        timeoutReference = setTimeout(function(){
                                            doneTyping(el);
                                        }, timeout);
                                    }).on('blur',function(){
                                        doneTyping(el);
                                    });
                                });
                            }
                        });
                    })(jQuery);

                    $('.ecsc-search-input').donetyping(function(){
                        search_key();
                    },500).focus(function(){
                        var search_key = $.trim($('#q').val());
                        if(search_key != ''){
                            $('.candidate').show();
                        }
                    });
                    $('.candidate').mouseleave(function(){
                        $(this).hide();
                    });

                    function searchWord(words){
                        $('#q').val(words);
                        $('#searchForm').submit();
                    }
                    function search_key(){
                        var search_key = $.trim($('#q').val());
                        if(search_key != ''){
                            $.ajax({
                                type:'post',
                                dataType:'json',
                                data: {key: search_key},
                                url:"{{ U('Home/Api/searchKey') }}",
                                success:function(data){
                                    if(data.status == 1){
                                        var html = '';
                                        $.each(data.result, function (n, value) {
                                            html += '<li onclick="searchWord(\''+value.keywords+'\');"><div class="search-item">'+value.keywords+'</div><div class="search-count">约'+value.goods_num+'个商品</div></li>';
                                        });
                                        html += '<li class="close"><div class="search-count">关闭</div></li>';
                                        $('#search_list').empty().append(html);
                                        $('.candidate').show();
                                    }else{
                                        $('#search_list').empty();
                                    }
                                }
                            });
                        }
                    }
                </script>
			</form>
			<div class="keyword clearfix">
				@foreach( $tpshop_config['hot_keywords'] ?: [] as $k => $wd )

				<a class="key-item" href="{{ U('Home/Goods/search',array('q'=>$wd)) }}" target="_blank">{{ $wd }}</a>
				
@endforeach
			</div>
		</div>
		<div class="u-g-cart fr" id="hd-my-cart">
			<a href="{{ U('Home/Cart/index') }}">
			<div class="c-n fl">
				<i class="share-shopcar-index"></i>
				<span>我的购物车</span>
				<em class="shop-nums" id="cart_quantity"></em>
			</div>
			</a>
			<div class="u-fn-cart" id="show_minicart">
				<div class="minicartContent" id="minicart">
				</div>
			</div>
		</div>
	</div>
	<div class="nav [w] clearfix">
		<div class="categorys home_categorys">
			<div class="dt">
				<a href="" target="_blank"><i class="share-a_a2"></i>全部商品分类</a>
			</div>
			<!--全部商品分类-s-->
			<div class="dd">
				<div class="cata-nav" id="cata-nav">
				 @foreach( $goods_category_tree ?: [] as $kr => $v )

					<div class="item">
						@if($v['level'] == 1) 
						<div class="item-left">
							<h3 class="cata-nav-name">
								<div class="cata-nav-wrap">
									<i class="ico ico-nav-{{ $kr-1 }}"></i>
									<a href="{{ U('Home/Goods/goodsList',array('id'=>$v['id'])) }}" title="{{ $v['name'] }}">{{ $v['mobile_name'] }}</a>
								</div>
								<!--<a href="" >手机店</a>-->
							</h3>
						</div>
						 @endif 
						<div class="cata-nav-layer">
							<div class="cata-nav-left">
								 <!-- 如果没有热门分类就隐藏 --> 
								 @if(count((array)$v['hot_cate']) < 1) 
								  @endif 
								<div class="cata-layer-title" @if(count((array)$v['hot_cate']) == 0) style="display:none" @endif >
									@foreach( $v['hot_cate'] ?: [] as $key => $hc )

									<a class="layer-title-item" href="{{ U('Home/Goods/goodsList',['id'=>$hc['id']]) }}">{{ $hc['name'] }}<i class="ico ico-arrow-right">></i></a>
									
@endforeach
								</div>
							 
								<div class="subitems">
									@foreach( $v['tmenu'] ?: [] as $k2 => $v2 )

									@if($v2['parent_id'] == $v['id']) 
										<dl class="clearfix">
											<dt><a href="{{ U('Home/Goods/goodsList',array('id'=>$v2['id'])) }}" target="_blank">{{ $v2['name'] }}</a></dt>
											<dd class="clearfix">
												@foreach( $v2['sub_menu'] ?: [] as $k3 => $v3 )

													@if($v3['parent_id'] == $v2['id']) 
													<a href="{{ U('Home/Goods/goodsList',array('id'=>$v3['id'])) }}" target="_blank">{{ $v3['name'] }}</a>
													 @endif 
												
@endforeach
											</dd>
										</dl>
									 @endif 
									
@endforeach
								</div>
							</div>
							<div class="advertisement_down">
								 @foreach( tpl_adv("","5","","v3","key","100+$kr") as $key => $v3 ) 
								<a href="{{ $v3['ad_link'] }}" @if($v3['target'] == 1) target="_blank" @endif >
									<img class="w-100" src="{{ $v3['ad_code'] }}" title="{{ $v3['title'] }}"/>
								</a>
								 @endforeach 
							</div>
							 @foreach( tpl_adv("","1","","az","key","51") as $key => $az ) 
							<a href="{{ $az['ad_link'] }}" class="cata-nav-rigth" @if($az['target'] == 1) target="_blank" @endif >
								<img class="w-100" src="{{ $az['ad_code'] }}" title="{{ $az['title'] }}" />
							</a>
							 @endforeach 
						</div>
					</div>
					
@endforeach					
				</div>
				<script>
					$('#cata-nav').find('.item').hover(function () {
						$(this).addClass('nav-active').siblings().removeClass('nav-active');
					},function () {
						$(this).removeClass('nav-active');
					})
				</script>
			</div>
			<!--全部商品分类-e-->
		</div>
		<ul class="navitems clearfix" id="navitems">
			<li @if(CONTROLLER_NAME == 'Index') class="selected" @endif ><a href="{{ U('Index/index') }}">首页</a></li>
			 @foreach(tpl_query("SELECT * FROM `__PREFIX__navigation` where is_show = 1 and position = 'top' ORDER BY `sort` DESC") as $k=>$v) 
			<li <?php if($_SERVER['REQUEST_URI']==str_replace('&amp;','&',$v['url'])){ echo "class='selected'";}?>>
       			<a href="{{ $v['url'] }}" @if($v['is_new'] == 1) target="_blank"  @endif  >{{ $v['name'] }}</a>
       		</li>
			 @endforeach 
		</ul>
	</div>
</div>
