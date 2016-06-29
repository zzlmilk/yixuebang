<?php /* Smarty version Smarty-3.0-RC2, created on 2016-06-24 18:01:27
         compiled from "/private/var/www/html/yixuebang/medhelper/Lib/Homepage/Tpl/Homepage/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1377120229576d04f75b7bd3-98493700%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '25058baef7cb180d91b6a40206781cc511ea9586' => 
    array (
      0 => '/private/var/www/html/yixuebang/medhelper/Lib/Homepage/Tpl/Homepage/index.tpl',
      1 => 1466762319,
    ),
  ),
  'nocache_hash' => '1377120229576d04f75b7bd3-98493700',
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
        
        <?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('path')->value)."/_nav.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

        <div style='height:20px;'>&nbsp;</div>
        <div style='width:90%;margin: 0 auto'>
            <?php  $_smarty_tpl->tpl_vars['data'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('type_list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['data']->key => $_smarty_tpl->tpl_vars['data']->value){
?>
            <div style='width:100%;height: 120px;border: 1px solid black;cursor: pointer' >
                <div style='height: 5px;'>&nbsp;</div>
                <div style='width:30%;' class='left'>
                    <p class='center'><img src='<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/image/type/<?php echo $_smarty_tpl->tpl_vars['data']->value['img_file'];?>
' style='max-width:60px;text-align: center;vertical-align:middle;'> </p>
                </div>
                <div style='width:70%;' class='left'>

                    <div style='height:75px;'>

                         <?php  $_smarty_tpl->tpl_vars['contents'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['data']->value['content']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['contents']->key => $_smarty_tpl->tpl_vars['contents']->value){
?>

                            <div><?php echo $_smarty_tpl->tpl_vars['contents']->value['title'];?>
</div>

                         <?php }} ?>

                    </div>

                    <button type="submit" class="btn btn-primary" onclick='base.jump("news/news_list?type=<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
",1)'>进入<?php echo $_smarty_tpl->tpl_vars['data']->value['name'];?>
频道</button>

                </div>
            </div>
            <div class='both' style='height: 10px;'>&nbsp;</div>
            <?php }} ?>
        </div>
        <div style='height: 40px;'>&nbsp;</div>
        <?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('path')->value)."/_footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
    </div>
</body>

</html>
