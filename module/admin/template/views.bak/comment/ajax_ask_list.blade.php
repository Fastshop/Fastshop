<table>
 	<tbody>
 	@if(empty($comment_list) == true) 
 		<tr data-id="0">
	        <td class="no-data" align="center" axis="col0" colspan="50">
	        	<i class="fa fa-exclamation-circle"></i>没有符合条件的记录
	        </td>
	     </tr>
	@else
 	 @foreach( $comment_list ?: [] as $i => $list )

  	<tr data-id="{{ $list['id'] }}">
        <td class="sign" axis="col0">
          <div style="width: 24px;"><i class="ico-check" ><input type="checkbox" name="selected[]" value="{{ $list['id'] }}" style="display:none;"/></i></div>
        </td>
        <td align="left" abbr="nickname" axis="col3" class="">
          <div style="text-align: left; width: 120px;" class="">{{ $list['username'] }}</div>
        </td>        
        <td align="left" abbr=content axis="col4" class="">
          	<div style="text-align: left; width: 200px;" class="">{{ $list['content'] }}</div>
        </td> 
        <td align="center" abbr="article_show" axis="col5" class="" style="white-space: normal;">
            <div style="text-align: left; width: 200px;white-space: normal;height:inherit;line-height: inherit;" class="">
          		<a target="_blank" href="{{ U('Home/Goods/goodsInfo',array('id'=>$list['goods_id'])) }}">{{ $goods_list[$list['goods_id']] }}</a>
          	</div>
        </td>
        <td align="center" abbr="article_time" axis="col6" class="">
          <div style="text-align: center; width: 50px;">
                    @if($list['is_show'] == 1) 
                      <span class="yes" onClick="changeTableVal('goods_consult','id','{{ $list['id'] }}','is_show',this)" ><i class="fa fa-check-circle"></i>是</span>
                      @else
                      <span class="no" onClick="changeTableVal('goods_consult','id','{{ $list['id'] }}','is_show',this)" ><i class="fa fa-ban"></i>否</span>
                     @endif 
        </div>
        </td>
        <td align="center" abbr="article_time" axis="col6" class="">
          <div style="text-align: center; width: 120px;" class="">{{ $consult_type[$list['consult_type']] }}</div>
        </td>        
        <td align="center" abbr="article_time" axis="col6" class="">
          <div style="text-align: center; width: 120px;" class="">{{ date('Y-m-d H:i:s',$list['add_time']) }}</div>
        </td>     
        <td align="center" abbr="article_time" axis="col6" class="">
               <div style="text-align: center; width: 160px;" class="">
       			<a class="btn green" style="display:"  href="{{ U('Comment/consult_info',array('id'=>$list['id'])) }}"><i class="fa fa-list-alt"></i>查看</a>
       		</div>
           </td>
         <td align="" class="" style="width: 100%;">
            <div>&nbsp;</div>
          </td>
      </tr>
      
@endforeach
       @endif 
    </tbody>
</table>
<div class="row">
    <div class="col-sm-6 text-left"></div>
    <div class="col-sm-6 text-right">{{ $page }}</div>
</div>
<script>
    $(".pagination  a").click(function(){
        var page = $(this).data('p');
        ajax_get_table('search-form2',page);
    }); 
    
    $( '.ftitle > h5').empty().html("(共{{ $pager->totalRows }}条记录)");
</script>