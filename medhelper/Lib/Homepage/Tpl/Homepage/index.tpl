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
            {foreach from=$type_list item=data}
            <div style='width:100%;height: 120px;border: 1px solid black;cursor: pointer' >
                <div style='height: 5px;'>&nbsp;</div>
                <div style='width:30%;' class='left'>
                    <p class='center'><img src='{$WebSiteUrlPublic}/image/type/{$data.img_file}' style='max-width:60px;text-align: center;vertical-align:middle;'> </p>
                </div>
                <div style='width:70%;' class='left'>

                    <div style='height:75px;'>

                         {foreach from=$data.content item=contents}

                            <div>{$contents.title}</div>

                         {/foreach}

                    </div>

                    <button type="submit" class="btn btn-primary" onclick='base.jump("news/news_list?type={$data.id}",1)'>进入{$data.name}频道</button>

                </div>
            </div>
            <div class='both' style='height: 10px;'>&nbsp;</div>
            {/foreach}
        </div>
        <div style='height: 40px;'>&nbsp;</div>
        {include file="$path/_footer.tpl"}
    </div>
</body>

</html>
