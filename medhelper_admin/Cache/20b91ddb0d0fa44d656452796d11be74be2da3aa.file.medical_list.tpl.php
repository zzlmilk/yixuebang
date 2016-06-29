<?php /* Smarty version Smarty-3.0-RC2, created on 2016-06-28 17:57:50
         compiled from "/private/var/www/html/yixuebang/medhelper_admin/Tpl/website/medical_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:169575489457724a1e690bf0-27705909%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '20b91ddb0d0fa44d656452796d11be74be2da3aa' => 
    array (
      0 => '/private/var/www/html/yixuebang/medhelper_admin/Tpl/website/medical_list.tpl',
      1 => 1467107846,
    ),
  ),
  'nocache_hash' => '169575489457724a1e690bf0-27705909',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_date_format')) include '/private/var/www/html/yixuebang/medhelper_admin/Smarty/libs/plugins/modifier.date_format.php';
?><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> <?php $_template = new Smarty_Internal_Template("../public/_default.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
<style>
body {
    overflow-x: hidden;
}

.userMangerTitle {
    color: rgb(91, 91, 91);
    font-size: 2.5em;
    margin-top: 15px;
    text-align: center;
}

.sortBar {
    width: auto;
    margin-left: 25px;
    height: 25px;
    line-height: 0px;
    margin-right: 45px;
    /*        margin: 0 auto;*/
}

table tr>th {
    text-align: center;
    background-color: #eee;
}

table tr>td {
    text-align: center;
    vertical-align: middle !important;
    border-bottom-color: #D5E3E7 !important;
}

table tr:nth-of-type(even) {
    background-color: #F9FCFD;
}

.selectText {
    height: 32px;
    border-radius: 0px;
    border: #c5c5c5 solid 1px;
    box-shadow: 0px 2px 2px #888 inset;
    padding-left: 10px;
    width: 224px;
}

.selectBar {
    padding-left: 25px;
}
</style>
<script>
</script>
<div style="height: 20px;"></div>
<button type="submit" class="btn btn-default" onclick='javascript:window.location.href="pageredirst.php?action=medical&functionname=add_medical_info"' style='margin-left: 2px;margin-top: 12px;'>添加急诊知识</button>
<div style="height: 10px;"></div>
<div class="dataArea">
    <table class="table table-bordered ">
        <tr>
            <th style="width: 121px;">id</th>
            <th style="width: 121px;">一级分类</th>
            <th style="width: 121px;">二级分类</th>
            <th style="width: 154px;">创建时间</th>
            <th>操作</th>
        </tr>
        <?php  $_smarty_tpl->tpl_vars['datas'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['datas']->key => $_smarty_tpl->tpl_vars['datas']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['datas']->key;
?>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['datas']->value['id'];?>
</td>

            <td><?php echo $_smarty_tpl->tpl_vars['datas']->value['type']['name'];?>
</td>

            <td><?php echo $_smarty_tpl->tpl_vars['datas']->value['type_2']['name'];?>
</td>
            
            <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['datas']->value['create_time'],"%Y-%m-%d");?>
</td>
            <td>
                <a href="pageredirst.php?action=medical&functionname=edit&id=<?php echo $_smarty_tpl->tpl_vars['datas']->value['id'];?>
">编辑</a>
            </td>
        </tr>
        <?php }} ?>
    </table>
</div>
<?php echo $_smarty_tpl->getVariable('fenye')->value;?>
