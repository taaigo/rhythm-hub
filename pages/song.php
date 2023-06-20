<?php
session_start();
error_reporting(E_ALL);
include '../php/session.php';
include '../php/globalCss.php';

$id = $_GET["id"];

$mysqli = new mysqli("localhost", "root", "", "songs");
$sql = "SELECT * FROM songs WHERE id='$id'";

if ($result = $mysqli -> query($sql))
{
    $song = (object) $result->fetch_assoc();
}

?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php echo genCssArray(['style', 'navbar', 'songpage']); ?>
</head>
<body>
<?php include './global/navbar.php' ?>
<div class="container">
    <div class="containerheadtext"><?php echo $song->title ?></div>
    <div class="containersubtext"><?php echo $song->artist?></div>
</div>
</body>
</html>
