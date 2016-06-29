<?php

class shopAction extends Action{

	public function shop_list() {

		$shop_list = M( 'medhelper_shop' )->select();

		$this->assign( 'shop_data', $shop_list );

		$this->display( 'list' );
	}
	

	public function ajax_buy(){

        $shop_list = M( 'medhelper_shop' )->where('id = 1')->find();

        include_once PLUGCONFIGPATH.'/sendEmail/send_email.php';

        $sendEmailPlug = new sendEmailPlug('zhaixiaoping@hirelib.com','购买成功','购买成功');

        $sendEmailPlug->setFile(SHOPFILEPATH.'/file/'.$shop_list['shop_content'],$shop_list['shop_content_file_name']);

        $sendEmailPlug->send();
	}

	public function detail() {

		$id = $_REQUEST['id'];

		if ( !empty( $id ) ) {

			$shop_list = M( 'medhelper_shop' )->where('id = '.$id)->find();

			$this->assign( 'shop_info', $shop_list );

			$this->display( 'detail' );

		}

	}

}

?>
