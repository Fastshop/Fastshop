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