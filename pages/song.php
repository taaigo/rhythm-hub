<?php
session_start();
include '../php/session.php';
include '../php/globalCss.php';
include '../php/get_comments.php';
include '../php/upload_comment.php';

$id = $_GET["id"];

$mysqli = new mysqli("localhost", "root", "", "songs");
$sql = "SELECT * FROM songs WHERE id='$id'";

if ($result = $mysqli->query($sql))
{
    $song = (object) $result->fetch_assoc();
}

$sql = "SELECT * FROM users WHERE id='$song->submitter_id'";

if ($result = $mysqli->query($sql))
{
    $submitter = (object) $result->fetch_assoc();
}

$_SESSION['song_id'] = $song->id;
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php echo genCssArray(['style', 'navbar', 'songpage', 'userform']); ?>
</head>
<body>
<?php include './global/navbar.php' ?>
<div class="container" style="width: 420px">
    <div class="songdetails">
        <div class="songtop">
            <img class="songdetails" src="../media/song-coverart/<?php echo $song->id ?>.jpg">
            <div class="button" style="padding: 10px; height: fit-content">Cheer! <?php echo $song->cheers ?></div>
        </div>
        <div class="containerheadtext" style="margin: 0 10px"><?php echo $song->title ?></div>
        <div class="containersubtext" style="margin: 0 10px">by <?php echo $song->artist?></div>
        <div class="submituser">
            <img class="submitter" src="../media/avatars/<?php echo findAvatar($submitter->id) ?>.png">
            <div class="containersubtext" style="margin: 8px; font-size: 22px">Submitted by:<br><?php echo $submitter->username ?></div>
        </div>
    </div>
    <form action="../php/upload_comment.php" method="post">
        <div class="commentsection">
            <div class="commentinput" id="commentsong">
                <?php
                if ($_SESSION['user']->id)
                {
                    echo '
                        <input class="user" type="text" name="comment" placeholder="Write a comment">
                        <input class="button" type="submit" style="margin: 6px; padding: 0 18px" value="Post">
                    ';
                }
                else
                {
                    echo '
                        <div class="containersubheadtext">You must be logged in to comment</div>
                    ';
                }
                ?>
            </div>
                <?php echo getComments($song->id) ?>
        </div>
    </form>
</div>
</body>
</html>
