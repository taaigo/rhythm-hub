<?php
function register()
{
    if ( isset($_POST['username']) )
    {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = md5($_POST['password']);

        $mysqli = new mysqli("localhost", "tygo", "zEFwxS1VyEibYSw3", "database");

        if ($mysqli -> connect_errno)
        {
            return "Failed to connect to MySQL: " . $mysqli -> connect_error;
            exit();
        }

        $sql = "INSERT INTO users (username, email, password)
            VALUES ('".$username."', '".$email."', '".$password."')";

        if ($mysqli->query($sql) === TRUE) {
            $output = "created account successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $mysqli->error;
        }
        $mysqli->close();
    }
    $_SESSION["username"] = $username;
    $_SESSION["session-id"] = session_id();
    return $output;
}