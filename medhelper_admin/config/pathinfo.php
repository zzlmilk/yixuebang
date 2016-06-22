<?php


session_start();


if (!empty($_SERVER['PATH_INFO'])) {

    $pathInfo = explode('/', trim($_SERVER['PATH_INFO'], '/'));

    $source = $pathInfo[0];

    $school_array = explode(',', SCHOOL);

    $school_name_array = array('fudan'=>'复旦大学');

    if (in_array($source, $school_array)) {

        if ($source != $_SESSION['source']) {

            $_SESSION['source'] = $source;
        }

       

        $_SESSION['school_name'] = $school_name_array[$_SESSION['source']];;

        $_ENV['DIR'] = $_SESSION['source'];
    } else {

        $_SESSION['source'] = 'default';

        $_ENV['DIR'] = 'default';

        $errorPage = new mainErrorAction();

        $errorPage->error_page();

        die;
    }
} else {


    if (!empty($_REQUEST['source'])) {


        $_SESSION['source'] = $_REQUEST['source'];

        $_ENV['DIR'] = $_REQUEST['source'];

        
    } else {

        $_SESSION['source'] = 'default';

        $_ENV['DIR'] = 'default';

        $errorPage = new mainErrorAction();

        $errorPage->error_page();

        die;
    }
}
?>