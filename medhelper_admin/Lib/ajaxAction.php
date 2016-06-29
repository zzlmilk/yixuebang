<?php

class ajaxAction {

    public function getMainType() {

        $belog_type = $_REQUEST['belog_type'];

        if (!empty($belog_type)) {

            $mainTypeModel = new mainTypeModel($belog_type);

            $_ENV['smarty']->assign('data', $mainTypeModel->main_type_list);

            $_ENV['smarty']->assign('name', '商城');

            $_ENV['smarty']->assign('type', $belog_type);

            $_ENV['smarty']->display('main_type_list');
        }
    }

    public function addMainType() {

        $belog_type = $_REQUEST['belog_type'];

        $main_type_name = $_REQUEST['main_type_name'];

        if (!empty($belog_type) && !empty($main_type_name)) {

            $mainTypeModel = new mainTypeModel();

            $mainTypeModel->set('main_type_name', $main_type_name);

            $mainTypeModel->set('belong_column_id', $belog_type);

            $mainTypeModel->createRecord();
        }

        $array = array(
            'res' => 1
        );

        die(json_encode($array));
    }

    public function getBranceType() {

        $main_type_id = $_REQUEST['main_type_id'];

        if (!empty($main_type_id)) {

            $branchTypeModel = new branchTypeModel($main_type_id);

            $_ENV['smarty']->assign('data', $branchTypeModel->branch_type_list);

            $_ENV['smarty']->assign('name', '商城');

            $_ENV['smarty']->assign('type', $main_type_id);

            $_ENV['smarty']->display('branch_type_list');
        }
    }

    public function addBranchType() {

        $id = $_REQUEST['id'];

        $branch_type_name = $_REQUEST['branch_type_name'];

        if (!empty($id) && !empty($branch_type_name)) {

            $branchTypeModel = new branchTypeModel();

            $branchTypeModel->set('branch_type_name', $branch_type_name);

            $branchTypeModel->set('belong_main_type_id', $id);

            $branchTypeModel->createRecord();
        }

        $array = array(
            'res' => 1
        );

        die(json_encode($array));
    }

     public function getType() {

        $belog_type = $_REQUEST['belog_type'];

        $level = $_REQUEST['level'];

        if (!empty($belog_type) && !empty($level)) {

            $typeModel = new typeModel($belog_type, $level);

            $_ENV['smarty']->assign('data', $typeModel->type_list);

            $_ENV['smarty']->assign('name', $typeModel->name);

            $_ENV['smarty']->assign('type', $belog_type);

            $_ENV['smarty']->assign('level', $level);

            $_ENV['smarty']->display('type_list');
        }
    }

    public function add_type() {

        $belog_type = $_REQUEST['belog_type'];

        $level = $_REQUEST['level'];

        if (!empty($belog_type) && !empty($level)) {

            $typeModel = new typeModel($belog_type, $level);

            $_ENV['smarty']->assign('data', $typeModel->type_list);

            $_ENV['smarty']->assign('name', $typeModel->name);

            $_ENV['smarty']->assign('type', $belog_type);

            $_ENV['smarty']->assign('level', $level);

            $_ENV['smarty']->display('add_type');
        }
    }

    public function add_type_ajax(){

        $name = $_REQUEST['name'];

        $type = $_REQUEST['type'];

        $level = $_REQUEST['level'];

        if(!empty($name) && !empty($type) && !empty($level)){

            $typeModel = new typeModel();

            $typeModel->uploadImg();

            $typeModel->set('name',$name);

            $typeModel->set('belong_type',$type);

            $typeModel->set('level',$level);

            $typeModel->createRecord();

        }

        $array = array(
            'res' => 1
        );

        die(json_encode($array));

    }

}

?>