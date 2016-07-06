<?php /* Smarty version Smarty-3.0-RC2, created on 2016-06-29 11:19:55
         compiled from "/private/var/www/html/yixuebang/medhelper_admin/Tpl/website/../public/_default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13657041857733e5b9ef181-00731630%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '32d36504db34dd6cca3912cfecb07d28978f3ccc' => 
    array (
      0 => '/private/var/www/html/yixuebang/medhelper_admin/Tpl/website/../public/_default.tpl',
      1 => 1467169945,
    ),
  ),
  'nocache_hash' => '13657041857733e5b9ef181-00731630',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!-- 新 Bootstrap 核心 CSS 文件 -->
<link rel="stylesheet" href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css">
<!-- 可选的Bootstrap主题文件（一般不用引入） -->
<link rel="stylesheet" href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
<!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
<script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
<script src="//cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="<?php echo $_smarty_tpl->getVariable('MAINPUBLIC')->value;?>
/javascript/base.js"></script>
<script src="<?php echo $_smarty_tpl->getVariable('MAINPUBLIC')->value;?>
/javascript/type.js"></script>
<div class="modal fade" id='tipModal'>
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">提示</h4>
            </div>
            <div class="modal-body" id='tip_body'>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<?php $_template = new Smarty_Internal_Template("../public/_preview.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>