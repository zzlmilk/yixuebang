<!DOCTYPE html>
<html lang="zh-CN">

<head>
    {include file="../public/_default.tpl"} {include file="../public/_editor.tpl"}
    <script src="{$MAINPUBLIC}/javascript/config/introduce.js"></script>
    <script>
    $(function() {

        $('.agreement_content').summernote({

            height: 669

        });

    })
    </script>
</head>

<body>
    <div style='width:375px;margin: 0 auto;margin-top: 20px;'>

        <div class="form-group" style='width:375px;'>
            <div class="agreement_content" id='content' style='width:375px;'>{$html}</div>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-default" onclick='introduce.submitHtml()'>保存</button>
            <button type="submit" class="btn btn-default" onclick='base.preview("content")'>预览</button>
        </div>
    </div>
</body>

</html>

{include file="../public/_preview.tpl"}