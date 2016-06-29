<?php

class Dispatcher {

    public function dispatcher() {

        switch (URL_MODEL) {

            case '0':

                $this->parsentUrl();

                break;

            case '1':

                $this->parsentPathInfo();

                break;
        }
    }

    private function parsentUrl() {

        $pathInfo = array();

        if (!empty($_REQUEST[VAR_GROUP])) {

            array_push($pathInfo, $_REQUEST[VAR_GROUP]);
        } else {

            array_push($pathInfo, 'homepage');
        }

        if (!empty($_REQUEST[VAR_MODULE])) {

            array_push($pathInfo, $_REQUEST[VAR_MODULE]);

            if (!empty($_REQUEST[VAR_ACTION])) {

                $function = $_REQUEST[VAR_ACTION];
            } else {

                $function = 'index';
            }
            array_push($pathInfo, $function);
        } else {

            array_push($pathInfo, 'index');
        }

        $this->DataProcess($pathInfo);
    }

    private function parsentPathInfo() {

        if (!empty($_SERVER['PATH_INFO'])) {

            $pathInfo = explode(URL_PATHINFO_DEPR, trim($_SERVER['PATH_INFO'], URL_PATHINFO_DEPR));
        } else {

            $pathInfo = array('homepage', 'index');
        }

        $this->DataProcess($pathInfo);
    }

    /**
     * 处理数组 来获取方法和操作
     */
    private function DataProcess($pathArray) {

        $array = array('model', 'action');

        foreach ($array as $k => $v) {

            if (!empty($pathArray[0])) {

                $$v = $pathArray[0];

                array_shift($pathArray);
            } else {

                if ($k == 'model') {

                    $model = 'homepage';
                } else {

                    $action = 'index';
                }
            }
        }

        if (empty($action)) {

            $action = $model;
        }


        /**
         * 控制层目录
         */
        defined('MODULE_DIR') or define('MODULE_DIR', ucfirst($model));


        /**
         * 控制层 文件名称
         */
        defined('MODULE_NAME_CONTROLLER') or define('MODULE_NAME_CONTROLLER', $model . 'Action');

        defined('MODULE_NAME_CONTROLLER_NEW') or define('MODULE_NAME_CONTROLLER_NEW', ucfirst($model) . 'Action');

        /**
         * 调用方法
         */
        defined('ACTION_NAME') or define('ACTION_NAME', $action);
    }

}

?>