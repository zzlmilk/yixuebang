<?php /* Smarty version Smarty-3.0-RC2, created on 2016-06-24 18:01:27
         compiled from "/private/var/www/html/yixuebang/medhelper/Public/html//_nav.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1633461327576d04f75ff1a7-93973813%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd2bd234f759d022e26e391af432f181c7dd459e9' => 
    array (
      0 => '/private/var/www/html/yixuebang/medhelper/Public/html//_nav.tpl',
      1 => 1466762418,
    ),
  ),
  'nocache_hash' => '1633461327576d04f75ff1a7-93973813',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div style='width:90%;margin: 0 auto;height: 100px; overflow: hidden;' id='channel_list'>
    <a class='label' onclick='base.jump("symptom/symptom_list",1)'>自助导医</a>
    <a class='label' onclick='base.jump("college/college_list",1)'>重点专科</a>
    <a class='label'>名医推荐</a>
    <a class='label'>药品知识</a>
    <a class='label'>疾病知识</a>
    <a class='label'>临床知识</a>
    <a class='label'>手术知识</a>
    <a class='label' id='more' onclick='base.channel(1)'>更多</a>
    <a class='label'>急诊知识</a> <?php  $_smarty_tpl->tpl_vars['type'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('type_list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['type']->key => $_smarty_tpl->tpl_vars['type']->value){
?>
    <a class='label' onclick='base.jump("news/news_list?type=<?php echo $_smarty_tpl->tpl_vars['type']->value['id'];?>
",1)'><?php echo $_smarty_tpl->tpl_vars['type']->value['name'];?>
</a> <?php }} ?>
    <a class='label' id='slide' onclick='base.channel(2)'>收起</a>
</div>