
<!--搭配购组合套餐 s-->
<div class="Combination-set-meal p">
</div>

<script>
    /**
     * 获取搭配购商品
     */
    function getCombination() {
        var goods_id = {{ $goods['goods_id'] }};
        var item_id = $("input[name='item_id']").val();
        var url = "/index.php?m=Home&c=Goods&a=combination";
        $.ajax({
            type: "Post",
            url: url,
            data: {goods_id: goods_id, item_id: item_id},
            dataType: "json",
            success: function (data) {
                if (data.status == 1) {
                    var str = combinationHtml(data.result)
                    $('.Combination-set-meal').html(str);
                    f()
                }

            }
        });
    }

    function combinationHtml(result) {
        var goods_id = {{ $goods['goods_id'] }};
        var item_id = $("input[name='item_id']").val();
        var html = '<div class="w1224">' +
            '<div class="set-meal-wrap">' +
            '<form action="" method="">' +
            '<!--组合nav---s-->' +
            '<div class="set-meal-nav">' +
            '<ul class="p">'
        $.each(result, function (i, o) {
            var nav = i == 0 ? "meal-nav-li" : "";
            html += '<li class="fl ' + nav + '">' + o.title + '</li>';
        })

        html += '</ul>' +
            '</div>' +
            '<!--组合nav---e-->' +
            '<!--组合套餐内容---s-->'
        $.each(result, function (i, o) {
            var img =o.combination_goods[0]['original_img']?o.combination_goods[0]['original_img']:'/public/images/icon_goods_thumb_empty_300.png';
            var price =(o.combination_goods[0]['original_price'] - o.combination_goods[0]['price']).toFixed(2);
            html += '<div class="set-meal-cont">' +
                '<div class="set-meal-list p">' +
                '<div class="fl meal-one">' +
                '<input type="hidden" class="combination_goods_ids" value="'+o.combination_goods[0]['goods_id']+'">' +
                '<input type="hidden" class="combination_item_id" value="'+o.combination_goods[0]['item_id']+'">' +
                '<input type="hidden" class="combination_id" value="'+o.combination_id+'">' +
                '<a href="/index.php/Home/Goods/goodsInfo/id/'+o.combination_goods[0]['goods_id']+'">' +
                '<div class="meal-img">' +
                '<img src="'+img+'" />' +
                '</div>' +
                '<div class="meal-name">' +
                o.combination_goods[0]['goods_name'] + o.combination_goods[0]['key_name'] +
                '</div>' +
                '<div class="meal-price original_price_one">￥<span>' +
                o.combination_goods[0]['price'] +
                '</span></div>' +
                '</a>' +
                '<div class="Collocations-money original_price_one_collocations">搭配省:￥<span>' + price + '</span></div>'+
                '</div>' +
                '<div class="fl jia-icon-wrap">' +
                '<div class="meal-jia-icon">' +
                '</div>' +
                '</div>' +
                '<div class="fl meal-jia-list">' +
                '<div class="at-Bou-wrap mr_frbox">' +
                '<div class="at-Boutique mr_frUl  at-que">' +
                '<ul class="p ">';
            $.each(o.combination_goods, function (ii, oo) {
                var selected = '';
                if(goods_id == oo.goods_id && item_id == oo.item_id){selected = 'checked'}

                var price = (oo.original_price - oo.price).toFixed(2);
                var img =oo.original_img?oo.original_img:'/public/images/icon_goods_thumb_empty_300.png';
                if (ii != 0) {
                    html += '<li class="fl">' +
                        '<div class="bou-img">' +
                        '<img src="'+img+'" />' +
                        '</div>' +
                        '<div class="pror-title">' +
                        '<h3><a href="/index.php/Home/Goods/goodsInfo/id/'+oo.goods_id+'">' + oo.goods_name + oo.key_name + '</a></h3>' +
                        '</div>' +
                        '<div class="meal-price">' +
                        '<div class="meal-price-radio">' +
                        '<input type="checkbox" data-id="'+oo.goods_id+'" data-item="'+oo.item_id+'" onclick="clickGetPrice(this,' + oo.price + ',' + (oo.original_price - oo.price) + ')" ' + selected + ' id="price-radio1' + oo.goods_id + oo.combination_id +oo.item_id+ '" />' +
                        '<label for="price-radio1' + oo.goods_id + oo.combination_id + oo.item_id+'" ></label>' +
                        '</div>' +
                        '￥<span>' + oo.price + '</span>' +
                        '</div>';
                    if (price != 0) {
                        html += '<div class="Collocations-money">搭配省:￥<span>' + price + '</span></div>';
                    }
                    html += '</li>';
                }
            })
            html += '</ul>' +
                '<div  class="at-lef mr_frBtnL prev at-iconbts">' +
                '<i></i>' +
                '</div>' +
                '<div  class="at-rig mr_frBtnR next  at-iconbts">' +
                '<i ></i>' +
                '</div>' +
                '</div>' +
                '</div>' +
                '</div>' +
                '<div class="fl jia-icon-wrap">' +
                '<div class="meal-jia-icon jia-icon-dengyu">' +
                '</div>' +
                '</div>' +
                '<div class="fl set-meal-right">' +
                '<p class="set-meal-slect">已选择<span>1</span>件</p>' +
                '<div class="Combination-price">组合价:<span>￥<i>0</i></span></div>' +
                '<div class="Price-saving">共节省:￥<span>0</span></div>' +
                '<div class="Purchase-immediately-btn">' +
                '<input type="button" name="" id="" onclick="addCombinationShop(this,1)" value="立即购买" />' +
                '<label></label>' +
                '</div>' +
                '<div class="add-Shopping-btn">' +
                '<input type="button" name="" id="" onclick="addCombinationShop(this)" value="加入购物车" />' +
                '<label></label>' +
                '</div>' +
                '</div>' +
                '</div>' +
                    '</div>' +
                '<!--组合套餐内容---e-->'
        })
        html += '</form>' +
            '</div>' +
            '</div>'
        return html;
    }


</script>
<script type="text/javascript">
    //			组合套餐商品轮播
    //选中数量
    function f() {


        (function () {
            var nowIndex = 0;
            var timer = null;
            var pretime = null;
            var noxttime = null;
            $(".at-lef").click(function () {
                var this_obj = $(this);
                clearTimeout(noxttime);//清除时间
                noxttime = setTimeout(function () {
                    oleft(this_obj);
                }, 300)
            });
            $(".at-rig").click(function () {
                var this_obj = $(this);
                clearTimeout(pretime);
                pretime = setTimeout(function () {
                    oright(this_obj);
                }, 300)
            });

            //点击往后
            function oright(this_obj) {
                this_obj.siblings("ul").find("li:last").insertBefore(this_obj.siblings("ul").find("li:first"));
                this_obj.siblings("ul").animate({"left": "-165px"});
                this_obj.siblings("ul").animate({"left": 0}, 1000, "backOut");
                nowIndex--;
                if (nowIndex < 0) {
                    nowIndex = this_obj.siblings("ul").find("li").length - 1;
                }
            }

            //点击往前
            function oleft(this_obj) {
                this_obj.siblings("ul").animate({"left": "-165px"}, 1000, "backIn", function () {
                    this_obj.siblings("ul").find("li:first").appendTo(this_obj.siblings("ul"));
                    this_obj.siblings("ul").animate({"left": "0"}, 0);
                });
                nowIndex++;
                if (nowIndex > this_obj.siblings("ul").find("li").length - 1) {
                    nowIndex = 0;
                }
            }

            //			导航切换
            $(".set-meal-cont").eq(0).show();
            CombinationPrice = $('.original_price_one').eq(0).find('span').text();//默认主商品的市场价
            PriceSaving = $('.original_price_one_collocations').eq(0).find('span').text();//默认主商品的优惠价
            $('.Price-saving').eq(0).find('span').text(PriceSaving);//默认主商品的优惠价
            eachIput($('.at-que').eq(0).find('input[type=checkbox]'));
            $('.Combination-price').eq(0).find('i').text(CombinationPrice);
            $('.Price-saving').eq(0).find('span').text(PriceSaving);
            $('.set-meal-slect').eq(0).find('span').text(num);
            $(".set-meal-nav li").click(function () {
                var index = $(this).index();
                CombinationPrice = $('.original_price_one').eq(index).find('span').text();
                PriceSaving = $('.original_price_one_collocations').eq(index).find('span').text();
                $('.Price-saving').eq(index).find('span').text(PriceSaving);
                eachIput($('.at-que').eq(index).find('input[type=checkbox]'));
                $('.Combination-price').eq(index).find('i').text(CombinationPrice);
                $('.Price-saving').eq(index).find('span').text(PriceSaving);
                $('.set-meal-slect').eq(index).find('span').text(num);
                $(".set-meal-nav li").removeClass("meal-nav-li");
                $(this).addClass("meal-nav-li");
                $(".set-meal-cont").hide();
                $(".set-meal-cont").eq(index).show()

            })

        })();

    }

    //遍历默认选中的
    function eachIput(data) {
        num = 1;
        data.each(function (i) {
            var checked = $(this).context.checked;
            if (checked) {
                var val = $(this).parents(".meal-price").find('span').text();
                var saving = $(this).parents(".meal-price").next().find('span').text();
                CombinationPrice = (CombinationPrice - 0) + (val - 0);
                PriceSaving = (PriceSaving - 0) + (saving - 0);
                num++;
            }
        });
    }

    //选中获取价格
    function clickGetPrice(e, price, saving) {
        var parents = $(e).parents(".set-meal-cont");
        var CombinationCount = parents.find('.Combination-price').find('i').text();
        var PriceCount = parents.find('.Price-saving').find('span').text();
        if ($(e).attr('checked')) {
            $(e).removeAttr('checked')
            parents.find('.Combination-price').find('i').text((CombinationCount - price).toFixed(2));
            parents.find('.Price-saving').find('span').text((PriceCount - saving).toFixed(2));
            num--
            parents.find('.set-meal-slect').find('span').text(num);
        } else {
            $(e).attr('checked', 'checked')
            parents.find('.Combination-price').find('i').text((CombinationCount - 0 + price).toFixed(2));
            parents.find('.Price-saving').find('span').text((PriceCount - 0 + saving).toFixed(2));
            num++
            parents.find('.set-meal-slect').find('span').text(num);
        }
    }

    function addCombinationShop(e,t) {
        var a = $(e).parents('.set-meal-cont').find('.at-que').find('input[type=checkbox]');
        var n = 0;
        var arr = new Array();
        var address = $('#dispatching_msg').attr('region_id');
        var combination = {goods_id:$(e).parents('.set-meal-cont').find('.combination_goods_ids').val(),item_id:$(e).parents('.set-meal-cont').find('.combination_item_id').val(),'region_id':address};
        arr.push(combination) ;
        var combination_id = $(e).parents('.set-meal-cont').find('.combination_id').val();
        $.each(a,function (i,o) {
            var checked = $(this).context.checked;
            if (checked) {
                var combination_goods_ids = {goods_id:$(this).attr('data-id'),item_id:$(this).attr('data-item'),'region_id':address};
                arr.push(combination_goods_ids) ;
                n++;
            }
        });

        if(n==0){
            alert('请至少勾选一个商品');
            return false;
        }else{
            $.ajax({
                type: "Post",
                url: "{{ U('Home/Cart/addCombination') }}",
                data: {combination_id: combination_id, combination_goods: arr,num:1},
                dataType: "json",
                success: function (data) {

                    if (data.status == 1) {
                        if(t==1){
                            location.href = "/index.php?m=Home&c=Cart&a=index";
                            return false;
                        }else{
                            layer.open({
                                type: 2,
                                title: '温馨提示',
                                skin: 'layui-layer-rim', //加上边框
                                area: ['490px', '386px'], //宽高
                                content: "/index.php?m=Home&c=Goods&a=open_add_cart"
                            });
                        }

                    }else{
                        layer.msg(data.msg, {icon: 2});
                    }

                }
            });
        }

    }

</script>
