<?php
function __autoload($className) {
    require_once "../model/" . $className . '.php';
}

//if (session_status() == PHP_SESSION_NONE) {
//    session_start();
//}

	if (isset($_SESSION['user'])) {

			$user = json_decode($_SESSION['user']);
			var_dump($_SESSION['user']);
			include '../view/home.php';
//        header('Location:../view/home.php');
	}
	else
		header('Location:../view/index.php');
