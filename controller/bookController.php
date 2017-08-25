<?php
function __autoload($className) {
    require_once "../model/" . $className . '.php';
}

session_start ();


if ($_SESSION ['user']) {
    try{
        $user = json_decode($_SESSION['user']);
        $userId = json_decode ( $_SESSION ['user'] )->id;

        if (isset($_GET['id'])) {

            $id = $_GET['id'];

            $dao = new BookDAO;
            $dao->addBook();

        }else{
            include '../view/addBook.php';
        }


    }
    catch (Exception $e) {
        $errorMessage = $e->getMessage();
        include '../view/index.php';
    }

}else {
    http_response_code ( 401 );
    echo '{"error": "not logged in"}';
    header('Location:homeController.php', true, 302);

}
