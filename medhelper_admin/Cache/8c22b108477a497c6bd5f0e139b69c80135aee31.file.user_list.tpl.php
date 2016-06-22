<?php /* Smarty version Smarty-3.0-RC2, created on 2016-06-17 11:42:22
         compiled from "/private/var/www/html/medhelper_admin/Tpl/website/user_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17945300475763719e0abf91-73946212%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8c22b108477a497c6bd5f0e139b69c80135aee31' => 
    array (
      0 => '/private/var/www/html/medhelper_admin/Tpl/website/user_list.tpl',
      1 => 1466134677,
    ),
  ),
  'nocache_hash' => '17945300475763719e0abf91-73946212',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_date_format')) include '/private/var/www/html/medhelper_admin/Smarty/libs/plugins/modifier.date_format.php';
?><meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
<script src="http://cdn.bootcss.com/jquery/1.10.2/jquery.min.js"></script>
<link rel="stylesheet" href="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/css/bootstrap.min.css">
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
<div style="height: 51px;"></div>
<div class="dataArea">
    <table class="table table-bordered ">
        <tr>
            <th style="width: 121px;">id</th>
            <th style="width: 121px;">角色</th>
            <th style="width: 154px;">昵称</th>
            <th style="width: 154px;">手机</th>
            <th style="width: 154px;">邮箱</th>
            <th style="width: 154px;">ip</th>
            <th style="width: 154px;">登录时间</th>
            <th style="width: 154px;">注册时间</th>
        </tr>
        <?php  $_smarty_tpl->tpl_vars['datas'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('user_list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['datas']->key => $_smarty_tpl->tpl_vars['datas']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['datas']->key;
?>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['datas']->value['id'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['datas']->value['role'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['datas']->value['nickname'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['datas']->value['phone'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['datas']->value['email'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['datas']->value['ip'];?>
</td>
            <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['datas']->value['last_login_time'],"%Y-%m-%d");?>
</td>
            <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['datas']->value['creat_time'],"%Y-%m-%d");?>
</td>
        </tr>
        <?php }} ?>
    </table>
</div>
<?php echo $_smarty_tpl->getVariable('fenye')->value;?>
