<?php /* Smarty version Smarty-3.0-RC2, created on 2016-06-17 16:40:47
         compiled from "/private/var/www/html/medhelper_admin/Tpl/website/main_type_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11511073235763b78f06bdb7-56967450%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '655bb2f3c6617194899e9e5c1e1add66f42f9c36' => 
    array (
      0 => '/private/var/www/html/medhelper_admin/Tpl/website/main_type_list.tpl',
      1 => 1466152842,
    ),
  ),
  'nocache_hash' => '11511073235763b78f06bdb7-56967450',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div class="modal fade" id='mainTypeModal' style=''>
    <div class="modal-dialog">
        <div class="modal-content" style='width:375px;'>
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"><?php echo $_smarty_tpl->getVariable('name')->value;?>
大分类</h4>
            </div>
            <div class="modal-body" id='preview_body'>
                <div style='max-height: 300px;padding-left: 25px;overflow-y: auto;' class='form-inline'>
                    <?php  $_smarty_tpl->tpl_vars['datas'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('data')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['datas']->key => $_smarty_tpl->tpl_vars['datas']->value){
?>
                    <label class="radio-inline" style='width:100px;height:50px;padding:0;margin:0;'>
                        <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="<?php echo $_smarty_tpl->tpl_vars['datas']->value['id'];?>
"><span id='main_type_<?php echo $_smarty_tpl->tpl_vars['datas']->value['id'];?>
' style='display:inline-block;width:100px;overflow: hidden;'><?php echo $_smarty_tpl->tpl_vars['datas']->value['main_type_name'];?>
</span>
                    </label>
                    <?php }} ?>
                </div>
                <div class='form-inline'>
                    <div class="form-group">
                        <label for="addMainTypeName">添加分类</label>
                        <input type="text" class="form-control" id="addMainTypeName" placeholder="请输入分类名称">
                    </div>
                    <button type="submit" class="btn btn-default" onclick='base.saveMainType(<?php echo $_smarty_tpl->getVariable('type')->value;?>
)'>保存</button>
                </div>

                <div style='height:10px;'>&nbsp;</div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-default" onclick='base.submitMainType()'>确定</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
