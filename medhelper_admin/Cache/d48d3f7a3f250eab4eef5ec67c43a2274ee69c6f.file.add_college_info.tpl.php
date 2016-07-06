<?php /* Smarty version Smarty-3.0-RC2, created on 2016-06-29 12:00:42
         compiled from "/private/var/www/html/yixuebang/medhelper_admin/Tpl/website/add_college_info.tpl" */ ?>
<?php /*%%SmartyHeaderCode:73839033577347eae59ae1-72437860%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd48d3f7a3f250eab4eef5ec67c43a2274ee69c6f' => 
    array (
      0 => '/private/var/www/html/yixuebang/medhelper_admin/Tpl/website/add_college_info.tpl',
      1 => 1467172811,
    ),
  ),
  'nocache_hash' => '73839033577347eae59ae1-72437860',
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
    <script src="<?php echo $_smarty_tpl->getVariable('MAINPUBLIC')->value;?>
/javascript/college.js"></script>
    <script src="<?php echo $_smarty_tpl->getVariable('MAINPUBLIC')->value;?>
/javascript/jquery.cityselect.js"></script>
    <script>
    $(function() {

        var operation_type = '<?php echo $_smarty_tpl->getVariable('operation_type')->value;?>
'

        $('#article_content').summernote({

            height: 669

        });

        sessionStorage.clear();

        if (operation_type == 1) {

            var prov = '<?php echo $_smarty_tpl->getVariable('data')->value['prov'];?>
'

            var city = '<?php echo $_smarty_tpl->getVariable('data')->value['city'];?>
'

            var dist = '<?php echo $_smarty_tpl->getVariable('data')->value['dist'];?>
'

        } else {

            var prov = '北京'

            // var city = '长沙'

            // var dist = '岳麓区'
        }

        $("#citySelect").citySelect({

            url: "public/default/javascript/city.min.js",
            prov: prov, //省份 
            city: city, //城市 
            dist: dist, //区县 
            nodata: "none" //当子集无数据时，隐藏select 

        });

    })
    </script>
</head>

<body>
    <div style='margin-top: 30px;margin-left: 20px; overflow: auto;min-height: 700px;'>
        <input type='hidden' id='id' name='id' value='<?php echo $_smarty_tpl->getVariable('data')->value['id'];?>
'>
        <div class="form-group">
            <label for="hospital">医院名称</label>
            <input type="text" class="form-control" id="hospital" placeholder="请输入医院名称" style='
            width:500px;' value='<?php echo $_smarty_tpl->getVariable('data')->value['hospital'];?>
'>
            <p style='color: red;font-size: 14px;' id='hospital_error'></p>
        </div>
        <div class="form-group">
            <label for="auther">所在城市</label>
            <div id="citySelect">
                <select class="prov" id='prov'></select>
                <select class="city" disabled="disabled" id='city'></select>
                <select class="dist" disabled="disabled" id='dist'></select>
            </div>
            <p style='color: red;font-size: 14px;' id='city_error'></p>
        </div>
        <div class="form-group">
            <label for="auther">专科分类</label>
            <div>
                <?php if ($_smarty_tpl->getVariable('operation_type')->value==1){?>
                <script>
                $(function() {

                    var type_id_1 = '<?php echo $_smarty_tpl->getVariable('data')->value['college_id'];?>
'

                    sessionStorage.setItem("type_id_1", type_id_1);
                })
                </script>
                <button class="btn btn-default" type="submit" onclick='base.getType(2,1)' id='type_1_div_name'><?php echo $_smarty_tpl->getVariable('data')->value['type']['name'];?>
</button>
                <?php }else{ ?>
                <button class="btn btn-default" type="submit" onclick='base.getType(2,1)' id='type_1_div_name'>请选择专科</button>
                <?php }?>
            </div>
            <p style='color: red;font-size: 14px;' id='type_1_div_name_error'></p>
        </div>

        <div class="form-group">
            <label for="college_type">专科分类</label>
            <select class="form-control" style='width:500px;' id='college_type'>
                <option value='1' <?php if ($_smarty_tpl->getVariable('data')->value['college_type']==1){?> selected <?php }?>>国家级重点专科</option>
                <option value='2' <?php if ($_smarty_tpl->getVariable('data')->value['college_type']==2){?> selected <?php }?>>省市级重点专科</option>
            </select>
            <p style='color: red;font-size: 14px;' id='college_type_error'></p>
        </div>


        <div class="form-group" style='width:375px;'>
            <label for="article_content">专科内容</label>
            <?php if ($_smarty_tpl->getVariable('operation_type')->value==1){?>
            <div class="article_content" id='article_content' style='width:300px;'><?php echo $_smarty_tpl->getVariable('data')->value['content']['article_content'];?>
</div>
            <?php }else{ ?>
            <div class="article_content" id='article_content' style='width:300px;'>请输入专科介绍</div>
            <?php }?>
            <p style='color: red;font-size: 14px;' id='article_content_error'></p>
        </div>
        <button type="submit" class="btn btn-default" onclick='college.submitCollege(<?php echo $_smarty_tpl->getVariable('operation_type')->value;?>
)'>保存</button>

        <button type="submit" class="btn btn-default" onclick='base.preview("article_content")'>预览</button>
    </div>
    <div style='height:50px;'></div>
</body>

</html>