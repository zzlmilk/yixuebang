<?php

include_once PLUGCONFIGPATH . '/wxPay_plug/lib/WxPay.Api.php';

include_once PLUGCONFIGPATH . '/wxPay_plug/example/WxPay.JsApiPay.php';

class weixinPayModel {

    public function __construct($open_id, $pay_money) {

        if (!empty($open_id) && !empty($pay_money)) {

            $this->open_id = $open_id;

            $this->pay_money = $pay_money;
        }
    }

    public function createOrder($shop_id) {

        $create = array(
            'open_id' => $this->open_id,
            'total_fee' => $this->pay_money,
            'user_id' => $_SESSION['user_id'],
            'create_time' => time(),
            'order_status' => 0,
            'shop_id' => $shop_id,
            'out_trade_no'=> $this->order_id,

        );

        M('medhelper_order')->add($create);
    }

    public function getWeixinParmas() {

        if (!empty($this->open_id) && !empty($this->pay_money)) {

            $tools = new JsApiPay();

            $openId = $this->open_id;

            $this->order_id = WxPayConfig::MCHID . date("YmdHis");

            //②、统一下单
            $input = new WxPayUnifiedOrder();

            $input->SetBody("test");

            $input->SetAttach("test");

            $input->SetOut_trade_no($this->order_id);

            $input->SetTotal_fee($this->pay_money);

            $input->SetTime_start(date("YmdHis"));

            $input->SetTime_expire(date("YmdHis", time() + 600));

            $input->SetGoods_tag("test");

            $input->SetNotify_url("http://app.hirelib.com/medhelper/index.php/shop/weixin_pay_callback");

            $input->SetTrade_type("JSAPI");

            $input->SetOpenid($openId);

            $order = WxPayApi::unifiedOrder($input);

            $jsApiParameters = $tools->GetJsApiParameters($order);

            $this->weixinJsApiPramas = $jsApiParameters;
        }
    }

}

?>