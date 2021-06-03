<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
    <meta name="author" content="Creative Tim">
    <title>AP Salud</title>
    <!-- Favicon -->
    <link rel="icon" type="image/vnd.microsoft.icon" href="{{asset('dists/assets/img/logo.ico')}}">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <!-- Icons -->
    <link href="{{asset('dists/assets/vendor/nucleo/css/nucleo.css')}}" rel="stylesheet">
    <link href="{{asset('dists/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css')}}" rel="stylesheet">
    <!-- Argon CSS -->
    <link type="text/css" href="{{asset('dists/assets/css/argon.css?v=1.0.0')}}" rel="stylesheet">
    @yield('css')

</head>

<body>
    <!-- Sidenav -->
    <nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
        <div class="container-fluid">
            <!-- Toggler -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Brand -->
            <a class="navbar-brand pt-0" href="{{route('home')}}">
                <img src="{{asset('dists/assets/img/brand/Sin título-1.png')}}">
            </a>
            <!-- User -->
            <ul class="nav align-items-center d-md-none">

                <li class="nav-item dropdown">
                    <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="media align-items-center">

                            <span class="mb-0 text-sm  font-weight-bold">{{Auth::user()->name}}</span>

                        </div>
                    </a>
                    @include('includes.dropmenu')
                </li>
            </ul>
            <!-- Collapse -->
            <div class="collapse navbar-collapse" id="sidenav-collapse-main">
                <!-- Collapse header -->
                <div class="navbar-collapse-header d-md-none">
                    <div class="row">
                        <div class="col-6 collapse-brand">
                            <a href="./index.html">
                                <img src="{{asset('dists/assets/img/brand/Sin título-1.png')}}">
                            </a>
                        </div>
                        <div class="col-6 collapse-close">
                            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                                <span></span>
                                <span></span>
                            </button>
                        </div>
                    </div>
                </div>
                @include('includes.menu')

            </div>
        </div>
    </nav>
    <!-- Main content -->
    <div class="main-content">
        <!-- Top navbar -->
        <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
            <div class="container-fluid">
                <!-- Brand -->
                <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block" href="./index.html"></a>


                <!-- User -->
                <ul class="navbar-nav align-items-center d-none d-md-flex">
                    <li class="nav-item dropdown">
                        <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <div class="media align-items-center">

                                <div class="media-body ml-2 d-none d-lg-block">
                                    <span class="mb-0 text-sm  font-weight-bold">{{Auth::user()->name}}</span>
                                </div>
                            </div>
                        </a>
                        @include('includes.dropmenu')

                    </li>
                </ul>
            </div>
        </nav>
        <!-- Header -->
        <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
            <div class="container-fluid">
                <div class="header-body">
                    <!-- Card stats -->

                </div>
            </div>
        </div>
        <!-- Page content -->
        <div class="container-fluid mt--7">
            @yield('content')

            <!-- Footer -->
            <footer class="footer">
                <div class="row align-items-center justify-content-xl-between">
                    <div class="col-xl-6">
                        <div class="copyright text-center text-xl-left text-muted">
                            &copy; 2021 <a href="/" class="font-weight-bold ml-1">{{config('app.name')}}</a>
                        </div>
                    </div>

                </div>
            </footer>
        </div>
    </div>
    <!-- Argon Scripts -->

    <!-- Core -->
    <script src="{{asset('dists/assets/vendor/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{asset('dists/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
    @yield('js')
    <!-- Argon JS -->
    <script src="{{asset('dists/assets/js/argon.js?v=1.0.0')}}"></script>




</body>

</html>
