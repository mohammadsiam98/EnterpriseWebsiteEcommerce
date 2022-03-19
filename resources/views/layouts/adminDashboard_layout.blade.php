<html class="loading" lang="en">
<!-- BEGIN: Head-->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
    <meta name="description" content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Dashboard ecommerce - Star Tech</title>
    <link rel="apple-touch-icon" href="{{asset('admin_assets/images/ico/apple-icon-120.png')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('admin_assets/images/ico/favicon.ico')}}">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('admin_assets/vendors/css/vendors.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin_assets/vendors/css/charts/apexcharts.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin_assets/vendors/css/extensions/toastr.min.css')}}">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('admin_assets/vendors/css/tables/datatable/dataTables.bootstrap5.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin_assets/vendors/css/tables/datatable/responsive.bootstrap5.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin_assets/vendors/css/tables/datatable/buttons.bootstrap5.min.css')}}">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('admin_assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin_assets/css/bootstrap-extended.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin_assets/css/colors.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin_assets/css/components.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin_assets/css/themes/dark-layout.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin_assets/css/themes/bordered-layout.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin_assets/css/themes/semi-dark-layout.min.css')}}">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('admin_assets/css/core/menu/menu-types/vertical-menu.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin_assets/css/pages/dashboard-ecommerce.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin_assets/css/plugins/charts/chart-apex.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin_assets/css/plugins/extensions/ext-component-toastr.min.css')}}">
    <!-- END: Page CSS-->

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('admin_assets/vendors/css/vendors.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin_assets/vendors/css/tables/datatable/dataTables.bootstrap5.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin_assets/vendors/css/tables/datatable/responsive.bootstrap5.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin_assets/vendors/css/tables/datatable/buttons.bootstrap5.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin_assets/vendors/css/tables/datatable/rowGroup.bootstrap5.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin_assets/vendors/css/pickers/flatpickr/flatpickr.min.css')}}">
    <!-- END: Vendor CSS-->

    <link rel="stylesheet" type="text/css" href="{{asset('admin_assets/css/plugins/forms/form-validation.css')}}">


    <!-- BEGIN: Custom CSS-->
    <link rel=" stylesheet" type="text/css" href="{{asset('admin_assets/assets/css/style.css')}}">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->
<body class="vertical-layout vertical-menu-modern  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="">

    <!-- BEGIN: Header-->
    <nav class="header-navbar navbar navbar-expand-lg align-items-center floating-nav navbar-light navbar-shadow container-xxl">
        <div class="navbar-container d-flex content">
            <div class="bookmark-wrapper d-flex align-items-center">
                <ul class="nav navbar-nav d-xl-none">
                    <li class="nav-item"><a class="nav-link menu-toggle" href="#"><i class="ficon" data-feather="menu"></i></a></li>
                </ul>
            </div>
            <ul class="nav navbar-nav align-items-center ms-auto">
                <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-style"><i class="ficon" data-feather="moon"></i></a></li>
                <li class="nav-item dropdown dropdown-notification me-25"><a class="nav-link" href="#" data-bs-toggle="dropdown"><i class="ficon" data-feather="bell"></i><span class="badge rounded-pill bg-danger badge-up">5</span></a>
                    <ul class="dropdown-menu dropdown-menu-media dropdown-menu-end">
                        <li class="dropdown-menu-header">
                            <div class="dropdown-header d-flex">
                                <h4 class="notification-title mb-0 me-auto">Notifications</h4>
                                <div class="badge rounded-pill badge-light-primary">6 New</div>
                            </div>
                        </li>
                        <li class="scrollable-container media-list"><a class="d-flex" href="#">
                                <div class="list-item d-flex align-items-start">
                                    <div class="me-1">
                                        <div class="avatar"><img src="{{asset('admin_assets/images/portrait/small/avatar-s-15.jpg')}}" alt="avatar" width="32" height="32"></div>
                                    </div>
                                    <div class="list-item-body flex-grow-1">
                                        <p class="media-heading"><span class="fw-bolder">Congratulation Sam 🎉</span>winner!</p><small class="notification-text"> Won the monthly best seller badge.</small>
                                    </div>
                                </div>
                            </a><a class="d-flex" href="#">
                                <div class="list-item d-flex align-items-start">
                                    <div class="me-1">
                                        <div class="avatar"><img src="{{asset('admin_assets/images/portrait/small/avatar-s-3.jpg')}}" alt="avatar" width="32" height="32"></div>
                                    </div>
                                    <div class="list-item-body flex-grow-1">
                                        <p class="media-heading"><span class="fw-bolder">New message</span>&nbsp;received</p><small class="notification-text"> You have 10 unread messages</small>
                                    </div>
                                </div>
                            </a><a class="d-flex" href="#">
                                <div class="list-item d-flex align-items-start">
                                    <div class="me-1">
                                        <div class="avatar bg-light-danger">
                                            <div class="avatar-content">MD</div>
                                        </div>
                                    </div>
                                    <div class="list-item-body flex-grow-1">
                                        <p class="media-heading"><span class="fw-bolder">Revised Order 👋</span>&nbsp;checkout</p><small class="notification-text"> MD Inc. order updated</small>
                                    </div>
                                </div>
                            </a>
                            <div class="list-item d-flex align-items-center">
                                <h6 class="fw-bolder me-auto mb-0">System Notifications</h6>
                                <div class="form-check form-check-primary form-switch">
                                    <input class="form-check-input" id="systemNotification" type="checkbox" checked="">
                                    <label class="form-check-label" for="systemNotification"></label>
                                </div>
                            </div><a class="d-flex" href="#">
                                <div class="list-item d-flex align-items-start">
                                    <div class="me-1">
                                        <div class="avatar bg-light-danger">
                                            <div class="avatar-content"><i class="avatar-icon" data-feather="x"></i></div>
                                        </div>
                                    </div>
                                    <div class="list-item-body flex-grow-1">
                                        <p class="media-heading"><span class="fw-bolder">Server down</span>&nbsp;registered</p><small class="notification-text"> USA Server is down due to high CPU usage</small>
                                    </div>
                                </div>
                            </a><a class="d-flex" href="#">
                                <div class="list-item d-flex align-items-start">
                                    <div class="me-1">
                                        <div class="avatar bg-light-success">
                                            <div class="avatar-content"><i class="avatar-icon" data-feather="check"></i></div>
                                        </div>
                                    </div>
                                    <div class="list-item-body flex-grow-1">
                                        <p class="media-heading"><span class="fw-bolder">Sales report</span>&nbsp;generated</p><small class="notification-text"> Last month sales report generated</small>
                                    </div>
                                </div>
                            </a><a class="d-flex" href="#">
                                <div class="list-item d-flex align-items-start">
                                    <div class="me-1">
                                        <div class="avatar bg-light-warning">
                                            <div class="avatar-content"><i class="avatar-icon" data-feather="alert-triangle"></i></div>
                                        </div>
                                    </div>
                                    <div class="list-item-body flex-grow-1">
                                        <p class="media-heading"><span class="fw-bolder">High memory</span>&nbsp;usage</p><small class="notification-text"> BLR Server using high memory</small>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="dropdown-menu-footer"><a class="btn btn-primary w-100" href="#">Read all notifications</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown dropdown-user"><a class="nav-link dropdown-toggle dropdown-user-link" id="dropdown-user" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="user-nav d-sm-flex d-none"><span class="user-name fw-bolder">{{ Auth::user()->name }}</span><span class="user-status">Position Name</span></div><span class="avatar"><img class="round" src="{{asset('admin_assets/images/portrait/small/avatar-s-11.jpg')}}" alt="avatar" height="40" width="40"><span class="avatar-status-online"></span></span>
                    </a>

                </li>
            </ul>
        </div>
    </nav>
    <ul class="main-search-list-defaultlist d-none">
        <li class="d-flex align-items-center"><a href="#">
                <h6 class="section-label mt-75 mb-0">Files</h6>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between w-100" href="app-file-manager.html">
                <div class="d-flex">
                    <div class="me-75"><img src="{{asset('admin_assets/images/icons/xls.png')}}" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Two new item submitted</p><small class="text-muted">Marketing Manager</small>
                    </div>
                </div><small class="search-data-size me-50 text-muted">&apos;17kb</small>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between w-100" href="app-file-manager.html">
                <div class="d-flex">
                    <div class="me-75"><img src="{{asset('admin_assets/images/icons/jpg.png')}}" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">52 JPG file Generated</p><small class="text-muted">FontEnd Developer</small>
                    </div>
                </div><small class="search-data-size me-50 text-muted">&apos;11kb</small>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between w-100" href="app-file-manager.html">
                <div class="d-flex">
                    <div class="me-75"><img src="{{asset('admin_assets/images/icons/pdf.png')}}" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">25 PDF File Uploaded</p><small class="text-muted">Digital Marketing Manager</small>
                    </div>
                </div><small class="search-data-size me-50 text-muted">&apos;150kb</small>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between w-100" href="app-file-manager.html">
                <div class="d-flex">
                    <div class="me-75"><img src="{{asset('admin_assets/images/icons/doc.png')}}" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Anna_Strong.doc</p><small class="text-muted">Web Designer</small>
                    </div>
                </div><small class="search-data-size me-50 text-muted">&apos;256kb</small>
            </a></li>
        <li class="d-flex align-items-center"><a href="#">
                <h6 class="section-label mt-75 mb-0">Members</h6>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between py-50 w-100" href="app-user-view-account.html">
                <div class="d-flex align-items-center">
                    <div class="avatar me-75"><img src="{{asset('admin_assets/images/portrait/small/avatar-s-8.jpg')}}" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">John Doe</p><small class="text-muted">UI designer</small>
                    </div>
                </div>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between py-50 w-100" href="app-user-view-account.html">
                <div class="d-flex align-items-center">
                    <div class="avatar me-75"><img src="{{asset('admin_assets/images/portrait/small/avatar-s-1.jpg')}}" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Michal Clark</p><small class="text-muted">FontEnd Developer</small>
                    </div>
                </div>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between py-50 w-100" href="app-user-view-account.html">
                <div class="d-flex align-items-center">
                    <div class="avatar me-75"><img src="admin_assets/images/portrait/small/avatar-s-14.jpg" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Milena Gibson</p><small class="text-muted">Digital Marketing Manager</small>
                    </div>
                </div>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between py-50 w-100" href="app-user-view-account.html">
                <div class="d-flex align-items-center">
                    <div class="avatar me-75"><img src="{{asset('admin_assets/images/portrait/small/avatar-s-6.jpg')}}" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Anna Strong</p><small class="text-muted">Web Designer</small>
                    </div>
                </div>
            </a></li>
    </ul>

    <ul class="main-search-list-defaultlist-other-list d-none">
        <li class="auto-suggestion justify-content-between"><a class="d-flex align-items-center justify-content-between w-100 py-50">
                <div class="d-flex justify-content-start"><span class="me-75" data-feather="alert-circle"></span><span>No results found.</span></div>
            </a></li>
    </ul>
    <!-- END: Header-->

    <!-- BEGIN: Main Menu-->
    <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item me-auto"><a class="navbar-brand" href="{{route('dashboard')}}"><span class="brand-logo">
                            <svg viewbox="0 0 139 95" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" height="24">
                                <defs>
                                    <lineargradient id="linearGradient-1" x1="100%" y1="10.5120544%" x2="50%" y2="89.4879456%">
                                        <stop stop-color="#000000" offset="0%"></stop>
                                        <stop stop-color="#FFFFFF" offset="100%"></stop>
                                    </lineargradient>
                                    <lineargradient id="linearGradient-2" x1="64.0437835%" y1="46.3276743%" x2="37.373316%" y2="100%">
                                        <stop stop-color="#EEEEEE" stop-opacity="0" offset="0%"></stop>
                                        <stop stop-color="#FFFFFF" offset="100%"></stop>
                                    </lineargradient>
                                </defs>
                                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <g id="Artboard" transform="translate(-400.000000, -178.000000)">
                                        <g id="Group" transform="translate(400.000000, 178.000000)">
                                            <path class="text-primary" id="Path" d="M-5.68434189e-14,2.84217094e-14 L39.1816085,2.84217094e-14 L69.3453773,32.2519224 L101.428699,2.84217094e-14 L138.784583,2.84217094e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L6.71554594,44.4188507 C2.46876683,39.9813776 0.345377275,35.1089553 0.345377275,29.8015838 C0.345377275,24.4942122 0.230251516,14.560351 -5.68434189e-14,2.84217094e-14 Z" style="fill:currentColor"></path>
                                            <path id="Path1" d="M69.3453773,32.2519224 L101.428699,1.42108547e-14 L138.784583,1.42108547e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L32.8435758,70.5039241 L69.3453773,32.2519224 Z" fill="url(#linearGradient-1)" opacity="0.2"></path>
                                            <polygon id="Path-2" fill="#000000" opacity="0.049999997" points="69.3922914 32.4202615 32.8435758 70.5039241 54.0490008 16.1851325"></polygon>
                                            <polygon id="Path-21" fill="#000000" opacity="0.099999994" points="69.3922914 32.4202615 32.8435758 70.5039241 58.3683556 20.7402338"></polygon>
                                            <polygon id="Path-3" fill="url(#linearGradient-2)" opacity="0.099999994" points="101.428699 0 83.0667527 94.1480575 130.378721 47.0740288"></polygon>
                                        </g>
                                    </g>
                                </g>
                            </svg></span>
                        <h2 class="brand-text">Vuexy</h2>
                    </a></li>
                <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pe-0" data-bs-toggle="collapse"><i class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i><i class="d-none d-xl-block collapse-toggle-icon font-medium-4  text-primary" data-feather="disc" data-ticon="disc"></i></a></li>
            </ul>
        </div>
        <div class="shadow-bottom"></div>
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <li class="nav-item {{ (request()->is('admin/dashboard')) ? 'active' : '' }}">
                    <a class="d-flex align-items-center" href="{{route('admin.dashboard')}}"><i data-feather="home"></i><span class="menu-title text-truncate" data-i18n="Dashboards">Dashboard</span></a>
                    <ul class="menu-content">
                        <li class=""><a class="d-flex align-items-center" href="{{route('admin.dashboard')}}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="eCommerce">Super User Dashboard</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" navigation-header"><span data-i18n="Apps &amp; Pages">Apps &amp; Pages</span><i data-feather="more-horizontal"></i>
                </li>
                <li class="nav-item">
                    <a class="d-flex align-items-center" href=""><i data-feather="home"></i><span class="menu-title text-truncate" data-i18n="Dashboards">Terms&Conditions</span></a>
                    <ul class="menu-content">
                        <li class=" {{ (request()->routeIs('termsConditions.create')) ? 'active' : '' }}"><a class="d-flex align-items-center" href="{{route('termsConditions.create')}}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="eCommerce">Create</span></a>
                        </li>
                        <li class="{{ (request()->routeIs('termsConditions.list')) ? 'active' : '' }}"><a class="d-flex align-items-center" href="{{route('termsConditions.list')}}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="eCommerce">List</span></a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item"><a class="d-flex align-items-center" href=""><i data-feather="home"></i><span class="menu-title text-truncate" data-i18n="Dashboards">Privacy Policy</span></a>
                    <ul class="menu-content">
                        <li class="{{ (request()->routeIs('privacyPolicy.create')) ? 'active' : '' }}"><a class="d-flex align-items-center" href="{{route('privacyPolicy.create')}}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="eCommerce">Create</span></a>
                        </li>
                        <li class="{{ (request()->routeIs('privacyPolicy.list')) ? 'active' : '' }}"><a class="d-flex align-items-center" href="{{route('privacyPolicy.list')}}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="eCommerce">List</span></a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item"><a class="d-flex align-items-center" href=""><i data-feather="home"></i><span class="menu-title text-truncate" data-i18n="Dashboards">Banner</span></a>
                    <ul class="menu-content">
                        <li class="{{ (request()->routeIs('banner.create')) ? 'active' : '' }}"><a class="d-flex align-items-center" href="{{route('banner.create')}}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="eCommerce">Create</span></a>
                        </li>
                        <li class="{{ (request()->routeIs('banner.list')) ? 'active' : '' }}"><a class="d-flex align-items-center" href="{{route('banner.list')}}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="eCommerce">List</span></a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item"><a class="d-flex align-items-center" href=""><i data-feather="home"></i><span class="menu-title text-truncate" data-i18n="Dashboards">Category</span></a>
                    <ul class="menu-content">
                        <li class="{{ (request()->routeIs('category.create')) ? 'active' : '' }}"><a class="d-flex align-items-center" href="{{route('category.create')}}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="eCommerce">Create</span></a>
                        </li>
                        <li class="{{ (request()->routeIs('category.list')) ? 'active' : '' }}"><a class="d-flex align-items-center" href="{{route('category.list')}}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="eCommerce">List</span></a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item"><a class="d-flex align-items-center" href=""><i data-feather="home"></i><span class="menu-title text-truncate" data-i18n="Dashboards">Sub Category</span></a>
                    <ul class="menu-content">
                        <li class="{{ (request()->routeIs('subCategories.create')) ? 'active' : '' }}"><a class="d-flex align-items-center" href="{{route('subCategories.create')}}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="eCommerce">Create</span></a>
                        </li>
                        <li class="{{ (request()->routeIs('subCategories.list')) ? 'active' : '' }}"><a class="d-flex align-items-center" href="{{route('subCategories.list')}}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="eCommerce">List</span></a>
                        </li>
                    </ul>
                </li>


            </ul>
        </div>
    </div>
    <!-- END: Main Menu-->

    @yield('content')

    <!-- BEGIN: Customizer-->
    <div class="customizer d-none d-md-block"><a class="customizer-toggle d-flex align-items-center justify-content-center" href="#"><i class="spinner" data-feather="settings"></i></a>
        <div class="customizer-content">
            <!-- Customizer header -->
            <div class="customizer-header px-2 pt-1 pb-0 position-relative">
                <h4 class="mb-0">Theme Customizer</h4>
                <p class="m-0">Customize & Preview in Real Time</p>

                <a class="customizer-close" href="#"><i data-feather="x"></i></a>
            </div>

            <hr />

            <!-- Styling & Text Direction -->
            <div class="customizer-styling-direction px-2">
                <p class="fw-bold">Skin</p>
                <div class="d-flex">
                    <div class="form-check me-1">
                        <input type="radio" id="skinlight" name="skinradio" class="form-check-input layout-name" checked data-layout="" />
                        <label class="form-check-label" for="skinlight">Light</label>
                    </div>
                    <div class="form-check me-1">
                        <input type="radio" id="skinbordered" name="skinradio" class="form-check-input layout-name" data-layout="bordered-layout" />
                        <label class="form-check-label" for="skinbordered">Bordered</label>
                    </div>
                    <div class="form-check me-1">
                        <input type="radio" id="skindark" name="skinradio" class="form-check-input layout-name" data-layout="dark-layout" />
                        <label class="form-check-label" for="skindark">Dark</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" id="skinsemidark" name="skinradio" class="form-check-input layout-name" data-layout="semi-dark-layout" />
                        <label class="form-check-label" for="skinsemidark">Semi Dark</label>
                    </div>
                </div>
            </div>

            <hr />

            <!-- Menu -->
            <div class="customizer-menu px-2">
                <div id="customizer-menu-collapsible" class="d-flex">
                    <p class="fw-bold me-auto m-0">Menu Collapsed</p>
                    <div class="form-check form-check-primary form-switch">
                        <input type="checkbox" class="form-check-input" id="collapse-sidebar-switch" />
                        <label class="form-check-label" for="collapse-sidebar-switch"></label>
                    </div>
                </div>
            </div>
            <hr />

            <!-- Layout Width -->
            <div class="customizer-footer px-2">
                <p class="fw-bold">Layout Width</p>
                <div class="d-flex">
                    <div class="form-check me-1">
                        <input type="radio" id="layout-width-full" name="layoutWidth" class="form-check-input" checked />
                        <label class="form-check-label" for="layout-width-full">Full Width</label>
                    </div>
                    <div class="form-check me-1">
                        <input type="radio" id="layout-width-boxed" name="layoutWidth" class="form-check-input" />
                        <label class="form-check-label" for="layout-width-boxed">Boxed</label>
                    </div>
                </div>
            </div>
            <hr />

            <!-- Navbar -->
            <div class="customizer-navbar px-2">
                <div id="customizer-navbar-colors">
                    <p class="fw-bold">Navbar Color</p>
                    <ul class="list-inline unstyled-list">
                        <li class="color-box bg-white border selected" data-navbar-default=""></li>
                        <li class="color-box bg-primary" data-navbar-color="bg-primary"></li>
                        <li class="color-box bg-secondary" data-navbar-color="bg-secondary"></li>
                        <li class="color-box bg-success" data-navbar-color="bg-success"></li>
                        <li class="color-box bg-danger" data-navbar-color="bg-danger"></li>
                        <li class="color-box bg-info" data-navbar-color="bg-info"></li>
                        <li class="color-box bg-warning" data-navbar-color="bg-warning"></li>
                        <li class="color-box bg-dark" data-navbar-color="bg-dark"></li>
                    </ul>
                </div>

                <p class="navbar-type-text fw-bold">Navbar Type</p>
                <div class="d-flex">
                    <div class="form-check me-1">
                        <input type="radio" id="nav-type-floating" name="navType" class="form-check-input" checked />
                        <label class="form-check-label" for="nav-type-floating">Floating</label>
                    </div>
                    <div class="form-check me-1">
                        <input type="radio" id="nav-type-sticky" name="navType" class="form-check-input" />
                        <label class="form-check-label" for="nav-type-sticky">Sticky</label>
                    </div>
                    <div class="form-check me-1">
                        <input type="radio" id="nav-type-static" name="navType" class="form-check-input" />
                        <label class="form-check-label" for="nav-type-static">Static</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" id="nav-type-hidden" name="navType" class="form-check-input" />
                        <label class="form-check-label" for="nav-type-hidden">Hidden</label>
                    </div>
                </div>
            </div>
            <hr />

            <!-- Footer -->
            <div class="customizer-footer px-2">
                <p class="fw-bold">Footer Type</p>
                <div class="d-flex">
                    <div class="form-check me-1">
                        <input type="radio" id="footer-type-sticky" name="footerType" class="form-check-input" />
                        <label class="form-check-label" for="footer-type-sticky">Sticky</label>
                    </div>
                    <div class="form-check me-1">
                        <input type="radio" id="footer-type-static" name="footerType" class="form-check-input" checked />
                        <label class="form-check-label" for="footer-type-static">Static</label>
                    </div>
                    <div class="form-check me-1">
                        <input type="radio" id="footer-type-hidden" name="footerType" class="form-check-input" />
                        <label class="form-check-label" for="footer-type-hidden">Hidden</label>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- End: Customizer-->


    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <footer class="footer footer-static footer-light">
        <p class="clearfix mb-0"><span class="float-md-start d-block d-md-inline-block mt-25">COPYRIGHT &copy; 2021<a class="ms-25" href="https://1.envato.market/pixinvent_portfolio" target="_blank">Pixinvent</a><span class="d-none d-sm-inline-block">, All rights Reserved</span></span><span class="float-md-end d-none d-md-block">Hand-crafted & Made with<i data-feather="heart"></i></span></p>
    </footer>
    <button class="btn btn-primary btn-icon scroll-top" type="button"><i data-feather="arrow-up"></i></button>
    <!-- END: Footer-->


    <!-- BEGIN: Vendor JS-->
    <script src="{{asset('admin_assets/vendors/js/vendors.min.js')}}"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="{{asset('admin_assets/vendors/js/tables/datatable/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('admin_assets/app-assets/vendors/js/forms/validation/jquery.validate.min.js')}}"></script>
    <!-- END: Page Vendor JS-->


    <!-- BEGIN: Page Vendor JS-->
    <script src="{{asset('admin_assets/vendors/js/charts/apexcharts.min.js')}}"></script>
    <!-- END: Page Vendor JS-->


    <!-- BEGIN: Page Vendor JS-->
    <script src="{{asset('admin_assets/vendors/js/tables/datatable/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('admin_assets/vendors/js/tables/datatable/dataTables.bootstrap5.min.js')}}"></script>
    <script src="{{asset('admin_assets/vendors/js/tables/datatable/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('admin_assets/vendors/js/tables/datatable/responsive.bootstrap5.min.js')}}"></script>
    <script src="{{asset('admin_assets/vendors/js/tables/datatable/datatables.checkboxes.min.js')}}"></script>
    <script src="{{asset('admin_assets/vendors/js/tables/datatable/datatables.buttons.min.js')}}"></script>
    <script src="{{asset('admin_assets/vendors/js/tables/datatable/jszip.min.js')}}"></script>
    <script src="{{asset('admin_assets/vendors/js/tables/datatable/pdfmake.min.js')}}"></script>
    <script src="{{asset('admin_assets/vendors/js/tables/datatable/vfs_fonts.js')}}"></script>
    <script src="{{asset('admin_assets/vendors/js/tables/datatable/buttons.html5.min.js')}}"></script>
    <script src="{{asset('admin_assets/vendors/js/tables/datatable/buttons.print.min.js')}}"></script>
    <script src="{{asset('admin_assets/vendors/js/tables/datatable/dataTables.rowGroup.min.js')}}"></script>
    <script src="{{asset('admin_assets/vendors/js/pickers/flatpickr/flatpickr.min.js')}}"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Page JS-->
    <script src="{{asset('admin_assets/js/scripts/tables/table-datatables-basic.js')}}"></script>
    <!-- END: Page JS-->


    <!-- BEGIN: Theme JS-->
    <script src="{{asset('admin_assets/js/core/app-menu.min.js')}}"></script>
    <script src="{{asset('admin_assets/js/core/app.min.js')}}"></script>
    <script src="{{asset('admin_assets/js/scripts/customizer.min.js')}}"></script>
    <script src="{{asset('admin_assets/js/scripts/pages/modal-add-permission.js')}}"></script>
    <script src="{{asset('admin_assets/js/scripts/pages/modal-edit-permission.js')}}"></script>
    <script src="{{asset('admin_assets/js/scripts/pages/app-access-permission.js')}}"></script>
    <!-- END: Theme JS-->


    <!-- BEGIN: Page Vendor JS-->
    <link rel="stylesheet" type="text/css" href="{{asset('admin_assets/vendors/css/forms/select/select2.min.css')}}">
    <script src="{{asset('admin_assets/vendors/js/forms/select/select2.full.min.js')}}"></script>
    <script src="{{asset('admin_assets/vendors/js/forms/validation/jquery.validate.min.js')}}"></script>
    <script src="{{asset('admin_assets/vendors/js/pickers/flatpickr/flatpickr.min.js')}}"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Page JS-->
    <script src="{{asset('admin_assets/js/scripts/forms/form-validation.js')}}"></script>
    <!-- END: Page JS-->


    <!-- BEGIN: Page JS-->
    <script src="{{asset('admin_assets/js/scripts/pages/dashboard-ecommerce.min.js')}}"></script>
    <!-- END: Page JS-->


    <script>
        $(window).on('load', function() {
            if (feather) {
                feather.replace({
                    width: 14
                    , height: 14
                });
            }
        })

    </script>
</body>
<!-- END: Body-->
</html>
