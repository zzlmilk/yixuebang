<?php /* Smarty version Smarty-3.0-RC2, created on 2016-06-29 12:04:15
         compiled from "/private/var/www/html/yixuebang/medhelper_admin/Tpl/website/add_operation_info.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1758680987577348bf2b0407-10068208%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ba4e8f8ebe6aeb40e409e74c154ea6048fdade46' => 
    array (
      0 => '/private/var/www/html/yixuebang/medhelper_admin/Tpl/website/add_operation_info.tpl',
      1 => 1467172831,
    ),
  ),
  'nocache_hash' => '1758680987577348bf2b0407-10068208',
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
/javascript/operation.js"></script>
    <script>
    $(function() {

        var operation_type = '<?php echo $_smarty_tpl->getVariable('operation_type')->value;?>
'

        $('#article_content').summernote({

            height: 669

        });

        sessionStorage.clear();

    })
    </script>
</head>

<body>
    <div style='margin-top: 30px;margin-left: 20px; overflow: auto;min-height: 700px;'>
        <input type='hidden' id='id' name='id' value='<?php echo $_smarty_tpl->getVariable('data')->value['id'];?>
'>
       
        <div class="form-group">
            <label for="auther">手术知识一级分类(如常见手术知识)</label>
            <div>
                <?php if ($_smarty_tpl->getVariable('operation_type')->value==1){?>
                <script>
                $(function() {

                    var type_id_1 = '<?php echo $_smarty_tpl->getVariable('data')->value['type_id_1'];?>
'

                    sessionStorage.setItem("type_id_1", type_id_1);
                })
                </script>
                <button class="btn btn-default" type="submit" onclick='base.getType(8,1)' id='type_1_div_name'><?php echo $_smarty_tpl->getVariable('data')->value['type']['name'];?>
</button>
                <?php }else{ ?>
                <button class="btn btn-default" type="submit" onclick='base.getType(8,1)' id='type_1_div_name'>请选择一级分类</button>
                <?php }?>
            </div>
            <p style='color: red;font-size: 14px;' id='type_1_div_name_error'></p>
        </div>

        <div class="form-group">
            <label for="college_type">手术知识二级分类(如心胸外科)</label>
             <div>
                <?php if ($_smarty_tpl->getVariable('operation_type')->value==1){?>
                <script>
                $(function() {

                    var type_id_2 = '<?php echo $_smarty_tpl->getVariable('data')->value['type_id_2'];?>
'

                    sessionStorage.setItem("type_id_2", type_id_2);
                })
                </script>
                <button class="btn btn-default" type="submit" onclick='base.getType(8,2)' id='type_2_div_name'><?php echo $_smarty_tpl->getVariable('data')->value['type_2']['name'];?>
</button>
                <?php }else{ ?>
                <button class="btn btn-default" type="submit" onclick='base.getType(8,2)' id='type_2_div_name'>请选择二级分类</button>
                <?php }?>
            </div>
            <p style='color: red;font-size: 14px;' id='type_2_div_name_error'></p>
        </div>

         <div class="form-group">
            <label for="college_type">手术知识三级分类(如硬脊膜外脓肿手术)</label>
             <div>
                <?php if ($_smarty_tpl->getVariable('operation_type')->value==1){?>
                <script>
                $(function() {

                    var type_id_3 = '<?php echo $_smarty_tpl->getVariable('data')->value['type_id_3'];?>
'

                    sessionStorage.setItem("type_id_3", type_id_3);
                })
                </script>
                <button class="btn btn-default" type="submit" onclick='base.getType(8,3)' id='type_3_div_name'><?php echo $_smarty_tpl->getVariable('data')->value['type_3']['name'];?>
</button>
                <?php }else{ ?>
                <button class="btn btn-default" type="submit" onclick='base.getType(8,3)' id='type_3_div_name'>请选择三级分类</button>
                <?php }?>
            </div>
            <p style='color: red;font-size: 14px;' id='type_3_div_name_error'></p>
        </div>

        <!--  <div class="form-group">
            <label for="college_type">四级分类</label>
             <div>
                <?php if ($_smarty_tpl->getVariable('operation_type')->value==1){?>
                <script>
                $(function() {

                    var type_id_4 = '<?php echo $_smarty_tpl->getVariable('data')->value['type_4_id'];?>
'

                    sessionStorage.setItem("type_id_4", type_id_4);
                })
                </script>
                <button class="btn btn-default" type="submit" onclick='base.getType(5,4)' id='type_4_div_name'><?php echo $_smarty_tpl->getVariable('data')->value['type_4']['name'];?>
</button>
                <?php }else{ ?>
                <button class="btn btn-default" type="submit" onclick='base.getType(5,4)' id='type_4_div_name'>请选择四级分类</button>
                <?php }?>
            </div>
            <p style='color: red;font-size: 14px;' id='type_4_div_name_error'></p>
        </div>
 -->

        <div class="form-group" style='width:375px;'>
            <label for="article_content">文章内容</label>
            <?php if ($_smarty_tpl->getVariable('operation_type')->value==1){?>
            <div class="article_content" id='article_content' style='width:300px;'><?php echo $_smarty_tpl->getVariable('data')->value['content']['article_content'];?>
</div>
            <?php }else{ ?>
            <div class="article_content" id='article_content' style='width:300px;'>请输入文章内容</div>
            <?php }?>
            <p style='color: red;font-size: 14px;' id='article_content_error'></p>
        </div>
        <button type="submit" class="btn btn-default" onclick='operation.submitInfo(<?php echo $_smarty_tpl->getVariable('operation_type')->value;?>
)'>保存</button>
        <button type="submit" class="btn btn-default" onclick='base.preview("article_content")'>预览</button>
    </div>
    <div style='height:50px;'></div>
</body>

</html>