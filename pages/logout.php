<?php
session_start();
session_destroy();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>redirecting...</title>
     <meta charset="UTF-8" />
     <meta http-equiv="refresh" content="1; URL=../pages/profilelogin.php" />
        <link rel="stylesheet" href="../styles/style.css">
        <link rel="stylesheet" href="../styles/navbar.css">
   </head>
   <body>
   <nav>
       <ul>
           <li class="nav"><a class="nav">You are being logged out...</a></li>
       </ul>
   </nav>
</html>