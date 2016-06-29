<?php

class channelModel extends BaseModel{

	private $upload_file_path = '/var/www/html/yixuebang/medhelper/Public/image/type/';

	public function __construct($id = 0) {

        parent::__construct();

        if (!empty($id)) {

            $this->id = $id;

            $this->article_info = M('medhelper_article')->where("id = " . $id)->find();

            $this->article_info['type'] = M('medhelper_type')->where('id = '.$this->article_info['table_id'])->find();
        }
    }

    public function createAndUpdateData($value){

    	switch($value){

    		case 0:

                $this->set('create_time',time());

    			M('medhelper_article')->add($this->field);

    			break;

    		case 1:

    			M('medhelper_article')->where("id = ".$this->id)->save($this->field);

    			break;
    	}

    }

    public function setArrayValue(){

    	$array = array('title','article_content','summary_info','table_id','article_type');

    	foreach($array as $value){

    		$this->set($value,$_REQUEST[$value]);
    	}

    	$this->uploadImg();

       

        $this->set('update_time',time());

    }

    public function uploadImg(){

        if(!empty($_FILES['cover_pic_url']['tmp_name'])){

            $suffix = explode('.',$_FILES['cover_pic_url']['name']);

            $suffix_new = $suffix[count($suffix) - 1];

            $file_content_name = time().rand(1,9999).'.'.$suffix_new;

            move_uploaded_file($_FILES['cover_pic_url']['tmp_name'],$this->upload_file_path.$file_content_name);

            $this->set('cover_pic_url',$file_content_name);

            $this->set('cover_pic_file_name',$_FILES['cover_pic_url']['name']);
        }
    }


    public function getList() {

        $this->getTotal();

        $this->getInfoByPage();

        $this->fenye('channel', 'channel_list');
    }

    public function getTotal() {

        $this->info = M('medhelper_article')->where('article_type = 1')->field('id')->select();

        $this->countTotalPage($this->info);
    }

    public function getInfoByPage() {

        $info = M('medhelper_article')->where('article_type = 1')->field('id,title,summary_info,table_id,create_time')->limit($this->limit)->offset($this->offset)->select();

        $info_count = count($info);

        if ($info_count > 0) {

            foreach ($info as $key => $value) {

                $type_info = M('medhelper_type')->where('id = '.$value['table_id'])->find();

                $info[$key]['type'] = $type_info['name'];
            }

            $this->list = $info;
        } else {

            $this->list = array();
        }
    }

}

?>