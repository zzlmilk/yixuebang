<?php

class homePageAction {


	public $limit = 5;
    
    public function homepage(){

        $_ENV['smarty']->setDirTemplates('');

        $_ENV['smarty']->setDir('default');
        
        $_ENV['smarty']->display('index');
    }

    public function countPage($finaPage,$limit) {

        if (!empty($finaPage)) {

            $this->resume_totle_page = ceil($finaPage / $limit);
        }
    }


    public function feedBacklists(){

    	if (!empty($_REQUEST['page'])) {

            $current_page = $_REQUEST['page'];
        } else {

            $current_page = 1;
        }

        $min = ($current_page - 1) * $this->limit;

    	$feedBackModel = new feedBackModel();

    	$NoReadFeedBack = $feedBackModel->getlist();

    	if($NoReadFeedBack != NULL){

    		$this->countPage(count($NoReadFeedBack), $this->limit);

	    	$page = new page('homepage', 'feedBacklists');

	        $fenye = $page->coutPage($current_page, $this->resume_totle_page);

	        $feedback_list = array_slice($NoReadFeedBack, $min, $this->limit);

    	} else{

    		$fenye = '';

    		$feedback_list = array();
    	}

    	$_ENV['smarty']->assign('result',$feedback_list);

    	$_ENV['smarty']->assign('fenye',$fenye);

    	$_ENV['smarty']->display('feedBacklists');

    }

    public function feedBacklistsAjax(){

    	$id = $_REQUEST['id'];

    	if(!empty($id)){

    		$update = array();

    		$update['read_type'] = 1;

    		M('employer_feedback')->where("id = ".$id)->save($update);

    	}

    	$this->feedBacklists();

    }
}

?>
