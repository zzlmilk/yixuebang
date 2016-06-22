<?php

include 'include.php';


if (!empty($_SESSION['medhelper_admin_id']) && $_SESSION['medhelper_admin_id'] > 0) {
	
    $pageController = new homePageAction();

    $pageController->homepage();
} else {

    $pageController = new loginAction();

    $pageController->login();
}
?>
