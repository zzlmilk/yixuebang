<?php

class baseModel {

    public $limit = 20;

    public function __construct() {

        $this->request = $_REQUEST;

        if (!empty($_REQUEST['page'])) {

            $this->page = $_REQUEST['page'];

        } else {

            $this->page = 1;
        }

        $this->offset = ($this->page - 1) * $this->limit;
    }

    public function countTotalPage($data) {

        if ($data != NULL) {

            $data_number = count($data);

            $this->total_page = ceil($data_number / $this->limit);
        }
    }

    public function fenye($name, $action) {

        $page = new page($name, $action);

        $this->fenye = $page->coutPage($this->page, $this->total_page);
    }

    public function set($name, $value) {

        if (!empty($name) && !empty($value)) {

            $this->field[$name] = $value;

            $this->field_number = count($this->field);
        }
    }

    public function field($name,$value){

        if(!empty($name) && isset($value)){

            $this->$name = $value;
        }
    }

}

?>
