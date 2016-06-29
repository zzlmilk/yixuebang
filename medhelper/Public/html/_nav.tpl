<div style='width:90%;margin: 0 auto;height: 100px; overflow: hidden;' id='channel_list'>
    <a class='label' onclick='base.jump("symptom/symptom_list",1)'>自助导医</a>
    <a class='label' onclick='base.jump("college/college_list",1)'>重点专科</a>
    <a class='label'>名医推荐</a>
    <a class='label'>药品知识</a>
    <a class='label'>疾病知识</a>
    <a class='label'>临床知识</a>
    <a class='label'>手术知识</a>
    <a class='label' id='more' onclick='base.channel(1)'>更多</a>
    <a class='label'>急诊知识</a> {foreach from=$type_list item=type}
    <a class='label' onclick='base.jump("news/news_list?type={$type.id}",1)'>{$type.name}</a> {/foreach}
    <a class='label' id='slide' onclick='base.channel(2)'>收起</a>
</div>