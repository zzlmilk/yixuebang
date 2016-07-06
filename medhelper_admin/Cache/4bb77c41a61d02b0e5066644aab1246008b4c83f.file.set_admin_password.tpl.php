<?php /* Smarty version Smarty-3.0-RC2, created on 2016-06-29 16:42:33
         compiled from "/private/var/www/html/yixuebang/medhelper_admin/Tpl/website/set_admin_password.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1669016319577389f9490ef7-04049684%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4bb77c41a61d02b0e5066644aab1246008b4c83f' => 
    array (
      0 => '/private/var/www/html/yixuebang/medhelper_admin/Tpl/website/set_admin_password.tpl',
      1 => 1467189742,
    ),
  ),
  'nocache_hash' => '1669016319577389f9490ef7-04049684',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html>
<html lang="zh-CN">

<head>
    <?php $_template = new Smarty_Internal_Template("../public/_default.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
</head>

<body>
    <div style='margin-top: 30px;margin-left: 20px; overflow: auto;min-height: 700px;'>
        <div class="form-group" style='width:300px;'>
            <label for="new_password">新密码</label>
            <input type="password" class="form-control" id="new_password" placeholder="请输入密码">
            <p style='color: red;font-size: 14px;' id='new_password_div_name_error'></p>
        </div>
        <div class="form-group" style='width:300px;'>
            <label for="repeat_password">确认密码</label>
            <input type="password" class="form-control" id="repeat_password" placeholder="请再次输入密码">
            <p style='color: red;font-size: 14px;' id='repeat_password_div_name_error'></p>
        </div>
        <button type="submit" class="btn btn-default" onclick='submitPassword()'>保存</button>
    </div>
    <div style='height:50px;'></div>
</body>

</html>
<script type="text/javascript">
function submitPassword() {

    var new_password = $('#new_password').val()

    var repeat_password = $('#repeat_password').val()

    var formData = new FormData()

    var i = 0

    if (base.checkString('new_password', 0, '请输入新密码')) {

        i++;

        formData.append('new_password', new_password)
    }

    if (base.checkString('repeat_password', 0, '请再次输入新密码')) {

        i++;

        formData.append('repeat_password', repeat_password)
    }

    if (i == 2) {

        var visit_url = base.getDomainUrl() + '/pageredirst.php?action=config&functionname=set_password_ajax';

        base.ajax(visit_url, 'post', formData, function success(data) {

            if (data == -1) {

                $('#repeat_password_div_name_error').html('两次密码输入不一致,请重新输入')

            } else {

               $('#tipModal').find('#tip_body').html('设置密码成功');

                $('#tipModal').modal();
            }

        }, function error(error) {


        })
    }



}
</script>