<?php

class SymptomAction extends Action {

    public function detail() {

        $id = $_REQUEST['id'];

        if (!empty($id)) {

            $content = M('medhelper_article')->where("article_type = 3 and table_id = " . $id)->find();

            $this->assign('info', $content);

            $this->display('sysmptom_detail');
        }
    }

    public function symptom_list() {

        $data = M('medhelper_type')->where("belong_type = 3 and level = 1")->select();

        $this->assign('data', $data);

        $this->display('symptom_list');
    }

    public function symptom_detail_list() {

        if (!empty($_REQUEST['id'])) {

            $data = M('medhelper_symptom')->where("type_1_id = " . $_REQUEST['id'])->field('distinct type_2_id')->select();

            if (count($data) > 0) {

                foreach ($data as $key => $value) {

                    $type_2_info = M('medhelper_type')->where("id = " . $value['type_2_id'])->find();

                    $type_3_info_list = M('medhelper_symptom')->where("type_2_id = " . $type_2_info['id'])->select();

                    foreach ($type_3_info_list as $key1 => $value1) {

                        $type_3_info = M('medhelper_type')->where("id = " . $value1['type_3_id'])->find();

                        $type_3_info_list[$key1]['type_3_info'] = $type_3_info;
                    }

                    $data[$key]['type_2'] = $type_2_info;

                    $data[$key]['type_3'] = $type_3_info_list;
                }
            } else{

            	$data = array();
            }


            $this->assign('data', $data);

            $this->display('symptom_detail_list');
        }
    }

}

?>