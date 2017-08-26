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
<!--            <form action="../controller/searchController.php" method="get">-->
<!--                <input type="search" placeholder="search" name="search">-->
<!--                <select  class="addInput" id="genre" name="genre"  >-->
<!--                    <option value="comedy">comedy</option>-->
<!--                    <option value="horror">horror</option>-->
<!--                    <option value="biography ">biography</option>-->
<!--                </select>-->
<!--                <input type="submit" name="Search" value="Search">-->
<!--            </form>-->
            <form>
                <input type="text" size="30" onkeyup="showResult(this.value)">
                <div id="livesearch"></div>
            </form>
        </div>
        <div id="result" class="res" >

        </div>
    </div>
    <div class='error'>
        <?= $errorMessage ?>
    </div>
</div>
<script src="../assets/js/main.js"></script>
</body>
</html>



