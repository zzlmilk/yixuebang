<?php /* Smarty version Smarty-3.0-RC2, created on 2016-06-24 19:11:34
         compiled from "/private/var/www/html/yixuebang/medhelper/Lib/Symptom/Tpl/Symptom/symptom_detail_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:889814092576d1566c0b6b9-20231645%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5319e4f23bbf635622fdffeb331a785d44da7cdc' => 
    array (
      0 => '/private/var/www/html/yixuebang/medhelper/Lib/Symptom/Tpl/Symptom/symptom_detail_list.tpl',
      1 => 1466766636,
    ),
  ),
  'nocache_hash' => '889814092576d1566c0b6b9-20231645',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html>
<html lang="zh-CN">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1"> <?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('path')->value)."/_public.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
    <script src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/javascript/news.js"></script>
</head>

<body>
    <div>
        <?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('path')->value)."/_header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
        <div style='height:20px;'>&nbsp;</div>
        <div style='width:100%;margin: 0 auto'>
            <div style='width:100%;height:20px;line-height: 20px;text-align: center'>自主导医</div>
            <div style='height:20px;'>&nbsp;</div>
            <div style='width:96%;margin: 12px auto;' id='college_list'>

                <?php  $_smarty_tpl->tpl_vars['info'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('data')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['info']->key => $_smarty_tpl->tpl_vars['info']->value){
?>
                
                <div style='height:40px;color:black;text-align: left;line-height: 40px;'><?php echo $_smarty_tpl->tpl_vars['info']->value['type_2']['name'];?>
</div>

                <div>

                    <?php  $_smarty_tpl->tpl_vars['data'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['info']->value['type_3']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['data']->key => $_smarty_tpl->tpl_vars['data']->value){
?>
                        <a class='label' onclick='base.jump("symptom/detail?id=<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
",1)'><?php echo $_smarty_tpl->tpl_vars['data']->value['type_3_info']['name'];?>
</a> 
                    <?php }} ?>

                <?php }} ?>
            </div>
        </div>
        <div style='height: 40px;'>&nbsp;</div>
        <?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('path')->value)."/_footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
    </div>
</body>

</html>
<input type='hidden' name='news_current_page' id='news_current_page' value='1'>
<input type='hidden' name='news_type' id='news_type' value='<?php echo $_smarty_tpl->getVariable('news_type')->value;?>
'>