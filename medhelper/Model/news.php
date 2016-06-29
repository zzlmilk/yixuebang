<?php

class newsModel {

    public function __construct($id = 0) {

        if (!empty($id)) {

            $this->id = $id;

            $this->info = M('medhelper_article')->where("id = " . $id)->find();

            $this->info['type'] = M('medhelper_type')->where('id = ' . $this->info['table_id'])->find();
        }
    }

    public function getNewsListByPage($page,$type) {

        if (!empty($page) && !empty($type)) {

            $offset = ($page - 1) * 20;

            $info = M('medhelper_article')->where("article_type = 1 and table_id = ".$type)->limit(20)->offset($offset)->select();

            $action = new Action();

            $action->setDisplayDir('news');

            $action->assign('info', $info);

            $this->new_list = $action->fetch('news_list');

            $this->new_list_number = count($info);
        }
    }

    public function addReadNumber(){

        if(!empty($this->id)){

            $update = array(

                'read_number'=>$this->info['read_number'] + 1,

            );

            M('medhelper_article')->where("id = " . $this->id)->save($update);
        }

    }

}

?>