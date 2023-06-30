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

    <?php echo genCssArray(['style', 'navbar', 'userform', 'usersettings']); ?>
</head>
<body>
<?php include './global/navbar.php' ?>
<div class="containerwidth">
    <div style="margin: 30px 0" class="containerheadtext">Edit Profile</div>
    <div class="container" style="
    display: flex;
    justify-content: center;">
        <div class="items">
            <div class="settingelement">
                <div class="containerheadtext" style="padding: 10px 10px; text-align: center">Upload Profile Image</div>
                    <form action="upload.php" method="post" enctype="multipart/form-data" style="display: flex; justify-content: space-evenly">
                        <label for="avatar" >Browse image<input type="file" style="display: none" name="avatar" id="avatar"></label>
                        <input type="submit" style="padding: 12px 25px;" class="button" value="Submit" name="submit">
                    </form>
                </div>
            <div class="settingelement">
                <div class="containerheadtext" style="text-align: center; margin-top: 20px">Change Username</div>
                <form method="post" action="changeusername.php" enctype="multipart/form-data">
                    <div id="inputusername">
                        <input class="user" placeholder="New Username" name="new_username" type="text" style="margin: 0 12px">
                        <input type="submit" class="button" value="Submit" style="
                    padding: 0 14px;
                    ">
                    </div>
                    <div id="idfooter">
                        <div class="containersubtext" style="text-align: right; padding-top: 14px; font-size: 16px">USER_ID: <?php echo $_SESSION['user']->id ?></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>
