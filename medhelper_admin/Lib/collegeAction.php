<?php

class collegeAction{


	public function college_list() {

		$collegeModel = new collegeModel();

		$collegeModel->getList();

		$_ENV['smarty']->assign( 'list', $collegeModel->list );

		$_ENV['smarty']->assign( 'fenye', $collegeModel->fenye );

		$_ENV['smarty']->display( 'college_list' );

	}

	public function edit() {

		$id = $_REQUEST['id'];

		if ( !empty( $id ) ) {

			$collegeModel = new collegeModel( $id );

			$_ENV['smarty']->assign( 'data', $collegeModel->article_info );

			$_ENV['smarty']->assign( 'operation_type', 1 );

			$_ENV['smarty']->display( 'add_college_info' );

		}
	}


	public function add_college_info() {

		$_ENV['smarty']->assign( 'operation_type', 0 );

		$_ENV['smarty']->display( 'add_college_info' );

	}

	public function add_college_ajax() {

		$collegeModel = new collegeModel($_REQUEST['id']);

		$collegeModel->setArrayValue();

		$collegeModel->createAndUpdateData( $_REQUEST['operation_type'] );

	}

}

?>