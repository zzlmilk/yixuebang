<?php

class configAction {


	public function baiduAccount(){

		$_ENV['smarty']->display('baidu_account');

	}


	public function setAdminPassword(){

		$_ENV['smarty']->display('set_admin_password');

	}


	public function agreement() {

		$agreement_file_content = STATICHTML.'/agreement.html';

		$agreement_html = file_get_contents( $agreement_file_content, $content );

		$_ENV['smarty']->assign( 'agreement_html', $agreement_html );

		$_ENV['smarty']->display( 'agreement' );

	}

	public function saveAgreement() {

		$content  = $_REQUEST['agreement_content'];

		if ( !empty( $content ) ) {

			$agreement_file_content = STATICHTML.'/agreement.html';

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

		$content = STATICHTML.'/introduce.html';

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

			$agreement_file_content = STATICHTML.'/introduce.html';

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

		$content = STATICHTML.'/contact.html';

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

			$agreement_file_content = STATICHTML.'/contact.html';

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

	public function set_password_ajax(){

		$new_password = $_REQUEST['new_password'];

		$repeat_password = $_REQUEST['repeat_password'];

		if($new_password != $repeat_password){

			echo -1;

		} else{

			$user_id = $_SESSION['medhelper_admin_id'];

			$update = array(

				'admin_password'=>md5($new_password)

			);

			M('medhelper_admin')->where("id = ".$user_id)->save($update);

			echo 1;
		}

		die;
	}

}

?>
