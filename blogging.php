<?php
require('db.php');
session_start();
if (isset($_POST['submit'])) {
    $_SESSION['title'] = $_POST['title'];
//    var_dump($_POST);
////    echo $_POST;
////    die();
//
    $_SESSION['body'] = $_POST['body'];
//    var_dump($_POST['body']);
////    die();

//    to protect from SQL injection
    $title = $mysqli->escape_string($_POST['title']);
    $body = $mysqli->escape_string($_POST['body']);

    $sql = "INSERT INTO post (title, body) "
        . "VALUES ('$title','$body')";

    if ($mysqli->query($sql)) {
        $_SESSION['post'] = "Your post has been submitted successfully";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Page</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" type="text/css"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="wrap">
    <div id="navigation">
        <?php require('header.php'); ?>
    </div>

    <section>
        <div class="post">
        <div style="text-align:center;">
        <?php
        if(isset($_SESSION['post'])) {
            echo '<p>' . $_SESSION['post'] . '</p>';
        }
        ?>
        </div>
            <form action="blogging.php" method="post" autocomplete="on">
                Title:
                <textarea name="title" cols="40" rows="2"></textarea>
                <br>


                body:
                <textarea name="body" cols="40" rows="5"></textarea>
                <br>

                <p><a href="forgot.php">Forget Password? </a></p>
                <br>

                <button type="submit" id="postButton" name="submit">Submit</button>
                <br>
            </form>
        </div>
    </section>

    <footer>
        <?php require('footer.php'); ?>
    </footer>

</div>

</body>
</html>

