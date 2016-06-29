<?php

class userCommectModel extends baseModel {

    public function __construct() {
        
        parent::__construct();
    }

    public function getCommectList() {

        $this->getCommectctTotal();

        $this->getUserCommectByPage();

        $this->fenye('user', 'commect_list');
    }

    public function getCommectctTotal() {

        $this->commect_info = M('medhelper_comment')->field('id')->select();

        $this->countTotalPage($this->commect_info);
    }

    public function getUserCommectByPage() {

        $commect_info = M('medhelper_comment')->field('comment_content,comment_time,article_id,account_id')->limit($this->limit)->offset($this->offset)->order('comment_time DESC')->select();

        $commect_info_count = count($commect_info);

        if ($commect_info_count > 0) {

            foreach ($commect_info as $key => $value) {

            	$userModel = new userModel($value['account_id']);

            	$commect_info[$key]['user_info'] = $userModel->user_info_sigel;

            	$articleModel = new articleModel($value['article_id']);

            	$commect_info[$key]['article_info'] = $articleModel->article_info;
            }

            $this->commect_list = $commect_info;
        } else {

            $this->commect_list = array();
        }
    }
}

?>