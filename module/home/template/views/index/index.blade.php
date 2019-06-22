<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>首页-{{ $tpshop_config['shop_info_store_title'] }}</title>
    <meta name="keywords" content="{{ $tpshop_config['shop_info_store_keyword'] }}"/>
    <meta name="description" content="{{ $tpshop_config['shop_info_store_desc'] }}"/>
    <link rel="stylesheet" type="text/css" href="/assets/static/css/base.css"/>
    <link rel="stylesheet" type="text/css" href="/assets/static/css/index.css"/>
    <script src="/assets/static/js/jquery-1.11.3.min.js" type="text/javascript" charset="utf-8"></script>
    <script src="/assets/vendor/js/global.js"></script>
    <link rel="shortcut icon" type="image/x-icon" href="{{ $tpshop_config['shop_info_store_ico'] ?: '/public/static/images/logo/storeico_default.png' }}" media="screen"/>
</head>
<body class="gray_f5">
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
					<script src="/assets/vendor/js/locationJson.js"></script>
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
				@forelse( $tpshop_config['hot_keywords'] as $k => $wd )

				<a class="key-item" href="{{ U('Home/Goods/search',array('q'=>$wd)) }}" target="_blank">{{ $wd }}</a>
				
@empty

@endforelse
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
				@forelse( $goods_category_tree as $kr => $v )

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
								<div class="cata-layer-title" @if(count((array)$v['hot_cate']) == 0)style="display:none"@endif>
									@forelse( $v['hot_cate'] as $key => $hc )

									<a class="layer-title-item" href="{{ U('Home/Goods/goodsList',['id'=>$hc['id']]) }}">{{ $hc['name'] }}<i class="ico ico-arrow-right">></i></a>
									
@empty

@endforelse
								</div>
							 
								<div class="subitems">
									@forelse( $v['tmenu'] as $k2 => $v2 )

									@if($v2['parent_id'] == $v['id'])
										<dl class="clearfix">
											<dt><a href="{{ U('Home/Goods/goodsList',array('id'=>$v2['id'])) }}" target="_blank">{{ $v2['name'] }}</a></dt>
											<dd class="clearfix">
												@forelse( $v2['sub_menu'] as $k3 => $v3 )

													@if($v3['parent_id'] == $v2['id'])
													<a href="{{ U('Home/Goods/goodsList',array('id'=>$v3['id'])) }}" target="_blank">{{ $v3['name'] }}</a>
													@endif
												
@empty

@endforelse
											</dd>
										</dl>
									@endif
									
@empty

@endforelse
								</div>
							</div>
							<div class="advertisement_down">
								@foreach( tpl_adv("","5","","v3","key","100+$kr") as $key => $v3 )
								<a href="{{ $v3['ad_link'] }}" @if($v3['target'] == 1)target="_blank"@endif>
									<img class="w-100" src="{{ $v3['ad_code'] }}" title="{{ $v3['title'] }}"/>
								</a>
								@endforeach
							</div>
							@foreach( tpl_adv("","1","","az","key","51") as $key => $az )
							<a href="{{ $az['ad_link'] }}" class="cata-nav-rigth" @if($az['target'] == 1)target="_blank"@endif>
								<img class="w-100" src="{{ $az['ad_code'] }}" title="{{ $az['title'] }}" />
							</a>
							@endforeach
						</div>
					</div>
					
@empty

@endforelse					
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
			<li @if(CONTROLLER_NAME == 'Index')class="selected"@endif><a href="{{ U('Index/index') }}">首页</a></li>
			@foreach(tpl_query("SELECT * FROM `__PREFIX__navigation` where is_show = 1 and position = 'top' ORDER BY `sort` DESC") as $k=>$v)
			<li <?php if($_SERVER['REQUEST_URI']==str_replace('&amp;','&',$v['url'])){ echo "class='selected'";}?>>
       			<a href="{{ $v['url'] }}" @if($v['is_new'] == 1)target="_blank" @endif >{{ $v['name'] }}</a>
       		</li>
			@endforeach
		</ul>
	</div>
</div>

<!--header-e-->
<div id="myCarousel" class="carousel clearfix">
	<ul class="carousel-inner">
        @foreach( tpl_adv("","5","","v1","key","2") as $key => $v1 )
		<li class="item" style="background:{{ $v1['bgcolor'] }};">
			<a class="item-pic" href="{{ $v1['ad_link'] }}" @if($v1['target'] == 1)target="_blank"@endif>
			<img class="w-100" src="{{ $v1['ad_code'] }}" title="{{ $v1['title'] }}" alt="{{ $v1['title'] }}"></a>
		</li>
		@endforeach
	</ul>
	<div class="pagination">

	</div>
	<a class="carousel-control left-btn t-all" href="javascript:;" data-slide="prev"></a>
	<a class="carousel-control right-btn t-all" href="javascript:;" data-slide="next"></a>
	<script>
		$(function() {
			function banner() {
				var windowWidth=$(window).width();  //获取轮播图的宽度（这里是全屏）
				window.onresize=function(){  //屏幕大小改变时 自适应
					windowWidth=$(window).width();
					$_banner.css({'width':windowWidth*(length+2),left:-windowWidth});
					$_banner.find('.item').css('width',windowWidth);
				};
				var $_bannerWrap=$('#myCarousel');
				var $_banner=$_bannerWrap.find('.carousel-inner');
				var length=$_banner.find('.item').length;
				var first=$_banner.find('.item').eq(0).clone();
				var last=$_banner.find('.item:last').clone();
				var timer; //定时器
				$_banner.append(first);
				$_banner.prepend(last);
				//初始化 轮播图列表宽度和列表项宽度
				$_banner.css({'width':windowWidth*(length+2),left:-windowWidth});
				$_banner.find('.item').css('width',windowWidth);

				var $_pagination=$_bannerWrap.find('.pagination');
				for(var i=0;i<length;i++){  //自动增加白色索引点击点
					$_pagination.append('<span class="pagination-item"></span>');
				}
				var iNow=1; //索引记录标志
				hoverActive(iNow); //初始化状态标记
				$_bannerWrap.find('.left-btn').click(function () {
					clearInterval(timer);
					iNow--;
					bannerRun();
				});
				$_bannerWrap.find('.right-btn').click(function () {
					clearInterval(timer);
					iNow++;
					bannerRun();
				});
				$_pagination.find('.pagination-item').click(function () {
					iNow=$(this).index()+1;
					$_banner.finish().animate({left:-iNow*windowWidth},500);
					hoverActive(iNow);
				});
				function bannerAutoRun(){  //轮播图自动循环播放 间隔4秒
					timer=setInterval(function() {
						iNow++;
						bannerRun();
					},4000)
				}
				bannerAutoRun();

				//移动上面去停止，移动出来继续轮播
				function hoverChangeRun(ele){
					ele.hover(function(){
						clearInterval(timer);
					},function () {
						bannerAutoRun();
					});
				}
				hoverChangeRun($_banner.find('.item-pic'));
				hoverChangeRun($_pagination.find('.pagination-item'));
				hoverChangeRun($_bannerWrap.find('.carousel-control'));

				function hoverActive(index){ //切换时改变状态
					$_banner.find('.item').eq(index).addClass('slide-active').siblings().removeClass('slide-active');
					$_pagination.find('.pagination-item').eq(index-1).addClass('active').siblings().removeClass('active');
				}
				function bannerRun(){ //点击切换图片
					if(iNow>length){
						$_banner.finish().animate({left:-iNow*windowWidth},300,function(){
							$_banner.css({left:-1*windowWidth});
						});
						iNow=1;
					}else if(iNow<1){
						$_banner.finish().animate({left:-iNow*windowWidth},500,function(){
							$_banner.css({left:-length*windowWidth});
						});
						iNow=length;
					}else{
						$_banner.finish().animate({left:-iNow*windowWidth},300);
					}
					hoverActive(iNow);
				}
			}
			banner();
		})
	</script>
	<div class="banner-right-box">
	@foreach( tpl_adv("","2","","vb","key","52") as $key => $vb )
		<a class="banner-right-item t-all" href="{{ $vb['ad_link'] }}"><img src="{{ $vb['ad_code'] }}" alt="{{ $vb['title'] }}" /></a>
	@endforeach
	</div>
</div>

<div class="adv3 w1224 clearfix">
	@foreach( tpl_adv("","3","","vr","key","50") as $key => $vr )
	<a class="recommend-brand t-all" href="{{ $vr['ad_link'] }}">
		<img class="w-100" src="{{ $vr['ad_code'] }}" alt="{{ $vr['title'] }}" title="{{ $vr['title'] }}"/>
	</a>
	@endforeach
</div>

@foreach( tpl_adv("","1","","v5","key","49") as $key => $v5 )
	<a href="{{ $v5['ad_link'] }}" class="adver_line">
		<img class="w-100" src="{{ $v5['ad_code'] }}" alt="{{ $v5['title'] }}"/>
	</a>
@endforeach

@forelse( $cateList as $k => $v )

<div class="floor floor{{ $k+1 }} w1224">
	<div class="floor-top">
		<h3 class="floor-title">{{ $v['name'] }}</h3>
		<div class="floor-nav-list clearfix">
			@forelse( $v['tmenu'] as $k2 => $v2 )

			<a class="floor-nav-item" href="{{ U('Home/Goods/goodsList',array('id'=>$v2['id'])) }}">{{ $v2['name'] }}</a>
			
@empty

@endforelse
		</div>
		<a class="nav-more-btn" href="{{ U('Home/Goods/goodsList',array('id'=>$v['id'])) }}">更多<i>></i></a>
	</div>
	<div class="floor-main">
		<div class="floor-brand">
			@foreach( tpl_adv("","1","","vl","key","12+$k") as $key => $vl )
			<a class="brand-big" href="{{ $vl['ad_link'] }}"><img class="w-100" src="{{ $vl['ad_code'] }}" alt="{{ $vl['title'] }}" /></a>
			@endforeach
			@foreach( tpl_adv("","1","","vs","key","22+$k") as $key => $vs )
			<a class="brand-samll" href="{{ $vs['ad_link'] }}"><img class="w-100" src="{{ $vs['ad_code'] }}" alt="{{ $vs['title'] }}" /></a>
			@endforeach
		</div>
		<div class="floor-goods-list">
			@forelse( $v['hot_goods'] as $gk => $g )

			<a class="floor-goods-item" href="{{ U('Home/Goods/goodsInfo',array('id'=>$g['goods_id'])) }}">
				<div class="googs-title ellipsis-1">{{ getSubstr($g['goods_name'],0,20) }}</div>
				<div class="googs-price ellipsis-1">￥{{ $g['shop_price'] }}</div>
				<div class="goods-pic"><img class="w-100" src="{{ goods_thum_images($g['goods_id'],400,400) }}" alt=""></div>
			</a>
			
@empty

@endforelse
		</div>
		<div class="floor-recommend">
			<div class="floor-recommend-title">热门推荐</div>
			<div class="floor-recommend-wrap">
				<div class="floor-recommend-list">
					@forelse( $v['recommend_goods'] as $gk => $rg )

					<a class="floor-recommend-item" href="{{ U('Home/Goods/goodsInfo',array('id'=>$rg['goods_id'])) }}">
						<div class="floor-recommend-pic">
							<img class="w-100" src="{{ goods_thum_images($rg['goods_id'],200,200) }}" alt="" />
						</div>
						<div class="floor-recommend-cont">
							<div class="recommend-goods-name ellipsis-1">{{ getSubstr($rg['goods_name'],0,15) }}</div>
							<div class="recommend-goods-des ellipsis-1">{{ $rg['goods_remark'] }}</div>
							<div class="recommend-goods-price  recommend-goods-des">￥ {{ $rg['shop_price'] }}</div>
						</div>
					</a>
					
@empty

@endforelse
				</div>
			</div>
			<a class="recommend-more-btn" href="{{ U('Home/Goods/goodsList',array('id'=>$v['id'])) }}">更多 <i>></i></a>
		</div>
	</div>
</div>

@empty

@endforelse
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
                    <a href="{{ $v['link_url'] }}" @if($v['target'] == 1)target="_blank"@endif >{{ $v['link_name'] }}</a>
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
                <a href="{{ $vv['url'] }}" @if($vv['is_new'] == 1) target="_blank" @endif >{{ $vv['name'] }}</a><span>|</span>
            @endforeach
            <!--<a href="javascript:void (0);">关于我们</a><span>|</span>-->
            <!--<a href="javascript:void (0);">联系我们</a><span>|</span>-->
            <!--@foreach(tpl_query("select * from `__PREFIX__article` where cat_id = 5 and is_open=1") as $k=>$v)-->
                <!--<a href="{{ U('Home/Article/detail',array('article_id'=>$v['article_id'])) }}">{{ $v['title'] }}</a>-->
                <!--<span>|</span>-->
            <!--@endforeach-->
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

<!--楼层导航-s-->
<ul class="floor-nav" id="floor-nav">
@forelse( $cateList as $k => $v )

	<li>
		<span>{{ $k+1 }}F</span>
		<span>{{ $v['mobile_name'] }}</span>
	</li>

@empty

@endforelse
</ul>

<!--楼层导航-e-->
<!--侧边栏-s-->
<div class="slidebar-right">
	<a class="slidebar-item ico-slidebar1" target="_blank" href="tencent://message/?uin={{ $tpshop_config['shop_info_qq2'] }}&amp;Site=TPshop商城&amp;Menu=yes" >
		<div class="sbar-hover-txt">客服服务</div>
	</a>
	<a class="slidebar-item ico-slidebar2" target="_blank" href="javascript:;" >
		<div class="sbar-hover-txt">关注微信</div>
		<div class="sbar-hover-pic">
			<div class="qrcode-wrap"><img class="w-100" src="/assets/static/images/qrcode.png" alt="" /></div>
			<p class="qrcode-des">扫码关注官方微信,先人一步知晓促销活动</p>
		</div>
	</a>
	<a class="slidebar-item ico-slidebar3" target="_blank" href="javascript:;" >
		<div class="sbar-hover-txt">手机商城</div>
		<div class="sbar-hover-pic">
			<div class="qrcode-wrap"><img class="w-100" img-url="/index.php?m=Home&c=Index&a=qr_code&data={{ $mobile_url }}&head_pic={{ $head_pic }}&back_img={{ $back_img }}" alt="" /></div>
			<p class="qrcode-des">扫码下载手机商城,随时随地享受优惠购物</p>
		</div>
	</a>
	<a class="slidebar-item ico-slidebar4 t-all" href="javascript:;" >
		<div class="sbar-hover-txt">回到顶部</div>
	</a>
</div>
<script>
 
function init(){  //初始化函数
    //首页商品分类显示
    $('.categorys .dd').show();

    //自动楼层居中设置
    $('#floor-nav').css('margin-top',(-41*$('#floor-nav').find('li').length+1)/2);

    //推荐列表自动滚动
    carouselList('.floor-recommend-wrap','.floor-recommend-list','.floor-recommend-item');

    //右侧边栏
    rightBar();

    //楼层导航切换
    sidebarRollChange();
}

function rightBar(){  //右侧边栏
    var $_slidebar4 = $('.ico-slidebar4');
    $(window).scroll(function(){
        if($(window).scrollTop()>100){
            $_slidebar4.css('height',40);
        }else{
            $_slidebar4.css('height',0);
        }
    })
    $_slidebar4.click(function () {
        $('html,body').animate({'scrollTop':0},500)
    });
}
function carouselList(wrap,list,item,timeWait,timeRun){ //推荐列表滚动
    /*
     * wrap：包裹容器
     * list：列表容器
     *item：列表单元
     *timeWait：停顿时间(单位ms,可不传参数，默认3秒)
     *timeRun：运动时间(单位ms,可不传参数，默认0.5秒)
     * */
    if(timeWait===undefined||typeof timeWait!="number"){
        timeWait=3000;
    }
    if(timeRun===undefined||typeof timeRun!="number"){
        timeRun=500;
    }
    $(wrap).each(function(){
        var length=$(this).find(item).length;
        if(length<3){
            return;
        }
        var html=$(this).find(list).html();
        $(this).find(list).html(html+html);
        var num=1;
        var _this=this;
        function interval(){
            clearInterval($(_this)[0].timer);
            $(_this)[0].timer=setInterval(function(){
                num++;
                if(num==length){
                    $(_this).find(list).animate({top:-108*num},timeRun,function (){
                        $(_this).find(list).css('top',0);
                    });
                    num=0;
                }else{
                    $(_this).find(list).animate({top:-108*num},timeRun);
                }
            },timeWait);
        }
        interval();
        $(this).find(item).hover(function (){
            clearInterval($(_this)[0].timer);
        },function (){
            interval();
        })
    });
}
function sidebarRollChange() {  //楼层切换
    var $_floorList=$('.floor');
    var $_sidebar=$('#floor-nav');
    $_sidebar.find('li').click(function(){ //点击切换楼层
        $('html,body').animate({'scrollTop':$_floorList.eq($(this).index()).offset().top},500)
    });
    $(window).scroll(function(){
        var scrollTop=$(window).scrollTop();
        if(scrollTop<$_floorList.eq(0).offset().top-$(window).height()/2){
            $_sidebar.hide();
            return;
        }
        $_sidebar.show();  //左边侧边栏显示
        for(var j=0,k=$_floorList.length;j<k;j++){ /*滚动改变侧边栏的状态*/
            if(scrollTop>$_floorList.eq(j).offset().top-$(window).height()/2){
                $_sidebar.find('li').eq(j).addClass('floor-nav-ac').siblings().removeClass('floor-nav-ac');
            }
        }
    })
}

init();
</script>
<script src="/assets/static/js/common.js" type="text/javascript" charset="utf-8"></script>
</body>
</html>
