<?php /* Smarty version Smarty-3.0-RC2, created on 2016-06-19 13:32:51
         compiled from "/private/var/www/html/medhelper_admin/Tpl/default/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:104437454657662e836123a1-98084443%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3339042a51913471c92f467e79cc27ea06dc4d37' => 
    array (
      0 => '/private/var/www/html/medhelper_admin/Tpl/default/index.tpl',
      1 => 1466314356,
    ),
  ),
  'nocache_hash' => '104437454657662e836123a1-98084443',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="<?php echo $_smarty_tpl->getVariable('WEBSITEPUBLIC')->value;?>
/css/css.css" rel="stylesheet" type="text/css"> 
    <title></title>
    <style>
    * {
        font-family: "黑体", "宋体", Serif;
    }
    </style>
</head>

<body class='boby' style='min-height:500px;overflow:auto'>
    <div class='bobyBackGroud' style='overflow:hidden'>
        <div style='overflow: hidden; height: 86px;'>
            <?php $_template = new Smarty_Internal_Template('top.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
        </div>
        <div style='  background-color: #fff;
    border: 1px solid #d9dadc;height: 750px; width: 1250px ; margin: 0 auto;overflow:hidden'>
            <div style='float: left; overflow: hidden; height: 750px; width: 16%;font-weight: bold;border-right: 1px solid #e7e7eb;'>
                <iframe frameborder='0' src="<?php echo $_smarty_tpl->getVariable('WEBSITEURL')->value;?>
/pageredirst.php?action=left&functionname=left" name="leftFrame" id="leftFrame" title="leftFrame" style=' height: 740px; width: 196px; '></iframe>
            </div>
            <div style='float: left;height: 900px; width: 83%; margin-left: 3px'>
                <iframe frameborder='0' src="<?php echo $_smarty_tpl->getVariable('WEBSITEPUBLIC')->value;?>
/html/mainfra.html" name="mainFrame" id="mainFrame" title="mainFrame" style='height: 750px; width: 100%; border-radius: 10px 10px 0 0; overflow:auto;'></iframe>
            </div>
        </div>
    </div>
</body>
</html>

