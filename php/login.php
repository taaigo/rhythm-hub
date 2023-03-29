<?php
function login()
{
    if ( isset($_POST['username']) )
    {
        $user = $_POST['username'];
        $pass = md5($_POST['password']);

        // 1. connect to the db
        // 2. do shit with db
        // 3. check results
        // 4. break connection

        $mysqli = new mysqli("localhost", "tygo", "zEFwxS1VyEibYSw3", "database");

        // check connection
        if ($mysqli -> connect_errno)
        {
            return "Failed to connect to MySQL: " . $mysqli -> connect_error;
            exit();
        }

        // idk perform quiry or smth
        if ($result = $mysqli -> query("SELECT * FROM users WHERE username='$user' AND password='$pass'") )
        {
            if ( $result -> num_rows == 1)
            {
                $_SESSION["username"] = $user;
                $_SESSION["session-id"] = session_id();
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
