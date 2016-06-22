<?php

require ROOTPATH . '/Smarty/libs/Smarty.class.php';

$smarty = new Smarty();

$smarty->template_dir = ROOTPATH . "/Tpl";

$smarty->compile_dir = ROOTPATH . "/Cache";

$smarty->config_dir = ROOTPATH . "/Smarty/templates/config";

$smarty->cache_dir = ROOTPATH . "/Smarty/templates/cache";

$smarty->caching = false;
?>
