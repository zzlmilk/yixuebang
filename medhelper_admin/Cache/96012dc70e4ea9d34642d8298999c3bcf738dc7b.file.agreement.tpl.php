<?php /* Smarty version Smarty-3.0-RC2, created on 2016-06-19 14:26:05
         compiled from "/private/var/www/html/medhelper_admin/Tpl/website/agreement.tpl" */ ?>
<?php /*%%SmartyHeaderCode:128455337257663afd1e7290-50324386%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '96012dc70e4ea9d34642d8298999c3bcf738dc7b' => 
    array (
      0 => '/private/var/www/html/medhelper_admin/Tpl/website/agreement.tpl',
      1 => 1466314059,
    ),
  ),
  'nocache_hash' => '128455337257663afd1e7290-50324386',
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
/javascript/config/agreement.js"></script>
    <script>
    $(function() {

        $('.agreement_content').summernote({

            height: 300

        });

    })
    </script>
</head>

<body>
    <div style='margin-top: 30px;margin-left: 20px;'>
        <div class="form-group" style='width:700px;'>
            <label for="agreement_content">协议内容</label>
            <div class="agreement_content" id='agreement_content' style='width:300px;'><?php echo $_smarty_tpl->getVariable('agreement_html')->value;?>
</div>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-default" onclick='agreement.submitAgreementHtml()'>保存</button>
            <button type="submit" class="btn btn-default" onclick='base.preview("agreement_content")'>预览</button>
        </div>
    </div>
</body>

</html>

<button type="submit" class="btn btn-default" onclick='base.edit()'>编辑文章</button>

<?php $_template = new Smarty_Internal_Template("../public/_preview.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

<?php $_template = new Smarty_Internal_Template("../public/_reader.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?> 