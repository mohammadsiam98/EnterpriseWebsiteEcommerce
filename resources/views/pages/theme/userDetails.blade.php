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
        <!-- Page Header Ends-->
        <!-- Page Body Start-->
        <div class="page-body-wrapper">
            <!-- Page Sidebar Start-->
            <div class="sidebar-wrapper">
                <div>
                    <div class="logo-wrapper"><a href="index.html"><img class="img-fluid for-light" src="../../userAssets/assets/images/logo/logo.png" alt=""><img class="img-fluid for-dark" src="../../userAssets/assets/images/logo/logo_dark.png" alt=""></a>
                        <div class="back-btn"><i class="fa fa-angle-left"></i></div>
                        <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="grid"> </i></div>
                    </div>
                    <div class="logo-icon-wrapper"><a href="index.html"><img class="img-fluid" src="../../userAssets/assets/images/logo/logo-icon.png" alt=""></a></div>
                    <nav class="sidebar-main">
                        <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
                        <div id="sidebar-menu">
                            <ul class="sidebar-links" id="simple-bar">
                                <li class="back-btn"><a href="index.html"><img class="img-fluid" src="../../userAssets/assets/images/logo/logo-icon.png" alt=""></a>
                                    <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
                                </li>
                                <li class="sidebar-main-title">
                                    <div>
                                        <h6 class="lan-1">General</h6>
                                        <p class="lan-2">Dashboards,widgets & layout.</p>
                                    </div>
                                </li>
                                <li class="sidebar-list">
                                    <label class="badge badge-success">2</label><a class="sidebar-link sidebar-title" href="#"><i data-feather="home"></i><span class="lan-3">Dashboard </span></a>
                                    <ul class="sidebar-submenu">
                                        <li><a class="lan-4" href="index.html">Default</a></li>
                                        <li><a class="lan-5" href="dashboard-02.html">Ecommerce</a></li>
                                    </ul>
                                </li>
                                <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="#"><i data-feather="airplay"></i><span class="lan-6">Widgets</span></a>
                                    <ul class="sidebar-submenu">
                                        <li><a href="general-widget.html">General</a></li>
                                        <li><a href="chart-widget.html">Chart</a></li>
                                    </ul>
                                </li>
                                <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="#"><i data-feather="layout"></i><span class="lan-7">Page layout</span></a>
                                    <ul class="sidebar-submenu">
                                        <li><a href="box-layout.html">Boxed</a></li>
                                        <li><a href="layout-rtl.html">RTL</a></li>
                                        <li><a href="layout-dark.html">Dark Layout</a></li>
                                        <li><a href="hide-on-scroll.html">Hide Nav Scroll</a></li>
                                        <li><a href="footer-light.html">Footer Light</a></li>
                                        <li><a href="footer-dark.html">Footer Dark</a></li>
                                        <li><a href="footer-fixed.html">Footer Fixed</a></li>
                                    </ul>
                                </li>
                                <li class="sidebar-main-title">
                                    <div>
                                        <h6>Components</h6>
                                        <p class="lan-9">Ready to use Apps</p>
                                    </div>
                                </li>

                                <li class="sidebar-list">
                                    <label class="badge badge-danger">Profile</label><a class="sidebar-link sidebar-title active" href="#"><i data-feather="box"></i><span>Edit Account</span></a>
                                    <ul class="sidebar-submenu">
                                        <li><a href="{{route('user.edit')}}" class="active">Show Profile</a></li>
                                        <li><a href="projects.html">Edit Profile</a></li>
                                        <li><a href="projectcreate.html">Add Image</a></li>
                                    </ul>
                                </li>
                                <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav" href="file-manager.html"><i data-feather="git-pull-request"> </i><span>Password Change</span></a></li>


                                <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="#"><i data-feather="mail"></i><span>Address</span></a>
                                    <ul class="sidebar-submenu">
                                        <li><a href="email-application.html">Already Added</a></li>
                                        <li><a href="email-compose.html">Add New</a></li>
                                    </ul>
                                </li>
                                <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="#"><i data-feather="message-circle"></i><span>Orders</span></a>
                                    <ul class="sidebar-submenu">
                                        <li><a href="chat.html">Order List</a></li>
                                    </ul>
                                </li>
                                <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="#"><i data-feather="users"></i><span>Users</span></a>
                                    <ul class="sidebar-submenu">
                                        <li><a href="user-profile.html">Users Profile</a></li>
                                        <li><a href="edit-profile.html">Users Edit</a></li>
                                        <li><a href="user-cards.html">Users Cards</a></li>
                                    </ul>
                                </li>
                                <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav" href="bookmark.html"><i data-feather="heart"> </i><span>Bookmarks</span></a></li>
                                <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav" href="contacts.html"><i data-feather="list"> </i><span>Contacts</span></a></li>
                                <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav" href="task.html"><i data-feather="check-square"> </i><span>Tasks</span></a></li>
                                <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav" href="calendar-basic.html"><i data-feather="calendar"> </i><span>Calendar</span></a></li>
                                <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav" href="social-app.html"><i data-feather="zap"> </i><span>Social App</span></a></li>
                                <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav" href="to-do.html"><i data-feather="clock"> </i><span>To-Do</span></a></li>
                                <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav" href="search.html"><i data-feather="search"> </i><span>Search Result</span></a></li>
                                <li class="sidebar-main-title">
                                    <div>
                                        <h6>Forms & Table</h6>
                                        <p>Ready to use froms & tables </p>
                                    </div>
                                </li>
                                <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="#"><i data-feather="file-text"></i><span>Forms</span></a>
                                    <ul class="sidebar-submenu">
                                        <li><a class="submenu-title" href="#">Form Controls<span class="sub-arrow"><i class="fa fa-angle-right"></i></span></a>
                                            <ul class="nav-sub-childmenu submenu-content">
                                                <li><a href="form-validation.html">Form Validation</a></li>
                                                <li><a href="base-input.html">Base Inputs</a></li>
                                                <li><a href="radio-checkbox-control.html">Checkbox & Radio</a></li>
                                                <li><a href="input-group.html">Input Groups</a></li>
                                                <li><a href="megaoptions.html">Mega Options</a></li>
                                            </ul>
                                        </li>
                                        <li><a class="submenu-title" href="#">Form Widgets<span class="sub-arrow"><i class="fa fa-angle-right"></i></span></a>
                                            <ul class="nav-sub-childmenu submenu-content">
                                                <li><a href="datepicker.html">Datepicker</a></li>
                                                <li><a href="time-picker.html">Timepicker</a></li>
                                                <li><a href="datetimepicker.html">Datetimepicker</a></li>
                                                <li><a href="daterangepicker.html">Daterangepicker</a></li>
                                                <li><a href="touchspin.html">Touchspin</a></li>
                                                <li><a href="select2.html">Select2</a></li>
                                                <li><a href="switch.html">Switch</a></li>
                                                <li><a href="typeahead.html">Typeahead</a></li>
                                                <li><a href="clipboard.html">Clipboard</a></li>
                                            </ul>
                                        </li>
                                        <li><a class="submenu-title" href="#">Form layout<span class="sub-arrow"><i class="fa fa-angle-right"></i></span></a>
                                            <ul class="nav-sub-childmenu submenu-content">
                                                <li><a href="default-form.html">Default Forms</a></li>
                                                <li><a href="form-wizard.html">Form Wizard 1</a></li>
                                                <li><a href="form-wizard-two.html">Form Wizard 2</a></li>
                                                <li><a href="form-wizard-three.html">Form Wizard 3</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="#"><i data-feather="server"></i><span>Tables</span></a>
                                    <ul class="sidebar-submenu">
                                        <li><a class="submenu-title" href="#">Bootstrap Tables<span class="sub-arrow"><i class="fa fa-angle-right"></i></span></a>
                                            <ul class="nav-sub-childmenu submenu-content">
                                                <li><a href="bootstrap-basic-table.html">Basic Tables</a></li>
                                                <li><a href="bootstrap-sizing-table.html">Sizing Tables</a></li>
                                                <li><a href="bootstrap-border-table.html">Border Tables</a></li>
                                                <li><a href="bootstrap-styling-table.html">Styling Tables</a></li>
                                                <li><a href="table-components.html">Table components</a></li>
                                            </ul>
                                        </li>
                                        <li><a class="submenu-title" href="#">Data Tables<span class="sub-arrow"><i class="fa fa-angle-right"></i></span></a>
                                            <ul class="nav-sub-childmenu submenu-content">
                                                <li><a href="datatable-basic-init.html">Basic Init</a></li>
                                                <li><a href="datatable-advance.html">Advance Init</a></li>
                                                <li><a href="datatable-styling.html">Styling</a></li>
                                                <li><a href="datatable-AJAX.html">AJAX</a></li>
                                                <li><a href="datatable-server-side.html">Server Side</a></li>
                                                <li><a href="datatable-plugin.html">Plug-in</a></li>
                                                <li><a href="datatable-API.html">API</a></li>
                                                <li><a href="datatable-data-source.html">Data Sources</a></li>
                                            </ul>
                                        </li>
                                        <li><a class="submenu-title" href="#">Ex. Data Tables<span class="sub-arrow"><i class="fa fa-angle-right"></i></span></a>
                                            <ul class="nav-sub-childmenu submenu-content">
                                                <li><a href="datatable-ext-autofill.html">Auto Fill</a></li>
                                                <li><a href="datatable-ext-basic-button.html">Basic Button</a></li>
                                                <li><a href="datatable-ext-col-reorder.html">Column Reorder</a></li>
                                                <li><a href="datatable-ext-fixed-header.html">Fixed Header</a></li>
                                                <li><a href="datatable-ext-html-5-data-export.html">HTML 5 Export</a></li>
                                                <li><a href="datatable-ext-key-table.html">Key Table</a></li>
                                                <li><a href="datatable-ext-responsive.html">Responsive</a></li>
                                                <li><a href="datatable-ext-row-reorder.html">Row Reorder</a></li>
                                                <li><a href="datatable-ext-scroller.html">Scroller</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="jsgrid-table.html">Js Grid Table </a></li>
                                    </ul>
                                </li>
                                <li class="sidebar-main-title">
                                    <div>
                                        <h6>Components</h6>
                                        <p>UI Components & Elements </p>
                                    </div>
                                </li>
                                <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="#"><i data-feather="box"></i><span>Ui Kits</span></a>
                                    <ul class="sidebar-submenu">
                                        <li><a href="state-color.html">State color</a></li>
                                        <li><a href="typography.html">Typography</a></li>
                                        <li><a href="avatars.html">Avatars</a></li>
                                        <li><a href="helper-classes.html">helper classes</a></li>
                                        <li><a href="grid.html">Grid</a></li>
                                        <li><a href="tag-pills.html">Tag & pills</a></li>
                                        <li><a href="progress-bar.html">Progress</a></li>
                                        <li><a href="modal.html">Modal</a></li>
                                        <li><a href="alert.html">Alert</a></li>
                                        <li><a href="popover.html">Popover</a></li>
                                        <li><a href="tooltip.html">Tooltip</a></li>
                                        <li><a href="loader.html">Spinners</a></li>
                                        <li><a href="dropdown.html">Dropdown</a></li>
                                        <li><a href="according.html">Accordion</a></li>
                                        <li><a class="submenu-title" href="#">Tabs<span class="sub-arrow"><i class="fa fa-angle-right"></i></span></a>
                                            <ul class="nav-sub-childmenu submenu-content">
                                                <li><a href="tab-bootstrap.html">Bootstrap Tabs</a></li>
                                                <li><a href="tab-material.html">Line Tabs</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="box-shadow.html">Shadow</a></li>
                                        <li><a href="list.html">Lists</a></li>
                                    </ul>
                                </li>


                                <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="#"><i data-feather="cloud-drizzle"></i><span>Animation</span></a>
                                    <ul class="sidebar-submenu">
                                        <li><a href="animate.html">Animate</a></li>
                                        <li><a href="scroll-reval.html">Scroll Reveal</a></li>
                                        <li><a href="AOS.html">AOS animation</a></li>
                                        <li><a href="tilt.html">Tilt Animation</a></li>
                                        <li><a href="wow.html">Wow Animation</a></li>
                                    </ul>
                                </li>
                                <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="#"><i data-feather="command"></i><span>Icons</span></a>
                                    <ul class="sidebar-submenu">
                                        <li><a href="flag-icon.html">Flag icon</a></li>
                                        <li><a href="font-awesome.html">Fontawesome Icon</a></li>
                                        <li><a href="ico-icon.html">Ico Icon</a></li>
                                        <li><a href="themify-icon.html">Thimify Icon</a></li>
                                        <li><a href="feather-icon.html">Feather icon</a></li>
                                        <li><a href="whether-icon.html">Whether Icon</a></li>
                                    </ul>
                                </li>
                                <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="#"><i data-feather="cloud"></i><span>Buttons</span></a>
                                    <ul class="sidebar-submenu">
                                        <li><a href="buttons.html">Default Style</a></li>
                                        <li><a href="buttons-flat.html">Flat Style</a></li>
                                        <li><a href="buttons-edge.html">Edge Style</a></li>
                                        <li><a href="raised-button.html">Raised Style</a></li>
                                        <li><a href="button-group.html">Button Group</a></li>
                                    </ul>
                                </li>
                                <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="#"><i data-feather="bar-chart"></i><span>Charts</span></a>
                                    <ul class="sidebar-submenu">
                                        <li><a href="echarts.html">Echarts</a></li>
                                        <li><a href="chart-apex.html">Apex Chart</a></li>
                                        <li><a href="chart-google.html">Google Chart</a></li>
                                        <li><a href="chart-sparkline.html">Sparkline chart</a></li>
                                        <li><a href="chart-flot.html">Flot Chart</a></li>
                                        <li><a href="chart-knob.html">Knob Chart</a></li>
                                        <li><a href="chart-morris.html">Morris Chart</a></li>
                                        <li><a href="chartjs.html">Chatjs Chart</a></li>
                                        <li><a href="chartist.html">Chartist Chart</a></li>
                                        <li><a href="chart-peity.html">Peity Chart</a></li>
                                    </ul>
                                </li>
                                <li class="sidebar-main-title">
                                    <div>
                                        <h6>Pages</h6>
                                        <p>All neccesory pages added</p>
                                    </div>
                                </li>
                                <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav" href="landing-page.html"><i data-feather="cast"> </i><span>Landing page</span></a></li>
                                <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav" href="sample-page.html"><i data-feather="file-text"> </i><span>Sample page</span></a></li>
                                <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav" href="internationalization.html"><i data-feather="globe"> </i><span>Internationalization</span></a></li>
                                <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav" href="../starter-kit/index.html" target="_blank"><i data-feather="anchor"></i><span>Starter kit</span></a></li>
                                <li class="mega-menu"><a class="sidebar-link sidebar-title" href="#"><i data-feather="layers"></i><span>Others</span></a>
                                    <div class="mega-menu-container menu-content">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="col mega-box">
                                                    <div class="link-section">
                                                        <div class="submenu-title">
                                                            <h5>Error Page</h5>
                                                        </div>
                                                        <ul class="submenu-content opensubmegamenu">
                                                            <li><a href="error-400.html">Error 400</a></li>
                                                            <li><a href="error-401.html">Error 401</a></li>
                                                            <li><a href="error-403.html">Error 403</a></li>
                                                            <li><a href="error-404.html">Error 404</a></li>
                                                            <li><a href="error-500.html">Error 500</a></li>
                                                            <li><a href="error-503.html">Error 503</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col mega-box">
                                                    <div class="link-section">
                                                        <div class="submenu-title">
                                                            <h5> Authentication</h5>
                                                        </div>
                                                        <ul class="submenu-content opensubmegamenu">
                                                            <li><a href="login.html" target="_blank">Login Simple</a></li>
                                                            <li><a href="login_one.html" target="_blank">Login with bg image</a></li>
                                                            <li><a href="login_two.html" target="_blank">Login with image two </a></li>
                                                            <li><a href="login-bs-validation.html" target="_blank">Login With validation</a></li>
                                                            <li><a href="login-bs-tt-validation.html" target="_blank">Login with tooltip</a></li>
                                                            <li><a href="login-sa-validation.html" target="_blank">Login with sweetalert</a></li>
                                                            <li><a href="sign-up.html" target="_blank">Register Simple</a></li>
                                                            <li><a href="sign-up-one.html" target="_blank">Register with Bg Image </a></li>
                                                            <li><a href="sign-up-two.html" target="_blank">Register with Bg video</a></li>
                                                            <li><a href="sign-up-wizard.html" target="_blank">Register wizard</a></li>
                                                            <li><a href="unlock.html">Unlock User</a></li>
                                                            <li><a href="forget-password.html">Forget Password</a></li>
                                                            <li><a href="reset-password.html">Reset Password</a></li>
                                                            <li><a href="maintenance.html">Maintenance</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col mega-box">
                                                    <div class="link-section">
                                                        <div class="submenu-title">
                                                            <h5>Coming Soon</h5>
                                                        </div>
                                                        <ul class="submenu-content opensubmegamenu">
                                                            <li><a href="comingsoon.html">Coming Simple</a></li>
                                                            <li><a href="comingsoon-bg-video.html">Coming with Bg video</a></li>
                                                            <li><a href="comingsoon-bg-img.html">Coming with Bg Image</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col mega-box">
                                                    <div class="link-section">
                                                        <div class="submenu-title">
                                                            <h5>Email templates</h5>
                                                        </div>
                                                        <ul class="submenu-content opensubmegamenu">
                                                            <li><a href="basic-template.html">Basic Email</a></li>
                                                            <li><a href="email-header.html">Basic With Header</a></li>
                                                            <li><a href="template-email.html">Ecomerce Template</a></li>
                                                            <li><a href="template-email-2.html">Email Template 2</a></li>
                                                            <li><a href="ecommerce-templates.html">Ecommerce Email</a></li>
                                                            <li><a href="email-order-success.html">Order Success</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="sidebar-main-title">
                                    <div>
                                        <h6>Miscellaneous</h6>
                                        <p>Bouns pages & apps</p>
                                    </div>
                                </li>
                                <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="#"><i data-feather="image"></i><span>Gallery</span></a>
                                    <ul class="sidebar-submenu">
                                        <li><a href="gallery.html">Gallery Grid</a></li>
                                        <li><a href="gallery-with-description.html">Gallery Grid Desc</a></li>
                                        <li><a href="gallery-masonry.html">Masonry Gallery</a></li>
                                        <li><a href="masonry-gallery-with-disc.html">Masonry with Desc</a></li>
                                        <li><a href="gallery-hover.html">Hover Effects</a></li>
                                    </ul>
                                </li>
                                <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="#"><i data-feather="film"></i><span>Blog</span></a>
                                    <ul class="sidebar-submenu">
                                        <li><a href="blog.html">Blog Details</a></li>
                                        <li><a href="blog-single.html">Blog Single</a></li>
                                        <li><a href="add-post.html">Add Post</a></li>
                                    </ul>
                                </li>
                                <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav" href="faq.html"><i data-feather="help-circle"> </i><span>FAQ</span></a></li>
                                <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="#"><i data-feather="package"></i><span>Job Search</span></a>
                                    <ul class="sidebar-submenu">
                                        <li><a href="job-cards-view.html">Cards view</a></li>
                                        <li><a href="job-list-view.html">List View</a></li>
                                        <li><a href="job-details.html">Job Details</a></li>
                                        <li><a href="job-apply.html">Apply</a></li>
                                    </ul>
                                </li>
                                <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="#"><i data-feather="radio"></i><span>Learning</span></a>
                                    <ul class="sidebar-submenu">
                                        <li><a href="learning-list-view.html">Learning List</a></li>
                                        <li><a href="learning-detailed.html">Detailed Course</a></li>
                                    </ul>
                                </li>
                                <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="#"><i data-feather="map"></i><span>Maps</span></a>
                                    <ul class="sidebar-submenu">
                                        <li><a href="map-js.html">Maps JS</a></li>
                                        <li><a href="vector-map.html">Vector Maps</a></li>
                                    </ul>
                                </li>
                                <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="#"><i data-feather="edit"></i><span>Editors</span></a>
                                    <ul class="sidebar-submenu">
                                        <li><a href="summernote.html">Summer Note</a></li>
                                        <li><a href="ckeditor.html">CK editor</a></li>
                                        <li><a href="simple-MDE.html">MDE editor</a></li>
                                        <li><a href="ace-code-editor.html">ACE code editor </a></li>
                                    </ul>
                                </li>
                                <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav" href="knowledgebase.html"><i data-feather="sunrise"> </i><span>Knowledgebase</span></a></li>
                                <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav" href="support-ticket.html"><i data-feather="users"> </i><span>Support Ticket</span></a></li>
                            </ul>
                        </div>
                        <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
                    </nav>
                </div>
            </div>
            <!-- Page Sidebar Ends-->
            <div class="page-body">
                <div class="container-fluid">
                    <div class="page-title">
                        <div class="row">

                            <div class="col-6">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html"> <i data-feather="home"></i></a></li>
                                    <li class="breadcrumb-item">Form Controls</li>
                                    <li class="breadcrumb-item active">Base inputs</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Container-fluid starts-->
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5 style="font-family: 'Poppins', sans-serif; font-size:30px">Update your profile</h5>
                                </div>
                                <form class="form theme-form" action="{{route('user.update')}}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col">
                                                <div class="mb-3">
                                                    <label class="form-label" for="exampleFormControlInput15">Email address</label>
                                                    <input class="form-control input-air-primary" id="exampleFormControlInput15" type="email" name="email" placeholder="name@example.com" value="{{$user->email}}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="mb-3">
                                                    <label class="form-label" for="exampleFormControlInput15">Name</label>
                                                    <input class="form-control input-air-primary" id="" type="text" name="name" value="{{$user->name}}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="mb-3">
                                                    <label class="form-label" for="exampleFormControlInput15">Address</label>
                                                    <input class="form-control input-air-primary" id="" type="text" name="address" value="{{$user->address}}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="mb-3">
                                                    <label class="form-label" for="exampleFormControlInput15">Telephone</label>
                                                    <input class="form-control input-air-primary" id="" type="text" name="telephone" value="{{$user->telephone}}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer text-end">
                                        <button class="btn btn-primary btn-large" type="submit">Update</button>
                                    </div>
                                </form>
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
                            <p class="mb-0">Copyright 2021 © Cuba theme by pixelstrap </p>
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
    <script src="../../userAssets/assets/js/tooltip-init.js"></script>
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="../../userAssets/assets/js/script.js"></script>
    <!-- login js-->
    <!-- Plugin used-->
</body>
</html>
