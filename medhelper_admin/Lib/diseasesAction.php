<?php

class diseasesAction {

	public function edit() {

		$id = $_REQUEST['id'];

		if ( !empty( $id ) ) {

			$diseasesModel = new diseasesModel( $id );

			$_ENV['smarty']->assign( 'data', $diseasesModel->article_info );

			$_ENV['smarty']->assign( 'operation_type', 1 );

			$_ENV['smarty']->display( 'add_diseases_info' );

		}
	}


	public function diseases_list(){

		$diseasesModel = new diseasesModel();

		$diseasesModel->getList();

		$_ENV['smarty']->assign( 'list', $diseasesModel->list );

		$_ENV['smarty']->assign( 'fenye', $diseasesModel->fenye );

		$_ENV['smarty']->display( 'diseases_list' );
		
	}

	public function add_diseases_info() {

		$_ENV['smarty']->assign( 'operation_type', 0 );

		$_ENV['smarty']->display( 'add_diseases_info' );

	}

	public function add_diseases_ajax(){

		$diseasesModel = new diseasesModel($_REQUEST['id']);

		$diseasesModel->setArrayValue();

		$diseasesModel->createAndUpdateData( $_REQUEST['operation_type'] );
	}

}


?>