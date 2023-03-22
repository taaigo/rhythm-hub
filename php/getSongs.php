<?php
function printSongs()
{
    $mysqli = new mysqli("localhost", "tygo", "zEFwxS1VyEibYSw3", "database");

    if ($mysqli -> connect_errno)
    {
        $connectionError = "Failed to connect to the Database: " . $mysqli -> connect_error;
        exit();
    }

    $sql = "SELECT * FROM `miku-content`";
    $result = $mysqli -> query($sql);
    if ($result -> num_rows > 0)
    {
        while ($row = $result -> fetch_assoc() )
        {
            $songs .= '
    <div class="songlist" id="songbox">
        <img id="image" src="'.$row["coverart"].'"><br>
        <div class="songheader" id="songbox">
            <div class="songtitle">'.$row["title"].'</div>
            <div class="songartist">by '.$row["artist"].'</div>
        </div>
        </div>';
        }
        return $songs;
    }
}
