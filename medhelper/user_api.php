<?php

$user_array = array();

$user_object = new stdClass();

$user_object->id = 1;

$user_object->user_name ='翟晓平';

$user_object->user_phone = '13524446830';

$user_array[] = $user_object;

$user_object = new stdClass();

$user_object->id = 1;

$user_object->user_name ='翟晓平1234';

$user_object->user_phone = '135244468301';

$user_array[] = $user_object;


echo json_encode($user_array);

?>