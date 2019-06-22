<div class="admincp-container-left">
    <!--<div class="top-border"><span class="nav-side"></span><span class="sub-side"></span></div>-->
    <div id="admincpNavTabs_index" class="nav-tabs">
        <dl>
            <dt>
                <a href="javascript:void(0);"><span class="ico-microshop-1"></span>
                    <h3>概览</h3></a>
            </dt>
            <dd class="sub-menu">
                <ul>
                    <li>
                        <a href="javascript:void(0);" data-param="welcome|Index">系统后台</a>
                    </li>
                </ul>
            </dd>
        </dl>
    </div>
    @foreach( $menu ?: [] as $mk => $vo )

        <div id="admincpNavTabs_{{ $mk }}" class="nav-tabs">
            @foreach( $vo['child'] ?: [] as $key => $v2 )

                <dl>
                    <dt>
                        <a href="javascript:void(0);"><span class="ico-{{ $mk }}-{{ $key }}"></span>
                            <h3>{{ $v2['name'] }}</h3></a>
                    </dt>
                    <dd class="sub-menu">
                        <ul>
                            @foreach( $v2['child'] ?: [] as $key => $v3 )

                                <li>
                                    <a href="javascript:void(0);" data-param="{{ $v3['act'] }}|{{ $v3['op'] }}">{{ $v3['name'] }}</a>
                                </li>

                            @endforeach
                        </ul>
                    </dd>
                </dl>

            @endforeach
        </div>

    @endforeach
    <div class="about" title="关于系统" onclick="javascript:layer.open({type: 2,title: '关于我们',shadeClose: true,shade: 0.3,area: ['50%', '60%'],content:'{{ U("Index/about") }}', });">
        <i class="fa fa-copyright"></i>
        <span>tpshop.cn</span></div>
</div>