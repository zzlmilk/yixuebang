<?php
require_once SmartyDir.'/libs/Smarty.class.php';
$smarty = new Smarty();
$smarty->compile_dir = ROOT_DIR . "/smartyCache";
$smarty->config_dir = ROOT_DIR . "Smarty/Tpl/config";
$smarty->cache_dir = ROOT_DIR . "Smarty/Tpl/cache";
$smarty->caching = false;

$smarty->register_function("getDictInfo","getDictInfo");
$smarty->register_function("imageExist","imageExist");


?>


