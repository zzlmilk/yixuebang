<?php /* Smarty version Smarty-3.0-RC2, created on 2016-06-17 14:00:54
         compiled from "/private/var/www/html/medhelper_admin/Tpl/default/../public/_reader.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7630671135763921664ae83-24029547%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c6bc980ab8ab3e3b0b6f0b255b4549ee004f4749' => 
    array (
      0 => '/private/var/www/html/medhelper_admin/Tpl/default/../public/_reader.tpl',
      1 => 1466143196,
    ),
  ),
  'nocache_hash' => '7630671135763921664ae83-24029547',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<script type="text/javascript">
$(function() {

    $('img').css('max-width', '100%');

    $('img').css('width', '100%');

})
</script>
<style type="text/css">
img {
    margin: 0 auto;
}


</style>
<div class="modal fade" id='readerModal' style=''>
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">该预览图以iphone6为范例</h4>
            </div>
            <div class="modal-body" id='preview_body' style='width:375px;overflow: hidden;font-size:15px;'>
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