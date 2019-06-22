<table>
       <tbody>
             @foreach( $goodsList ?: [] as $i => $list )

              <tr data-id="{{ $list['goods_id'] }}">
                <td class="sign" axis="col6">
                  <div style="width: 24px;"><i class="ico-check"></i></div>
                </td>
			 <td class="handle" >
                <div style="text-align:left;   min-width:50px !important; max-width:inherit !important;">
                  <span class="btn"><em><i class="fa fa-cog"></i>设置<i class="arrow"></i></em>
                  <ul>
                    <li><a target="_blank" href="{{ U('Home/Goods/goodsInfo',array('id'=>$list['goods_id'])) }}">预览商品</a></li>
                    <li><a href="{{ U('Admin/Goods/addEditGoods',array('id'=>$list['goods_id'])) }}">编辑商品</a></li>
                    <li><a href="javascript:void(0);" onclick="publicHandle('{{ $list['goods_id'] }}','del')">删除商品</a></li>
                    <!-- <li><a href="javascript:void(0);" onclick="ClearGoodsHtml('{{ $list['goods_id'] }}')">清除静态缓存</a></li> -->
                    <li><a href="javascript:void(0);" onclick="ClearGoodsThumb('{{ $list['goods_id'] }}')">清除缩略图缓存</a></li>                    
                  </ul>
                  </span>
                </div>
              </td>                
                <td align="center" axis="col0">
                  <div style="width: 50px;">{{ $list['goods_id'] }}</div>
                </td>                
                <td align="center" axis="col0">
                  <div style="text-align: left; width: 300px;">@if($list['is_virtual'] == 1) <span class="type-virtual" title="虚拟兑换商品">虚拟</span> @endif {{ getSubstr($list['goods_name'],0,33) }}</div>
                </td>
                <td align="center" axis="col0">
                  <div style="text-align: center; width: 100px;">{{ $list['goods_sn'] }}</div>
                </td>
                <td align="center" axis="col0">
                  <div style="text-align: center; width: 100px;">{{ $catList[$list['cat_id']]['name'] }}</div>
                </td>
                <td align="center" axis="col0">
                  <div style="text-align: center; width: 50px;">{{ $list['shop_price'] }}</div>
                </td>               
                <td align="center" axis="col0">
                  <div style="text-align: center; width: 30px;">
                    @if($list['is_recommend'] == 1) 
                      <span class="yes" onClick="changeTableVal('goods','goods_id','{{ $list['goods_id'] }}','is_recommend',this)" ><i class="fa fa-check-circle"></i>是</span>
                      @else
                      <span class="no" onClick="changeTableVal('goods','goods_id','{{ $list['goods_id'] }}','is_recommend',this)" ><i class="fa fa-ban"></i>否</span>
                     @endif 
                  </div>
                </td>                
                <td align="center" axis="col0">
                  <div style="text-align: center; width: 30px;">
                    @if($list['is_new'] == 1) 
                      <span class="yes" onClick="changeTableVal('goods','goods_id','{{ $list['goods_id'] }}','is_new',this)" ><i class="fa fa-check-circle"></i>是</span>
                      @else
                      <span class="no" onClick="changeTableVal('goods','goods_id','{{ $list['goods_id'] }}','is_new',this)" ><i class="fa fa-ban"></i>否</span>
                     @endif 
                  </div>
                </td>       
                <td align="center" axis="col0">
                  <div style="text-align: center; width: 30px;">
                    @if($list['is_hot'] == 1) 
                      <span class="yes" onClick="changeTableVal('goods','goods_id','{{ $list['goods_id'] }}','is_hot',this)" ><i class="fa fa-check-circle"></i>是</span>
                      @else
                      <span class="no" onClick="changeTableVal('goods','goods_id','{{ $list['goods_id'] }}','is_hot',this)" ><i class="fa fa-ban"></i>否</span>
                     @endif 
                  </div>
                </td>       
                <td align="center" axis="col0">
                  <div style="text-align: center; width: 50px;">
                    @if($list['is_on_sale'] == 1) 
                      <span class="yes" onClick="changeTableVal('goods','goods_id','{{ $list['goods_id'] }}','is_on_sale',this)" ><i class="fa fa-check-circle"></i>是</span>
                      @else
                      <span class="no" onClick="changeTableVal('goods','goods_id','{{ $list['goods_id'] }}','is_on_sale',this)" ><i class="fa fa-ban"></i>否</span>
                     @endif 
                  </div>
                </td>    
                <td align="center" axis="col0">                  
                <div style="text-align: center; width: 50px; @if($list['store_count'] <= tpCache('basic.warning_storage')) color:#D91222; @endif  ">
                  {{ $list['store_count'] }}
                </div>
                </td>           
                <td align="center" axis="col0">                  
                <div style="text-align: center; width: 50px;">
                  <input type="text" onKeyUp="this.value=this.value.replace(/[^\d]/g,'')" onpaste="this.value=this.value.replace(/[^\d]/g,'')" onblur="changeTableVal('goods','goods_id','{{ $list['goods_id'] }}','sort',this)" size="4" value="{{ $list['sort'] }}" />
                </div>                  
                </td>                     
                <td align="" class="" style="width: 100%;">
                  <div>&nbsp;</div>
                </td>
              </tr>
            
@endforeach             
          </tbody>
        </table>
        <!--分页位置--> {{ $page }}
		<script>
            // 点击分页触发的事件
            $(".pagination  a").click(function(){
                cur_page = $(this).data('p');
                ajax_get_table('search-form2',cur_page);
            });
			
			/*
			 * 清除静态页面缓存
			 */
			function ClearGoodsHtml(goods_id)
			{
				$.ajax({
						type:'GET',
						url:"{{ U('Admin/System/ClearGoodsHtml') }}",
						data:{goods_id:goods_id},
						dataType:'json',
						success:function(data){
							layer.alert(data.msg, {icon: 2});								 
						}
				});
			}
			/*
			 * 清除商品缩列图缓存
			 */
			function ClearGoodsThumb(goods_id)
			{
				$.ajax({
						type:'GET',
						url:"{{ U('Admin/System/ClearGoodsThumb') }}",
						data:{goods_id:goods_id},
						dataType:'json',
						success:function(data){
							layer.alert(data.msg, {icon: 2});								 
						}
				});
			}		
			
        </script>