<?php $errorMessage = isset($errorMessage) ? $errorMessage : ''; ?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Login Form</title>

  <link rel="stylesheet" href="../assets/css/style.css">

</head>

<body>
<div class="login-page">
    <div class="form">
        <form action="../controller/LoginController.php" method="post"  class="login-form">
            <input type="text" placeholder="username" name="username" />
            <input type="password" placeholder="password" name="password" />
            <input type="submit" name="submit"class="button">
        </form>
        <div><?= $errorMessage?></div>
    </div>

</div>

</body>
</html>
