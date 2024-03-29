@include('tp::public.layout')

<body style="background-color: rgb(255, 255, 255); overflow: auto; cursor: default; -moz-user-select: inherit;">
<div id="append_parent"></div>
<div id="ajaxwaitid"></div>
<div class="page">
    <div class="fixed-bar">
        <div class="item-title">
            <div class="subject">
                <h3>自定义导航栏管理</h3>
                <h5>前端首页导航栏管理</h5>
            </div>
        </div>
    </div>
    <!-- 操作说明 -->
    <div id="explanation" class="explanation" style="color: rgb(44, 188, 163); background-color: rgb(237, 251, 248); width: 99%; height: 100%;">
        <div id="checkZoom" class="title"><i class="fa fa-lightbulb-o"></i>
            <h4 title="提示相关设置操作时应注意的要点">操作提示</h4>
            <span title="收起提示" id="explanationZoom" style="display: block;"></span>
        </div>
        <ul>
            <li>前台导航管理: 修改导航名称, 导航链接以及导航的隐藏与显示等.</li>
        </ul>
    </div>
    <div class="flexigrid">
        <div class="mDiv">
            <div class="ftitle">
                <h3>前台导航列表</h3>
                <h5>(共{{ count($navigationList) }}条记录)</h5>
            </div>
            <div title="刷新数据" class="pReload"><i class="fa fa-refresh"></i></div>
        </div>
        <div class="hDiv">
            <div class="hDivBox">
                <table cellspacing="0" cellpadding="0">
                    <thead>
                    <tr>
                        <th class="sign" axis="col0">
                            <div style="width: 24px;"><i class="ico-check"></i></div>
                        </th>
                        <th align="left" abbr="article_title" axis="col3" class="">
                            <div style="text-align: left; width: 100px;" class="">导航名称</div>
                        </th>
                        <th align="left" abbr="ac_id" axis="col4" class="">
                            <div style="text-align: left; width: 350px;" class="">链接地址</div>
                        </th>

                        <th align="center" abbr="article_show" axis="col5" class="">
                            <div style="text-align: center; width: 80px;" class="">位置</div>
                        </th>

                        <th align="center" abbr="article_show" axis="col5" class="">
                            <div style="text-align: center; width: 80px;" class="">显示</div>
                        </th>
                        <th align="center" abbr="article_new" axis="col6" class="">
                            <div style="text-align: center; width: 80px;" class="">新窗口打开</div>
                        </th>
                        <th align="center" abbr="article_time" axis="col6" class="">
                            <div style="text-align: center; width: 150px;" class="">排序</div>
                        </th>
                        <th align="center" axis="col1" class="handle">
                            <div style="text-align: center; width: 150px;">操作</div>
                        </th>
                        <th style="width:100%" axis="col7">
                            <div></div>
                        </th>
                    </tr>
                    </thead>
                </table>
            </div>
        </div>
        <div class="tDiv">
            <div class="tDiv2">
                <div class="fbutton"> <a href="{{ U('Admin/System/addEditNav') }}">
                    <div class="add" title="新增导航">
                        <span><i class="fa fa-plus"></i>新增导航</span>
                    </div>
                </a> </div>
            </div>
            <div style="clear:both"></div>
        </div>
        <div class="bDiv" style="height: auto;">
            <div id="flexigrid" cellpadding="0" cellspacing="0" border="0">
                <table>
                    <tbody>
                    @foreach( $navigationList ?: [] as $k => $vo )

                        <tr>
                            <td class="sign">
                                <div style="width: 24px;"><i class="ico-check"></i></div>
                            </td>
                            <td align="left" class="">
                                <div style="text-align: left; width: 100px;">{{ $vo['name'] }}</div>
                            </td>
                            <td align="left" class="">
                                <div style="text-align: left; width: 350px;">{{ $vo['url'] }}</div>
                            </td>

                            <td align="center" class="">
                                <div style="text-align: center; width: 80px;">
                                    {{ $vo['position'] }}
                                </div>
                            </td>

                            <td align="center" class="">
                                <div style="text-align: center; width: 80px;">
                                    @if($vo['is_show'] == 1) 
                                        <span class="yes" onClick="changeTableVal('navigation','id','{{ $vo['id'] }}','is_show',this)" ><i class="fa fa-check-circle"></i>是</span>
                                        @else
                                        <span class="no" onClick="changeTableVal('navigation','id','{{ $vo['id'] }}','is_show',this)" ><i class="fa fa-ban"></i>否</span>
                                     @endif 
                                </div>
                            </td>
                            <td align="center" class="">
                                <div style="text-align: center; width: 80px;">
                                    @if($vo['is_new'] == 1) 
                                        <span class="yes" onClick="changeTableVal('navigation','id','{{ $vo['id'] }}','is_new',this)" ><i class="fa fa-check-circle"></i>是</span>
                                        @else
                                        <span class="no" onClick="changeTableVal('navigation','id','{{ $vo['id'] }}','is_new',this)" ><i class="fa fa-ban"></i>否</span>
                                     @endif 
                                </div>
                            </td>
                            <td class="sort">
                                <div style="text-align: center; width: 150px;">
                                    <input style="text-align: center;" type="text" onkeyup="this.value=this.value.replace(/[^\d]/g,'')" onpaste="this.value=this.value.replace(/[^\d]/g,'')" onblur="changeTableVal('navigation','id','{{ $vo['id'] }}','sort',this)"  size="4"  value="{{ $vo['sort'] }}" />
                                </div>
                            </td>
                            <td align="center" class="handle">
                                <div style="text-align: center; width: 170px; max-width:170px;">
                                    @if($vo['url'] != NULL) 
                                        <a class="btn blue"  target="_blank" href="{{ $vo['url'] }}"><i class="fa fa-search"></i>查看</a>
                                     @endif 
                                    <a class="btn red" href="{{ U('System/delNav',array('id'=>$vo['id'])) }}"><i class="fa fa-trash-o"></i>删除</a>
                                    <a href="{{ U('Admin/System/addEditNav',array('id'=>$vo['id'])) }}" class="btn blue"><i class="fa fa-pencil-square-o"></i>编辑</a> </div>
                            </td>
                            <td align="" class="" style="width: 100%;">
                                <div>&nbsp;</div>
                            </td>
                        </tr>
                    
@endforeach
                    </tbody>
                </table>
            </div>
            <div class="iDiv" style="display: none;"></div>
        </div>
        <!--分页位置-->
        {{ $page }} </div>
</div>
<script>
    $(document).ready(function(){
        // 表格行点击选中切换
        $('#flexigrid > table>tbody >tr').click(function(){
            $(this).toggleClass('trSelected');
        });

        // 点击刷新数据
        $('.fa-refresh').click(function(){
            location.href = location.href;
        });

    });

</script>
</body>
</html>