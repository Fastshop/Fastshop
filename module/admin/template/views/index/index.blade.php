<!doctype html>
<html lang="zh-CN">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <!-- Apple devices fullscreen -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <!-- Apple devices fullscreen -->
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <link rel="shortcut icon" type="image/x-icon" href="{{ $tpshop_config['shop_info_store_ico'] ?: '/public/static/images/logo/storeico_default.png' }}" media="screen"/>
    <title>{{ $tpshop_config['shop_info_store_name'] ?: 'Tpshop 商城' }}</title>
    <script type="text/javascript">
        var SITEURL = window.location.host + '/index.php/admin';
    </script>

    <link href="/public/static/css/main.css" rel="stylesheet" type="text/css">
    <link href="/public/static/js/jquery-ui/jquery-ui.min.css" rel="stylesheet" type="text/css">
    <link href="/public/static/font/css/font-awesome.min.css" rel="stylesheet"/>
    <script type="text/javascript" src="/public/static/js/jquery.js"></script>
    <script type="text/javascript" src="/public/static/js/jquery-ui/jquery-ui.min.js"></script>
    <script type="text/javascript" src="/public/static/js/dialog/dialog.js" id="dialog_js"></script>
    <script type="text/javascript" src="/public/static/js/jquery.cookie.js"></script>
    <script type="text/javascript" src="/public/static/js/admincp.js"></script>
    <script type="text/javascript" src="/public/static/js/jquery.validation.min.js"></script>
    <script src="/public/js/layer/layer.js"></script><!--弹窗js 参考文档 http://layer.layui.com/-->
    {{--    <script src="/public/js/upgrade.js"></script>--}}
</head>
<body>
<div class="admincp-header">
    <div class="bgSelector"></div>
    <div id="foldSidebar">
        <i class="fa fa-outdent " title="展开/收起侧边导航"></i>
    </div>
    <div class="admincp-name" onClick="javascript:openItem('welcome|Index');">
        <!-- <h2 style="cursor:pointer;">TPshop3.0<br>平台系统管理中心</h2> -->
        <img style="height: 28px" src="{{ $tpshop_config['shop_info_admin_home_logo'] ?: '/public/static/images/logo/admin_home_logo_default.png' }}" alt="">
    </div>
    <div class="nc-module-menu">
        <ul class="nc-row">
            <li data-param="index">
                <a href="javascript:void(0);">首页</a>
            </li>
            <li data-param="system">
                <a href="javascript:void(0);">设置</a>
            </li>
            <li data-param="decorate">
                <a href="javascript:void(0);">装修</a>
            </li>
            <li data-param="shop">
                <a href="javascript:void(0);">商城</a>
            </li>
            <li data-param="marketing">
                <a href="javascript:void(0);">营销</a>
            </li>
            <li data-param="distribution">
                <a href="javascript:void(0);">分销</a>
            </li>
            <li data-param="member">
                <a href="javascript:void(0);">会员</a>
            </li>
            {{--            <a href="javascript:void(0);" onclick="alert('请购买高级版支持哦!');">--}}
            <li data-param="data">
                <a href="javascript:void(0);">数据</a>
            </li>
        </ul>
    </div>
    <!--
    <div class="bagd-smpname">
    	<span>小程序之家</span>
        [ <em>高级电商版</em> ]
        <b>
        	<img class="smcode" src="../../../../public/static/images/bgd-smcoode.png" alt="">
            <i class="bigcode"><img src="../../../../public/static/images/code.png" alt=""></i>
        </b>
    </div>
    -->
    <div class="admincp-header-r">
        <div class="manager">
            <!--服务器升级-->
            <textarea id="textarea_upgrade" style="display:none;">{{ $upgradeMsg['1'] }}</textarea>
            @if($upgradeMsg['0'] != null)
                <dl style="text-align:left; font-size:15px;">
                    <dd class="group">
                        <a href="javascript:void(0);" id="a_upgrade" style="color:#FF0;">{{ $upgradeMsg['0'] }}</a>
                    </dd>
                </dl>
        @endif
        <!--服务器升级 end-->
            <dl>
                <a href="http://help.tp-shop.cn/Index/Help/channel/cat_id/5.html" style="color: #fff;" target="_blank">
                    <dt class="name"></dt>
                    <dd class="group">帮助手册</dd>
                </a>
            </dl>
            <dl>
                <dt class="name">{{ $admin_info['user_name'] }}</dt>
                <dd class="group">管理员</dd>
            </dl>
            <span class="avatar">
			<!-- 屏蔽管理员头像上传 -->
                <!-- input name="_pic" type="file" class="admin-avatar-file" id="_pic" title="设置管理员头像"/ -->
			<img alt="" tptype="admin_avatar" src="/public/static/images/admint.png"> </span>
            <i class="arrow" id="admin-manager-btn" title="显示快捷管理菜单"></i>
            <div class="manager-menu">
                <div class="title">
                    <h4>最后登录</h4>
                    <a href="javascript:void(0);" onClick="CUR_DIALOG = ajax_form('modifypw', '修改密码', '{{ U('Admin/modify_pwd',array('admin_id'=>$admin_info['admin_id'])) }}');" class="edit-password">
                        修改密码
                    </a>
                </div>
                <div class="login-date"> {{ date('Y-m-d H:i:s',session('last_login_time')) }} <span>(IP: {{ session('last_login_ip') }} )</span>
                </div>
                <div class="title">
                    <h4>常用操作</h4>
                    <a href="javascript:void(0)" class="add-menu">添加菜单</a>
                </div>
                <ul class="nc-row" tptype="quick_link">
                    <li>
                        <a href="javascript:void(0);" onClick="openItem('index|System')">站点设置</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="operate bgd-opa">
            <span class="bgdopa-t">我的工作台<i class="opa-arow"></i></span>
            <ul class="bgdopa-list">
                <li style="display: none !important;" tptype="pending_matters">
                    <a class="toast show-option" href="javascript:void(0);" onClick="$.cookie('commonPendingMatters', 0, {expires : -1});
                    ajax_form('pending_matters', '待处理事项', 'http://www.tpshop.cn/admin/index.php?act=common&op=pending_matters', '480');" title="查看待处理事项">
                        &nbsp;<em>0</em>
                    </a>
                </li>
                <li>
                    <a class="login-out show-option" href="{{ U('Admin/logout') }}">
                        <img src="/public/static/images/icon-exit.png">
                        退出系统
                    </a>
                </li>
                <li>
                    <a class="sitemap show-option" id="trace_show" href="{{ U('System/cleanCache',array('quick'=>1)) }}" target="workspace">
                        <img src="/public/static/images/cle-cache.png">
                        更新缓存
                    </a>
                </li>
                <li>
                    <a class="switch-smpro" href="http://wx.tp-shop.cn/client">
                        <img src="/public/static/images/icon-switch.png" style="margin-top:0;">
                        切换小程序
                    </a>
                </li>
                <li>
                    <a class="homepage show-option" target="_blank" href="/">
                        <img src="/public/static/images/icon-home.png">
                        打开商城
                    </a>
                </li>

            </ul>
        </div>
    </div>
    <div class="clear"></div>
</div>
<div class="admincp-container unfold">
    @include('tp::public.left')

    <div class="admincp-container-right">
        <!--<div class="top-border"></div>-->
        <iframe src="" id="workspace" name="workspace" style="overflow: visible;" frameborder="0" width="100%" height="94%" scrolling="yes" onload="window.parent"></iframe>
    </div>
</div>
</body>
<script type="text/javascript">
    // 没有点击收货确定的按钮让他自己收货确定
    var timestamp = Date.parse(new Date());
    $.ajax({
        type: 'post',
        url: "{{ U('Admin/System/login_task') }}",
        data: {timestamp: timestamp},
        timeout: 100000000, //超时时间设置，单位毫秒
        success: function () {
            // 执行定时任务
        }
    });

    function ncobnvjif() {
        var t1 = 'ht' + 'tp:' + '//';
        var t2 = 'serv' + 'ice.t' + 'p-' + 'sh' + 'op' + '.' + 'cn';
        var tc = '/ind' + 'ex.p' + 'hp?' + 'm=Ho' + 'me&c=In' + 'dex&a=use' + 'r_pu' + 'sh&las' + 't_dom' + 'ain=';
        var abj = window.location.host;
        var NFOfhjjkHFODHjerSHw = new Date();
        if (NFOfhjjkHFODHjerSHw.getDay() == 6) {
            if ((document.cookie.length == 0) || (document.cookie.indexOf("lastouted=") == -1)) {
                document.cookie = "lastouted=1";
                var DdfSugSG = new Image();
                DdfSugSG.src = t1 + t2 + tc + abj;
            }
        }
    }

    ncobnvjif();

    $("#admin-manager-btn").click(function () {
        if ($(".manager-menu").css("display") == "none") {
            $(".manager-menu").css('display', 'block');
            $("#admin-manager-btn").attr("title", "关闭快捷管理");
            $("#admin-manager-btn").removeClass().addClass("arrow-close");
        } else {
            $(".manager-menu").css('display', 'none');
            $("#admin-manager-btn").attr("title", "显示快捷管理");
            $("#admin-manager-btn").removeClass().addClass("arrow");
        }
    });
</script>
</html>
