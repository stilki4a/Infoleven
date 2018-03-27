<?php
function __autoload($className) {
    require_once "../model/" . $className . '.php';
}

session_start ();
if (isset ( $_SESSION ['user'] )) {

//    try{
//
        if ($_SERVER ['REQUEST_METHOD'] == 'GET') {
//
//            // list all contacts
//            if (!isset($_GET['Search']) && (!isset($_GET['findPage']))){

                     $dao = new BookDAO;
                      json_encode($dao->listBooks());
//            }



//
//            if ((isset($_GET['Search']))  && (isset($_GET['genre']))) {
//
//                $genre =  $_GET['genre'];
//
//                $dao = new SearchDAO();
//                json_encode($dao->searchGenre($genre));
//
//
//            }
//
//            if (isset($_GET['findPage']) && (isset($_GET['min']) || isset($_GET['max']))){
//
//                $from = $_GET['min'];
//                $to = $_GET['max'];
//
//                $dao = new SearchDAO();
//                json_encode($dao->searchFromTo($from,$to));
//            }


//            else {
//                $dao = new BookDAO;
//                json_encode($dao->listBooks());
//            }
        }
//    }catch (Exception $e) {
//        $errorMessage = $e->getMessage();
//        include '../view/home.php';
//   }

}else{
    http_response_code ( 401 );
    echo '{"error": "not logged in"}';
    header('Location:homeController.php', true, 302);
}



?>