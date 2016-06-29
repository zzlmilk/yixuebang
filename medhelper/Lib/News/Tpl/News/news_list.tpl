{foreach from=$info item=data}

    <div style='width:100%;height: 80px;border: 1px solid black;cursor: pointer' onclick='javasript:window.location.href = "{$websiteUrl}news/detail?id={$data.id}"'>

        <div style='height: 5px;'>&nbsp;</div>

        <div style='width:30%;' class='left'>

            <p class='center'><img src='{$WebSiteUrlPublic}/image/type/{$data.cover_pic_url}' style='max-width:60px;text-align: center;vertical-align:middle;'> </p>      				
        </div>

        <div style='width:70%;' class='left'>

            <div>{$data.title}</div>

            <div>{$data.summary_info|mb_substr:0:20:'utf8'}</div>

        </div>

    </div>

    <div class='both' style='height: 10px;'>&nbsp;</div>

{/foreach}

