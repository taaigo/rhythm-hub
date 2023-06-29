<?php
include '../php/globalCss.php';
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="../js/showPassWord.js" defer></script>

    <?php echo genCssArray(['style', 'navbar', 'userform']); ?>
</head>
<body>
    <?php include './global/navbar.php' ?>
        <div class="container" style="width: 420px">
        <div class="loginWarning"><?php echo $output ?></div>
        <div class="flexcontainer">
            <form method="post" action="">
                <div class="containerheadtext">Sign in</div>
                <input class="user" placeholder="Username" type="text" name="username">
                <input class="user" placeholder="Password" type="password" id="passwordInput" name="password">
                <input class="button" style="
                    margin-left: auto;
                    margin-top: 12px;
                    padding: 12px 25px;
                    float: right;
                " type="submit" value="Login">
            </form>
        </div>
    </div>
</body>
</html>
