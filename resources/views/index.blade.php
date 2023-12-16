<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Admin Dashboard</title>
        <!-- ================= Favicon ================== -->
        <!-- Standard -->
        <link rel="shortcut icon" href="http://placehold.it/64.png/000/fff">
        <!-- Retina iPad Touch Icon-->
        <link rel="apple-touch-icon" sizes="144x144" href="http://placehold.it/144.png/000/fff">
        <!-- Retina iPhone Touch Icon-->
        <link rel="apple-touch-icon" sizes="114x114" href="http://placehold.it/114.png/000/fff">
        <!-- Standard iPad Touch Icon-->
        <link rel="apple-touch-icon" sizes="72x72" href="http://placehold.it/72.png/000/fff">
        <!-- Standard iPhone Touch Icon-->
        <link rel="apple-touch-icon" sizes="57x57" href="http://placehold.it/57.png/000/fff">
        <!-- Styles -->
        <link href="admin/assets/css/lib/calendar2/semantic.ui.min.css" rel="stylesheet">
        <link href="admin/assets/css/lib/calendar2/pignose.calendar.min.css" rel="stylesheet">
        <link href="admin/assets/css/lib/chartist/chartist.min.css" rel="stylesheet">
        <link href="admin/assets/css/lib/font-awesome.min.css" rel="stylesheet">
        <link href="admin/assets/css/lib/themify-icons.css" rel="stylesheet">
        <link href="admin/assets/css/lib/owl.carousel.min.css" rel="stylesheet" />
        <link href="admin/assets/css/lib/owl.theme.default.min.css" rel="stylesheet" />
        <link href="admin/assets/css/lib/weather-icons.css" rel="stylesheet" />
        <link href="admin/assets/css/lib/menubar/sidebar.css" rel="stylesheet">
        <link href="admin/assets/css/lib/bootstrap.min.css" rel="stylesheet">
        <link href="admin/assets/css/lib/helper.css" rel="stylesheet">
        <link href="admin/assets/css/style.css" rel="stylesheet">
</head>
<body>
    
    @yield('content')
    
    <div class="sidebar sidebar-hide-to-small sidebar-shrink sidebar-gestures">
        <div class="nano">
            <div class="nano-content">
                <ul>
                    <div class="logo"><a href="index.html"><!-- <img src="assets/images/logo.png" alt="" /> --><span>Focus</span></a></div>
                    <li class="label">Main</li>
                    <li class="menu-item {{ Request::segment(1)=='/dashboard'?'active':'' }}"><a href="/dashboard" class="sidebar-sub-toggle"><i class="ti-home"></i> Dashboard <span class="badge badge-primary"></span></a>
                        <!-- <ul>
                            <li><a href="index.html">Dashboard 1</a></li>
                            <li><a href="index1.html">Dashboard 2</a></li>
                        </ul> -->
                    </li>
    
                    <li class="label">Apps</li>
                    <li class="{{ Request::segment(1) == '/dashboard' ? 'active':'' }}"><a href="app-event-calender.html"><i class="ti-calendar"></i> Calender </a></li>
                    <li class="{{ Request::segment(1) == '/dashboard' ? 'active':'' }}"><a href="app-profile.html"><i class="ti-user"></i> Profile</a></li>
                    <li class="{{ Request::segment(1) == '/dashboard' ? 'active':'' }}"><a class="sidebar-sub-toggle"><i class="ti-layout-grid4-alt"></i> Table <span class="sidebar-collapse-icon ti-angle-down"></span></a>
                        <ul>
                            <li><a href="/perusahaan">Perusahaan</a></li>
                            <li><a href="/alumni">Alumni</a></li>
                            <li><a href="/lowongan">Lowongan</a></li>
                            <li><a href="/lamaran">Lamaran</a></li>
                        </ul>
                    </li>
                    <li class="{{ Request::segment(1) == '/dashboard' ? 'active':'' }}"><a class="sidebar-sub-toggle"><i class="ti-target"></i> Pages <span class="sidebar-collapse-icon ti-angle-down"></span></a>
                        <ul>
                            <li><a href="page-login.html">Login</a></li>
                            <li><a href="page-register.html">Register</a></li>
                            <li><a href="page-reset-password.html">Forgot password</a></li>
                        </ul>
                    </li>
                    <li class="{{ Request::segment(1) == '/dashboard' ? 'active':'' }}"><a><i class="ti-close"></i> Logout</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- /# sidebar -->
    <!-- jquery vendor -->
    <script src="admin/assets/js/lib/jquery.min.js"></script>
        <script src="admin/assets/js/lib/jquery.nanoscroller.min.js"></script>
        <!-- nano scroller -->
        <script src="admin/assets/js/lib/menubar/sidebar.js"></script>
        <script src="admin/assets/js/lib/preloader/pace.min.js"></script>
        <!-- sidebar -->

        <!-- bootstrap -->

        <script src="admin/assets/js/lib/calendar-2/moment.latest.min.js"></script>
        <!-- scripit init-->
        <script src="admin/assets/js/lib/calendar-2/semantic.ui.min.js"></script>
        <!-- scripit init-->
        <script src="admin/assets/js/lib/calendar-2/prism.min.js"></script>
        <!-- scripit init-->
        <script src="admin/assets/js/lib/calendar-2/pignose.calendar.min.js"></script>
        <!-- scripit init-->
        <script src="admin/assets/js/lib/calendar-2/pignose.init.js"></script>
        <!-- scripit init-->


        <script src="admin/assets/js/lib/weather/jquery.simpleWeather.min.js"></script>
        <script src="admin/assets/js/lib/weather/weather-init.js"></script>
        <script src="admin/assets/js/lib/circle-progress/circle-progress.min.js"></script>
        <script src="admin/assets/js/lib/circle-progress/circle-progress-init.js"></script>
        <script src="admin/assets/js/lib/chartist/chartist.min.js"></script>
        <script src="admin/assets/js/lib/chartist/chartist-init.js"></script>
        <script src="admin/assets/js/lib/sparklinechart/jquery.sparkline.min.js"></script>
        <script src="admin/assets/js/lib/sparklinechart/sparkline.init.js"></script>
        <script src="admin/assets/js/lib/owl-carousel/owl.carousel.min.js"></script>
        <script src="admin/assets/js/lib/owl-carousel/owl.carousel-init.js"></script>
        <script src="admin/assets/js/scripts.js"></script>
        <!-- scripit init-->
</body>
</html>