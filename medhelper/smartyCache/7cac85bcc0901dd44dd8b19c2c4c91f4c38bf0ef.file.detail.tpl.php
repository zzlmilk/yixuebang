<?php /* Smarty version Smarty-3.0-RC2, created on 2016-06-24 14:23:50
         compiled from "/private/var/www/html/yixuebang/medhelper/Lib/Shop/Tpl/Shop/detail.tpl" */ ?>
<?php /*%%SmartyHeaderCode:829353906576cd1f6ca55c3-12130620%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7cac85bcc0901dd44dd8b19c2c4c91f4c38bf0ef' => 
    array (
      0 => '/private/var/www/html/yixuebang/medhelper/Lib/Shop/Tpl/Shop/detail.tpl',
      1 => 1466587055,
    ),
  ),
  'nocache_hash' => '829353906576cd1f6ca55c3-12130620',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html>
<html lang="zh-CN">

<head>
    <meta charset="UTF-8">
    <meta content="target-densitydpi=device-dpi,width=640" name="viewport">
    <meta name="format-detection" content="email=no,address=no,telephone=no">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/css/shop.css">
    <script src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/javascript/base.js"></script>

    <script src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/javascript/pay.js"></script>
</head>

<body>
    <section class="view view-prize show info">
        <section class="view-goodsinfo">
            <section class="goodsinfo-slider">
                <div class="slider-bd">
                    <div class="list">
                        <article style="background-image: url(<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/image/shop/logo/<?php echo $_smarty_tpl->getVariable('shop_info')->value['shop_img_url'];?>
);"></article>
                    </div>
            </section>
            <section class='goodsinfo-content'>
                <header>
                    <section class="goodsinfo-title" style='padding:0px;padding-top:45px;'>
                        <div class="title fix-break-word ellipsis" style='font-size:28px;color:#333333;font-weight:0'><?php echo $_smarty_tpl->getVariable('shop_info')->value['shop_name'];?>
</div>
                    </section>
                    <section style='padding:0px;padding-top:30px;height: 1px;border-bottom: 1px solid #E6E6E6;'>&nbsp;</section>
                    <section class="goods-price" style='padding:0;padding-top:35px;'>
                        <section class="current-price">
                            <div class="gold" style='clear:both;font-size:28px;'>花费：<span id='moneySpan' style='font-size:28px;color:#f25a5d'><?php echo $_smarty_tpl->getVariable('shop_info')->value['shop_price'];?>
</span><i class="icon-gold-j bg-icon"></i></div>
                        </section>
                    </section>

                    <section style='padding:0px;padding-top:30px;height: 1px;border-bottom: 1px solid #E6E6E6;'>&nbsp;</section>
                    <section class="goods-price" style='padding:0px;padding-top:35px;'>
                        <section class="current-price">
                            <div class="gold code_name" style='display:block;clear:both;font-size:28px;'>商品介绍:</div>
                        </section>
                        <section style='padding-top:24px;'>
                            <div class="text fix-break-word" style='font-size:24px;'>
                                <?php echo $_smarty_tpl->getVariable('shop_info')->value['shop_describe'];?>

                            </div>
                        </section>
                    </section>
                </header>
              
                <section class="play-bts">
                    <div class="bd">
                        <div style='background-color:#00c7ff' class="trade bt-c on" data-money='<?php echo $_smarty_tpl->getVariable('shop_info')->value['shop_price'];?>
' data-id='<?php echo $_smarty_tpl->getVariable('shop_info')->value['id'];?>
' onclick="payS.buy(this)">立即购买</div>
                    </div>
                </section>

            </section>
        </section>
    </section>
</body>

<script src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/javascript/pingpp-pc.js"></script>

</html>