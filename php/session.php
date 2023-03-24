<?php
function printLoginButton()
{
    if ( empty($_SESSION["username"]) )
    {
        echo '<li style="float: right"><a class="nav" href="login.php">Login</a></li>';
    }
    else
    {
        echo '<li style="float: right"><a class="nav" href="../pages/logout.php">Logout</a></li>
              <li style="float: right"><a class="nav">Logged in as '.$_SESSION["username"].'</a></li>';
    }
}
