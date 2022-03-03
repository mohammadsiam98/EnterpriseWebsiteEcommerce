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
    <link rel="stylesheet" type="text/css" href="../../userAssets/assets/css/vendors/animate.css">
    <link rel="stylesheet" type="text/css" href="../../userAssets/assets/css/vendors/chartist.css">
    <link rel="stylesheet" type="text/css" href="../../userAssets/assets/css/vendors/owlcarousel.css">
    <link rel="stylesheet" type="text/css" href="../../userAssets/assets/css/vendors/prism.css">
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
        <!-- Page Header Ends-->
        <!-- Page Body Start-->
        <div class="page-body-wrapper">
            <!-- Page Sidebar Start-->
            <div class="sidebar-wrapper">
                <div>
                    <div class="logo-wrapper"><a href="{{route('dashboard')}}"><img class="img-fluid for-light" src="../../userAssets/assets/images/logo/logo.png" alt=""><img class="img-fluid for-dark" src="../../userAssets/assets/images/logo/logo_dark.png" alt=""></a>
                        <div class="back-btn"><i class="fa fa-angle-left"></i></div>
                        <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="grid"> </i></div>
                    </div>
                    <div class="logo-icon-wrapper"><a href="{{route('dashboard')}}"><img class="img-fluid" src="../../userAssets/assets/images/logo/logo-icon.png" alt=""></a></div>

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
                                        <li><a href="{{route('user.edit')}}">Edit Profile</a></li>

                                    </ul>
                                </li>


                                <li class="sidebar-list">
                                    <label class="badge badge-danger"></label><a class="sidebar-link sidebar-title"><i data-feather="box"></i><span>Profile Image</span></a>
                                    <ul class="sidebar-submenu">
                                        <li><a href="{{route('usersImage.create')}}">Insert Image</a></li>
                                        <li><a href="{{route('usersImage.list')}}">Show Image</a></li>
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
                                <h3>
                                    Ecommerce</h3>
                            </div>
                            <div class="col-6">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                                    <li class="breadcrumb-item">Dashboard</li>
                                    <li class="breadcrumb-item active">Ecommerce</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Container-fluid starts-->
                <div class="container-fluid">
                    <div class="row size-column">
                        <div class="col-xl-7 box-col-12 xl-100">
                            <div class="row dash-chart">
                                <div class="col-xl-6 box-col-6 col-md-6">
                                    <div class="card o-hidden">
                                        <div class="card-header card-no-border">
                                            <div class="card-header-right">
                                                <ul class="list-unstyled card-option">
                                                    <li><i class="fa fa-spin fa-cog"></i></li>
                                                    <li><i class="view-html fa fa-code"></i></li>
                                                    <li><i class="icofont icofont-maximize full-card"></i></li>
                                                    <li><i class="icofont icofont-minus minimize-card"></i></li>
                                                    <li><i class="icofont icofont-refresh reload-card"></i></li>
                                                    <li><i class="icofont icofont-error close-card"></i></li>
                                                </ul>
                                            </div>
                                            <div class="media">
                                                <div class="media-body">
                                                    <p><span class="f-w-500 font-roboto">Today Total sale</span><span class="f-w-700 font-primary ms-2">89.21%</span></p>
                                                    <h4 class="f-w-500 mb-0 f-20">$<span class="counter">3000.56</span></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body p-0">
                                            <div class="media">
                                                <div class="media-body">
                                                    <div class="profit-card">
                                                        <div id="spaline-chart"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="code-box-copy">
                                                <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head" title="Copy"><i class="icofont icofont-copy-alt"></i></button>
                                                <pre><code class="language-html" id="example-head">&lt;!-- Cod Box Copy begin --&gt;
&lt;div class=&quot;card o-hidden&quot;&gt;
  &lt;div class=&quot;card-header card-no-border&quot;&gt;
    &lt;div class=&quot;card-header-right&quot;&gt;
      &lt;ul class=&quot;list-unstyled card-option&quot;&gt;
        &lt;li&gt;&lt;i class=&quot;fa fa-spin fa-cog&quot;&gt;&lt;/i&gt;&lt;/li&gt;
        &lt;li&gt;&lt;i class=&quot;view-html fa fa-code&quot;&gt;&lt;/i&gt;&lt;/li&gt;
        &lt;li&gt;&lt;i class=&quot;icofont icofont-maximize full-card&quot;&gt;&lt;/i&gt;&lt;/li&gt;
        &lt;li&gt;&lt;i class=&quot;icofont icofont-minus minimize-card&quot;&gt;&lt;/i&gt;&lt;/li&gt;
        &lt;li&gt;&lt;i class=&quot;icofont icofont-refresh reload-card&quot;&gt;&lt;/i&gt;&lt;/li&gt;
        &lt;li&gt;&lt;i class=&quot;icofont icofont-error close-card&quot;&gt;&lt;/i&gt;&lt;/li&gt;
      &lt;/ul&gt;
    &lt;/div&gt;
    &lt;div class=&quot;media&quot;&gt;
      &lt;div class=&quot;media-body&quot;&gt;
        &lt;p&gt;&lt;span class=&quot;f-w-500 font-roboto&quot;&gt;Month Total sale&lt;/span&gt;&lt;span class=&quot;f-w-700 font-primary ml-2&quot;&gt;79.21%&lt;/span&gt;&lt;/p&gt;
        &lt;h4 class=&quot;f-w-500 mb-0 f-20&quot;&gt;$&lt;span class=&quot;counter&quot;&gt;3465.56&lt;/span&gt;&lt;/h4&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=&quot;card-body p-0&quot;&gt;
    &lt;div class=&quot;media&quot;&gt;
      &lt;div class=&quot;media-body&quot;&gt;
        &lt;div class=&quot;profit-card&quot;&gt;
          &lt;div id=&quot;spaline-chart&quot;&gt;&lt;/div&gt;
        &lt;/div&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;
&lt;!-- Cod Box Copy end --&gt; </code></pre>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 box-col-6 col-md-6">
                                    <div class="card o-hidden">
                                        <div class="card-header card-no-border">
                                            <div class="card-header-right">
                                                <ul class="list-unstyled card-option">
                                                    <li><i class="fa fa-spin fa-cog"></i></li>
                                                    <li><i class="view-html fa fa-code"></i></li>
                                                    <li><i class="icofont icofont-maximize full-card"></i></li>
                                                    <li><i class="icofont icofont-minus minimize-card"></i></li>
                                                    <li><i class="icofont icofont-refresh reload-card"></i></li>
                                                    <li><i class="icofont icofont-error close-card"></i></li>
                                                </ul>
                                            </div>
                                            <div class="media">
                                                <div class="media-body">
                                                    <p><span class="f-w-500 font-roboto">Today Total visits</span><span class="f-w-700 font-primary ms-2">35.00%</span></p>
                                                    <h4 class="f-w-500 mb-0 f-20 counter">9,050</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body pt-0">
                                            <div class="monthly-visit">
                                                <div id="column-chart"></div>
                                            </div>
                                            <div class="code-box-copy">
                                                <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head1" title="Copy"><i class="icofont icofont-copy-alt"></i></button>
                                                <pre><code class="language-html" id="example-head1">&lt;!-- Cod Box Copy begin --&gt;
&lt;div class=&quot;card o-hidden&quot;&gt;
  &lt;div class=&quot;card-header card-no-border&quot;&gt;
    &lt;div class=&quot;card-header-right&quot;&gt;
      &lt;ul class=&quot;list-unstyled card-option&quot;&gt;
        &lt;li&gt;&lt;i class=&quot;fa fa-spin fa-cog&quot;&gt;&lt;/i&gt;&lt;/li&gt;
        &lt;li&gt;&lt;i class=&quot;view-html fa fa-code&quot;&gt;&lt;/i&gt;&lt;/li&gt;
        &lt;li&gt;&lt;i class=&quot;icofont icofont-maximize full-card&quot;&gt;&lt;/i&gt;&lt;/li&gt;
        &lt;li&gt;&lt;i class=&quot;icofont icofont-minus minimize-card&quot;&gt;&lt;/i&gt;&lt;/li&gt;
        &lt;li&gt;&lt;i class=&quot;icofont icofont-refresh reload-card&quot;&gt;&lt;/i&gt;&lt;/li&gt;
        &lt;li&gt;&lt;i class=&quot;icofont icofont-error close-card&quot;&gt;&lt;/i&gt;&lt;/li&gt;
      &lt;/ul&gt;
    &lt;/div&gt;
    &lt;div class=&quot;media&quot;&gt;
      &lt;div class=&quot;media-body&quot;&gt;
        &lt;p&gt;&lt;span class=&quot;f-w-500 font-roboto&quot;&gt;Month Total visits&lt;/span&gt;&lt;span class=&quot;f-w-700 font-primary ml-2&quot;&gt;95.56%&lt;/span&gt;&lt;/p&gt;
        &lt;h4 class=&quot;f-w-500 mb-0 f-20&quot;&gt;$&lt;span class=&quot;counter&quot;&gt;5,953&lt;/span&gt;&lt;/h4&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=&quot;card-body pt-0&quot;&gt;
    &lt;div class=&quot;monthly-visit&quot;&gt;
       &lt;div id=&quot;column-chart&quot;&gt;&lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;
&lt;!-- Cod Box Copy end --&gt;</code></pre>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 box-col-6 col-lg-12 col-md-6">
                                    <div class="card o-hidden">
                                        <div class="card-body">
                                            <div class="ecommerce-widgets media">
                                                <div class="media-body">
                                                    <p class="f-w-500 font-roboto">Our Sale Value<span class="badge pill-badge-primary ms-3">New</span></p>
                                                    <h4 class="f-w-500 mb-0 f-20">$<span class="counter">7454.25</span></h4>
                                                </div>
                                                <div class="ecommerce-box light-bg-primary"><i class="fa fa-heart" aria-hidden="true"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 box-col-6 col-lg-12 col-md-6">
                                    <div class="card o-hidden">
                                        <div class="card-body">
                                            <div class="media">
                                                <div class="media-body">
                                                    <p class="f-w-500 font-roboto">Today Stock value<span class="badge pill-badge-primary ms-3">Hot</span></p>
                                                    <div class="progress-box">
                                                        <h4 class="f-w-500 mb-0 f-20">$<span class="counter">9000.04</span></h4>
                                                        <div class="progress sm-progress-bar progress-animate app-right d-flex justify-content-end">
                                                            <div class="progress-gradient-primary" role="progressbar" style="width: 35%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"><span class="font-primary">88%</span><span class="animate-circle"></span></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-5 box-col-12 xl-50">
                            <div class="card o-hidden dash-chart">
                                <div class="card-header card-no-border">
                                    <div class="card-header-right">
                                        <ul class="list-unstyled card-option">
                                            <li><i class="fa fa-spin fa-cog"></i></li>
                                            <li><i class="view-html fa fa-code"></i></li>
                                            <li><i class="icofont icofont-maximize full-card"></i></li>
                                            <li><i class="icofont icofont-minus minimize-card"></i></li>
                                            <li><i class="icofont icofont-refresh reload-card"></i></li>
                                            <li><i class="icofont icofont-error close-card"></i></li>
                                        </ul>
                                    </div>
                                    <div class="media">
                                        <div class="media-body">
                                            <p><span class="f-w-500 font-roboto">Total Profit</span><span class="font-primary f-w-700 ms-2">99.00%</span></p>
                                            <h4 class="f-w-500 mb-0 f-20">$<span class="counter">3000.56</span></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body pt-0">
                                    <div class="negative-container">
                                        <div id="negative-chart"></div>
                                    </div>
                                    <div class="code-box-copy">
                                        <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head2" title="Copy"><i class="icofont icofont-copy-alt"></i></button>
                                        <pre><code class="language-html" id="example-head2">&lt;!-- Cod Box Copy begin --&gt;
&lt;div class=&quot;card o-hidden dash-chart&quot;&gt;
  &lt;div class=&quot;card-header card-no-border&quot;&gt;
    &lt;div class=&quot;card-header-right&quot;&gt;
      &lt;ul class=&quot;list-unstyled card-option&quot;&gt;
        &lt;li&gt;&lt;i class=&quot;fa fa-spin fa-cog&quot;&gt;&lt;/i&gt;&lt;/li&gt;
        &lt;li&gt;&lt;i class=&quot;view-html fa fa-code&quot;&gt;&lt;/i&gt;&lt;/li&gt;
        &lt;li&gt;&lt;i class=&quot;icofont icofont-maximize full-card&quot;&gt;&lt;/i&gt;&lt;/li&gt;
        &lt;li&gt;&lt;i class=&quot;icofont icofont-minus minimize-card&quot;&gt;&lt;/i&gt;&lt;/li&gt;
        &lt;li&gt;&lt;i class=&quot;icofont icofont-refresh reload-card&quot;&gt;&lt;/i&gt;&lt;/li&gt;
        &lt;li&gt;&lt;i class=&quot;icofont icofont-error close-card&quot;&gt;&lt;/i&gt;&lt;/li&gt;
      &lt;/ul&gt;
    &lt;/div&gt;
    &lt;div class=&quot;media&quot;&gt;
      &lt;div class=&quot;media-body&quot;&gt;
        &lt;p&gt;&lt;span class=&quot;f-w-500 font-roboto&quot;&gt;Total Earning&lt;/span&gt;&lt;span class=&quot;f-w-700 font-primary ml-2&quot;&gt;79.21%&lt;/span&gt;&lt;/p&gt;
        &lt;h4 class=&quot;f-w-500 mb-0 f-20&quot;&gt;$&lt;span class=&quot;counter&quot;&gt;3465.56&lt;/span&gt;&lt;/h4&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=&quot;card-body pt-0&quot;&gt;
    &lt;div class=&quot;profit-card&quot;&gt;
        &lt;div id=&quot;negative-chart&quot;&gt;&lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;
&lt;!-- Cod Box Copy end --&gt;  </code></pre>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 xl-50 box-col-12">
                            <div class="card">
                                <div class="card-header card-no-border">
                                    <h5>New Product</h5>
                                    <div class="card-header-right">
                                        <ul class="list-unstyled card-option">
                                            <li><i class="fa fa-spin fa-cog"></i></li>
                                            <li><i class="view-html fa fa-code"></i></li>
                                            <li><i class="icofont icofont-maximize full-card"></i></li>
                                            <li><i class="icofont icofont-minus minimize-card"></i></li>
                                            <li><i class="icofont icofont-refresh reload-card"></i></li>
                                            <li><i class="icofont icofont-error close-card"></i></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-body pt-0">
                                    <div class="our-product">
                                        <div class="table-responsive">
                                            <table class="table table-bordernone">
                                                <tbody class="f-w-500">
                                                    <tr>
                                                        <td>
                                                            <div class="media"><img class="img-fluid m-r-15 rounded-circle" src="../../userAssets/assets/images/dashboard-2/product-1.png" alt="">
                                                                <div class="media-body"><span>Hike Shoes</span>
                                                                    <p class="font-roboto">100 item</p>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <p>coupon code</p><span>PIX001</span>
                                                        </td>
                                                        <td>
                                                            <p>-51%</p><span>$99.00</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="media"><img class="img-fluid m-r-15 rounded-circle" src="../../userAssets/assets/images/dashboard-2/product-3.png" alt="">
                                                                <div class="media-body"><span>Tree Pot</span>
                                                                    <p class="font-roboto">105 item</p>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <p>coupon code</p><span>PIX002</span>
                                                        </td>
                                                        <td>
                                                            <p>-78%</p><span>$66.00</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="media"><img class="img-fluid m-r-15 rounded-circle" src="../../userAssets/assets/images/dashboard-2/product-4.png" alt="">
                                                                <div class="media-body"><span>Bag</span>
                                                                    <p class="font-roboto">604 item</p>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <p>coupon code</p><span>PIX003</span>
                                                        </td>
                                                        <td>
                                                            <p>-04%</p><span>$116.00</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="media"><img class="img-fluid m-r-15 rounded-circle" src="../../userAssets/assets/images/dashboard-2/product-5.png" alt="">
                                                                <div class="media-body"><span>Wtach</span>
                                                                    <p class="font-roboto">541 item</p>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <p>coupon code</p><span>PIX004</span>
                                                        </td>
                                                        <td>
                                                            <p>-60%</p><span>$99.00</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="media"><img class="img-fluid m-r-15 rounded-circle" src="../../userAssets/assets/images/dashboard-2/product-6.png" alt="">
                                                                <div class="media-body"><span>T-shirt</span>
                                                                    <p class="font-roboto">999 item</p>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <p>coupon code</p><span>PIX005</span>
                                                        </td>
                                                        <td>
                                                            <p>-50%</p><span>$58.00</span>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="code-box-copy">
                                        <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head3" title="Copy"><i class="icofont icofont-copy-alt"></i></button>
                                        <pre><code class="language-html" id="example-head3">&lt;!-- Cod Box Copy begin --&gt;
&lt;div class=&quot;card&quot;&gt;
  &lt;div class=&quot;card-header card-no-border&quot;&gt;
    &lt;h5&gt;Our Product&lt;/h5&gt;
    &lt;div class=&quot;card-header-right&quot;&gt;
      &lt;ul class=&quot;list-unstyled card-option&quot;&gt;
        &lt;li&gt;&lt;i class=&quot;fa fa-spin fa-cog&quot;&gt;&lt;/i&gt;&lt;/li&gt;
        &lt;li&gt;&lt;i class=&quot;view-html fa fa-code&quot;&gt;&lt;/i&gt;&lt;/li&gt;
        &lt;li&gt;&lt;i class=&quot;icofont icofont-maximize full-card&quot;&gt;&lt;/i&gt;&lt;/li&gt;
        &lt;li&gt;&lt;i class=&quot;icofont icofont-minus minimize-card&quot;&gt;&lt;/i&gt;&lt;/li&gt;
        &lt;li&gt;&lt;i class=&quot;icofont icofont-refresh reload-card&quot;&gt;&lt;/i&gt;&lt;/li&gt;
        &lt;li&gt;&lt;i class=&quot;icofont icofont-error close-card&quot;&gt;&lt;/i&gt;&lt;/li&gt;
      &lt;/ul&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=&quot;card-body pt-0&quot;&gt;
    &lt;div class=&quot;our-product&quot;&gt;
      &lt;div class=&quot;table-responsive&quot;&gt;
        &lt;table class=&quot;table table-bordernone&quot;&gt;
          &lt;tbody class=&quot;f-w-500&quot;&gt;
            &lt;tr&gt;
              &lt;td&gt;
                &lt;div class=&quot;media&quot;&gt;&lt;img class=&quot;img-fluid m-r-15 rounded-circle&quot; src=&quot;../../userAssets/assets/images/dashboard-2/product-1.png&quot;&gt;
                  &lt;div class=&quot;media-body&quot;&gt;&lt;span&gt;Nike Shoes&lt;/span&gt;
                    &lt;p class=&quot;font-roboto&quot;&gt;451 item&lt;/p&gt;
                  &lt;/div&gt;
                &lt;/div&gt;
              &lt;/td&gt;
              &lt;td&gt;
                &lt;p&gt;coupon code&lt;/p&gt;&lt;span&gt;NIK584&lt;/span&gt;
              &lt;/td&gt;
              &lt;td&gt;
                &lt;p&gt;-50%&lt;/p&gt;&lt;span&gt;$49.00&lt;/span&gt;
              &lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
              &lt;td&gt;
                &lt;div class=&quot;media&quot;&gt;&lt;img class=&quot;img-fluid m-r-15 rounded-circle&quot; src=&quot;../../userAssets/assets/images/dashboard-2/product-3.png&quot;&gt;
                  &lt;div class=&quot;media-body&quot;&gt;&lt;span&gt;Head Phon&lt;/span&gt;
                    &lt;p class=&quot;font-roboto&quot;&gt;165 item&lt;/p&gt;
                  &lt;/div&gt;
                &lt;/div&gt;
              &lt;/td&gt;
              &lt;td&gt;
                &lt;p&gt;coupon code&lt;/p&gt;&lt;span&gt;HEA415&lt;/span&gt;
              &lt;/td&gt;
              &lt;td&gt;
                &lt;p&gt;-28%&lt;/p&gt;&lt;span&gt;$36.00&lt;/span&gt;
              &lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
              &lt;td&gt;
                &lt;div class=&quot;media&quot;&gt;&lt;img class=&quot;img-fluid m-r-15 rounded-circle&quot; src=&quot;../../userAssets/assets/images/dashboard-2/product-4.png&quot;&gt;
                  &lt;div class=&quot;media-body&quot;&gt;&lt;span&gt;Tree Pot&lt;/span&gt;
                    &lt;p class=&quot;font-roboto&quot;&gt;364 item&lt;/p&gt;
                  &lt;/div&gt;
                &lt;/div&gt;
              &lt;/td&gt;
              &lt;td&gt;
                &lt;p&gt;coupon code&lt;/p&gt;&lt;span&gt;TRE113&lt;/span&gt;
              &lt;/td&gt;
              &lt;td&gt;
                &lt;p&gt;-14%&lt;/p&gt;&lt;span&gt;$16.00&lt;/span&gt;
              &lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
              &lt;td&gt;
                &lt;div class=&quot;media&quot;&gt;&lt;img class=&quot;img-fluid m-r-15 rounded-circle&quot; src=&quot;../../userAssets/assets/images/dashboard-2/product-5.png&quot;&gt;
                  &lt;div class=&quot;media-body&quot;&gt;&lt;span&gt;Nike Shoes&lt;/span&gt;
                    &lt;p class=&quot;font-roboto&quot;&gt;451 item&lt;/p&gt;
                  &lt;/div&gt;
                &lt;/div&gt;
              &lt;/td&gt;
              &lt;td&gt;
                &lt;p&gt;coupon code&lt;/p&gt;&lt;span&gt;NIK584&lt;/span&gt;
              &lt;/td&gt;
              &lt;td&gt;
                &lt;p&gt;-50%&lt;/p&gt;&lt;span&gt;$49.00&lt;/span&gt;
              &lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
              &lt;td&gt;
                &lt;div class=&quot;media&quot;&gt;&lt;img class=&quot;img-fluid m-r-15 rounded-circle&quot; src=&quot;../../userAssets/assets/images/dashboard-2/product-6.png&quot;&gt;
                  &lt;div class=&quot;media-body&quot;&gt;&lt;span&gt;Nike Shoes&lt;/span&gt;
                    &lt;p class=&quot;font-roboto&quot;&gt;451 item&lt;/p&gt;
                  &lt;/div&gt;
                &lt;/div&gt;
              &lt;/td&gt;
              &lt;td&gt;
                &lt;p&gt;coupon code&lt;/p&gt;&lt;span&gt;NIK584&lt;/span&gt;
              &lt;/td&gt;
              &lt;td&gt;
                &lt;p&gt;-50%&lt;/p&gt;&lt;span&gt;$49.00&lt;/span&gt;
              &lt;/td&gt;
            &lt;/tr&gt;
          &lt;/tbody&gt;
        &lt;/table&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;
&lt;!-- Cod Box Copy end --&gt;</code></pre>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 xl-50 box-col-12">
                            <div class="card">
                                <div class="card-header card-no-border">
                                    <h5>Office Location</h5>
                                    <div class="card-header-right">
                                        <ul class="list-unstyled card-option">
                                            <li><i class="fa fa-spin fa-cog"></i></li>
                                            <li><i class="view-html fa fa-code"></i></li>
                                            <li><i class="icofont icofont-maximize full-card"></i></li>
                                            <li><i class="icofont icofont-minus minimize-card"></i></li>
                                            <li><i class="icofont icofont-refresh reload-card"></i></li>
                                            <li><i class="icofont icofont-error close-card"></i></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-body pt-0">
                                    <div class="dash-map">
                                        <div id="map"></div>
                                    </div>
                                    <div class="code-box-copy">
                                        <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head4" title="Copy"><i class="icofont icofont-copy-alt"></i></button>
                                        <pre><code class="language-html" id="example-head4">&lt;!-- Cod Box Copy begin --&gt;
&lt;div class=&quot;card&quot;&gt;
  &lt;div class=&quot;card-header card-no-border&quot;&gt;
    &lt;h5&gt;Location&lt;/h5&gt;
    &lt;div class=&quot;card-header-right&quot;&gt;
      &lt;ul class=&quot;list-unstyled card-option&quot;&gt;
        &lt;li&gt;&lt;i class=&quot;fa fa-spin fa-cog&quot;&gt;&lt;/i&gt;&lt;/li&gt;
        &lt;li&gt;&lt;i class=&quot;view-html fa fa-code&quot;&gt;&lt;/i&gt;&lt;/li&gt;
        &lt;li&gt;&lt;i class=&quot;icofont icofont-maximize full-card&quot;&gt;&lt;/i&gt;&lt;/li&gt;
        &lt;li&gt;&lt;i class=&quot;icofont icofont-minus minimize-card&quot;&gt;&lt;/i&gt;&lt;/li&gt;
        &lt;li&gt;&lt;i class=&quot;icofont icofont-refresh reload-card&quot;&gt;&lt;/i&gt;&lt;/li&gt;
        &lt;li&gt;&lt;i class=&quot;icofont icofont-error close-card&quot;&gt;&lt;/i&gt;&lt;/li&gt;
      &lt;/ul&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=&quot;card-body pt-0&quot;&gt;
    &lt;div class=&quot;dash-map&quot;&gt;
      &lt;div id=&quot;map&quot;&gt;&lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;
&lt;!-- Cod Box Copy end --&gt;</code></pre>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 xl-50 box-col-12">
                            <div class="card">
                                <div class="card-header card-no-border">
                                    <h5>News & Updates</h5>
                                    <div class="card-header-right">
                                        <ul class="list-unstyled card-option">
                                            <li><i class="fa fa-spin fa-cog"></i></li>
                                            <li><i class="view-html fa fa-code"></i></li>
                                            <li><i class="icofont icofont-maximize full-card"></i></li>
                                            <li><i class="icofont icofont-minus minimize-card"></i></li>
                                            <li><i class="icofont icofont-refresh reload-card"></i></li>
                                            <li><i class="icofont icofont-error close-card"></i></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-body new-update pt-0">
                                    <div class="activity-timeline">
                                        <div class="media">
                                            <div class="activity-line"></div>
                                            <div class="activity-dot-secondary"></div>
                                            <div class="media-body"><span>Update Product</span>
                                                <p class="font-roboto">Quisque a consequat ante Sit amet magna at volutapt.</p>
                                            </div>
                                        </div>
                                        <div class="media">
                                            <div class="activity-dot-primary"></div>
                                            <div class="media-body"><span>James liked Nike Shoes</span>
                                                <p class="font-roboto">Aenean sit amet magna vel magna fringilla ferme.</p>
                                            </div>
                                        </div>
                                        <div class="media">
                                            <div class="activity-dot-secondary"></div>
                                            <div class="media-body"><span>john just buy your product<i class="fa fa-circle circle-dot-secondary pull-right"></i></span>
                                                <p class="font-roboto">Vestibulum nec mi suscipit, dapibus purus.....</p>
                                            </div>
                                        </div>
                                        <div class="media">
                                            <div class="activity-dot-primary"></div>
                                            <div class="media-body"><span>Jihan Doe just save your product<i class="fa fa-circle circle-dot-primary pull-right"></i></span>
                                                <p class="font-roboto">Curabitur egestas consequat lorem.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="code-box-copy">
                                        <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head5" title="Copy"><i class="icofont icofont-copy-alt"></i></button>
                                        <pre><code class="language-html" id="example-head5">&lt;!-- Cod Box Copy begin --&gt;
&lt;div class=&quot;card&quot;&gt;
  &lt;div class=&quot;card-header card-no-border&quot;&gt;
    &lt;h5&gt;New &amp; Updates&lt;/h5&gt;
    &lt;div class=&quot;card-header-right&quot;&gt;
      &lt;ul class=&quot;list-unstyled card-option&quot;&gt;
        &lt;li&gt;&lt;i class=&quot;fa fa-spin fa-cog&quot;&gt;&lt;/i&gt;&lt;/li&gt;
        &lt;li&gt;&lt;i class=&quot;view-html fa fa-code&quot;&gt;&lt;/i&gt;&lt;/li&gt;
        &lt;li&gt;&lt;i class=&quot;icofont icofont-maximize full-card&quot;&gt;&lt;/i&gt;&lt;/li&gt;
        &lt;li&gt;&lt;i class=&quot;icofont icofont-minus minimize-card&quot;&gt;&lt;/i&gt;&lt;/li&gt;
        &lt;li&gt;&lt;i class=&quot;icofont icofont-refresh reload-card&quot;&gt;&lt;/i&gt;&lt;/li&gt;
        &lt;li&gt;&lt;i class=&quot;icofont icofont-error close-card&quot;&gt;&lt;/i&gt;&lt;/li&gt;
      &lt;/ul&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=&quot;card-body new-update pt-0&quot;&gt;
    &lt;div class=&quot;activity-timeline&quot;&gt;
      &lt;div class=&quot;media&quot;&gt;
        &lt;div class=&quot;activity-line&quot;&gt;&lt;/div&gt;
        &lt;div class=&quot;activity-dot-secondary&quot;&gt;&lt;/div&gt;
        &lt;div class=&quot;media-body&quot;&gt;&lt;span&gt;Updated Product&lt;/span&gt;
          &lt;p class=&quot;font-roboto&quot;&gt;Quisque a consequat ante Sit amet magna at volutapt.&lt;/p&gt;
        &lt;/div&gt;
      &lt;/div&gt;
      &lt;div class=&quot;media&quot;&gt;
        &lt;div class=&quot;activity-dot-primary&quot;&gt;&lt;/div&gt;
        &lt;div class=&quot;media-body&quot;&gt;&lt;span&gt;You liked James products&lt;/span&gt;
          &lt;p class=&quot;font-roboto&quot;&gt;Aenean sit amet magna vel magna fringilla ferme.&lt;/p&gt;
        &lt;/div&gt;
      &lt;/div&gt;
      &lt;div class=&quot;media&quot;&gt;
        &lt;div class=&quot;activity-dot-secondary&quot;&gt;&lt;/div&gt;
        &lt;div class=&quot;media-body&quot;&gt;&lt;span&gt;James just like your product&lt;i class=&quot;fa fa-circle circle-dot-secondary pull-right&quot;&gt;&lt;/i&gt;&lt;/span&gt;
          &lt;p class=&quot;font-roboto&quot;&gt;Vestibulum nec mi suscipit, dapibus purus.....&lt;/p&gt;
        &lt;/div&gt;
      &lt;/div&gt;
      &lt;div class=&quot;media&quot;&gt;
        &lt;div class=&quot;activity-dot-primary&quot;&gt;&lt;/div&gt;
        &lt;div class=&quot;media-body&quot;&gt;&lt;span&gt;Jihan Doe just like your product&lt;i class=&quot;fa fa-circle circle-dot-primary pull-right&quot;&gt;&lt;/i&gt;&lt;/span&gt;
          &lt;p class=&quot;font-roboto&quot;&gt;Curabitur egestas consequat lorem.&lt;/p&gt;
        &lt;/div&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;
&lt;!-- Cod Box Copy end --&gt;</code></pre>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-12 xl-100 box-col-12">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="card offer-box">
                                        <div class="card-body p-0">
                                            <div class="offer-slider">
                                                <div class="carousel slide" id="carouselExampleCaptions" data-bs-ride="carousel">
                                                    <div class="carousel-inner">
                                                        <div class="carousel-item active">
                                                            <div class="selling-slide row">
                                                                <div class="col-xl-4 col-md-6">
                                                                    <div class="d-flex">
                                                                        <div class="left-content">
                                                                            <p>Much More Selling product</p>
                                                                            <h4 class="f-w-600">Best Selling Product</h4><span class="badge badge-white rounded-pill">78% offer</span><span class="badge badge-dotted rounded-pill ms-2">Coupon Code : 12345</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-4 col-md-12">
                                                                    <div class="center-img"><img class="img-fluid" src="../../userAssets/assets/images/dashboard-2/offer-shoes-3.png" alt="..."></div>
                                                                </div>
                                                                <div class="col-xl-4 col-md-6">
                                                                    <div class="d-flex">
                                                                        <div class="right-content">
                                                                            <p>Money back Guarrantee</p>
                                                                            <h4 class="f-w-600">Women Straight Kurta</h4><span class="badge badge-white rounded-pill">$100.00</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="carousel-item">
                                                            <div class="selling-slide row">
                                                                <div class="col-xl-4 col-md-6">
                                                                    <div class="d-flex">
                                                                        <div class="left-content">
                                                                            <p>Money back Guarrantee</p>
                                                                            <h4 class="f-w-600">Women Straight Kurta</h4><span class="badge badge-white rounded-pill">$100.00</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-4 col-md-12">
                                                                    <div class="center-img"><img class="img-fluid" src="../../userAssets/assets/images/dashboard-2/offer-shoes-3.png" alt="..."></div>
                                                                </div>
                                                                <div class="col-xl-4 col-md-6">
                                                                    <div class="d-flex">
                                                                        <div class="right-content">
                                                                            <p>Money back Guarrantee</p>
                                                                            <h4 class="f-w-600">Nike Air Shoes</h4><span class="badge badge-white rounded-pill">$120.55</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="carousel-item">
                                                            <div class="selling-slide row">
                                                                <div class="col-xl-4 col-md-6">
                                                                    <div class="d-flex">
                                                                        <div class="left-content">
                                                                            <p>Maximum Selling product</p>
                                                                            <h4 class="f-w-600">Best Selling Product</h4><span class="badge badge-white rounded-pill">50% offer</span><span class="badge badge-dotted rounded-pill ms-2">Coupon Code : 21546</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-4 col-md-12">
                                                                    <div class="center-img"><img class="img-fluid" src="../../userAssets/assets/images/dashboard-2/offer-shoes-3.png" alt="..."></div>
                                                                </div>
                                                                <div class="col-xl-4 col-md-6">
                                                                    <div class="d-flex">
                                                                        <div class="right-content">
                                                                            <p>Money back Guarrantee</p>
                                                                            <h4 class="f-w-600">Nike Air Shoes</h4><span class="badge badge-white rounded-pill">$120.55</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-bs-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="sr-only">Previous</span></a><a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-bs-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="sr-only">Next</span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="best-seller-table responsive-tbl">
                                                <div class="item">
                                                    <div class="table-responsive product-list">
                                                        <table class="table table-bordernone">
                                                            <thead>
                                                                <tr>
                                                                    <th class="f-22">
                                                                        Best Selling Products</th>
                                                                    <th>Date</th>
                                                                    <th>Product</th>
                                                                    <th>Country</th>
                                                                    <th>Total</th>
                                                                    <th class="text-end">Status</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <div class="d-inline-block align-middle"><img class="img-40 m-r-15 rounded-circle align-top" src="../../userAssets/assets/images/avtar/7.jpg" alt="">
                                                                            <div class="status-circle bg-primary"></div>
                                                                            <div class="d-inline-block"><span>John keter</span>
                                                                                <p class="font-roboto">2019</p>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>06 August</td>
                                                                    <td>CAP</td>
                                                                    <td><i class="flag-icon flag-icon-gb"></i></td>
                                                                    <td> <span class="label">$5,08,652</span></td>
                                                                    <td class="text-end"><i class="fa fa-check-circle"></i>Done</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <div class="d-inline-block align-middle"><img class="img-40 m-r-15 rounded-circle align-top" src="../../userAssets/assets/images/avtar/4.jpg" alt="">
                                                                            <div class="status-circle bg-primary"></div>
                                                                            <div class="d-inline-block"><span>Herry Venter</span>
                                                                                <p class="font-roboto">2020</p>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>21 March</td>
                                                                    <td>Branded Shoes</td>
                                                                    <td><i class="flag-icon flag-icon-us"></i></td>
                                                                    <td> <span class="label">$59,105</span></td>
                                                                    <td class="text-end"><i class="fa fa-check-circle"></i>Pending</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <div class="d-inline-block align-middle"><img class="img-40 m-r-15 rounded-circle align-top" src="../../userAssets/assets/images/avtar/16.jpg" alt="">
                                                                            <div class="status-circle bg-primary"></div>
                                                                            <div class="d-inline-block"><span>loain deo</span>
                                                                                <p class="font-roboto">2020</p>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>09 March</td>
                                                                    <td>Headphone</td>
                                                                    <td><i class="flag-icon flag-icon-za"></i></td>
                                                                    <td> <span class="label">$10,155</span></td>
                                                                    <td class="text-end"><i class="fa fa-check-circle"></i>Success</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <div class="d-inline-block align-middle"><img class="img-40 m-r-15 rounded-circle align-top" src="../../userAssets/assets/images/avtar/11.jpg" alt="">
                                                                            <div class="status-circle bg-primary"></div>
                                                                            <div class="d-inline-block"><span>Horen Hors</span>
                                                                                <p class="font-roboto">2020</p>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>14 February</td>
                                                                    <td>Cell Phone</td>
                                                                    <td><i class="flag-icon flag-icon-at"></i></td>
                                                                    <td> <span class="label">$90,568</span></td>
                                                                    <td class="text-end"> <i class="fa fa-check-circle"></i>In process</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <div class="d-inline-block align-middle"><img class="img-40 m-r-15 rounded-circle align-top" src="../../userAssets/assets/images/avtar/3.jpg" alt="">
                                                                            <div class="status-circle bg-primary"></div>
                                                                            <div class="d-inline-block"><span>fenter Jessy</span>
                                                                                <p class="font-roboto">2021</p>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>12 January</td>
                                                                    <td>Earings</td>
                                                                    <td><i class="flag-icon flag-icon-br"></i></td>
                                                                    <td> <span class="label">$10,652</span></td>
                                                                    <td class="text-end"><i class="fa fa-check-circle"></i>Pending</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
            <script>
                var map;

                function initMap() {
                    map = new google.maps.Map(
                        document.getElementById('map'), {
                            center: new google.maps.LatLng(-33.91700, 151.233)
                            , zoom: 18
                        });

                    var iconBase =
                        '../../userAssets/assets/images/dashboard-2/';

                    var icons = {
                        userbig: {
                            icon: iconBase + '1.png'
                        }
                        , library: {
                            icon: iconBase + '3.png'
                        }
                        , info: {
                            icon: iconBase + '2.png'
                        }
                    };

                    var features = [{
                        position: new google.maps.LatLng(-33.91752, 151.23270)
                        , type: 'info'
                    }, {
                        position: new google.maps.LatLng(-33.91700, 151.23280)
                        , type: 'userbig'
                    }, {
                        position: new google.maps.LatLng(-33.91727341958453, 151.23348314155578)
                        , type: 'library'
                    }];

                    // Create markers.
                    for (var i = 0; i < features.length; i++) {
                        var marker = new google.maps.Marker({
                            position: features[i].position
                            , icon: icons[features[i].type].icon
                            , map: map
                        });
                    };
                }

            </script>
            <script async="" defer="" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDGCQvcXUsXwCdYArPXo72dLZ31WS3WQRw&amp;callback=initMap"></script>
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
    <script src="../../userAssets/assets/js/chart/chartist/chartist.js"></script>
    <script src="../../userAssets/assets/js/chart/chartist/chartist-plugin-tooltip.js"></script>
    <script src="../../userAssets/assets/js/chart/apex-chart/apex-chart.js"></script>
    <script src="../../userAssets/assets/js/chart/apex-chart/stock-prices.js"></script>
    <script src="../../userAssets/assets/js/prism/prism.min.js"></script>
    <script src="../../userAssets/assets/js/clipboard/clipboard.min.js"></script>
    <script src="../../userAssets/assets/js/counter/jquery.waypoints.min.js"></script>
    <script src="../../userAssets/assets/js/counter/jquery.counterup.min.js"></script>
    <script src="../../userAssets/assets/js/counter/counter-custom.js"></script>
    <script src="../../userAssets/assets/js/custom-card/custom-card.js"></script>
    <script src="../../userAssets/assets/js/owlcarousel/owl.carousel.js"></script>
    <script src="../../userAssets/assets/js/dashboard/dashboard_2.js"></script>
    <script src="../../userAssets/assets/js/tooltip-init.js"></script>
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="../../userAssets/assets/js/script.js"></script>

    <!-- login js-->
    <!-- Plugin used-->
</body>
</html>
