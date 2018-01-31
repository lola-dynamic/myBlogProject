<nav>
    <ul>
        <li><a href="#" id="logo">THE TECHNOLOGY</a></li>
        <li><a href="index.php">HOME</a></li>
        <li><a href="#">About</a></li>
        <?php if (isset($_SESSION['logged_in'])) {
            echo '<li><a href="profile.php"><button id="login"> Dashboard</button></a></li>';

            if(isset($_SESSION['is_admin'])) {
                echo '<li><a href="admin.php"><button id="login"> Admin</button></a></li>';
            }

            echo '<li><a href="logout.php"><button id="login"> Logout</button></a></li>';
        }

        else{
            echo '<li><a href="login.php"><button id="login">LogIn</button></a></li>
                <li><a href="register.php"><button id="register">Register</button></a></li>
                <li><a href="blogging.php">Blogging</a></li>';

        }
        ?>
    </ul>


    <div class="clearfix"></div>
</nav>