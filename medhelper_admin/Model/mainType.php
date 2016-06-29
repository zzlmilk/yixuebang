<?php

class mainTypeModel extends BaseModel {

    public function __construct($type = 0) {

        if (!empty($type)) {

            $this->main_type_list = M('medhelper_main_type')->where("belong_column_id = " . $type)->field('id,main_type_name')->select();
        }
    }

    public function createRecord(){

    	if(count($this->field) > 0){

    		M('medhelper_main_type')->add($this->field);
    	}

    }

}

?>