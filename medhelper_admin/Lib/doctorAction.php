<?php

class doctorAction{



	public function edit() {

		$id = $_REQUEST['id'];

		if ( !empty( $id ) ) {

			$doctorModel = new doctorModel( $id );

			$_ENV['smarty']->assign( 'data', $doctorModel->article_info );

			$_ENV['smarty']->assign( 'operation_type', 1 );

			$_ENV['smarty']->display( 'add_doctor_info' );

		}
	}


	public function doctor_list(){

		$doctorModel = new doctorModel();

		$doctorModel->getList();

		$_ENV['smarty']->assign( 'list', $doctorModel->list );

		$_ENV['smarty']->assign( 'fenye', $doctorModel->fenye );

		$_ENV['smarty']->display( 'doctor_list' );
		
	}

	public function add_doctor_info() {

		$_ENV['smarty']->assign( 'operation_type', 0 );

		$_ENV['smarty']->display( 'add_doctor_info' );

	}

	public function add_doctor_ajax(){

		$doctorModel = new doctorModel($_REQUEST['id']);

		$doctorModel->setArrayValue();

		$doctorModel->createAndUpdateData( $_REQUEST['operation_type'] );
	}



}

?>