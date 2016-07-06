<script src="{$WEBSITEPUBLIC}/javascript/jquery.js"></script>
<link href="{$WEBSITEPUBLIC}/css/css.css" rel="stylesheet" type="text/css">
<script>
$(function() {

    $('table').css('display', 'block');

    $('table').css('width', '200px');

    $('a').css('width', '100%');


    $('.left-a').click(function() {

        $('.left-a').removeClass('selected');

        $(this).addClass('selected');

    })

    $('a').click(function(){

        var module_name = $(this).text()

        $('#top_name').text(module_name)

        console.log(module_name)

    })
})
</script>
<div class="left_background" style='width:200px;background-color: white;border-right: 1px solid #d9dadc'>
    <table width="100%" border="0" cellpadding="0" cellspacing="0" class="left-table01" style=''>
        <tr>
            <td>
                <!--                    公司模块开始-->
                <table  border="0" cellpadding="0" cellspacing="0" class=" zhucaidan " id="table120">
                    <tr>
                        <td height="29" >
                            <table width="85%" border="0" align="center" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td width="85%">
                                        <a href="javascript:vold(0)" target="mainFrame" class="left-font03 left-font">用户管理</a>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
                <table id="subtree120" style="DISPLAY: none"  border="0" align="center" cellpadding="0" ellspacing="0" class="left-table03 tableDefault">
                    <tr>
                        <td width="100%">
                            <div class='left-a'>
                                <a style='' href="{$WEBSITEURL}/pageredirst.php?action=user&functionname=user_list" target="mainFrame" class="left-fontSmall">用户信息</a>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td width="100%">
                            <div class='left-a'>
                                <a style='' href="{$WEBSITEURL}/pageredirst.php?action=user&functionname=commect_list" target="mainFrame" class="left-fontSmall">评论信息</a>
                            </div>
                        </td>
                    </tr>
                </table>

                <table width="100%" border="0" cellpadding="0" cellspacing="0" class=" zhucaidan " id="table120">
                    <tr>
                        <td height="29" >
                            <table width="85%" border="0" align="center" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td width="85%">
                                        <a href="javascript:vold(0)" target="mainFrame" class="left-font03 left-font">知识商城管理</a>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>

                <table id="subtree124" style="DISPLAY: none" border="0" align="center" cellpadding="0" ellspacing="0" class="left-table03 tableDefault">
                    <tr>
                        <td width="100%">
                            <div class='left-a'>
                                <a style='' href="{$WEBSITEURL}/pageredirst.php?action=shop&functionname=shop_list" target="mainFrame" class="left-fontSmall">知识商城列表</a>
                            </div>
                        </td>
                    </tr>
                </table>

                <table width="100%" border="0" cellpadding="0" cellspacing="0" class=" zhucaidan " id="table120">
                    <tr>
                        <td height="29">
                            <table width="85%" border="0" align="center" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td width="85%">
                                        <a href="javascript:vold(0)" target="mainFrame" class="left-font03 left-font">栏目管理</a>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
                <table id="subtree121" style="DISPLAY: none" border="0" align="center" cellpadding="0" ellspacing="0" class="left-table03 tableDefault">
                    <tr>
                        <td width="100%">
                            <div class='left-a'>
                                <a style='' href="{$WEBSITEURL}/pageredirst.php?action=channel&functionname=channel_list" target="mainFrame" class="left-fontSmall">栏目列表</a>
                            </div>
                        </td>
                    </tr>
                </table>


                <table width="100%" border="0" cellpadding="0" cellspacing="0" class=" zhucaidan " id="table120">
                    <tr>
                        <td height="29" >
                            <table width="85%" border="0" align="center" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td width="85%">
                                        <a href="javascript:vold(0)" target="mainFrame" class="left-font03 left-font">重点专科管理</a>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
                <table id="subtree121" style="DISPLAY: none" border="0" align="center" cellpadding="0" ellspacing="0" class="left-table03 tableDefault">
                    <tr>
                        <td width="100%">
                            <div class='left-a'>
                                <a style='' href="{$WEBSITEURL}/pageredirst.php?action=college&functionname=college_list" target="mainFrame" class="left-fontSmall">重点专科列表</a>
                            </div>
                        </td>
                    </tr>
                </table>

                <table width="100%" border="0" cellpadding="0" cellspacing="0" class=" zhucaidan " id="table120">
                    <tr>
                        <td height="29">
                            <table width="85%" border="0" align="center" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td width="85%">
                                        <a href="javascript:vold(0)" target="mainFrame" class="left-font03 left-font">自主导医</a>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
                <table id="subtree121" style="DISPLAY: none"  border="0" align="center" cellpadding="0" ellspacing="0" class="left-table03 tableDefault">
                    <tr>
                        <td width="100%">
                            <div class='left-a'>
                                <a style='' href="{$WEBSITEURL}/pageredirst.php?action=symptom&functionname=symptom_list" target="mainFrame" class="left-fontSmall">症状管理</a>
                            </div>
                        </td>
                    </tr>
                </table>
                <table width="100%" border="0" cellpadding="0" cellspacing="0" class=" zhucaidan " id="table120">
                    <tr>
                        <td height="29" >
                            <table width="85%" border="0" align="center" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td width="85%">
                                        <a href="javascript:vold(0)" target="mainFrame" class="left-font03 left-font">名医管理</a>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>

                <table id="subtree124" style="DISPLAY: none"  border="0" align="center" cellpadding="0" ellspacing="0" class="left-table03 tableDefault">
                    <tr>
                        <td width="100%">
                            <div class='left-a'>
                                <a style='' href="{$WEBSITEURL}/pageredirst.php?action=doctor&functionname=doctor_list" target="mainFrame" class="left-fontSmall">名医列表</a>
                            </div>
                        </td>
                    </tr>
                </table>

                 <table width="100%" border="0" cellpadding="0" cellspacing="0" class=" zhucaidan " id="table124">
                    <tr>
                        <td height="29" >
                            <table width="85%" border="0" align="center" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td width="85%">
                                        <a href="javascript:vold(0)" target="mainFrame" class="left-font03 left-font">药品管理</a>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
                <table id="subtree124" style="DISPLAY: none" border="0" align="center" cellpadding="0" ellspacing="0" class="left-table03 tableDefault">
                    <tr>
                        <td width="100%">
                            <div class='left-a'>
                                <a style='' href="{$WEBSITEURL}/pageredirst.php?action=drug&functionname=drug_list" target="mainFrame" class="left-fontSmall">药品列表</a>
                            </div>
                        </td>
                    </tr>
                </table>

                <table width="100%" border="0" cellpadding="0" cellspacing="0" class=" zhucaidan " id="table124">
                    <tr>
                        <td height="29" >
                            <table width="85%" border="0" align="center" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td width="85%">
                                        <a href="javascript:vold(0)" target="mainFrame" class="left-font03 left-font">疾病知识管理</a>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
                <table id="subtree124" style="DISPLAY: none"  border="0" align="center" cellpadding="0" ellspacing="0" class="left-table03 tableDefault">
                    <tr>
                        <td width="100%">
                            <div class='left-a'>
                                <a style='' href="{$WEBSITEURL}/pageredirst.php?action=diseases&functionname=diseases_list" target="mainFrame" class="left-fontSmall">疾病知识列表</a>
                            </div>
                        </td>
                    </tr>
                </table>

                <table width="100%" border="0" cellpadding="0" cellspacing="0" class=" zhucaidan " id="table124">
                    <tr>
                        <td height="29" >
                            <table width="85%" border="0" align="center" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td width="85%">
                                        <a href="javascript:vold(0)" target="mainFrame" class="left-font03 left-font">临床知识管理</a>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
                <table id="subtree124" style="DISPLAY: none"  border="0" align="center" cellpadding="0" ellspacing="0" class="left-table03 tableDefault">
                    <tr>
                        <td width="100%">
                            <div class='left-a'>
                                <a style='' href="{$WEBSITEURL}/pageredirst.php?action=clinical&functionname=clinical_list" target="mainFrame" class="left-fontSmall">临床常用检验知识列表</a>
                            </div>
                        </td>
                    </tr>
                </table>


                 <table width="100%" border="0" cellpadding="0" cellspacing="0" class=" zhucaidan " id="table124">
                    <tr>
                        <td height="29">
                            <table width="85%" border="0" align="center" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td width="85%">
                                        <a href="javascript:vold(0)" target="mainFrame" class="left-font03 left-font">手术知识管理</a>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
                <table id="subtree124" style="DISPLAY: none"   border="0" align="center" cellpadding="0" ellspacing="0" class="left-table03 tableDefault">
                    <tr>
                        <td width="100%">
                            <div class='left-a'>
                                <a style='' href="{$WEBSITEURL}/pageredirst.php?action=operation&functionname=operation_list" target="mainFrame" class="left-fontSmall">手术知识列表</a>
                            </div>
                        </td>
                    </tr>
                </table>

                <table width="100%" border="0" cellpadding="0" cellspacing="0" class=" zhucaidan " id="table124">
                    <tr>
                        <td height="29">
                            <table width="85%" border="0" align="center" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td width="85%">
                                        <a href="javascript:vold(0)" target="mainFrame" class="left-font03 left-font">急诊知识管理</a>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
                <table id="subtree124" style="DISPLAY: none"  border="0" align="center" cellpadding="0" ellspacing="0" class="left-table03 tableDefault">
                    <tr>
                        <td width="100%">
                            <div class='left-a'>
                                <a style='' href="{$WEBSITEURL}/pageredirst.php?action=medical&functionname=medical_list" target="mainFrame" class="left-fontSmall">急诊知识列表</a>
                            </div>
                        </td>
                    </tr>
                </table>



                <table width="100%" border="0" cellpadding="0" cellspacing="0" class=" zhucaidan " id="table120">
                    <tr>
                        <td height="29" >
                            <table width="85%" border="0" align="center" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td width="85%">
                                        <a href="javascript:vold(0)" target="mainFrame" class="left-font03 left-font">配置设置</a>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
                <table id="subtree121" style="DISPLAY: none"  border="0" align="center" cellpadding="0" ellspacing="0" class="left-table03 tableDefault">
                    <tr>
                        <td width="100%">
                            <div class='left-a'>
                                <a style='' href="{$WEBSITEURL}/pageredirst.php?action=config&functionname=setAdminPassword" target="mainFrame" class="left-fontSmall">设置管理员密码</a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td width="100%">
                            <div class='left-a'>
                                <a style='' href="{$WEBSITEURL}/pageredirst.php?action=config&functionname=agreement" target="mainFrame" class="left-fontSmall">医院帮协议内容设置</a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td width="100%">
                            <div class='left-a'>
                                <a style='' href="{$WEBSITEURL}/pageredirst.php?action=config&functionname=introduce" target="mainFrame" class="left-fontSmall">公司介绍</a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td width="100%">
                            <div class='left-a'>
                                <a style='' href="{$WEBSITEURL}/pageredirst.php?action=config&functionname=contact" target="mainFrame" class="left-fontSmall">联系我们</a>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td width="100%">
                            <div class='left-a'>
                                <a style='' href="{$WEBSITEURL}/pageredirst.php?action=config&functionname=baiduAccount" target="mainFrame" class="left-fontSmall">百度统计</a>
                            </div>
                        </td>
                    </tr>

                </table>


            </td>
        </tr>
    </table>
</div>
