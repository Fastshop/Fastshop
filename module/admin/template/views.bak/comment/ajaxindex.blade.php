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

  	<tr data-id="{{ $list['comment_id'] }}">
        <td class="sign" axis="col0">
          <div style="width: 24px;"><i class="ico-check" ></i></div>
        </td>
        <td align="left" abbr="nickname" axis="col3" class="">
          <div style="text-align: left; width: 100px;" class="">{{ $list['username'] }}</div>
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
                      <span class="yes" onClick="changeTableVal('Comment','comment_id','{{ $list['comment_id'] }}','is_show',this)" ><i class="fa fa-check-circle"></i>是</span>
                      @else
                      <span class="no" onClick="changeTableVal('Comment','comment_id','{{ $list['comment_id'] }}','is_show',this)" ><i class="fa fa-ban"></i>否</span>
                     @endif 
        </div>
        </td>
        <td align="center" abbr="article_time" axis="col6" class="">
          <div style="text-align: center; width: 120px;" class="">{{ date('Y-m-d H:i:s',$list['add_time']) }}</div>
        </td>
        <td align="center" abbr="article_time" axis="col6" class="">
          <div style="text-align: center; width: 120px;" class="">{{ $list['ip_address'] }}</div>
        </td>
        <td align="center" abbr="article_time" axis="col3" class="">
            <!--<div style="text-align: center; width: 120px;" class="">{{ $list['sort'] }}</div>-->
            <div style="text-align: center; width: 120px;">
                <input type="text" onkeyup="this.value=this.value.replace(/[^\d]/g,'')" onpaste="this.value=this.value.replace(/[^\d]/g,'')" onblur="changeTableVal('comment','comment_id','{{ $list['comment_id'] }}','sort',this)" size="4" value="{{ $list['sort'] }}">

            </div>
        </td>
        <td align="center" abbr="article_time" axis="col6" class="">
               <div style="text-align: center; width: 160px;" class="">
       			<a class="btn green" style="display:"  href="{{ U('Admin/comment/detail',array('id'=>$list['comment_id'])) }}"><i class="fa fa-list-alt"></i>查看</a>
       			<a class="btn red"  href="javascript:void(0);" onclick="publicHandle('{{ $list['comment_id'] }}','del')" ><i class="fa fa-trash-o"></i>删除</a>
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
    
    $( 'h5', '.ftitle').empty().html("(共{{ $pager->totalRows }}条记录)");
   
</script>