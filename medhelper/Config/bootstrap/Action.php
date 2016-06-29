<?php

/**
 * 模版基类
 */
class Action {

    public $smarty;
    public $display_page;
    public $dir_name;
    public $module_dir_name;
    public $smarty_dir;
    public $tVar = array();
    public $userOpenId;
    public $requset;

    public function __construct() {

        header("Content-type: text/html; charset=utf-8");
    
    
    }

    #判断用户使用哪个设备访问 动态加载交互文件

    public function judgeUserDeivceVisit() {

        if (stristr($_SERVER['HTTP_USER_AGENT'], 'Android')) {//返回值中是否有Android这个关键字
            $device_id = 3;
        } else if (stristr($_SERVER['HTTP_USER_AGENT'], 'iPhone')) {

            $device_id = 1;
        } else {

            $device_id = 1;
        }

        return $device_id;
    }

    private function setPageDisplay() {

        if ($this->smarty) {

            if (!empty($this->display_page)) {
                
            } else {

                $this->display_page = ACTION_NAME;
            }

            if (!empty($this->dir_name)) {

                $this->smarty_dir = $this->dir_name;
            } else {

                $this->smarty_dir = MODULE_DIR;
            }

            if (!empty($this->module_dir_name)) {

                $module_dir = $this->module_dir_name;
            } else {

                $module_dir = MODULE_DIR;
            }

            $dir = LIB . ucfirst($module_dir) . '/Tpl/' . ucfirst($this->smarty_dir) . '/';

            $this->smarty->template_dir = $dir;
        }
    }

    private function initView() {

        if ($this->smarty != NULL) {
            
        } else {

            include ROOT_DIR . '/Config/bootstrap/smarty.php';

            $this->smarty = $smarty;
        }

        $this->setPageDisplay();

        if ($this->tVar && $this->smarty) {

            $this->smarty->assign($this->tVar);
        }
    }

    public function setDisplayDir($dir) {

        if (!empty($dir)) {

            $this->setDir($dir);

            $this->setFileDir($dir);
        }
    }

    public function setDir($dir) {

        $this->dir_name = $dir;
    }

    public function setFileDir($module) {

        if (!empty($module)) {

            $this->module_dir_name = $module;
        }
    }

    public function fetch($tpl) {

        $this->initView();

        if (!empty($tpl)) {

            $page = $tpl . '.tpl';
        } else {

            $page = $this->display_page . '.tpl';
        }

        $this->smarty->assign('websiteUrl', WebSiteUrl);

        $this->smarty->assign('path', WebSiteUrlPublicPath);

        $this->smarty->assign('domain_url', SERVICEURL);

        $this->smarty->assign('WebSiteUrlPublic', WebSiteUrlPublic);

        $this->smarty->assign('module',MODULE_DIR.'/'.ACTION_NAME);

        return $this->smarty->fetch($page);
    }

    public function configSmarty($page) {

        if (!file_exists($this->smarty->template_dir)) {

            mkdir($this->smarty->template_dir);

            chmod($this->smarty->template_dir, 0777);
        }

        if (!empty($page)) {

            $displayPage = $page;
        } else {

            $displayPage = $this->display_page;
        }

        $this->displayPage = $displayPage;


        if (!file_exists($this->smarty->template_dir . $displayPage . '.tpl')) {

            fopen($this->smarty->template_dir . $displayPage . '.tpl', "w+");

            chmod($this->smarty->template_dir . $displayPage . '.tpl', 0777);
        }

        $this->smarty->assign('websiteUrl', WebSiteUrl);

        $this->smarty->assign('path', WebSiteUrlPublicPath);

        $this->smarty->assign('WebSiteUrlPublic', WebSiteUrlPublic);

        $this->smarty->assign('domain_url', SERVICEURL);
    }

    public function display($page = '') {

        $this->initView();

        if (!file_exists($this->smarty->template_dir)) {

            mkdir($this->smarty->template_dir);

            chmod($this->smarty->template_dir, 0777);
        }

        if (!empty($page)) {

            $displayPage = $page;
        } else {

            $displayPage = $this->display_page;
        }

        if (!file_exists($this->smarty->template_dir . $displayPage . '.tpl')) {

            fopen($this->smarty->template_dir . $displayPage . '.tpl', "w+");

            chmod($this->smarty->template_dir . $displayPage . '.tpl', 0777);
        }

        $this->smarty->assign('websiteUrl', WebSiteUrl);

        $this->smarty->assign('path', WebSiteUrlPublicPath);

        $this->smarty->assign('WebSiteUrlPublic', WebSiteUrlPublic);

        $this->smarty->display($displayPage . '.tpl');
    }

    public function assign($name, $value = '') {

        if (is_array($name)) {


            $this->tVar = array_merge($this->tVar, $name);
        } else {

            $this->tVar[$name] = $value;
        }
    }

    public function jsJump($url) {

        exit('<script>window.location.href="' . $url . '";</script>');
    }

}

?>