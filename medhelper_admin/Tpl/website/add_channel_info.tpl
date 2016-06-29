<!DOCTYPE html>
<html lang="zh-CN">

<head>
    {include file="../public/_default.tpl"} {include file="../public/_editor.tpl"}
    <script src="{$MAINPUBLIC}/javascript/config/agreement.js"></script>
    <script src="{$MAINPUBLIC}/javascript/channel.js"></script>
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

        <input type='hidden' id='id' name='id' value='{$data.id}'>

        <div class="form-group">
            <label for="title">文章标题</label>
            <input type="text" class="form-control" id="title" placeholder="请输入文章标题" style='
            width:500px;' value='{$data.title}'>
            <p style='color: red;font-size: 14px;' id='title_error'></p>
        </div>
        <div class="form-group">
            <label for="cover_pic_url">封面图</label>
            <input id='cover_pic_url' name='cover_pic_url' type="file" >

            {if $operation_type == 1}

            <img src="{$FOOTERURL}medhelper/Public/image/type/{$data.cover_pic_url}" alt="..." class="img-thumbnail" style='width:150px;'>

            {/if}

            <p style='color: red;font-size: 14px;' id='cover_pic_url_error'></p>
        </div>
        <div class="form-group">
            <label for="summary_info">文章简介</label>
            <textarea class="form-control" rows="3" style='width:500px' id='summary_info' name='summary_info'>{$data.summary_info}</textarea>
            <p style='color: red;font-size: 14px;' id='summary_info_error'></p>
        </div>
        <div class="form-group">
            <label for="auther">文章分类</label>
            <div>
                {if $operation_type == 1}

                <script>

                    $(function(){

                        var type_id_1 =  '{$data.table_id}'

                        sessionStorage.setItem("type_id_1",type_id_1);
                    })

                </script>

               <button class="btn btn-default" type="submit" onclick='base.getType(1,1)' id='type_1_div_name'>{$data.type.name}</button>
                {else}
               <button class="btn btn-default" type="submit" onclick='base.getType(1,1)' id='type_1_div_name'>请选择分类</button>
                {/if}
                
            </div>
            <p style='color: red;font-size: 14px;' id='type_1_div_name_error'></p>
        </div>
        <div class="form-group" style='width:375px;'>
            <label for="article_content">文章内容</label>
            {if $operation_type == 1}
            <div class="article_content" id='article_content' style='width:300px;'>{$data.article_content}</div>
            {else}
            <div class="article_content" id='article_content' style='width:300px;'>请输入内容介绍</div>
            {/if}
            <p style='color: red;font-size: 14px;' id='article_content_error'></p>
        </div>
        <button type="submit" class="btn btn-default" onclick='channel.submitChannel({$operation_type})'>保存</button>
        <button type="submit" class="btn btn-default" onclick='base.preview("article_content")'>预览</button>
    </div>
    <div style='height:50px;'></div>
</body>

</html>