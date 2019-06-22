<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>积分商城-{{ $tpshop_config['shop_info_store_title'] }}</title>
		<link rel="stylesheet" type="text/css" href="/assets/static/css/tpshop.css" />
		<link rel="shortcut icon" type="image/x-icon" href="{{ $tpshop_config['shop_info_store_ico'] ?: '/public/static/images/logo/storeico_default.png' }}" media="screen"/>
		<script src="/assets/static/js/jquery-1.11.3.min.js" type="text/javascript" charset="utf-8"></script>
		<script src="/public/js/layer/layer-min.js"></script>
		<script src="/public/js/global.js"></script>
		<script src="/public/js/pc_common.js"></script>
	</head>
	<body>
	<!--header-s-->
	<link rel="stylesheet" type="text/css" href="/assets/static/css/base.css"/>
<link rel="shortcut icon" type="image/x-icon" href="{{ $tpshop_config['shop_info_store_ico'] ?: '/public/static/images/logo/storeico_default.png' }}" media="screen"/>
<div class="tpshop-tm-hander">
	<div class="top-hander">
		<div class="w1224 pr clearfix">
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
	<div class="nav-middan-z w1224 clearfix">
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
	<div class="nav w1224 clearfix">
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

		<!--header-e-->
		<div class="search-box p">
			<div class="w1224">
				<div class="search-path fl">
					<a href="{{ U('Home/Goods/integralMall') }}">全部结果</a>
					<i class="litt-xyb"></i>
					<span>积分商城</span>
				</div>
				<div class="search-clear fr">
					<span><a href="{{ U('Home/Goods/integralMall') }}">清空筛选条件</a></span>
				</div>
			</div>
		</div>
    <!--分类-s-->
		<div class="search-opt classify">
			<div class="w1224">
				<div class="opt-list">
					<dl class="brand-section">
						<dt>分类:</dt>
						<dd class="ri-section">
							<div class="lf-list">
								<div class="brand-list">
									<div class="clearfix p">
										<a href="{{ U('Home/Goods/integralMall') }}">
											<span @if(\think\Request::instance()->param('id') == '') class="red" @endif >全部</span>
										</a>
                                         @foreach( $goods_category ?: [] as $i => $gc )

                                            <a href="{{ U('Home/Goods/integralMall',array('id'=>$gc['id'])) }}">
                                                <span @if(\think\Request::instance()->param('id') == $gc['id']) class="red" @endif >{{ $gc['name'] }}</span>
                                            </a>
                                        
@endforeach
									</div>
								</div>
							</div>
						</dd>
					</dl>
				</div>
			</div>
		</div>
    <!--分类-e-->
		<div class="shop-list-tour ma-to-20 p">
			<div class="w1224">
				<div class="stsho pre-sts intergra">
					<div class="sx_topb presellall">
						<div class="f-sort fl">
							<ul>
								<li @if(\think\Request::instance()->param('brandType') == '0') class="red" @endif ><a href="{{ U('Home/Goods/integralMall',array('id'=>I('get.id'),'brandType'=>0)) }}">全部<i class="jta jta-w"></i></a></li>
								<li @if(\think\Request::instance()->param('brandType') == '1') class="red" @endif ><a href="{{ U('Home/Goods/integralMall',array('id'=>I('get.id'),'brandType'=>1)) }}">积分+金额<i class="jta"></i></a></li>
								<li @if(\think\Request::instance()->param('brandType') == '2') class="red" @endif ><a href="{{ U('Home/Goods/integralMall',array('id'=>I('get.id'),'brandType'=>2)) }}">全积分<i class="jta"></i></a></li>
							</ul>
						</div>
						<div class="f-total fr">
                            <div class="all-sec">共<span>{{ $goods_list_count }}</span>个商品</div>
							<div class="all-fy">
                                <a @if($nowPage > 1) href="{{ U('Home/Goods/integralMall',array_merge(I('get.'),array('p'=>$nowPage-1))) }}"  @endif >&lt;</a>
                                <p class="fy-y"><span class="z-cur">{{ $nowPage }}</span>/<span>{{ $totalPages }}</span></p>
                                <a @if(($nowPage+1) < $totalPages) href="{{ U('Home/Goods/integralMall',array('p'=>$nowPage+1)) }}" @endif >&gt;</a>
                            </div>
						</div>
					</div>
					<div class="he-rin p"></div>
                    <!--商品-s-->
					<div class="jpateki p">
                        @if(tp_empty($goods_list)) 
                            <p class="ncyekjl" style="font-size: 16px;margin:100px auto;text-align: center;">--暂无此类商品--</p>
                        @else
						     @foreach( $goods_list ?: [] as $i => $goods )

							@if(($i-1)%3 == 0) 
								<ul>
							 @endif 
								<li @if($i%3 == 0) class="mar0" @endif >
									<div class="sbox">
										<div class="contelim">
											<img src="{{ goods_thum_images($goods['goods_id'],165,188) }}"/>
										</div>
										<div class="contifo">
											<p class="shop_name"><a href="{{ U('Home/Goods/goodsInfo',array('id'=>$goods['goods_id'])) }}">{{ $goods['goods_name'] }}</a></p>
											<p>参考价：￥<span class="lithe">{{ $goods['shop_price'] }}</span></p>
											<p>换购价：<span class="red">￥<em>
												<?php 
													if(empty($point_rate)) $point_rate = 10;
													$integral_price = $goods['shop_price']-$goods['exchange_integral']/$point_rate;
													echo round($integral_price,2)."+".$goods['exchange_integral'];
												 ?>
											</em>积分</span>
											<div class="duchan">
												<span><em>{{ $goods['sales_sum'] }}</em>人换购</span>
												<a href="{{ U('Home/Goods/goodsInfo',array('id'=>$goods['goods_id'])) }}">立即换购</a>
											</div>
										</div>
									</div>
								</li>
							@if($i%3 == 0) 
								</ul>
							 @endif 
						
@endforeach
                         @endif 
					</div>
                    <div class="djs">
                        {{ $page }}
                    </div>
                    <!--商品-e-->
                    <!--精品推荐-s-->
					<div class="reco-bouti">
						<h2 class="litt-titt">精品推荐</h2>
						<div class="reacommque">
							<ul>
								 @foreach(tpl_query("select * from `__PREFIX__goods` where is_on_sale = 1 and exchange_integral > 0 and is_recommend = 1 and is_virtual = 0 limit 5") as $k=>$goods) 
									<li>
									<div class="boxque">
										<img src="{{ goods_thum_images($goods['goods_id'],165,188) }}"/>
										<p class="shop_name"><a href="">{{ $goods['goods_name'] }}</a></p>
										<div class="coan-j p">
											<div class="fl">
												<p class="ckf">参考价：￥<span class="lithe">{{ $goods['shop_price'] }}</span></p>
												<p class="ckf">换购价：<span class="red">￥<em>
                                                    <!--{{ $goods['exchange_integral_price'] }}-->
                                                    <!--+{{ $goods['exchange_integral'] }}-->
												<?php 
													if(empty($point_rate)) $point_rate = 10;
													$integral_price = $goods['shop_price']-$goods['exchange_integral']/$point_rate;
													echo round($integral_price,2)."+".$goods['exchange_integral'];
												 ?>
                                                </em>积分</span></p>
											</div>
											<div class="fr">
												<a class="changot" href="{{ U('Home/Goods/goodsInfo',array('id'=>$goods['goods_id'])) }}">立即换购</a>
											</div>
										</div>
									</div>
								</li>
								 @endforeach 
							</ul>
						</div>
					</div>
                    <!--精品推荐-e-->
                    <!--热门兑换-s-->
					<div class="hotchane">
						<h2 class="litt-titt">热门兑换</h2>
						<div class="hot-change">
							<ul>
								 @foreach(tpl_query("select * from `__PREFIX__goods` where is_on_sale = 1 and exchange_integral > 0 and is_hot = 1 and is_virtual = 0 limit 7") as $k=>$goods) 
									<li @if(($k+1)%5 == 0) class="mar0" @endif >
										<div class="lit-shcha">
											<img src="{{ goods_thum_images($goods['goods_id'],165,188) }}"/>
											<div class="duchan">
												<span><em>{{ $goods['sales_sum'] }}</em>人换购</span>
												<a href="{{ U('Home/Goods/goodsInfo',array('id'=>$goods['goods_id'])) }}">立即换购</a>
											</div>
										</div>
									</li>
								 @endforeach 
							</ul>
						</div>
					</div>
                    <!--热门兑换-e-->
				</div>
			</div>
		</div>
		<!--footer-s-->
		<div class="footer p">
            <div class="tpshop-service">
	<ul class="w1224 clearfix">
		<li>
			<i class="ico ico-day7">{{ $tpshop_config['shopping_auto_service_date'] }}</i>
			<p class="service">{{ $tpshop_config['shopping_auto_service_date'] }}天无理由退货</p>
		</li>
		<li>
			<i class="ico ico-day15">15</i>
			<p class="service">15天免费换货</p>
		</li>
		<li>
			<i class="ico ico-quality"></i>
			<p class="service">正品行货 品质保障</p>
		</li>
		<li>
			<i class="ico ico-service"></i>
			<p class="service">专业售后服务</p>
		</li>
	</ul>
</div>
<div class="footer">
	<div class="w1224 clearfix" style="padding-bottom: 10px;">
		<div class="left-help-list">
			<div class="help-list-wrap clearfix">
				 @foreach(tpl_query("select * from `__PREFIX__article_cat` where cat_id < 6  order by sort_order asc") as $k=>$v) 
					<dl>
						<dt>{{ $v['cat_name'] }}</dt>
						 @foreach(tpl_query("select * from `__PREFIX__article` where cat_id = $v[cat_id]  and is_open=1 limit 5") as $k2=>$v2) 
						<dd><a href="{{ U('Home/Article/detail',array('article_id'=>$v2['article_id'])) }}">{{ $v2['title'] }}</a></dd>
						 @endforeach 
					</dl>
				 @endforeach 
			</div>
			<div class="friendship-links clearfix">
	            <span>友情链接 : </span>
                <div class="links-wrap-h clearfix">
                 @foreach(tpl_query("select * from `__PREFIX__friend_link` where is_show=1") as $k=>$v) 
                    <a href="{{ $v['link_url'] }}" @if($v['target'] == 1) target="_blank" @endif  >{{ $v['link_name'] }}</a>
                 @endforeach 
                </div>
	        </div>	
		</div>
		<div class="right-contact-us">
			<h3 class="title">联系我们</h3>
			<span class="phone">{{ $tpshop_config['shop_info_phone'] }}</span>
			<p class="tips">周一至周日8:00-18:00<br />(仅收市话费)</p>
			<!--<div class="qr-code-list clearfix">-->
				<!--<a class="qr-code" href="javascript:;"><img class="w-100" src="/assets/static/images/qrcode.png" alt="" /></a>-->
				<!--<a class="qr-code qr-code-tpshop" href="javascript:;"><img class="w-100" src="/assets/static/images/qrcode.png" alt="" /></a>-->
			<!--</div>-->
		</div>
	</div>
    <div class="mod_copyright p">
        <div class="grid-top">
             @foreach(tpl_query("SELECT * FROM `__PREFIX__navigation` where is_show = 1 AND position = 'bottom' ORDER BY `sort` DESC") as $kk=>$vv) 
                <a href="{{ $vv['url'] }}" @if($vv['is_new'] == 1)  target="_blank"  @endif  >{{ $vv['name'] }}</a><span>|</span>
             @endforeach 
            <!--<a href="javascript:void (0);">关于我们</a><span>|</span>-->
            <!--<a href="javascript:void (0);">联系我们</a><span>|</span>-->
            <!-- @foreach(tpl_query("select * from `__PREFIX__article` where cat_id = 5 and is_open=1") as $k=>$v) -->
                <!--<a href="{{ U('Home/Article/detail',array('article_id'=>$v['article_id'])) }}">{{ $v['title'] }}</a>-->
                <!--<span>|</span>-->
            <!-- @endforeach -->
        </div>
        <p>Copyright © 2016-2025 {{ $tpshop_config['shop_info_store_name'] ?: 'TPshop商城' }} 版权所有 保留一切权利 备案号:<a href="http://www.miitbeian.gov.cn" >{{ $tpshop_config['shop_info_record_no'] }}</a></p>
        <p class="mod_copyright_auth">
            <a class="mod_copyright_auth_ico mod_copyright_auth_ico_1" href="" target="_blank">经营性网站备案中心</a>
            <a class="mod_copyright_auth_ico mod_copyright_auth_ico_2" href="" target="_blank">可信网站信用评估</a>
            <a class="mod_copyright_auth_ico mod_copyright_auth_ico_3" href="" target="_blank">网络警察提醒你</a>
            <a class="mod_copyright_auth_ico mod_copyright_auth_ico_4" href="" target="_blank">诚信网站</a>
            <a class="mod_copyright_auth_ico mod_copyright_auth_ico_5" href="" target="_blank">中国互联网举报中心</a>
        </p>
    </div>
</div>
<style>
    .mod_copyright {
        border-top: 1px solid #EEEEEE;
    }
    .grid-top {
        margin-top: 20px;
        text-align: center;
    }
    .grid-top span {
        margin: 0 10px;
        color: #ccc;
    }
    .mod_copyright > p {
        margin-top: 10px;
        color: #666;
        text-align: center;
    }
    .mod_copyright_auth_ico {
        overflow: hidden;
        display: inline-block;
        margin: 0 3px;
        width: 103px;
        height: 32px;
        background-image: url(/assets/static/images/ico_footer.png);
        line-height: 1000px;
    }
    .mod_copyright_auth_ico_1 {
        background-position: 0 -151px;
    }
    .mod_copyright_auth_ico_2 {
        background-position: -104px -151px;
    }
    .mod_copyright_auth_ico_3 {
        background-position: 0 -184px;
    }
    .mod_copyright_auth_ico_4 {
        background-position: -104px -184px;
    }
    .mod_copyright_auth_ico_5 {
        background-position: 0 -217px;
    }
</style>
<script>
    // 延时加载二维码图片
    jQuery(function($) {
        $('img[img-url]').each(function() {
            var _this = $(this),
                    url = _this.attr('img-url');
            _this.attr('src',url);
        });
    });
</script>
			<div class="soubao-sidebar">
    <div class="soubao-sidebar-bg"></div>
    <div class="sidertabs tab-lis-1">
        <div class="sider-top-stra sider-midd-1">
            <div class="icon-tabe-chan">
                <a href="{{ U('Home/User/index') }}">
                    <i class="share-side share-side1"></i>
                    <i class="share-side tab-icon-tip triangleshow"></i>
                </a>

                <div class="dl_login">
                    <div class="hinihdk">
                        <img src="/assets/static/images/dl.png"/>

                        <p class="loginafter nologin"><span>你好，请先</span><a href="{{ U('Home/user/login') }}">登录！</a></p>
                        <!--未登录-e--->
                        <!--登录后-s--->
                        <p class="loginafter islogin">
                            <span class="id_jq userinfo">陈xxxxxxx</span>
                            <span>&nbsp;&nbsp;&nbsp;&nbsp;</span><a href="{{ U('Home/user/logout') }}" title="点击退出">退出！</a>
                        </p>
                        <!--未登录-s--->
                    </div>
                </div>
            </div>
            <div class="icon-tabe-chan shop-car">
                <a href="javascript:void(0);" onclick="ajax_side_cart_list()">
                    <div class="tab-cart-tip-warp-box">
                        <div class="tab-cart-tip-warp">
                            <i class="share-side share-side1"></i>
                            <i class="share-side tab-icon-tip"></i>
                            <span class="tab-cart-tip">购物车</span>
                            <span class="tab-cart-num J_cart_total_num" id="tab_cart_num">0</span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="icon-tabe-chan massage">
                <a href="{{ U('Home/User/message_notice') }}" target="_blank">
                    <i class="share-side share-side1"></i>
                    <!--<i class="share-side tab-icon-tip"></i>-->
                    <span class="tab-tip">消息</span>
                </a>
            </div>
        </div>
        <div class="sider-top-stra sider-midd-2">
            <div class="icon-tabe-chan mmm">
                <a href="{{ U('Home/User/goods_collect') }}" target="_blank">
                    <i class="share-side share-side1"></i>
                    <!--<i class="share-side tab-icon-tip"></i>-->
                    <span class="tab-tip">收藏</span>
                </a>
            </div>
            <div class="icon-tabe-chan hostry">
                <a href="{{ U('Home/User/visit_log') }}" target="_blank">
                    <i class="share-side share-side1"></i>
                    <!--<i class="share-side tab-icon-tip"></i>-->
                    <span class="tab-tip">足迹</span>
                </a>
            </div>
            <!--<div class="icon-tabe-chan sign">-->
                <!--<a href="" target="_blank">-->
                    <!--<i class="share-side share-side1"></i>-->
                    <!--&lt;!&ndash;<i class="share-side tab-icon-tip"></i>&ndash;&gt;-->
                    <!--<span class="tab-tip">签到</span>-->
                <!--</a>-->
            <!--</div>-->
        </div>
    </div>
    <div class="sidertabs tab-lis-2">
        <div class="icon-tabe-chan advice">
            <a title="点击这里给我发消息" href="tencent://message/?uin={{ $tpshop_config['shop_info_qq2'] }}&amp;Site=TPshop商城&amp;Menu=yes" target="_blank">
                <i class="share-side share-side1"></i>
                <!--<i class="share-side tab-icon-tip"></i>-->
                <span class="tab-tip">在线咨询</span>
            </a>
        </div>
        <!--<div class="icon-tabe-chan request">-->
            <!--<a href="" target="_blank">-->
                <!--<i class="share-side share-side1"></i>-->
                <!--&lt;!&ndash;<i class="share-side tab-icon-tip"></i>&ndash;&gt;-->
                <!--<span class="tab-tip">意见反馈</span>-->
            <!--</a>-->
        <!--</div>-->
        <div class="icon-tabe-chan qrcode">
            <a href="" target="_blank">
                <i class="share-side share-side1"></i>
                <i class="share-side tab-icon-tip triangleshow"></i>
                <span class="tab-tip qrewm">
                    <img img-url="/index.php?m=Home&c=Index&a=qr_code&data={{ $mobile_url }}&head_pic={{ $head_pic }}&back_img={{ $back_img }}"/>
                    扫一扫下载APP
                </span>
            </a>
        </div>
        <div class="icon-tabe-chan comebacktop">
            <a href="" target="_blank">
                <i class="share-side share-side1"></i>
                <!--<i class="share-side tab-icon-tip"></i>-->
                <span class="tab-tip">返回顶部</span>
            </a>
        </div>
    </div>
    <div class="shop-car-sider">

    </div>
</div>
<script src="/assets/static/js/common.js"></script>
		</div>
		<!--footer-e-->
<script src="/assets/static/js/lazyload.min.js" type="text/javascript" charset="utf-8"></script>
<script src="/assets/static/js/headerfooter.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript">
    $(function(){
        $('.f-sort ul li').click(function(){
            $(this).find('i').addClass('jta-w').parents('li').siblings().find('i').removeClass('jta-w');
        })
    })
</script>
</body>
</html>