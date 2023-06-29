<?php
 function findAvatar($id)
 {
     if (file_exists("../media/avatars/".$id.".png"))
     {
         return $id;
     }
     else
     {
         return "default";
     }
 }