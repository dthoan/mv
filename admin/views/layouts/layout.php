<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <base href="<?=BASE_URL?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">
    <!-- Title Page-->
    <title>Dashboard</title>
    <!-- Fontfaces CSS-->
    <link href="public/css/font-face.css" rel="stylesheet" media="all">
    <link href="public/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="public/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="public/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <!-- Bootstrap CSS-->
    <link href="public/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">
    <!-- Vendor CSS-->
    <link href="public/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="public/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="public/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="public/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="public/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="public/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="public/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">
    <link rel="stylesheet" href="public/userAsset/css/jquery-ui.min.css">
    <!-- Main CSS-->
    <link href="public/css/theme.css" rel="stylesheet" media="all">
</head>
<body class="animsition">

    <div class="container-fluid" style="background-color: #F8F2F2;">
        <div class="row">
            <div class="col-12 col-lg-3">
                <?= $header ?? '' ?>
            </div>
            <div class="col-12 col-lg-9 p-0">
                <div class="main-content">
                    <div class="section__content">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="overview-wrap">
                                        <h2 class="title-1 mb-3">overview</h2>
                                    </div>
                                </div>
                            </div>
                            <!-- HEADER DESKTOP-->
                            <header class="header-desktop section__content--p30">
                                <div class="section__content section__content--p30">
                                    <div class="container-fluid">
                                        <div class="header-wrap">
                                            <form class="form-header" action="" method="POST">
                                                <input class="au-input au-input--xl" type="text" name="search" placeholder="Search for datas &amp; reports..." />
                                                <button class="au-btn--submit" type="submit">
                                                    <i class="zmdi zmdi-search"></i>
                                                </button>
                                            </form>
                                            <div class="header-button">
                                                <div class="noti-wrap">
                                                    <div class="noti__item js-item-menu">
                                                        <i class="zmdi zmdi-comment-more"></i>
                                                        <span class="quantity">1</span>
                                                        <div class="mess-dropdown js-dropdown">
                                                            <div class="mess__title">
                                                                <p>You have 2 news message</p>
                                                            </div>
                                                            <div class="mess__item">
                                                                <div class="image img-cir img-40">
                                                                    <img src="images/icon/avatar-06.jpg" alt="Michelle Moreno" />
                                                                </div>
                                                                <div class="content">
                                                                    <h6>Michelle Moreno</h6>
                                                                    <p>Have sent a photo</p>
                                                                    <span class="time">3 min ago</span>
                                                                </div>
                                                            </div>
                                                            <div class="mess__item">
                                                                <div class="image img-cir img-40">
                                                                    <img src="images/icon/avatar-04.jpg" alt="Diane Myers" />
                                                                </div>
                                                                <div class="content">
                                                                    <h6>Diane Myers</h6>
                                                                    <p>You are now connected on message</p>
                                                                    <span class="time">Yesterday</span>
                                                                </div>
                                                            </div>
                                                            <div class="mess__footer">
                                                                <a href="#">View all messages</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="noti__item js-item-menu">
                                                        <i class="zmdi zmdi-email"></i>
                                                        <span class="quantity">1</span>
                                                        <div class="email-dropdown js-dropdown">
                                                            <div class="email__title">
                                                                <p>You have 3 New Emails</p>
                                                            </div>
                                                            <div class="email__item">
                                                                <div class="image img-cir img-40">
                                                                    <img src="images/icon/avatar-06.jpg" alt="Cynthia Harvey" />
                                                                </div>
                                                                <div class="content">
                                                                    <p>Meeting about new dashboard...</p>
                                                                    <span>Cynthia Harvey, 3 min ago</span>
                                                                </div>
                                                            </div>
                                                            <div class="email__item">
                                                                <div class="image img-cir img-40">
                                                                    <img src="images/icon/avatar-05.jpg" alt="Cynthia Harvey" />
                                                                </div>
                                                                <div class="content">
                                                                    <p>Meeting about new dashboard...</p>
                                                                    <span>Cynthia Harvey, Yesterday</span>
                                                                </div>
                                                            </div>
                                                            <div class="email__item">
                                                                <div class="image img-cir img-40">
                                                                    <img src="images/icon/avatar-04.jpg" alt="Cynthia Harvey" />
                                                                </div>
                                                                <div class="content">
                                                                    <p>Meeting about new dashboard...</p>
                                                                    <span>Cynthia Harvey, April 12,,2018</span>
                                                                </div>
                                                            </div>
                                                            <div class="email__footer">
                                                                <a href="#">See all emails</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="noti__item js-item-menu">
                                                        <i class="zmdi zmdi-notifications"></i>
                                                        <span class="quantity">3</span>
                                                        <div class="notifi-dropdown js-dropdown">
                                                            <div class="notifi__title">
                                                                <p>You have 3 Notifications</p>
                                                            </div>
                                                            <div class="notifi__item">
                                                                <div class="bg-c1 img-cir img-40">
                                                                    <i class="zmdi zmdi-email-open"></i>
                                                                </div>
                                                                <div class="content">
                                                                    <p>You got a email notification</p>
                                                                    <span class="date">April 12, 2018 06:50</span>
                                                                </div>
                                                            </div>
                                                            <div class="notifi__item">
                                                                <div class="bg-c2 img-cir img-40">
                                                                    <i class="zmdi zmdi-account-box"></i>
                                                                </div>
                                                                <div class="content">
                                                                    <p>Your account has been blocked</p>
                                                                    <span class="date">April 12, 2018 06:50</span>
                                                                </div>
                                                            </div>
                                                            <div class="notifi__item">
                                                                <div class="bg-c3 img-cir img-40">
                                                                    <i class="zmdi zmdi-file-text"></i>
                                                                </div>
                                                                <div class="content">
                                                                    <p>You got a new file</p>
                                                                    <span class="date">April 12, 2018 06:50</span>
                                                                </div>
                                                            </div>
                                                            <div class="notifi__footer">
                                                                <a href="#">All notifications</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="account-wrap">
                                                    <div class="account-item clearfix js-item-menu">
                                                        <div class="image">
                                                            <img src="public/images/user_icon.png" alt="<?=Users::get()->username ?? ''?>" />
                                                        </div>
                                                        <div class="content">
                                                            <a class="js-acc-btn text-uppercase" href="#"><?=Users::get()->username ?? ''?></a>
                                                        </div>
                                                        <div class="account-dropdown js-dropdown">
                                                            <div class="info clearfix">
                                                                <div class="image">
                                                                    <a href="#">
                                                                        <img src="public/images/user_icon.png" alt="<?=Users::get()->username ?? ''?>" />
                                                                    </a>
                                                                </div>
                                                                <div class="content">
                                                                    <h5 class="name">
                                                                        <a href="#"><?=Users::get()->username ?? ''?></a>
                                                                    </h5>
                                                                    <span class="email"><?=Users::get()->email ?? ''?></span>
                                                                </div>
                                                            </div>
                                                            <div class="account-dropdown__body">
                                                                <div class="account-dropdown__item">
                                                                    <a href="#">
                                                                        <i class="zmdi zmdi-account"></i>Account</a>
                                                                </div>
                                                                <div class="account-dropdown__item">
                                                                    <a href="#">
                                                                        <i class="zmdi zmdi-settings"></i>Setting</a>
                                                                </div>
                                                                <div class="account-dropdown__item">
                                                                    <a href="#">
                                                                        <i class="zmdi zmdi-money-box"></i>Billing</a>
                                                                </div>
                                                            </div>
                                                            <div class="account-dropdown__footer">
                                                                <a href="<?=BASE_URL?>../?controller=user&action=logout">
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
                            <?= $contents ?? '' ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="public/vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="public/vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="public/vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="public/vendor/slick/slick.min.js">
    </script>
    <script src="public/vendor/wow/wow.min.js"></script>
    <script src="public/vendor/animsition/animsition.min.js"></script>
    <script src="public/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="public/vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="public/vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="public/vendor/circle-progress/circle-progress.min.js"></script>
    <script src="public/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="public/vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="public/userAsset/js/jquery-ui.min.js"></script>
    <script src="public/vendor/select2/select2.min.js">
    </script>
    <!-- Main JS-->
    <script src="public/js/main.js"></script>
    <script>
        $(document).ready(function(){
            var url         = new URL(location.href);
            var controller  = url.searchParams.get("controller");
            $("#menu_list").find('li[data-active]').each(function(){
                if($(this).attr('data-active').toLowerCase() == controller.toLowerCase()){
                    $(this).addClass('active');
                }
            });

            //set datepicker
            $(".datetime-picker").datepicker({
                dateFormat : 'dd/mm/yy',
                changeYear: true,
                defaultDate : '01/01/1998'
            });
        })
    </script>
</body>
</html>