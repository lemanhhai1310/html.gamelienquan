<?php $title = 'Game Liên Quân'; ?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title><?= $title; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <!--CSS-->
    <link rel="stylesheet" href="assets/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/uikit-3.1.5/css/uikit.min.css">
    <link rel="stylesheet" href="css/layout.css">
    <!--JS-->
    <script src="assets/jquery/jquery-3.3.1.js"></script>
    <script src="assets/uikit-3.1.5/js/uikit.min.js"></script>
    <script src="assets/uikit-3.1.5/js/uikit-icons.min.js"></script>
</head>
<body>
<!-- Load Facebook SDK for JavaScript -->
<div id="fb-root"></div>
<script>
    window.fbAsyncInit = function () {
        FB.init({
            xfbml: true,
            version: 'v3.2'
        });
    };

    (function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

<!-- Your customer chat code -->
<div class="fb-customerchat"
     attribution=setup_tool
     page_id="2428809380682169"
     theme_color="#24892d">
</div>
<section id="app" class="uk-height-viewport uk-offcanvas-content uk-background-cover" data-src="imgs/bg-body.jpg" uk-img>
    <?php include('menu_mobile1.php'); ?>
    <nav id="lq-header" class="uk-navbar-container" uk-navbar uk-sticky>

        <div class="uk-navbar-left">

            <ul class="uk-navbar-nav">
                <li class="uk-hidden@s">
                    <a href="#my-id" class="uk-navbar-toggle" uk-toggle="">
                        <div id="m_nav_menu" class="m_nav menu">
                            <div class="m_nav_ham button_closed" id="m_ham_1"></div>
                            <div class="m_nav_ham button_closed" id="m_ham_2"></div>
                            <div class="m_nav_ham button_closed" id="m_ham_3"></div>
                        </div>
                    </a>
                </li>
                <li class="uk-visible@s"><a href="#">trang chủ</a></li>
                <li class="uk-visible@s"><a href="#">nạp thẻ</a></li>
                <li class="uk-visible@m"><a href="#">hướng dẫn</a></li>
                <li class="uk-visible@s"><a href="#">lịch sử</a></li>
            </ul>

        </div>

        <div class="uk-navbar-right">

            <ul class="uk-navbar-nav">
                <li class="uk-visible@s">
                    <div class="lq-login-regis">
                        <div>
                            <img src="imgs/user1.png" alt="">
                            <span class="login-txt uk-text-uppercase"><a class="uk-link-reset" href="#">đăng nhập</a></span>
                            <div class="regis-forgot">
                                <a href="#">đăng ký</a> / <a href="#">quên mật khẩu</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <a class="uk-padding-remove-right" href="#">
                        <div class="lq-play uk-child-width-auto uk-grid-collapse uk-grid-match uk-height-1-1" uk-grid>
                            <div class="lq-box3 uk-flex uk-flex-middle uk-flex-center uk-text-center">
                                <div>
                                    <span uk-icon="download"></span>
                                    <div>chơi <br> ngay</div>
                                </div>
                            </div>
                            <div class="lq-box2 uk-flex uk-flex-middle uk-flex-center uk-background-cover" data-src="imgs/bg1.png" uk-img>
                                <div class="uk-text-center">
                                    <span>LÀ GAME THỦ, SỢ GÌ MÀ KHÔNG THỬ</span>
                                    <div class="domain">CHOILATRUNG.VN</div>
                                </div>
                            </div>
                        </div>
                    </a>
                </li>
            </ul>

        </div>

    </nav>
    <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slideshow="min-height: 435; max-height: 872; autoplay: true;">
        <ul class="uk-slideshow-items">
            <li>
                <img src="imgs/bg-slide2.png" alt="" uk-cover>
            </li>
            <li>
                <img src="imgs/bg-slide3.png" alt="" uk-cover>
            </li>
            <li>
                <img src="imgs/bg-slide1.png" alt="" uk-cover>
            </li>
        </ul>

        <a class="uk-position-center-left uk-position-small uk-position-z-index" style="z-index: 20" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
        <a class="uk-position-center-right uk-position-small uk-position-z-index" style="z-index: 20" href="#" uk-slidenav-next uk-slideshow-item="next"></a>
    </div>
