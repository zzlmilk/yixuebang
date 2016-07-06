<?php /* Smarty version Smarty-3.0-RC2, created on 2016-06-29 12:01:56
         compiled from "/private/var/www/html/yixuebang/medhelper_admin/Tpl/website/add_shop_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:79744309357734834e26808-17470429%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '769ad034f9dcc775cdb7152b9ad920909802eb20' => 
    array (
      0 => '/private/var/www/html/yixuebang/medhelper_admin/Tpl/website/add_shop_list.tpl',
      1 => 1467172914,
    ),
  ),
  'nocache_hash' => '79744309357734834e26808-17470429',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html>
<html lang="zh-CN">

<head>
    <?php $_template = new Smarty_Internal_Template("../public/_default.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?> <?php $_template = new Smarty_Internal_Template("../public/_editor.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
    <script src="<?php echo $_smarty_tpl->getVariable('MAINPUBLIC')->value;?>
/javascript/config/agreement.js"></script>
    <script>
    $(function() {

        $('#shop_describe').summernote({

            height: 669

        });

        sessionStorage.clear();

    })
    </script>
</head>

<body>
    <div style='margin-top: 30px;margin-left: 20px; overflow: auto;min-height: 700px;'>
        <div class="form-group">
            <label for="shop_name">商品名称</label>
            <input type="text" class="form-control" id="shop_name" placeholder="请输入商品名称" style='width:500px;'>
            <p style='color: red;font-size: 14px;' id='shop_name_error'></p>
        </div>
        <div class="form-group">
            <label for="shop_price">商品价格</label>
            <input type="text" class="form-control" id="shop_price" placeholder="请输入商品价格" style='width:500px;'>
            <p style='color: red;font-size: 14px;' id='shop_price_error'></p>
        </div>
        <div class="form-group">
            <label for="auther">商品分类</label>
            <div>
                <button class="btn btn-default" type="submit" onclick='base.getMainType(1)' id='main_type_div_name'>请选择大分类</button>
                <button class="btn btn-default" type="submit" onclick='base.getBranceType()' id='branch_type_div_name'>请选择小分类</button>
            </div>
            <p style='color: red;font-size: 14px;' id='main_type_error'></p>
        </div>
        <div class="form-group">
            <label for="article_content">商品类型</label>
            <select class="form-control" style='width:500px;' id='shop_type'>
                <option value='1'>电子书</option>
                <option value='2'>医疗高清图</option>
            </select>
            <p style='color: red;font-size: 14px;' id='shop_type_error'></p>
        </div>

        <div class="form-group">
            <label for="logo">封面图</label>
            <input id='logo' name='logo' type="file" > 

            <p style='color: red;font-size: 14px;' id='logo_error'></p> 
        </div>

        <div class="form-group">
            <label for="shop_content">商品附件</label>
            <input id='shop_content' name='shop_content' type="file" >  

            <p style='color: red;font-size: 14px;' id='shop_content_error'></p> 
        </div>

        <div class="form-group" style='width:375px;'>
            <label for="shop_describe">商品介绍</label>
            <div class="shop_describe" id='shop_describe' style='width:300px;'>请输入商品介绍</div>
            <p style='color: red;font-size: 14px;' id='shop_describe_error'></p>
        </div>

        <button type="submit" class="btn btn-default" onclick='base.submitShop()'>Submit</button>

        <button type="submit" class="btn btn-default" onclick='base.preview("shop_describe")'>预览</button>
    </div>

    <div style='height:50px;'></div>

</body>

</html>