<?php /* Smarty version Smarty-3.0-RC2, created on 2016-06-24 17:58:03
         compiled from "/private/var/www/html/yixuebang/medhelper/Lib/News/Tpl/News/news_detail.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1517092867576d042bdff079-60713284%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '34c98645195192fb1ca929b2713398de3ef65659' => 
    array (
      0 => '/private/var/www/html/yixuebang/medhelper/Lib/News/Tpl/News/news_detail.tpl',
      1 => 1466761684,
    ),
  ),
  'nocache_hash' => '1517092867576d042bdff079-60713284',
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

                <div>
                    <div style='width: 100%;text-align: center;' ><?php echo $_smarty_tpl->getVariable('info')->value['title'];?>
</div>

                </div>

                <div style='height:40px;'>&nbsp;</div>

                <div class='content'><?php echo $_smarty_tpl->getVariable('info')->value['article_content'];?>
</div>

            </div>

            <div style='height:20px;'>&nbsp;</div>


            <?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('path')->value)."/_footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

        </div>
    </body>

</html>

<input type='hidden' name='news_current_page' id='news_current_page' value='1'>
