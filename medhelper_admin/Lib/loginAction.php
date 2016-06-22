<?php

class loginAction {

    public function login() {

        $_ENV['smarty']->setDirTemplates('');

        $_ENV['smarty']->setDir('default');

        $_ENV['smarty']->display('login');
    }

    public function loginAjax() {


        header("Content-type:text/html;charset=utf-8");

        $user_name = $_REQUEST['user'];

        $password = $_REQUEST['password'];

        if (!empty($user_name) && !empty($password)) {

            $result = M('medhelper_admin')->where("admin_name like '".$user_name."' and admin_password = '".md5($password)."' ")->db(2)->find();

            if ($result != NULL) {

                $_SESSION['medhelper_admin_id'] = $result['id'];

                echo '<script type="text/javascript">window.location="' . WebSiteUrl . '/' . $_SESSION['source'] . '";</script>';

                die;
            } else {



                echo '<script type="text/javascript">alert("用户名或密码错误");window.location="' . WebSiteUrl . '/' . $_SESSION['source'] . '";</script>';

                die;
            }
        } else {

            echo '<script type="text/javascript">alert("用户名或密码为空");window.location="' . WebSiteUrl . '/' . $_SESSION['source'] . '";</script>';

            die;
        }
    }

}

?>