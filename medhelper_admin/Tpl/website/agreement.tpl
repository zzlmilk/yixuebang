<!DOCTYPE html>
<html lang="zh-CN">

<head>
    {include file="../public/_default.tpl"} {include file="../public/_editor.tpl"}
    <script src="{$MAINPUBLIC}/javascript/config/agreement.js"></script>
    <script>
    $(function() {

        $('.agreement_content').summernote({

            height: 300

        });

    })
    </script>
</head>

<body>
    <div style='margin-top: 30px;margin-left: 20px;'>
        <div class="form-group" style='width:700px;'>
            <label for="agreement_content">协议内容</label>
            <div class="agreement_content" id='agreement_content' style='width:300px;'>{$agreement_html}</div>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-default" onclick='agreement.submitAgreementHtml()'>保存</button>
            <button type="submit" class="btn btn-default" onclick='base.preview("agreement_content")'>预览</button>
        </div>
    </div>
</body>

</html>

<button type="submit" class="btn btn-default" onclick='base.edit()'>编辑文章</button>

{include file="../public/_preview.tpl"}

{include file="../public/_reader.tpl"} 