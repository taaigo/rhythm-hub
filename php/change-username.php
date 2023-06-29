<?php
session_start();

function change_username()
{
    $mysqli = new mysqli("localhost", "root", "", "songs");

    $new_username = $_POST["new_username"];
    $user_id = $_SESSION["user"]->id;


    $sql = "UPDATE users SET username='".$new_username."' WHERE id=".$user_id."";

    if ($mysqli->query($sql))
    {
        $_SESSION['user']->username = $new_username;
        return 'Username change success, don\'t forget you login using your username';
    }
    else
    {
        return 'Failed changing username';
    }
}