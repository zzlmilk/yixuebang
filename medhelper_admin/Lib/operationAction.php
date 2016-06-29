<?php

class operationAction {


	public function operation_list() {

        $operationModel = new operationModel();

        $operationModel->getList();

        $_ENV['smarty']->assign('list', $operationModel->list);

        $_ENV['smarty']->assign('fenye', $operationModel->fenye);

        $_ENV['smarty']->display('operation_list');
    }

    public function edit() {

        $id = $_REQUEST['id'];

        if (!empty($id)) {

            $operationModel = new operationModel($id);

            $_ENV['smarty']->assign('data', $operationModel->article_info);

            $_ENV['smarty']->assign('operation_type', 1);

            $_ENV['smarty']->display('add_operation_info');
        }
    }

    public function add_operation_info() {

        $_ENV['smarty']->assign('operation_type', 0);

        $_ENV['smarty']->display('add_operation_info');
    }

    public function add_operation_ajax() {

        $operationModel = new operationModel($_REQUEST['id']);

        $operationModel->setArrayValue();

        $operationModel->createAndUpdateData($_REQUEST['operation_type']);
    }


}


?>