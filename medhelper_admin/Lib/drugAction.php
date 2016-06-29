<?php

class drugAction{

	public function drug_list() {

		$drugModel = new drugModel();

		$drugModel->getList();

		$_ENV['smarty']->assign( 'list', $drugModel->list );

		$_ENV['smarty']->assign( 'fenye', $drugModel->fenye );

		$_ENV['smarty']->display( 'drug_list' );

	}

	public function edit() {

		$id = $_REQUEST['id'];

		if ( !empty( $id ) ) {

			$drugModel = new drugModel( $id );

			$_ENV['smarty']->assign( 'data', $drugModel->article_info );

			$_ENV['smarty']->assign( 'operation_type', 1 );

			$_ENV['smarty']->display( 'add_drug_info' );

		}
	}


	public function add_drug_info() {

		$_ENV['smarty']->assign( 'operation_type', 0 );

		$_ENV['smarty']->display( 'add_drug_info' );

	}

	public function add_drug_ajax() {

		$drugModel = new drugModel($_REQUEST['id']);

		$drugModel->setArrayValue();

		$drugModel->createAndUpdateData( $_REQUEST['operation_type'] );

	}


}

?>