<!DOCTYPE html>
<html lang="id_ID">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GerobakWeb</title>
    <meta name="description"
        content="GerobakWeb - Solusi Website untuk Bisnis Anda. Kami menyediakan layanan pembuatan website yang modern dan terjangkau.">
    <meta name="keywords" content="GerobakWeb, website, bisnis, solusi, umkm,exmpor,impor,pembuatan website">
    <meta name="author" content="GerobakWeb">

    <!-- OG Meta Tags -->
    <meta property="og:title" content="GerobakWeb - Solusi Website untuk UMKM Indonesia">
    <meta property="og:description"
        content="GerobakWeb - Solusi Website untuk Bisnis Anda. Kami menyediakan layanan pembuatan website yang modern dan terjangkau.">
    <meta property="og:image" content="{{ Vite::asset('resources/images/logo/logo.webp') }}">
    <meta property="og:url" content="https://gerobakweb.com/">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="GerobakWeb">

    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="{{ Vite::asset('resources/images/logo/logo.webp') }}">
    <meta name="twitter:title" content="GerobakWeb - Solusi Website untuk Bisnis Anda">
    <meta name="twitter:description"
        content="GerobakWeb - Solusi Website untuk Bisnis Anda. Kami menyediakan layanan pembuatan website yang modern dan terjangkau.">
    <meta name="twitter:image" content="{{ Vite::asset('resources/images/logo/logo.webp') }}">
    <meta name="twitter:url" content="{{ Vite::asset('resources/images/logo/logo.webp') }}">
    <meta name="twitter:site" content="@gerobakweb">
    <link rel=icon href="{{ Vite::asset('resources/images/logo/ico.webp') }}" sizes="32x32" type="image/png">

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

    @include('layout.public.navbar')
    <!-- navbar end -->
    @yield('content')

    @include('layout.public.footer')

    <!-- back to top area start -->
    <div class="back-to-top">
        <span class="back-top"><i class="fa fa-angle-up"></i></span>
    </div>
    <div class="fixed-bottom p-3 right-0 translate-middle">
        <span><i class="fab fa-whatsapp"></i></span>
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
