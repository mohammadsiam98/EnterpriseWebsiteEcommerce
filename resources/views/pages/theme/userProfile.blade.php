<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Cuba admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Cuba admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="../../userAssets/assets/images/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="../../userAssets/assets/images/favicon.png" type="image/x-icon">
    <title>Cuba - Premium Admin Template</title>
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../../userAssets/assets/css/font-awesome.css">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="../../userAssets/assets/css/vendors/icofont.css">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="../../userAssets/assets/css/vendors/themify.css">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="../../userAssets/assets/css/vendors/flag-icon.css">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="../../userAssets/assets/css/vendors/feather-icon.css">
    <!-- Plugins css start-->
    <link rel="stylesheet" type="text/css" href="../../userAssets/assets/css/vendors/scrollbar.css">
    <link rel="stylesheet" type="text/css" href="../../userAssets/assets/css/vendors/photoswipe.css">
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="../../userAssets/assets/css/vendors/bootstrap.css">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="../../userAssets/assets/css/style.css">
    <link id="color" rel="stylesheet" href="../../userAssets/assets/css/color-1.css" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="../../userAssets/assets/css/responsive.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap');

    </style>
</head>
<body>
    <!-- tap on top starts-->
    <div class="tap-top"><i data-feather="chevrons-up"></i></div>
    <!-- tap on tap ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
        <!-- Page Header Start-->
        <div class="page-header">
            <div class="header-wrapper row m-0">
                <form class="form-inline search-full col" action="#" method="get">
                    <div class="form-group w-100">
                        <div class="Typeahead Typeahead--twitterUsers">
                            <div class="u-posRelative">
                                <input class="demo-input Typeahead-input form-control-plaintext w-100" type="text" placeholder="Search Cuba .." name="q" title="" autofocus>
                                <div class="spinner-border Typeahead-spinner" role="status"><span class="sr-only">Loading...</span></div><i class="close-search" data-feather="x"></i>
                            </div>
                            <div class="Typeahead-menu"></div>
                        </div>
                    </div>
                </form>
                <div class="header-logo-wrapper col-auto p-0">
                    <div class="logo-wrapper"><a href="index.html"><img class="img-fluid" src="../../userAssets/assets/images/logo/logo.png" alt=""></a></div>
                    <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="align-center"></i></div>
                </div>

                <div class="nav-right col-12 pull-right right-header p-0">
                    <ul class="nav-menus">
                        <li>
                            <div class="mode"><i class="fa fa-moon-o"></i></div>
                        </li>

                        <li class="maximize"><a class="text-dark" href="#!" onclick="javascript:toggleFullScreen()"><i data-feather="maximize"></i></a></li>
                        <li class="profile-nav onhover-dropdown p-0 me-0">
                            <div class="media profile-media"><img class="b-r-10" style="width: 50px;" src="../../userAssets/assets/images/dashboard/profile.jpg" alt="">
                                <div class="media-body" style="font-family: 'Poppins', sans-serif; font-size:30px"><span style="font-family: 'Poppins', sans-serif; font-size:30px">{{ Auth::user()->name }}</span>
                                    <p class="mb-0 font-roboto">Admin <i class="middle fa fa-angle-down"></i></p>
                                </div>
                            </div>
                            <ul class="profile-dropdown onhover-show-div">
                                <li><a href="#"><i data-feather="log-in"> </i><span>Log out</span></a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <script class="result-template" type="text/x-handlebars-template">
                    <div class="ProfileCard u-cf">                        
            <div class="ProfileCard-avatar"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-airplay m-0"><path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path><polygon points="12 15 17 21 7 21 12 15"></polygon></svg></div>
            <div class="ProfileCard-details">
            <div class="ProfileCard-realName"></div>
            </div>
            </div>
          </script>
                <script class="empty-template" type="text/x-handlebars-template"><div class="EmptyMessage">Your search turned up 0 results. This most likely means the backend is down, yikes!</div></script>
            </div>
        </div>
        <!-- Page Header End-->

        <!-- Page Body Start-->
        <div class="page-body-wrapper">
            <!-- Page Sidebar Start-->
            <div class="sidebar-wrapper">
                <div>
                    <div class="logo-wrapper"><a href="{{route('dashboard')}}"><img class="img-fluid for-light" src="../../userAssets/assets/images/logo/logo.png" alt=""><img class="img-fluid for-dark" src="../../userAssets/assets/images/logo/logo_dark.png" alt=""></a>
                        <div class="back-btn"><i class="fa fa-angle-left"></i></div>
                        <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="grid"> </i></div>
                    </div>
                    <div class="logo-icon-wrapper"><a href="index.html"><img class="img-fluid" src="../../userAssets/assets/images/logo/logo-icon.png" alt=""></a></div>

                    {{-- navbar Start --}}
                    <nav class="sidebar-main">
                        <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
                        <div id="sidebar-menu">
                            <ul class="sidebar-links" id="simple-bar">
                                <li class="back-btn"><a href="{{route('dashboard')}}"><img class="img-fluid" src="../../userAssets/assets/images/logo/logo-icon.png" alt=""></a>
                                    <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
                                </li>
                                <li class="sidebar-main-title">
                                    <div>
                                        <a href="{{route('dashboard')}}">
                                            <h6 class="">Dashboard</h6>
                                        </a>
                                    </div>
                                </li>


                                <li class="sidebar-list">
                                    <label class="badge badge-danger">Profile</label><a class="sidebar-link sidebar-title"><i data-feather="box"></i><span>Edit Account</span></a>
                                    <ul class="sidebar-submenu">
                                        <li><a href="{{route('user.profile')}}">Show Profile</a></li>
                                        <li><a href="{{route('user.edit')}}" class="active">Edit Profile</a></li>
                                        <li><a href="projectcreate.html">Add Image</a></li>
                                    </ul>
                                </li>

                                <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav" href="file-manager.html"><i data-feather="git-pull-request"> </i><span>Password Change</span></a></li>

                            </ul>
                        </div>
                        <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
                    </nav>
                    {{-- navbar End --}}

                </div>
            </div>
            <!-- Page Sidebar Ends-->
            <div class="page-body">
                <div class="container-fluid">
                    <div class="page-title">
                        <div class="row">
                            <div class="col-6">
                                <h3 style="font-family: 'Poppins', sans-serif; font-size:30px">User Profile</h3>
                            </div>
                            <div class="col-6">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html"> <i data-feather="home"></i></a></li>
                                    <li class="breadcrumb-item">Users</li>
                                    <li class="breadcrumb-item active">User Profile</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Container-fluid starts-->
                <div class="container-fluid">
                    <div class="user-profile">
                        <div class="row">
                            <!-- user profile first-style start-->
                            <div class="col-sm-12">
                                <div class="card hovercard text-center">
                                    <div class="cardheader"></div>
                                    <div class="user-image">
                                        <div class="avatar"><img alt="" src="../../userAssets/assets/images/user/7.jpg"></div>
                                        <div class="icon-wrapper"><a href="{{route('user.edit')}}"><i class="icofont icofont-pencil-alt-5"></i></a></div>
                                    </div>
                                    <div class="info">
                                        <div class="row">
                                            <div class="col-sm-12 col-lg-12 order-sm-0 order-xl-1">
                                                <div class="user-designation">
                                                    <div class="title"><a target="_blank" href="" style="font-family: 'Poppins', sans-serif; font-size:30px; text-align:center;">{{$user->name}}</a></div>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-xl-6">
                                <div class="card">
                                    <div class="card-header bg-primary">
                                        <h5 class="text-white" style="text-align: center">User's Name</h5>
                                    </div>
                                    <div class="card-body">
                                        <p class="mb-0" style="font-family: 'Poppins', sans-serif; font-size:30px; text-align:center;">{{$user->name}}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-xl-6">
                                <div class="card">
                                    <div class="card-header bg-primary">
                                        <h5 class="text-white" style="text-align: center">User's Email</h5>
                                    </div>
                                    <div class="card-body">
                                        <p class="mb-0" style="font-family: 'Poppins', sans-serif; font-size:30px; text-align:center;">{{$user->email}}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-xl-6">
                                <div class="card">
                                    <div class="card-header bg-primary">
                                        <h5 class="text-white" style="text-align: center">User's Telephone</h5>
                                    </div>
                                    <div class="card-body">
                                        <p class="mb-0" style="font-family: 'Poppins', sans-serif; font-size:30px; text-align:center;">{{$user->telephone}}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-xl-6">
                                <div class="card">
                                    <div class="card-header bg-primary">
                                        <h5 class="text-white" style="text-align: center">User's Address</h5>
                                    </div>
                                    <div class="card-body">
                                        <p class="mb-0" style="font-family: 'Poppins', sans-serif; font-size:30px; text-align:center;">{{$user->address}}</p>
                                    </div>
                                </div>
                            </div>
                            <!-- user profile first-style end-->
                        </div>
                    </div>
                </div>
                <!-- Container-fluid Ends-->
            </div>
            <!-- footer start-->
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12 footer-copyright text-center">
                            <p class="mb-0">Copyright 2021 © servicearea </p>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <!-- latest jquery-->
    <script src="../../userAssets/assets/js/jquery-3.5.1.min.js"></script>
    <!-- Bootstrap js-->
    <script src="../../userAssets/assets/js/bootstrap/bootstrap.bundle.min.js"></script>
    <!-- feather icon js-->
    <script src="../../userAssets/assets/js/icons/feather-icon/feather.min.js"></script>
    <script src="../../userAssets/assets/js/icons/feather-icon/feather-icon.js"></script>
    <!-- scrollbar js-->
    <script src="../../userAssets/assets/js/scrollbar/simplebar.js"></script>
    <script src="../../userAssets/assets/js/scrollbar/custom.js"></script>
    <!-- Sidebar jquery-->
    <script src="../../userAssets/assets/js/config.js"></script>
    <!-- Plugins JS start-->
    <script src="../../userAssets/assets/js/sidebar-menu.js"></script>
    <script src="../../userAssets/assets/js/counter/jquery.waypoints.min.js"></script>
    <script src="../../userAssets/assets/js/counter/jquery.counterup.min.js"></script>
    <script src="../../userAssets/assets/js/counter/counter-custom.js"></script>
    <script src="../../userAssets/assets/js/photoswipe/photoswipe.min.js"></script>
    <script src="../../userAssets/assets/js/photoswipe/photoswipe-ui-default.min.js"></script>
    <script src="../../userAssets/assets/js/photoswipe/photoswipe.js"></script>
    <script src="../../userAssets/assets/js/tooltip-init.js"></script>
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="../../userAssets/assets/js/script.js"></script>
    <!-- login js-->
    <!-- Plugin used-->
</body>
</html>
