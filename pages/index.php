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
    <link rel="stylesheet" href="../styles/home.css">
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
        <h5>Rhythm Hub</h5>
        <h2>We all like Miku! (and Camellia)</h2>
        <p>Listing of songs and beatmaps on multiple games.</p>
        <img src="../media/miku_original.jpg">
    </div>
</body>
</html>