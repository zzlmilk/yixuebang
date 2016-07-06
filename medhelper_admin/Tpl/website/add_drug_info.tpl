<!DOCTYPE html>
<html lang="zh-CN">

<head>
    {include file="../public/_default.tpl"} {include file="../public/_editor.tpl"}
    <script src="{$MAINPUBLIC}/javascript/config/agreement.js"></script>
    <script src="{$MAINPUBLIC}/javascript/drug.js"></script>
    <script>
    $(function() {

        var operation_type = '{$operation_type}'

        $('#article_content').summernote({

            height: 669

        });

        sessionStorage.clear();

    })
    </script>
</head>

<body>
    <div style='margin-top: 30px;margin-left: 20px; overflow: auto;min-height: 700px;'>
        <input type='hidden' id='id' name='id' value='{$data.id}'>
       
        <div class="form-group">
            <label for="auther">药品一级分类(如呼吸系统疾病用药)</label>
            <div>
                {if $operation_type == 1}
                <script>
                $(function() {

                    var type_id_1 = '{$data.type_id_1}'

                    sessionStorage.setItem("type_id_1", type_id_1);
                })
                </script>
                <button class="btn btn-default" type="submit" onclick='base.getType(5,1)' id='type_1_div_name'>{$data.type.name}</button>
                {else}
                <button class="btn btn-default" type="submit" onclick='base.getType(5,1)' id='type_1_div_name'>请选择一级分类</button>
                {/if}
            </div>
            <p style='color: red;font-size: 14px;' id='type_1_div_name_error'></p>
        </div>

        <div class="form-group">
            <label for="college_type">药品二级分类(如感冒用化学药)</label>
             <div>
                {if $operation_type == 1}
                <script>
                $(function() {

                    var type_id_2 = '{$data.type_id_2}'

                    sessionStorage.setItem("type_id_2", type_id_2);
                })
                </script>
                <button class="btn btn-default" type="submit" onclick='base.getType(5,2)' id='type_2_div_name'>{$data.type_2.name}</button>
                {else}
                <button class="btn btn-default" type="submit" onclick='base.getType(5,2)' id='type_2_div_name'>请选择二级分类</button>
                {/if}
            </div>
            <p style='color: red;font-size: 14px;' id='type_2_div_name_error'></p>
        </div>

         <div class="form-group">
            <label for="college_type">药品三级分类(如氨酚美伪麻片学药)</label>
             <div>
                {if $operation_type == 1}
                <script>
                $(function() {

                    var type_id_3 = '{$data.type_id_3}'

                    sessionStorage.setItem("type_id_3", type_id_3);
                })
                </script>
                <button class="btn btn-default" type="submit" onclick='base.getType(5,3)' id='type_3_div_name'>{$data.type_3.name}</button>
                {else}
                <button class="btn btn-default" type="submit" onclick='base.getType(5,3)' id='type_3_div_name'>请选择三级分类</button>
                {/if}
            </div>
            <p style='color: red;font-size: 14px;' id='type_3_div_name_error'></p>
        </div>

        <!--  <div class="form-group">
            <label for="college_type">四级分类</label>
             <div>
                {if $operation_type == 1}
                <script>
                $(function() {

                    var type_id_4 = '{$data.type_4_id}'

                    sessionStorage.setItem("type_id_4", type_id_4);
                })
                </script>
                <button class="btn btn-default" type="submit" onclick='base.getType(5,4)' id='type_4_div_name'>{$data.type_4.name}</button>
                {else}
                <button class="btn btn-default" type="submit" onclick='base.getType(5,4)' id='type_4_div_name'>请选择四级分类</button>
                {/if}
            </div>
            <p style='color: red;font-size: 14px;' id='type_4_div_name_error'></p>
        </div>
 -->

        <div class="form-group" style='width:375px;'>
            <label for="article_content">文章内容</label>
            {if $operation_type == 1}
            <div class="article_content" id='article_content' style='width:300px;'>{$data.content.article_content}</div>
            {else}
            <div class="article_content" id='article_content' style='width:300px;'>请输入文章内容</div>
            {/if}
            <p style='color: red;font-size: 14px;' id='article_content_error'></p>
        </div>
        <button type="submit" class="btn btn-default" onclick='drug.submitInfo({$operation_type})'>保存</button>

        <button type="submit" class="btn btn-default" onclick='base.preview("article_content")'>预览</button>
    </div>
    <div style='height:50px;'></div>
</body>

</html>