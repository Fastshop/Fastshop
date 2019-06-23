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
    <script src="/public/js/global.js"></script>
    <link rel="shortcut icon" type="image/x-icon" href="{{ $tpshop_config['shop_info_store_ico'] ?: '/public/static/images/logo/storeico_default.png' }}" media="screen"/>
</head>
<body class="gray_f5">
<!--header-s-->
    @include('tp::public.header')

<!--header-e-->
<div id="myCarousel" class="carousel clearfix">
	<ul class="carousel-inner">
         @foreach( tpl_adv("","5","","v1","key","2") as $key => $v1 ) 
		<li class="item" style="background:{{ $v1['bgcolor'] }};">
			<a class="item-pic" href="{{ $v1['ad_link'] }}" @if($v1['target'] == 1) target="_blank" @endif >
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

@foreach( $cateList ?: [] as $k => $v )

<div class="floor floor{{ $k+1 }} w1224">
	<div class="floor-top">
		<h3 class="floor-title">{{ $v['name'] }}</h3>
		<div class="floor-nav-list clearfix">
			@foreach( $v['tmenu'] ?: [] as $k2 => $v2 )

			<a class="floor-nav-item" href="{{ U('Home/Goods/goodsList',array('id'=>$v2['id'])) }}">{{ $v2['name'] }}</a>
			
@endforeach
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
			@foreach( $v['hot_goods'] ?: [] as $gk => $g )

			<a class="floor-goods-item" href="{{ U('Home/Goods/goodsInfo',array('id'=>$g['goods_id'])) }}">
				<div class="googs-title ellipsis-1">{{ getSubstr($g['goods_name'],0,20) }}</div>
				<div class="googs-price ellipsis-1">￥{{ $g['shop_price'] }}</div>
				<div class="goods-pic"><img class="w-100" src="{{ goods_thum_images($g['goods_id'],400,400) }}" alt=""></div>
			</a>
			
@endforeach
		</div>
		<div class="floor-recommend">
			<div class="floor-recommend-title">热门推荐</div>
			<div class="floor-recommend-wrap">
				<div class="floor-recommend-list">
					@foreach( $v['recommend_goods'] ?: [] as $gk => $rg )

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
					
@endforeach
				</div>
			</div>
			<a class="recommend-more-btn" href="{{ U('Home/Goods/goodsList',array('id'=>$v['id'])) }}">更多 <i>></i></a>
		</div>
	</div>
</div>

@endforeach
@include('tp::public.footer')


<!--楼层导航-s-->
<ul class="floor-nav" id="floor-nav">
@foreach( $cateList ?: [] as $k => $v )

	<li>
		<span>{{ $k+1 }}F</span>
		<span>{{ $v['mobile_name'] }}</span>
	</li>

@endforeach
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
