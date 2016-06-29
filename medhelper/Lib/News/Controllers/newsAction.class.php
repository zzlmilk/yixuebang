<?php

class newsAction extends Action {

    public function getNewsListByPage() {

        $page = $_REQUEST['page'];

        $type = $_REQUEST['type'];
        
        if (!empty($page) && !empty($type)) {

            $newsModel = new newsModel();

            $newsModel->getNewsListByPage($page, $type);

            $array = array(
                'news_number' => $newsModel->new_list_number,
                'news_html' => $newsModel->new_list
            );

            die(json_encode($array));
        }
    }

    public function news_list() {

        $type = $_REQUEST['type'];

        if (!empty($type)) {

        	$type_list = M('medhelper_type')->where("belong_type = 1")->select();

            $this->assign('type_list', $type_list);

            $newsModel = new newsModel();

            $newsModel->getNewsListByPage(1, $type);

            $this->assign('news_html', $newsModel->new_list);

            $this->assign('news_type',$type);

            $this->display('news_type_list');
        }
    }

    public function detail() {

        $id = $_REQUEST['id'];

        if (!empty($id)) {

            $newsModel = new newsModel($id);

            $this->assign('info', $newsModel->info);

            $this->display('news_detail');
        }
    }

}

?>