<?php
require ('db.php');
session_start();
if(isset($_POST['login'])) {
    $email = $mysqli->escape_string($_POST['email']);
    $result = $mysqli->query("SELECT * FROM users WHERE email= '$email'");
    if ($result->num_rows == 0){
        $_SESSION['error_email'] = "user with the email does not exist!";
//        header("location: error.php");
    }

    else{
        $user = $result->fetch_assoc();
        if(password_verify($_POST['password'], $user['password']) ){
            $_SESSION['user_name'] = $user['user_name'];
            $_SESSION['email'] = $user['email'];
            $_SESSION['active'] = $user['active'];


                if($user['is_admin'] == true) {
                    $_SESSION['is_admin'] = true;
                }

            $_SESSION['logged_in'] = true;
            header("location: profile.php");
        }
        else{
            $_SESSION['error_password'] = "Wrong password, try again!";
//            header("location: error.php"); // taking user back to the login page
        }
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Page</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="wrap">
    <div id="navigation">
        <?php require('header.php'); ?>
    </div>

    <section>
        <div class="login">

            <form action="login.php" method="post" autocomplete="on">

<!--                to display error message when the email is not correct-->
                <div class="errorMessage">
                    <?php
                    if(isset($_SESSION['error_email'])) {
                        echo '<p style="color: red">'. $_SESSION['error_email'] . '</p>';
                        unset($_SESSION['message']);
                    }
                    ?>
                </div>

                <label for="">Email Address: </label>
                <span class="fa fa-1x fa-envelope"></span>
                <input type="text" class="form-group" name="email" required placeholder="Enter your Email">
                <br>

<!--                to display error message for password-->
                <div class="errorMessage">
                    <?php
                    if(isset($_SESSION['error_password'])) {
                        echo '<p style="color: red">'. $_SESSION['error_password'] . '</p>';
                        unset($_SESSION['message']);
                    }
                    ?>
                </div>

                <label for="">Password: </label>
                <span class="fa fa-1x fa-pencil"></span>
                <input type="password" class="form-group" name="password" required placeholder="enter your password">
                <br>
                <p><a href="forgot.php">Forget Password? </a></p>
                <br>

                <button type="submit" name="login" id="loginButton">Login</button>
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
