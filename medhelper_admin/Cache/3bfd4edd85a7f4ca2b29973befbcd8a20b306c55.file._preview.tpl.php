<?php /* Smarty version Smarty-3.0-RC2, created on 2016-06-17 14:10:11
         compiled from "/private/var/www/html/medhelper_admin/Tpl/website/../public/_preview.tpl" */ ?>
<?php /*%%SmartyHeaderCode:73060607057639443746c80-57238260%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3bfd4edd85a7f4ca2b29973befbcd8a20b306c55' => 
    array (
      0 => '/private/var/www/html/medhelper_admin/Tpl/website/../public/_preview.tpl',
      1 => 1466143772,
    ),
  ),
  'nocache_hash' => '73060607057639443746c80-57238260',
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
<div class="modal fade" id='previewModal' style=''>
    <div class="modal-dialog">
        <div class="modal-content" style='width:375px;'>
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