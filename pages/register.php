<?php
session_start();
include "../php/session.php";
include "../php/register.php";
$output = register();
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/style.css">
    <link rel="stylesheet" href="../styles/navbar.css">
    <link rel="stylesheet" href="../styles/userform.css">
</head>
<body>
<nav>
    <ul>
        <li><a class="nav">Home</a></li>
        <li><a class="nav" href="songs.php">Songs</a></li>
        <?php printLoginButton() ?>
    </ul>
</nav>
<div class="container">
    <div class="loginWarning"></div>
    <div class="success"><?php $output ?></div>
    <div class="flexcontainer">
        <form method="post" action="">
            <div class="containerheadtext">Sign up</div>
            <input class="user" placeholder="Username" type="text" name="username">
            <input class="user" placeholder="Email adress" type="text" name="email">
            <input class="user" placeholder="Password" type="password" id="passwordInput" name="password">
            <input class="submitbutton" type="submit" value="Sign up">
        </form>
    </div>
</div>
</body>
</html>