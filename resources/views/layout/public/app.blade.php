<!DOCTYPE html>
<html lang="id_ID">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gerobak Web</title>
    <link rel=icon href="{{ asset('dist/public') }}/assets/img/favicon.png" sizes="20x20" type="image/png">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="{{ asset('dist/public') }}/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('dist/public') }}/assets/css/animate.min.css">
    <link rel="stylesheet" href="{{ asset('dist/public') }}/assets/css/fontawesome.min.css">
    <link rel="stylesheet" href="{{ asset('dist/public') }}/assets/css/nice-select.min.css">
    <link rel="stylesheet" href="{{ asset('dist/public') }}/assets/css/magnific.min.css">
    <link rel="stylesheet" href="{{ asset('dist/public') }}/assets/css/slick.min.css">
    <link rel="stylesheet" href="{{ asset('dist/public') }}/assets/css/owl.min.css">
    <link rel="stylesheet" href="{{ asset('dist/public') }}/assets/css/style.css">
    <link rel="stylesheet" href="{{ asset('dist/public') }}/assets/css/responsive.css">
    @yield('styles')
</head>

<body>

    <!-- search popup end-->
    <div class="body-overlay" id="body-overlay"></div>

    <!-- navbar start -->
    @include('layout.public.navbar')
    <!-- navbar end -->
    @yield('content')

    @include('layout.public.footer')

    <!-- back to top area start -->
    <div class="back-to-top">
        <span class="back-top"><i class="fa fa-angle-up"></i></span>
    </div>
    <!-- back to top area end -->


    <!-- all plugins here -->
    <script src="{{ asset('dist/public') }}/assets/js/jquery.min.js"></script>
    <script src="{{ asset('dist/public') }}/assets/js/bootstrap.min.js"></script>
    <script src="{{ asset('dist/public') }}/assets/js/fontawesome.min.js"></script>
    <script src="{{ asset('dist/public') }}/assets/js/magnific.min.js"></script>
    <script src="{{ asset('dist/public') }}/assets/js/nice-select.min.js"></script>
    <script src="{{ asset('dist/public') }}/assets/js/slick.min.js"></script>
    <script src="{{ asset('dist/public') }}/assets/js/owl.min.js"></script>
    <script src="{{ asset('dist/public') }}/assets/js/counter-up.min.js"></script>
    <script src="{{ asset('dist/public') }}/assets/js/waypoint.min.js"></script>
    <script src="{{ asset('dist/public') }}/assets/js/wow.min.js"></script>
    <script src="{{ asset('dist/public') }}/assets/js/main.js"></script>
    @vite('resources/js/app.js')
    @yield('js')
</body>

</html>
