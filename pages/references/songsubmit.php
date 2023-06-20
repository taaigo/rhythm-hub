<?php
include "../php/uploadsong.php";
$output = uploadSong();

?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="../js/validateCredentials.js"></script>

    <?php echo genCssArray(['style', 'navbar', 'userform']); ?>
</head>
<body>
<?php include './global/navbar.php' ?>
<div class="container">
    <div class="loginWarning"></div>
    <div class="success"><?php echo $output ?></div>
    <div class="flexcontainer">
        <form method="post" action="" enctype="multipart/form-data">
            <div class="containerheadtext">Submit track (soon™)</div>
            <input class="user" placeholder="Title" type="text" name="title">
            <input class="user" placeholder="Artist" type="text" name="artist">
            <input class="user" placeholder="bpm" type="text" name="bpm"><br>
            <div class="makeitwork">
                <label for="songcoverupload">Upload songcover<input id="songcoverupload" style="display: none" type="file" name="cover" id="avatar"></label>
                <input style="
                padding: 12px 25px;
                margin-top: 12px;
                float: right;
            " class="button" type="submit">
            </div>
        </form>
    </div>
</div>
</body>
</html>