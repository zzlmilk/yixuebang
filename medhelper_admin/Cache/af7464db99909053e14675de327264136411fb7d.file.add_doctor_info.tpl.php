<?php /* Smarty version Smarty-3.0-RC2, created on 2016-06-28 18:19:42
         compiled from "/private/var/www/html/yixuebang/medhelper_admin/Tpl/website/add_doctor_info.tpl" */ ?>
<?php /*%%SmartyHeaderCode:200331879357724f3ec29086-89370018%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'af7464db99909053e14675de327264136411fb7d' => 
    array (
      0 => '/private/var/www/html/yixuebang/medhelper_admin/Tpl/website/add_doctor_info.tpl',
      1 => 1467108594,
    ),
  ),
  'nocache_hash' => '200331879357724f3ec29086-89370018',
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
/javascript/doctor.js"></script>
    <script src="<?php echo $_smarty_tpl->getVariable('MAINPUBLIC')->value;?>
/javascript/jquery.cityselect.js"></script>
    <script>
    $(function() {

        var operation_type = '<?php echo $_smarty_tpl->getVariable('operation_type')->value;?>
'

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
            <label for="doctor_name">医生名称</label>
            <input type="text" class="form-control" id="doctor_name" placeholder="请输入医生名称" style='
            width:500px;' value='<?php echo $_smarty_tpl->getVariable('data')->value['doctor_name'];?>
'>
            <p style='color: red;font-size: 14px;' id='doctor_name_error'></p>
        </div>
        <div class="form-group">
            <label for="hospital_name">医院名称</label>
            <input type="text" class="form-control" id="hospital_name" placeholder="请输入医院名称" style='
            width:500px;' value='<?php echo $_smarty_tpl->getVariable('data')->value['hospital_name'];?>
'>
            <p style='color: red;font-size: 14px;' id='hospital_name_error'></p>
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
            <label for="doctor_type">医生类型</label>
            <select class="form-control" style='width:500px;' id='doctor_type'>
                <option value='1' <?php if ($_smarty_tpl->getVariable('data')->value['doctor_type']==1){?> selected <?php }?>>主任医师</option>
                <option value='2' <?php if ($_smarty_tpl->getVariable('data')->value['doctor_type']==2){?> selected <?php }?>>副主任医师</option>
            </select>
            <p style='color: red;font-size: 14px;' id='college_type_error'></p>
        </div>

        
        <div class="form-group">
            <label for="doctor_type">出诊时间</label>

            <br />

            <?php if ($_smarty_tpl->getVariable('operation_type')->value==1){?>

                <label class="checkbox-inline">
                    <input type="checkbox" id="patient_time" value="1" name='patient_time' <?php if (in_array(1,$_smarty_tpl->getVariable('data')->value['patient_time'])){?>checked="checked" <?php }?> > 周一 上午
                </label>

                <label class="checkbox-inline">
                    <input type="checkbox" id="patient_time" value="2" name='patient_time' <?php if (in_array(2,$_smarty_tpl->getVariable('data')->value['patient_time'])){?>checked="checked" <?php }?>> 周一 下午
                </label>

                <br />
                <label class="checkbox-inline">
                    <input type="checkbox" id="patient_time" value="3" name='patient_time' <?php if (in_array(3,$_smarty_tpl->getVariable('data')->value['patient_time'])){?>checked="checked" <?php }?>> 周二 上午
                </label>
                <label class="checkbox-inline">
                    <input type="checkbox" id="patient_time" value="4" name='patient_time' <?php if (in_array(4,$_smarty_tpl->getVariable('data')->value['patient_time'])){?>checked="checked" <?php }?>> 周二 下午
                </label>

                <br />
                <label class="checkbox-inline">
                    <input type="checkbox" id="patient_time" value="5" name='patient_time' <?php if (in_array(5,$_smarty_tpl->getVariable('data')->value['patient_time'])){?>checked="checked" <?php }?>> 周三 上午
                </label>
                <label class="checkbox-inline">
                    <input type="checkbox" id="patient_time" value="6" name='patient_time' <?php if (in_array(6,$_smarty_tpl->getVariable('data')->value['patient_time'])){?>checked="checked" <?php }?>> 周三 下午
                </label>

                <br />

                <label class="checkbox-inline">
                    <input type="checkbox" id="patient_time" value="7" name='patient_time' <?php if (in_array(7,$_smarty_tpl->getVariable('data')->value['patient_time'])){?>checked="checked" <?php }?>> 周四 上午
                </label>
                <label class="checkbox-inline">
                    <input type="checkbox" id="patient_time" value="8" name='patient_time' <?php if (in_array(8,$_smarty_tpl->getVariable('data')->value['patient_time'])){?>checked="checked" <?php }?>> 周四 下午
                </label>

                <br />

                <label class="checkbox-inline">
                    <input type="checkbox" id="patient_time" value="9" name='patient_time' <?php if (in_array(9,$_smarty_tpl->getVariable('data')->value['patient_time'])){?>checked="checked" <?php }?>> 周五 上午
                </label>
                <label class="checkbox-inline">
                    <input type="checkbox" id="patient_time" value="10" name='patient_time' <?php if (in_array(10,$_smarty_tpl->getVariable('data')->value['patient_time'])){?>checked="checked" <?php }?>> 周五 下午
                </label>

                <br />

                <label class="checkbox-inline">
                    <input type="checkbox" id="patient_time" value="11" name='patient_time' <?php if (in_array(11,$_smarty_tpl->getVariable('data')->value['patient_time'])){?>checked="checked" <?php }?>> 周六 上午
                </label>
                <label class="checkbox-inline">
                    <input type="checkbox" id="patient_time" value="12" name='patient_time' <?php if (in_array(12,$_smarty_tpl->getVariable('data')->value['patient_time'])){?>checked="checked" <?php }?>> 周六 下午
                </label>

                <br />

                <label class="checkbox-inline">
                    <input type="checkbox" id="patient_time" value="13" name='patient_time' <?php if (in_array(13,$_smarty_tpl->getVariable('data')->value['patient_time'])){?>checked="checked" <?php }?>> 周日 上午
                </label>
                <label class="checkbox-inline">
                    <input type="checkbox" id="patient_time" value="14" name='patient_time'  <?php if (in_array(14,$_smarty_tpl->getVariable('data')->value['patient_time'])){?>checked="checked" <?php }?>> 周日 下午
                </label>

            <?php }else{ ?>


                 <label class="checkbox-inline">
                    <input type="checkbox" id="patient_time" value="1" name='patient_time'  > 周一 上午
                </label>

                <label class="checkbox-inline">
                    <input type="checkbox" id="patient_time" value="2" name='patient_time'> 周一 下午
                </label>
                <br />
                <label class="checkbox-inline">
                    <input type="checkbox" id="patient_time" value="3" name='patient_time'> 周二 上午
                </label>
                <label class="checkbox-inline">
                    <input type="checkbox" id="patient_time" value="4" name='patient_time'> 周二 下午
                </label>

                <br />
                <label class="checkbox-inline">
                    <input type="checkbox" id="patient_time" value="5" name='patient_time'> 周三 上午
                </label>
                <label class="checkbox-inline">
                    <input type="checkbox" id="patient_time" value="6" name='patient_time'> 周三 下午
                </label>

                <br />

                <label class="checkbox-inline">
                    <input type="checkbox" id="patient_time" value="7" name='patient_time'> 周四 上午
                </label>
                <label class="checkbox-inline">
                    <input type="checkbox" id="patient_time" value="8" name='patient_time'> 周四 下午
                </label>

                <br />

                <label class="checkbox-inline">
                    <input type="checkbox" id="patient_time" value="9" name='patient_time'> 周五 上午
                </label>
                <label class="checkbox-inline">
                    <input type="checkbox" id="patient_time" value="10" name='patient_time'> 周五 下午
                </label>

                <br />

                <label class="checkbox-inline">
                    <input type="checkbox" id="patient_time" value="11" name='patient_time'> 周六 上午
                </label>
                <label class="checkbox-inline">
                    <input type="checkbox" id="patient_time" value="12" name='patient_time'> 周六 下午
                </label>

                <br />

                <label class="checkbox-inline">
                    <input type="checkbox" id="patient_time" value="13" name='patient_time'> 周日 上午
                </label>
                <label class="checkbox-inline">
                    <input type="checkbox" id="patient_time" value="14" name='patient_time'> 周日 下午
                </label>

            <?php }?>

            

            <p style='color: red;font-size: 14px;' id='college_type_error'></p>
        </div>
        <div class="form-group" style='width:375px;'>
            <label for="article_content">医生介绍</label>
            <?php if ($_smarty_tpl->getVariable('operation_type')->value==1){?>
            <div class="article_content" id='article_content' style='width:300px;'><?php echo $_smarty_tpl->getVariable('data')->value['content']['article_content'];?>
</div>
            <?php }else{ ?>
            <div class="article_content" id='article_content' style='width:300px;'>请输入医生介绍</div>
            <?php }?>
            <p style='color: red;font-size: 14px;' id='article_content_error'></p>
        </div>
        <button type="submit" class="btn btn-default" onclick='doctor.submitDoctor(<?php echo $_smarty_tpl->getVariable('operation_type')->value;?>
)'>保存</button>
        <button type="submit" class="btn btn-default" onclick='base.preview("article_content")'>预览</button>
    </div>
    <div style='height:50px;'></div>
</body>

</html>