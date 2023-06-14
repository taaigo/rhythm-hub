<?php
function uploadAvatar()
{
    $target_dir = "../media/avatars/";
    $target_file = $target_dir . basename($_SESSION['user']->id.".png");
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
    if (isset($_POST["submit"]))
    {
        $check = getimagesize($_FILES["avatar"]["tmp_name"]);
        if ($check !== false)
        {
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
    if ($_FILES["avatar"]["size"] > 12000000) {
        return "Sorry, your file is too large.<br>";
        $uploadOk = 0;
    }

    if ($uploadOk == 0)
    {
        return "Sorry, your file was not uploaded.<br>";
    }
    else
    {
        if (move_uploaded_file($_FILES["avatar"]["tmp_name"], $target_file))
        {
            return "The file ". htmlspecialchars( basename( $_FILES["avatar"]["name"])). " has been uploaded.";
        }
        else
        {
            return "Sorry, there was an error uploading your file.<br>";
        }
    }
}