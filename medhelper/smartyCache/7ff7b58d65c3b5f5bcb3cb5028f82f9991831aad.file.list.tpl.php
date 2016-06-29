<?php /* Smarty version Smarty-3.0-RC2, created on 2016-06-22 16:41:41
         compiled from "/private/var/www/html/yixuebang/medhelper/Lib/Shop/Tpl/Shop/list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1714080533576a4f451d8a65-38106100%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7ff7b58d65c3b5f5bcb3cb5028f82f9991831aad' => 
    array (
      0 => '/private/var/www/html/yixuebang/medhelper/Lib/Shop/Tpl/Shop/list.tpl',
      1 => 1466583652,
    ),
  ),
  'nocache_hash' => '1714080533576a4f451d8a65-38106100',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="target-densitydpi=device-dpi,width=640,user-scalable=0;" name="viewport">
    <title>商品列表</title>
    <meta name="format-detection" content="email=no,address=no,telephone=no">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/css/shop.css">

    <script src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/javascript/base.js"></script>

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
                       <!--  <article data-name="sign" class="check-in" onclick="javascript:window.location.href = '<?php echo $_smarty_tpl->getVariable('websiteUrl')->value;?>
/exchange/record?code=<?php echo $_smarty_tpl->getVariable('code')->value;?>
'">
                            <div class="dec">
                                <div class="title">兑换记录</div>
                            </div>
                        </article> -->
                    </section>
                </section>
            </section>

            <section class="group-bd collapse  " id="19">
                <section class="goods-item-default list">
                    <?php  $_smarty_tpl->tpl_vars['lists'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('shop_data')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['lists']->key => $_smarty_tpl->tpl_vars['lists']->value){
?>
                    <article class="goods-item " data-id="<?php echo $_smarty_tpl->tpl_vars['lists']->value['id'];?>
" onclick='base.jump("shop/detail?id=<?php echo $_smarty_tpl->tpl_vars['lists']->value['id'];?>
")'>
                        <div class="goods-item-img">
                            <img data-src="<?php echo $_smarty_tpl->tpl_vars['lists']->value['logo'];?>
" src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/image/shop/logo/<?php echo $_smarty_tpl->tpl_vars['lists']->value['shop_img_url'];?>
" style="opacity: 1;width:80%;">
                        </div>
                        <div class="goods-item-meta">
                            <div class="mask bg-icon"></div>
                            <div class="meta-bd">
                                <div class="goods-item-name ellipsis"><?php echo $_smarty_tpl->tpl_vars['lists']->value['shop_name'];?>
</div>
                                <div class="goods-item-price">
                                    <div class="price">
                                        <span><?php echo $_smarty_tpl->tpl_vars['lists']->value['shop_price'];?>
元</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                    <?php }} ?>
                </section>
            </section>
        </section>
    </body>

</html>