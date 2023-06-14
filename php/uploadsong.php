<?php
function uploadSong()
{
    if ( isset($_POST['title']) && isset($_POST['artist']) && isset($_POST['bpm']))
    {
        $title = $_POST['title'];
        $artist = $_POST['artist'];
        $bpm = $_POST['bpm'];

        $mysqli = new mysqli("localhost", "root", "", "songs");

        if ($mysqli -> connect_errno)
        {
            return "Failed to connect to MYSQL: " . $mysqli -> connect_error;
            exit();
        }

        $sql = "INSERT INTO `songs` (title, artist, bpm) VALUES ('".$title."', '".$artist."', '".$bpm."')";

        if ($mysqli->query($sql) === TRUE)
        {
            $song_id = $mysqli->insert_id;
            uploadCover($song_id);
            $output = "Song submitted!";
        }
        else
        {
            echo "Error: " . $sql . "<br>" . $mysqli -> error;
        }
        $mysqli->close();
    }
    return $output;
}

function uploadCover($song_id)
{
    $target_dir = "../media/song-coverart/";
    $target_file = $target_dir . basename($song_id.".jpg");
    $uploadOk = 1;
    if (isset($_POST["submit"])) {
        $check = getimagesize($_FILES["cover"]["tmp_name"]);
        if ($check !== false) {
            //    echo "File is an image - " . $check["mime"] . ".<br>";
            $uploadOk = 1;
        }
        else
        {
            return "File is not an image.<br>";
            $uploadOk = 0;
        }
    }

// Check file size
    if ($_FILES["cover"]["size"] > 12000000)
    {
        return "Sorry, your file is too large.<br>";
        $uploadOk = 0;
    }

    if ($uploadOk == 0) {
        return "Sorry, your file was not uploaded.<br>";
    }
    else
    {
        echo 'test';
        if (move_uploaded_file($_FILES["cover"]["tmp_name"], $target_file))
        {
            echo "test is yyeeeeessss";
            return "The file " . htmlspecialchars(basename($_FILES["cover"]["name"])) . " has been uploaded.";
        }
        else
        {
            echo "test is NOOOOOO";
            return "Sorry, there was an error uploading your file.<br>";
        }
    }
}