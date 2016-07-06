<?php

class shopAction extends Action {

    public function shop_list() {

        $shop_list = M('medhelper_shop')->select();

        $this->assign('shop_data', $shop_list);

        $this->display('list');
    }

    public function ajax_buy() {

        $shop_list = M('medhelper_shop')->where('id = 1')->find();

        include_once PLUGCONFIGPATH . '/sendEmail/send_email.php';

        $sendEmailPlug = new sendEmailPlug('zhaixiaoping@hirelib.com', '购买成功', '购买成功');

        $sendEmailPlug->setFile(SHOPFILEPATH . '/file/' . $shop_list['shop_content'], $shop_list['shop_content_file_name']);

        $sendEmailPlug->send();
    }

    public function weixin_pay_callback() {


        $notify = new PayNotifyCallBack();

        $a = $notify->Handle(false);

        file_put_contents('weixin_pay_callback.log', $a);
    }

    public function order_callback_ajax() {

        $input_data = json_decode(file_get_contents('php://input'), true);
        
        if (!empty($input_data['order_id'])) {

            $order_info = M('medhelper_order')->where("out_trade_no like '" . $input_data['order_id'] . "'")->find();

            if ($order_info != NULL) {

                $shop_id = $order_info['shop_id'];

                $update = array(
                    'order_status' => $input_data['order_status'],
                );

                M('medhelper_order')->where("out_trade_no like '" . $input_data['order_id'] . "'")->save($update);

                if (!empty($input_data['order_status']) && $input_data['order_status'] == 1) {

                    $shop_list = M('medhelper_shop')->where('id = ' . $shop_id)->find();

                    include_once PLUGCONFIGPATH . '/sendEmail/send_email.php';

                    $sendEmailPlug = new sendEmailPlug('zhaixiaoping@hirelib.com', '购买成功', '购买成功');

                    $sendEmailPlug->setFile(SHOPFILEPATH . '/file/' . $shop_list['shop_content'], $shop_list['shop_content_file_name']);

                    $sendEmailPlug->send();
                }
            }
        }
    }

    public function create_order_ajax() {

        $input_data = json_decode(file_get_contents('php://input'), true);

        if (!empty($input_data['open_id']) && !empty($input_data['money'])) {

            $weixinPayModel = new weixinPayModel($input_data['open_id'], $input_data['money']);

            $weixinPayModel->order_id = $input_data['order_id'];

            $weixinPayModel->createOrder($input_data['shop_id']);
        }
    }

    public function shop_detail() {

        if (!empty($_REQUEST['id']) && !empty($_REQUEST['open_id'])) {

            $id = $_REQUEST['id'];

            $shop_list = M('medhelper_shop')->where('id = ' . $id)->find();

            if ($shop_list != NULL) {

                $money = (int) $shop_list['shop_price'] * 100;

                $money = 1;

                $weixinPayModel = new weixinPayModel($_REQUEST['open_id'], $money);

                $weixinPayModel->getWeixinParmas();
            }

            $this->assign('order_id', $weixinPayModel->order_id);

            $this->assign('money', $money);

            $this->assign('open_id', $_REQUEST['open_id']);

            $this->assign('jsApiParameters', $weixinPayModel->weixinJsApiPramas);

            $this->assign('shop_info', $shop_list);

            $this->display('detail');
        }
    }

    public function weixin_jump_ajax() {

        if (!empty($_REQUEST['code']) && !empty($_REQUEST['id'])) {

            $id = $_REQUEST['id'];

            $token_url = 'https://api.weixin.qq.com/sns/oauth2/access_token?appid=wx76bbf390c4fd0c3c&secret=613d3ace3d863b0711f2b70db3ab14ae&code=' . $_REQUEST['code'] . '&grant_type=authorization_code';

            $result = file_get_contents($token_url);

            $array = json_decode($result, true);

            $openid = $array['openid'];

            $jump_url = WebSiteUrl . 'shop/shop_detail?id=' . $id . '&open_id=' . $openid;

            header('Location:' . $jump_url);
        }

        die;
    }

    public function detail() {

        $id = $_REQUEST['id'];

        if (!empty($id)) {

            $jump_url = WebSiteUrl . 'shop/weixin_jump_ajax?id=' . $id;

            $url = 'https://open.weixin.qq.com/connect/oauth2/authorize?appid=wx76bbf390c4fd0c3c&redirect_uri=' . urlencode($jump_url) . '&response_type=code&scope=snsapi_base&state=123#wechat_redirect';

            header('Location:' . $url);
        }
    }

}

?>
