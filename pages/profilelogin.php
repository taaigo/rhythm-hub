<?php
session_start();
include "../php/login.php";
include "../php/session.php";
$output = login();

if (empty($_SESSION["user"]->id))
{
    include "./references/login.php";
}
else
{
    include "./references/profile.php";
}
?>