<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - BrightSpark Ads</title>
    <link rel="stylesheet" href="../Vishwa/logincss.css"> <!-- Link to external CSS -->
</head>

<body style="background-image: url(login3.jpg); background-size: cover;background-position: center;">
    <div class="container">
        <header>
            <h1>BrightSpark Ads</h1>
        </header>

        <div class="login-box">
            <!-- <a href="../AdminContracts/home.php" class="back-arrow">&#x2190;</a> -->
            <a href="javascript:history.back()" class="back-arrow">&#x2190;</a>
            <h2>Login</h2>


            <?php

            require 'config.php';

            if ($_SERVER['REQUEST_METHOD'] == 'POST') {

                $email = $_POST['email'];
                $password = $_POST['password'];

                $sql = "SELECT * FROM user WHERE email='$email' AND psw='$password'";

                $result = $con->query($sql);

                if ($result->num_rows > 0) {
                    echo "<script>alert('User Login Successful');</script>";
                    echo "<script>window.location.href='../AdminContracts/afterLogin.php';</script>";
                } else {
                    echo "<script>alert('Login failed!');</script>";
                    echo "<script>window.location.href='login.php';</script>";
                }
            }

            ?>



            <form action="../Vishwa/login.php" method="post">
                <div class="textbox">
                    <input type="text" placeholder="Email" name="email" required>
                </div>

                <div class="textbox">
                    <input type="password" placeholder="Password" name="password" required>
                </div>

                <div class="sign-in">
                    <button type="submit" class="btn-black">Sign in</button>
                </div>


            </form>
        </div>

    </div>

    <script src="../RanudiEdited/loginjs.js"></script> <!-- Link to external JS -->
</body>

</html>