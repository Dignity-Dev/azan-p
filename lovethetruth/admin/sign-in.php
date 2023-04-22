<?php
include "../../include/config.php";
session_start();

if (isset($_SESSION['username']) != "" and isset($_SESSION['id']) != "") {
    echo "<script>
	window.location = 'dashboard.php';
</script>";
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>


    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Meta -->
    <meta name="description" content="Responsive Bootstrap 4 Dashboard Template">
    <meta name="author" content="BootstrapDash">

    <title><?php echo $web_row['webname']; ?></title>

    <!-- vendor css -->
    <link href="../lib/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="../lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="../lib/typicons.font/typicons.css" rel="stylesheet">

    <!-- azia CSS -->
    <link rel="stylesheet" href="../css/azia.css">

</head>

<body class="az-body">

    <div class="az-signin-wrapper">
        <div class="az-card-signin">
            <h1 class="az-logo"><?php echo $web_row['webname']; ?></h1>
            <div class="az-signin-header">
                <h2>Welcome back!</h2>
                <h4>Please sign in to continue</h4>
                <?php

                if (isset($_POST['gethacked'])) {
                    $email = trim(htmlentities(htmlspecialchars($_POST['username'])));
                    $pas= trim(htmlentities(htmlspecialchars($_POST['password'])));
                    $password = md5($password);
                   

                    $check = mysqli_query($conn, "SELECT * FROM user where username='$username' and password = '$password'");
                    $login = mysqli_fetch_array($check);
                    $logins = mysqli_num_rows($check);
                    if ($logins < 1) {
                        $_SESSION['title'] = "Incorrect details";
                        $_SESSION['message'] = "Check your input or you want to fraud?!";
                        $_SESSION['icon'] = "error";
                        $_SESSION['location'] = "sign-in.php";
                    } else {
                        $_SESSION["username"] = $login['username'];
                        $_SESSION["id"] = $login['user_id'];
                        // echo $_SESSION['id'];
                        echo "<script>window.location='dashboard.php';</script>";
                    }
                }
                ?>
                <form method="post" autocomplete="off">
                    <div class="form-group">
                        <label>username</label>
                        <input type="text" class="form-control" name="username" placeholder="Enter your username" required>
                    </div><!-- form-group -->
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Enter your password" required>
                    </div><!-- form-group -->
                    <button class="btn btn-az-primary btn-block">Sign In</button>
                </form>
            </div><!-- az-signin-header -->
            <div class="az-signin-footer">
                <!-- <p><a href="">Forgot password?</a></p>
                <p>Don't have an account? <a href="page-signup.html">Create an Account</a></p> -->
            </div><!-- az-signin-footer -->
        </div><!-- az-card-signin -->
    </div><!-- az-signin-wrapper -->
<?php include "swal.php"?>
    <script src="../lib/jquery/jquery.min.js"></script>
    <script src="../lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../lib/ionicons/ionicons.js"></script>
    <script src="../js/jquery.cookie.js" type="text/javascript"></script>
    <script src="../js/jquery.cookie.js" type="text/javascript"></script>

    <script src="../js/azia.js"></script>
    <script>
        $(function() {
            'use strict'

        });
    </script>
</body>

</html>