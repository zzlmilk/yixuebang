<?php

class shopModel extends BaseModel {

    private $upload_file_path = '/var/www/html/yixuebang/medhelper/public/image/shop/';

    public function __construct($shop_id = 0) {

        parent::__construct();

        if (!empty($shop_id)) {

            $this->shop_id = $shop_id;

            $this->shop_info = M('medhelper_shop')->where("id = " . $shop_id)->find();
        }
    }

    public function getShopTotal(){

        $this->shop_info = M('medhelper_shop')->field('id')->select();

        $this->countTotalPage($this->shop_info);

    }

    public function getShopInfoByPage(){

        $shop_info = M('medhelper_shop')->limit($this->limit)->offset($this->offset)->order('create_time DESC')->select();

        $shop_info_count = count($shop_info);

        if ($shop_info_count > 0) {

            foreach ($shop_info as $key => $value) {

                 switch($value['shop_type']){

                    case '1':

                        $shop_info[$key]['shop_type'] = '电子书';

                        break;

                    case '2':

                        $shop_info[$key]['shop_type'] = '医学高清图';

                        break;

                    default:

                        $shop_info[$key]['shop_type'] = '暂无';
                 }

                 $main_type_info = M('medhelper_main_type')->where("id = ".$value['main_type_id'])->field('main_type_name')->find();

                 $shop_info[$key]['main_type'] = $main_type_info['main_type_name'];
                
                 $branch_type_info = M('medhelper_branch_type')->where("id = ".$value['branch_type_id'])->field('branch_type_name')->find();

                 $shop_info[$key]['branch_type'] = $branch_type_info['branch_type_name'];
            }

            $this->shop_list = $shop_info;
        } else {

            $this->shop_list = array();
        }

    }

    public function getShopList() {
            
        $this->getShopTotal();

        $this->getShopInfoByPage();

        $this->fenye('shop', 'shop_list');
    }

    public function setParams(){

    	$array = array('shop_name','shop_price','shop_describe','main_type_id','branch_type_id','shop_type');

    	foreach($array as $key){

    		$this->set($key,$_REQUEST[$key]);
    	}
    }

    public function createShop(){

        $this->set('create_time',time());

        $this->set('update_time',time());

   		$this->shop_id = M('medhelper_shop')->add($this->field);
    }

    public function updateShop(){

        if($this->field_number > 0){

            $this->set('update_time',time());

            M('medhelper_shop')->where("id = ".$this->shop_id)->save($this->field);
        }

    }

    public function uploadShopFile(){

    	if(!empty($_FILES['logo']['tmp_name'])){

            $suffix = explode('.',$_FILES['logo']['name']);

            $suffix_new = $suffix[count($suffix) - 1];

            $file_name = time().rand(1,9999).'.'.$suffix_new;

            move_uploaded_file($_FILES['logo']['tmp_name'],$this->upload_file_path.'/logo/'.$file_name);

            $this->set('shop_img_url',$file_name);

            $this->set('shop_img_file_name',$_FILES['logo']['name']);
        }

        if(!empty($_FILES['shop_content']['tmp_name'])){

            $suffix = explode('.',$_FILES['shop_content']['name']);

            $suffix_new = $suffix[count($suffix) - 1];

            $file_content_name = time().rand(1,9999).'.'.$suffix_new;

            move_uploaded_file($_FILES['shop_content']['tmp_name'],$this->upload_file_path.'/file/'.$file_content_name);

            $this->set('shop_content',$file_content_name);

            $this->set('shop_content_file_name',$_FILES['shop_content']['name']);
        }
    }

}

?>