<?php

class symptomAction{


	public function symptom_list(){

		$symptomModel = new symptomModel();

		$symptomModel->getList();

		$_ENV['smarty']->assign( 'list', $symptomModel->list );

		$_ENV['smarty']->assign( 'fenye', $symptomModel->fenye );

		$_ENV['smarty']->display( 'symptom_list' );
		
	}

	public function edit() {

		$id = $_REQUEST['id'];

		if ( !empty( $id ) ) {

			$symptomModel = new symptomModel( $id );

			$_ENV['smarty']->assign( 'data', $symptomModel->article_info );

			$_ENV['smarty']->assign( 'operation_type', 1 );

			$_ENV['smarty']->display( 'add_symptom_info' );

		}
	}


	public function add_symptom_info() {

		$_ENV['smarty']->assign( 'operation_type', 0 );

		$_ENV['smarty']->display( 'add_symptom_info' );

	}

	public function add_symptom_ajax() {

		$symptomModel = new symptomModel($_REQUEST['id']);

		$symptomModel->setArrayValue();

		$symptomModel->createAndUpdateData( $_REQUEST['operation_type'] );

	}

}

?>