<?php

class branchTypeModel extends BaseModel{


	public function __construct($id = 0) {

        if (!empty($id)) {

            $this->branch_type_list = M('medhelper_branch_type')->where("belong_main_type_id = " . $id)->field('id,branch_type_name')->select();
        }
    }

    public function createRecord(){

    	if(count($this->field) > 0){

    		M('medhelper_branch_type')->add($this->field);
    	}

    }


}

?>