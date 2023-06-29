<?php
session_start();
    if (!empty($_POST['comment']))
    {
        $content = $_POST['comment'];
        $song_id = $_SESSION['song_id'];
        $user_id = $_SESSION['user']->id;

        $mysqli = new mysqli("localhost", "root", "", "songs");

        $sql = "INSERT INTO song_comments (content, song, user) VALUES ('".$content."', '".$song_id."', '".$user_id."')";

        if ($mysqli->query($sql))
        {
            http_redirect('../pages/songs.php');
            $out = "Your comment has been posted";
        }
        else
        {
            $out = "Something went wrong while posting your comment";
        }
    }
    ?>