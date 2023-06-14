<?php

include '/opt/lampp/htdocs/rhub/php/checkpfp.php';
function printLoginButton()
{
    if ( empty($_SESSION["username"]) )
    {
        return '<li style="float: right"><a class="nav" href="./register.php">Signup</a></li>
              <li style="float: right"><a class="nav" href="profilelogin.php">Login</a></li>';
    }
    else
    {
        return '<li style="float: right"><a class="nav" href="../pages/logout.php">Logout</a></li>
              <li style="float: right"><a style="margin-left: 10px; padding-left: 0" class="nav" href="../pages/profilelogin.php">
              '.$_SESSION["username"].'</a></li><a href="../pages/profilelogin.php"><img class="smallavatar" src="../media/avatars/'.findAvatar().'.png"</a></a>';
    }
}
