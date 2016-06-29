<?php

class configAction {

	public function agreement() {

		$agreement_file_content = '/var/www/html/medhelper/public/agreement.html';

		$agreement_html = file_get_contents( $agreement_file_content, $content );

		$_ENV['smarty']->assign( 'agreement_html', $agreement_html );

		$_ENV['smarty']->display( 'agreement' );

	}

	public function saveAgreement() {

		$content  = $_REQUEST['agreement_content'];

		if ( !empty( $content ) ) {

			$agreement_file_content = '/var/www/html/medhelper/public/agreement.html';

			file_put_contents( $agreement_file_content, $content );

			$array = array(

				'res'=>1,

				'content'=>$content
			);
		} else {

			$array = array(

				'res'=>-1,

				'content'=>'no params'
			);
		}

		echo json_encode( $array );

		die;

	}

	public function introduce() {

		$content = '/var/www/html/medhelper/public/introduce.html';

		if ( file_exists( $content ) ) {

			$html = file_get_contents( $content, $content );
		} else {

			$html = '';
		}

		$_ENV['smarty']->assign( 'html', $html );

		$_ENV['smarty']->display( 'introduce' );

	}

	public function saveIntroduce() {

		$content  = $_REQUEST['content'];

		if ( !empty( $content ) ) {

			$agreement_file_content = '/var/www/html/medhelper/public/introduce.html';

			file_put_contents( $agreement_file_content, $content );

			$array = array(

				'res'=>1,

				'content'=>$content
			);
		} else {

			$array = array(

				'res'=>-1,

				'content'=>'no params'
			);
		}

		echo json_encode( $array );

		die;
	}

	public function contact(){

		$content = '/var/www/html/medhelper/public/contact.html';

		if ( file_exists( $content ) ) {

			$html = file_get_contents( $content, $content );
		} else {

			$html = '';
		}

		$_ENV['smarty']->assign( 'html', $html );

		$_ENV['smarty']->display( 'contact' );
	}

	public function saveContact() {

		$content  = $_REQUEST['content'];

		if ( !empty( $content ) ) {

			$agreement_file_content = '/var/www/html/medhelper/public/contact.html';

			file_put_contents( $agreement_file_content, $content );

			$array = array(

				'res'=>1,

				'content'=>$content
			);
		} else {

			$array = array(

				'res'=>-1,

				'content'=>'no params'
			);
		}

		echo json_encode( $array );

		die;
	}

}

?>
