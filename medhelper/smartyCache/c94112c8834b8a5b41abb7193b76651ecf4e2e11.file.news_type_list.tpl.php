<?php /* Smarty version Smarty-3.0-RC2, created on 2016-06-24 16:53:11
         compiled from "/private/var/www/html/yixuebang/medhelper/Lib/News/Tpl/News/news_type_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:737120785576cf4f72d59d3-46571288%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c94112c8834b8a5b41abb7193b76651ecf4e2e11' => 
    array (
      0 => '/private/var/www/html/yixuebang/medhelper/Lib/News/Tpl/News/news_type_list.tpl',
      1 => 1466758282,
    ),
  ),
  'nocache_hash' => '737120785576cf4f72d59d3-46571288',
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
            <div id='news'>
                <?php echo $_smarty_tpl->getVariable('news_html')->value;?>

            </div>
            <div style='width:100%;height:40px;text-align: center;line-height: 40px;background-color: gray;color:white;cursor: pointer;' onclick='news.getNewsListByPage();' id='news_more_html'>更多</div>
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