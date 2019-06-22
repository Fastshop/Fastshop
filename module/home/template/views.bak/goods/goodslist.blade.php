<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>商品列表</title>
    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
    <link rel="stylesheet" type="text/css" href="/assets/static/css/tpshop.css"/>
    <script src="/assets/static/js/jquery-1.11.3.min.js" type="text/javascript" charset="utf-8"></script>
    <link rel="shortcut icon" type="image/x-icon"
          href="{{ $tpshop_config['shop_info_store_ico'] ?: '/public/static/images/logo/storeico_default.png' }}"
          media="screen"/>
    <script src="/public/js/layer/layer-min.js"></script>
    <script src="/public/js/global.js"></script>
    <script src="/public/js/pc_common.js"></script>
    <style>
        @media screen and (min-width: 1260px) and (max-width: 1465px) {
            .w1430 {
                width: 1224px;
            }
        }

        @media screen and (max-width: 1260px) {
            .w1430 {
                width: 983px;
            }
        }
    </style>
</head>
<body>
<link rel="stylesheet" type="text/css" href="/assets/static/css/base.css"/>
<link rel="shortcut icon" type="image/x-icon"
      href="{{ $tpshop_config['shop_info_store_ico'] ?: '/public/static/images/logo/storeico_default.png' }}"
      media="screen"/>
<div class="tpshop-tm-hander">
    <div class="top-hander">
        <div class="w1430 pr clearfix">
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
                    <a href="{{ U('Home/user/logout') }}" title="退出" target="_self">安全退出</a>
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
    <div class="nav-middan-z w1430 clearfix">
        <a class="ecsc-logo" href="{{ U('Home/index/index') }}">
            <img src="{{ $tpshop_config['shop_info_store_logo'] ?: '/public/static/images/logo/pc_home_logo_default.png' }}"/>
        </a>
        <div class="ecsc-search">
            <form id="searchForm" name="" method="get" action="{{ U('Home/Goods/search') }}" class="ecsc-search-form">
                <input autocomplete="off" name="q" id="q" type="text"
                       value="{{ \think\Request::instance()->param('q') }}" class="ecsc-search-input"
                       placeholder="请输入搜索关键字...">
                <button type="submit" class="ecsc-search-button">搜索</button>
                <div class="candidate p">
                    <ul id="search_list"></ul>
                </div>
                <script type="text/javascript">
                    ;(function ($) {
                        $.fn.extend({
                            donetyping: function (callback, timeout) {
                                timeout = timeout || 1e3;
                                var timeoutReference,
                                    doneTyping = function (el) {
                                        if (!timeoutReference) return;
                                        timeoutReference = null;
                                        callback.call(el);
                                    };
                                return this.each(function (i, el) {
                                    var $el = $(el);
                                    $el.is(':input') && $el.on('keyup keypress', function (e) {
                                        if (e.type == 'keyup' && e.keyCode != 8) return;
                                        if (timeoutReference) clearTimeout(timeoutReference);
                                        timeoutReference = setTimeout(function () {
                                            doneTyping(el);
                                        }, timeout);
                                    }).on('blur', function () {
                                        doneTyping(el);
                                    });
                                });
                            }
                        });
                    })(jQuery);

                    $('.ecsc-search-input').donetyping(function () {
                        search_key();
                    }, 500).focus(function () {
                        var search_key = $.trim($('#q').val());
                        if (search_key != '') {
                            $('.candidate').show();
                        }
                    });
                    $('.candidate').mouseleave(function () {
                        $(this).hide();
                    });

                    function searchWord(words) {
                        $('#q').val(words);
                        $('#searchForm').submit();
                    }

                    function search_key() {
                        var search_key = $.trim($('#q').val());
                        if (search_key != '') {
                            $.ajax({
                                type: 'post',
                                dataType: 'json',
                                data: {key: search_key},
                                url: "{{ U('Home/Api/searchKey') }}",
                                success: function (data) {
                                    if (data.status == 1) {
                                        var html = '';
                                        $.each(data.result, function (n, value) {
                                            html += '<li onclick="searchWord(\'' + value.keywords + '\');"><div class="search-item">' + value.keywords + '</div><div class="search-count">约' + value.goods_num + '个商品</div></li>';
                                        });
                                        html += '<li class="close"><div class="search-count">关闭</div></li>';
                                        $('#search_list').empty().append(html);
                                        $('.candidate').show();
                                    } else {
                                        $('#search_list').empty();
                                    }
                                }
                            });
                        }
                    }
                </script>
            </form>
            <div class="keyword clearfix">
                @foreach( $tpshop_config['hot_keywords'] as $k => $wd )

                    <a class="key-item" href="{{ U('Home/Goods/search',array('q'=>$wd)) }}"
                       target="_blank">{{ $wd }}</a>

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
    <div class="nav w1430 clearfix">
        <div class="categorys home_categorys">
            <div class="dt">
                <a href="" target="_blank"><i class="share-a_a2"></i>全部商品分类</a>
            </div>
            <!--全部商品分类-s-->
            <div class="dd">
                <div class="cata-nav" id="cata-nav">
                    @foreach( $goods_category_tree as $kr => $v )

                        <div class="item">
                            @if($v['level'] == 1)
                                <div class="item-left">
                                    <h3 class="cata-nav-name">
                                        <div class="cata-nav-wrap">
                                            <i class="ico ico-nav-{{ $kr-1 }}"></i>
                                            <a href="{{ U('Home/Goods/goodsList',array('id'=>$v['id'])) }}"
                                               title="{{ $v['name'] }}">{{ $v['mobile_name'] }}</a>
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

                                            <a class="layer-title-item"
                                               href="{{ U('Home/Goods/goodsList',['id'=>$hc['id']]) }}">{{ $hc['name'] }}
                                                <i class="ico ico-arrow-right">></i></a>

                                        @endforeach
                                    </div>

                                    <div class="subitems">
                                        @foreach( $v['tmenu'] as $k2 => $v2 )

                                            @if($v2['parent_id'] == $v['id'])
                                                <dl class="clearfix">
                                                    <dt><a href="{{ U('Home/Goods/goodsList',array('id'=>$v2['id'])) }}"
                                                           target="_blank">{{ $v2['name'] }}</a></dt>
                                                    <dd class="clearfix">
                                                        @foreach( $v2['sub_menu'] as $k3 => $v3 )

                                                            @if($v3['parent_id'] == $v2['id'])
                                                                <a href="{{ U('Home/Goods/goodsList',array('id'=>$v3['id'])) }}"
                                                                   target="_blank">{{ $v3['name'] }}</a>
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
                                        <a href="{{ $v3['ad_link'] }}" @if($v3['target'] == 1) target="_blank" @endif>
                                            <img class="w-100" src="{{ $v3['ad_code'] }}" title="{{ $v3['title'] }}"/>
                                        </a>
                                    @endforeach
                                </div>
                                @foreach( tpl_adv("","1","","az","key","51") as $key => $az )
                                    <a href="{{ $az['ad_link'] }}" class="cata-nav-rigth"
                                       @if($az['target'] == 1) target="_blank" @endif>
                                        <img class="w-100" src="{{ $az['ad_code'] }}" title="{{ $az['title'] }}"/>
                                    </a>
                                @endforeach
                            </div>
                        </div>

                    @endforeach
                </div>
                <script>
                    $('#cata-nav').find('.item').hover(function () {
                        $(this).addClass('nav-active').siblings().removeClass('nav-active');
                    }, function () {
                        $(this).removeClass('nav-active');
                    })
                </script>
            </div>
            <!--全部商品分类-e-->
        </div>
        <ul class="navitems clearfix" id="navitems">
            <li @if(CONTROLLER_NAME == 'Index') class="selected" @endif ><a href="{{ U('Index/index') }}">首页</a></li>
            @foreach(tpl_query("SELECT * FROM `__PREFIX__navigation` where is_show = 1 and position = 'top' ORDER BY `sort` DESC") as $k=>$v)
                <li <?php if ($_SERVER['REQUEST_URI'] == str_replace('&amp;', '&', $v['url'])) {
                    echo "class='selected'";
                }?>>
                    <a href="{{ $v['url'] }}" @if($v['is_new'] == 1) target="_blank" @endif >{{ $v['name'] }}</a>
                </li>
            @endforeach
        </ul>
    </div>
</div>

<div class="search-box p">
    <div class="w1430">
        <div class="search-path fl">
            <a href="{{ U('Home/Goods/goodsList',array('id'=>$cat_id)) }}">全部结果</a>
            <i class="litt-xyb"></i>
            <!--如果当前分类是三级分类 则二级也要显示-->
            @if($goodsCate['level'] == 3)
                <div class="havedox">
                    <div class="disenk"><span>{{ $goods_category[$goodsCate['parent_id']]['name'] }}</span><i
                                class="litt-xxd"></i></div>
                    <div class="hovshz">
                        <ul>
                            @foreach( $goods_category as $k => $v )

                                @if(($v['parent_id'] == $goods_category[$goodsCate['parent_id']]['parent_id']))
                                    <li>
                                        <a href="{{ U('Home/Goods/goodsList',array('id'=>$v['id'])) }}">{{ $v['name'] }}</a>
                                    </li>
                                @endif

                            @endforeach
                        </ul>
                    </div>
                </div>
                <i class="litt-xyb"></i>
                <div class="havedox">
                    <div class="disenk"><span>{{ $goodsCate['name'] }}</span><i class="litt-xxd"></i></div>
                    <div class="hovshz">
                        <ul>
                            @if(tp_empty($goods_category))
                                <li><a>暂无可筛选分类</a></li>
                            @endif
                            @foreach( $goods_category as $k => $v )

                                @if(($v['level'] == $goodsCate['level']) AND ($v['parent_id'] == $goodsCate['parent_id']))
                                    <li>
                                        <a href="{{ U('Home/Goods/goodsList',array('id'=>$v['id'])) }}">{{ $v['name'] }}</a>
                                    </li>
                                @endif

                            @endforeach
                        </ul>
                    </div>
                </div>
                <i class="litt-xyb"></i>
            @endif
        <!--如果当前分类是三级分类 则二级也要显示-->
            @if($goodsCate['level'] == 2)
                <div class="havedox">
                    <div class="disenk"><span>{{ $goodsCate['name'] }}</span><i class="litt-xxd"></i></div>
                    <div class="hovshz">
                        <ul>
                            @foreach( $goods_category as $k => $v )

                                @if(($v['parent_id'] == $goodsCate['parent_id']))
                                    <li>
                                        <a href="{{ U('Home/Goods/goodsList',array('id'=>$v['id'])) }}">{{ $v['name'] }}</a>
                                    </li>
                                @endif

                            @endforeach
                        </ul>
                    </div>
                </div>
                <i class="litt-xyb"></i>
            @endif
        <!--当前分类-->
            @if($goodsCate['level'] == 1)
                <div class="havedox">
                    <div class="disenk"><span><a
                                    href="{{ U('Home/Goods/goodsList',array('id'=>$goodsCate['id'])) }}">{{ $goodsCate['name'] }}</a></span><i
                                class="litt-xxd"></i></div>
                    <div class="hovshz">
                        <ul>
                            @foreach( $cateArr as $k => $v )

                                <li><a href="{{ U('Home/Goods/goodsList',array('id'=>$v['id'])) }}">{{ $v['name'] }}</a>
                                </li>

                            @endforeach
                        </ul>
                    </div>
                </div>
                <i class="litt-xyb"></i>
            @endif
        </div>
        @foreach( $filter_menu as $k => $v )

            <a title="{{ $v['text'] }}" href="{{ $v['href'] }}" class="u-av-label">{{ $v['text'] }}<i>x</i></a>

        @endforeach
        <div class="search-clear fr">
            <span><a href="{{ U('Home/Goods/goodsList',array('id'=>$cat_id)) }}">清空筛选条件</a></span>
        </div>
    </div>
</div>
<!-- 筛选 start -->
<div class="search-opt troblect">
    <div class="w1430">
        <div class="opt-list">
            <!-- 分类筛选 start -->
            @if($goodsCate['level'] < 3)
                <dl class="brand-section m-tr">
                    <dt>分类筛选</dt>
                    <dd class="ri-section">
                        <div class="lf-list">
                            <div class="brand-list">
                                <div class="clearfix p">
                                    @foreach( $goods_category as $k => $v )

                                        @if($v['parent_id'] == $goodsCate['id'])
                                            <a href="{{ U('Home/Goods/goodsList',array('id'=>$v['id'])) }}">
                                                <span>{{ $v['name'] }}</span>
                                            </a>
                                        @endif

                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="lr-more">
                            <a href="javascript:void(0)"><span class="gd_more">更多</span><i class="litt-tcr"></i></a>
                        </div>
                    </dd>
                </dl>
            @endif
        <!-- 品牌筛选 start -->
            @if($filter_brand != null)
                <dl class="brand-section m-tr">
                    <dt>品牌</dt>
                    <dd class="ri-section">
                        <div class="lf-list">
                            <div class="brand-box brand-list">
                                <div class="clearfix p">
                                    @foreach( $filter_brand as $k => $v )

                                        <a href="{{ $v['href'] }}" data-href="{{ $v['href'] }}" data-key='brand'
                                           data-val='{{ $v['id'] }}' style="line-height: 33px;">
                                            <i class="litt-zd"></i>
                                            <img src="{{ $v['logo'] }}"/>
                                            <span>{{ $v['name'] }}</span>
                                        </a>

                                    @endforeach
                                </div>
                                <div class="surclofix p">
                                    <a href="javascript:;" class="u-confirm" onClick="submitMoreFilter('brand',this);">确定</a>
                                    <a href="javascript:;" class="u-cancel">取消</a>
                                </div>
                            </div>
                        </div>
                        <div class="lr-more">
                            <a href="javascript:void(0)"><span class="dx_choice">多选</span><i
                                        class="litt-pluscr"></i></a>
                            @if(count((array)$filter_brand) > 10)
                                <a href="javascript:void(0)"><span class="gd_more">更多</span><i class="litt-tcr"></i></a>
                            @endif
                        </div>
                    </dd>
                </dl>
            @endif
        <!-- 品牌筛选 end -->
            <!-- 规格筛选 start -->
            @foreach( $filter_spec as $k => $v )

                @if(!empty($v['name']))
                    <dl class="brand-section m-tr">
                        <dt>{{ $v['name'] }}</dt>
                        <dd class="ri-section">
                            <div class="lf-list">
                                <div class="brand-list">
                                    <div class="clearfix p">
                                        @foreach( $v['item'] as $k2 => $v2 )

                                            <a href="{{ $v2['href'] }}" data-href="{{ $v2['href'] }}"
                                               data-key='{{ $v2['key'] }}' data-val='{{ $v2['val'] }}'>
                                                <input class="shaix_la" type="checkbox" style="display: none"/>
                                                <span>{{ $v2['item'] }}</span>
                                            </a>

                                        @endforeach
                                    </div>
                                    <div class="surclofix p">
                                        <a href="javascript:;" class="u-confirm"
                                           onClick="submitMoreFilter('spec',this);">确定</a>
                                        <a href="javascript:;" class="u-cancel">取消</a>
                                    </div>
                                </div>
                            </div>
                            <div class="lr-more">
                                <a href="javascript:void(0)"><span class="dx_choice">多选</span><i
                                            class="litt-pluscr"></i></a>
                                @if(count((array)$v['item']) > 11)
                                    <a href="javascript:void(0)"><span class="gd_more">更多</span><i class="litt-tcr"></i></a>
                                @endif
                            </div>
                        </dd>
                    </dl>
                @endif

            @endforeach
        <!-- 规格筛选 end -->
            <!-- 属性筛选 start -->
            @foreach( $filter_attr as $k => $v )

                <dl class="brand-section m-tr">
                    <dt>{{ $v['attr_name'] }}</dt>
                    <dd class="ri-section">
                        <div class="lf-list">
                            <div class="brand-list">
                                <div class="clearfix p">
                                    @foreach( $v['attr_value'] as $k2 => $v2 )

                                        <a href="{{ $v2['href'] }}" data-href="{{ $v2['href'] }}"
                                           data-val='{{ $v2['val'] }}' data-key='{{ $v2['key'] }}'>
                                            <input class="shaix_la" type="checkbox" style="display: none"/>
                                            <span>{{ $v2['attr_value'] }}</span>
                                        </a>

                                    @endforeach
                                </div>
                                <div class="surclofix p">
                                    <a href="javascript:;" class="u-confirm"
                                       onClick="submitMoreFilter('attr',this);">确定</a>
                                    <a href="javascript:;" class="u-cancel">取消</a>
                                </div>
                            </div>
                        </div>
                        <div class="lr-more">
                            <a href="javascript:void(0)"><span class="dx_choice">多选</span><i
                                        class="litt-pluscr"></i></a>
                            @if(count((array)$v['attr_value']) > 11)
                                <a href="javascript:void(0)"><span class="gd_more">更多</span><i class="litt-tcr"></i></a>
                            @endif
                        </div>
                    </dd>
                </dl>

            @endforeach
        <!-- 属性筛选 end -->
            <!-- 价格筛选 start -->
            @if($filter_price != null)
                <dl class="brand-section m-tr">
                    <dt>价格</dt>
                    <dd class="ri-section">
                        <div class="lf-list">
                            <div class="brand-list">
                                <div class="clearfix p">
                                    @foreach( $filter_price as $k => $v )

                                        <a href="{{ $v['href'] }}">
                                            <span>{{ $v['value'] }}</span>
                                        </a>

                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="lr-more">
                            <!--<a href="javascript:void(0)"><span class="dx_choice">多选</span><i class="litt-pluscr"></i></a>-->
                            <!--<a href="javascript:void(0)"><span class="gd_more">更多</span><i class="litt-tcr"></i></a>-->
                            <!--填写筛选价格区间-s-->
                            <form action="{{ urldecode(U('/Home/Goods/goodsList',$filter_param,'')) }}" method="post"
                                  id="price_form">
                                <input type="text" onpaste="this.value=this.value.replace(/[^\d]/g,'')"
                                       onkeyup="this.value=this.value.replace(/[^\d]/g,'')" name="start_price"
                                       id="start_price" value=""/>
                                <span>-</span>
                                <input type="text" onpaste="this.value=this.value.replace(/[^\d]/g,'')"
                                       onkeyup="this.value=this.value.replace(/[^\d]/g,'')" name="end_price"
                                       id="end_price" value=""/>
                                <input type="submit" value="确定"
                                       onClick="if($('#start_price').val() !='' && $('#end_price').val() !='' ) $('#price_form').submit();"/>
                            </form>
                            <!--填写筛选价格区间-e-->
                        </div>
                    </dd>
                </dl>
        @endif
        <!-- 价格筛选 end -->
        </div>
        <p class="moreamore"><a>浏览更多</a></p>
    </div>
</div>
<!-- 筛选 end -->


<div class="shop-list-tour ma-to-20 p">
    <div class="w1430">
        <div class="tjhot fl">
            <div class="sx_topb"><h3>推荐热卖</h3></div>
            <div class="tjhot-shoplist" id="ajax_hot_goods">
                @foreach(tpl_query("select goods_id,goods_name,shop_price from `__PREFIX__goods` where is_hot=1 and is_on_sale = 1 limit 5") as $k=>$vo)
                    <div class="alone-shop">
                        <a href="{{ U('Home/Goods/goodsInfo',array('id'=>$vo['goods_id'])) }}" target="_blank"><img
                                    class="lazy" data-original="{{ goods_thum_images($vo['goods_id'],180,180) }}"/></a>
                        <p class="line-two-hidd"><a
                                    href="{{ U('Home/Goods/goodsInfo',array('id'=>$vo['goods_id'])) }}">{{ $vo['goods_name'] }}</a>
                        </p>
                        <p class="price-tag"><span class="li_xfo">￥</span><span>{{ $vo['shop_price'] }}</span></p>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="stsho fr">
            <div class="sx_topb ba-dark-bg">
                <div class="f-sort fl">
                    <ul>
                        <li class="@if(\think\Request::instance()->param('sort') == '') red @endif ">
                            <a href="{{ urldecode(U("/Home/Goods/goodsList",$filter_param,'')) }}">综合</a>
                        </li>
                        <li class="@if(\think\Request::instance()->param('sort') == 'sales_sum') red @endif ">
                            <a href="{{ urldecode(U("/Home/Goods/goodsList",array_merge($filter_param,array('sort'=>'sales_sum')),'')) }}">销量</a>
                        </li>
                        @if(\think\Request::instance()->param('sort_asc') == 'desc')
                            <li class="@if(\think\Request::instance()->param('sort') == 'shop_price') red @endif ">
                                <a href="{{ urldecode(U("/Home/Goods/goodsList",array_merge($filter_param,array('sort'=>'shop_price','sort_asc'=>'asc')),'')) }}">价格<i
                                            class="litt-zzx1"></i></a>
                            </li>
                        @else
                            <li class="@if(\think\Request::instance()->param('sort') == 'shop_price') red @endif ">
                                <a href="{{ urldecode(U("/Home/Goods/goodsList",array_merge($filter_param,array('sort'=>'shop_price','sort_asc'=>'desc')),'')) }}">价格<i
                                            class="litt-zzx1"></i></a>
                            </li>
                        @endif
                        <li class="@if(\think\Request::instance()->param('sort') == 'comment_count') red @endif ">
                            <a href="{{ urldecode(U("/Home/Goods/goodsList",array_merge($filter_param,array('sort'=>'comment_count')),'')) }}">评论</a>
                        </li>
                        <li class="@if(\think\Request::instance()->param('sort') == 'is_new') red @endif ">
                            <a href="{{ urldecode(U("/Home/Goods/goodsList",array_merge($filter_param,array('sort'=>'is_new')),'')) }}">新品</a>
                        </li>
                    </ul>
                </div>
                <div class="f-address fl">
                    <!--<div class="shd_address">-->
                    <!--<div class="shd">收货地：</div>-->
                    <!--<div class="add_cj_p"><input type="text" id="city" /></div>-->
                    <!--</div>-->
                </div>
                <div class="f-total fr">
                    <?php $nowPage = $page->nowPage;$totalPages = $page->totalPages; ?>
                    <div class="all-sec">共<span>{{ $page->totalRows }}</span>个商品{{ $var }}</div>
                    <div class="all-fy">
                        <a @if($nowPage > 1) href="{{ U('Home/Goods/goodsList',array_merge($filter_param,array('p'=>$nowPage-1))) }}" @endif>&lt;</a>
                        <p class="fy-y"><span class="z-cur">{{ $nowPage }}</span>/<span>{{ $totalPages }}</span></p>
                        <a @if(($nowPage+1) < $totalPages) href="{{ U('Home/Goods/goodsList',array_merge($filter_param,array('p'=>$nowPage+1))) }}" @endif>&gt;</a>
                    </div>
                </div>
            </div>
            <div class="shop-list-splb p">
                <ul>
                    @if(tp_empty($goods_list))
                        <p class="ncyekjl" style="font-size: 16px;margin:100px auto;text-align: center;">--
                            抱歉没找到您要搜索的商品，换个条件试试！--</p>
                    @else
                        @foreach( $goods_list as $k => $v )

                            <li>
                                <div class="s_xsall">
                                    <div class="xs_img">
                                        <a href="{{ U('/Home/Goods/goodsInfo',array('id'=>$v['goods_id'])) }}"
                                           target="_blank">
                                            <img class="lazy-list"
                                                 data-original="{{ goods_thum_images($v['goods_id'],236,236) }}"/>
                                        </a>
                                    </div>
                                    <div class="xs_slide">
                                        <div class="small-xs-shop">
                                            <ul>
                                                @foreach( $goods_images as $k2 => $v2 )

                                                    @if($v2['goods_id'] == $v['goods_id'])
                                                        <li>
                                                            <a href="javascript:void(0);">
                                                                <img class="lazy-list"
                                                                     data-original="{{ get_sub_images($v2,$v['goods_id'],236,236) }}"/>
                                                            </a>
                                                        </li>
                                                    @endif

                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="price-tag">
                                        <span class="now"><em
                                                    class="li_xfo">￥</em><em>{{ $v['shop_price'] }}</em></span>
                                        <span class="old"><em>￥</em><em>{{ $v['market_price'] }}</em></span>
                                    </div>
                                    <div class="shop_name2">
                                        <a href="{{ U('/Home/Goods/goodsInfo',array('id'=>$v['goods_id'])) }}">
                                            {{ $v['goods_name'] }}
                                        </a>
                                    </div>
                                    <div class="J_btn_statu">
                                        <div class="p-num">
                                            <input class="J_input_val" id="number_{{ $v['goods_id'] }}" type="text"
                                                   value="1">
                                            <p class="act">
                                                <a href="javascript:void(0);" onClick="goods_add({{ $v['goods_id'] }});"
                                                   class="litt-zzyl1"></a>
                                                <a href="javascript:void(0);" onClick="goods_cut({{ $v['goods_id'] }});"
                                                   class="litt-zzyl2"></a>
                                            </p>
                                        </div>
                                        <div class="p-btn">
                                            @if(($v['is_virtual'] == 1))
                                                <a href="{{ U('/Home/Goods/goodsInfo',array('id'=>$v['goods_id'])) }}">查看详情</a>
                                            @else
                                                <a href="javascript:void(0);"
                                                   onclick="AjaxAddCart({{ $v['goods_id'] }},$('#number_'+{{ $v['goods_id'] }}).val());">加入购物车</a>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </li>

                        @endforeach
                    @endif

                </ul>
            </div>
            <div class="page p">
                {{ $page->show() }}
            </div>
        </div>
    </div>
</div>
<div class="underheader-floor p specilike">
    <div class="w1430">
        <div class="layout-title">
            <span class="fl">猜你喜欢</span>
            <span class="update_h fr" onclick="favourite();">
                <i class="litt-hyh"></i>
                换一换
            </span>
        </div>
        <ul class="ul-li-column p" id="favourite_goods">
        </ul>
    </div>
</div>
<script>
    /****猜你喜欢****/
    var favorite_page = 0;

    function favourite() {
        favorite_page++;
        $.ajax({
            type: "GET",
            url: "/index.php?m=Home&c=Index&a=ajax_favorite&i=7&p=" + favorite_page,//+tab,
            success: function (data) {
                if (data == '' && favorite_page > 1) {
                    favorite_page = 0;
                    favourite();
                } else {
                    $('#favourite_goods').html(data);
                    lazy_ajax();
                }

            }
        });
    }
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
                            <dd>
                                <a href="{{ U('Home/Article/detail',array('article_id'=>$v2['article_id'])) }}">{{ $v2['title'] }}</a>
                            </dd>
                        @endforeach
                    </dl>
                @endforeach
            </div>
            <div class="friendship-links clearfix">
                <span>友情链接 : </span>
                <div class="links-wrap-h clearfix">
                    @foreach(tpl_query("select * from `__PREFIX__friend_link` where is_show=1") as $k=>$v)
                        <a href="{{ $v['link_url'] }}"
                           @if($v['target'] == 1) target="_blank" @endif >{{ $v['link_name'] }}</a>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="right-contact-us">
            <h3 class="title">联系我们</h3>
            <span class="phone">{{ $tpshop_config['shop_info_phone'] }}</span>
            <p class="tips">周一至周日8:00-18:00<br/>(仅收市话费)</p>
            <!--<div class="qr-code-list clearfix">-->
            <!--<a class="qr-code" href="javascript:;"><img class="w-100" src="/assets/static/images/qrcode.png" alt="" /></a>-->
            <!--<a class="qr-code qr-code-tpshop" href="javascript:;"><img class="w-100" src="/assets/static/images/qrcode.png" alt="" /></a>-->
            <!--</div>-->
        </div>
    </div>
    <div class="mod_copyright p">
        <div class="grid-top">
            @foreach(tpl_query("SELECT * FROM `__PREFIX__navigation` where is_show = 1 AND position = 'bottom' ORDER BY `sort` DESC") as $kk=>$vv)
                <a href="{{ $vv['url'] }}" @if($vv['is_new'] == 1) target="_blank" @endif >{{ $vv['name'] }}</a>
                <span>|</span>
        @endforeach
        <!--<a href="javascript:void (0);">关于我们</a><span>|</span>-->
            <!--<a href="javascript:void (0);">联系我们</a><span>|</span>-->
        <!-- @foreach(tpl_query("select * from `__PREFIX__article` where cat_id = 5 and is_open=1") as $k=>$v) -->
        <!--<a href="{{ U('Home/Article/detail',array('article_id'=>$v['article_id'])) }}">{{ $v['title'] }}</a>-->
            <!--<span>|</span>-->
        <!-- @endforeach -->
        </div>
        <p>Copyright © 2016-2025 {{ $tpshop_config['shop_info_store_name'] ?: 'TPshop商城' }} 版权所有 保留一切权利 备案号:<a
                    href="http://www.miitbeian.gov.cn">{{ $tpshop_config['shop_info_record_no'] }}</a></p>
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
    jQuery(function ($) {
        $('img[img-url]').each(function () {
            var _this = $(this),
                url = _this.attr('img-url');
            _this.attr('src', url);
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
                            <span>&nbsp;&nbsp;&nbsp;&nbsp;</span><a href="{{ U('Home/user/logout') }}"
                                                                    title="点击退出">退出！</a>
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
            <a title="点击这里给我发消息"
               href="tencent://message/?uin={{ $tpshop_config['shop_info_qq2'] }}&amp;Site=TPshop商城&amp;Menu=yes"
               target="_blank">
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
<!--footer-e-->
<script src="/assets/static/js/lazyload.min.js" type="text/javascript" charset="utf-8"></script>
<script src="/assets/static/js/popt.js" type="text/javascript" charset="utf-8"></script>
<script src="/assets/static/js/headerfooter.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript">

    //        更多
    $('.gd_more').parent().click(function () {
        var jed = $(this).parents('.lr-more').siblings();
        jed.toggleClass('ov-inh').find('.brand-box').toggleClass('ov-inh');
        if (jed.toggleClass('ov-inh').find('.brand-list')) {
            jed.toggleClass('ov-inh').find('.brand-list').toggleClass('ov-inh');
        }
        if (jed.hasClass('ov-inh')) {
            $(this).find('.gd_more').html('收起');
        } else {
            $(this).find('.gd_more').html('更多');
        }
    })
    var cancelBtn = null;
    /***多选 start*****/
    $('.dx_choice').parent().click(function () {
        var _this = this;
        var st = 0;
        var jed = $(_this).parents('.ri-section'); //当前选项层DIV

        //关闭前一个多选框
        if (cancelBtn != null) {
            $(cancelBtn).parent().siblings('.clearfix').find('a').each(function (i, o) {
                $(o).removeClass('addhover-js').find('.litt-zd').hide(); //针对品牌筛选的红色边框和右下角对勾隐藏
                $(o).removeClass('red_hov_cli')    //针对纯文字型选项，隐藏筛选的选中状态
                    .attr('href', $(o).data('href'))  //还原连接
                    .children('input').prop('checked', false).hide(); //隐藏多选框
                $(o).unbind('click');
            });
            $(cancelBtn).parents('.lf-list').siblings('.lr-more').show(); //显示其它多选按钮
            $(cancelBtn).parents('.ri-section').removeClass('sum_ov_inh'); //移除多选样式

        }
        cancelBtn = jed.find('.u-cancel'); //前一个取消按钮

        //打开多选
        jed.addClass('sum_ov_inh'); //添加这一行的样式
        //遍历a标签
        jed.find('.clearfix>a').each(function (i, o) {
            $(o).attr('href', 'javascript:;'); //移除连接
            $(o).children('input').show();  //显示多选框
            $(o).bind('click', function () {
                if ($(o).hasClass('red_hov_cli')) {
                    //取消选中
                    $(o).find('i').toggle()
                    $(o).removeClass('addhover-js'); //针对品牌选项，改变筛选的选中状态
                    $(o).removeClass('red_hov_cli')
                    $(o).children('input').prop("checked", false);
                    $(o).parent().siblings('.surclofix').children('.u-confirm').removeClass('u-confirm01');
                    st--;
                } else {
                    $(o).addClass('red_hov_cli')
                    $(o).children('input').prop("checked", true);
                    $(o).find('i').toggle()
                    $(o).addClass('addhover-js');
                    $(o).parent().siblings('.surclofix').children('.u-confirm').addClass('u-confirm01');
                    st++;
                }
                //如果没有选中项,确定按钮点不了
                if (st == 0) {
                    jed.find('.u-confirm').disabled = true;
                }
            });
        });
        //隐藏当前多选按钮
        $(_this).parent().hide();
    });

    /***多选 end*****/
    //############   取消多选        ###########
    $('.surclofix .u-cancel').each(function () {
        $(this).click(function () {
            var jed = $(this).parents('.ri-section');
            //遍历a标签
            jed.find('.clearfix>a').each(function (i, o) {
                $(o).removeClass('addhover-js').find('.litt-zd').hide(); //针对品牌筛选的红色边框和右下角对勾隐藏
                $(o).removeClass('red_hov_cli')    //针对纯文字型选项，隐藏筛选的选中状态
                    .attr('href', $(o).data('href'))  //还原连接
                    .children('input').prop('checked', false).hide(); //隐藏多选框
                $(o).unbind('click');
            });
            jed.find('.lr-more').show(); //显示多选按钮
            jed.removeClass('sum_ov_inh') //移除这一行的样式
            $('.u-confirm').removeClass('u-confirm01'); //移除确定按钮可点击标识
        });
    })

    $(function () {
        favourite();
        //左侧边栏JS
//		ajax_hot_goods();
//		ajax_sales_goods();
        //############   更多类别属性筛选  start     ###########
        $('.moreamore').click(function () {
            $('.m-tr').each(function (i, o) {
                if (i > 7) {
                    var attrdisplay = $(o).css('display');
                    if (attrdisplay == 'none') {
                        $(o).css('display', 'block');
                    }
                    if (attrdisplay == 'block') {
                        $(o).css('display', 'none');
                    }
                }
            });
            if ($(this).hasClass('checked')) {
                $(this).removeClass('checked').html('<a class="red">收起</a>');
            } else {
                $(this).addClass('checked').html('<a >更多选项</a>');
            }
        })
        $('.moreamore').trigger('click').html('<a >更多选项</a>'); //  默认点击一下
        //############   更多类别属性筛选   end    ###########

        /***价格排序 start*****/
        var price_i = 0;
        $('.f-sort ul li').click(function () {
            $(this).addClass('red').siblings().removeClass('red').find('i').removeClass('litt-zzx2').removeClass('litt-zzx3').addClass('litt-zzx1');
            var jd = $(this).find('i');
            price_i++;
            if (price_i > 2) price_i = 1;
            switch (price_i) {
                case 1:
                    jd.addClass('litt-zzx2').removeClass('litt-zzx1').removeClass('litt-zzx3');
                    break;
                case 2:
                    jd.addClass('litt-zzx3').removeClass('litt-zzx2').removeClass('litt-zzx1');
                    break;
            }
        })
        /***价格排序 end*******/
        /***地址选择 start*****/
        $("#city").click(function (e) {
            SelCity(this, e);
        });
        /***地址选择 end*****/
        /***是否自营 start****/
        $('.choice-mo-shop ul li').click(function () {
            $(this).find('.litt-zzdg1').toggleClass('litt-zzdg2');
            $(this).find('a').toggleClass('red');
        })
        /***是否自营 end****/
        /***滑过浏览商品 start***/
        $('.small-xs-shop ul li').hover(function () {
            $(this).addClass('bored').siblings().removeClass('bored');
            var small_src = $(this).find('img').attr('src');
            $(this).parents('.s_xsall').find('.xs_img').find('img').attr('src', small_src);
        }, function () {

        })
        /***滑过浏览商品 end***/
    })

    /****加减购物车数额***/
    function goods_cut($val) {
        var num_val = document.getElementById('number_' + $val);
        var new_num = num_val.value;
        var Num = parseInt(new_num);
        if (Num > 1) Num = Num - 1;
        num_val.value = Num;
    }

    function goods_add($val) {
        var num_val = document.getElementById('number_' + $val);
        var new_num = num_val.value;
        var Num = parseInt(new_num);
        Num = Num + 1;
        num_val.value = Num;
    }

    /****加减购物车数额***/

    //############   点击多选确定按钮      ############
// t 为类型  是品牌 还是 规格 还是 属性
// btn 是点击的确定按钮用于找位置
    get_parment = {{ json_encode($_GET) }};

    function submitMoreFilter(t, btn) {
        // 没有被勾选的时候
        if (!$(btn).hasClass("u-confirm01")) {
            return false;
        }

        // 获取现有的get参数
        var key = ''; // 请求的 参数名称
        var val = new Array(); // 请求的参数值
        $(btn).parent().siblings(".clearfix").find(".red_hov_cli").each(function (i, o) {
            key = $(o).data('key');
            val.push($(o).data('val'));
        });
        //parment = key+'_'+val.join('_');
//        return false;
        // 品牌
        if (t == 'brand') {
            get_parment.brand_id = val.join('_');
        }
        // 规格
        if (t == 'spec') {
            if (get_parment.hasOwnProperty('spec')) {
                get_parment.spec += '@' + key + '_' + val.join('_');
            } else {
                get_parment.spec = key + '_' + val.join('_');
            }
        }
        // 属性
        if (t == 'attr') {
            if (get_parment.hasOwnProperty('attr')) {
                get_parment.attr += '@' + key + '_' + val.join('_');
            } else {
                get_parment.attr = key + '_' + val.join('_');
            }
        }
        // 组装请求的url
        var url = '';
        for (var k in get_parment) {
            url += "&" + k + '=' + get_parment[k];
        }
        location.href = "/index.php?m=Home&c=Goods&a=goodsList" + url;
    }

    //媒体查询
    /*$(function(){
        window.onresize=resizeauto;
        resizeauto();
        function resizeauto(){
            var windowW = $(window).width();
            if(windowW > 1447){
                $('.w1430,.w1224,.w1000').addClass('w1430').removeClass('w1224').removeClass('w1000');
            }else if(windowW <= 1447 && windowW > 1241){
                $('.w1430,.w1224,.w1000').addClass('w1224').removeClass('w1430').removeClass('w1000');
            }else if(windowW <= 1241){
                $('.w1430,.w1224,.w1000').addClass('w1000').removeClass('w1224').removeClass('w1430');
            }
        }
    })*/
</script>
</body>
</html>
