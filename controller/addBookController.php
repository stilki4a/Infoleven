<?php
function __autoload($className) {
    require_once "../model/" . $className . '.php';
}

session_start ();

    if ($_SESSION ['user']) {
        $user = json_decode($_SESSION['user']);
        $userId = json_decode ( $_SESSION ['user'] )->id;



    if ($_REQUEST['save']) {


        try {
            $book = new Book(
                htmlentities(trim($_POST['title'])),

                htmlentities(trim($_POST['pages'])),
                htmlentities(trim($_POST['genre'])),
//                htmlentities(trim($_POST['pDate'])),
                $userId
            );

            /*
                book testing
            */
           var_dump($book);








//            if(empty($errors)==true){
//
                $dao = new BookDAO();
                $dao->addBook($book);
               $success = "You add a book successfully!";
            header('Location:../view/home.php');
//                include '../view/home.php';
//            }else{
//                for($index=0; $index < count($errors); $index++){
//                    $errorMessage = $errors[$index];
//
//                }
//                include '../view/addBook.php';
//            }

        }
        catch (Exception $e) {
            $errorMessage = $e->getMessage();
            include '../view/addBook.php';
        }
   }


}else {
    http_response_code ( 401 );
    echo '{"error": "not logged in"}';
    header('Location:homeController.php', true, 302);
}
