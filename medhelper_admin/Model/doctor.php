<?php

class doctorModel extends BaseModel {

    public function __construct($id = 0) {

        parent::__construct();

        if (!empty($id)) {

            $this->id = $id;

            $this->article_info = M('medhelper_doctor')->where("id = " . $id)->find();

            $this->article_info['patient_time'] = explode(',',$this->article_info['patient_time']);

            $this->article_info['type'] = M('medhelper_type')->where('id = ' . $this->article_info['college_id'])->find();

            $this->article_info['content'] = M('medhelper_article')->where('table_id = ' . $id)->find();
        }
    }

    public function createAndUpdateData($value) {

        switch ($value) {

            case 0:

                $this->set('create_time', time());

                $this->id = M('medhelper_doctor')->add($this->field);

                break;

            case 1:

                M('medhelper_doctor')->where("id = " . $this->id)->save($this->field);

                break;
        }

        if (!empty($this->id)) {

            $create = array(
                'article_content' => $_REQUEST['article_content'],
                'article_type' => 4,
                'table_id' => $this->id,
                'update_time' => time()
            );

            $article_info = M('medhelper_article')->where("article_type = 4 and table_id = " . $this->id)->find();

            if ($article_info != NULL) {

                M('medhelper_article')->where("article_type = 4 and table_id = " . $this->id)->save($create);
            } else {

                $create['create_time'] = time();

                M('medhelper_article')->add($create);
            }
        }
    }

    public function setArrayValue() {

        $array = array('doctor_name', 'hospital_name', 'doctor_type', 'patient_time', 'college_id');

        foreach ($array as $value) {

            $this->set($value, $_REQUEST[$value]);
        }

        $this->set('update_time', time());
    }

    public function getList() {

        $this->getTotal();

        $this->getInfoByPage();

        $this->fenye('doctor', 'doctor_list');
    }

    public function getTotal() {

        $this->info = M('medhelper_doctor')->field('id')->select();

        $this->countTotalPage($this->info);
    }

    public function getInfoByPage() {

        $info = M('medhelper_doctor')->field('id,doctor_name,hospital_name,doctor_type,college_id,create_time')->limit($this->limit)->offset($this->offset)->select();

        $info_count = count($info);

        if ($info_count > 0) {

            foreach ($info as $key => $value) {

                $type_info = M('medhelper_type')->where('id = ' . $value['college_id'])->find();

                $info[$key]['patient_time'] = explode(',',$value['patient_time']);

                $info[$key]['type'] = $type_info['name'];

                $info[$key]['content'] = M('medhelper_article')->where(' article_type = 2 and table_id = ' . $value['id'])->find();
            }

            $this->list = $info;
        } else {

            $this->list = array();
        }
    }

}

?>