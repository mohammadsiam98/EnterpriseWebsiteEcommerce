<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Title -->
    <title>Star Tech - @yield('title')</title>

    <!-- Required Meta Tags Always Come First -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Star Tech is the Best Laptop, Computer, Gaming PC, Component, Accessories, and Gadget retail &amp; Online shop in Bangladesh. Star Tech offers the Latest Tech products with the most competitive price in BD.">

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/img/favicon.ico">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&display=swap" rel="stylesheet">

    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="assets/vendor/font-awesome/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/font-electro.css">

    <link rel="stylesheet" href="assets/vendor/animate.css/animate.min.css">
    <link rel="stylesheet" href="assets/vendor/hs-megamenu/src/hs.megamenu.css">
    <link rel="stylesheet" href="assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css">
    <link rel="stylesheet" href="assets/vendor/fancybox/jquery.fancybox.css">
    <link rel="stylesheet" href="assets/vendor/slick-carousel/slick/slick.css">
    <link rel="stylesheet" href="assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@500&family=Poppins&display=swap');

    </style>
    <!-- CSS Electro Template -->
    <link rel="stylesheet" href="assets/css/theme.css">
    <style>
        .popup {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            display: none;
            z-index: 9999;
        }

        .contentBox {
            position: relative;
            width: 800px;
            height: 400px;
            background: #ededed;
            border-radius: 20px;
            display: flex;
            box-shadow: :0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .contentBox .imgBox {
            position: relative;
            width: 300px;
            height: 400px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .contentBox .imgBox::before {
            content: '';
            position: absolute;
            width: 250px;
            height: 250px;
            background: #e7ffe0;
            border-radius: 50%;
        }

        .contentBox .imgBox img {
            position: relative;
            max-width: 250px;
            z-index: 1;
        }

        .contentBox .content {
            position: relative;
            width: 439px;
            height: 332px;
            display: flex;
            justify-content: center;
            align-items: center;

        }

        .contentBox .content h3 {
            color: #333;
            line-height: 1em;
            font-weight: 300;
            font-size: 1em;
        }

        .contentBox .content h2 {
            font-size: 4em;
            color: #ff4d54;
            line-height: 1em;
        }

        .contentBox .content h2 span {
            color: #333;
            font-size: 25px;
            text-transform: uppercase;
        }

        .contentBox .content p {
            font-weight: 300;
        }

        .contentBox .content a {
            display: inline-block;
            padding: 10px 20px;
            background: #ff4d54;
            color: #fff;
            margin-top: 15px;
            text-decoration: none;
            border-radius: 10px;

        }

        .close {
            position: absolute;
            top: 20px;
            right: 20px;
            width: 40px;
            height: 40px;
            background: #f3f3fe url(img/cross.png);
            background-repeat: no-repeat;
            background-size: 10px;
            background-position: center;
            cursor: pointer;
            border-radius: 50%;
            z-index: 9999;
        }

        @media(max-width:767px) {
            .contentBox {
                width: 300px;
                height: auto;
                flex-direction: column;
            }

            .contentBox .imgBox {
                height: 200px;
                transform: translateY(-50px);
            }

            .contentBox .imgBox::before {
                background: #fff;
            }

            .contentBox .content {
                height: auto;
                text-align: center;
                padding: 20px;
                width: 310px;
                padding-top: 0;
            }

            .close {
                top: -50px;
                right: -10px;
                background: #f3f3fe url(cross.png);
                background-repeat: no-repeat;
                background-size: 10px;
                background-position: center;
            }
        }

    </style>

</head>

<body class="blurpopup">
    <div class="popup">
        <div class="contentBox">
            <div class="close"></div>
            <div class="imgBox">
                <img src="assets/img/popupImage.jpg" alt="">
            </div>
            <div class="content">
                <div>
                    <h3 style="font-weight: bold; font-family: 'Hind Siliguri', sans-serif;">??????????????? ?????????</h3>
                    <h2 style="font-weight: bold; font-family: 'Hind Siliguri', sans-serif;">??????<sup>%</sup> <span>???????????????????????????</span></h2>
                    <p style="font-weight: bold; font-family: 'Hind Siliguri', sans-serif;">?????????????????? ?????????????????? ??????????????? ????????? ??????????????? ?????? ???????????? ??????????????????????????? ???????????? . ?????? ??????????????? ??????????????? ??????????????? ???????????? </p>
                    <a href="#" style="font-weight: bold; font-family: 'Hind Siliguri', sans-serif;">??????????????? ??????????????? ???????????? </a>
                </div>
            </div>
        </div>
    </div>

    <!-- ========== HEADER ========== -->
    <header id="header" class="u-header u-header-left-aligned-nav">
        <div class="u-header__section">
            <!-- Topbar -->
            <div class="u-header-topbar py-2 d-none d-xl-block">
                <div class="container">
                    <div class="d-flex align-items-center">
                        <div class="topbar-left">
                            <a href="#" class="text-gray-110 font-size-13 u-header-topbar__nav-link">Welcome to Worldwide Electronics Store</a>
                        </div>
                        <div class="topbar-right ml-auto">
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item mr-0 u-header-topbar__nav-item u-header-topbar__nav-item-border">
                                    <a href="#" class="u-header-topbar__nav-link"><i class="ec ec-map-pointer mr-1"></i> Store Locator</a>
                                </li>
                                <li class="list-inline-item mr-0 u-header-topbar__nav-item u-header-topbar__nav-item-border">
                                    <a href="../shop/track-your-order.html" class="u-header-topbar__nav-link"><i class="ec ec-transport mr-1"></i> Track Your Order</a>
                                </li>
                                <li class="list-inline-item mr-0 u-header-topbar__nav-item u-header-topbar__nav-item-border u-header-topbar__nav-item-no-border u-header-topbar__nav-item-border-single">
                                    <div class="d-flex align-items-center">
                                        <!-- Language -->
                                        <div class="position-relative">
                                            <a id="languageDropdownInvoker" class="dropdown-nav-link dropdown-toggle d-flex align-items-center u-header-topbar__nav-link font-weight-normal" href="javascript:;" role="button" aria-controls="languageDropdown" aria-haspopup="true" aria-expanded="false" data-unfold-event="hover" data-unfold-target="#languageDropdown" data-unfold-type="css-animation" data-unfold-duration="300" data-unfold-delay="300" data-unfold-hide-on-scroll="true" data-unfold-animation-in="slideInUp" data-unfold-animation-out="fadeOut">
                                                <span class="d-inline-block d-sm-none">US</span>
                                                <span class="d-none d-sm-inline-flex align-items-center"><i class="ec ec-dollar mr-1"></i> Dollar (US)</span>
                                            </a>

                                            <div id="languageDropdown" class="dropdown-menu dropdown-unfold" aria-labelledby="languageDropdownInvoker">
                                                <a class="dropdown-item active" href="#">English</a>
                                                <a class="dropdown-item" href="#">Deutsch</a>
                                                <a class="dropdown-item" href="#">Espa??ol???</a>
                                            </div>
                                        </div>
                                        <!-- End Language -->
                                    </div>
                                </li>
                                @if (Route::has('login'))
                                @auth
                                <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                                <a href="{{route('logout.perform')}}" class="text-sm text-gray-700 dark:text-gray-500 underline">Logout</a>
                                @else
                                <li class="list-inline-item mr-0 u-header-topbar__nav-item u-header-topbar__nav-item-border">
                                    <!-- Account Sidebar Toggle Button -->
                                    <a id="sidebarNavToggler" href="javascript:;" role="button" class="u-header-topbar__nav-link" aria-controls="sidebarContent" aria-haspopup="true" aria-expanded="false" data-unfold-event="click" data-unfold-hide-on-scroll="false" data-unfold-target="#sidebarContent" data-unfold-type="css-animation" data-unfold-animation-in="fadeInRight" data-unfold-animation-out="fadeOutRight" data-unfold-duration="500">
                                        <i class="ec ec-user mr-1"></i> Register <span class="text-gray-50">or</span> Sign in
                                    </a>
                                    <!-- End Account Sidebar Toggle Button -->
                                </li>
                                @endif
                                @endauth
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Topbar -->

            <!-- Logo-Search-header-icons -->
            <div class="py-2 py-xl-5 bg-primary-down-lg">
                <div class="container my-0dot5 my-xl-0">
                    <div class="row align-items-center">
                        <!-- Logo-offcanvas-menu -->
                        <div class="col-auto">
                            <!-- Nav -->
                            <nav class="navbar navbar-expand u-header__navbar py-0 justify-content-xl-between max-width-270 min-width-270">
                                <!-- Logo -->
                                <a class="order-1 order-xl-0 navbar-brand u-header__navbar-brand u-header__navbar-brand-center" href="../home/index.html" aria-label="Electro">
                                    <img src="assets/img/logo.png">
                                </a>
                                <!-- End Logo -->

                                <!-- Fullscreen Toggle Button -->
                                <button id="sidebarHeaderInvokerMenu" type="button" class="navbar-toggler d-block btn u-hamburger mr-3 mr-xl-0" aria-controls="sidebarHeader" aria-haspopup="true" aria-expanded="false" data-unfold-event="click" data-unfold-hide-on-scroll="false" data-unfold-target="#sidebarHeader1" data-unfold-type="css-animation" data-unfold-animation-in="fadeInLeft" data-unfold-animation-out="fadeOutLeft" data-unfold-duration="500">
                                    <span id="hamburgerTriggerMenu" class="u-hamburger__box">
                                        <span class="u-hamburger__inner"></span>
                                    </span>
                                </button>
                                <!-- End Fullscreen Toggle Button -->
                            </nav>
                            <!-- End Nav -->

                            <!-- ========== HEADER SIDEBAR ========== -->
                            <aside id="sidebarHeader1" class="u-sidebar u-sidebar--left" aria-labelledby="sidebarHeaderInvokerMenu">
                                <div class="u-sidebar__scroller">
                                    <div class="u-sidebar__container">
                                        <div class="u-header-sidebar__footer-offset pb-0">
                                            <!-- Toggle Button -->
                                            <div class="position-absolute top-0 right-0 z-index-2 pt-4 pr-7">
                                                <button type="button" class="close ml-auto" aria-controls="sidebarHeader" aria-haspopup="true" aria-expanded="false" data-unfold-event="click" data-unfold-hide-on-scroll="false" data-unfold-target="#sidebarHeader1" data-unfold-type="css-animation" data-unfold-animation-in="fadeInLeft" data-unfold-animation-out="fadeOutLeft" data-unfold-duration="500">
                                                    <span aria-hidden="true"><i class="ec ec-close-remove text-gray-90 font-size-20"></i></span>
                                                </button>
                                            </div>
                                            <!-- End Toggle Button -->

                                            <!-- Content -->
                                            <div class="js-scrollbar u-sidebar__body">
                                                <div id="headerSidebarContent" class="u-sidebar__content u-header-sidebar__content">
                                                    <!-- Logo -->
                                                    <a class="d-flex ml-0 navbar-brand u-header__navbar-brand u-header__navbar-brand-vertical" href="../home/index.html" aria-label="Electro">
                                                        <svg version="1.1" x="0px" y="0px" width="175.748px" height="42.52px" viewBox="0 0 175.748 42.52" enable-background="new 0 0 175.748 42.52" style="margin-bottom: 0;">
                                                            <ellipse class="ellipse-bg" fill-rule="evenodd" clip-rule="evenodd" fill="#FDD700" cx="170.05" cy="36.341" rx="5.32" ry="5.367"></ellipse>
                                                            <path fill-rule="evenodd" clip-rule="evenodd" fill="#333E48" d="M30.514,0.71c-0.034,0.003-0.066,0.008-0.056,0.056
                                                                    C30.263,0.995,29.876,1.181,29.79,1.5c-0.148,0.548,0,1.568,0,2.427v36.459c0.265,0.221,0.506,0.465,0.725,0.734h6.187
                                                                    c0.2-0.25,0.423-0.477,0.669-0.678V1.387C37.124,1.185,36.9,0.959,36.701,0.71H30.514z M117.517,12.731
                                                                    c-0.232-0.189-0.439-0.64-0.781-0.734c-0.754-0.209-2.039,0-3.121,0h-3.176V4.435c-0.232-0.189-0.439-0.639-0.781-0.733
                                                                    c-0.719-0.2-1.969,0-3.01,0h-3.01c-0.238,0.273-0.625,0.431-0.725,0.847c-0.203,0.852,0,2.399,0,3.725
                                                                    c0,1.393,0.045,2.748-0.055,3.725h-6.41c-0.184,0.237-0.629,0.434-0.725,0.791c-0.178,0.654,0,1.813,0,2.765v2.766
                                                                    c0.232,0.188,0.439,0.64,0.779,0.733c0.777,0.216,2.109,0,3.234,0c1.154,0,2.291-0.045,3.176,0.057v21.277
                                                                    c0.232,0.189,0.439,0.639,0.781,0.734c0.719,0.199,1.969,0,3.01,0h3.01c1.008-0.451,0.725-1.889,0.725-3.443
                                                                    c-0.002-6.164-0.047-12.867,0.055-18.625h6.299c0.182-0.236,0.627-0.434,0.725-0.79c0.176-0.653,0-1.813,0-2.765V12.731z
                                                                    M135.851,18.262c0.201-0.746,0-2.029,0-3.104v-3.104c-0.287-0.245-0.434-0.637-0.781-0.733c-0.824-0.229-1.992-0.044-2.898,0
                                                                    c-2.158,0.104-4.506,0.675-5.74,1.411c-0.146-0.362-0.451-0.853-0.893-0.96c-0.693-0.169-1.859,0-2.842,0h-2.842
                                                                    c-0.258,0.319-0.625,0.42-0.725,0.79c-0.223,0.82,0,2.338,0,3.443c0,8.109-0.002,16.635,0,24.381
                                                                    c0.232,0.189,0.439,0.639,0.779,0.734c0.707,0.195,1.93,0,2.955,0h3.01c0.918-0.463,0.725-1.352,0.725-2.822V36.21
                                                                    c-0.002-3.902-0.242-9.117,0-12.473c0.297-4.142,3.836-4.877,8.527-4.686C135.312,18.816,135.757,18.606,135.851,18.262z
                                                                    M14.796,11.376c-5.472,0.262-9.443,3.178-11.76,7.056c-2.435,4.075-2.789,10.62-0.501,15.126c2.043,4.023,5.91,7.115,10.701,7.9
                                                                    c6.051,0.992,10.992-1.219,14.324-3.838c-0.687-1.1-1.419-2.664-2.118-3.951c-0.398-0.734-0.652-1.486-1.616-1.467
                                                                    c-1.942,0.787-4.272,2.262-7.134,2.145c-3.791-0.154-6.659-1.842-7.524-4.91h19.452c0.146-2.793,0.22-5.338-0.279-7.563
                                                                    C26.961,15.728,22.503,11.008,14.796,11.376z M9,23.284c0.921-2.508,3.033-4.514,6.298-4.627c3.083-0.107,4.994,1.976,5.685,4.627
                                                                    C17.119,23.38,12.865,23.38,9,23.284z M52.418,11.376c-5.551,0.266-9.395,3.142-11.76,7.056
                                                                    c-2.476,4.097-2.829,10.493-0.557,15.069c1.997,4.021,5.895,7.156,10.646,7.957c6.068,1.023,11-1.227,14.379-3.781
                                                                    c-0.479-0.896-0.875-1.742-1.393-2.709c-0.312-0.582-1.024-2.234-1.561-2.539c-0.912-0.52-1.428,0.135-2.23,0.508
                                                                    c-0.564,0.262-1.223,0.523-1.672,0.676c-4.768,1.621-10.372,0.268-11.537-4.176h19.451c0.668-5.443-0.419-9.953-2.73-13.037
                                                                    C61.197,13.388,57.774,11.12,52.418,11.376z M46.622,23.343c0.708-2.553,3.161-4.578,6.242-4.686
                                                                    c3.08-0.107,5.08,1.953,5.686,4.686H46.622z M160.371,15.497c-2.455-2.453-6.143-4.291-10.869-4.064
                                                                    c-2.268,0.109-4.297,0.65-6.02,1.524c-1.719,0.873-3.092,1.957-4.234,3.217c-2.287,2.519-4.164,6.004-3.902,11.007
                                                                    c0.248,4.736,1.979,7.813,4.627,10.326c2.568,2.439,6.148,4.254,10.867,4.064c4.457-0.18,7.889-2.115,10.199-4.684
                                                                    c2.469-2.746,4.012-5.971,3.959-11.063C164.949,21.134,162.732,17.854,160.371,15.497z M149.558,33.952
                                                                    c-3.246-0.221-5.701-2.615-6.41-5.418c-0.174-0.689-0.26-1.25-0.4-2.166c-0.035-0.234,0.072-0.523-0.045-0.77
                                                                    c0.682-3.698,2.912-6.257,6.799-6.547c2.543-0.189,4.258,0.735,5.52,1.863c1.322,1.182,2.303,2.715,2.451,4.967
                                                                    C157.789,30.669,154.185,34.267,149.558,33.952z M88.812,29.55c-1.232,2.363-2.9,4.307-6.13,4.402
                                                                    c-4.729,0.141-8.038-3.16-8.025-7.563c0.004-1.412,0.324-2.65,0.947-3.726c1.197-2.061,3.507-3.688,6.633-3.612
                                                                    c3.222,0.079,4.966,1.708,6.632,3.668c1.328-1.059,2.529-1.948,3.9-2.99c0.416-0.315,1.076-0.688,1.227-1.072
                                                                    c0.404-1.031-0.365-1.502-0.891-2.088c-2.543-2.835-6.66-5.377-11.704-5.137c-6.02,0.288-10.218,3.697-12.484,7.846
                                                                    c-1.293,2.365-1.951,5.158-1.729,8.408c0.209,3.053,1.191,5.496,2.619,7.508c2.842,4.004,7.385,6.973,13.656,6.377
                                                                    c5.976-0.568,9.574-3.936,11.816-8.354c-0.141-0.271-0.221-0.604-0.336-0.902C92.929,31.364,90.843,30.485,88.812,29.55z">
                                                            </path>
                                                        </svg>
                                                    </a>
                                                    <!-- End Logo -->

                                                    <!-- List -->
                                                    <ul id="headerSidebarList" class="u-header-collapse__nav">
                                                        <!-- Home Section -->
                                                        <li class="u-has-submenu u-header-collapse__submenu">
                                                            <a class="u-header-collapse__nav-link u-header-collapse__nav-pointer" href="javascript:;" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="headerSidebarHomeCollapse" data-target="#headerSidebarHomeCollapse">
                                                                Home & Static Pages
                                                            </a>

                                                            <div id="headerSidebarHomeCollapse" class="collapse" data-parent="#headerSidebarContent">
                                                                <ul id="headerSidebarHomeMenu" class="u-header-collapse__nav-list">
                                                                    <!-- Home - v1 -->
                                                                    <li><a class="u-header-collapse__submenu-nav-link" href="../home/index.html">Home v1</a></li>
                                                                    <!-- End Home - v1 -->
                                                                    <!-- Home - v2 -->
                                                                    <li><a class="u-header-collapse__submenu-nav-link" href="../home/home-v2.html">Home v2</a></li>
                                                                    <!-- End Home - v2 -->
                                                                    <!-- Home - v3 -->
                                                                    <li><a class="u-header-collapse__submenu-nav-link" href="../home/home-v3.html">Home v3</a></li>
                                                                    <!-- End Home - v3 -->
                                                                    <!-- Home - v3-full-color-bg -->
                                                                    <li><a class="u-header-collapse__submenu-nav-link" href="../home/home-v3-full-color-bg.html">Home v3.1</a></li>
                                                                    <!-- End Home - v3-full-color-bg -->
                                                                    <!-- Home - v4 -->
                                                                    <li><a class="u-header-collapse__submenu-nav-link" href="../home/home-v4.html">Home v4</a></li>
                                                                    <!-- End Home - v4 -->
                                                                    <!-- Home - v5 -->
                                                                    <li><a class="u-header-collapse__submenu-nav-link" href="../home/home-v5.html">Home v5</a></li>
                                                                    <!-- End Home - v5 -->
                                                                    <!-- Home - v6 -->
                                                                    <li><a class="u-header-collapse__submenu-nav-link" href="../home/home-v6.html">Home v6</a></li>
                                                                    <!-- End Home - v6 -->
                                                                    <!-- Home - v7 -->
                                                                    <li><a class="u-header-collapse__submenu-nav-link" href="../home/home-v7.html">Home v7</a></li>
                                                                    <!-- End Home - v7 -->
                                                                    <!-- About -->
                                                                    <li><a class="u-header-collapse__submenu-nav-link" href="../home/about.html">About</a></li>
                                                                    <!-- End About -->
                                                                    <!-- Contact v1 -->
                                                                    <li><a class="u-header-collapse__submenu-nav-link" href="../home/contact-v1.html">Contact v1</a></li>
                                                                    <!-- End Contact v1 -->
                                                                    <!-- Contact v2 -->
                                                                    <li><a class="u-header-collapse__submenu-nav-link" href="../home/contact-v2.html">Contact v2</a></li>
                                                                    <!-- End Contact v2 -->
                                                                    <!-- FAQ -->
                                                                    <li><a class="u-header-collapse__submenu-nav-link" href="../home/faq.html">FAQ</a></li>
                                                                    <!-- End FAQ -->
                                                                    <!-- Store Directory -->
                                                                    <li><a class="u-header-collapse__submenu-nav-link" href="../home/store-directory.html">Store Directory</a></li>
                                                                    <!-- End Store Directory -->
                                                                    <!-- Terms and Conditions -->
                                                                    <li><a class="u-header-collapse__submenu-nav-link" href="../home/terms-and-conditions.html">Terms and Conditions</a></li>
                                                                    <!-- End Terms and Conditions -->
                                                                    <!-- 404 -->
                                                                    <li><a class="u-header-collapse__submenu-nav-link" href="../home/404.html">404</a></li>
                                                                    <!-- End 404 -->
                                                                </ul>
                                                            </div>
                                                        </li>
                                                        <!-- End Home Section -->

                                                        <!-- Shop Pages -->
                                                        <li class="u-has-submenu u-header-collapse__submenu">
                                                            <a class="u-header-collapse__nav-link u-header-collapse__nav-pointer" href="javascript:;" data-target="#headerSidebarPagesCollapse" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="headerSidebarPagesCollapse">
                                                                Shop Pages
                                                            </a>

                                                            <div id="headerSidebarPagesCollapse" class="collapse" data-parent="#headerSidebarContent">
                                                                <ul id="headerSidebarPagesMenu" class="u-header-collapse__nav-list">
                                                                    <!-- Shop Grid -->
                                                                    <li><a class="u-header-collapse__submenu-nav-link" href="../shop/shop-grid.html">Shop Grid</a></li>
                                                                    <!-- End Shop Grid -->

                                                                    <!-- Shop Grid Extended -->
                                                                    <li><a class="u-header-collapse__submenu-nav-link" href="../shop/shop-grid-extended.html">Shop Grid Extended</a></li>
                                                                    <!-- End Shop Grid Extended -->

                                                                    <!-- Shop List View -->
                                                                    <li><a class="u-header-collapse__submenu-nav-link" href="../shop/shop-list-view.html">Shop List View</a></li>
                                                                    <!-- End Shop List View -->

                                                                    <!-- Shop List View Small -->
                                                                    <li><a class="u-header-collapse__submenu-nav-link" href="../shop/shop-list-view-small.html">Shop List View Small</a></li>
                                                                    <!-- End Shop List View Small -->

                                                                    <!-- Shop Left Sidebar -->
                                                                    <li><a class="u-header-collapse__submenu-nav-link" href="../shop/shop-left-sidebar.html">Shop Left Sidebar</a></li>
                                                                    <!-- End Shop Left Sidebar -->

                                                                    <!-- Shop Full width -->
                                                                    <li><a class="u-header-collapse__submenu-nav-link" href="../shop/shop-full-width.html">Shop Full width</a></li>
                                                                    <!-- End Shop Full width -->

                                                                    <!-- Shop Right Sidebar -->
                                                                    <li><a class="u-header-collapse__submenu-nav-link" href="../shop/shop-right-sidebar.html">Shop Right Sidebar</a></li>
                                                                    <!-- End Shop Right Sidebar -->
                                                                </ul>
                                                            </div>
                                                        </li>
                                                        <!-- End Shop Pages -->

                                                        <!-- Product Categories -->
                                                        <li class="u-has-submenu u-header-collapse__submenu">
                                                            <a class="u-header-collapse__nav-link u-header-collapse__nav-pointer" href="javascript:;" data-target="#headerSidebarBlogCollapse" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="headerSidebarBlogCollapse">
                                                                Product Categories
                                                            </a>

                                                            <div id="headerSidebarBlogCollapse" class="collapse" data-parent="#headerSidebarContent">
                                                                <ul id="headerSidebarBlogMenu" class="u-header-collapse__nav-list">
                                                                    <!-- 4 Column Sidebar -->
                                                                    <li><a class="u-header-collapse__submenu-nav-link" href="../shop/product-categories-4-column-sidebar.html">4 Column Sidebar</a></li>
                                                                    <!-- End 4 Column Sidebar -->

                                                                    <!-- 5 Column Sidebar -->
                                                                    <li><a class="u-header-collapse__submenu-nav-link" href="../shop/product-categories-5-column-sidebar.html">5 Column Sidebar</a></li>
                                                                    <!-- End 5 Column Sidebar -->

                                                                    <!-- 6 Column Full width -->
                                                                    <li><a class="u-header-collapse__submenu-nav-link" href="../shop/product-categories-6-column-full-width.html">6 Column Full width</a></li>
                                                                    <!-- End 6 Column Full width -->

                                                                    <!-- 7 Column Full width -->
                                                                    <li><a class="u-header-collapse__submenu-nav-link" href="../shop/product-categories-7-column-full-width.html">7 Column Full width</a></li>
                                                                    <!-- End 7 Column Full width -->
                                                                </ul>
                                                            </div>
                                                        </li>
                                                        <!-- End Product Categories -->

                                                        <!-- Single Product Pages -->
                                                        <li class="u-has-submenu u-header-collapse__submenu">
                                                            <a class="u-header-collapse__nav-link u-header-collapse__nav-pointer" href="javascript:;" data-target="#headerSidebarShopCollapse" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="headerSidebarShopCollapse">
                                                                Single Product Pages
                                                            </a>

                                                            <div id="headerSidebarShopCollapse" class="collapse" data-parent="#headerSidebarContent">
                                                                <ul id="headerSidebarShopMenu" class="u-header-collapse__nav-list">
                                                                    <!-- Single Product Extended -->
                                                                    <li><a class="u-header-collapse__submenu-nav-link" href="../shop/single-product-extended.html">Single Product Extended</a></li>
                                                                    <!-- End Single Product Extended -->

                                                                    <!-- Single Product Fullwidth -->
                                                                    <li><a class="u-header-collapse__submenu-nav-link" href="../shop/single-product-fullwidth.html">Single Product Fullwidth</a></li>
                                                                    <!-- End Single Product Fullwidth -->

                                                                    <!-- Single Product Sidebar -->
                                                                    <li><a class="u-header-collapse__submenu-nav-link" href="../shop/single-product-sidebar.html">Single Product Sidebar</a></li>
                                                                    <!-- End Single Product Sidebar -->
                                                                </ul>
                                                            </div>
                                                        </li>
                                                        <!-- End Single Product Pages -->

                                                        <!-- Ecommerce Pages -->
                                                        <li class="u-has-submenu u-header-collapse__submenu">
                                                            <a class="u-header-collapse__nav-link u-header-collapse__nav-pointer" href="javascript:;" data-target="#headerSidebarDemosCollapse" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="headerSidebarDemosCollapse">
                                                                Ecommerce Pages
                                                            </a>

                                                            <div id="headerSidebarDemosCollapse" class="collapse" data-parent="#headerSidebarContent">
                                                                <ul id="headerSidebarDemosMenu" class="u-header-collapse__nav-list">
                                                                    <!-- Shop -->
                                                                    <li><a class="u-header-collapse__submenu-nav-link" href="../shop/shop.html">Shop</a></li>
                                                                    <!-- End Shop -->

                                                                    <!-- Cart -->
                                                                    <li><a class="u-header-collapse__submenu-nav-link" href="../shop/cart.html">Cart</a></li>
                                                                    <!-- End Cart -->

                                                                    <!-- Checkout -->
                                                                    <li><a class="u-header-collapse__submenu-nav-link" href="../shop/checkout.html">Checkout</a></li>
                                                                    <!-- End Checkout -->

                                                                    <!-- My Account -->
                                                                    <li><a class="u-header-collapse__submenu-nav-link" href="../shop/my-account.html">My Account</a></li>
                                                                    <!-- End My Account -->

                                                                    <!-- Track your Order -->
                                                                    <li><a class="u-header-collapse__submenu-nav-link" href="../shop/track-your-order.html">Track your Order</a></li>
                                                                    <!-- End Track your Order -->

                                                                    <!-- Compare -->
                                                                    <li><a class="u-header-collapse__submenu-nav-link" href="../shop/compare.html">Compare</a></li>
                                                                    <!-- End Compare -->

                                                                    <!-- wishlist -->
                                                                    <li><a class="u-header-collapse__submenu-nav-link" href="../shop/wishlist.html">wishlist</a></li>
                                                                    <!-- End wishlist -->
                                                                </ul>
                                                            </div>
                                                        </li>
                                                        <!-- End Ecommerce Pages -->

                                                        <!-- Shop Columns -->
                                                        <li class="u-has-submenu u-header-collapse__submenu">
                                                            <a class="u-header-collapse__nav-link u-header-collapse__nav-pointer" href="javascript:;" data-target="#headerSidebardocsCollapse" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="headerSidebardocsCollapse">
                                                                Shop Columns
                                                            </a>

                                                            <div id="headerSidebardocsCollapse" class="collapse" data-parent="#headerSidebarContent">
                                                                <ul id="headerSidebardocsMenu" class="u-header-collapse__nav-list">
                                                                    <!-- 7 Column Full width -->
                                                                    <li><a class="u-header-collapse__submenu-nav-link" href="../shop/shop-7-columns-full-width.html">7 Column Full width</a></li>
                                                                    <!-- End 7 Column Full width -->

                                                                    <!-- 6 Column Full width -->
                                                                    <li><a class="u-header-collapse__submenu-nav-link" href="../shop/shop-6-columns-full-width.html">6 Column Full width</a></li>
                                                                    <!-- End 6 Column Full width -->

                                                                    <!-- 5 Column Sidebar -->
                                                                    <li><a class="u-header-collapse__submenu-nav-link" href="../shop/shop-5-columns-sidebar.html">5 Column Sidebar</a></li>
                                                                    <!-- End 5 Column Sidebar -->

                                                                    <!-- 4 Column Sidebar -->
                                                                    <li><a class="u-header-collapse__submenu-nav-link" href="../shop/shop-4-columns-sidebar.html">4 Column Sidebar</a></li>
                                                                    <!-- End 4 Column Sidebar -->

                                                                    <!-- 3 Column Sidebar -->
                                                                    <li><a class="u-header-collapse__submenu-nav-link" href="../shop/shop-3-columns-sidebar.html">3 Column Sidebar</a></li>
                                                                    <!-- End 3 Column Sidebar -->
                                                                </ul>
                                                            </div>
                                                        </li>
                                                        <!-- End Shop Columns -->

                                                        <!-- Blog Pages -->
                                                        <li class="u-has-submenu u-header-collapse__submenu">
                                                            <a class="u-header-collapse__nav-link u-header-collapse__nav-pointer" href="javascript:;" data-target="#headerSidebarblogsCollapse" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="headerSidebarblogsCollapse">
                                                                Blog Pages
                                                            </a>

                                                            <div id="headerSidebarblogsCollapse" class="collapse" data-parent="#headerSidebarContent">
                                                                <ul id="headerSidebarblogsMenu" class="u-header-collapse__nav-list">
                                                                    <!-- Blog v1 -->
                                                                    <li><a class="u-header-collapse__submenu-nav-link" href="../blog/blog-v1.html">Blog v1</a></li>
                                                                    <!-- End Blog v1 -->

                                                                    <!-- Blog v2 -->
                                                                    <li><a class="u-header-collapse__submenu-nav-link" href="../blog/blog-v2.html">Blog v2</a></li>
                                                                    <!-- End Blog v2 -->

                                                                    <!-- Blog v3 -->
                                                                    <li><a class="u-header-collapse__submenu-nav-link" href="../blog/blog-v3.html">Blog v3</a></li>
                                                                    <!-- End Blog v3 -->

                                                                    <!-- Blog Full Width -->
                                                                    <li><a class="u-header-collapse__submenu-nav-link" href="../blog/blog-full-width.html">Blog Full Width</a></li>
                                                                    <!-- End Blog Full Width -->

                                                                    <!-- Single Blog Post -->
                                                                    <li><a class="u-header-collapse__submenu-nav-link" href="../blog/single-blog-post.html">Single Blog Post</a></li>
                                                                    <!-- End Single Blog Post -->
                                                                </ul>
                                                            </div>
                                                        </li>
                                                        <!-- End Blog Pages -->
                                                    </ul>
                                                    <!-- End List -->
                                                </div>
                                            </div>
                                            <!-- End Content -->
                                        </div>
                                    </div>
                                </div>
                            </aside>
                            <!-- ========== END HEADER SIDEBAR ========== -->
                        </div>
                        <!-- End Logo-offcanvas-menu -->
                        <!-- Search Bar -->
                        <div class="col d-none d-xl-block">
                            <form class="js-focus-state">
                                <label class="sr-only" for="searchproduct">Search</label>
                                <div class="input-group">
                                    <input type="email" class=" auto-input form-control py-2 pl-5 font-size-15 border-right-0 height-40 border-width-2 rounded-left-pill border-primary" name="email" placeholder="Search for Products" aria-label="Search for Products" aria-describedby="searchProduct1" required>
                                    <div class="input-group-append">
                                        <!-- Select -->
                                        <select class="js-select selectpicker dropdown-select custom-search-categories-select" data-style="btn height-40 text-gray-60 font-weight-normal border-top border-bottom border-left-0 rounded-0 border-primary border-width-2 pl-0 pr-5 py-2">
                                            <option value="one" selected>All Categories</option>
                                            <option value="two">Two</option>
                                            <option value="three">Three</option>
                                            <option value="four">Four</option>
                                        </select>
                                        <!-- End Select -->
                                        <button class="btn btn-primary height-40 py-2 px-3 rounded-right-pill" type="button" id="searchProduct1">
                                            <span class="ec ec-search font-size-24"></span>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- End Search Bar -->
                        <!-- Header Icons -->
                        <div class="col col-xl-auto text-right text-xl-left pl-0 pl-xl-3 position-static">
                            <div class="d-inline-flex">
                                <ul class="d-flex list-unstyled mb-0 align-items-center">
                                    <!-- Search -->
                                    <li class="col d-xl-none px-2 px-sm-3 position-static">
                                        <a id="searchClassicInvoker" class="font-size-22 text-gray-90 text-lh-1 btn-text-secondary" href="javascript:;" role="button" data-toggle="tooltip" data-placement="top" title="Search" aria-controls="searchClassic" aria-haspopup="true" aria-expanded="false" data-unfold-target="#searchClassic" data-unfold-type="css-animation" data-unfold-duration="300" data-unfold-delay="300" data-unfold-hide-on-scroll="true" data-unfold-animation-in="slideInUp" data-unfold-animation-out="fadeOut">
                                            <span class="ec ec-search"></span>
                                        </a>

                                        <!-- Input -->
                                        <div id="searchClassic" class="dropdown-menu dropdown-unfold dropdown-menu-right left-0 mx-2" aria-labelledby="searchClassicInvoker">
                                            <form class="js-focus-state input-group px-3">
                                                <input class="form-control" type="search" placeholder="Search Product">
                                                <div class="input-group-append">
                                                    <button class="btn btn-primary px-3" type="button"><img src="assets/img/search.png"></button>
                                                </div>
                                            </form>
                                        </div>
                                        <!-- End Input -->
                                    </li>
                                    <!-- End Search -->
                                    <li class="col d-none d-xl-block"><a href="../shop/compare.html" class="text-gray-90" data-toggle="tooltip" data-placement="top" title="Compare"><img src="assets/img/comparation.png"></a></li>
                                    <li class="col d-none d-xl-block"><a href="../shop/wishlist.html" class="text-gray-90" data-toggle="tooltip" data-placement="top" title="Favorites"><img src="assets/img/heart.png"></a></li>
                                    <li class="col d-xl-none px-2 px-sm-3"><a href="../shop/my-account.html" class="text-gray-90" data-toggle="tooltip" data-placement="top" title="My Account"><i class="font-size-22 ec ec-user"></i></a></li>
                                    <li class="col pr-xl-0 px-2 px-sm-3">
                                        <a href="../shop/cart.html" class="text-gray-90 position-relative d-flex " data-toggle="tooltip" data-placement="top" title="Cart">
                                            <i class="font-size-22 ec ec-shopping-bag"></i>
                                            <span class="bg-lg-down-black width-22 height-22 bg-primary position-absolute d-flex align-items-center justify-content-center rounded-circle left-12 top-8 font-weight-bold font-size-12">2</span>
                                            <span class="d-none d-xl-block font-weight-bold font-size-16 text-gray-90 ml-3">$1785.00</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- End Header Icons -->
                    </div>
                </div>
            </div>
            <!-- End Logo-Search-header-icons -->

            <!-- Primary-menu-wide -->
            <div class="d-none d-xl-block bg-primary">
                <div class="container">
                    <div class="min-height-45">
                        <!-- Nav -->
                        <nav class="js-mega-menu navbar navbar-expand-md u-header__navbar u-header__navbar--wide u-header__navbar--no-space">
                            <!-- Navigation -->
                            <div id="navBar" class="collapse navbar-collapse u-header__navbar-collapse">
                                <ul class="navbar-nav u-header__navbar-nav">


                                    <!-- Computer & Laptop -->
                                    <li class="nav-item hs-has-mega-menu u-header__nav-item" data-event="hover" data-animation-in="slideInUp" data-animation-out="fadeOut">
                                        <a id="GadgetsMegaMenu" class="nav-link u-header__nav-link u-header__nav-link-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false">Computer</a>

                                        <!-- Gadgets - Mega Menu -->
                                        <div class="hs-mega-menu w-100 u-header__sub-menu" aria-labelledby="GadgetsMegaMenu">
                                            <div class="row u-header__mega-menu-wrapper">
                                                <div class="col-md-6">
                                                    <div class="row">
                                                        <div class="col-md-6 mb-3">
                                                            <a href="#" class="d-block">
                                                                <img class="img-fluid" src="assets/img/desktop-computer.png" alt="Image Description">
                                                            </a>
                                                        </div>
                                                        <div class="col-md-6 mb-3">
                                                            <a href=""><span class="u-header__sub-menu-title">Computer</span></a>
                                                            <ul class="u-header__sub-menu-nav-group">
                                                                <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Special PC</a></li>
                                                                <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Star PC</a></li>
                                                                <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Gaming PC</a></li>
                                                                <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Brand PC</a></li>
                                                                <li><a href="#" class="nav-link u-header__sub-menu-nav-link">All in one PC</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <a href="#" class="d-block">
                                                                <img class="img-fluid" src="assets/img/Laptop.png" alt="Image Description">
                                                            </a>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <a href=""><span class="u-header__sub-menu-title">Laptop</span></a>
                                                            <ul class="u-header__sub-menu-nav-group">
                                                                <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Laptop Accessories</a></li>
                                                                <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Laptop Bag</a></li>
                                                                <li><a href="#" class="nav-link u-header__sub-menu-nav-link">premium Ultrabook</a></li>
                                                                <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Gaming Laptop</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="row">
                                                        <div class="col-md-6 mb-3">
                                                            <a href="#" class="d-block">
                                                                <img class="img-fluid" src="assets/img/ups.png" alt="Image Description">
                                                            </a>
                                                        </div>
                                                        <div class="col-md-6 mb-3">
                                                            <a href=""><span class="u-header__sub-menu-title">UPS</span></a>
                                                            <ul class="u-header__sub-menu-nav-group">
                                                                <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Razer</a></li>
                                                                <li><a href="#" class="nav-link u-header__sub-menu-nav-link">ASUS</a></li>
                                                                <li><a href="#" class="nav-link u-header__sub-menu-nav-link">ACER</a></li>
                                                                <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Xiaomi</a></li>
                                                                <li><a href="#" class="nav-link u-header__sub-menu-nav-link" style="font-weight: bold;">See More</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <a href="#" class="d-block">
                                                                <img class="img-fluid" src="assets/img/tablet.png" alt="Image Description">
                                                            </a>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <a href=""><span class="u-header__sub-menu-title">Tablet</span></a>
                                                            <ul class="u-header__sub-menu-nav-group">
                                                                <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Razer</a></li>
                                                                <li><a href="#" class="nav-link u-header__sub-menu-nav-link">ASUS</a></li>
                                                                <li><a href="#" class="nav-link u-header__sub-menu-nav-link">ACER</a></li>
                                                                <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Xiaomi</a></li>
                                                                <li><a href="#" class="nav-link u-header__sub-menu-nav-link" style="font-weight: bold;">See More</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <!-- End Gadgets - Mega Menu -->
                                    </li>
                                    <!-- Computer & Laptop -->

                                    <!-- Smart Phones -->
                                    <li class="nav-item hs-has-mega-menu u-header__nav-item" data-event="hover" data-animation-in="slideInUp" data-animation-out="fadeOut">
                                        <a id="smartphonesMegaMenu" class="nav-link u-header__nav-link u-header__nav-link-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false">Components</a>

                                        <!-- Smart Phones - Mega Menu -->
                                        <div class="hs-mega-menu w-100 u-header__sub-menu" aria-labelledby="smartphonesMegaMenu">
                                            <div class="row u-header__mega-menu-wrapper">
                                                <div class="col-md-8">
                                                    <div class="row">
                                                        <div class="col-md-4">

                                                            <ul class="u-header__sub-menu-nav-group mb-3">
                                                                <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Casing Cooler</a></li>
                                                                <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Casing</a></li>
                                                                <li><a href="#" class="nav-link u-header__sub-menu-nav-link">CPU Cooler</a></li>
                                                                <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Graphics Card</a></li>
                                                            </ul>

                                                            <ul class="u-header__sub-menu-nav-group">
                                                                <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Motherboard<br> </a></li>
                                                                <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Portable Hard Disk</a></li>
                                                                <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Portable SSD Hard Disk</a></li>
                                                                <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Power Supply</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <ul class="u-header__sub-menu-nav-group mb-3">
                                                                <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Hard Disk Drive</a></li>
                                                                <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Processor</a></li>
                                                                <li><a href="#" class="nav-link u-header__sub-menu-nav-link">RAM</a></li>
                                                                <li><a href="#" class="nav-link u-header__sub-menu-nav-link">SSD</a></li>

                                                            </ul>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <span class="u-header__sub-menu-title" style="font-weight: bold; font-size: 20px;">Monitor</span>
                                                            <ul class="u-header__sub-menu-nav-group mb-3">
                                                                <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Razer</a></li>
                                                                <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Asus</a></li>
                                                                <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Acer</a></li>
                                                                <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Xiaomi</a></li>
                                                                <li><a href="#" class="nav-link u-header__sub-menu-nav-link" style="font-weight: bold;">See More</a></li>
                                                            </ul>
                                                        </div>



                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <a href="#" class="d-block">
                                                        <img class="img-fluid" src="assets/img/components.svg" alt="Image Description">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Smart Phones - Mega Menu -->
                                    </li>
                                    <!-- End Blog -->

                                    <!-- Laptops & Desktops -->
                                    <li class="nav-item hs-has-mega-menu u-header__nav-item" data-event="hover" data-animation-in="slideInUp" data-animation-out="fadeOut">
                                        <a id="laptopsdesktopsMegaMenu" class="nav-link u-header__nav-link u-header__nav-link-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false">Office Equipment</a>

                                        <!-- Laptops & Desktops - Mega Menu -->
                                        <div class="hs-mega-menu w-100 u-header__sub-menu" aria-labelledby="laptopsdesktopsMegaMenu">
                                            <div class="row u-header__mega-menu-wrapper">
                                                <div class="col-md-8">
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <span class="u-header__sub-menu-title">Set 1</span>
                                                            <ul class="u-header__sub-menu-nav-group mb-3">
                                                                <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Barcode Scanner</a></li>
                                                                <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Cartidge</a></li>
                                                                <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Cash Drawyer</a></li>
                                                                <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Conference System</a></li>

                                                            </ul>
                                                            <span class="u-header__sub-menu-title">Set 2</span>
                                                            <ul class="u-header__sub-menu-nav-group">
                                                                <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Dot Matrix Printer</a></li>
                                                                <li><a href="#" class="nav-link u-header__sub-menu-nav-link">FAX<br> </a></li>
                                                                <li><a href="#" class="nav-link u-header__sub-menu-nav-link">ID Card Printer</a></li>
                                                                <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Ink Bottle</a></li>

                                                            </ul>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <span class="u-header__sub-menu-title">Set 3</span>
                                                            <ul class="u-header__sub-menu-nav-group mb-3">
                                                                <li><a href="#" class="nav-link u-header__sub-menu-nav-link">ID Card Printer</a></li>
                                                                <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Ink Bottle</a></li>
                                                                <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Label Printer</a></li>
                                                                <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Laminating Machine</a></li>

                                                            </ul>
                                                            <span class="u-header__sub-menu-title">Set 4</span>
                                                            <ul class="u-header__sub-menu-nav-group">
                                                                <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Large Format Printer</a></li>
                                                                <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Money Counting Machine</a></li>
                                                                <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Photocopier</a></li>
                                                                <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Pos Printer<br> </a></li>
                                                            </ul>
                                                        </div>

                                                        <div class="col-md-3">
                                                            <span class="u-header__sub-menu-title">Set 5</span>
                                                            <ul class="u-header__sub-menu-nav-group mb-3">
                                                                <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Printer</a></li>
                                                                <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Printer Drum</a></li>
                                                                <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Projector</a></li>
                                                                <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Ribbon</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <span class="u-header__sub-menu-title">Set 6</span>
                                                            <ul class="u-header__sub-menu-nav-group mb-3">
                                                                <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Scanner</a></li>
                                                                <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Signage</a></li>
                                                                <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Telephone Set</a></li>
                                                                <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Toner</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <a href="#" class="d-block">
                                                        <img class="img-fluid" src="assets/img/workspace.svg" alt="Image Description">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Laptops & Desktops - Mega Menu -->
                                    </li>
                                    <!-- End Laptops & Desktops -->

                                    <!-- Camera -->
                                    <li class="nav-item hs-has-mega-menu u-header__nav-item" data-event="hover" data-animation-in="slideInUp" data-animation-out="fadeOut">
                                        <a id="GadgetsMegaMenu" class="nav-link u-header__nav-link u-header__nav-link-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false">Camera</a>

                                        <!-- Gadgets - Mega Menu -->
                                        <div class="hs-mega-menu w-100 u-header__sub-menu" aria-labelledby="GadgetsMegaMenu">
                                            <div class="row u-header__mega-menu-wrapper">
                                                <div class="col-md-4">
                                                    <div class="row">
                                                        <div class="col-md-6 mb-3">
                                                            <a href="#" class="d-block">
                                                                <img class="img-fluid" src="assets/img/action-camera.png" alt="Image Description">
                                                            </a>
                                                        </div>
                                                        <div class="col-md-6 mb-3">
                                                            <span class="u-header__sub-menu-title">Action Camera</span>
                                                            <ul class="u-header__sub-menu-nav-group">
                                                                <li><a href="#" class="nav-link u-header__sub-menu-nav-link">DJI</a></li>
                                                                <li><a href="#" class="nav-link u-header__sub-menu-nav-link">EKEN</a></li>
                                                                <li><a href="#" class="nav-link u-header__sub-menu-nav-link">GoPro</a></li>
                                                                <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Insta360</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <a href="#" class="d-block">
                                                                <img class="img-fluid" src="assets/img/dslr-camera.png" alt="Image Description">
                                                            </a>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <span class="u-header__sub-menu-title">DSLR</span>
                                                            <ul class="u-header__sub-menu-nav-group">
                                                                <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Canon</a></li>
                                                                <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Nikon</a></li>
                                                                <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Panasonic</a></li>
                                                                <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Sony</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="row">
                                                        <div class="col-md-6 mb-3">
                                                            <a href="#" class="d-block">
                                                                <img class="img-fluid" src="assets/img/lens.png" alt="Image Description">
                                                            </a>
                                                        </div>
                                                        <div class="col-md-6 mb-3">
                                                            <span class="u-header__sub-menu-title">Camera Lenses</span>
                                                            <ul class="u-header__sub-menu-nav-group">
                                                                <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Sony</a></li>
                                                                <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Nikon</a></li>
                                                                <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Canon</a></li>
                                                                <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Tamron</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <a href="#" class="d-block">
                                                                <img class="img-fluid" src="assets/img/camera.png" alt="Image Description">
                                                            </a>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <span class="u-header__sub-menu-title">Digital Camera</span>
                                                            <ul class="u-header__sub-menu-nav-group">
                                                                <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Sony</a></li>
                                                                <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Canon</a></li>
                                                                <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Camera Flash</a></li>
                                                                <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Camera Tripod</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="row">
                                                        <div class="col-md-6 mb-3">
                                                            <a href="#" class="d-block">
                                                                <img class="img-fluid" src="assets/img/video_Camera.png" alt="Image Description">
                                                            </a>
                                                        </div>
                                                        <div class="col-md-6 mb-3">
                                                            <span class="u-header__sub-menu-title">Video Camera</span>
                                                            <ul class="u-header__sub-menu-nav-group">
                                                                <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Sony</a></li>
                                                                <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Panasonic</a></li>
                                                                <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Canon</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <a href="#" class="d-block">
                                                                <img class="img-fluid" src="assets/img/camera-bag.png" alt="Image Description">
                                                            </a>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <span class="u-header__sub-menu-title">Camera Accessories</span>
                                                            <ul class="u-header__sub-menu-nav-group">
                                                                <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Lens Filter</a></li>
                                                                <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Lens Bag</a></li>
                                                                <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Lens Adapter</a></li>
                                                                <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Others</a></li>
                                                            </ul>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Gadgets - Mega Menu -->
                                    </li>
                                    <!-- End Gadgets -->

                                    <!-- Gadgets -->
                                    <li class="nav-item hs-has-mega-menu u-header__nav-item" data-event="hover" data-animation-in="slideInUp" data-animation-out="fadeOut">
                                        <a id="GadgetsMegaMenu" class="nav-link u-header__nav-link u-header__nav-link-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false">Security & Networking</a>

                                        <!-- Gadgets - Mega Menu -->
                                        <div class="hs-mega-menu w-100 u-header__sub-menu" aria-labelledby="GadgetsMegaMenu">
                                            <div class="row u-header__mega-menu-wrapper">
                                                <div class="col-md-4">
                                                    <div class="row">
                                                        <div class="col-md-6 mb-3">
                                                            <a href="#" class="d-block">
                                                                <img class="img-fluid" src="assets/img/security.png" alt="Image Description">
                                                            </a>
                                                        </div>
                                                        <div class="col-md-6 mb-3">
                                                            <span class="u-header__sub-menu-title">Security</span>
                                                            <ul class="u-header__sub-menu-nav-group">
                                                                <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Access Control</a></li>
                                                                <li><a href="#" class="nav-link u-header__sub-menu-nav-link">CC Camera</a></li>
                                                                <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Door Lock</a></li>
                                                                <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Digital Locker</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <a href="#" class="d-block">
                                                                <img class="img-fluid" src="assets/img/Router.png" alt="Image Description">
                                                            </a>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <span class="u-header__sub-menu-title">Router</span>
                                                            <ul class="u-header__sub-menu-nav-group">
                                                                <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Wavlink</a></li>
                                                                <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Asus</a></li>
                                                                <li><a href="#" class="nav-link u-header__sub-menu-nav-link">TP-Link</a></li>
                                                                <li><a href="#" class="nav-link u-header__sub-menu-nav-link">D-Link</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="row">
                                                        <div class="col-md-6 mb-3">
                                                            <a href="#" class="d-block">
                                                                <img class="img-fluid" src="assets/img/lan.png" alt="Image Description">
                                                            </a>
                                                        </div>
                                                        <div class="col-md-6 mb-3">
                                                            <span class="u-header__sub-menu-title">Lan Card</span>
                                                            <ul class="u-header__sub-menu-nav-group">
                                                                <li><a href="#" class="nav-link u-header__sub-menu-nav-link">TP-Link</a></li>
                                                                <li><a href="#" class="nav-link u-header__sub-menu-nav-link">D-Link</a></li>
                                                                <li><a href="#" class="nav-link u-header__sub-menu-nav-link">ToTolink</a></li>
                                                                <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Wavlink</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <a href="#" class="d-block">
                                                                <img class="img-fluid" src="assets/img/Extender.png" alt="Image Description">
                                                            </a>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <span class="u-header__sub-menu-title">Access Point</span>
                                                            <ul class="u-header__sub-menu-nav-group">
                                                                <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Zyxel</a></li>
                                                                <li><a href="#" class="nav-link u-header__sub-menu-nav-link">TP-Link</a></li>
                                                                <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Wavlink</a></li>
                                                                <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Linksys</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="row">
                                                        <div class="col-md-6 mb-3">
                                                            <a href="#" class="d-block">
                                                                <img class="img-fluid" src="assets/img/network-switch.png" alt="Image Description">
                                                            </a>
                                                        </div>
                                                        <div class="col-md-6 mb-3">
                                                            <span class="u-header__sub-menu-title">Network Switch</span>
                                                            <ul class="u-header__sub-menu-nav-group">
                                                                <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Zyxel</a></li>
                                                                <li><a href="#" class="nav-link u-header__sub-menu-nav-link">ToTolink</a></li>
                                                                <li><a href="#" class="nav-link u-header__sub-menu-nav-link">TP-Link</a></li>
                                                                <li><a href="#" class="nav-link u-header__sub-menu-nav-link">NETGEAR</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <a href="#" class="d-block">
                                                                <img class="img-fluid" src="assets/img/wire.png" alt="Image Description">
                                                            </a>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <span class="u-header__sub-menu-title">Fibre & UTP Cable Accessories</span>
                                                            <ul class="u-header__sub-menu-nav-group">
                                                                <li><a href="#" class="nav-link u-header__sub-menu-nav-link">R&M</a></li>
                                                                <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Rosenberger</a></li>
                                                            </ul>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Gadgets - Mega Menu -->
                                    </li>
                                    <!-- End Gadgets -->


                                    <!-- Cameras & Accessories -->
                                    <li class="nav-item hs-has-mega-menu u-header__nav-item" data-event="hover" data-animation-in="slideInUp" data-animation-out="fadeOut">
                                        <a id="CamerasAccessoriesMegaMenu" class="nav-link u-header__nav-link u-header__nav-link-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false">Accessories</a>

                                        <!-- Cameras & Accessories - Mega Menu -->
                                        <div class="hs-mega-menu w-100 u-header__sub-menu" aria-labelledby="CamerasAccessoriesMegaMenu">
                                            <div class="row u-header__mega-menu-wrapper">
                                                <div class="col-md-8">
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <span class="u-header__sub-menu-title">Keyboard</span>
                                                            <ul class="u-header__sub-menu-nav-group mb-3">
                                                                <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Razer</a></li>
                                                                <li><a href="#" class="nav-link u-header__sub-menu-nav-link">GAMDIAS</a></li>
                                                                <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Apple</a></li>
                                                                <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Corsair</a></li>

                                                            </ul>
                                                            <span class="u-header__sub-menu-title">Mouse</span>
                                                            <ul class="u-header__sub-menu-nav-group">
                                                                <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Razer</a></li>
                                                                <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Gamdias</a></li>
                                                                <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Asus</a></li>
                                                                <li><a href="#" class="nav-link u-header__sub-menu-nav-link">MaxGreen</a></li>

                                                            </ul>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <span class="u-header__sub-menu-title">Headphone</span>
                                                            <ul class="u-header__sub-menu-nav-group mb-3">
                                                                <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Gigabyte</a></li>
                                                                <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Razer</a></li>
                                                                <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Fantech</a></li>
                                                                <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Havit</a></li>
                                                            </ul>
                                                            <span class="u-header__sub-menu-title">Mouse Pad</span>
                                                            <ul class="u-header__sub-menu-nav-group">
                                                                <li><a href="#" class="nav-link u-header__sub-menu-nav-link">RAZER</a></li>
                                                                <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Gamdias</a></li>
                                                                <li><a href="#" class="nav-link u-header__sub-menu-nav-link">ASUS</a></li>
                                                                <li><a href="#" class="nav-link u-header__sub-menu-nav-link">CORSAIR</a></li>

                                                            </ul>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <span class="u-header__sub-menu-title">Speaker & Home Theatre</span>
                                                            <ul class="u-header__sub-menu-nav-group mb-3">
                                                                <li><a href="#" class="nav-link u-header__sub-menu-nav-link">RAZER</a></li>
                                                                <li><a href="#" class="nav-link u-header__sub-menu-nav-link">JBL</a></li>
                                                                <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Microlab</a></li>
                                                                <li><a href="#" class="nav-link u-header__sub-menu-nav-link">SONY</a></li>

                                                            </ul>
                                                            <span class="u-header__sub-menu-title">Bluetooth Speakers</span>
                                                            <ul class="u-header__sub-menu-nav-group">
                                                                <li><a href="#" class="nav-link u-header__sub-menu-nav-link">JBL</a></li>
                                                                <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Anker</a></li>
                                                                <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Sony</a></li>
                                                                <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Samsung</a></li>

                                                            </ul>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <span class="u-header__sub-menu-title">Ear Phone</span>
                                                            <ul class="u-header__sub-menu-nav-group">
                                                                <li><a href="#" class="nav-link u-header__sub-menu-nav-link">RAZER</a></li>
                                                                <li><a href="#" class="nav-link u-header__sub-menu-nav-link">XIAOMI</a></li>
                                                                <li><a href="#" class="nav-link u-header__sub-menu-nav-link">A4Tech</a></li>
                                                                <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Realme</a></li>
                                                                <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Rappo</a></li>
                                                                <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Apple</a></li>
                                                                <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Logitech</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <span class="u-header__sub-menu-title">Webcam</span>
                                                    <ul class="u-header__sub-menu-nav-group">
                                                        <li><a href="#" class="nav-link u-header__sub-menu-nav-link">RAZER</a></li>
                                                        <li><a href="#" class="nav-link u-header__sub-menu-nav-link">XIAOMI</a></li>
                                                        <li><a href="#" class="nav-link u-header__sub-menu-nav-link">A4Tech</a></li>
                                                        <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Realme</a></li>
                                                        <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Rappo</a></li>
                                                        <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Apple</a></li>
                                                        <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Logitech</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Cameras & Accessories - Mega Menu -->
                                    </li>
                                    <!-- End Cameras & Accessories -->

                                    <!-- Camera -->
                                    <li class="nav-item hs-has-mega-menu u-header__nav-item" data-event="hover" data-animation-in="slideInUp" data-animation-out="fadeOut">
                                        <a id="GadgetsMegaMenu" class="nav-link u-header__nav-link u-header__nav-link-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false">Gaming</a>

                                        <!-- Gadgets - Mega Menu -->
                                        <div class="hs-mega-menu w-100 u-header__sub-menu" aria-labelledby="GadgetsMegaMenu">
                                            <div class="row u-header__mega-menu-wrapper">
                                                <div class="col-md-4">
                                                    <div class="row">
                                                        <div class="col-md-6 mb-3">
                                                            <a href="#" class="d-block">
                                                                <img class="img-fluid" src="assets/img/smart-watch.png" alt="Image Description">
                                                            </a>
                                                        </div>
                                                        <div class="col-md-6 mb-3">
                                                            <span class="u-header__sub-menu-title">Smart Watch</span>
                                                            <ul class="u-header__sub-menu-nav-group">
                                                                <li><a href="#" class="nav-link u-header__sub-menu-nav-link">RAZER</a></li>
                                                                <li><a href="#" class="nav-link u-header__sub-menu-nav-link">APPLE</a></li>
                                                                <li><a href="#" class="nav-link u-header__sub-menu-nav-link">XIAOMI</a></li>
                                                                <li><a href="#" class="nav-link u-header__sub-menu-nav-link">HUAWEI</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-md-6 mb-3">
                                                            <a href="#" class="d-block">
                                                                <img class="img-fluid" src="assets/img/stabilizer.png" alt="Image Description">
                                                            </a>
                                                        </div>
                                                        <div class="col-md-6 mb-3">
                                                            <span class="u-header__sub-menu-title">Gimbal</span>
                                                            <ul class="u-header__sub-menu-nav-group">
                                                                <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Gudsen</a></li>
                                                                <li><a href="#" class="nav-link u-header__sub-menu-nav-link">DJI</a></li>
                                                                <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Zhiyun</a></li>
                                                                <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Baseus</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="row">
                                                        <div class="col-md-6 mb-3">
                                                            <a href="#" class="d-block">
                                                                <img class="img-fluid" src="assets/img/game-console.png" alt="Image Description">
                                                            </a>
                                                        </div>
                                                        <div class="col-md-6 mb-3">
                                                            <span class="u-header__sub-menu-title">Gaming Console</span>
                                                            <ul class="u-header__sub-menu-nav-group">
                                                                <li><a href="#" class="nav-link u-header__sub-menu-nav-link">PlayStation</a></li>
                                                                <li><a href="#" class="nav-link u-header__sub-menu-nav-link">XBox</a></li>
                                                                <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Nintendo</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-md-6 mb-3">
                                                            <a href="#" class="d-block">
                                                                <img class="img-fluid" src="assets/img/studio.png" alt="Image Description">
                                                            </a>
                                                        </div>
                                                        <div class="col-md-6 mb-3">
                                                            <span class="u-header__sub-menu-title">Studio Equipment</span>
                                                            <ul class="u-header__sub-menu-nav-group">
                                                                <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Studio Microphone</a></li>
                                                                <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Studio Monitors</a></li>
                                                                <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Studio Headphones</a></li>
                                                                <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Audio Interfaces</a></li>
                                                                <li><a href="#" class="nav-link u-header__sub-menu-nav-link">MIDI Controller & Keyboard</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="row">
                                                        <div class="col-md-6 mb-3">
                                                            <a href="#" class="d-block">
                                                                <img class="img-fluid" src="assets/img/gaming-chair.png" alt="Image Description">
                                                            </a>
                                                        </div>
                                                        <div class="col-md-6 mb-3">
                                                            <span class="u-header__sub-menu-title">Gaming Chair</span>
                                                            <ul class="u-header__sub-menu-nav-group">
                                                                <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Antech</a></li>
                                                                <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Razer</a></li>
                                                                <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Gamdias</a></li>
                                                                <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Corsair</a></li>
                                                                <li><a href="#" class="nav-link u-header__sub-menu-nav-link">See All</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <a href="#" class="d-block">
                                                                <img class="img-fluid" src="assets/img/camera-bag.png" alt="Image Description">
                                                            </a>
                                                        </div>
                                                        <div class="col-md-6 mb-3">
                                                            <span class="u-header__sub-menu-title">Others</span>
                                                            <ul class="u-header__sub-menu-nav-group">
                                                                <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Keyboard</a></li>
                                                                <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Headphone</a></li>
                                                                <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Mouse</a></li>
                                                                <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Headphone</a></li>
                                                                <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Mouse Pad</a></li>
                                                                <li><a href="#" class="nav-link u-header__sub-menu-nav-link">See All</a></li>
                                                            </ul>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Gadgets - Mega Menu -->
                                    </li>
                                    <!-- End Gadgets -->


                                    <!-- Others -->
                                    <li class="nav-item hs-has-mega-menu u-header__nav-item" data-event="hover" data-animation-in="slideInUp" data-animation-out="fadeOut">
                                        <a id="TVMegaMenu" class="nav-link u-header__nav-link u-header__nav-link-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false">Others</a>

                                        <!-- TV & Audio - Mega Menu -->
                                        <div class="hs-mega-menu w-100 u-header__sub-menu" aria-labelledby="TVMegaMenu">
                                            <div class="row u-header__mega-menu-wrapper">
                                                <div class="col-md-3">
                                                    <span class="u-header__sub-menu-title" style="font-weight: bold; font-size: 20px;">Presenter</span>
                                                    <ul class="u-header__sub-menu-nav-group mb-3">
                                                        <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Fantech</a></li>
                                                        <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Logitech</a></li>
                                                        <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Targus</a></li>
                                                        <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Basius</a></li>
                                                        <li><a href="#" class="nav-link u-header__sub-menu-nav-link" style="font-weight: bold;">See More</a></li>
                                                    </ul>
                                                    <span class="u-header__sub-menu-title" style="font-weight: bold; font-size: 20px;">Microphone</span>
                                                    <ul class="u-header__sub-menu-nav-group mb-3">
                                                        <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Razer</a></li>
                                                        <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Fintech</a></li>
                                                        <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Boya</a></li>
                                                        <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Rode</a></li>
                                                        <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Audio Technica</a></li>
                                                        <li><a href="#" class="nav-link u-header__sub-menu-nav-link" style="font-weight: bold;">See More</a></li>
                                                    </ul>
                                                </div>

                                                <div class="col-md-3">
                                                    <span class="u-header__sub-menu-title" style="font-weight: bold; font-size: 20px;">Memory Card</span>
                                                    <ul class="u-header__sub-menu-nav-group mb-3">
                                                        <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Sandisk</a></li>
                                                        <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Transcend</a></li>
                                                        <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Adata</a></li>
                                                        <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Sony</a></li>
                                                        <li><a href="#" class="nav-link u-header__sub-menu-nav-link" style="font-weight: bold;">See More</a></li>
                                                    </ul>

                                                    <span class="u-header__sub-menu-title" style="font-weight: bold; font-size: 20px;">Pen Drive</span>
                                                    <ul class="u-header__sub-menu-nav-group mb-3">
                                                        <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Sandisk</a></li>
                                                        <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Transcend</a></li>
                                                        <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Adata</a></li>
                                                        <li><a href="#" class="nav-link u-header__sub-menu-nav-link">HP</a></li>
                                                        <li><a href="#" class="nav-link u-header__sub-menu-nav-link" style="font-weight: bold;">See More</a></li>
                                                    </ul>
                                                </div>

                                                <div class="col-md-3">
                                                    <span class="u-header__sub-menu-title" style="font-weight: bold; font-size: 20px;">Power Bank</span>
                                                    <ul class="u-header__sub-menu-nav-group mb-3">
                                                        <li><a href="#" class="nav-link u-header__sub-menu-nav-link">TP-Link</a></li>
                                                        <li><a href="#" class="nav-link u-header__sub-menu-nav-link">XIAOMI</a></li>
                                                        <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Huawei</a></li>
                                                        <li><a href="#" class="nav-link u-header__sub-menu-nav-link">HP</a></li>
                                                        <li><a href="#" class="nav-link u-header__sub-menu-nav-link" style="font-weight: bold;">See More</a></li>
                                                    </ul>


                                                    <span class="u-header__sub-menu-title" style="font-weight: bold; font-size: 20px;">TV Card</span>
                                                    <span class="u-header__sub-menu-title" style="font-weight: bold; font-size: 20px;">Converter & Cable</span>
                                                    <ul class="u-header__sub-menu-nav-group mb-3">
                                                        <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Cable</a></li>
                                                        <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Converter</a></li>
                                                        <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Adapter</a></li>
                                                        <li><a href="#" class="nav-link u-header__sub-menu-nav-link">HUB</a></li>
                                                        <a href="#" class="nav-link u-header__sub-menu-nav-link" style="font-weight: bold;">See More</a>
                                                    </ul>
                                                </div>
                                                <div class="col-md-3">
                                                    <a href="#" class="d-block">
                                                        <img class="img-fluid" src="assets/img/Working-amico.svg" alt="Image Description">
                                                    </a>
                                                </div>

                                            </div>
                                        </div>
                                        <!-- End TV & Audio - Mega Menu -->
                                    </li>
                                    <!-- Others -->


                                </ul>
                            </div>
                            <!-- End Navigation -->
                        </nav>
                        <!-- End Nav -->
                    </div>
                </div>
            </div>
            <!-- End Primary-menu-wide -->
        </div>
    </header>
    <!-- ========== END HEADER ========== -->


    @yield('content')



    <!-- ========== FOOTER ========== -->
    <footer>
        <!-- Footer-top-widget -->
        <div class="container d-none d-lg-block mb-3">
            <div class="row">
                <div class="col-wd-3 col-lg-4">
                    <div class="widget-column">
                        <div class="border-bottom border-color-1 mb-5">
                            <h3 class="section-title section-title__sm mb-0 pb-2 font-size-18">Featured Products</h3>
                        </div>
                        <ul class="list-unstyled products-group">
                            <li class="product-item product-item__list row no-gutters mb-6 remove-divider">
                                <div class="col-auto">
                                    <a href="../shop/single-product-fullwidth.html" class="d-block width-75 text-center"><img class="img-fluid" src="assets/img/75X75/img1.jpg" alt="Image Description"></a>
                                </div>
                                <div class="col pl-4 d-flex flex-column">
                                    <h5 class="product-item__title mb-0"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Purple Wireless Headphones Solo 2 HD</a></h5>
                                    <div class="prodcut-price mt-auto">
                                        <div class="font-size-15">$1149.00</div>
                                    </div>
                                </div>
                            </li>
                            <li class="product-item product-item__list row no-gutters mb-6 remove-divider">
                                <div class="col-auto">
                                    <a href="../shop/single-product-fullwidth.html" class="d-block width-75 text-center"><img class="img-fluid" src="assets/img/75X75/img2.jpg" alt="Image Description"></a>
                                </div>
                                <div class="col pl-4 d-flex flex-column">
                                    <h5 class="product-item__title mb-0"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Powerbank 1130 mAh Blue</a></h5>
                                    <div class="prodcut-price mt-auto">
                                        <div class="font-size-15">$210.00</div>
                                    </div>
                                </div>
                            </li>
                            <li class="product-item product-item__list row no-gutters mb-6 remove-divider">
                                <div class="col-auto">
                                    <a href="../shop/single-product-fullwidth.html" class="d-block width-75 text-center"><img class="img-fluid" src="assets/img/75X75/img3.jpg" alt="Image Description"></a>
                                </div>
                                <div class="col pl-4 d-flex flex-column">
                                    <h5 class="product-item__title mb-0"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Nerocool EN52377 Dead Silence Gaming Cube Case</a></h5>
                                    <div class="prodcut-price mt-auto">
                                        <div class="font-size-15">$180.00</div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-wd-3 col-lg-4">
                    <div class="border-bottom border-color-1 mb-5">
                        <h3 class="section-title section-title__sm mb-0 pb-2 font-size-18">Onsale Products</h3>
                    </div>
                    <ul class="list-unstyled products-group">
                        <li class="product-item product-item__list row no-gutters mb-6 remove-divider">
                            <div class="col-auto">
                                <a href="../shop/single-product-fullwidth.html" class="d-block width-75 text-center"><img class="img-fluid" src="assets/img/75X75/img4.jpg" alt="Image Description"></a>
                            </div>
                            <div class="col pl-4 d-flex flex-column">
                                <h5 class="product-item__title mb-0"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Yellow Earphones Waterproof with Bluetooth</a></h5>
                                <div class="prodcut-price mt-auto flex-horizontal-center">
                                    <ins class="font-size-15 text-decoration-none">$110.00</ins>
                                    <del class="font-size-12 text-gray-9 ml-2">$250.00</del>
                                </div>
                            </div>
                        </li>
                        <li class="product-item product-item__list row no-gutters mb-6 remove-divider">
                            <div class="col-auto">
                                <a href="../shop/single-product-fullwidth.html" class="d-block width-75 text-center"><img class="img-fluid" src="assets/img/75X75/img5.jpg" alt="Image Description"></a>
                            </div>
                            <div class="col pl-4 d-flex flex-column">
                                <h5 class="product-item__title mb-0"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Camera C430W 4k Waterproof</a></h5>
                                <div class="prodcut-price mt-auto flex-horizontal-center">
                                    <ins class="font-size-15 text-decoration-none">$899.00</ins>
                                    <del class="font-size-12 text-gray-9 ml-2">$1200.00</del>
                                </div>
                            </div>
                        </li>
                        <li class="product-item product-item__list row no-gutters mb-6 remove-divider">
                            <div class="col-auto">
                                <a href="../shop/single-product-fullwidth.html" class="d-block width-75 text-center"><img class="img-fluid" src="assets/img/75X75/img6.jpg" alt="Image Description"></a>
                            </div>
                            <div class="col pl-4 d-flex flex-column">
                                <h5 class="product-item__title mb-0"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Smartphone 6S 32GB LTE</a></h5>
                                <div class="prodcut-price mt-auto flex-horizontal-center">
                                    <ins class="font-size-15 text-decoration-none">$2100.00</ins>
                                    <del class="font-size-12 text-gray-9 ml-2">$3299.00</del>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-wd-3 col-lg-4">
                    <div class="border-bottom border-color-1 mb-5">
                        <h3 class="section-title section-title__sm mb-0 pb-2 font-size-18">Top Rated Products</h3>
                    </div>
                    <ul class="list-unstyled products-group">
                        <li class="product-item product-item__list row no-gutters mb-6 remove-divider">
                            <div class="col-auto">
                                <a href="../shop/single-product-fullwidth.html" class="d-block width-75 text-center"><img class="img-fluid" src="assets/img/75X75/img7.jpg" alt="Image Description"></a>
                            </div>
                            <div class="col pl-4 d-flex flex-column">
                                <h5 class="product-item__title mb-0"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Smartwatch 2.0 LTE Wifi Waterproof</a></h5>
                                <div class="text-warning mb-2">
                                    <small class="fas fa-star"></small>
                                    <small class="fas fa-star"></small>
                                    <small class="fas fa-star"></small>
                                    <small class="fas fa-star"></small>
                                    <small class="fas fa-star"></small>
                                </div>
                                <div class="prodcut-price mt-auto">
                                    <div class="font-size-15">$725.00</div>
                                </div>
                            </div>
                        </li>
                        <li class="product-item product-item__list row no-gutters mb-6 remove-divider">
                            <div class="col-auto">
                                <a href="../shop/single-product-fullwidth.html" class="d-block width-75 text-center"><img class="img-fluid" src="assets/img/75X75/img8.jpg" alt="Image Description"></a>
                            </div>
                            <div class="col pl-4 d-flex flex-column">
                                <h5 class="product-item__title mb-0"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">22Mps Camera 6200U with 500GB SDcard</a></h5>
                                <div class="text-warning mb-2">
                                    <small class="fas fa-star"></small>
                                    <small class="fas fa-star"></small>
                                    <small class="fas fa-star"></small>
                                    <small class="fas fa-star"></small>
                                    <small class="far fa-star text-muted"></small>
                                </div>
                                <div class="prodcut-price mt-auto">
                                    <div class="font-size-15">$2999.00</div>
                                </div>
                            </div>
                        </li>
                        <li class="product-item product-item__list row no-gutters mb-6 remove-divider">
                            <div class="col-auto">
                                <a href="../shop/single-product-fullwidth.html" class="d-block width-75 text-center"><img class="img-fluid" src="assets/img/75X75/img9.jpg" alt="Image Description"></a>
                            </div>
                            <div class="col pl-4 d-flex flex-column">
                                <h5 class="product-item__title mb-0"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Full Color LaserJet Pro M452dn</a></h5>
                                <div class="text-warning mb-2">
                                    <small class="fas fa-star"></small>
                                    <small class="fas fa-star"></small>
                                    <small class="fas fa-star"></small>
                                    <small class="fas fa-star"></small>
                                    <small class="far fa-star text-muted"></small>
                                </div>
                                <div class="prodcut-price mt-auto">
                                    <div class="font-size-15">$439.00</div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-wd-3 d-none d-wd-block">
                    <a href="../shop/shop.html" class="d-block"><img class="img-fluid" src="assets/img/330X360/img1.jpg" alt="Image Description"></a>
                </div>
            </div>
        </div>
        <!-- End Footer-top-widget -->
        <!-- Footer-newsletter -->
        <div class="bg-primary py-3">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7 mb-md-3 mb-lg-0">
                        <div class="row align-items-center">
                            <div class="col-auto flex-horizontal-center">
                                <i class="ec ec-newsletter font-size-40"></i>
                                <h2 class="font-size-20 mb-0 ml-3">Sign up to Newsletter</h2>
                            </div>
                            <div class="col my-4 my-md-0">
                                <h5 class="font-size-15 ml-4 mb-0">...and receive <strong>$20 coupon for first shopping.</strong></h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <!-- Subscribe Form -->
                        <form class="js-validate js-form-message">
                            <label class="sr-only" for="subscribeSrEmail">Email address</label>
                            <div class="input-group input-group-pill">
                                <input type="email" class="form-control border-0 height-40" name="email" id="subscribeSrEmail" placeholder="Email address" aria-label="Email address" aria-describedby="subscribeButton" required data-msg="Please enter a valid email address.">
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-dark btn-sm-wide height-40 py-2" id="subscribeButton">Sign Up</button>
                                </div>
                            </div>
                        </form>
                        <!-- End Subscribe Form -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Footer-newsletter -->
        <!-- Footer-bottom-widgets -->
        <div class="pt-8 pb-4 bg-gray-13">
            <div class="container mt-1">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="mb-6">
                            <a href="#" class="d-inline-block">
                                <svg version="1.1" x="0px" y="0px" width="156px" height="37px" viewBox="0 0 175.748 42.52" enable-background="new 0 0 175.748 42.52">
                                    <ellipse fill-rule="evenodd" clip-rule="evenodd" fill="#FDD700" cx="170.05" cy="36.341" rx="5.32" ry="5.367"></ellipse>
                                    <path fill-rule="evenodd" clip-rule="evenodd" fill="#333E48" d="M30.514,0.71c-0.034,0.003-0.066,0.008-0.056,0.056
                                            C30.263,0.995,29.876,1.181,29.79,1.5c-0.148,0.548,0,1.568,0,2.427v36.459c0.265,0.221,0.506,0.465,0.725,0.734h6.187
                                            c0.2-0.25,0.423-0.477,0.669-0.678V1.387C37.124,1.185,36.9,0.959,36.701,0.71H30.514z M117.517,12.731
                                            c-0.232-0.189-0.439-0.64-0.781-0.734c-0.754-0.209-2.039,0-3.121,0h-3.176V4.435c-0.232-0.189-0.439-0.639-0.781-0.733
                                            c-0.719-0.2-1.969,0-3.01,0h-3.01c-0.238,0.273-0.625,0.431-0.725,0.847c-0.203,0.852,0,2.399,0,3.725
                                            c0,1.393,0.045,2.748-0.055,3.725h-6.41c-0.184,0.237-0.629,0.434-0.725,0.791c-0.178,0.654,0,1.813,0,2.765v2.766
                                            c0.232,0.188,0.439,0.64,0.779,0.733c0.777,0.216,2.109,0,3.234,0c1.154,0,2.291-0.045,3.176,0.057v21.277
                                            c0.232,0.189,0.439,0.639,0.781,0.734c0.719,0.199,1.969,0,3.01,0h3.01c1.008-0.451,0.725-1.889,0.725-3.443
                                            c-0.002-6.164-0.047-12.867,0.055-18.625h6.299c0.182-0.236,0.627-0.434,0.725-0.79c0.176-0.653,0-1.813,0-2.765V12.731z
                                            M135.851,18.262c0.201-0.746,0-2.029,0-3.104v-3.104c-0.287-0.245-0.434-0.637-0.781-0.733c-0.824-0.229-1.992-0.044-2.898,0
                                            c-2.158,0.104-4.506,0.675-5.74,1.411c-0.146-0.362-0.451-0.853-0.893-0.96c-0.693-0.169-1.859,0-2.842,0h-2.842
                                            c-0.258,0.319-0.625,0.42-0.725,0.79c-0.223,0.82,0,2.338,0,3.443c0,8.109-0.002,16.635,0,24.381
                                            c0.232,0.189,0.439,0.639,0.779,0.734c0.707,0.195,1.93,0,2.955,0h3.01c0.918-0.463,0.725-1.352,0.725-2.822V36.21
                                            c-0.002-3.902-0.242-9.117,0-12.473c0.297-4.142,3.836-4.877,8.527-4.686C135.312,18.816,135.757,18.606,135.851,18.262z
                                            M14.796,11.376c-5.472,0.262-9.443,3.178-11.76,7.056c-2.435,4.075-2.789,10.62-0.501,15.126c2.043,4.023,5.91,7.115,10.701,7.9
                                            c6.051,0.992,10.992-1.219,14.324-3.838c-0.687-1.1-1.419-2.664-2.118-3.951c-0.398-0.734-0.652-1.486-1.616-1.467
                                            c-1.942,0.787-4.272,2.262-7.134,2.145c-3.791-0.154-6.659-1.842-7.524-4.91h19.452c0.146-2.793,0.22-5.338-0.279-7.563
                                            C26.961,15.728,22.503,11.008,14.796,11.376z M9,23.284c0.921-2.508,3.033-4.514,6.298-4.627c3.083-0.107,4.994,1.976,5.685,4.627
                                            C17.119,23.38,12.865,23.38,9,23.284z M52.418,11.376c-5.551,0.266-9.395,3.142-11.76,7.056
                                            c-2.476,4.097-2.829,10.493-0.557,15.069c1.997,4.021,5.895,7.156,10.646,7.957c6.068,1.023,11-1.227,14.379-3.781
                                            c-0.479-0.896-0.875-1.742-1.393-2.709c-0.312-0.582-1.024-2.234-1.561-2.539c-0.912-0.52-1.428,0.135-2.23,0.508
                                            c-0.564,0.262-1.223,0.523-1.672,0.676c-4.768,1.621-10.372,0.268-11.537-4.176h19.451c0.668-5.443-0.419-9.953-2.73-13.037
                                            C61.197,13.388,57.774,11.12,52.418,11.376z M46.622,23.343c0.708-2.553,3.161-4.578,6.242-4.686
                                            c3.08-0.107,5.08,1.953,5.686,4.686H46.622z M160.371,15.497c-2.455-2.453-6.143-4.291-10.869-4.064
                                            c-2.268,0.109-4.297,0.65-6.02,1.524c-1.719,0.873-3.092,1.957-4.234,3.217c-2.287,2.519-4.164,6.004-3.902,11.007
                                            c0.248,4.736,1.979,7.813,4.627,10.326c2.568,2.439,6.148,4.254,10.867,4.064c4.457-0.18,7.889-2.115,10.199-4.684
                                            c2.469-2.746,4.012-5.971,3.959-11.063C164.949,21.134,162.732,17.854,160.371,15.497z M149.558,33.952
                                            c-3.246-0.221-5.701-2.615-6.41-5.418c-0.174-0.689-0.26-1.25-0.4-2.166c-0.035-0.234,0.072-0.523-0.045-0.77
                                            c0.682-3.698,2.912-6.257,6.799-6.547c2.543-0.189,4.258,0.735,5.52,1.863c1.322,1.182,2.303,2.715,2.451,4.967
                                            C157.789,30.669,154.185,34.267,149.558,33.952z M88.812,29.55c-1.232,2.363-2.9,4.307-6.13,4.402
                                            c-4.729,0.141-8.038-3.16-8.025-7.563c0.004-1.412,0.324-2.65,0.947-3.726c1.197-2.061,3.507-3.688,6.633-3.612
                                            c3.222,0.079,4.966,1.708,6.632,3.668c1.328-1.059,2.529-1.948,3.9-2.99c0.416-0.315,1.076-0.688,1.227-1.072
                                            c0.404-1.031-0.365-1.502-0.891-2.088c-2.543-2.835-6.66-5.377-11.704-5.137c-6.02,0.288-10.218,3.697-12.484,7.846
                                            c-1.293,2.365-1.951,5.158-1.729,8.408c0.209,3.053,1.191,5.496,2.619,7.508c2.842,4.004,7.385,6.973,13.656,6.377
                                            c5.976-0.568,9.574-3.936,11.816-8.354c-0.141-0.271-0.221-0.604-0.336-0.902C92.929,31.364,90.843,30.485,88.812,29.55z">
                                    </path>
                                </svg>
                            </a>
                        </div>
                        <div class="mb-4">
                            <div class="row no-gutters">
                                <div class="col-auto">
                                    <i class="ec ec-support text-primary font-size-56"></i>
                                </div>
                                <div class="col pl-3">
                                    <div class="font-size-13 font-weight-light">Got questions? Call us 24/7!</div>
                                    <a href="tel:+80080018588" class="font-size-20 text-gray-90">(800) 8001-8588, </a><a href="tel:+0600874548" class="font-size-20 text-gray-90">(0600) 874 548</a>
                                </div>
                            </div>
                        </div>
                        <div class="mb-4">
                            <h6 class="mb-1 font-weight-bold">Contact info</h6>
                            <address class="">
                                17 Princess Road, London, Greater London NW1 8JR, UK
                            </address>
                        </div>
                        <div class="my-4 my-md-4">
                            <ul class="list-inline mb-0 opacity-7">
                                <li class="list-inline-item mr-0">
                                    <a class="btn font-size-20 btn-icon btn-soft-dark btn-bg-transparent rounded-circle" href="#">
                                        <span class="fab fa-facebook-f btn-icon__inner"></span>
                                    </a>
                                </li>
                                <li class="list-inline-item mr-0">
                                    <a class="btn font-size-20 btn-icon btn-soft-dark btn-bg-transparent rounded-circle" href="#">
                                        <span class="fab fa-google btn-icon__inner"></span>
                                    </a>
                                </li>
                                <li class="list-inline-item mr-0">
                                    <a class="btn font-size-20 btn-icon btn-soft-dark btn-bg-transparent rounded-circle" href="#">
                                        <span class="fab fa-twitter btn-icon__inner"></span>
                                    </a>
                                </li>
                                <li class="list-inline-item mr-0">
                                    <a class="btn font-size-20 btn-icon btn-soft-dark btn-bg-transparent rounded-circle" href="#">
                                        <span class="fab fa-github btn-icon__inner"></span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="row">
                            <div class="col-12 col-md mb-4 mb-md-0">
                                <h6 class="mb-3 font-weight-bold">Find it Fast</h6>
                                <!-- List Group -->
                                <ul class="list-group list-group-flush list-group-borderless mb-0 list-group-transparent">
                                    <li><a class="list-group-item list-group-item-action" href="../shop/product-categories-5-column-sidebar.html">Laptops & Computers</a></li>
                                    <li><a class="list-group-item list-group-item-action" href="../shop/product-categories-5-column-sidebar.html">Cameras & Photography</a></li>
                                    <li><a class="list-group-item list-group-item-action" href="../shop/product-categories-5-column-sidebar.html">Smart Phones & Tablets</a></li>
                                    <li><a class="list-group-item list-group-item-action" href="../shop/product-categories-5-column-sidebar.html">Video Games & Consoles</a></li>
                                    <li><a class="list-group-item list-group-item-action" href="../shop/product-categories-5-column-sidebar.html">TV & Audio</a></li>
                                    <li><a class="list-group-item list-group-item-action" href="../shop/product-categories-5-column-sidebar.html">Gadgets</a></li>
                                    <li><a class="list-group-item list-group-item-action" href="../shop/product-categories-5-column-sidebar.html">Car Electronic & GPS</a></li>
                                </ul>
                                <!-- End List Group -->
                            </div>

                            <div class="col-12 col-md mb-4 mb-md-0">
                                <!-- List Group -->
                                <ul class="list-group list-group-flush list-group-borderless mb-0 list-group-transparent mt-md-6">
                                    <li><a class="list-group-item list-group-item-action" href="../shop/product-categories-5-column-sidebar.html">Printers & Ink</a></li>
                                    <li><a class="list-group-item list-group-item-action" href="../shop/product-categories-5-column-sidebar.html">Software</a></li>
                                    <li><a class="list-group-item list-group-item-action" href="../shop/product-categories-5-column-sidebar.html">Office Supplies</a></li>
                                    <li><a class="list-group-item list-group-item-action" href="../shop/product-categories-5-column-sidebar.html">Computer Components</a></li>
                                    <li><a class="list-group-item list-group-item-action" href="../shop/product-categories-5-column-sidebar.html">Accesories</a></li>
                                </ul>
                                <!-- End List Group -->
                            </div>

                            <div class="col-12 col-md mb-4 mb-md-0">
                                <h6 class="mb-3 font-weight-bold">Customer Care</h6>
                                <!-- List Group -->
                                <ul class="list-group list-group-flush list-group-borderless mb-0 list-group-transparent">
                                    <li><a class="list-group-item list-group-item-action" href="../shop/my-account.html">My Account</a></li>
                                    <li><a class="list-group-item list-group-item-action" href="../shop/track-your-order.html">Order Tracking</a></li>
                                    <li><a class="list-group-item list-group-item-action" href="../shop/wishlist.html">Wish List</a></li>
                                    <li><a class="list-group-item list-group-item-action" href="{{route('termsConditions')}}">Terms & Conditions</a></li>
                                    <li><a class="list-group-item list-group-item-action" href="../home/terms-and-conditions.html">Returns / Exchange</a></li>
                                    <li><a class="list-group-item list-group-item-action" href="../home/faq.html">FAQs</a></li>
                                    <li><a class="list-group-item list-group-item-action" href="../home/terms-and-conditions.html">Product Support</a></li>
                                </ul>
                                <!-- End List Group -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Footer-bottom-widgets -->
        <!-- Footer-copy-right -->
        <div class="bg-gray-14 py-2">
            <div class="container">
                <div class="flex-center-between d-block d-md-flex">
                    <div class="mb-3 mb-md-0">?? <a href="#" class="font-weight-bold text-gray-90">Electro</a> - All rights Reserved</div>
                    <div class="text-md-right">
                        <span class="d-inline-block bg-white border rounded p-1">
                            <img class="max-width-5" src="assets/img/100X60/img1.jpg" alt="Image Description">
                        </span>
                        <span class="d-inline-block bg-white border rounded p-1">
                            <img class="max-width-5" src="assets/img/100X60/2.png" alt="Image Description">
                        </span>
                        <span class="d-inline-block bg-white border rounded p-1">
                            <img class="max-width-5" src="assets/img/100X60/3.png" alt="Image Description">
                        </span>
                        <span class="d-inline-block bg-white border rounded p-1">
                            <img class="max-width-5" src="assets/img/100X60/4.png" alt="Image Description">
                        </span>

                    </div>
                </div>
            </div>
        </div>
        <!-- End Footer-copy-right -->
    </footer>
    <!-- ========== END FOOTER ========== -->

    <!-- ========== SECONDARY CONTENTS ========== -->
    <!-- Account Sidebar Navigation -->
    <aside id="sidebarContent" class="u-sidebar u-sidebar__lg" aria-labelledby="sidebarNavToggler">
        <div class="u-sidebar__scroller">
            <div class="u-sidebar__container">
                <div class="js-scrollbar u-header-sidebar__footer-offset pb-3">
                    <!-- Toggle Button -->
                    <div class="d-flex align-items-center pt-4 px-7">
                        <button type="button" class="close ml-auto" aria-controls="sidebarContent" aria-haspopup="true" aria-expanded="false" data-unfold-event="click" data-unfold-hide-on-scroll="false" data-unfold-target="#sidebarContent" data-unfold-type="css-animation" data-unfold-animation-in="fadeInRight" data-unfold-animation-out="fadeOutRight" data-unfold-duration="500">
                            <i class="ec ec-close-remove"></i>
                        </button>
                    </div>
                    <!-- End Toggle Button -->

                    <!-- Content -->
                    <div class="js-scrollbar u-sidebar__body">
                        <div class="u-sidebar__content u-header-sidebar__content">

                            <!-- Login -->
                            <div id="login" data-target-group="idForm">
                                <!-- Title -->
                                <header class="text-center mb-7">
                                    <h2 class="h4 mb-0">Welcome Back!</h2>
                                    <p>Login to manage your account.</p>
                                </header>
                                <!-- End Title -->
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <!-- Form Group -->
                                    <div class="form-group">
                                        <div class="js-form-message js-focus-state">
                                            <label class="sr-only" for="signinEmail">Email</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="signinEmailLabel">
                                                        <span class="fas fa-user"></span>
                                                    </span>
                                                </div>
                                                <input type="email" name="email" :value="old('email')" class="form-control" id="signinEmail" placeholder="Email" aria-label="Email" aria-describedby="signinEmailLabel" required data-msg="Please enter a valid email address." data-error-class="u-has-error" data-success-class="u-has-success">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Form Group -->

                                    <!-- Form Group -->
                                    <div class="form-group">
                                        <div class="js-form-message js-focus-state">
                                            <label class="sr-only" for="signinPassword">Password</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="signinPasswordLabel">
                                                        <span class="fas fa-lock"></span>
                                                    </span>
                                                </div>
                                                <input type="password" class="form-control" name="password" id="signinPassword" placeholder="Password" aria-label="Password" aria-describedby="signinPasswordLabel" required data-msg="Your password is invalid. Please try again." data-error-class="u-has-error" data-success-class="u-has-success">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Form Group -->
                                    @if (Route::has('password.request'))
                                    <div class="d-flex justify-content-end mb-4">
                                        <a class="js-animation-link small link-muted" href="{{ route('password.request') }}" data-target="#forgotPassword" data-link-group="idForm" data-animation-in="slideInUp">Forgot Password?</a>
                                    </div>
                                    @endif

                                    <div class="mb-2">
                                        <button type="submit" class="btn btn-block btn-sm btn-primary transition-3d-hover">Login</button>
                                    </div>
                                </form>

                                <div class="text-center mb-4">
                                    <span class="small text-muted">Do not have an account?</span>
                                    <a class="js-animation-link small text-dark" href="{{route('register')}}" data-target="#signup" data-link-group="idForm" data-animation-in="slideInUp">Signup
                                    </a>
                                </div>

                                <div class="text-center">
                                    <span class="u-divider u-divider--xs u-divider--text mb-4">OR</span>
                                </div>

                                <!-- Login Buttons -->
                                <div class="d-flex">
                                    <a class="btn btn-block btn-sm btn-soft-facebook transition-3d-hover mr-1" href="#">
                                        <span class="fab fa-facebook-square mr-1"></span>
                                        Facebook
                                    </a>
                                    <a class="btn btn-block btn-sm btn-soft-google transition-3d-hover ml-1 mt-0" href="#">
                                        <span class="fab fa-google mr-1"></span>
                                        Google
                                    </a>
                                </div>
                                <!-- End Login Buttons -->
                            </div>
                            <!-- Signup -->
                            <div id="signup" style="display: none; opacity: 0;" data-target-group="idForm">
                                <!-- Title -->
                                <header class="text-center mb-7">
                                    <h2 class="h4 mb-0">Welcome to Electro.</h2>
                                    <p>Fill out the form to get started.</p>
                                </header>
                                <!-- End Title -->
                                <form method="POST" action="{{ route('register') }}">
                                    @csrf
                                    <!-- Form Group -->
                                    <div class="form-group">
                                        <div class="js-form-message js-focus-state">
                                            <label class="sr-only" for="signupName">Name</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="signupNameLabel">
                                                        <span class="fas fa-user"></span>
                                                    </span>
                                                </div>
                                                <input type="text" name="name" :value="old('name')" class="form-control" id="signupName" placeholder="Name" aria-label="Name" aria-describedby="signupName" required data-msg="Please enter a valid Name." data-error-class="u-has-error" data-success-class="u-has-success">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Input -->

                                    <!-- Form Group -->
                                    <div class="form-group">
                                        <div class="js-form-message js-focus-state">
                                            <label class="sr-only" for="signupEmail">Email</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="signupEmailLabel">
                                                        <span class="fas fa-user"></span>
                                                    </span>
                                                </div>
                                                <input type="email" name="email" :value="old('email')" class="form-control" name="email" id="signupEmail" placeholder="Email" aria-label="Email" aria-describedby="signupEmailLabel" required data-msg="Please enter a valid email address." data-error-class="u-has-error" data-success-class="u-has-success">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Input -->

                                    <!-- Form Group -->
                                    <div class="form-group">
                                        <div class="js-form-message js-focus-state">
                                            <label class="sr-only" for="signupPassword">Password</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="signupPasswordLabel">
                                                        <span class="fas fa-lock"></span>
                                                    </span>
                                                </div>
                                                <input type="password" class="form-control" name="password" id="signupPassword" placeholder="Password" aria-label="Password" aria-describedby="signupPasswordLabel" required data-msg="Your password is invalid. Please try again." data-error-class="u-has-error" data-success-class="u-has-success">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Input -->

                                    <!-- Form Group -->
                                    <div class="form-group">
                                        <div class="js-form-message js-focus-state">
                                            <label class="sr-only" for="signupConfirmPassword">Confirm Password</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="signupConfirmPasswordLabel">
                                                        <span class="fas fa-key"></span>
                                                    </span>
                                                </div>
                                                <input type="password" class="form-control" name="password_confirmation" id="signupConfirmPassword" placeholder="Confirm Password" aria-label="Confirm Password" aria-describedby="signupConfirmPasswordLabel" required data-msg="Password does not match the confirm password." data-error-class="u-has-error" data-success-class="u-has-success">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Input -->

                                    <div class="mt-4 form-group">
                                        <x-label for="role_id" value="{{ __('Register as:') }}" />
                                        <select name="role_id" class="block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                                            <option value="user">User</option>
                                        </select>
                                    </div>


                                    <div class="mb-2">
                                        <button type="submit" class="btn btn-block btn-sm btn-primary transition-3d-hover">Get Started</button>
                                    </div>
                                </form>


                                <div class="text-center mb-4">
                                    <span class="small text-muted">Already have an account?</span>
                                    <a class="js-animation-link small text-dark" href="{{ route('login') }}" data-target="#login" data-link-group="idForm" data-animation-in="slideInUp">Login
                                    </a>
                                </div>

                                <div class="text-center">
                                    <span class="u-divider u-divider--xs u-divider--text mb-4">OR</span>
                                </div>

                                <!-- Login Buttons -->
                                <div class="d-flex">
                                    <a class="btn btn-block btn-sm btn-soft-facebook transition-3d-hover mr-1" href="#">
                                        <span class="fab fa-facebook-square mr-1"></span>
                                        Facebook
                                    </a>
                                    <a class="btn btn-block btn-sm btn-soft-google transition-3d-hover ml-1 mt-0" href="#">
                                        <span class="fab fa-google mr-1"></span>
                                        Google
                                    </a>
                                </div>
                                <!-- End Login Buttons -->
                            </div>
                            <!-- End Signup -->

                            <!-- Forgot Password -->
                            <div id="forgotPassword" style="display: none; opacity: 0;" data-target-group="idForm">
                                <!-- Title -->
                                <header class="text-center mb-7">
                                    <h2 class="h4 mb-0">Recover Password.</h2>
                                    <p>Enter your email address and an email with instructions will be sent to you.</p>
                                </header>
                                <!-- End Title -->

                                <!-- Form Group -->
                                <div class="form-group">
                                    <div class="js-form-message js-focus-state">
                                        <label class="sr-only" for="recoverEmail">Your email</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="recoverEmailLabel">
                                                    <span class="fas fa-user"></span>
                                                </span>
                                            </div>
                                            <input type="email" class="form-control" name="email" id="recoverEmail" placeholder="Your email" aria-label="Your email" aria-describedby="recoverEmailLabel" required data-msg="Please enter a valid email address." data-error-class="u-has-error" data-success-class="u-has-success">
                                        </div>
                                    </div>
                                </div>
                                <!-- End Form Group -->

                                <div class="mb-2">
                                    <button type="submit" class="btn btn-block btn-sm btn-primary transition-3d-hover">Recover Password</button>
                                </div>

                                <div class="text-center mb-4">
                                    <span class="small text-muted">Remember your password?</span>
                                    <a class="js-animation-link small" href="javascript:;" data-target="#login" data-link-group="idForm" data-animation-in="slideInUp">Login
                                    </a>
                                </div>
                            </div>
                            <!-- End Forgot Password -->

                        </div>
                    </div>
                    <!-- End Content -->
                </div>
            </div>
        </div>
    </aside>
    <!-- End Account Sidebar Navigation -->
    <!-- ========== END SECONDARY CONTENTS ========== -->

    <!-- Go to Top -->
    <a class="js-go-to u-go-to" href="#" data-position='{"bottom": 15, "right": 15 }' data-type="fixed" data-offset-top="400" data-compensation="#header" data-show-effect="slideInUp" data-hide-effect="slideOutDown">
        <span class="fas fa-arrow-up u-go-to__inner"></span>
    </a>
    <!-- End Go to Top -->

    <!-- JS Global Compulsory -->
    <script src="assets/vendor/jquery/dist/jquery.min.js"></script>
    <script src="assets/vendor/jquery-migrate/dist/jquery-migrate.min.js"></script>
    <script src="assets/vendor/popper.js/dist/umd/popper.min.js"></script>
    <script src="assets/vendor/bootstrap/bootstrap.min.js"></script>

    <!-- JS Implementing Plugins -->
    <script src="assets/vendor/appear.js"></script>
    <script src="assets/vendor/jquery.countdown.min.js"></script>
    <script src="assets/vendor/hs-megamenu/src/hs.megamenu.js"></script>
    <script src="assets/vendor/svg-injector/dist/svg-injector.min.js"></script>
    <script src="assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="assets/vendor/jquery-validation/dist/jquery.validate.min.js"></script>
    <script src="assets/vendor/fancybox/jquery.fancybox.min.js"></script>
    <script src="assets/vendor/typed.js/lib/typed.min.js"></script>
    <script src="assets/vendor/slick-carousel/slick/slick.js"></script>
    <script src="assets/vendor/bootstrap-select/dibootstrap-select.min.js"></script>

    <!-- JS Electro -->
    <script src="assets/js/hs.core.js"></script>
    <script src="assets/js/components/hs.countdown.js"></script>
    <script src="assets/js/components/hs.header.js"></script>
    <script src="assets/js/components/hs.hamburgers.js"></script>
    <script src="assets/js/components/hs.unfold.js"></script>
    <script src="assets/js/components/hs.focus-state.js"></script>
    <script src="assets/js/components/hs.malihu-scrollbar.js"></script>
    <script src="assets/js/components/hs.validation.js"></script>
    <script src="assets/js/components/hs.fancybox.js"></script>
    <script src="assets/js/components/hs.onscroll-animation.js"></script>
    <script src="assets/js/components/hs.slick-carousel.js"></script>
    <script src="assets/js/components/hs.show-animation.js"></script>
    <script src="assets/js/components/hs.svg-injector.js"></script>
    <script src="assets/js/components/hs.go-to.js"></script>
    <script src="assets/js/components/hs.selectpicker.js"></script>

    <!-- JS Plugins Init. -->
    <script>
        $(window).on('load', function() {
            // initialization of HSMegaMenu component
            $('.js-mega-menu').HSMegaMenu({
                event: 'hover'
                , direction: 'horizontal'
                , pageContainer: $('.container')
                , breakpoint: 767.98
                , hideTimeOut: 0
            });
        });

        $(document).on('ready', function() {
            // initialization of header
            $.HSCore.components.HSHeader.init($('#header'));

            // initialization of animation
            $.HSCore.components.HSOnScrollAnimation.init('[data-animation]');

            // initialization of unfold component
            $.HSCore.components.HSUnfold.init($('[data-unfold-target]'), {
                afterOpen: function() {
                    $(this).find('input[type="search"]').focus();
                }
            });

            // initialization of popups
            $.HSCore.components.HSFancyBox.init('.js-fancybox');

            // initialization of countdowns
            var countdowns = $.HSCore.components.HSCountdown.init('.js-countdown', {
                yearsElSelector: '.js-cd-years'
                , monthsElSelector: '.js-cd-months'
                , daysElSelector: '.js-cd-days'
                , hoursElSelector: '.js-cd-hours'
                , minutesElSelector: '.js-cd-minutes'
                , secondsElSelector: '.js-cd-seconds'
            });

            // initialization of malihu scrollbar
            $.HSCore.components.HSMalihuScrollBar.init($('.js-scrollbar'));

            // initialization of forms
            $.HSCore.components.HSFocusState.init();

            // initialization of form validation
            $.HSCore.components.HSValidation.init('.js-validate', {
                rules: {
                    confirmPassword: {
                        equalTo: '#signupPassword'
                    }
                }
            });

            // initialization of show animations
            $.HSCore.components.HSShowAnimation.init('.js-animation-link');

            // initialization of fancybox
            $.HSCore.components.HSFancyBox.init('.js-fancybox');

            // initialization of slick carousel
            $.HSCore.components.HSSlickCarousel.init('.js-slick-carousel');

            // initialization of go to
            $.HSCore.components.HSGoTo.init('.js-go-to');

            // initialization of hamburgers
            $.HSCore.components.HSHamburgers.init('#hamburgerTrigger');

            // initialization of unfold component
            $.HSCore.components.HSUnfold.init($('[data-unfold-target]'), {
                beforeClose: function() {
                    $('#hamburgerTrigger').removeClass('is-active');
                }
                , afterClose: function() {
                    $('#headerSidebarList .collapse.show').collapse('hide');
                }
            });

            $('#headerSidebarList [data-toggle="collapse"]').on('click', function(e) {
                e.preventDefault();

                var target = $(this).data('target');

                if ($(this).attr('aria-expanded') === "true") {
                    $(target).collapse('hide');
                } else {
                    $(target).collapse('show');
                }
            });

            // initialization of unfold component
            $.HSCore.components.HSUnfold.init($('[data-unfold-target]'));

            // initialization of select picker
            $.HSCore.components.HSSelectPicker.init('.js-select');
        });

    </script>
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <script type="text/javascript">
        var typed = new Typed(".auto-input", {
            strings: ["??????????????? ????????????????????? ????????????????????????????????? ????????? ???????????? ??????????????? ??????????????? ???????????? ", "Example: Processor"]
            , typeSpeed: 100
            , bakcSpeed: 100
            , loop: true
        });

    </script>
    <script>
        const popup = document.querySelector('.popup');
        const close = document.querySelector('.close');
        const blurpopup = document.querySelector('.blurpopup');
        window.onload = function() {
            setTimeout(function() {
                popup.style.display = "block"

            }, 2000)
        }
        close.addEventListener('click', () => {
            popup.style.display = "none";


        })

    </script>
</body>
</html>
