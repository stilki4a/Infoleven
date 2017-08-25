<?php

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
$errorMessage = isset($errorMessage) ? $errorMessage : '';
$success = isset($success) ? $success : '';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Add Book</title>
    <link rel="stylesheet" href="../assets/css/reset.css" type="text/css" />
</head>
<body>
<div class="wrrap">
    <div class="wrrap-sec">

        <div class="titleDiv">
            <div class="userloged">
<!--                <h1> Hello --><?php //echo $_SESSION['user']->username ?><!--</h1>-->
                <div >
                    <a href="../controller/LogoutController.php"><button class="logout"> Log Out</button></a>
                </div>

            </div>

        </div>
        <div class="add">
            <fieldset >
                <h3>Add New Book</h3>
                <form  method="post" action="../controller/addBookController.php" enctype="multipart/form-data"">

                    <div class="addDiv" id="titleDiv">
                        <input class="addInput" id="title" type="text"  name="title" placeholder=" Book title"  />
                    </div>

                    <div class="addDiv" id="pageDiv">
                        <input  class="addInput" id="pages" name ="pages" type="number" placeholder="  Book pages"  />
                    </div>
                    <div class="addDiv" id="formatDiv">
                        <select  class="addInput" id="genre" name="genre"  >
                            <option value="Choose format">---Choose gerne---</option>
                            <option value="comedy">comedy</option>
                            <option value="horror">horror</option>
                            <option value="biography ">biography</option>
                        </select>

                    </div>
                    <div id="uploadImg">

                        <input  class="addInput" type="file" name="files[]" id="image" accept="image/*"/>

                        <input type='hidden' name='MAX_FILE_SIZE' value='10000000' />

                    </div>

                    <div class="submit">
                        <input  id='save' type="submit" value="Save"  name="save"/>
                    </div>

                </form>
                <div class='success'>
                    <?= $success ?>
                </div>


                <div class='errorr'>
                    <?= $errorMessage ?>
                </div>
            </fieldset>
        </div>
    </div>
</div>

<script src="../assets/js/jquery-3.1.1.min.js"></script>
<script src="../assets/js/addBook.js"></script>
</body>
</html>


