<?php

class drugModel extends BaseModel{

	public function __construct($id = 0) {

        parent::__construct();

        if (!empty($id)) {

            $this->id = $id;

            $this->article_info = M('medhelper_drug')->where("id = " . $id)->find();

            $this->article_info['type'] = M('medhelper_type')->where('id = '.$this->article_info['type_id_1'])->find();

            $this->article_info['type_2'] = M('medhelper_type')->where('id = '.$this->article_info['type_id_2'])->find();

            $this->article_info['type_3'] = M('medhelper_type')->where('id = '.$this->article_info['type_id_3'])->find();

            // $this->article_info['type_4'] = M('medhelper_type')->where('id = '.$this->article_info['type_id_4'])->find();

            $this->article_info['content'] = M('medhelper_article')->where('article_type = 5 and table_id = '.$id)->find();
        }
    }

    public function createAndUpdateData($value){

    	switch($value){

    		case 0:

                $this->set('create_time',time());

    			$this->id = M('medhelper_drug')->add($this->field);

    			break;

    		case 1:

    			M('medhelper_drug')->where("id = ".$this->id)->save($this->field);

    			break;
    	}

        if(!empty($this->id)){

            $create = array(

                'article_content'=>$_REQUEST['article_content'],

                'article_type'=>5,

                'table_id'=>$this->id,

                'update_time'=>time()
            );

            $article_info = M('medhelper_article')->where("article_type = 5 and table_id = ".$this->id)->find();

            if($article_info != NULL){

                M('medhelper_article')->where("article_type = 5 and table_id = ".$this->id)->save($create);

            } else{

                $create['create_time'] = time();

                M('medhelper_article')->add($create);
            }

        }

    }

    public function setArrayValue(){

    	$array = array('type_id_1','type_id_2','type_id_3');

    	foreach($array as $value){

    		$this->set($value,$_REQUEST[$value]);
    	}

        $this->set('update_time',time());
    }

    
    public function getList() {

        $this->getTotal();

        $this->getInfoByPage();

        $this->fenye('drug', 'drug_list');
    }

    public function getTotal() {

        $this->info = M('medhelper_drug')->field('id')->select();

        $this->countTotalPage($this->info);
    }

    public function getInfoByPage() {

        $info = M('medhelper_drug')->limit($this->limit)->offset($this->offset)->select();

        $info_count = count($info);

        if ($info_count > 0) {

            foreach ($info as $key => $value) {

            	$info[$key]['type'] = M('medhelper_type')->where('id = '.$value['type_id_1'])->find();

           	    $info[$key]['type_2'] = M('medhelper_type')->where('id = '.$value['type_id_2'])->find();

                $info[$key]['type_3'] = M('medhelper_type')->where('id = '.$value['type_id_3'])->find();

                // $info[$key]['type_4'] = M('medhelper_type')->where('id = '.$value['type_id_4'])->find();

                $info[$key]['content'] = M('medhelper_article')->where(' article_type = 5 and table_id = '.$value['id'])->find();
            }

            $this->list = $info;
        } else {

            $this->list = array();
        }
    }
}

?>