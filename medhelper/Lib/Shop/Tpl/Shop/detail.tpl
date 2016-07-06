<!DOCTYPE html>
<html lang="zh-CN">

<head>
    <meta charset="UTF-8">
    <meta content="target-densitydpi=device-dpi,width=640" name="viewport">
    <meta name="format-detection" content="email=no,address=no,telephone=no">

    <!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
<script src="{$WebSiteUrlPublic}/css/bootstrap/css/jquery.js"></script>


    <link rel="stylesheet" href="{$WebSiteUrlPublic}/css/shop.css">
    <script src="{$WebSiteUrlPublic}/javascript/base.js"></script>

    <script src="{$WebSiteUrlPublic}/javascript/pay.js"></script>
</head>

<body>
    <section class="view view-prize show info">
        <section class="view-goodsinfo">
            <section class="goodsinfo-slider">
                <div class="slider-bd">
                    <div class="list">
                        <article style="background-image: url({$WebSiteUrlPublic}/image/shop/logo/{$shop_info.shop_img_url});"></article>
                    </div>
            </section>
            <section class='goodsinfo-content'>
                <header>
                    <section class="goodsinfo-title" style='padding:0px;padding-top:45px;'>
                        <div class="title fix-break-word ellipsis" style='font-size:28px;color:#333333;font-weight:0'>{$shop_info.shop_name}</div>
                    </section>
                    <section style='padding:0px;padding-top:30px;height: 1px;border-bottom: 1px solid #E6E6E6;'>&nbsp;</section>
                    <section class="goods-price" style='padding:0;padding-top:35px;'>
                        <section class="current-price">
                            <div class="gold" style='clear:both;font-size:28px;'>花费：<span id='moneySpan' style='font-size:28px;color:#f25a5d'>{$shop_info.shop_price}</span><i class="icon-gold-j bg-icon"></i></div>
                        </section>
                    </section>

                    <section style='padding:0px;padding-top:30px;height: 1px;border-bottom: 1px solid #E6E6E6;'>&nbsp;</section>
                    <section class="goods-price" style='padding:0px;padding-top:35px;'>
                        <section class="current-price">
                            <div class="gold code_name" style='display:block;clear:both;font-size:28px;'>商品介绍:</div>
                        </section>
                        <section style='padding-top:24px;'>
                            <div class="text fix-break-word" style='font-size:24px;'>
                                {$shop_info.shop_describe}
                            </div>
                        </section>
                    </section>
                </header>
              
                <section class="play-bts">
                    <div class="bd">
                        <div style='background-color:#00c7ff' class="trade bt-c on" data-money='{$shop_info.shop_price}' data-id='{$shop_info.id}' onclick="callpay()">立即购买</div>
                    </div>
                </section>

            </section>
        </section>
    </section>
</body>

<input type='hidden' name='order_id' id='order_id' value='{$order_id}'>

<input type='hidden' name='id' id='id' value='{$shop_info.id}'>

<input type='hidden' name='open_id' id='open_id' value='{$open_id}'>

<input type='hidden' name='money' id='money' value='{$money}'>

<script>

function jsApiCall()
    {
        WeixinJSBridge.invoke(
            'getBrandWCPayRequest',{$jsApiParameters},
            function(res){

                if(res.err_msg == "get_brand_wcpay_request:ok" ) {

                    order_status = 1;

                } else{

                    order_status = 2;
                }

                payS.buy(order_status)

            }
        );
    }

    function callpay()
    {

        if (typeof WeixinJSBridge == "undefined"){
            if( document.addEventListener ){
                document.addEventListener('WeixinJSBridgeReady', jsApiCall, false);
            }else if (document.attachEvent){
                document.attachEvent('WeixinJSBridgeReady', jsApiCall); 
                document.attachEvent('onWeixinJSBridgeReady', jsApiCall);
            }
        }else{

            payS.createOrder();

            jsApiCall();
        }
    }


</script>
</html>