<?php
require('db.php');
session_start();

if (isset($_POST['submit'])) {
    $result = $mysqli->query("SELECT * FROM post");
    if ($mysqli->query($sql)) {

    }
}

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
        <div class="articles">
            <section class="left-col">
                <section>
                    <div class="section">
                        <h1>information1</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. Duis aute irure dolor in reprehenderit in voluptate...</p>
                        <button>View more</button>
                    </div>

                    <div class="section">
                        <h1>information2</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. Duis aute irure dolor in reprehenderit in voluptate...</p>
                        <button>View more</button>
                    </div>
                </section>

                <section>
                    <div class="section">
                        <h1>informatin3</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. Duis aute irure dolor in reprehenderit in voluptate....</p>
                        <button>View more</button>
                    </div>

                    <div class="section">
                        <h1>information4</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. Duis aute irure dolor in reprehenderit in voluptate....</p>
                        <button>View more</button>
                    </div>

                </section>

                <div class="clearfix"></div>
        </div>


        <aside class="sidebar">

            <p>more information</p>
            <ul>
                <li><a href="#"><img src= "image/fb.png"></a></li>
                <li><a href="#"><img src="image/google.png"></a></li>
                <li><a href="#"><img src="image/twiter.png"></a></li>
            </ul>

            <div class="clearfix"></div>

        </aside>
        <div class="clearfix"></div>


    </div>

    <footer>
        <?php require('footer.php'); ?>
    </footer>
</div>


</body>
</html>