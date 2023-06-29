<?php
function login()
{
    if ( isset($_POST['username']) )
    {
        $user = $_POST['username'];
        $pass = md5($_POST['password']);

        $mysqli = new mysqli("localhost", "root", "", "songs");

        // check connection
        if ($mysqli -> connect_errno)
        {
            return "Failed to connect to MySQL: " . $mysqli -> connect_error;
            exit();
        }

        // idk perform query or smth
        if ($result = $mysqli -> query("SELECT * FROM users WHERE username='$user' AND password='$pass'"))
        {
            if ( $result -> num_rows == 1)
            {
                $_SESSION["session-id"] = session_id();
                $_SESSION["user"] = (object) $result->fetch_assoc();
                return;
            }
            else
            {
                return "Invalid combination or user doesn't exist.";
            }

            $result -> free_result();
        }
        $mysqli -> close();

    }
    else
    {
        return;
    }
}
