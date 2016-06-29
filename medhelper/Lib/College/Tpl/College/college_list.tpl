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
            <div style='width:100%;height:20px;line-height: 20px;text-align: center'>重点专科</div>
            <div style='height:20px;'>&nbsp;</div>
            <div style='width:90%;margin:0 auto;'>
                <button type="submit" class="btn {if $college_type == 1} btn-primary {else} btn-default {/if}" onclick='base.jump("college/college_list?college_type=1",1)'>国家级重点专科</button>
                <button type="submit" class="btn {if $college_type == 2} btn-primary {else} btn-default {/if}" onclick='base.jump("college/college_list?college_type=2",1)'>省市级重点专科</button>
            </div>
            <div style='width:95%;margin: 12px auto;' id='college_list'>
                
                {foreach from=$college_info item=college_infos}
                <a class='label' onclick='base.jump("college/college_detail_list?college_type={$college_type}&prov={$college_infos.prov}",1)'>{$college_infos.prov}</a> 
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