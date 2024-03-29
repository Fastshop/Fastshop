 @foreach( $favourite_goods ?: [] as $i => $v )

    <li>
        <div class="pad">
            <a href="{{ U('Home/Goods/goodsInfo',array('id'=>$v['goods_id'])) }}" target="_blank">
                <img class="lazy" data-original="{{ goods_thum_images($v['goods_id'],238,200) }}" style="display: inline;" />
            </a>
            <div class="shop_name2">
                <a href="{{ U('Home/Goods/goodsInfo',array('id'=>$v['goods_id'])) }}">
                    {{ $v['goods_name'] }}
                </a>
            </div>
            <div class="price-tag">
                <span class="now"><em class="li_xfo">￥</em><em>{{ $v['shop_price'] }}</em></span>
                <span class="old"><em>￥</em><em>{{ $v['market_price'] }}</em></span>
            </div>
        </div>
    </li>

@endforeach