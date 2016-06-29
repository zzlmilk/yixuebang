<?php /* Smarty version Smarty-3.0-RC2, created on 2016-06-24 19:12:19
         compiled from "/private/var/www/html/yixuebang/medhelper/Lib/College/Tpl/College/college_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1929959275576d1593777190-41331670%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '162a34fe631757f451ff6426b81c1b44da11e0c3' => 
    array (
      0 => '/private/var/www/html/yixuebang/medhelper/Lib/College/Tpl/College/college_list.tpl',
      1 => 1466762301,
    ),
  ),
  'nocache_hash' => '1929959275576d1593777190-41331670',
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
            <div style='width:100%;height:20px;line-height: 20px;text-align: center'>重点专科</div>
            <div style='height:20px;'>&nbsp;</div>
            <div style='width:90%;margin:0 auto;'>
                <button type="submit" class="btn <?php if ($_smarty_tpl->getVariable('college_type')->value==1){?> btn-primary <?php }else{ ?> btn-default <?php }?>" onclick='base.jump("college/college_list?college_type=1",1)'>国家级重点专科</button>
                <button type="submit" class="btn <?php if ($_smarty_tpl->getVariable('college_type')->value==2){?> btn-primary <?php }else{ ?> btn-default <?php }?>" onclick='base.jump("college/college_list?college_type=2",1)'>省市级重点专科</button>
            </div>
            <div style='width:95%;margin: 12px auto;' id='college_list'>
                
                <?php  $_smarty_tpl->tpl_vars['college_infos'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('college_info')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['college_infos']->key => $_smarty_tpl->tpl_vars['college_infos']->value){
?>
                <a class='label' onclick='base.jump("college/college_detail_list?college_type=<?php echo $_smarty_tpl->getVariable('college_type')->value;?>
&prov=<?php echo $_smarty_tpl->tpl_vars['college_infos']->value['prov'];?>
",1)'><?php echo $_smarty_tpl->tpl_vars['college_infos']->value['prov'];?>
</a> 
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