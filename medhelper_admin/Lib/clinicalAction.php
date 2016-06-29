<?php

class clinicalAction {

    public function clinical_list() {

        $clinicalModel = new clinicalModel();

        $clinicalModel->getList();

        $_ENV['smarty']->assign('list', $clinicalModel->list);

        $_ENV['smarty']->assign('fenye', $clinicalModel->fenye);

        $_ENV['smarty']->display('clinical_list');
    }

    public function edit() {

        $id = $_REQUEST['id'];

        if (!empty($id)) {

            $clinicalModel = new clinicalModel($id);

            $_ENV['smarty']->assign('data', $clinicalModel->article_info);

            $_ENV['smarty']->assign('operation_type', 1);

            $_ENV['smarty']->display('add_clinical_info');
        }
    }

    public function add_clinical_info() {

        $_ENV['smarty']->assign('operation_type', 0);

        $_ENV['smarty']->display('add_clinical_info');
    }

    public function add_clinical_ajax() {

        $clinicalModel = new clinicalModel($_REQUEST['id']);

        $clinicalModel->setArrayValue();

        $clinicalModel->createAndUpdateData($_REQUEST['operation_type']);
    }

}

?>