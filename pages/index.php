<?php
session_start();
error_reporting(E_ALL);
include '../php/session.php';
include '../php/globalCss.php';
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php echo genCssArray(['style', 'navbar', 'home']); ?>

</head>
<body>
    <?php include './global/navbar.php' ?>
    <div class="containerwidth">
        <div class="containerheadtext" style="margin: 40px 0">(°д°)ハードコア・エンジョヤー</div>
    </div>
        <div class="container">
            <div class="containersubheadtext">For posting rhythm weeb shit (useless and incomplete site)</div>
            <br><div class="containersubtext">Sponsored by wooz pixel and navgm (i wish)</div>
        </div>
</body>
</html>
