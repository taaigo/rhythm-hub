<?php
function printSongs()
{
    $mysqli = new mysqli("localhost", "root", "", "songs");

    if ($mysqli -> connect_errno)
    {
        $connectionError = "Failed to connect to the Database: " . $mysqli -> connect_error;
        exit();
    }

    $sql = "SELECT * FROM `songs`";
    $result = $mysqli -> query($sql);
    if ($result -> num_rows > 0)
    {
        while ($row = $result -> fetch_assoc() )
        {
            $songs .= '
    <div class="songlist" id="songbox">
        <img id="image" src="/rhub/media/song-coverart/'.$row["id"].'.jpg"><br>
        <div class="songheader" id="songbox">
            <div class="songtitle">'.$row["title"].'</div>
            <div class="songartist">by '.$row["artist"].'</div>
            <div class="songduration">'.$row["bpm"].' bpm</div>
        </div>
        </div>';
        }
        return $songs;
    }
}