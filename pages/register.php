<?php
session_start();
include "../php/session.php";
include "../php/register.php";
include '../php/globalCss.php';
$output = register();
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
<div class="container" style="width: 420px">
    <div class="loginWarning"></div>
    <div class="success"><?php echo $output ?></div>
    <div class="flexcontainer">
        <form method="post" action="">
            <div class="containerheadtext">Sign up</div>
            <input class="user" placeholder="Username" type="text" name="username">
            <input class="user" placeholder="Email adress" type="text" name="email" id="email">
            <input class="user" placeholder="Password" type="password" id="passwordInput" name="password">
            <input style="
                padding: 12px 25px;
                margin-top: 12px;
                float: right;
            " class="button" type="submit" value="Sign up">
        </form>
    </div>
</div>
</body>
</html>
