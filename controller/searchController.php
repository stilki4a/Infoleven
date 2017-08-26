<?php
function __autoload($className) {
    require_once "../model/" . $className . '.php';
}

session_start ();

    if ($_SESSION ['user']) {
        $user = json_decode($_SESSION['user']);
//        $userId = json_decode($_SESSION ['user'])->id;

//        if ((isset($_GET['Search']) && $_GET['genre'] == 0) && !empty($_GET['search'])) {
        if ($_SERVER ['REQUEST_METHOD'] === 'GET') {
            $term = $_REQUEST;
//            // list all contacts
            $dao = new SearchDAO();
         echo   json_encode( $dao->search($term)) ;
        }


    }