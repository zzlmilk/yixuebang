<?php /* Smarty version Smarty-3.0-RC2, created on 2016-06-28 18:15:16
         compiled from "/private/var/www/html/yixuebang/medhelper_admin/Tpl/website/add_channel_info.tpl" */ ?>
<?php /*%%SmartyHeaderCode:109778074557724e34dcfba5-21219226%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8c775685289c8a2332c9babcaf907867990dc572' => 
    array (
      0 => '/private/var/www/html/yixuebang/medhelper_admin/Tpl/website/add_channel_info.tpl',
      1 => 1467108898,
    ),
  ),
  'nocache_hash' => '109778074557724e34dcfba5-21219226',
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
/javascript/channel.js"></script>
    <script>
    $(function() {

        $('#article_content').summernote({

            height: 200

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
            <label for="title">文章标题</label>
            <input type="text" class="form-control" id="title" placeholder="请输入文章标题" style='
            width:500px;' value='<?php echo $_smarty_tpl->getVariable('data')->value['title'];?>
'>
            <p style='color: red;font-size: 14px;' id='title_error'></p>
        </div>
        <div class="form-group">
            <label for="cover_pic_url">封面图</label>
            <input id='cover_pic_url' name='cover_pic_url' type="file" >

            <?php if ($_smarty_tpl->getVariable('operation_type')->value==1){?>

            <img src="<?php echo $_smarty_tpl->getVariable('FOOTERURL')->value;?>
medhelper/Public/image/type/<?php echo $_smarty_tpl->getVariable('data')->value['cover_pic_url'];?>
" alt="..." class="img-thumbnail" style='width:150px;'>

            <?php }?>

            <p style='color: red;font-size: 14px;' id='cover_pic_url_error'></p>
        </div>
        <div class="form-group">
            <label for="summary_info">文章简介</label>
            <textarea class="form-control" rows="3" style='width:500px' id='summary_info' name='summary_info'><?php echo $_smarty_tpl->getVariable('data')->value['summary_info'];?>
</textarea>
            <p style='color: red;font-size: 14px;' id='summary_info_error'></p>
        </div>
        <div class="form-group">
            <label for="auther">文章分类</label>
            <div>
                <?php if ($_smarty_tpl->getVariable('operation_type')->value==1){?>

                <script>

                    $(function(){

                        var type_id_1 =  '<?php echo $_smarty_tpl->getVariable('data')->value['table_id'];?>
'

                        sessionStorage.setItem("type_id_1",type_id_1);
                    })

                </script>

               <button class="btn btn-default" type="submit" onclick='base.getType(1,1)' id='type_1_div_name'><?php echo $_smarty_tpl->getVariable('data')->value['type']['name'];?>
</button>
                <?php }else{ ?>
               <button class="btn btn-default" type="submit" onclick='base.getType(1,1)' id='type_1_div_name'>请选择分类</button>
                <?php }?>
                
            </div>
            <p style='color: red;font-size: 14px;' id='type_1_div_name_error'></p>
        </div>
        <div class="form-group" style='width:375px;'>
            <label for="article_content">文章内容</label>
            <?php if ($_smarty_tpl->getVariable('operation_type')->value==1){?>
            <div class="article_content" id='article_content' style='width:300px;'><?php echo $_smarty_tpl->getVariable('data')->value['article_content'];?>
</div>
            <?php }else{ ?>
            <div class="article_content" id='article_content' style='width:300px;'>请输入内容介绍</div>
            <?php }?>
            <p style='color: red;font-size: 14px;' id='article_content_error'></p>
        </div>
        <button type="submit" class="btn btn-default" onclick='channel.submitChannel(<?php echo $_smarty_tpl->getVariable('operation_type')->value;?>
)'>保存</button>
        <button type="submit" class="btn btn-default" onclick='base.preview("article_content")'>预览</button>
    </div>
    <div style='height:50px;'></div>
</body>

</html>