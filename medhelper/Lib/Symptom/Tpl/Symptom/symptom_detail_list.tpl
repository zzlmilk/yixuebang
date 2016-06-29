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
            <div style='width:100%;height:20px;line-height: 20px;text-align: center'>自主导医</div>
            <div style='height:20px;'>&nbsp;</div>
            <div style='width:96%;margin: 12px auto;' id='college_list'>

                {foreach from=$data item=info}
                
                <div style='height:40px;color:black;text-align: left;line-height: 40px;'>{$info.type_2.name}</div>

                <div>

                    {foreach from=$info.type_3 item=data}
                        <a class='label' onclick='base.jump("symptom/detail?id={$data.id}",1)'>{$data.type_3_info.name}</a> 
                    {/foreach}

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