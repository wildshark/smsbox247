<?php
/**
 * Created by PhpStorm.
 * User: Andrew Quaye
 * Date: 01/08/2018
 * Time: 10:06 PM
 */
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Login</title>

    <!-- Fontfaces CSS-->
    <link href="template/css/font-face.css" rel="stylesheet" media="all">
    <link href="template/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="template/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="template/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="template/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="template/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="template/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="template/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="template/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="template/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="template/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="template/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="template/css/theme.css" rel="stylesheet" media="all">

    <script src="https://authedmine.com/lib/captcha.min.js" async></script>
    <script>
        function myCaptchaCallback(token) {
        }
    </script>

</head>

<body class="animsition">
<div class="page-wrapper">
    <div class="page-content--bge5">
        <div class="container">
            <div class="login-wrap">
                <div class="login-content">
                    <div class="login-logo">
                        <a href="#">
                            <img src="template/images/icon/logo.png" alt="smsbox">
                        </a>
                    </div>
                    <div class="login-form">
                        <form action="login.php" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>Username</label>
                                <input class="au-input au-input--full" type="text" name="username" placeholder="Username">
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input class="au-input au-input--full" type="password" name="password" placeholder="Password">
                            </div>
                            <div class="login-checkbox">
                                <label>
                                    <input type="checkbox" name="remember">Remember Me
                                </label>
                                <label>
                                    <a href="index.php?u=recovery">Forgotten Password?</a>
                                </label>
                            </div>
                            <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">sign in</button>
                        </form>
                        <div class="register-link">
                            <p>
                                Don't you have account?
                                <a href="index.php?u=sign-up">Sign Up Here</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Jquery JS-->
<script src="template/vendor/jquery-3.2.1.min.js"></script>
<!-- Bootstrap JS-->
<script src="template/vendor/bootstrap-4.1/popper.min.js"></script>
<script src="template/vendor/bootstrap-4.1/bootstrap.min.js"></script>
<!-- Vendor JS       -->
<script src="template/vendor/slick/slick.min.js">
</script>
<script src="template/vendor/wow/wow.min.js"></script>
<script src="template/vendor/animsition/animsition.min.js"></script>
<script src="template/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
</script>
<script src="template/vendor/counter-up/jquery.waypoints.min.js"></script>
<script src="template/vendor/counter-up/jquery.counterup.min.js">
</script>
<script src="template/vendor/circle-progress/circle-progress.min.js"></script>
<script src="template/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
<script src="template/vendor/chartjs/Chart.bundle.min.js"></script>
<script src="template/vendor/select2/select2.min.js">
</script>

<!-- Main JS-->
<script src="template/js/main.js"></script>

</body>

</html>
<!-- end document-->
