<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <link rel="apple-touch-icon" href="{{{ URL::asset('img/logo_plane_color.png') }}}">
    <link rel="icon" href="{{{ URL::asset('img/logo_plane_color.png') }}}">
    <title>SIAC</title>

    <!-- Styles -->
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    
    <link rel="stylesheet" href="{{{ URL::asset('css/material-dashboard.css') }}}">
</head>
<body>
    <div id="app">
            <nav class="navbar navbar-expand-lg bg-warning navbar-absolute" color-on-scroll="500">
                <div class="container">
                <div class="navbar-wrapper">
                        <a class="navbar-brand" href="#pablo"><img style="margin-top:-5px" height="45"  src="{{{ URL::asset('img/logo_nav.png') }}}"></img></a>
                    </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="navbar-toggler-icon icon-bar"></span>
                  <span class="navbar-toggler-icon icon-bar"></span>
                  <span class="navbar-toggler-icon icon-bar"></span>
                </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navbar">
                        <ul class="navbar-nav">
                            <!--<li class="nav-item">
                                <a href="../dashboard.html" class="nav-link">
                                    <i class="material-icons">dashboard</i>
                                    Dashboard
                                </a>
                            </li>
                            <li class="nav-item  active ">
                                <a href="register.html" class="nav-link">
                                    <i class="material-icons">person_add</i>
                                    Register
                                </a>
                            </li>-->
                            <li class="nav-item ">
                                <a href="/" class="nav-link">
                                    <i class="material-icons">fingerprint</i>
                                    Login
                                </a>
                            </li>
            
                            <!--<li class="nav-item ">
                                <a href="lock.html" class="nav-link">
                                    <i class="material-icons">lock_open</i>
                                    Lock
                                </a>
                            </li>-->
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="wrapper wrapper-full-page">
                <div class="page-header register-page header-filter" filter-color="black" style=" background-size: cover; background-position: top center;">
                    @yield('content')
                </div>
            </div>
    </div>

    <!-- Scripts -->
    <!--   Core JS Files   -->
    <script src="{{{ URL::asset('js/core/jquery.min.js') }}}"></script>
    <script src="{{{ URL::asset('js/core/popper.min.js') }}}"></script>
    <script src="{{{ URL::asset('js/bootstrap-material-design.js') }}}"></script>
    <script src="{{{ URL::asset('js/plugins/perfect-scrollbar.jquery.min.js') }}}"></script>

    <!--  Charts Plugin, full documentation here: https://gionkunz.github.io/chartist-js/ -->
    <script src="{{{ URL::asset('js/plugins/chartist.min.js') }}}"></script>

    <!-- Library for adding dinamically elements -->
    <script src="{{{ URL::asset('js/plugins/arrive.min.js') }}}" type="text/javascript"></script>

    <!--  Notifications Plugin, full documentation here: http://bootstrap-notify.remabledesigns.com/    -->
    <script src="{{{ URL::asset('js/plugins/bootstrap-notify.js') }}}"></script>

    <script src="{{{ URL::asset('js/material-dashboard.js') }}}"></script>
</body>
</html>
