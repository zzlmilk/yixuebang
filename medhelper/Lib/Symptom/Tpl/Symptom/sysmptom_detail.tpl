<!DOCTYPE html>
<html lang="zh-CN">

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        {include file="$path/_public.tpl"}

        <script src="{$WebSiteUrlPublic}/javascript/news.js"></script>

    </head>

    <body>
        <div>
            {include file="$path/_header.tpl"}

            <div style='width:90%;margin: 0 auto;'>

                <div >

                    <span class="glyphicon glyphicon-menu-left" aria-hidden="true" onclick='javascript:history.go(-1);'></span>

                    <span style='text-align:center;display: inline-block;width:80%;'>导医文章</div>

                </div>

                <div style='height:40px;'>&nbsp;</div>

                <div class='content' style='width: 90%;margin: 0 auto;'>{$info.article_content}</div>

            </div>

            <div style='height:20px;'>&nbsp;</div>


            {include file="$path/_footer.tpl"}

        </div>
    </body>

</html>

<input type='hidden' name='news_current_page' id='news_current_page' value='1'>
