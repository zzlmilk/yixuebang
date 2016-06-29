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
        <div style='width:95%;margin: 0 auto'>
            <div style='width:100%;height:20px;line-height: 20px;text-align: center'>自主导医</div>
            <div style='height:20px;'>&nbsp;</div>
          
            <div style='width:95%;margin: 12px auto;' id='college_list'>
                
                {foreach from=$data item=college_infos}
                    
                <div style='width:48%;background-color: gray;margin-left: 2%;margin-top: 2%;' class='left' onclick='base.jump("symptom/symptom_detail_list?id={$college_infos.id}",1)'>

                    <div style='height:4px;'>&nbsp;</div>

                    <div style='width:90%;margin: 0 auto;'><p style='text-align: center'><img src='{$WebSiteUrlPublic}/image/type/{$college_infos.img_file}' style='max-width:100%;text-align: center;vertical-align:middle;'> </p></div>

                    <div style='height:5px'>&nbsp;</div>

                    <div style='text-align: center;width:90%;margin: 0 auto;color: white;'>{$college_infos.name}</div>

                </div>

                {/foreach}
                
            </div>
        </div>
        <div style='height: 40px;clear: both'>&nbsp;</div>
        {include file="$path/_footer.tpl"}
    </div>
</body>

</html>
<input type='hidden' name='news_current_page' id='news_current_page' value='1'>
<input type='hidden' name='news_type' id='news_type' value='{$news_type}'>