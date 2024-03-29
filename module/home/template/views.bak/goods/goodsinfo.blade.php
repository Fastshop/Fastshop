<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>{{ $goods['goods_name'] }}-{{ $tpshop_config['shop_info_store_name'] }}</title>
    <meta name="keywords" content="{{ $goods['keywords'] }}"/>
    <meta name="description" content="{{ $goods['goods_remark'] }}"/>
    <link rel="stylesheet" type="text/css" href="/assets/static/css/tpshop.css"/>
    <link rel="stylesheet" type="text/css" href="/assets/static/css/jquery.jqzoom.css">
    <script src="/assets/static/js/jquery-1.11.3.min.js" type="text/javascript" charset="utf-8"></script>
    <script src="/assets/static/js/move.js" type="text/javascript" charset="utf-8"></script>
    <script src="/public/js/layer/layer-min.js"></script>
    <script type="text/javascript" src="/assets/static/js/jquery.jqzoom.js"></script>
    <script src="/public/js/global.js"></script>
    <script src="/public/js/pc_common.js"></script>
    <link rel="stylesheet" href="/assets/static/css/location.css" type="text/css"><!-- 收货地址，物流运费 -->
    <link rel="shortcut icon" type="image/x-icon"
          href="{{ $tpshop_config['shop_info_store_ico'] ?: '/public/static/images/logo/storeico_default.png' }}"
          media="screen"/>
    <link rel="stylesheet" href="http://{{ $tpshop_config['basic_im_website'] }}/static/test/common/layui/css/layui.css" media="all">
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
             @foreach( $goods['goods_category']['parent_list'] ?: [] as $i => $category_parent )

                <a href="{{ U('/Home/Goods/goodsList',array('id'=>$category_parent['id'])) }}">{{ $category_parent['name'] }}</a>
                <i class="litt-xyb"></i>
            
@endforeach
            <a href="{{ U('/Home/Goods/goodsList',array('id'=>$goods['goods_category']['id'])) }}">{{ $goods['goods_category']['name'] }}</a>
            <i class="litt-xyb"></i>
            <div class="havedox">
                <span>{{ $goods['goods_name'] }} </span>
            </div>
        </div>

        @if((!empty($tpshop_config['basic_im_choose'])) && ($tpshop_config['basic_im_choose'] == 1)) 
            <!--IM客服-->
            <div class="online-service fr p">
                <a href="javascript:;" class="z-onlines z-online-service fr"  user_id="{{ \think\Session::get('user.user_id') }}" uname="{{ \think\Session::get('user.nickname') }}"
                   avatar="{{ \think\Session::get('user.head_pic') }}" sign="" goods_id="{{ $goods['goods_id'] }}" web_id="{{ \think\Request::instance()->host() }}" im_href="{{ $tpshop_config['basic_im_website'] }}" id="workerman-kefu" onclick="jump()">
                    <i class="detai-ico"></i>在线客服
                </a>
            </div>
            @elseif((!empty($tpshop_config['basic_im_choose'])) && ($tpshop_config['basic_im_choose'] == 2))
            <!--小能客服-->
            <div class="online-service fr p">
                <a href="javascript:void(0);" class="z-onlines z-online-service fr">
                    <i class="detai-ico"></i>在线客服
                </a>
            </div>
            @else
            <!--qq客服-->
            <div class="online-service fr p">
                <a href="javascript:void(0);" class="z-onlines z-online-service fr">
                    <i class="detai-ico"></i>在线客服
                </a>
            </div>
         @endif 
        <!--<div class="online-service fr p">-->
        	<!--<a href="javascript:void(0);" class="z-onlines z-online-service fr"><i></i>在线客服</a>-->
        <!--</div>-->
    </div>
</div>
<div class="details-bigimg p">
    <div class="w1224">
        <div class="detail-img">
            <div class="product-gallery">
                <div class="product-photo" id="photoBody">
                    <div class="product-video">
                        @if($goods['video']) 
                            <video id="video" src="{{ $goods['video'] }}" controls="controls" preload="preload"
                                   onended="this.load();">
                                您的浏览器不支持查看此视频，请升级浏览器到最新版本
                            </video>
                         @endif 
                    </div>
                    <i class="close-video"></i>
                    <i class="video-play"></i>
                    <!-- 商品大图介绍 start [[-->
                    <div class="product-img jqzoom">
                        <img id="zoomimg" src="{{ goods_thum_images($goods['goods_id'],400,400) }}"
                             jqimg="{{ goods_thum_images($goods['goods_id'],800,800) }}">
                    </div>
                    <!-- 商品大图介绍 end ]]-->
                    <!-- 商品小图介绍 start [[-->
                    <div class="product-small-img fn-clear">
                        <a href="javascript:;" class="next-left next-btn fl disabled"><</a>
                        <div class="pic-hide-box fl">
                            <ul class="small-pic" id="small-pic" style="left:0;">
                                 @foreach( $goods['goods_images'] ?: [] as $i => $img )

                                    <li class="small-pic-li @if($i == 0) active @endif ">
                                    <a href="javascript:;"><img src="{{ get_sub_images($img,$img['goods_id'],60,60) }}"
                                                                data-img="{{ get_sub_images($img,$img['goods_id'],400,400) }}"
                                                                data-big="{{ get_sub_images($img,$img['goods_id'],800,800) }}">
                                        <i></i></a>
                                    </li>
                                
@endforeach
                            </ul>
                        </div>
                        <a href="javascript:;" class="next-right next-btn fl">></a></div>
                    <!-- 商品小图介绍 end ]]-->
                </div>
                <!-- 收藏商品 start [[-->
                <div class="collect">
                    <a href="javascript:void(0);" id="collectLink"><i class="collect-ico collect-ico-null"></i>
                        <span class="collect-text">收藏商品</span>
                        <em class="J_FavCount">({{ $goods['collect_sum']+$goods['virtual_collect_sum'] }})</em>
                    </a>
                    <!--<a href="javascript:void(0);" id="collectLink"><i class="collect-ico collect-ico-ok"></i>已收藏<em class="J_FavCount">(20)</em></a>-->
                </div>
                <!-- 分享商品 -->
                <div class="share">
                    <div class="jiathis_style">
                        <div class="bdsharebuttonbox">
                            <a href="#" class="bds_more" data-cmd="more"></a>
                            <a href="#" class="bds_qzone" data-cmd="qzone"></a>
                            <a href="#" class="bds_tsina" data-cmd="tsina"></a>
                            <a href="#" class="bds_tqq" data-cmd="tqq"></a>
                            <a href="#" class="bds_renren" data-cmd="renren"></a>
                            <a href="#" class="bds_weixin" data-cmd="weixin"></a>
                        </div>
                    </div>
                    <script>
                        var bd_url = "http://{{ $_SERVER['HTTP_HOST'] }}/index.php?m=Home&c=Goods&a=goodsInfo&id={{ $_GET['id'] }}";
                        var bd_pic = "http://{{ $_SERVER['HTTP_HOST'] }}{{ goods_thum_images($goods['goods_id'],400,400) }}";
                        var bdText = "{{ $goods['goods_name'] }}";
                        var is_distribut = getCookie('is_distribut');
                        var user_id = getCookie('user_id');
                        // 如果已经登录了, 并且是分销商
                        if (parseInt(is_distribut) == 1 && parseInt(user_id) > 0) {
                            bd_url = bd_url + "&first_leader=" + user_id;
                        }

                        function setShareConfig(id, config) {
                            config.bdUrl = bd_url;
                            config.bdPic = bd_pic;
                            config.bdText = bdText;
                            return config;
                        }

                        window._bd_share_config = {
                            "common": {
                                onBeforeClick: setShareConfig,
                                "bdSnsKey": {},
                                "bdText": "",
                                "bdMini": "2",
                                "bdPic": "",
                                "bdStyle": "0",
                                "bdSize": "16"
                            },
                            "share": {},
                            "image": {
                                "viewList": ["qzone", "tsina", "tqq", "renren", "weixin"],
                                "viewText": "分享到：",
                                "viewSize": "16"
                            },
                            "selectShare": {
                                "bdContainerClass": null,
                                "bdSelectMiniList": ["qzone", "tsina", "tqq", "renren", "weixin"]
                            }
                        };
                        with (document) 0[(getElementsByTagName('head')[0] || body).appendChild(createElement('script')).src = 'http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion=' + ~(-new Date() / 36e5)];
                    </script>
                </div>
            </div>
        </div>
        <form id="buy_goods_form" name="buy_goods_form" method="post" action="">
            <input type="hidden" name="goods_id" value="{{ $goods['goods_id'] }}"><!-- 商品id -->
            <input type="hidden" name="spec_goods_price" value='{{ json_encode($goods['spec_goods_price'],true) }}'>
            <input type="hidden" name="goods_prom_type" value="{{ $goods['prom_type'] }}"/><!-- 活动类型 -->
            <input type="hidden" name="prom_id" value=""/><!-- 活动id -->
            <input type="hidden" name="shop_price" value="{{ $goods['shop_price'] }}"/><!-- 活动价格 -->
            <input type="hidden" name="store_count" value="{{ $goods['store_count'] }}"/><!-- 活动库存 -->
            <input type="hidden" name="market_price" value="{{ $goods['market_price'] }}"/><!-- 商品原价 -->
            <input type="hidden" name="start_time" value=""/><!-- 活动开始时间 -->
            <input type="hidden" name="end_time" value=""/><!-- 活动结束时间 -->
            <input type="hidden" name="activity_title" value=""/><!-- 活动标题 -->
            <input type="hidden" name="prom_detail" value=""/><!-- 促销活动的促销类型 -->
            <input type="hidden" name="activity_is_on" value=""/><!-- 活动是否正在进行中 -->
            <input type="hidden" name="item_id" value="{{ \think\Request::instance()->param('item_id') }}"/><!-- 商品规格id -->
            <input type="hidden" name="exchange_integral" value="{{ $goods['exchange_integral'] }}"/><!-- 积分 -->
            <input type="hidden" name="point_rate" value="{{ $tpshop_config['integral_point_rate'] }}"/><!-- 积分兑换比 -->
            <input type="hidden" name="is_virtual" value="{{ $goods['is_virtual'] }}"/><!-- 是否是虚拟商品 -->
            <input type="hidden" name="virtual_limit" id="virtual_limit" value="{{ $goods['virtual_limit'] ?: 0 }}"/>
            <!-- 预售使用 s-->
            <input type="hidden" name="deposit_price" value=""/><!-- 订金 -->
            <input type="hidden" name="balance_price" value=""/><!-- 尾款 -->
            <input type="hidden" name="ing_amount" value=""/><!-- 已预订了多少 -->
            <div class="detail-ggsl">
                <h1>{{ $goods['goods_name'] }}</h1>
                <!--<p class="detail-ggsl-p" style="display: none;" ><a href="">【首批售罄 7月20日10点再次开售，已购买的用户到货时间咨询客服】曲面全景屏、隐藏式摄像头 、骁龙845...</a></p>-->
                <p class="detail-ggsl-p" ><a href="">{{ $goods['goods_remark'] }}</a></p>
                <div class="presale-time" style="display: none">
                    <div class="pre-icon fl">
                        <span class="ys" style="display: inline-block;"><i class="detai-ico"></i><span id="activity_type" style="display: inline-block; margin-top: -5px;">抢购活动</span></span>
                    </div>
                    <div class="pre-icon fr">
                        <span class="per" style="display: none;"><i class="detai-ico"></i><em id="order_user_num">0</em>人预约</span>
                        <span class="ti" id="activity_time" ><i class="detai-ico"></i>剩余时间：<span
                                id="overTime" class="overTime-class" ></span></span>
                        <span class="ti" id="prom_detail"></span>
                    </div>
                </div>
                <div class="shop-price-cou p">
                    <div class="shop-price-le">
                        <ul>
                            <li class="jaj"><span id="goods_price_title">商城价：</span></li>
                            <li>
                                <span class="bigpri_jj" id="goods_price"><em>￥</em>
                                    <!--<a href=""><em class="sale">（降价通知）</em></a>-->
                                </span>
                            </li>
                        </ul>
                        <ul class="pre_sell_div" style="display: none">
                            <li class="jaj"><span>订&nbsp;&nbsp;金：</span></li>
                            <li>
                                <span id="deposit_price"><em>￥</em></span>
                            </li>
                        </ul>
                        <ul class="pre_sell_div" style="display: none">
                            <li class="jaj"><span>尾&nbsp;&nbsp;款：</span></li>
                            <li>
                                <span id="balance_price"><em>￥</em></span>
                            </li>
                        </ul>
                        <ul>
                            <li class="jaj"><span id="market_price_title">市场价：</span></li>
                            <li class="though-line"><span><em>￥</em><span id="market_price">{{ $goods['market_price'] }}</span></span>
                                <span class="mobile-buy-cheap">
                                    手机购买更便宜
                                    <i>
                                    <img class="small-qrcode-h" src="/template/pc/rainbow/static/images/qrcode.png"
                                         alt=""/>
                                    <img class="big-qrcode-h"
                                         img-url="/index.php?m=Home&c=Index&a=qr_code&data={{ U('Mobile/Goods/goodsInfo',['id'=>$goods['goods_id']],true,true) }}&head_pic={{ $head_pic }}&back_img={{ $back_img }}"
                                         alt=""/>
                                    </i>
                                </span>
                            </li>
                        </ul>
                        <ul id="activity_title_div" style="display: none">
                            <li class="jaj"><span id="activity_label"></span></li>
                            <li><span id="activity_title"
                                      style="color: #df3033;background: 0 0;border: 1px solid #df3033;padding: 2px 3px;"></span>
                            </li>
                        </ul>
                        @if($goods['give_integral'] > 0) 
                            <ul>
                                <li class="jaj ls4"><span>赠送积分：</span></li>
                                <li><span class="fullminus">{{ $goods['give_integral'] }}</span></li>
                            </ul>
                         @endif 
                    </div>
                    <div class="shop-cou-ri">
                        <div class="allcomm"><p>累计评价</p>
                            <p class="f_blue">{{ $goods['comment_count'] }}</p></div>
                        <div class="br1"></div>
                        <div class="allcomm"><p>累计销量</p>
                            <p class="f_blue">{{ $goods['sales_sum']+$goods['virtual_sales_sum'] }}</p></div>
                    </div>
                </div>
                @if($goods['is_virtual'] == 0) 
                    <div class="standard p">
                        <!-- 收货地址，物流运费 -start-->
                        <ul class="list1">
                            <li class="jaj"><span>配&nbsp;&nbsp;送：</span></li>
                            <li class="summary-stock though-line">
                                <div class="dd shd_address">
                                    <!--<div class="addrID"><div></div><b></b></div>-->
                                    <div class="store-selector add_cj_p">
                                        <div class="text" style="width: 150px;">
                                            <div  class="goods_dispatching_name"></div>
                                            <b></b></div>
                                        <div onclick="$(this).parent().removeClass('hover')" class="close"></div>
                                    </div>
                                    <span id="dispatching_msg" style="display: none;">可配送</span>
                                    <span id="dispatching_desc"
                                          style="vertical-align: middle;position: relative;top: -4px;left: 9px;color: #666"></span>
                                </div>
                            </li>
                        </ul>
                        <script src="/public/js/locationJson.js"></script>
                        <script src="/assets/static/js/location.js"></script>
                        <!-- 收货地址，物流运费 -end-->
                    </div>
                 @endif 
                <div class="standard p">
                    <ul>
                        <li class="jaj"><span>服&nbsp;&nbsp;务：</span></li>
                        <li class="lawir"><span class="service">由<a>{{ $tpshop_config['shop_info_store_name'] }}</a>发货并提供售后服务</span>
                        </li>
                    </ul>
                </div>
                @if(!tp_empty($goods['brand'])) 
                    <div class="standard p">
                        <ul>
                            <li class="jaj"><span>品&nbsp;&nbsp;牌：</span></li>
                            <li class="lawir"><span class="service">{{ $goods['brand']['name'] }}</span></li>
                        </ul>
                    </div>
                 @endif 
                @if($goods['is_virtual'] == 0 and $goods['exchange_integral'] > 0) 
                    <div class="standard p">
                        <ul>
                            <li class="jaj"><span>可&nbsp;&nbsp;用：</span></li>
                            <li class="lawir">
                                <span class="service" id="integral">{{ $goods['exchange_integral_price'] }}+{{ $goods['exchange_integral'] }}积分</span>
                            </li>
                        </ul>
                    </div>
                 @endif 
                <!-- 规格 start [[-->
                 @foreach( $goods['spec'] ?: [] as $i => $spec )

                    <div class="spec_goods_price_div standard p">
                        <ul>
                            <li class="jaj"><span>{{ $spec['name'] }}：</span></li>
                            <li class="lawir colo">
                                 @foreach( $spec['spec_item'] ?: [] as $i => $spec_item )

                                    <input type="radio" hidden id="goods_spec_{{ $spec_item['id'] }}" name="goods_spec[{{ $spec['name'] }}]" value="{{ $spec_item['id'] }}"/>
                                    <a id="goods_spec_a_{{ $spec_item['id'] }}" class="spec_item">
                                         @foreach( $goods['spec_image'] ?: [] as $i => $spec_image )

                                            @if($spec_image['spec_image_id'] == $spec_item['id']  and $spec_image['src'] != '') 
                                                <img src="{{ $spec_image['src'] }}" style="width: 40px;height: 40px;"/>
                                             @endif 
                                        
@endforeach
                                        {{ $spec_item['item'] }}
                                    </a>
                                
@endforeach
                            </li>
                        </ul>
                    </div>
                
@endforeach
                <!-- 规格end ]]-->
                <div class="standard">
                    <ul class="p">
                        <li class="jaj"><span>数&nbsp;&nbsp;量：</span></li>
                        <li class="lawir">
                            <div class="minus-plus">
                                <a class="mins" href="javascript:void(0);" onclick="altergoodsnum(-1)">-</a>
                                <input class="buyNum" id="number" type="text" name="goods_num" value="1"
                                       onblur="altergoodsnum(0)" max=""/>
                                <a class="add" href="javascript:void(0);" onclick="altergoodsnum(1)">+</a>
                            </div>
                            <div class="sav_shop">@if(tp_empty($goods['store_count'])) <b>已售罄</b>@else库存：<span id="spec_store_count">{{ $goods['store_count'] }}</span>  @endif </div>
                        </li>
                    </ul>
                </div>
                <!-- 预售 s -->
                <div class="allpre-ne-ter pre_sell_div price_ladder_div" style=" margin-top: 15px; min-height: 100px;display: none">
                    <div class="presell_allpri" style="display:block">
                        <ul id="price_ladder_html"></ul>
                    </div>
                    <a href="javascript:" class="jieti-anniu price_ladder_more">
                        展开
                    </a>
                    <script>
                        function satrhide() {
                            var b = $('.presell_allpri ul li').length;
                            for (var i = 4; i < b; i++) {
                                $('.presell_allpri ul li').eq(i).hide();
                            }
                        };

                        function satrshow() {
                            var b = $('.presell_allpri ul li').length;
                            for (var i = 4; i < b; i++) {
                                $('.presell_allpri ul li').eq(i).show();
                            }
                        };
                        
                        $(function () {
                            $('.jieti-anniu').click(function () {
                                satrshow();
                                $(this).hide();
                            });

                            $('.allpre-ne-ter').mouseleave(function () {
                                satrhide();
                                if (price_ladder.length > 4) {
                                    $('.jieti-anniu').show();
                                } else {
                                    $('.jieti-anniu').hide();
                                }
                            });
                        })
                    </script>
                </div>
                <!-- 预售 e -->
                <div class="standard p">
                    <div class="standard p">
                        <a id="buy_now" class="paybybill buy_button" href="javascript:;" style="display: none">立即购买</a>
                        <a id="join_cart" class="addcar buy_button" href="javascript:;" style="display: none"><i class="sk"></i>加入购物车</a>
                    </div>
                </div>
            </div>
        </form>
        <!--看了又看-s-->
        <div class="detail-ry p">
            <div class="type_more">
                <div class="type-top">
                    <h2>看了又看<a class="update_h fr" href="javascript:;" onclick="replace_look();">换一换</a></h2>
                </div>
                <div id="see_and_see">
                </div>
            </div>
        </div>
        <!--看了又看-s-->
    </div>
</div>
<!--搭配购组合套餐 s-->

<!--搭配购组合套餐 s-->
<div class="Combination-set-meal p">
</div>

<script>
    /**
     * 获取搭配购商品
     */
    function getCombination() {
        var goods_id = {{ $goods['goods_id'] }};
        var item_id = $("input[name='item_id']").val();
        var url = "/index.php?m=Home&c=Goods&a=combination";
        $.ajax({
            type: "Post",
            url: url,
            data: {goods_id: goods_id, item_id: item_id},
            dataType: "json",
            success: function (data) {
                if (data.status == 1) {
                    var str = combinationHtml(data.result)
                    $('.Combination-set-meal').html(str);
                    f()
                }

            }
        });
    }

    function combinationHtml(result) {
        var goods_id = {{ $goods['goods_id'] }};
        var item_id = $("input[name='item_id']").val();
        var html = '<div class="w1224">' +
            '<div class="set-meal-wrap">' +
            '<form action="" method="">' +
            '<!--组合nav---s-->' +
            '<div class="set-meal-nav">' +
            '<ul class="p">'
        $.each(result, function (i, o) {
            var nav = i == 0 ? "meal-nav-li" : "";
            html += '<li class="fl ' + nav + '">' + o.title + '</li>';
        })

        html += '</ul>' +
            '</div>' +
            '<!--组合nav---e-->' +
            '<!--组合套餐内容---s-->'
        $.each(result, function (i, o) {
            var img =o.combination_goods[0]['original_img']?o.combination_goods[0]['original_img']:'/public/images/icon_goods_thumb_empty_300.png';
            var price =(o.combination_goods[0]['original_price'] - o.combination_goods[0]['price']).toFixed(2);
            html += '<div class="set-meal-cont">' +
                '<div class="set-meal-list p">' +
                '<div class="fl meal-one">' +
                '<input type="hidden" class="combination_goods_ids" value="'+o.combination_goods[0]['goods_id']+'">' +
                '<input type="hidden" class="combination_item_id" value="'+o.combination_goods[0]['item_id']+'">' +
                '<input type="hidden" class="combination_id" value="'+o.combination_id+'">' +
                '<a href="/index.php/Home/Goods/goodsInfo/id/'+o.combination_goods[0]['goods_id']+'">' +
                '<div class="meal-img">' +
                '<img src="'+img+'" />' +
                '</div>' +
                '<div class="meal-name">' +
                o.combination_goods[0]['goods_name'] + o.combination_goods[0]['key_name'] +
                '</div>' +
                '<div class="meal-price original_price_one">￥<span>' +
                o.combination_goods[0]['price'] +
                '</span></div>' +
                '</a>' +
                '<div class="Collocations-money original_price_one_collocations">搭配省:￥<span>' + price + '</span></div>'+
                '</div>' +
                '<div class="fl jia-icon-wrap">' +
                '<div class="meal-jia-icon">' +
                '</div>' +
                '</div>' +
                '<div class="fl meal-jia-list">' +
                '<div class="at-Bou-wrap mr_frbox">' +
                '<div class="at-Boutique mr_frUl  at-que">' +
                '<ul class="p ">';
            $.each(o.combination_goods, function (ii, oo) {
                var selected = '';
                if(goods_id == oo.goods_id && item_id == oo.item_id){selected = 'checked'}

                var price = (oo.original_price - oo.price).toFixed(2);
                var img =oo.original_img?oo.original_img:'/public/images/icon_goods_thumb_empty_300.png';
                if (ii != 0) {
                    html += '<li class="fl">' +
                        '<div class="bou-img">' +
                        '<img src="'+img+'" />' +
                        '</div>' +
                        '<div class="pror-title">' +
                        '<h3><a href="/index.php/Home/Goods/goodsInfo/id/'+oo.goods_id+'">' + oo.goods_name + oo.key_name + '</a></h3>' +
                        '</div>' +
                        '<div class="meal-price">' +
                        '<div class="meal-price-radio">' +
                        '<input type="checkbox" data-id="'+oo.goods_id+'" data-item="'+oo.item_id+'" onclick="clickGetPrice(this,' + oo.price + ',' + (oo.original_price - oo.price) + ')" ' + selected + ' id="price-radio1' + oo.goods_id + oo.combination_id +oo.item_id+ '" />' +
                        '<label for="price-radio1' + oo.goods_id + oo.combination_id + oo.item_id+'" ></label>' +
                        '</div>' +
                        '￥<span>' + oo.price + '</span>' +
                        '</div>';
                    if (price != 0) {
                        html += '<div class="Collocations-money">搭配省:￥<span>' + price + '</span></div>';
                    }
                    html += '</li>';
                }
            })
            html += '</ul>' +
                '<div  class="at-lef mr_frBtnL prev at-iconbts">' +
                '<i></i>' +
                '</div>' +
                '<div  class="at-rig mr_frBtnR next  at-iconbts">' +
                '<i ></i>' +
                '</div>' +
                '</div>' +
                '</div>' +
                '</div>' +
                '<div class="fl jia-icon-wrap">' +
                '<div class="meal-jia-icon jia-icon-dengyu">' +
                '</div>' +
                '</div>' +
                '<div class="fl set-meal-right">' +
                '<p class="set-meal-slect">已选择<span>1</span>件</p>' +
                '<div class="Combination-price">组合价:<span>￥<i>0</i></span></div>' +
                '<div class="Price-saving">共节省:￥<span>0</span></div>' +
                '<div class="Purchase-immediately-btn">' +
                '<input type="button" name="" id="" onclick="addCombinationShop(this,1)" value="立即购买" />' +
                '<label></label>' +
                '</div>' +
                '<div class="add-Shopping-btn">' +
                '<input type="button" name="" id="" onclick="addCombinationShop(this)" value="加入购物车" />' +
                '<label></label>' +
                '</div>' +
                '</div>' +
                '</div>' +
                    '</div>' +
                '<!--组合套餐内容---e-->'
        })
        html += '</form>' +
            '</div>' +
            '</div>'
        return html;
    }


</script>
<script type="text/javascript">
    //			组合套餐商品轮播
    //选中数量
    function f() {


        (function () {
            var nowIndex = 0;
            var timer = null;
            var pretime = null;
            var noxttime = null;
            $(".at-lef").click(function () {
                var this_obj = $(this);
                clearTimeout(noxttime);//清除时间
                noxttime = setTimeout(function () {
                    oleft(this_obj);
                }, 300)
            });
            $(".at-rig").click(function () {
                var this_obj = $(this);
                clearTimeout(pretime);
                pretime = setTimeout(function () {
                    oright(this_obj);
                }, 300)
            });

            //点击往后
            function oright(this_obj) {
                this_obj.siblings("ul").find("li:last").insertBefore(this_obj.siblings("ul").find("li:first"));
                this_obj.siblings("ul").animate({"left": "-165px"});
                this_obj.siblings("ul").animate({"left": 0}, 1000, "backOut");
                nowIndex--;
                if (nowIndex < 0) {
                    nowIndex = this_obj.siblings("ul").find("li").length - 1;
                }
            }

            //点击往前
            function oleft(this_obj) {
                this_obj.siblings("ul").animate({"left": "-165px"}, 1000, "backIn", function () {
                    this_obj.siblings("ul").find("li:first").appendTo(this_obj.siblings("ul"));
                    this_obj.siblings("ul").animate({"left": "0"}, 0);
                });
                nowIndex++;
                if (nowIndex > this_obj.siblings("ul").find("li").length - 1) {
                    nowIndex = 0;
                }
            }

            //			导航切换
            $(".set-meal-cont").eq(0).show();
            CombinationPrice = $('.original_price_one').eq(0).find('span').text();//默认主商品的市场价
            PriceSaving = $('.original_price_one_collocations').eq(0).find('span').text();//默认主商品的优惠价
            $('.Price-saving').eq(0).find('span').text(PriceSaving);//默认主商品的优惠价
            eachIput($('.at-que').eq(0).find('input[type=checkbox]'));
            $('.Combination-price').eq(0).find('i').text(CombinationPrice);
            $('.Price-saving').eq(0).find('span').text(PriceSaving);
            $('.set-meal-slect').eq(0).find('span').text(num);
            $(".set-meal-nav li").click(function () {
                var index = $(this).index();
                CombinationPrice = $('.original_price_one').eq(index).find('span').text();
                PriceSaving = $('.original_price_one_collocations').eq(index).find('span').text();
                $('.Price-saving').eq(index).find('span').text(PriceSaving);
                eachIput($('.at-que').eq(index).find('input[type=checkbox]'));
                $('.Combination-price').eq(index).find('i').text(CombinationPrice);
                $('.Price-saving').eq(index).find('span').text(PriceSaving);
                $('.set-meal-slect').eq(index).find('span').text(num);
                $(".set-meal-nav li").removeClass("meal-nav-li");
                $(this).addClass("meal-nav-li");
                $(".set-meal-cont").hide();
                $(".set-meal-cont").eq(index).show()

            })

        })();

    }

    //遍历默认选中的
    function eachIput(data) {
        num = 1;
        data.each(function (i) {
            var checked = $(this).context.checked;
            if (checked) {
                var val = $(this).parents(".meal-price").find('span').text();
                var saving = $(this).parents(".meal-price").next().find('span').text();
                CombinationPrice = (CombinationPrice - 0) + (val - 0);
                PriceSaving = (PriceSaving - 0) + (saving - 0);
                num++;
            }
        });
    }

    //选中获取价格
    function clickGetPrice(e, price, saving) {
        var parents = $(e).parents(".set-meal-cont");
        var CombinationCount = parents.find('.Combination-price').find('i').text();
        var PriceCount = parents.find('.Price-saving').find('span').text();
        if ($(e).attr('checked')) {
            $(e).removeAttr('checked')
            parents.find('.Combination-price').find('i').text((CombinationCount - price).toFixed(2));
            parents.find('.Price-saving').find('span').text((PriceCount - saving).toFixed(2));
            num--
            parents.find('.set-meal-slect').find('span').text(num);
        } else {
            $(e).attr('checked', 'checked')
            parents.find('.Combination-price').find('i').text((CombinationCount - 0 + price).toFixed(2));
            parents.find('.Price-saving').find('span').text((PriceCount - 0 + saving).toFixed(2));
            num++
            parents.find('.set-meal-slect').find('span').text(num);
        }
    }

    function addCombinationShop(e,t) {
        var a = $(e).parents('.set-meal-cont').find('.at-que').find('input[type=checkbox]');
        var n = 0;
        var arr = new Array();
        var address = $('#dispatching_msg').attr('region_id');
        var combination = {goods_id:$(e).parents('.set-meal-cont').find('.combination_goods_ids').val(),item_id:$(e).parents('.set-meal-cont').find('.combination_item_id').val(),'region_id':address};
        arr.push(combination) ;
        var combination_id = $(e).parents('.set-meal-cont').find('.combination_id').val();
        $.each(a,function (i,o) {
            var checked = $(this).context.checked;
            if (checked) {
                var combination_goods_ids = {goods_id:$(this).attr('data-id'),item_id:$(this).attr('data-item'),'region_id':address};
                arr.push(combination_goods_ids) ;
                n++;
            }
        });

        if(n==0){
            alert('请至少勾选一个商品');
            return false;
        }else{
            $.ajax({
                type: "Post",
                url: "{{ U('Home/Cart/addCombination') }}",
                data: {combination_id: combination_id, combination_goods: arr,num:1},
                dataType: "json",
                success: function (data) {

                    if (data.status == 1) {
                        if(t==1){
                            location.href = "/index.php?m=Home&c=Cart&a=index";
                            return false;
                        }else{
                            layer.open({
                                type: 2,
                                title: '温馨提示',
                                skin: 'layui-layer-rim', //加上边框
                                area: ['490px', '386px'], //宽高
                                content: "/index.php?m=Home&c=Goods&a=open_add_cart"
                            });
                        }

                    }else{
                        layer.msg(data.msg, {icon: 2});
                    }

                }
            });
        }

    }

</script>

<!--搭配购组合套餐 e-->
<div class="detail-main p">
    <div class="w1224">
        <div class="deta-le-ma">
            <div class="type_more">
                <div class="type-top">
                    <h2>热搜推荐</h2>
                </div>
                <div class="type-bot">
                    <ul class="xg_typ">
                        @foreach( $tpshop_config['hot_keywords'] ?: [] as $k => $wd )

                            <li><a href="{{ U('Home/Goods/search',array('q'=>$wd)) }}">{{ $wd }}</a></li>
                        
@endforeach
                    </ul>
                </div>
            </div>
            <div class="type_more ma-to-20">
                <div class="type-top">
                    <h2>推荐热卖</h2>
                </div>
                <div class="tjhot-shoplist type-bot">
                     @foreach(tpl_query("select goods_id,goods_name,shop_price from __PREFIX__goods where is_recommend=1 and is_on_sale = 1 order by goods_id desc limit 10") as $k=>$vo) 
                        <div class="alone-shop">
                            <a href="{{ U('Home/Goods/goodsInfo',array('id'=>$vo['goods_id'])) }}"><img
                                    src="{{ goods_thum_images($vo['goods_id'],206,206) }}" style="display: inline;"></a>
                            <p class="line-two-hidd"><a href="{{ U('Home/Goods/goodsInfo',array('id'=>$vo['goods_id'])) }}">{{ getSubstr($vo['goods_name'],0,30) }}</a>
                            </p>
                            <p class="price-tag"><span class="li_xfo">￥</span><span>{{ $vo['shop_price'] }}</span></p>
                            <!--<p class="store-alone"><a href="">恒要达食品专享店</a></p>-->
                        </div>
                     @endforeach 
                </div>
            </div>
        </div>
        <div class="deta-ri-ma">
    <div class="introduceshop">
        <div id="datail-nav-top" class="datail-nav-top">
            <ul>
                <li class="red"><a href="javascript:void(0);">商品介绍</a></li>
                <li><a href="javascript:void(0);">规格及包装</a></li>
                <li><a href="javascript:void(0);">评价<em>({{ $goods['comment_statistics']['total_sum'] }})</em></a></li>
                <li><a href="javascript:void(0);" onclick="get_consult(0,1)">售后服务</a></li>
            </ul>
        </div>
        <!--<div class="he-nav"></div>-->
        <div class="shop-describe shop-con-describe p">
            <div class="deta-descri">
                <p class="shopname_de"><span>商品名称：</span><span>{{ $goods['goods_name'] }}</span></p>
                <div class="ma-d-uli p">
                    <ul>
                        <li><span>货号：</span><span>{{ $goods['goods_sn'] }}</span></li>
                        <?php $goods_attr_show_list = $goods->goodsAttr()->where('attr_index',1)->select(); ?>
                         @foreach( $goods_attr_show_list ?: [] as $i => $goods_attr )

                            <li><span>{{ $goods_attr['goods_attribute']['attr_name'] }}：</span><span>{{ $goods_attr['attr_value'] }}</span></li>
                        
@endforeach
                    </ul>
                </div>

                <div class="moreparameter">
                    <!--
                    <a href="">跟多参数<em>>></em></a>
                    -->
                </div>
            </div>
            <div class="detail-img-b">
                @if($goods['video']) 
                    <video controls="controls" id="detail_video" preload="preload" onended="this.load();">
                        <source src="{{ $goods['video'] }}" TYPE="video/mp4"/>
                    </video>
                 @endif 
                {{ htmlspecialchars_decode($goods['goods_content']) }}
            </div>
        </div>
        <div class="shop-describe shop-con-describe p" style="display: none;">
            <div class="deta-descri">
                <!--
                <p class="shopname_de"><span>如果您发现商品信息不准确，<a class="de_cb" href="">欢迎纠错</a></span></p>
                -->
                <h2 class="shopname_de">属性</h2>
                @foreach( $goods_attr_show_list ?: [] as $k => $v )

                    <div class="twic_a_alon">
                        <p class="gray_t">{{ $v['goods_attribute']['attr_name'] }}</p>
                        <p>{{ $v['attr_value'] }}</p>
                    </div>
                
@endforeach
            </div>
        </div>
        <div class="shop-con-describe p" style="display: none;">
            <div class="shop-describe p">
                <div class="comm_stsh ma-to-20">
                    <div class="deta-descri">
                        <h2>商品评价</h2>
                    </div>
                </div>
                <div class="deta-descri p">
                    <ul class="tebj">
                        <li class="percen"><span>{{ $goods['comment_statistics']['high_rate'] }}%</span></li>
                        <li class="co-cen">
                            <div class="comm_gooba">
                                <div class="gg_c">
                                    <span class="hps">好评</span>
                                    <span class="hp">（{{ $goods['comment_statistics']['high_rate'] }}%）</span>
                                            <span class="zz_rg"><i
                                                    style="width: {{ $goods['comment_statistics']['high_rate'] }}%;"></i></span>
                                </div>
                                <div class="gg_c">
                                    <span class="hps">中评</span>
                                    <span class="hp">（{{ $goods['comment_statistics']['center_rate'] }}%）</span>
                                            <span class="zz_rg"><i
                                                    style="width: {{ $goods['comment_statistics']['center_rate'] }}%;"></i></span>
                                </div>
                                <div class="gg_c">
                                    <span class="hps">差评</span>
                                    <span class="hp">（{{ $goods['comment_statistics']['low_rate'] }}%）</span>
                                            <span class="zz_rg"><i
                                                    style="width: {{ $goods['comment_statistics']['low_rate'] }}%;"></i></span>
                                </div>
                            </div>
                        </li>
                        <li class="tjd-sum">
                            <!--<p class="tjd">推荐点：</p>-->
                            <div class="tjd-a">
                                买家评论事项：购买后有什么问题, 满意, 或者不不满, 都可以在这里评论出来, 这里评论全部源于真实的评论.
                            </div>
                        </li>
                        <li class="te-cen">
                            <div class="nchx_com">
                                <p>您可以对已购的商品进行评价</p>
                                <a class="jfnuv" href="{{ U('Home/Order/comment') }}">发表评论</a>
                                <!--<p class="xja"><span>详见</span><a class="de_cb" href="">积分规则</a></p>-->
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="deta-descri p">
                    <div class="cte-deta">
                        <ul id="fy-comment-list">
                            <li data-t="1" class="red">
                                <a href="javascript:void(0);"
                                   class="selected">全部评论（{{ $goods['comment_statistics']['total_sum'] }}）</a>
                            </li>
                            <li data-t="2">
                                <a href="javascript:void(0);">好评（{{ $goods['comment_statistics']['high_sum'] }}）</a>
                            </li>
                            <li data-t="3">
                                <a href="javascript:void(0);">中评（{{ $goods['comment_statistics']['center_sum'] }}）</a>
                            </li>
                            <li data-t="4">
                                <a href="javascript:void(0);">差评（{{ $goods['comment_statistics']['low_sum'] }}）</a>
                            </li>
                            <li data-t="5">
                                <a href="javascript:void(0);">有图（{{ $goods['comment_statistics']['img_sum'] }}）</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="line-co-sunall" id="ajax_comment_return">
                </div>
            </div>
        </div>
        <div class="shop-con-describe p" style="display: none;">
            <div class="shop-describe p">
                <div class="comm_stsh ma-to-20">
                    <div class="deta-descri">
                        <h2>售后保障</h2>
                    </div>
                </div>
                <div class="deta-descri p">
                    <div class="securi-afr">
                        <ul>
                            <li class="frhe"><i class="detai-ico msz1"></i></li>
                            <li class="wnuzsuhe">
                                <h2>卖家服务</h2>
                                <p>全国联保一年</p>
                            </li>
                        </ul>
                        <ul>
                            <li class="frhe"><i class="detai-ico msz2"></i></li>
                            <li class="wnuzsuhe">
                                <h2>商城承诺</h2>
                                <p>商城平台卖家销售并发货的商品，由平台卖家提供发票和相应的售后服务。请您放心购买！
                                    注：因厂家会在没有任何提前通知的情况下更改产品包装、产地或者一些附件，本司不能确保客户收到的货物与商城图片、产地、附件说明完全一致。
                                    只能确保为原厂正货！并且保证与当时市场上同样主流新品一致。若本商城没有及时更新，请大家谅解！</p>
                            </li>
                        </ul>
                        <ul>
                            <li class="frhe"><i class="detai-ico msz3"></i></li>
                            <li class="wnuzsuhe">
                                <h2>正品行货</h2>
                                <p>商城向您保证所售商品均为正品行货，商城自营商品开具机打发票或电子发票。</p>
                            </li>
                        </ul>
                        <ul>
                            <li class="frhe"><i class="detai-ico msz4"></i></li>
                            <li class="wnuzsuhe">
                                <h2>全国联保</h2>
                                <p>凭质保证书及商城发票，可享受全国联保服务（奢侈品、钟表除外；奢侈品、钟表由联系保修，享受法定三包售后服务），与您亲临商场选购的商品享
                                    受相同的质量保证。商城还为您提供具有竞争力的商品价格和运费政策，请您放心购买！ </p>
                            </li>
                        </ul>
                        <ul>
                            <li class="frhe"><i class="detai-ico msz5"></i></li>
                            <li class="wnuzsuhe">
                                <h2>退货无忧</h2>
                                <p>客户购买商城自营商品7日内（含7日，自客户收到商品之日起计算），在保证商品完好的前提下，可无理由退货。（部分商品除外，详情请见各商品细则）</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="comm_stsh ma-to-20">
                    <div class="deta-descri">
                        <h2>退款说明</h2>
                    </div>
                </div>
                <div class="deta-descri p">
                    <div class="fetbajc">
                        <p>1.若您购买的家电商品已经拆封过，需要退换货，需请联系原厂开具鉴定检测单</p>
                        <p>2.签收商品隔日起七日内提交退货申请，2-3天快递员与您联系安排取回商品</p>
                        <p>3.商品退回检验，且必须附上检测单</p>
                        <p>5.若退回商品有缺件、影响二次销售状况时，退款作业将暂时停止，飞牛网会依商品状况报价，后由客服人员与您联系说明并于订单内扣除费用后退回剩余款项，
                            或您可以取消退货申请；若符合退货条件者将于商品取回后约1-2个工作日内完成退款</p>
                        <p>4.通过线上支付的订单办理退货，商品退回检验无误后，商城将提交退款申请, 实际款项会依照各银行作业时间返还至您原支付方式 若您采用货到付款，请于
                            办理退货时提供退款账户，亦于商品退回检验无误后，将退款汇至您的银行账户中</p>
                    </div>
                </div>
            </div>
            <!--商品咨询-status-->
            <div class="consult-h" id="consult-h">
                <div class="consult-menus">
                    <a class="consult-ac" href="javascript:;" onclick="get_consult(0,1)">全部咨询</a>
                    <a href="javascript:;" onclick="get_consult(1,1)">商品咨询</a>
                    <a href="javascript:;" onclick="get_consult(2,1)">支付</a>
                    <a href="javascript:;" onclick="get_consult(3,1)">配送</a>
                    <a href="javascript:;" onclick="get_consult(4,1)">售后</a>
                    <input type="hidden" name="type" id="type" value="0"/>
                </div>
                <div class="consult-cont">
                    <div class="consult-item">
                        <div class="consult-tips"><span class="c-orange">温馨提示：</span>
                            因产线可能更改商品包装、产地、附配件等未及时通知，且每位咨询者购买、提问时间等不同。为此，客服给到的回复仅对提问者3天内有效，其他网友仅供参考！给您带来的不便还请谅解，谢谢！
                        </div>
                        <div id="consult_content">
                        </div>
                        <div class="publish-title">发表咨询</div>
                        <form method="post" id="consultForm">
                            <input type="hidden" name="goods_id" value="{{ $goods['goods_id'] }}"/>
                            <div class="publish-cont">
                                <p class="check-consult-tpye">
                                    商品咨询：
                                    <label> <input type="radio" name="consult_type" value="1"
                                                   checked/>商品咨询</label>
                                    <label> <input type="radio" name="consult_type" value="2"/>支付</label>
                                    <label> <input type="radio" name="consult_type" value="3"/>配送</label>
                                    <label> <input type="radio" name="consult_type" value="4"/>售后</label>
                                </p>
                                <div class="nickname">
                                    昵称:
                                    @if(empty($username)) 
                                        <input type="text" name="username" placeholder="请输入昵称" value=""/>
                                        @else
                                        {{ $username }}
                                        <input type="hidden" name="username" value="{{ $username }}" readonly/>
                                     @endif 
                                </div>
                                        <textarea class="publish-des" placeholder="请在这里输入你要描述的信息" name="content"
                                                  id="content"></textarea>
                                <p class="v-code">
                                    验证码:
                                    <input type="text" name="verify_code" maxlength="4"/>
                                    <img id="verify_code" width="80" height="40" onclick="verify()">
                                </p>
                                <input class="publish-btn" id="consult_submit" type="button"
                                       value="提交"/>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!--商品咨询-end-->
        </div>
    </div>
</div>
<script>
    $(document).ready(function () {
        verify();
        ajaxComment(1, 1);
    });
    // 普通 图形验证码
    function verify() {
        $('#verify_code').attr('src', '/index.php?m=Home&c=User&a=verify&type=consult&r=' + Math.random());
    }
    //商品评价
    function ajaxComment(commentType, page) {
        $.ajax({
            type: "GET",
            url: "/index.php?m=Home&c=goods&a=ajaxComment&goods_id={{ $goods['goods_id'] }}&commentType=" + commentType + "&p=" + page,//+tab,
            success: function (data) {
                $("#ajax_comment_return").html('').append(data);
            }
        });
    }
    var consult = $('#consult-h');
    consult.find('.consult-item').eq(0).addClass('consult-ac');
    consult.find('.consult-menus>a').click(function () {
        $(this).addClass('consult-ac').siblings().removeClass('consult-ac');
        consult.find('.consult-item').eq($(this).index()).addClass('consult-ac').siblings().removeClass('consult-ac');
        $('.check-consult-tpye').find('a').eq($(this).index())
    });
    //商品咨询分页
    $(document).on('click', '.pagination  a', function () {
        var page = $(this).data('p');
        var type = $('#type').val();
        get_consult(type, page)
    });

    /**
     * 获取商品咨询
     * @param type  //咨询类型
     * @param page  //分页
     */
    function get_consult(type, page) {
        var goods_id = $("input[name='goods_id']").val();
        var url = "/index.php?m=Home&c=Goods&a=ajax_consult";
        $.ajax({
            type: "get",
            url: url,
            data: {goods_id: goods_id, consult_type: type, p: page},
            dataType: "html",
            success: function (data) {
                $('#consult_content').empty().append(data);
            }
        });
    }

    //商品咨询提交
    $(document).on('click', '#consult_submit', function () {
        var content = $.trim($('#content').val());
        if (content.length > 500) {
            layer.msg('咨询内容不得超过500字符！！', {icon: 3});
            return false;
        }
        $.ajax({
            type: "POST",
            url: "{{ U('Goods/consult') }}",
            data: $('#consultForm').serialize(),
            dataType: "json",
            success: function (data) {
                if (data.status == 1) {
                    layer.msg(data.msg, {icon: 1});
                } else {
                    layer.msg(data.msg, {icon: 2});
                }
            }
        });
    });

    //商品介绍、规格及包装选项卡切换
    $("#datail-nav-top ul li").click(function () {
        $("#datail-nav-top").css("position", "static");
        $("html,body").animate({scrollTop:$("#datail-nav-top").offset().top}, 300);
        $(this).addClass('red').siblings().removeClass('red');
        var er = $('.datail-nav-top ul li').index(this);
        $('.shop-con-describe').eq(er).show().siblings('.shop-con-describe').hide();
    })

    // 好评差评 切换
    $('.cte-deta ul li').click(function () {
        $(this).addClass('red').siblings().removeClass('red');
        commentType = $(this).data('t');// 评价类型   好评 中评  差评
        ajaxComment(commentType, 1);
    })
</script>
    </div>
</div>
<script type="text/javascript">
    //	商品详情页 滚动到一定位置固定定位
    $(window).scroll(function () {
        if ($(window).scrollTop() <= 850) {
            $("#datail-nav-top").css("position", "static");
        } else {
            $("#datail-nav-top").css({
                "position": "fixed",
                "top": "0",
                "left": "600",
                "width": "968",
                "z-index": "10007",
                "background-color": "#fff"
            });
        }
    });

</script>
<!--footer-s-->
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
<!--看了又看-s-->
<div style="display: none" id="look_see">
     @foreach(tpl_query("select goods_id,goods_name,shop_price from `__PREFIX__goods` where goods_id != $goods[goods_id] AND cat_id = $goods[cat_id] AND is_on_sale = 1 limit 12") as $k=>$look) 
        <div class="tjhot-shoplist type-bot">
            <div class="alone-shop">
                <a href="{{ U('Home/Goods/goodsInfo',array('id'=>$look['goods_id'])) }}">
                    <img class="wiahides"src="{{ goods_thum_images($look['goods_id'],206,206) }}" style="display: inline;"></a>
                <p class="shop_name2">
                    <a href="{{ U('Home/Goods/goodsInfo',array('id'=>$look['goods_id'])) }}">{{ $look['goods_name'] }}</a>
                </p>
                <p class="price-tag">
                    <span class="li_xfo">￥</span><span>{{ $look['shop_price'] }}</span>
                </p>
            </div>
        </div>
     @endforeach 
    <!--看了又看-s-->
</div>
<!--footer-e-->
<script src="/assets/static/js/lazyload.min.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript" src="/assets/static/js/headerfooter.js"></script>

@if((!empty($tpshop_config['basic_im_choose'])) && ($tpshop_config['basic_im_choose'] == 1)) 
    <script type="text/javascript" src="http://{{ $tpshop_config['basic_im_website'] }}/static/test/common/layui/layui.js"></script>
    <script type="text/javascript" src="http://{{ $tpshop_config['basic_im_website'] }}/static/test/common/js/main.js"></script>
 @endif 

<script type="text/javascript">
    //判断是否有视频标签
    if ($('#video').length > 0) {
        $('#photoBody').addClass('videoshow-ac');
    }
    //点击关闭视频
    $('.video-play').click(function (event) {
        $('#photoBody').addClass('videoshow-ac').removeClass('picshow-ac');
        video.play();
    });
    //点击播放视频
    $('.close-video').click(function (event) {
        $('#photoBody').addClass('picshow-ac').removeClass('videoshow-ac');
        video.pause();
    });
    var commentType = 1;// 默认评论类型
    var spec_goods_price = $.parseJSON($('#buy_goods_form').find("input[name='spec_goods_price']").val());//规格库存价格
    $(document).ready(function () {
        /*商品缩略图放大镜*/
        $(".jqzoom").jqueryzoom({
            xzoom: 500,
            yzoom: 500,
            offset: 1,
            position: "right",
            preload: 1,
            lens: 1
        });
        replace_look();
        initSpec();
        initGoodsPrice();
        changeImg();
    });

    var buy_now = $('#buy_now');
    var join_cart = $('#join_cart');
    //购买按钮显示
    function buy_button(){
        var is_virtual = $("input[name='is_virtual']").val();//是否是虚拟商品
        var exchange_integral = $("input[name='exchange_integral']").val();//是否是为积分商品
        var goods_prom_type = $('input[name="goods_prom_type"]').attr('value');//活动商品
        var activity_is_on = $('input[name="activity_is_on"]').attr('value'); //活动是否进行中
        buy_now.hide();
        join_cart.hide();
        if(is_virtual == 1){
            buy_now.html('立即购买').show();
            return;
        }
        if(exchange_integral > 0){
            buy_now.html('立即兑换').show();
            return;
        }
        if(goods_prom_type == 4 && activity_is_on == 1){
            buy_now.html('立即预订').show();
            return;
        }
        buy_now.html('立即购买').show();
        join_cart.show();
    }

    //购买按钮
    $(function () {
        //立即购买
        $(document).on('click', '#buy_now', function () {
            if ($(this).hasClass('buy_bt_disable')) {
                return;
            }
            if (getCookie('user_id') == '') {
                pop_login();
                return;
            }
            var is_virtual = $("input[name='is_virtual']").val();//是否是虚拟商品
            var exchange_integral = $("input[name='exchange_integral']").val();//是否是积分兑换商品
            var goods_id = $("input[name='goods_id']").val();
            var store_count = $("input[name='store_count']").attr('value');// 商品原始库存
            var goods_num = parseInt($("input[name='goods_num']").val());
            if (goods_num == 0) {
                layer.msg('购买数量不能为0', {icon: 2});
                return;
            }
            var goods_prom_type = $('input[name="goods_prom_type"]').attr('value');//活动商品
            var activity_is_on = $('input[name="activity_is_on"]').attr('value'); //活动是否进行中
            var form = $('#buy_goods_form');
            if (is_virtual == 1) {
                var virtual_limit = parseInt($('#virtual_limit').val());
                if ((goods_num <= store_count && goods_num <= virtual_limit) || (goods_num < store_count && virtual_limit == 0)) {
                   form.attr('action', "{{ U('Home/Cart/cart2',['action'=>'buy_now']) }}").submit();
                    // form.attr('action', "{{ U('Home/Virtual/buy_virtual') }}").submit();//之前的跳转虚拟订单跳转页
                } else {
                    layer.msg('购买数量超过此商品购买上限', {icon: 3});
                }
                return;
            }
            if (exchange_integral > 0) {
                buyIntegralGoods(goods_id, 1);
                return;
            }
            if(goods_prom_type == 4 && activity_is_on == 1){
                form.attr('action', "{{ U('Home/Cart/pre_sell') }}").submit();
                return;
            }
            //普通流程
            if (goods_num <= store_count) {
                form.attr('action', "{{ U('Home/Cart/cart2',['action'=>'buy_now']) }}").submit();
            } else {
                layer.msg('购买数量超过此商品购买上限', {icon: 3});
            }
        })
        //加入购物车
        $(document).on('click', '#join_cart', function () {
            if ($(this).hasClass('buy_bt_disable')) {
                return;
            }
            var goods_id = $("input[name='goods_id']").val();
            AjaxAddCart(goods_id, 1);
        })
    })

    //有规格id的时候，解析规格id选中规格
    function initSpec() {
        var item_id = $("input[name='item_id']").val();
        $.each(spec_goods_price, function (i, o) {
            if (o.item_id == item_id) {
                var spec_key_arr = o.key.split("_");
                $.each(spec_key_arr, function (index, item) {
                    var spec_radio = $("#goods_spec_" + item);
                    var goods_spec_a = $("#goods_spec_a_" + item);
                    spec_radio.attr("checked", "checked");
                    goods_spec_a.addClass('red');
                })
            }
        })
        if (item_id > 0 && !$.isEmptyObject(spec_goods_price)) {
            var item_arr = [];
            $.each(spec_goods_price, function (i, o) {
                item_arr.push(o.item_id);
            })
            //规格id不存在商品里
            if ($.inArray(parseInt(item_id), item_arr) < 0) {
                initFirstSpec();
            } else {
                $.each(spec_goods_price, function (i, o) {
                    if (o.item_id == item_id) {
                        var spec_key_arr = o.key.split("_");
                        $.each(spec_key_arr, function (index, item) {
                            var spec_radio = $("#goods_spec_" + item);
                            var goods_spec_a = $("#goods_spec_a_" + item);
                            spec_radio.attr("checked", "checked");
                            goods_spec_a.addClass('red');
                        })
                    }
                })
            }
        } else {
            initFirstSpec();
        }
    }

    //默认让每种规格第一个选中
    function initFirstSpec() {
        $('.spec_goods_price_div').each(function (i, o) {
            var firstSpecRadio = $(this).find("input[type='radio']").eq(0);
            firstSpecRadio.attr('checked', 'checked').prop('checked', 'checked');
            firstSpecRadio.parent().find('a').eq(0).addClass('red');
        })
    }

    //看了又看切换
    var tmpindex = 0;
    var look_see_length = $('#look_see').children().length;
    function replace_look() {
        var listr = '';
        if (tmpindex * 2 >= look_see_length) tmpindex = 0;
        $('#look_see').children().each(function (i, o) {
            if ((i >= tmpindex * 2) && (i < (tmpindex + 1) * 2)) {
                listr += '<div class="tjhot-shoplist type-bot">' + $(o).html() + '</div>';
            }
        });
        tmpindex++;
        $('#see_and_see').empty().append(listr);
    }

    //缩略图切换
    $('.small-pic-li').mouseenter(function () {
        if ($('#video').length > 0) {
            $('.close-video').trigger('click');
        }
        $(this).siblings().removeClass('active');
        $(this).addClass('active');
        $('#zoomimg').attr('src', $(this).find('img').attr('data-img')).attr('jqimg', $(this).find('img').attr('data-big'));
    });

    //缩略图切换
    function changeImg() {
        var $picBox = $('#small-pic');
        var $picList = $picBox.find('.small-pic-li');
        var length = $picList.length;
        $picBox.css('width', 70 * length);
        if ($('#video').length > 0) { //判断是否有视频标签
            $('#photoBody').addClass('videoshow-ac');
        }
        $('.video-play').click(function (event) { //点击关闭视频
            $('#photoBody').addClass('videoshow-ac').removeClass('picshow-ac');
            video.play();
        });
        $('.close-video').click(function (event) {  //点击播放视频
            $('#photoBody').addClass('picshow-ac').removeClass('videoshow-ac');
            video.pause();
        });
        //缩略图切换
        $picList.mouseenter(function () {
            if ($('#video').length > 0) {
                $('.close-video').trigger('click');
            }
            $(this).addClass('active').siblings().removeClass('active');
            $('#zoomimg').attr('src', $(this).find('img').attr('data-img')).attr('jqimg', $(this).find('img').attr('data-big'));
        })
        var i = 0;
        if (length <= 5) {
            $('.product-gallery .next-btn').css('display', 'none');
        } else {
            //前一张缩略图
            $('.next-left').click(function () {
                i--;
                if (i < 0) {
                    i = 0;
                    return;
                }
                $picBox.animate({left: -i * 70}, 500);
            })
            //后前一张缩略图
            $('.next-right').click(function () {
                i++;
                if (i > length - 5) {
                    i = length - 5;
                    return;
                }
                $picBox.animate({left: -i * 70}, 500);
            })
        }
    }

    //购买数量加减
    function altergoodsnum(n) {
        var num = parseInt($('#number').val());
        var maxnum = parseInt($('#number').attr('max'));
        if (maxnum > 200) {
            maxnum = 200;
        }
        num += n;
        num <= 0 ? num = 1 : num;
        if (num >= maxnum) {
            $(this).addClass('no-mins');
            num = maxnum;
        }
        $('#store_count').text(maxnum - num); //更新库存数量
        $('#number').val(num);
        /*        initGoodsPrice();*/
    }


    //初始化商品价格库存
    function initGoodsPrice() {
        var goods_id = $('input[name="goods_id"]').val();
        var goods_num = parseInt($('#number').val());
        if (!$.isEmptyObject(spec_goods_price)) {
            var goods_spec_arr = [];
            $("input[name^='goods_spec']").each(function () {
                if ($(this).attr('checked') == 'checked') {
                    goods_spec_arr.push($(this).val());
                }
            });
            var spec_key = goods_spec_arr.sort(sortNumber).join('_');  //排序后组合成 key
            var spec_goods_price_item = search_spec_goods_price(spec_key);
            var spec_goods_price_arr = Object.keys(spec_goods_price_item);
            if(spec_goods_price_arr.length > 0){
                var item_id = spec_goods_price_item['item_id'];
                $('input[name=item_id]').val(item_id);
            } else {
                $("#goods_price").html("<em>￥</em>" + 0); //变动价格显示
                $('#spec_store_count').html(0);
                $('input[name="shop_price"]').attr('value', 0);//商品价格
                $('input[name="store_count"]').attr('value', 0);//商品库存
                $('.buy_button').addClass('buy_bt_disable');
                return false;
            }
        }
        //获取搭配购列表
        getCombination();

        $.ajax({
            type: 'post',
            dataType: 'json',
            data: {goods_id: goods_id, item_id: item_id, goods_num: goods_num},
            url: "{{ U('Home/Goods/activity') }}",
            success: function (data) {
                if (data.status == 1) {
                    $('input[name="goods_prom_type"]').attr('value', data.result.goods.prom_type);//商品活动类型
                    $('input[name="prom_id"]').attr('value', data.result.goods.prom_id);//商品活动id
                    $('input[name="shop_price"]').attr('value', data.result.goods.shop_price);//商品价格
                    $('input[name="store_count"]').attr('value', data.result.goods.store_count);//商品库存
                    $('input[name="market_price"]').attr('value', data.result.goods.market_price);//商品原价
                    $('input[name="start_time"]').attr('value', data.result.goods.start_time);//活动开始时间
                    $('input[name="end_time"]').attr('value', data.result.goods.end_time);//活动结束时间
                    $('input[name="activity_title"]').attr('value', data.result.goods.activity_title);//活动标题
                    $('input[name="prom_detail"]').attr('value', data.result.goods.prom_detail);//促销详情
                    $('input[name="activity_is_on"]').attr('value', data.result.goods.activity_is_on);//活动是否正在进行中

                    $('input[name="deposit_price"]').attr('value', data.result.goods.deposit_price);//订金
                    $('input[name="balance_price"]').attr('value', data.result.goods.balance_price);//尾款
                    $('input[name="ing_amount"]').attr('value', data.result.goods.ing_amount);//已预订了多少个
                    price_ladder = data.result.goods.price_ladder;
                    goods_activity_theme();
                    buy_button();
                }
                doInitRegion();
            }
        });
    }

    //价格阶梯显示
    var price_ladder = null;
    function priceLadderShow() {
        var price_ladder_html = '';
        if (price_ladder != null && price_ladder != '') {
            $.each(price_ladder, function (i, o) {
                price_ladder_html += '<li class="pre_undred">满<span>' + o.amount + '件</span><br/><span>' + o.price + '</span></li>';
            });
            $('#price_ladder_html').empty().html(price_ladder_html);
            $('.price_ladder_div').show();
            satrhide();
            if (price_ladder.length > 4) {
                $('.jieti-anniu').show();
            } else {
                $('.jieti-anniu').hide();
            }
        }
    }

    //商品价格库存显示
    function goods_activity_theme() {
        $('.pre_sell_div').hide();
        $('.price_ladder_div').hide();
        $('#dispatching_desc').show();
        var goods_prom_type = parseInt($('input[name="goods_prom_type"]').attr('value'));
        var activity_is_on = $('input[name="activity_is_on"]').attr('value');
        if (activity_is_on == 0) {
            setNormalGoodsPrice();
        } else {
            switch (goods_prom_type) {
                case 1:
                    setFlashSaleGoodsPrice();
                    break;
                case 2:
                    setGroupByGoodsPrice();
                    break;
                case 3:
                    setPromGoodsPrice();
                    break;
                case 4:
                    setPreSellGoodsPrice();
                    break;
                default:
                    setNormalGoodsPrice();
            }
        }
        var buy_num = parseInt($('#number').val());//购买数
        var store = parseInt($('input[name="store_count"]').val());//实际库存数量
        if (store <= 0) {
            $('.buy_button').addClass('buy_bt_disable');
        } else {
            $('.buy_button').removeClass('buy_bt_disable');
        }
        if (buy_num > store) {
            $('.buyNum').val(store);
        }
    }

    //普通商品库存和价格
    function setNormalGoodsPrice() {
        var goods_price, store_count;//商品价,商品库存
        var market_price = $("input[name='market_price']").attr('value');// 商品市场价
        var exchange_integral = $("input[name='exchange_integral']").attr('value');// 兑换积分
        var point_rate = $("input[name='point_rate']").attr('value');// 积分金额比
        // 如果有属性选择项
        if (!$.isEmptyObject(spec_goods_price)) {
            var goods_spec_arr = [];
            $("input[name^='goods_spec']").each(function () {
                if ($(this).attr('checked') == 'checked') {
                    goods_spec_arr.push($(this).val());
                }
            });
            var spec_key = goods_spec_arr.sort(sortNumber).join('_');  //排序后组合成 key
            var spec_goods_price_item = search_spec_goods_price(spec_key);
            goods_price = spec_goods_price_item['price']; // 找到对应规格的价格
            store_count = spec_goods_price_item['store_count']; // 找到对应规格的库存
            $("input[name='shop_price']").attr('value', goods_price);
            $("input[name='store_count']").attr('value', store_count);
            $("input[name='market_price']").attr('value', market_price);
        }
        priceLadderShow();
        goods_price = $("input[name='shop_price']").attr('value');// 商品本店价
        store_count = $("input[name='store_count']").attr('value');// 商品库存
        $('#market_price_title').empty().html('市场价：');
        $('#market_price').empty().html(market_price);
        $("#goods_price").html("<em>￥</em>" + goods_price); //变动价格显示
        var integral = round(goods_price - (exchange_integral / point_rate), 2);
        $("#integral").html(integral + '+' + exchange_integral + '积分'); //积分显示
        $('#spec_store_count').html(store_count);
        $('.presale-time').hide();
        $('#number').attr('max', store_count);
    }

    //预售商品库存和价格
    function setPreSellGoodsPrice(){
        var pre_sale_price = $("input[name='shop_price']").attr('value');//预售价
        var pre_sale_count = $("input[name='store_count']").attr('value');//预售库存
        var market_price = $("input[name='market_price']").attr('value');
        var start_time = $("input[name='start_time']").attr('value');
        var end_time = $("input[name='end_time']").attr('value');
        var activity_title = $("input[name='activity_title']").attr('value');
        var deposit_price = $("input[name='deposit_price']").attr('value');
        var balance_price = $("input[name='balance_price']").attr('value');
        var ing_amount = $("input[name='ing_amount']").attr('value');
        var price_ladder_html = '';
        if(price_ladder != null && price_ladder != ''){
            var n = 0;
            $.each(price_ladder,function(i, o){
                if(ing_amount == o.amount){
                    price_ladder_html += '<li class="pre_undred">满<span>' + o.amount + '件</span><br/><span>' + o.price + '</span></li>';
                }else{
                    price_ladder_html += '<li class="elis">满<span>' + o.amount + '件</span><br/><span>' + o.price + '</span></li>';
                }
                n++;
            });
            
            if (price_ladder.length > 4) {
                $('.jieti-anniu').show();
            } else {
                $('.jieti-anniu').hide();
            }
            $('#price_ladder_html').empty().html(price_ladder_html);
        }
        $('.pre_sell_div').show();
        $("#goods_price").html("<em>￥</em>"+pre_sale_price); //变动价格显示
        $("#deposit_price").html("<em>￥</em>"+deposit_price);
        $("#balance_price").html("<em>￥</em>"+balance_price);
        $('#spec_store_count').html(pre_sale_count);
        $('#goods_price_title').html('预售价：');
        $('#dispatching_desc').hide();
        $('#activity_type').empty().html('预售');
        $('#market_price_title').empty().html('原&nbsp;&nbsp;价：');
        $('#activity_label').empty().html('预&nbsp;&nbsp;售：');
        $('#activity_title').empty().html(activity_title);
        $('#activity_title_div').show();
        $('#market_price').empty().html(market_price);
        $('.presale-time').show();
        $('#prom_detail').hide();
        $('#number').attr('max',pre_sale_count);
        setInterval(activityTime, 1000);
        satrhide();
    }

    //秒杀商品库存和价格
    function setFlashSaleGoodsPrice() {
        var flash_sale_price = $("input[name='shop_price']").attr('value');
        var flash_sale_count = $("input[name='store_count']").attr('value');
        var market_price = $("input[name='market_price']").attr('value');
        var start_time = $("input[name='start_time']").attr('value');
        var end_time = $("input[name='end_time']").attr('value');
        var activity_title = $("input[name='activity_title']").attr('value');
        $("#goods_price").html("<em>￥</em>" + flash_sale_price); //变动价格显示
        $('#spec_store_count').html(flash_sale_count);
        $('#goods_price_title').html('抢购价：');
        $('#market_price_title').empty().html('原&nbsp;&nbsp;价：');
        $('#activity_label').empty().html('抢&nbsp;&nbsp;购：');
        $('#activity_title').empty().html(activity_title);
        $('#activity_title_div').show();
        $('#market_price').empty().html(market_price);
        $('.presale-time').show();
        $('#prom_detail').hide();
        $('#number').attr('max', flash_sale_count);
        setInterval(activityTime, 1000);
    }

    //团购商品库存和价格
    function setGroupByGoodsPrice() {
        var group_by_price = $("input[name='shop_price']").attr('value');
        var group_by_count = $("input[name='store_count']").attr('value');
        var market_price = $("input[name='market_price']").attr('value');
        var start_time = $("input[name='start_time']").attr('value');
        var end_time = $("input[name='end_time']").attr('value');
        var activity_title = $("input[name='activity_title']").attr('value');
        $("#goods_price").empty().html("<em>￥</em>" + group_by_price); //变动价格显示
        $('#spec_store_count').empty().html(group_by_count);
        $('#activity_type').empty().html('团购');
        $('#goods_price_title').empty().html('团购价：');
        $('#market_price_title').empty().html('原&nbsp;&nbsp;价：');
        $('#activity_label').empty().html('团&nbsp;&nbsp;购：');
        $('#activity_title').empty().html(activity_title);
        $('#activity_title_div').show();
        $('#market_price').empty().html(market_price);
        $('.presale-time').show();
        $('#prom_detail').hide();
        $('#number').attr('max', group_by_count);
        setInterval(activityTime, 1000);
    }

    //促销商品库存和价格
    function setPromGoodsPrice() {
        var prom_goods_price = $("input[name='shop_price']").attr('value');
        var prom_goods_count = $("input[name='store_count']").attr('value');
        var market_price = $("input[name='market_price']").attr('value');
        var start_time = $("input[name='start_time']").attr('value');
        var end_time = $("input[name='end_time']").attr('value');
        var activity_title = $("input[name='activity_title']").attr('value');
        var prom_detail = $("input[name='prom_detail']").attr('value');
        $("#goods_price").empty().html("<em>￥</em>" + round(prom_goods_price,2)); //变动价格显示
        $('#spec_store_count').empty().html(prom_goods_count);
        $('#activity_type').empty().html('促销');
        $('.presale-time').show();
        $('#prom_detail').empty().html(prom_detail).show();
        $('#activity_time').hide();
        $('#goods_price_title').empty().html('促销价：');
        $('#market_price_title').empty().html('原&nbsp;&nbsp;价：');
        $('#activity_label').empty().html('促&nbsp;&nbsp;销：');
        $('#activity_title').empty().html(activity_title);
        $('#activity_title_div').show();
        $('#market_price').empty().html(market_price);
        $('#number').attr('max', prom_goods_count);
    }

    // 倒计时
    function activityTime() {
        var end_time = parseInt($("input[name='end_time']").attr('value'));
        var timestamp = Date.parse(new Date());
        var now = timestamp / 1000;
        var end_time_date = formatDate(end_time * 1000);
        var text = GetRTime(end_time_date);
        //活动时间到了就刷新页面重新载入
        if (now > end_time) {
            layer.msg('该商品活动已结束', function () {
                location.reload();
            });
        }
        $("#overTime").text(text);
    }

    //时间戳转换
    function add0(m) {
        return m < 10 ? '0' + m : m
    }

    //时间戳转换字符
    function formatDate(now) {
        var time = new Date(now);
        var y = time.getFullYear();
        var m = time.getMonth() + 1;
        var d = time.getDate()
        var h = time.getHours();
        var mm = time.getMinutes();
        var s = time.getSeconds();
        return y + '/' + add0(m) + '/' + add0(d) + ' ' + add0(h) + ':' + add0(mm) + ':' + add0(s);
    }

    //sort排序用
    function sortNumber(a, b) {
        return a - b;
    }

    //收藏商品
    $('#collectLink').click(function () {
        if (getCookie('user_id') == '') {
            layer.msg('请先登录！', {icon: 1});
        } else {
            var goods_arr = new Array();
            //单个收藏
            goods_arr.push($('input[name="goods_id"]').val());
            $.ajax({
                type: 'post',
                dataType: 'json',
                data: {goods_ids: goods_arr},
                url: "{{ U('Home/Goods/collect_goods') }}",
                success: function (res) {
                    if (res.status == 1) {
                        layer.msg(res.msg, {icon: 1});
                    } else {
                        layer.msg(res.msg, {icon: 3});
                    }
                }
            });
        }
    });

    //点击切换规格
    $(document).on('click', '.spec_item', function () {
        var spec_item_img_src = $(this).find('img').attr('src');
        if (spec_item_img_src != '') {
            $('#zoomimg').attr('jqimg', spec_item_img_src).attr('src', spec_item_img_src);
        }
        $(this).addClass('red').siblings('a').removeClass('red');
        $(this).siblings('input').removeAttr('checked');
        $(this).prev('input').attr('checked', 'checked').prop('checked', 'checked');
        if ($('#video').length > 0) {
            //判断是否有视频标签
            $('#photoBody').addClass('picshow-ac');
            video.pause();
        }
        // 更新商品价格
        initGoodsPrice();
        //获取搭配购列表
        getCombination();
    })

</script>
<style>
    .sav_shop b{
        margin-left: 5px;
        color: #e23435;
    }
</style>
</body>
</html>