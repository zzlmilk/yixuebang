<?php

/**
 * 根据来源  来自动加载相关内容
 */
if (!empty($_SESSION['source'])) {
    
    /**
     * 根据来源 加载指定的Action文件  和 Model文件
     */

    define('FILEPATHACTION', ROOTPATH . '/Lib/' . $_SESSION['source'] . '/Action/');

    define('FILEPATHMODEL', ROOTPATH . '/Lib/' . $_SESSION['source'] . '/Model/');

    define('UPLOADSDIR',ROOTPATH . '/public/' . $_SESSION['source'] . '/image/uploads');

    defined('URLADDRESS') or define('URLADDRESS', WebSiteUrl.'/'.$_SESSION['source']);

    define('UPLOADSURLADDRESS',WebSiteUrl . '/public/' . $_SESSION['source'] . '/image/uploads/');

    setSession('WEBSITEURL',URLADDRESS);

    setSession('UPLOADSDIR',UPLOADSDIR);

    if ($handle = opendir(FILEPATHACTION)) {
        /* to include all files that in the class folder what a way to include classes!!! */
        while (false !== ($file = readdir($handle))) {
            if ($file != '.' && $file != '..' && $file != '.svn' && $file != '.DS_Store') {

                include_once(FILEPATHACTION . $file);
            }
        }
        closedir($handle);
    }

    if ($handle = opendir(FILEPATHMODEL)) {
        /* to include all files that in the class folder what a way to include classes!!! */
        while (false !== ($file = readdir($handle))) {
            if ($file != '.' && $file != '..' && $file != '.svn' && $file != '.DS_Store') {

                include_once(FILEPATHMODEL . $file);
            }
        }
        closedir($handle);
    }

    include_once 'core.php';

}
?>

