<?php /* Smarty version Smarty-3.0-RC2, created on 2016-06-24 18:37:46
         compiled from "/private/var/www/html/yixuebang/medhelper/Lib/Symptom/Tpl/Symptom/symptom_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:296120413576d0d7adf0c89-97233637%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7f3b0ba860c634133e10280f5e41667d43189074' => 
    array (
      0 => '/private/var/www/html/yixuebang/medhelper/Lib/Symptom/Tpl/Symptom/symptom_list.tpl',
      1 => 1466764531,
    ),
  ),
  'nocache_hash' => '296120413576d0d7adf0c89-97233637',
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
        <div style='width:95%;margin: 0 auto'>
            <div style='width:100%;height:20px;line-height: 20px;text-align: center'>自主导医</div>
            <div style='height:20px;'>&nbsp;</div>
          
            <div style='width:95%;margin: 12px auto;' id='college_list'>
                
                <?php  $_smarty_tpl->tpl_vars['college_infos'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('data')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['college_infos']->key => $_smarty_tpl->tpl_vars['college_infos']->value){
?>
                    
                <div style='width:48%;background-color: gray;margin-left: 2%;margin-top: 2%;' class='left' onclick='base.jump("symptom/symptom_detail_list?id=<?php echo $_smarty_tpl->tpl_vars['college_infos']->value['id'];?>
",1)'>

                    <div style='height:4px;'>&nbsp;</div>

                    <div style='width:90%;margin: 0 auto;'><p style='text-align: center'><img src='<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/image/type/<?php echo $_smarty_tpl->tpl_vars['college_infos']->value['img_file'];?>
' style='max-width:100%;text-align: center;vertical-align:middle;'> </p></div>

                    <div style='height:5px'>&nbsp;</div>

                    <div style='text-align: center;width:90%;margin: 0 auto;color: white;'><?php echo $_smarty_tpl->tpl_vars['college_infos']->value['name'];?>
</div>

                </div>

                <?php }} ?>
                
            </div>
        </div>
        <div style='height: 40px;clear: both'>&nbsp;</div>
        <?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('path')->value)."/_footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
    </div>
</body>

</html>
<input type='hidden' name='news_current_page' id='news_current_page' value='1'>
<input type='hidden' name='news_type' id='news_type' value='<?php echo $_smarty_tpl->getVariable('news_type')->value;?>
'>