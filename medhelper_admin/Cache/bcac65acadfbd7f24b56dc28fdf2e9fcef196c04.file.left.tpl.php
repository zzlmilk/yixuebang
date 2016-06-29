<?php /* Smarty version Smarty-3.0-RC2, created on 2016-06-19 15:08:19
         compiled from "/private/var/www/html/medhelper_admin/Tpl/default/left.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1483288447576644e35374e2-00517184%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bcac65acadfbd7f24b56dc28fdf2e9fcef196c04' => 
    array (
      0 => '/private/var/www/html/medhelper_admin/Tpl/default/left.tpl',
      1 => 1466320027,
    ),
  ),
  'nocache_hash' => '1483288447576644e35374e2-00517184',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<script src="<?php echo $_smarty_tpl->getVariable('WEBSITEPUBLIC')->value;?>
/javascript/jquery.js"></script>
<link href="<?php echo $_smarty_tpl->getVariable('WEBSITEPUBLIC')->value;?>
/css/css.css" rel="stylesheet" type="text/css">
<script>
$(function() {

    $('table').css('display', 'block');


    $('.left-a').click(function() {

        $('.left-a').removeClass('selected');

        $(this).addClass('selected');


    })
})
</script>
<div class="left_background" style=' width:200px;'>
    <table width="100%" border="0" cellpadding="0" cellspacing="0" class="left-table01" style=''>
        <tr>
            <td>
                <!--                    公司模块开始-->
                <table width="100%" border="0" cellpadding="0" cellspacing="0" class=" zhucaidan " id="table120">
                    <tr>
                        <td height="29" onclick="list('120')">
                            <table width="85%" border="0" align="center" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td width="85%">
                                        <a href="javascript:vold(0)" target="mainFrame" class="left-font03 left-font">用户管理</a>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
                <table id="subtree120" style="DISPLAY: none" width="100%" border="0" align="center" cellpadding="0" ellspacing="0" class="left-table03 tableDefault">
                    <tr>
                        <td width="100%">
                            <div class='left-a'>
                                <a style='' href="<?php echo $_smarty_tpl->getVariable('WEBSITEURL')->value;?>
/pageredirst.php?action=user&functionname=user_list" target="mainFrame" class="left-fontSmall">用户信息</a>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td width="100%">
                            <div class='left-a'>
                                <a style='' href="<?php echo $_smarty_tpl->getVariable('WEBSITEURL')->value;?>
/pageredirst.php?action=user&functionname=commect_list" target="mainFrame" class="left-fontSmall">评论信息</a>
                            </div>
                        </td>
                    </tr>
                </table>

                <table width="100%" border="0" cellpadding="0" cellspacing="0" class=" zhucaidan " id="table120">
                    <tr>
                        <td height="29" onclick="list('121')">
                            <table width="85%" border="0" align="center" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td width="85%">
                                        <a href="javascript:vold(0)" target="mainFrame" class="left-font03 left-font">商城管理</a>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>

                <table id="subtree124" style="DISPLAY: none" width="100%" border="0" align="center" cellpadding="0" ellspacing="0" class="left-table03 tableDefault">
                    <tr>
                        <td width="100%">
                            <div class='left-a'>
                                <a style='' href="<?php echo $_smarty_tpl->getVariable('WEBSITEURL')->value;?>
/pageredirst.php?action=shop&functionname=shop_list" target="mainFrame" class="left-fontSmall">商城列表</a>
                            </div>
                        </td>
                    </tr>
                </table>

                <table width="100%" border="0" cellpadding="0" cellspacing="0" class=" zhucaidan " id="table120">
                    <tr>
                        <td height="29" onclick="list('121')">
                            <table width="85%" border="0" align="center" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td width="85%">
                                        <a href="javascript:vold(0)" target="mainFrame" class="left-font03 left-font">配置设置</a>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
                <table id="subtree121" style="DISPLAY: none" width="100%" border="0" align="center" cellpadding="0" ellspacing="0" class="left-table03 tableDefault">
                    <tr>
                        <td width="100%">
                            <div class='left-a'>
                                <a style='' href="<?php echo $_smarty_tpl->getVariable('WEBSITEURL')->value;?>
/pageredirst.php?action=config&functionname=agreement" target="mainFrame" class="left-fontSmall">医院帮协议内容设置</a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td width="100%">
                            <div class='left-a'>
                                <a style='' href="<?php echo $_smarty_tpl->getVariable('WEBSITEURL')->value;?>
/pageredirst.php?action=config&functionname=introduce" target="mainFrame" class="left-fontSmall">公司介绍</a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td width="100%">
                            <div class='left-a'>
                                <a style='' href="<?php echo $_smarty_tpl->getVariable('WEBSITEURL')->value;?>
/pageredirst.php?action=config&functionname=contact" target="mainFrame" class="left-fontSmall">联系我们</a>
                            </div>
                        </td>
                    </tr>
                </table>
                <table width="100%" border="0" cellpadding="0" cellspacing="0" class=" zhucaidan " id="table120">
                    <tr>
                        <td height="29" onclick="list('121')">
                            <table width="85%" border="0" align="center" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td width="85%">
                                        <a href="javascript:vold(0)" target="mainFrame" class="left-font03 left-font">自主导医</a>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
                <table id="subtree121" style="DISPLAY: none" width="100%" border="0" align="center" cellpadding="0" ellspacing="0" class="left-table03 tableDefault">
                    <tr>
                        <td width="100%">
                            <div class='left-a'>
                                <a style='' href="<?php echo $_smarty_tpl->getVariable('WEBSITEURL')->value;?>
/pageredirst.php?action=symptom&functionname=symptom_list" target="mainFrame" class="left-fontSmall">症状管理</a>
                            </div>
                        </td>
                    </tr>
                </table>
                <table width="100%" border="0" cellpadding="0" cellspacing="0" class=" zhucaidan " id="table120">
                    <tr>
                        <td height="29" onclick="list('121')">
                            <table width="85%" border="0" align="center" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td width="85%">
                                        <a href="javascript:vold(0)" target="mainFrame" class="left-font03 left-font">名医管理</a>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>

                <table id="subtree124" style="DISPLAY: none" width="100%" border="0" align="center" cellpadding="0" ellspacing="0" class="left-table03 tableDefault">
                    <tr>
                        <td width="100%">
                            <div class='left-a'>
                                <a style='' href="<?php echo $_smarty_tpl->getVariable('WEBSITEURL')->value;?>
/pageredirst.php?action=doctor&functionname=doctor_list" target="mainFrame" class="left-fontSmall">名医列表</a>
                            </div>
                        </td>
                    </tr>
                </table>

                 <table width="100%" border="0" cellpadding="0" cellspacing="0" class=" zhucaidan " id="table124">
                    <tr>
                        <td height="29" onclick="list('121')">
                            <table width="85%" border="0" align="center" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td width="85%">
                                        <a href="javascript:vold(0)" target="mainFrame" class="left-font03 left-font">药品管理</a>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
                <table id="subtree124" style="DISPLAY: none" width="100%" border="0" align="center" cellpadding="0" ellspacing="0" class="left-table03 tableDefault">
                    <tr>
                        <td width="100%">
                            <div class='left-a'>
                                <a style='' href="<?php echo $_smarty_tpl->getVariable('WEBSITEURL')->value;?>
/pageredirst.php?action=drug&functionname=drug_list" target="mainFrame" class="left-fontSmall">药品列表</a>
                            </div>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</div>