<?php
include '../php/globalCss.php';

?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php echo genCssArray(['style', 'navbar', 'profile']); ?>
</head>
<body>
<?php include './global/navbar.php' ?>
<div class="container">
    <div class="items">
        <div class="profileHead">

            <div class="flexleft">
                <img class="profileAvatar" src="<?php echo "../media/avatars/".findAvatar($_SESSION['user']->id).".png" ?>">
                <div class="username"><?php echo $_SESSION["user"]->username ?></div>
            </div>

            <div class="flexright">
                <a href="./editprofile.php" style="text-decoration: none"><div class="button" style="
                padding: 12px 25px;
                ">Edit Profile</div></a>
            </div>
        </div>
    </div>
</div>
</body>
</html>
