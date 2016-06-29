<!DOCTYPE html>
<html lang="zh-CN">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1"> {include file="$path/_public.tpl"}
    <script src="{$WebSiteUrlPublic}/javascript/news.js"></script>
</head>

<body>
    <div>
        {include file="$path/_header.tpl"}

        {include file="$path/_nav.tpl"}
        
        <div style='height:20px;'>&nbsp;</div>
        <div style='width:90%;margin: 0 auto'>
            <div id='news'>
                {$news_html}
            </div>
            <div style='width:100%;height:40px;text-align: center;line-height: 40px;background-color: gray;color:white;cursor: pointer;' onclick='news.getNewsListByPage();' id='news_more_html'>更多</div>
        </div>
        <div style='height: 40px;'>&nbsp;</div>
        {include file="$path/_footer.tpl"}
    </div>
</body>

</html>
<input type='hidden' name='news_current_page' id='news_current_page' value='1'>

<input type='hidden' name='news_type' id='news_type' value='{$news_type}'>