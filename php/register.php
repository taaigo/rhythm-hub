<?php
function register()
{
    if ( isset($_POST['username']) )
    {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = md5($_POST['password']);


        $mysqli = new mysqli("localhost", "root", "", "songs");

        if ($mysqli -> connect_errno)
        {
            return "Failed to connect to MySQL: " . $mysqli -> connect_error;
            exit();
        }

        if (!isset($username) || $password === md5(""))
        {
            return;
        }

        $sql = "INSERT INTO users (username, email, password)
            VALUES ('".$username."', '".$email."', '".$password."')";

        if ($mysqli->query($sql) === TRUE)
        {
            $user_id = $mysqli->insert_id;
            $sql = "SELECT * FROM users WHERE id='$user_id'";
            $_SESSION["user"] = (object) $mysqli->query($sql)->fetch_assoc();
            $output = "created account successfully";
        }
        else
        {
            echo "Error: " . $sql . "<br>" . $mysqli -> error;
        }
        $mysqli->close();
    }
    $_SESSION["username"] = $username;
    $_SESSION["session-id"] = session_id();
    return $output;
}