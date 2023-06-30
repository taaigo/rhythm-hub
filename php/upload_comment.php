<?php
session_start();
include '../php/redirect.php';
$content = $_POST['comment'];
$song_id = $_SESSION['song_id'];
$user_id = $_SESSION['user']->id;

    if (!empty($_POST['comment']))
    {
        $mysqli = new mysqli("localhost", "root", "", "songs");

        $sql = "INSERT INTO song_comments (content, song, user) VALUES ('".$content."', '".$song_id."', '".$user_id."')";

        if ($mysqli->query($sql))
        {
            redirect('pages/song.php?id='.$song_id);
            $out = "Your comment has been posted";
        }
        else
        {
            $out = "Something went wrong while posting your comment";
        }
    }
?>