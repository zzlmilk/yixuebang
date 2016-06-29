<?php

class typeModel extends BaseModel {

    private $upload_file_path = '/var/www/html/yixuebang/medhelper/public/image/type/';

    public function __construct($type = 0, $level) {

        if (!empty($type) && !empty($level)) {

            switch ($type) {

                case '1':

                    $this->name = '栏目';

                    break;

                case '2':

                    $this->name = '专科';

                    break;
            }

            $this->type_list = M('medhelper_type')->where("belong_type = " . $type . " and level = " . $level)->field('id,name')->select();
        }
    }

    public function createRecord() {

        if (count($this->field) > 0) {

            M('medhelper_type')->add($this->field);
        }
    }

    public function uploadImg(){

        if(!empty($_FILES['img_file']['tmp_name'])){

            $suffix = explode('.',$_FILES['img_file']['name']);

            $suffix_new = $suffix[count($suffix) - 1];

            $file_content_name = time().rand(1,9999).'.'.$suffix_new;

            move_uploaded_file($_FILES['img_file']['tmp_name'],$this->upload_file_path.$file_content_name);

            $this->set('img_file',$file_content_name);

            $this->set('img_file_name',$_FILES['img_file']['name']);
        }
    }

}

?>