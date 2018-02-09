<?php
require 'db.php';

session_start();
?>


<!--htm line of codes below-->
<!DOCTYPE html>
<html>
<head>
    <title>TECHNOLOGY BLOG</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
<div class="wrapper">
    <div class="navigation">
        <?php require('header.php');?>
    </div>


    <div class="containerWrapper">

        <div class="errorMessage">
            <?php
            if (isset($_SESSION['message'])) {
                echo '<p style="color: blue; text-align: center; font-size: 30px">' . $_SESSION['message'] . '</p>';
                unset($_SESSION['message']);
            }
            ?>
        </div>

        <div class="errorMessage">
            <?php
            if (isset($_SESSION['logged_in'])) {
                ;
                echo
                    '<p style="color: blue; text-align:center; font-size:25px">' .

                    "You are already logged in! <br> <br> " .

                    " You can now proceed" . '</p>';

            }
            ?>
        </div>
    </div>

    <footer>
        <?php require('footer.php'); ?>
    </footer>

</div>


</body>
</html>