<?php /* Smarty version Smarty-3.0-RC2, created on 2016-06-29 12:04:33
         compiled from "/private/var/www/html/yixuebang/medhelper_admin/Tpl/website/contact.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1247663585577348d1b30a54-63438611%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '87021137113f9b25ccef78ccc366c9c7379fa61f' => 
    array (
      0 => '/private/var/www/html/yixuebang/medhelper_admin/Tpl/website/contact.tpl',
      1 => 1467171782,
    ),
  ),
  'nocache_hash' => '1247663585577348d1b30a54-63438611',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html>
<html lang="zh-CN">

<head>
    <?php $_template = new Smarty_Internal_Template("../public/_default.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?> <?php $_template = new Smarty_Internal_Template("../public/_editor.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
    <script src="<?php echo $_smarty_tpl->getVariable('MAINPUBLIC')->value;?>
/javascript/config/contact.js"></script>
    <script>
    $(function() {

        $('.agreement_content').summernote({

            height: 669

        });

    })
    </script>
</head>

<body>
    <div style='margin-left: 20px;margin: 0 auto;width:375px;margin-top: 20px;'>

     

        <div class="form-group" style='width:375px;'>
            <div class="agreement_content" id='content' style='width:375px;'><?php echo $_smarty_tpl->getVariable('html')->value;?>
</div>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-default" onclick='contact.submitHtml()'>保存</button>
            <button type="submit" class="btn btn-default" onclick='base.preview("content")'>预览</button>
        </div>
    </div>
</body>

</html>

<?php $_template = new Smarty_Internal_Template("../public/_preview.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>