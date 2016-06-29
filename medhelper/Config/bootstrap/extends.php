<?php

ob_start();

date_default_timezone_set('PRC');

function shuffle_assoc($list) {   
if (!is_array($list)) return $list;   
   
$keys = array_keys($list);   
shuffle($keys);   
$random = array();   
foreach ($keys as $key)   
$random[$key] = shuffle_assoc($list[$key]);   
   
return $random;   
}   

function replaceStringRed($keyword_string){

    $keyword_html_array = $keyword_array = array();

    if(!empty($keyword_string)){

        $keyword_array = explode(' ',$keyword_string);

        $keyword_array = array($keyword_array[0]);

        if(count($keyword_array) > 0){

            foreach($keyword_array as $key=>$keyword){

                if(!empty($keyword)){

                    $keyword_html_array[$key] = '<span style="color:red">'.$keyword.'</span>';

                }

            }

        }
    }

    $array['keyword'] = $keyword_array;

    $array['keyword_html'] = $keyword_html_array;

    return $array;

}


function trimall($str) {//删除空格
    $qian = array(" ", "　", "\t", "\n", "\r");
    $hou = array("", "", "", "", "");
    return str_replace($qian, $hou, $str);
}

function get_word_content($file, $url) {

    $fields['file'] = '@' . $file;

    $fields['name'] = '1';
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_VERBOSE, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/4.0 (compatible;)");
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
    $content = curl_exec($ch);
    if ($error = curl_error($ch)) {
        die($error);
    }
    curl_close($ch);
    return $content;
}

function formatTime($string) {

    if (!empty($string)) {

        $result = strstr($string, '/');

        $new_string = '';

        if ($result != false) {

            $time = explode('/', $string);

            $new_string = $time[0] . '年' . $time[1] . '月';
        } else {

            $new_string = $string;
        }

        return $new_string;
    }
}

function setShareWexinUrl($id, $type) {

    if (!empty($id)) {

        return WebSiteUrl . '/weixin/index?user_id=' . $id . '&type=' . $type;
    }
}

/**
 *  自动加载 配置文件
 * @param type $filePath  路径地址
 * 2013-8-6 by zxp
 */
function fileRead($filePath) {

    if ($handle = opendir($filePath)) {
        /* to include all files that in the class folder what a way to include classes!!! */
        while (false !== ($file = readdir($handle))) {
            $fileName = $filePath . $file;
            if ($file != '.' && $file != '..' && $file != '.svn' && $file != '.DS_Store' && $file != 'Tpl') {
                if (is_file($fileName)) {
                    include_once($fileName);
                } else if (is_dir($fileName)) {
                    fileRead($fileName . '/');
                }
            }
        }
        closedir($handle);
    }
}

/**
 * 组装成json  如错误代码 则直接返回错误代码的json
 * 判断传进来的值 是否为数组 如不为数组 则定义数组类型
 * 调用setErrorrCode 函数 判断是否有PHP 错误 如有PHP 错误 则优先把错误代码设置为PHP错误代码
 * 调用getErrorInfo 函数 获取该错误代码的提示内容
 * 返回json
 */
function echoJson($jsonArray = null, $jsonType = 0, $type = 'json') {

    $logs = API_LOG_DIR . date("Y_m_d") . '.log';

    if (count($jsonArray) == 0) {
        $jsonArray = array();
    }

    if ($jsonType != 0) {

        $encodeJsonEncode = json_encode($jsonArray);

        $jsonArray = json_decode($encodeJsonEncode);

        $encodeJsonEncode = json_encode(json_filter($jsonArray));
    } else {

        $encodeJsonEncode = json_encode($jsonArray);
    }


    log_write($encodeJsonEncode, $logs, 'RETURN');

    switch (strtoupper($type)) {
        case 'JSON' :
            // 返回JSON数据格式到客户端 包含状态信息
            header('Content-Type:application/json; charset=utf-8');

            exit($encodeJsonEncode);

            break;
    }
}

/**
 * 去除数组中的空值
 *  $var 为 传进来的数组
 */
function filter($array) {
    $newArray = array();
    foreach ($array as $v) {
        if ($v != '') {
            $newArray[] = $v;
        }
    }
    return $newArray;
}

/**
 * 对象数组排序
 */

/**
 *  php:sorted object in array according to a object's field.
 * 
 * @param array $List
 * @param var $by sort filed
 * @param var $order desc/asc
 * @param var $type sort type（num/string）
 * @return array
 */
function ArraySort(array $List, $by, $order = '', $type = '') {
    if (empty($List))
        return $List;
    foreach ($List as $key => $row) {
        //    $sortby[$key] = $row[$by] ;
        $sortby[$key] = $row->$by;
    }
    if ($order == "DESC") {
        if ($type == "num") {
            array_multisort($sortby, SORT_DESC, SORT_NUMERIC, $List);
        } else {
            array_multisort($sortby, SORT_DESC, SORT_STRING, $List);
        }
    } else {
        if ($type == "num") {
            array_multisort($sortby, SORT_ASC, SORT_NUMERIC, $List);
        } else {
            array_multisort($sortby, SORT_ASC, SORT_STRING, $List);
        }
    }
    return $List;
}

/**
 *  错误日志
 */
function log_write($msg, $log_file, $type, $functionname = 'null') {
    if (LOG_STATE == 0) {
        if ($log_file == "") {
            return false;
        }

        $type = ($type != '') ? $type : 'DEFAULT';

        $now = date("M d H:i:s ");


        /**
         *  判断日志文件大小是否超过预设的文件大小
         */
        if (is_file($log_file) && floor(LOG_FILE_SIZE) <= filesize($log_file)) {

            rename($log_file, dirname($log_file) . '/' . time() . '-' . basename($log_file));
        }
        $message = $now . '[' . $type . ']' . '_' . $functionname . '_' . get_client_ip() . '_' . $_SERVER['REQUEST_URI'] . "\r\n" . $msg . "\r\n";

        $fp = fopen($log_file, "a");
        flock($fp, LOCK_EX);
        fputs($fp, $message);
        fclose($fp);
        return TRUE;
    }
}

/**
 * 创建文件夹目录  
 * $path string  文件夹目录  如/home/wwwroot/cloud/name 
 */
function mkdirPath($path) {
    $new = @iconv("UTF-8", "GBK", $path);
    if (!file_exists($new)) {
        mkdir($new, 0777);
    }
}

/**
 * 通过经纬度 和 距离 计算出 4个点
 * @param int $latitude  
 * @param int $longitude
 * @param int $raidus  距离  单位为 千米
 * @return array 
 */
function getAround($latitude, $longitude, $raidus) {
    $result = array();
    $degree = (24901 * 1609) / 360.0;
    $raidusMile = $raidus;
    $dpmLat = 1 / $degree;
    $radiusLat = $dpmLat * $raidusMile;
    $mpdLng = $degree * cos($latitude * (3.14159265 / 180));
    $dpmLng = 1 / $mpdLng;
    $radiusLng = $dpmLng * $raidusMile;

    $minLat = $latitude - $radiusLat;
    $maxLat = $latitude + $radiusLat;

    $minLng = $longitude - $radiusLng;
    $maxLng = $longitude + $radiusLng;


    $result['minLat'] = $minLat;
    $result['maxLat'] = $maxLat;
    $result['minLng'] = $minLng;
    $result['maxLng'] = $maxLng;

    return $result;
}

/**
 * 根据经纬度计算距离
 * @param float $lng1
 * @param float $lat1
 * @param float $lng2
 * @param float $lat2
 * @return int
 */
function getdistance($lng1, $lat1, $lng2, $lat2) {//
    //将角度转为狐度 
    $array = array();
    $radLat1 = deg2rad($lat1);
    $radLat2 = deg2rad($lat2);
    $radLng1 = deg2rad($lng1);
    $radLng2 = deg2rad($lng2);
    $a = $radLat1 - $radLat2; //两纬度之差,纬度<90
    $b = $radLng1 - $radLng2; //两经度之差纬度<180
    $s = 2 * asin(sqrt(pow(sin($a / 2), 2) + cos($radLat1) * cos($radLat2) * pow(sin($b / 2), 2))) * 6378.137;
    if ($s < 1) {
        $m = $s * 1000;
        $array['val'] = $m;
        $array['type'] = 1;
    } else {
        $array['val'] = $s;
        $array['type'] = 0;
    }
    return $array;
}

/**
 * 获取客户端IP地址
 * @param integer $type 返回类型 0 返回IP地址 1 返回IPV4地址数字
 * @return mixed
 */
function get_client_ip($type = 0) {
    $type = $type ? 1 : 0;
    static $ip = NULL;
    if ($ip !== NULL)
        return $ip[$type];
    if (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $arr = explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']);
        $pos = array_search('unknown', $arr);
        if (false !== $pos)
            unset($arr[$pos]);
        $ip = trim($arr[0]);
    }elseif (isset($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (isset($_SERVER['REMOTE_ADDR'])) {
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    // IP地址合法验证
    $long = sprintf("%u", ip2long($ip));
    $ip = $long ? array($ip, $long) : array('0.0.0.0', 0);
    return $ip[$type];
}

/**
 * 自动加载 相关配置文件
 * @param type $dirName  为 引入的文件夹名称
 * @param type $fileKey  当在同一个文件夹 有2个内容 需要引入  将数组定义成二维数组时 为同一个文件夹
 */
function include_path_file($dirName, $fileKey) {
    $filePath = '';
    if (is_array($dirName)) {
        foreach ($dirName as $dirValue) {
            if (!empty($dirValue) && $dirValue != '') {
                
                $filePath = ROOT_DIR . '/' . $fileKey . '/' . $dirValue . '/';
                //echo $filePath.'<br />';
                fileRead($filePath);
            }
        }
    } else {
        $filePath = ROOT_DIR . '/' . $dirName . '/';

        fileRead($filePath);
    }
}

/**
 * 传递数据 
 *  $url  为接口调用的url 地址  
 *  $method  为传递的方式  POST  GEt
 *  $data   当method 为post时  传值为array
 */
function transferData($url, $method, $data = '') {

    switch ($method) {

        case 'post':

            $output = curlPost($url, $data);

            break;

        case 'get':

            $output = curlGet($url);

            break;
    }

    return $output;
}

function sendMessageToLouSi($phone, $message) {

    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, "http://sms-api.luosimao.com/v1/send.json");

    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($ch, CURLOPT_HEADER, FALSE);

    curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
    curl_setopt($ch, CURLOPT_USERPWD, 'api:key-4d61d85438891131fff051592bac6cb4');

    curl_setopt($ch, CURLOPT_POST, TRUE);
    curl_setopt($ch, CURLOPT_POSTFIELDS, array('mobile' => $phone, 'message' => $message));

    $res = curl_exec($ch);

    curl_close($ch);


    return $res;
}

function curlPost($url, $post = null, $options = array(), $headerArr = array()) {

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headerArr);  //构造IP
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
    $result = curl_exec($ch);
    curl_close($ch);

    return $result;
}

function curlGet($url, $headerArr = array()) {

    $defaults = array(
        CURLOPT_URL => $url,
        CURLOPT_HEADER => $headerArr,
        CURLOPT_RETURNTRANSFER => TRUE,
        CURLOPT_TIMEOUT => 14,
        CURLOPT_FOLLOWLOCATION => 1
    );

    $ch = curl_init();

    curl_setopt_array($ch, $defaults);
    if (!$result = curl_exec($ch)) {
        trigger_error(curl_error($ch));
    }

    curl_close($ch);

    return $result;
}

//设置用户session

function set_user_session($info) {

    $_SESSION['user'] = $info;
}

//加载模块
function U($pathinfo, $var = '', $model = 0) {

    // $info = pathinfo($pathinfo);
    // $action = $info['basename'];
    // $module = $info['dirname'];
    // $class_strut = explode('/', $module);
    //$jumpUrl = WebSiteUrl . '?g=' . $class_strut[0] . '&a=' . $class_strut[1] . '&v=' . $action;

    if (!empty($_ENV['url'])) {

        $url = $_ENV['url'];
    } else {

        $url = WebSiteUrl;
    }

    $jumpUrl = $url . '/' . $pathinfo;

    if (count($var) > 0 && is_array($var)) {

        $jumpUrl .='?';

        $array = array();

        foreach ($var as $k => $v) {
            $array[] = $k . '=' . $v;
        }

        if (count($array) > 1) {

            $fields = implode('&', $array);
        } else {

            $fields = implode('', $array);
        }

        $string = '';

        $string.=$fields;

        $jumpUrl.=$string;
    }

    if (is_string($var) && $var != NULL) {

        $jumpUrl .='?';

        $jumpUrl.='&' . $var;
    }
    if ($model == 0) {



        echo '<script>window.location.href="' . $jumpUrl . '"</script>';

        die;
    } else {

        return $jumpUrl;
    }
}

/**
 * 远程调用模块的操作方法 URL 参数格式[分组/]模块/操作
 * @param string $url 调用地址
 * @param array $vars 调用参数 数组 
 * @return mixed
 */
function R($url, $sorce, $vars = array()) {
    $info = pathinfo($url);


    $action = $info['basename'];
    $module = $info['dirname'];
    $class = A($module, $sorce);
    if ($class) {
        return call_user_func_array(array(&$class, $action), $vars);
    } else {
        return false;
    }
}

/**
 * 初始化类名
 * @param type $module
 * @param type $ext
 * @param type $file
 * @return class
 */
function A($module, $sorce, $ext = '.class.php', $file = 'Controller') {
    $class_strut = explode('/', $module);
    $class = str_replace(array('.', '#'), array('/', '.'), $module);
    $class = substr_replace($class, '', 0, strlen($class_strut[0]) + 1);
    $baseUrl = ROOT_DIR . 'Controllers/' . ucfirst($sorce) . '/';
    $classfile = $baseUrl . $class . $file . $ext;

    if (file_exists($classfile)) {

        require_once $classfile;
        $class = basename($module . $file);
        $class = new $class();
        return $class;
    }
}

/**
 * 验证手机
 */
function checkMobile($phone) {

    if (preg_match("/1[3458]{1}\d{9}$/", $phone)) {

        return true;
    } else {

        return false;
    }
}

/**
 * 将电话 修改为星号
 */
function phoneStart($phone) {

    $new_phone = substr_replace($phone, '*****', 3, 5);

    return $new_phone;
}

/**
 * 初始化  调用文件
 */
function P($name, $ext = 'Api', $subit = '.class.php') {

    static $_action = array();


    $classname = $name . $ext . $subit;



    $classfile = LIB . MODULE_DIR_NAME . '/Api/' . $classname;

    $mainClassName = 'main' . $name . 'Api';



    if (isset($_action[$name])) {

        return $_action[$name];
    }


    if (file_exists($classfile)) {

        require_once $classfile;


        $name = $name . $ext;


        $class = new $name ();
    } else {

        $class = new $mainClassName();
    }

    $_action[$name] = $class;

    return $class;
}

function M($table_name) {

    $record = new ActiveRecord();

    $record->table_name = $table_name;

    return $record;
}

function funcemail($str) {//邮箱正则表达式
    return (preg_match('/^[_.0-9a-z-a-z-]+@([0-9a-z][0-9a-z-]+.)+[a-z]{2,4}$/', $str)) ? true : false;
}

function formatArrayToParams($array) {

    if (is_array($array)) {

        $string = '';

        $key = 0;

        if (count($array) > 0) {

            foreach ($array as $k => $v) {

                if ($key == 0) {

                    $string.=$k . '=' . $v;
                } else {
                    $string.='&' . $k . '=' . $v;
                }

                $key++;
            }
        }

        return $string;
    }
}

function authcode($string, $operation = 'DECODE', $key = '', $expiry = 0) {

    if ($operation == 'DECODE') {

        $string = str_replace('|a|', '+', $string);

        $string = str_replace('|b|', '&', $string);

        $string = str_replace('|c|', '/', $string);
    }

    $ckey_length = 4;

    $key = md5($key ? $key : 'livcmsencryption ');

    $keya = md5(substr($key, 0, 16));

    $keyb = md5(substr($key, 16, 16));

    $keyc = $ckey_length ? ($operation == 'DECODE' ? substr($string, 0, $ckey_length) : substr(md5(microtime()), -$ckey_length)) : '';

    $cryptkey = $keya . md5($keya . $keyc);

    $key_length = strlen($cryptkey);

    $string = $operation == 'DECODE' ? base64_decode(substr($string, $ckey_length)) : sprintf('%010d', $expiry ? $expiry + time() : 0) . substr(md5($string . $keyb), 0, 16) . $string;

    $string_length = strlen($string);

    $result = '';

    $box = range(0, 255);

    $rndkey = array();

    for ($i = 0; $i <= 255; $i++) {

        $rndkey[$i] = ord($cryptkey[$i % $key_length]);
    }

    for ($j = $i = 0; $i < 256; $i++) {

        $j = ($j + $box[$i] + $rndkey[$i]) % 256;

        $tmp = $box[$i];

        $box[$i] = $box[$j];

        $box[$j] = $tmp;
    }

    for ($a = $j = $i = 0; $i < $string_length; $i++) {

        $a = ($a + 1) % 256;

        $j = ($j + $box[$a]) % 256;

        $tmp = $box[$a];

        $box[$a] = $box[$j];

        $box[$j] = $tmp;

        $result .= chr(ord($string[$i]) ^ ($box[($box[$a] + $box[$j]) % 256]));
    }

    if ($operation == 'DECODE') {

        if ((substr($result, 0, 10) == 0 || substr($result, 0, 10) - time() > 0) && substr($result, 10, 16) == substr(md5(substr($result, 26) . $keyb), 0, 16)) {

            return substr($result, 26);
        } else {

            return '';
        }
    } else {

        $ustr = $keyc . str_replace('=', '', base64_encode($result));

        $ustr = str_replace('+', '|a|', $ustr);

        $ustr = str_replace('&', '|b|', $ustr);

        $ustr = str_replace('/', '|c|', $ustr);

        return $ustr;
    }
}

function uploadPic($path, $tmpName) {

    if (!empty($path) && !empty($tmpName)) {

        move_uploaded_file($tmpName, $path);
    }
}

function getMillisecond() {
    list($t1, $t2) = explode(' ', microtime());
    return (float) sprintf('%.0f', (floatval($t1) + floatval($t2)) * 1000);
}

function age($YTD) {
    $YTD = strtotime($YTD); //int strtotime ( string $time [, int $now ] )
    $year = date('Y', $YTD);
    if (($month = (date('m') - date('m', $YTD))) < 0) {
        $year++;
    } else if ($month == 0 && date('d') - date('d', $YTD) < 0) {
        $year++;
    }
    return date('Y') - $year;
}

function getUserId() {

    if (!empty($_SESSION['user_info']['user_id'])) {

        $userModel = new userModel();

        $userModel->getUserInfoByAccountId($_SESSION['user_info']['user_id']);

        // if ($userModel->company_id > 0) {
        //     $user_id = $userModel->id;
        // } else {
        //     $user_id = 2;
        // }

        $user_id = $userModel->id;
    } else{
        $user_id = 0;
    }

    return $user_id;
}

function countPage($finaPage, $limit) {

    if (!empty($finaPage)) {

        $totle_page = ceil($finaPage / $limit);
    } else {

        $totle_page = 0;
    }

    return $totle_page;
}

function getDictInfo($arr) {

    if (!empty($arr['name']) && !empty($arr['id'])) {

        $id = $arr['id'];

        switch ($arr['name']) {

            case 'userInfo':

                $data = M('employer_account')->where('id = ' . $id)->find();

                $name = $data['family_name'] . $data['given_name'];

                break;

            case 'dict_business_trips_id':

                $data = M('dict_business_trips')->where('id = ' . $id)->db(1)->find();

                $name = $data['business_trip'];

                break;

            case 'dict_company_performance_bonus_id':

                $data = M('dict_company_performance_bonus')->where('id = ' . $id)->db(1)->find();

                $name = $data['name'];

                break;

            case 'dict_social_security_payment_id':

                $data = M('dict_social_security_payment')->where('id = ' . $id)->db(1)->find();

                $name = $data['classify'];

                break;


            case 'dict_social_security_payment_number_id':

                $data = M('dict_social_security_payment_number')->where('id = ' . $id)->db(1)->find();

                $name = $data['name'];

                break;

            case 'paidannual':

                $data = M('dict_paid_annual_leave')->where('id = ' . $id)->db(1)->find();

                $name = $data['name'];

                break;


            case 'laborRelation':

                $data = M('dict_labor_relations')->where('id = ' . $id)->db(1)->find();

                $name = $data['labor_relation'];

                break;


            case 'marry':

                $data = M('dict_marries')->where('id = ' . $id)->db(1)->find();

                $name = $data['marry'];

                break;

            case 'workyear':

                if (!empty($arr['id'])) {

                    $name = str_replace('年', '', $arr['id']) . '年经验';
                } else {

                    $name = '应届毕业生';
                }

                break;

            case 'workNature':

                $data = M('dict_work_natures')->where("id = " . $arr['id'])->db(1)->find();

                $name = $data['nature'];

                break;

            case 'sex':

                $data = M('dict_sexes')->where("id = " . $arr['id'])->db(1)->find();

                $name = $data['sex'];

                break;

            case 'industry':

                if ($arr['id'] == '-1') {

                    $name = '其他';
                } else {

                    $data = M('dict_industry')->where("hirelib_industry_id = " . $arr['id'])->db(1)->find();

                    $name = $data['hirelib_industry_name'];
                }

                break;

            case 'industryFuntion':

                $data = M('dict_industry_info')->where("industry_info_id = " . $arr['id'])->db(1)->find();

                $name = $data['industry_broad_name'];

                break;

            case 'workexperience':

                $data = M('dict_hirelib_work_experience')->where("hirelib_work_experience_id = " . $arr['id'])->db(1)->find();

                $name = $data['hirelib_work_experience_name'];

                break;

            case 'salaryMonth':

                $data = M('dict_months_basic_salaries')->where("id = " . $arr['id'])->db(1)->find();

                $name = $data['name'];

                break;

            case 'salary':

                $data = M('dict_hirelib_compensation')->where("hirelib_compensation_id = " . $id)->db(1)->find();

                $name = $data['hirelib_compensation_name'];

                break;

            case 'education':

                $data = M('dict_hirelib_education')->where("hirelib_education_id = " . $id)->db(1)->find();

                $name = $data['education_name'];

                break;

            case 'workplace':

                $data = M('dict_work_places')->where('id = ' . $id)->db(1)->find();

                $name = $data['work_place'];

                break;

            case 'salaryString':

                $array = explode('-', $id);

                $name = $array[0];

                break;

            case 'worktime':

                $data = M('dict_work_times')->where('id = ' . $id)->db(1)->find();

                $name = $data['work_time'];

                break;


            case 'salaryString1':

                $array = explode('-', $id);

                $name = $array[1];

                if (!empty($name)) {

                    return $name;
                } else {

                    return '';
                }

                break;

            case 'company_scale':

                switch ($id) {

                    case '1':

                        $name = '少于15人';

                        break;

                    case '2':

                        $name = '15-50人';

                        break;

                    case '3':

                        $name = '50-150人';

                        break;

                    case '4':

                        $name = '150-500人';

                        break;

                    case '5':

                        $name = '500人-2000人';

                        break;

                    case '6':

                        $name = '大于2000人';

                        break;
                }
        }

        if (!empty($name)) {

            return $name;
        } else {

            return '';
        }
    } else {

        switch ($arr['name']) {

            case 'salaryString':

                $name = '';

                break;

            case 'salaryString1':

                $name = '';

                break;

            case 'workyear':

                $name = '应届毕业生';

                break;

            default:

                $name = '无';
        }

        return $name;
    }
}

function imageExist($arr) {

    $filePath = SAVEEMPLOYERLOGO . '/' . $arr['file'] . '/' . $arr['name'];

    if (file_exists($filePath)) {

        $image_url = SERVICEURL . '/img/' . $arr['file'] . '/' . $arr['name'];

        return $image_url;
    } else {

        return '';
    }
}

function checkPassword($password) {

    if (!empty($password)) {

        $n = preg_match_all("/^[a-zA-Z\d_@#|!]{6,}$/", $password, $array);

        if (!empty($array[0])) {

            return 1;
        } else {

            return 0;
        }
    }
}

function arrayUnique($array) {

    $newArray = array();

    if (count($array) > 0) {

        foreach ($array as $key => $value) {

            $newArray[] = $value['resume_id'];
        }
    }

    $newArray = array_unique($newArray);

    return $newArray;
}

function diffDate($date1, $date2) {
    if (strtotime($date1) > strtotime($date2)) {
        $tmp = $date2;
        $date2 = $date1;
        $date1 = $tmp;
    }

    $date1 = str_replace('-','/',$date1);

    $date2 = str_replace('-','/',$date2);

    list($Y1, $m1, $d1) = explode('/', $date1);
    list($Y2, $m2, $d2) = explode('/', $date2);
    $y = $Y2 - $Y1;
    $m = $m2 - $m1;
    $d = $d2 - $d1;
    if ($d < 0) {
        $d+=(int) date('t', strtotime("-1 month $date2"));
        $m--;
    }
    if ($m < 0) {
        $m+=12;
        $y--;
    }
    return array('year' => $y, 'month' => $m, 'day' => $d);
}


function assoc_unique($arr, $key) {
    $tmp_arr = array();
    foreach ($arr as $k => $v) {
        if (in_array($v[$key], $tmp_arr)) {//搜索$v[$key]是否在$tmp_arr数组中存在，若存在返回true
            unset($arr[$k]);
        } else {
            $tmp_arr[] = $v[$key];
        }
    }
    sort($arr); //sort函数对数组进行排序
    return $arr;
}

?>
