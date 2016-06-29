<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="{$WEBSITEPUBLIC}/css/css.css" rel="stylesheet" type="text/css"> 
    <title></title>
    <style>
    * {
        font-family: "黑体", "宋体", Serif;
    }
    </style>
</head>

<body class='boby' style='min-height:500px;overflow:auto'>
    <div class='bobyBackGroud' style=''>
        <div style='overflow: hidden; height: 86px;'>
            {include file='top.tpl'}
        </div>
        <div style='  background-color: #fff;
    border: 1px solid #d9dadc;height: 950px; width: 1250px ; margin: 0 auto;overflow:auto'>
            <div style='float: left; overflow: hidden; height: 1000px; width: 16%;font-weight: bold;border-right: 1px solid #e7e7eb;'>
                <iframe frameborder='0' src="{$WEBSITEURL}/pageredirst.php?action=left&functionname=left" name="leftFrame" id="leftFrame" title="leftFrame" style=' height: 1000px; width: 196px; {*margin-left: 5px;*}'></iframe>
            </div>
            <div style='float: left;height: 900px; width: 83%; margin-left: 3px'>
                <iframe frameborder='0' src="{$WEBSITEPUBLIC}/html/mainfra.html" name="mainFrame" id="mainFrame" title="mainFrame" style='height: 1000px; width: 100%; border-radius: 10px 10px 0 0; overflow:auto;'></iframe>
            </div>
        </div>
    </div>
</body>
</html>

