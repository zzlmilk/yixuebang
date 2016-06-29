<?php

session_start();

error_reporting(E_ERROR | E_WARNING | E_PARSE);

defined('ROOT_DIR') or define('ROOT_DIR',getcwd());

defined('WebSiteName') or define('WebSiteName','yixuebang/medhelper');

defined('Config') or define('Config', ROOT_DIR.'/Config');

defined('PLUG') or define('PLUG', ROOT_DIR.'/Plug');

defined('SmartyDir') or define('SmartyDir', Config.'/Smarty');

defined('LOG_FILE_SIZE') or define('LOG_FILE_SIZE', 2097152); // 日志文件大小限制

defined('LOG_STATE') or define('LOG_STATE', 1);  // 是否开启日志  0为开启 1 为关闭

defined('URL_PATHINFO_DEPR') or define('URL_PATHINFO_DEPR', '/');

defined('URL_MODEL') or define('URL_MODEL', '1'); //url模式 0为默认模式  1 为 pathinfo模式

defined('LIB') or define('LIB', ROOT_DIR.'/Lib/'); 

defined('WebSiteUrl') or define('WebSiteUrl', 'http://' . $_SERVER['HTTP_HOST'].'/'.WebSiteName.'/index.php/');

defined('WebSiteUrlPublic') or define('WebSiteUrlPublic', 'http://' . $_SERVER['HTTP_HOST'] . '/' . WebSiteName . '/Public');

defined('WebSiteUrlPublicPath') or define('WebSiteUrlPublicPath', ROOT_DIR.'/Public/html/');

defined('URL_PATHINFO_FETCH') or define('URL_PATHINFO_FETCH', 'ORIG_PATH_INFO,REDIRECT_PATH_INFO,REDIRECT_URL');

defined('VAR_MODULE') or define('VAR_MODULE', 'a');

defined('VAR_ACTION') or define('VAR_ACTION', 'v');

defined('VAR_GROUP') or define('VAR_GROUP', 'g');

defined('VAR_CUSTOMIZE') or define('VAR_CUSTOMIZE', 'c');

defined('SHOPFILEPATH') or define('SHOPFILEPATH',ROOT_DIR.'/Public/image/shop');

include '../medhelper_config/include.php';

?>
