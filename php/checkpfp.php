<?php
error_reporting(E_ALL);
 function findAvatar()
 {
     if (file_exists("../media/avatars/".$_SESSION['user']->id.".png"))
     {
         return $_SESSION['user']->id;
     }
     else
     {
         return "default";
     }
 }