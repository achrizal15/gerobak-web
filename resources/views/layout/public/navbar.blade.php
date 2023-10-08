<nav class="navbar navbar-area navbar-area-2 navbar-expand-lg">
    <div class="container nav-container">
        <div class="responsive-mobile-menu">
            <button class="menu toggle-btn d-block d-lg-none" data-target="#itech_main_menu" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="icon-left"></span>
                <span class="icon-right"></span>
            </button>
        </div>
        <div class="logo">
            <a href="index.html"><img src="{{ asset('dist/public') }}/assets/img/logo.png" alt="img"></a>
        </div>
        <div class="nav-right-part nav-right-part-mobile">
            <a class="search-bar-btn" href="#">
                <i class="fa fa-search"></i>
            </a>
        </div>
        <div class="collapse navbar-collapse" id="itech_main_menu">
            <ul class="navbar-nav menu-open text-lg-center ps-lg-5">
                <li><a href="/#home">@lang('public.navbar.home')</a></li>
                <li><a href="/#about-area">@lang('public.navbar.about_us')</a></li>
                <li><a href="/#about-area">@lang('public.navbar.our_service')</a></li>
            </ul>
        </div>
        <div class="nav-right-part nav-right-part-desktop align-self-center">
            <a class="btn btn-border-base" href="about.html">Lihat Lebih Banyak <i class="fa fa-plus"></i></a>
        </div>
    </div>
</nav>
