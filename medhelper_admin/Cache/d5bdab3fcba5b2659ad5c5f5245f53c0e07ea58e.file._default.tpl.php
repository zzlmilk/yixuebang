<?php /* Smarty version Smarty-3.0-RC2, created on 2016-06-17 14:57:46
         compiled from "/private/var/www/html/medhelper_admin/Tpl/website/../public/_default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:195136689457639f6a3fd839-09586272%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd5bdab3fcba5b2659ad5c5f5245f53c0e07ea58e' => 
    array (
      0 => '/private/var/www/html/medhelper_admin/Tpl/website/../public/_default.tpl',
      1 => 1466146631,
    ),
  ),
  'nocache_hash' => '195136689457639f6a3fd839-09586272',
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
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
