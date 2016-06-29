<?php /* Smarty version Smarty-3.0-RC2, created on 2016-06-24 19:10:00
         compiled from "/private/var/www/html/yixuebang/medhelper/Lib/Symptom/Tpl/Symptom/sysmptom_detail.tpl" */ ?>
<?php /*%%SmartyHeaderCode:545675064576d1508e1f3a5-56389633%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '41d7ed75e3782abc49b6569be957051efbf64303' => 
    array (
      0 => '/private/var/www/html/yixuebang/medhelper/Lib/Symptom/Tpl/Symptom/sysmptom_detail.tpl',
      1 => 1466766015,
    ),
  ),
  'nocache_hash' => '545675064576d1508e1f3a5-56389633',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html>
<html lang="zh-CN">

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('path')->value)."/_public.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

        <script src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/javascript/news.js"></script>

    </head>

    <body>
        <div>
            <?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('path')->value)."/_header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

            <div style='width:90%;margin: 0 auto;'>

                <div >

                    <span class="glyphicon glyphicon-menu-left" aria-hidden="true" onclick='javascript:history.go(-1);'></span>

                    <span style='text-align:center;display: inline-block;width:80%;'>导医文章</div>

                </div>

                <div style='height:40px;'>&nbsp;</div>

                <div class='content' style='width: 90%;margin: 0 auto;'><?php echo $_smarty_tpl->getVariable('info')->value['article_content'];?>
</div>

            </div>

            <div style='height:20px;'>&nbsp;</div>


            <?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('path')->value)."/_footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

        </div>
    </body>

</html>

<input type='hidden' name='news_current_page' id='news_current_page' value='1'>
