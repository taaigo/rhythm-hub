<?php
session_start();
include "../php/login.php";
include "../php/session.php";
$output = login();
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="../js/showPassWord.js" defer></script>
    <link rel="stylesheet" href="../styles/style.css">
    <link rel="stylesheet" href="../styles/navbar.css">
    <link rel="stylesheet" href="../styles/login.css">
</head>
<body>
    <nav>
        <ul>
            <li><a class="nav" href="index.php">Home</a></li>
            <li><a class="nav" href="songs.php">Songs</a></li>
            <?php printLoginButton() ?>
        </ul>
    </nav>
    <div class="container">
        <div class="loginWarning"><?php echo $output ?></div>
        <div class="flexcontainer">
            <form method="post" action="">
                <div class="containerheadtext">Sign in</div>
                <input class="user" placeholder="Username" type="text" name="username">
                <input class="user" placeholder="Password" type="password" id="passwordInput" name="password">
                <input class="submitbutton" type="submit" value="Login">
            </form>
        </div>
    </div>
</body>
</html>