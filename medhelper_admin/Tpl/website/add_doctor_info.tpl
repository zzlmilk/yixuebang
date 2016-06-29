<!DOCTYPE html>
<html lang="zh-CN">

<head>
    {include file="../public/_default.tpl"} {include file="../public/_editor.tpl"}
    <script src="{$MAINPUBLIC}/javascript/config/agreement.js"></script>
    <script src="{$MAINPUBLIC}/javascript/doctor.js"></script>
    <script src="{$MAINPUBLIC}/javascript/jquery.cityselect.js"></script>
    <script>
    $(function() {

        var operation_type = '{$operation_type}'

        $('#article_content').summernote({

            height: 200

        });

        sessionStorage.clear();

    })
    </script>
</head>

<body>
    <div style='margin-top: 30px;margin-left: 20px; overflow: auto;min-height: 700px;'>
        <input type='hidden' id='id' name='id' value='{$data.id}'>
        <div class="form-group">
            <label for="doctor_name">医生名称</label>
            <input type="text" class="form-control" id="doctor_name" placeholder="请输入医生名称" style='
            width:500px;' value='{$data.doctor_name}'>
            <p style='color: red;font-size: 14px;' id='doctor_name_error'></p>
        </div>
        <div class="form-group">
            <label for="hospital_name">医院名称</label>
            <input type="text" class="form-control" id="hospital_name" placeholder="请输入医院名称" style='
            width:500px;' value='{$data.hospital_name}'>
            <p style='color: red;font-size: 14px;' id='hospital_name_error'></p>
        </div>
        <div class="form-group">
            <label for="auther">专科分类</label>
            <div>
                {if $operation_type == 1}
                <script>
                $(function() {

                    var type_id_1 = '{$data.college_id}'

                    sessionStorage.setItem("type_id_1", type_id_1);
                })
                </script>
                <button class="btn btn-default" type="submit" onclick='base.getType(2,1)' id='type_1_div_name'>{$data.type.name}</button>
                {else}
                <button class="btn btn-default" type="submit" onclick='base.getType(2,1)' id='type_1_div_name'>请选择专科</button>
                {/if}
            </div>
            <p style='color: red;font-size: 14px;' id='type_1_div_name_error'></p>
        </div>

        <div class="form-group">
            <label for="doctor_type">医生类型</label>
            <select class="form-control" style='width:500px;' id='doctor_type'>
                <option value='1' {if $data.doctor_type == 1} selected {/if}>主任医师</option>
                <option value='2' {if $data.doctor_type == 2} selected {/if}>副主任医师</option>
            </select>
            <p style='color: red;font-size: 14px;' id='college_type_error'></p>
        </div>

        
        <div class="form-group">
            <label for="doctor_type">出诊时间</label>

            <br />

            {if $operation_type == 1}

                <label class="checkbox-inline">
                    <input type="checkbox" id="patient_time" value="1" name='patient_time' {if 1|in_array:$data.patient_time}checked="checked" {/if} > 周一 上午
                </label>

                <label class="checkbox-inline">
                    <input type="checkbox" id="patient_time" value="2" name='patient_time' {if 2|in_array:$data.patient_time}checked="checked" {/if}> 周一 下午
                </label>

                <br />
                <label class="checkbox-inline">
                    <input type="checkbox" id="patient_time" value="3" name='patient_time' {if 3|in_array:$data.patient_time}checked="checked" {/if}> 周二 上午
                </label>
                <label class="checkbox-inline">
                    <input type="checkbox" id="patient_time" value="4" name='patient_time' {if 4|in_array:$data.patient_time}checked="checked" {/if}> 周二 下午
                </label>

                <br />
                <label class="checkbox-inline">
                    <input type="checkbox" id="patient_time" value="5" name='patient_time' {if 5|in_array:$data.patient_time}checked="checked" {/if}> 周三 上午
                </label>
                <label class="checkbox-inline">
                    <input type="checkbox" id="patient_time" value="6" name='patient_time' {if 6|in_array:$data.patient_time}checked="checked" {/if}> 周三 下午
                </label>

                <br />

                <label class="checkbox-inline">
                    <input type="checkbox" id="patient_time" value="7" name='patient_time' {if 7|in_array:$data.patient_time}checked="checked" {/if}> 周四 上午
                </label>
                <label class="checkbox-inline">
                    <input type="checkbox" id="patient_time" value="8" name='patient_time' {if 8|in_array:$data.patient_time}checked="checked" {/if}> 周四 下午
                </label>

                <br />

                <label class="checkbox-inline">
                    <input type="checkbox" id="patient_time" value="9" name='patient_time' {if 9|in_array:$data.patient_time}checked="checked" {/if}> 周五 上午
                </label>
                <label class="checkbox-inline">
                    <input type="checkbox" id="patient_time" value="10" name='patient_time' {if 10|in_array:$data.patient_time}checked="checked" {/if}> 周五 下午
                </label>

                <br />

                <label class="checkbox-inline">
                    <input type="checkbox" id="patient_time" value="11" name='patient_time' {if 11|in_array:$data.patient_time}checked="checked" {/if}> 周六 上午
                </label>
                <label class="checkbox-inline">
                    <input type="checkbox" id="patient_time" value="12" name='patient_time' {if 12|in_array:$data.patient_time}checked="checked" {/if}> 周六 下午
                </label>

                <br />

                <label class="checkbox-inline">
                    <input type="checkbox" id="patient_time" value="13" name='patient_time' {if 13|in_array:$data.patient_time}checked="checked" {/if}> 周日 上午
                </label>
                <label class="checkbox-inline">
                    <input type="checkbox" id="patient_time" value="14" name='patient_time'  {if 14|in_array:$data.patient_time}checked="checked" {/if}> 周日 下午
                </label>

            {else}


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

            {/if}

            

            <p style='color: red;font-size: 14px;' id='college_type_error'></p>
        </div>
        <div class="form-group" style='width:375px;'>
            <label for="article_content">医生介绍</label>
            {if $operation_type == 1}
            <div class="article_content" id='article_content' style='width:300px;'>{$data.content.article_content}</div>
            {else}
            <div class="article_content" id='article_content' style='width:300px;'>请输入医生介绍</div>
            {/if}
            <p style='color: red;font-size: 14px;' id='article_content_error'></p>
        </div>
        <button type="submit" class="btn btn-default" onclick='doctor.submitDoctor({$operation_type})'>保存</button>
        <button type="submit" class="btn btn-default" onclick='base.preview("article_content")'>预览</button>
    </div>
    <div style='height:50px;'></div>
</body>

</html>