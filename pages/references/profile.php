<?php
session_start();
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
        <li><a class="nav" href="./index.php">Home</a></li>
        <li><a class="nav" href="./songs.php">Songs</a></li>
        <?php printLoginButton() ?>
    </ul>
    <div class="containerheadtext">Coming soon.</div>
</nav>
</body>
</html>