<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="{$WEBSITEPUBLIC}/css/css.css" rel="stylesheet" type="text/css">

    <script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>

    <title></title>
    <style>
    * {
        font-family: "黑体", "宋体", Serif;
    }
    </style>
</head>

<body class='boby'>
    <div class='bobyBackGroud' style='width:98%;margin: 0 auto;'>
        <div style='overflow: hidden; height: 86px; width: 98%;margin: 0 auto;'>
            {include file='top.tpl'}
        </div>
        <div style='  background-color: #fff;
    border: 1px solid #d9dadc; width: 98% ; margin: 0 auto;height: 1000px;'>
            <div style='float: left; width: 17%;font-weight: bold;background-color: white;;'>
                <!-- <iframe frameborder='0' src="{$WEBSITEURL}/pageredirst.php?action=left&functionname=left" name="leftFrame" id="leftFrame" title="leftFrame" style=' height: 1000px; width: 196px; {*margin-left: 5px;*}'></iframe> -->

                {include file='left.tpl'}

            </div>
            <div style='float: left;height: 1235px; width: 82.5%;background-color: white;'>
                <iframe frameborder='0' src="{$WEBSITEPUBLIC}/html/mainfra.html" name="mainFrame" id="mainFrame" title="mainFrame" style='height: 1235px; width: 100%;background-color: white;'></iframe>
            </div>
        </div>

        <div style='clear:both;'>&nbsp;</div>

    </div>
</body>

</html>