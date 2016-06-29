<!DOCTYPE html>
<html lang="zh-CN">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1"> {include file="$path/_public.tpl"}
    <script src="{$WebSiteUrlPublic}/javascript/news.js"></script>
</head>

<body>
    <div>
        {include file="$path/_header.tpl"}
        <div style='height:20px;'>&nbsp;</div>
        <div style='width:100%;margin: 0 auto'>
            <div style='width:100%;height:20px;line-height: 20px;text-align: center'>重点专科</div>
            <div style='height:20px;'>&nbsp;</div>
            <div style='width:96%;margin: 12px auto;' id='college_list'>

                {foreach from=$college_info item=info}
                
                <div style='height:40px;background-color: rgb(140, 156, 171);color:white;text-align: center;line-height: 40px;'>{$info.city}市</div>

                <div>

                    {foreach from=$info.list item=data}

                    <div style='height:60px;line-height: 60px;border-left: 1px solid black;border-right: 1px solid black;border-bottom: 1px solid black;text-indent: 10px;cursor: pointer;' onclick='base.jump("college/detail?id={$data.id}",1)'>{$data.hospital} {$data.type.name}</div>

                    {/foreach}

                </div>


                {/foreach}
            </div>
        </div>
        <div style='height: 40px;'>&nbsp;</div>
        {include file="$path/_footer.tpl"}
    </div>
</body>

</html>
<input type='hidden' name='news_current_page' id='news_current_page' value='1'>
<input type='hidden' name='news_type' id='news_type' value='{$news_type}'>