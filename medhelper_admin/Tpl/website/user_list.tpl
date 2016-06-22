<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
<script src="http://cdn.bootcss.com/jquery/1.10.2/jquery.min.js"></script>
<link rel="stylesheet" href="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/css/bootstrap.min.css">
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
<div style="height: 51px;"></div>
<div class="dataArea">
    <table class="table table-bordered ">
        <tr>
            <th style="width: 121px;">id</th>
            <th style="width: 121px;">角色</th>
            <th style="width: 154px;">昵称</th>
            <th style="width: 154px;">手机</th>
            <th style="width: 154px;">邮箱</th>
            <th style="width: 154px;">ip</th>
            <th style="width: 154px;">登录时间</th>
            <th style="width: 154px;">注册时间</th>
        </tr>
        {foreach from=$user_list item=datas key=key}
        <tr>
            <td>{$datas.id}</td>
            <td>{$datas.role}</td>
            <td>{$datas.nickname}</td>
            <td>{$datas.phone}</td>
            <td>{$datas.email}</td>
            <td>{$datas.ip}</td>
            <td>{$datas.last_login_time|date_format:"%Y-%m-%d"}</td>
            <td>{$datas.creat_time|date_format:"%Y-%m-%d"}</td>
        </tr>
        {/foreach}
    </table>
</div>
{$fenye}