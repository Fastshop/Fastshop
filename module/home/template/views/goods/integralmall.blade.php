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
	@include('tp::public.header')

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
            @include('tp::public.footer')

			@include('tp::public.sidebar_cart')

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