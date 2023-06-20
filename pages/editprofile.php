<?php
session_start();
include '../php/session.php';
include '../php/globalCss.php';
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php echo genCssArray(['style', 'navbar', 'userform']); ?>
</head>
<body>
<?php include './global/navbar.php' ?>
<div class="container" style="
    display: flex;
    justify-content: center;">
    <div class="items">
        <div class="containerheadtext" style="padding: 10px 10px">Upload Profile Image</div>
        <form action="upload.php" method="post" enctype="multipart/form-data" style="display: flex; justify-content: space-evenly">
            <label for="avatar" >Browse image<input type="file" style="display: none" name="avatar" id="avatar"></label>
            <input type="submit" style="padding: 12px 25px;" class="button" value="Submit" name="submit">
        </form>
    </div>
</div>
</body>
</html>
