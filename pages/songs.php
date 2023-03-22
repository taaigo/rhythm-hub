<?php
error_reporting(E_ALL);
include "../php/getSongs.php";
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/style.css">
    <link rel="stylesheet" href="../styles/songs.css">
    <link rel="stylesheet" href="../styles/navbar.css">
    <title>document</title>
</head>
<body>
<nav>
    <ul>
        <li><a class="nav" href="index.php">Home</a></li>
        <li><a class="nav">Songs</a></li>
        <li style="float: right"><a class="nav" href="login.php">Login</a></li>
    </ul>
</nav>
<div class="container">
    <div class="flexcontainer">
        <?php echo printSongs() ?>
    </div>
</div>
</body>
</html>