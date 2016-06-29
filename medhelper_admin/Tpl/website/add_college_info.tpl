<!DOCTYPE html>
<html lang="zh-CN">

<head>
    {include file="../public/_default.tpl"} {include file="../public/_editor.tpl"}
    <script src="{$MAINPUBLIC}/javascript/config/agreement.js"></script>
    <script src="{$MAINPUBLIC}/javascript/college.js"></script>
    <script src="{$MAINPUBLIC}/javascript/jquery.cityselect.js"></script>
    <script>
    $(function() {

        var operation_type = '{$operation_type}'

        $('#article_content').summernote({

            height: 200

        });

        sessionStorage.clear();

        if (operation_type == 1) {

            var prov = '{$data.prov}'

            var city = '{$data.city}'

            var dist = '{$data.dist}'

        } else {

            var prov = '湖南'

            var city = '长沙'

            var dist = '岳麓区'
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
        <input type='hidden' id='id' name='id' value='{$data.id}'>
        <div class="form-group">
            <label for="hospital">医院名称</label>
            <input type="text" class="form-control" id="hospital" placeholder="请输入医院名称" style='
            width:500px;' value='{$data.hospital}'>
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
            <label for="college_type">专科分类</label>
            <select class="form-control" style='width:500px;' id='college_type'>
                <option value='1' {if $data.college_type == 1} selected {/if}>国家级重点专科</option>
                <option value='2' {if $data.college_type == 2} selected {/if}>省市级重点专科</option>
            </select>
            <p style='color: red;font-size: 14px;' id='college_type_error'></p>
        </div>


        <div class="form-group" style='width:375px;'>
            <label for="article_content">专科内容</label>
            {if $operation_type == 1}
            <div class="article_content" id='article_content' style='width:300px;'>{$data.content.article_content}</div>
            {else}
            <div class="article_content" id='article_content' style='width:300px;'>请输入专科介绍</div>
            {/if}
            <p style='color: red;font-size: 14px;' id='article_content_error'></p>
        </div>
        <button type="submit" class="btn btn-default" onclick='college.submitCollege({$operation_type})'>保存</button>

        <button type="submit" class="btn btn-default" onclick='base.preview("article_content")'>预览</button>
    </div>
    <div style='height:50px;'></div>
</body>

</html>