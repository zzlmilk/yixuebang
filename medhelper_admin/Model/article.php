<?php

class articleModel extends baseModel {

    public function __construct($id) {

        parent::__construct();

        if (!empty($id)) {

            $this->id = $id;

            $this->article_info = M('medhelper_article')->where("id = " . $id)->field('id,title,auther,article_content,cover_pic_url,summary_info,article_type,table_id')->find();
        }
    }

}

?>