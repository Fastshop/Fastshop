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
@include('tp::public.header')

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
@include('tp::goods.goodsInfoCombination')

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
        @include('tp::goods.goodsInfoDetail')

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
@include('tp::public.footer')

@include('tp::public.sidebar_cart')

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