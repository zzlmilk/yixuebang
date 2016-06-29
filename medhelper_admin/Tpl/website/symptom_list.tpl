<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> {include file="../public/_default.tpl"}
<style>
body {
    overflow-x: hidden;
}

.userMangerTitle {
    color: rgb(91, 91, 91);
    font-size: 2.5em;
    margin-top: 15px;
    text-align: center;
}

.sortBar {
    width: auto;
    margin-left: 25px;
    height: 25px;
    line-height: 0px;
    margin-right: 45px;
    /*        margin: 0 auto;*/
}

table tr>th {
    text-align: center;
    background-color: #eee;
}

table tr>td {
    text-align: center;
    vertical-align: middle !important;
    border-bottom-color: #D5E3E7 !important;
}

table tr:nth-of-type(even) {
    background-color: #F9FCFD;
}

.selectText {
    height: 32px;
    border-radius: 0px;
    border: #c5c5c5 solid 1px;
    box-shadow: 0px 2px 2px #888 inset;
    padding-left: 10px;
    width: 224px;
}

.selectBar {
    padding-left: 25px;
}
</style>
<script>
</script>
<div style="height: 20px;"></div>
<button type="submit" class="btn btn-default" onclick='base.jumpSymptom()' style='margin-left: 2px;margin-top: 12px;'>添加自助导医</button>
<div style="height: 10px;"></div>
<div class="dataArea">
    <table class="table table-bordered ">
        <tr>
            <th style="width: 121px;">id</th>
            <th style="width: 121px;">一级分类</th>
            <th style="width: 121px;">二级分类</th>
            <th style="width: 121px;">三级分类</th>
            <th style="width: 154px;">创建时间</th>
            <th>操作</th>
        </tr>
        {foreach from=$list item=datas key=key}
        <tr>
            <td>{$datas.id}</td>

            <td>{$datas.type.name}</td>

            <td>{$datas.type_2.name}</td>

            <td>{$datas.type_3.name}</td>
            
            <td>{$datas.create_time|date_format:"%Y-%m-%d"}</td>
            <td>
                <a href="pageredirst.php?action=symptom&functionname=edit&id={$datas.id}">编辑</a>
            </td>
        </tr>
        {/foreach}
    </table>
</div>
{$fenye}