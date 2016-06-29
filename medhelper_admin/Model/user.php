<?php

class userModel extends baseModel {

    public function __construct($user_id = 0) {

        parent::__construct();

        if (!empty($user_id)) {

            $this->user_id = $user_id;

            $this->user_info_sigel = M('medhelper_acount')->where('id = '.$user_id)->field('id,role,nickname,phone,email,last_login_time,creat_time')->find();
        } else {

            $this->user_id = 0;
        }
    }

    public function getUserList() {

        $this->getUserTotal();

        $this->getUserInfoByPage();

        $this->fenye('user', 'user_list');
    }

    public function getUserTotal() {

        $this->account_info = M('medhelper_acount')->field('id')->select();

        $this->countTotalPage($this->account_info);
    }

    public function getUserInfoByPage() {

        $user_info = M('medhelper_acount')->field('id,role,nickname,phone,email,last_login_time,creat_time')->limit($this->limit)->offset($this->offset)->order('last_login_time DESC')->select();

        $user_info_count = count($user_info);

        if ($user_info_count > 0) {

            foreach ($user_info as $key => $value) {

                $account_login_session_info = M('medhelper_login_session')->where("account_id = " . $value['id'])->field('login_ip')->order('login_time')->find();

                if ($account_login_session_info != NULL) {

                    $user_info[$key]['ip'] = $account_login_session_info['login_ip'];
                } else {

                    $user_info[$key]['ip'] = '暂无';
                }

                switch ($value['role']) {

                    case '1':

                        $user_info[$key]['role'] = '患者';

                        break;

                    case '2':

                        $user_info[$key]['role'] = '医生';

                        break;
                }
            }

            $this->user_list = $user_info;
        } else {

            $this->user_list = array();
        }
    }

}

?>