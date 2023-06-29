<?php
session_start();
include "../php/session.php";
include '../php/globalCss.php';

if ($_SESSION['user']->id)
{
    include './references/songsubmit.php';
}
else
{
    include './global/no-login.php';
}
?>


