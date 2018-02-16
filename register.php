<?php
require('db.php');
session_start();

//ini_set('display_errors', true);

if (isset($_POST['register'])) {
//    var_dump($_POST);
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['user_name'] = $_POST['user_name'];

//    protect all $_POST against SQL injection
    $user_name = $mysqli->escape_string($_POST['user_name']);
    $email = $mysqli->escape_string($_POST['email']);
    $password = $mysqli->escape_string(password_hash($_POST['password'], PASSWORD_BCRYPT));
    $hash = $mysqli->escape_string(md5(rand(0, 1000)));

//    line of code to check if user with email exists
    $result = $mysqli->query("SELECT * FROM users WHERE email='$email'");
//    var_dump($result);
//    if ($mysqli->error) {
//        echo $mysqli->error;
//    }
//    or die($mysqli->error());
    $num_rows = mysqli_num_rows($result);

//    line of code to verify that if that if row >0, user email exists!
    if ($result->num_rows >= 1) {

        $_SESSION['message'] = 'User with this email already exists!';
    } else {
//       else proceed with the registration
        $sql = "INSERT INTO users (user_name, email, password, hash) "
            . "VALUES ('$user_name','$email', '$password', '$hash')";
//        add user to the database!
//        var_dump($sql);
        $Result = $mysqli->query($sql);
//        var_dump($Result);
        if ($mysqli->query($sql)) {
//            var_dump($mysqli->query($sql));

            $_SESSION['active'] = 1;
            $_SESSION['logged_in'] = true;
            $_SESSION['message'] =
                '  Hello ' . $user_name . ',
  
             Thank you for signing up!';
            header('location: profile.php');
        }
    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register Page</title>
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
        <div class="register">
            <form action="register.php" method="post" autocomplete="on">


                <label for="">UserName: </label>
                <span class="fa fa-1x fa-user"></span>
                <input type="text" class="form-group" name="user_name" required placeholder="Enter your username">
                <br>
                <label for="">Email Address: </label>
                <span class="fa fa-1x fa-envelope"></span>
                <input type="text" class="form-group" name="email" required placeholder="Enter your Email">
                <br>
                <label for="">Password: </label>
                <span class="fa fa-1x fa-pencil"></span>
                <input type="password" class="form-group" name="password" required placeholder="enter your password">
                <br>

                <button type="submit" name="register" id="registerButton">Register</button>
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
