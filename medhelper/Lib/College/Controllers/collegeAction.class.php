<?php

class CollegeAction extends Action {

    public function detail() {

        $id = $_REQUEST['id'];

        if (!empty($id)) {

            $content = M('medhelper_article')->where("article_type = 2 and table_id = " . $id)->find();

            $this->assign('info', $content);

            $this->display('college_detail');
        }
    }

    public function college_list() {

        if (!empty($_REQUEST['college_type'])) {

            $college_type = $_REQUEST['college_type'];
        } else {

            $college_type = 1;
        }


        $college_info = M('medhelper_college')->where("college_type = " . $college_type)->field('distinct prov')->select();

        $this->assign('college_info', $college_info);

        $this->assign('college_type', $college_type);

        $this->display('college_list');
    }

    public function college_detail_list() {

        $prov = $_REQUEST['prov'];

        $college_type = $_REQUEST['college_type'];

        if (!empty($prov) && !empty($college_type)) {

            $college_new_info = array();

            $i = 0;

            $college_info = M('medhelper_college')->where("college_type = " . $college_type . " and prov like '" . $prov . "' ")->field('distinct city')->select();

            foreach ($college_info as $key => $value) {

                $info = M('medhelper_college')->where("college_type = " . $college_type . " and prov like '" . $prov . "' and city like '" . $value['city'] . "' ")->select();

                foreach ($info as $keys => $values) {

                    if ($value['dist'] == -99) {

                        $info[$keys]['city'] = $values['prov'];
                    }

                    $info[$keys]['type'] = M('medhelper_type')->where('id = ' . $values['college_id'])->find();
                }

                $college_info[$key]['list'] = $info;
            }

            $this->assign('college_info', $college_info);

            $this->assign('college_type', $college_type);

            $this->display('college_detail_list');
        }
    }

}

?>