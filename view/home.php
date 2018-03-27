<?php

//if (session_status() == PHP_SESSION_NONE) {
//    session_start();
//}

$errorMessage = isset($errorMessage) ? $errorMessage : '';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Your Library</title>

    <link rel="stylesheet" href="../assets/css/reset.css" type="text/css" />
    <link rel="stylesheet" href="../assets/css/prductStyle.css" type="text/css" />

    <script src="../assets/js/main.js"></script>
    <script src="../assets/js/genre.js"></script>
    <script src="../assets/js/test.js"></script>
</head>
<body>
<div class="wrrap">
    <div class="wrrap-sec">
        <div class="titleDiv">
            <div class="userloged">
<!--               <h1> Hello --><?php //echo $user->username;?><!--</h1>-->
                <div >
                    <a href="../controller/LogoutController.php"> <button class="logout">Log Out</button></a>
                </div>
            </div>
        </div>
        <div id="homeButtons">
            <div >
                <button class = "buttons" onclick ="listAllBooks()">All Books</button>
            </div>

            <div >
                <a href="../view/addBook.php"><button class = "buttons">Add New Book</button></a>
            </div>
        </div>
        <div>
            <div>
<!--                <form action="#" method="get">-->
                    <select  class="addInput" id="genre" name="genre" >
                        <option value="comedy">comedy</option>
                        <option value="horror">horror</option>
                        <option value="biography ">biography</option>
                    </select>
                    <input type="button" name="Search" value="Search" onclick="test()">
<!--                </form>-->
            </div>
            <div>
            </div>
            <div>
                <form action="../controller/ajaxController.php" method="get" onclick="show()">
                    <input type="number"  name="min">
                    <input type="number"  name="max">
                    <input type="submit" value="Src" name="findPage">
                </form>
            </div>
        </div>
        <div id="result" class="res" >

        </div>
        <div id="test">

        </div>
        <div>

        </div>
    </div>
    <div class='error'>
        <?= $errorMessage ?>
    </div>
</div>

</body>
</html>



