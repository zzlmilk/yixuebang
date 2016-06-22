<?php

class userAction {

    public function user_list() {

        $userModel = new userModel();

        $userModel->getUserList();

        $_ENV['smarty']->assign('user_list', $userModel->user_list);

        $_ENV['smarty']->assign('fenye', $userModel->fenye);

        $_ENV['smarty']->display('user_list');
    }

    public function commect_list() {

        $userCommectModel = new userCommectModel();

        $userCommectModel->getCommectList();

        $_ENV['smarty']->assign('commect_list', $userCommectModel->commect_list);

        $_ENV['smarty']->assign('fenye', $userCommectModel->fenye);

        $_ENV['smarty']->display('commect_list');
    }

}

?>