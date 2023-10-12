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
            <a href="/"><img src="{{ Vite::asset('resources/images/logo/logo.webp') }}" width="200px"
                    height="50px" alt="img"></a>
        </div>
        <div class="collapse navbar-collapse" id="itech_main_menu">
            <ul class="navbar-nav menu-open text-lg-center ps-lg-5">
                <li><a href="/#home">@lang('public.navbar.home')</a></li>
                <li><a href="/#what-you-get-area">@lang('public.navbar.what_you_get')</a></li>
                <li><a href="/#business-lines-area">@lang('public.navbar.business_lines')</a></li>
                <li><a href="/#price-list-area">@lang('public.navbar.price_list')</a></li>
                <li><a href="/#our-friend-area">@lang('public.navbar.our_friend')</a></li>
                <li><a href="/#how-we-work-area">@lang('public.navbar.how_we_work')</a></li>
            </ul>
        </div>
    </div>
</nav>
