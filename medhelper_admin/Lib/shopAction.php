<?php

class shopAction{

	public function shop_list(){

		$shopModel = new shopModel();

		$shopModel->getShopList();

		$_ENV['smarty']->assign('shop_list', $shopModel->shop_list);

        $_ENV['smarty']->assign('fenye', $shopModel->fenye);

		$_ENV['smarty']->display('shop_list');
	}

	public function addShop(){

		$_ENV['smarty']->display('add_shop_list');
	}

	public function updateShop(){

		$shop_id = $_REQUEST['shop_id'];

		if(!empty($shop_id)){

			$shopModel = new shopModel($shop_id);

			$_ENV['smarty']->assign('data',$shopModel->shop_info);

			$_ENV['smarty']->display('edit_shop');

		} else{

			echo 'shop_id is null';
		}
	}

	public function submitShop(){

		$shopModel = new shopModel();

		$shopModel->setParams();

		$shopModel->uploadShopFile();

		$shopModel->createShop();

		$array = array(

			'res' => 1,

			'data'=>'success'
		);

		die(json_encode($array));
	}
}
?>