<?php
session_start();
session_destroy();

include '../php/globalCss.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>redirecting...</title>
     <meta charset="UTF-8" />
     <meta http-equiv="refresh" content="1; URL=../pages/profilelogin.php" />

        <?php echo genCssArray(['style', 'navbar']); ?>
   </head>
   <body>
   <nav>
       <ul>
           <li class="nav"><a class="nav">You are being logged out...</a></li>
       </ul>
   </nav>
</html>
