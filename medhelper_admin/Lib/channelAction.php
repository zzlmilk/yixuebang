<?php

class channelAction {

	public function channel_list() {

		$channelModel = new channelModel();

		$channelModel->getList();

		$_ENV['smarty']->assign( 'list', $channelModel->list );

		$_ENV['smarty']->assign( 'fenye', $channelModel->fenye );

		$_ENV['smarty']->display( 'channel_list' );

	}

	public function edit() {

		$id = $_REQUEST['id'];

		if ( !empty( $id ) ) {

			$channelModel = new channelModel( $id );

			$_ENV['smarty']->assign( 'data', $channelModel->article_info );

			$_ENV['smarty']->assign( 'operation_type', 1 );

			$_ENV['smarty']->display( 'add_channel_info' );

		}
	}


	public function add_channel_info() {

		$_ENV['smarty']->assign( 'operation_type', 0 );

		$_ENV['smarty']->display( 'add_channel_info' );

	}

	public function add_channel_ajax() {

		$channelModel = new channelModel($_REQUEST['id']);

		$channelModel->setArrayValue();

		$channelModel->createAndUpdateData( $_REQUEST['operation_type'] );

	}


}

?>
