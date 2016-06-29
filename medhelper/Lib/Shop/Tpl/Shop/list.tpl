<html>

<head>
    <meta charset="UTF-8">
    <meta content="target-densitydpi=device-dpi,width=640,user-scalable=0;" name="viewport">
    <title>商品列表</title>
    <meta name="format-detection" content="email=no,address=no,telephone=no">
    <link rel="stylesheet" href="{$WebSiteUrlPublic}/css/shop.css">

    <script src="{$WebSiteUrlPublic}/javascript/base.js"></script>

    <body>
        <section class='view view-home show'>
            <section class="home-nav">
                <section class="nav-bd">
                    <section class="list">
                        <article data-name="user" class="user" style='text-align:center'>
                            <div class="dec">
                                <div class="title" style='paddig:0;margin:0;text-align:center;'>商城</div>
                            </div>
                        </article>
                       <!--  <article data-name="sign" class="check-in" onclick="javascript:window.location.href = '{$websiteUrl}/exchange/record?code={$code}'">
                            <div class="dec">
                                <div class="title">兑换记录</div>
                            </div>
                        </article> -->
                    </section>
                </section>
            </section>

            <section class="group-bd collapse  " id="19">
                <section class="goods-item-default list">
                    {foreach from=$shop_data item=lists}
                    <article class="goods-item " data-id="{$lists.id}" onclick='base.jump("shop/detail?id={$lists.id}")'>
                        <div class="goods-item-img">
                            <img data-src="{$lists.logo}" src="{$WebSiteUrlPublic}/image/shop/logo/{$lists.shop_img_url}" style="opacity: 1;width:80%;">
                        </div>
                        <div class="goods-item-meta">
                            <div class="mask bg-icon"></div>
                            <div class="meta-bd">
                                <div class="goods-item-name ellipsis">{$lists.shop_name}</div>
                                <div class="goods-item-price">
                                    <div class="price">
                                        <span>{$lists.shop_price}元</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                    {/foreach}
                </section>
            </section>
        </section>
    </body>

</html>