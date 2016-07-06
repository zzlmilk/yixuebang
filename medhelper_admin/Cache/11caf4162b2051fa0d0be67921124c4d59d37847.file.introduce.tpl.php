<?php /* Smarty version Smarty-3.0-RC2, created on 2016-06-29 12:04:30
         compiled from "/private/var/www/html/yixuebang/medhelper_admin/Tpl/website/introduce.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1510784527577348ce0b7d29-85412978%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '11caf4162b2051fa0d0be67921124c4d59d37847' => 
    array (
      0 => '/private/var/www/html/yixuebang/medhelper_admin/Tpl/website/introduce.tpl',
      1 => 1467171766,
    ),
  ),
  'nocache_hash' => '1510784527577348ce0b7d29-85412978',
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
/javascript/config/introduce.js"></script>
    <script>
    $(function() {

        $('.agreement_content').summernote({

            height: 669

        });

    })
    </script>
</head>

<body>
    <div style='width:375px;margin: 0 auto;margin-top: 20px;'>

        <div class="form-group" style='width:375px;'>
            <div class="agreement_content" id='content' style='width:375px;'><?php echo $_smarty_tpl->getVariable('html')->value;?>
</div>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-default" onclick='introduce.submitHtml()'>保存</button>
            <button type="submit" class="btn btn-default" onclick='base.preview("content")'>预览</button>
        </div>
    </div>
</body>

</html>

<?php $_template = new Smarty_Internal_Template("../public/_preview.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>