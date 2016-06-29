<?php /* Smarty version Smarty-3.0-RC2, created on 2016-06-24 12:54:35
         compiled from "/private/var/www/html/yixuebang/medhelper/Lib/News/Tpl/News/news_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1211950547576cbd0bbc2eb6-78228267%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bab172c44bc0ab1a1b54e711b876d7e13a9efea4' => 
    array (
      0 => '/private/var/www/html/yixuebang/medhelper/Lib/News/Tpl/News/news_list.tpl',
      1 => 1466743750,
    ),
  ),
  'nocache_hash' => '1211950547576cbd0bbc2eb6-78228267',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php  $_smarty_tpl->tpl_vars['data'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('info')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['data']->key => $_smarty_tpl->tpl_vars['data']->value){
?>

    <div style='width:100%;height: 80px;border: 1px solid black;cursor: pointer' onclick='javasript:window.location.href = "<?php echo $_smarty_tpl->getVariable('websiteUrl')->value;?>
news/detail?id=<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
"'>

        <div style='height: 5px;'>&nbsp;</div>

        <div style='width:30%;' class='left'>

            <p class='center'><img src='<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/image/type/<?php echo $_smarty_tpl->tpl_vars['data']->value['cover_pic_url'];?>
' style='max-width:60px;text-align: center;vertical-align:middle;'> </p>      				
        </div>

        <div style='width:70%;' class='left'>

            <div><?php echo $_smarty_tpl->tpl_vars['data']->value['title'];?>
</div>

            <div><?php echo mb_substr($_smarty_tpl->tpl_vars['data']->value['summary_info'],0,20,'utf8');?>
</div>

        </div>

    </div>

    <div class='both' style='height: 10px;'>&nbsp;</div>

<?php }} ?>

