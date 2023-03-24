<?php
session_start();
include '../php/session.php';
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/style.css">
    <link rel="stylesheet" href="../styles/navbar.css">
</head>
<body>
    <nav>
        <ul>
            <li><a class="nav">Home</a></li>
            <li><a class="nav" href="songs.php">Songs</a></li>
            <?php printLoginButton() ?>
        </ul>
    </nav>
    <h5>Welcome to miku.org</h5>
    <h2>we all like miku</h2>
    <p>This site is made by miku enjoyers for miku enjoyers.<br>
    Here you can share thoughts on miku songs games and all others thing related to miku.</p>
    <img src="../media/miku_original.jpg">
</body>
</html>