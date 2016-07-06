<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class HomepageAction extends Action {

    public function index(){

    	 $array = array();

    	 $object1 = new stdClass();

    	 $object1->imgUrl = 'xxxxxxxx';

    	 $object1->linkUrl = 'xxxxxxxx';

    	 $array[] = $object1;

    	 $object1 = new stdClass();

    	 $object1->imgUrl = 'xxxxxxxx';

    	 $object1->linkUrl = 'xxxxxxxx';

    	 $array[] = $object1;


    	 echo json_encode($array);

    	 die;


    	$type_list = M('medhelper_type')->where("belong_type = 1")->select();

    	foreach($type_list as $key=>$value){

    		$type_list[$key]['content'] = M('medhelper_article')->where("article_type = 1 and table_id = ".$value['id'])->order('create_time DESC')->limit(3)->select();

    	}

    	$this->assign('type_list',$type_list);

        $this->display('index');
    }

}
