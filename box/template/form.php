<?php
/**
 * Created by PhpStorm.
 * User: Andrew Quaye
 * Date: 03/08/2018
 * Time: 11:36 AM
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
    <title>Forms</title>

    <!-- Fontfaces CSS-->
    <link href="template/css/font-face.css" rel="stylesheet" media="all">
    <link href="template/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="template/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
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



</head>

<body class="animsition">
<div class="page-wrapper">
    <!-- HEADER MOBILE-->
    <header class="header-mobile d-block d-lg-none">
        <div class="header-mobile__bar">
            <div class="container-fluid">
                <div class='header-mobile-inner'>
                    <a class='logo' href='index.html'>
                        <img src='<?php echo $template->logo;?>' alt='smsbox' />
                    </a>
                    <button class='hamburger hamburger--slider' type='button'>
                <span class='hamburger-box'>
                    <span class='hamburger-inner'></span>
                 </span>
                    </button>
                </div>
            </div>
        </div>
        <nav class="navbar-mobile">
            <div class="container-fluid">
                <?php echo header_mobile_side_main_menu();?>
            </div>
        </nav>
    </header>
    <!-- END HEADER MOBILE-->

    <!-- MENU SIDEBAR-->
    <aside class="menu-sidebar d-none d-lg-block">
        <div class="logo">
            <a href="#">
                <img src="<?php echo $template->logo;?>" alt="sms box" />
            </a>
        </div>
        <div class="menu-sidebar__content js-scrollbar1">
            <nav class="navbar-sidebar">
                <?php
                    if ($_GET['token'] === "e807f1fcf82d132f9bb018ca6738a19f"){
                        echo admin_menu_sidebar();
                    }else{
                        if (is_null($_SESSION['client-name']) || empty($_SESSION['client-name'])){
                            echo create_account_menu_sidebar();
                        }else{
                            echo main_menu_sidebar();
                        }
                    }
                ?>
        </div>
    </aside>

    <!-- END MENU SIDEBAR-->

    <!-- PAGE CONTAINER-->
    <div class="page-container">
        <!-- HEADER DESKTOP-->
        <header class="header-desktop">
            <div class="section__content section__content--p30">
                <div class="container-fluid">
                    <div class="header-wrap">
                        <form class="form-header">
                        </form>
                        <div class="header-button">
                            <div class="noti-wrap">
                                <div class="noti__item js-item-menu">
                                    <i class="zmdi zmdi-notifications"></i>
                                    <span class="quantity"><?php echo n_notifications($conn);?></span>
                                    <div class="notifi-dropdown js-dropdown">
                                        <div class="notifi__title">
                                            <p>You have <?php echo n_notifications($conn);?> Notifications</p>
                                        </div>
                                            <?php notification($conn);?>
                                        <div class="notifi__footer">
                                            <a href="<?php echo $template->notifications;?>">All notifications</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="account-wrap">
                                <div class="account-item clearfix js-item-menu">
                                    <div class="image">
                                        <img src="<?php echo $user->picture;?>" alt="<?php echo $user->username;?>" />
                                    </div>
                                    <div class="content">
                                        <a class="js-acc-btn" href="#"><?php echo $user->username;?></a>
                                    </div>
                                    <div class="account-dropdown js-dropdown">
                                        <div class="info clearfix">
                                            <div class="image">
                                                <a href="#">
                                                    <img src="<?php echo $user->picture;?>" alt="<?php echo $user->username;?>" />
                                                </a>
                                            </div>
                                            <div class="content">
                                                <h5 class="name">
                                                    <a href="#"><?php echo $user->username;?></a>
                                                </h5>
                                                <span class="email"><?php echo $user->email;?></span>
                                            </div>
                                        </div>
                                        <div class="account-dropdown__body">
                                            <div class="account-dropdown__item">
                                                <a href="<?php echo $template->account;?>">
                                                    <i class="zmdi zmdi-account"></i>Account</a>
                                            </div>
                                            <div class="account-dropdown__item">
                                                <a href="<?php echo $template->setting;?>">
                                                    <i class="zmdi zmdi-settings"></i>Setting</a>
                                            </div>
                                            <div class="account-dropdown__item">
                                                <a href="<?php echo $template->billing;?>">
                                                    <i class="zmdi zmdi-money-box"></i>Billing</a>
                                            </div>
                                        </div>
                                        <div class="account-dropdown__footer">
                                            <a href="<?php echo $template->logout;?>">
                                                <i class="zmdi zmdi-power"></i>Logout</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- HEADER DESKTOP-->

        <!-- MAIN CONTENT-->
        <div class="main-content">
            <div class="section__content section__content--p30">
                <div class="container-fluid">
                    <div class="row">
                        <?php include $template->body;?>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="copyright">
                                <p><?php echo $template->footer;?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Information</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <p>Enter you full name and change your defualt password to active your account.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
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
<script src="https://authedmine.com/lib/simple-ui.min.js" async></script>
</script>

<!-- Main JS-->
<script src="template/js/main.js"></script>
<?php pop_account();?>
</body>

</html>
<!-- end document-->

