<?php

class medicalAction{

	public function edit() {

		$id = $_REQUEST['id'];

		if ( !empty( $id ) ) {

			$medicalModel = new medicalModel( $id );

			$_ENV['smarty']->assign( 'data', $medicalModel->article_info );

			$_ENV['smarty']->assign( 'operation_type', 1 );

			$_ENV['smarty']->display( 'add_medical_info' );

		}
	}


	public function medical_list(){

		$medicalModel = new medicalModel();

		$medicalModel->getList();

		$_ENV['smarty']->assign( 'list', $medicalModel->list );

		$_ENV['smarty']->assign( 'fenye', $medicalModel->fenye );

		$_ENV['smarty']->display( 'medical_list' );
		
	}

	public function add_medical_info() {

		$_ENV['smarty']->assign( 'operation_type', 0 );

		$_ENV['smarty']->display( 'add_medical_info' );

	}

	public function add_medical_ajax(){

		$medicalModel = new medicalModel($_REQUEST['id']);

		$medicalModel->setArrayValue();

		$medicalModel->createAndUpdateData( $_REQUEST['operation_type'] );
	}




}
?>