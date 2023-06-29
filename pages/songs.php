<?php
session_start();
error_reporting(E_ALL);
include "../php/getSongs.php";
include "../php/session.php";
include '../php/globalCss.php';
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php echo genCssArray(['style', 'songs', 'navbar']); ?>
    <title>document</title>
</head>
<body>
<?php include './global/navbar.php' ?>
<div class="containerheadtext" style="
        font-size: 40px;
        margin-top: 48px;
        margin-left: 9%;
        text-align: left;
    ">Beatmap listing</div>

    <?php
    if ($_SESSION['user']->id)
    {
        echo '<a href="./songsubmit.php"><button class="button" style="
                padding: 12px 25px;
                margin: 12px 9.2%;"
    >Submit song</button></a>';
    }
    ?>
<div class="container">
    <div class="flexcontainer">
        <?php echo printSongs() ?>
    </div>
</div>
</body>
</html>
