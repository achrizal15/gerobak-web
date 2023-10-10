    <!-- page title start -->
    <div id="home" class="banner-area bg-relative banner-area-2 bg-cover"
        style="background-image: url('{{ asset('dist/public') }}/assets/img/bg/8.png');">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 align-self-center">
                    <div class="banner-inner pe-xl-5">
                        <h1 class="title wow animated fadeInLeft" data-wow-duration="1.5s" data-wow-delay="0.4s">
                            {!! __('public.banner.title') !!}</h1>
                        <p class="content pe-xl-5 wow animated fadeInLeft" data-wow-duration="1.5s"
                            data-wow-delay="0.5s">
                            @lang('public.banner.detail')</p>
                        <a class="btn btn-border-base wow animated fadeInLeft" data-wow-duration="1.5s"
                            data-wow-delay="0.6s" href="{{ asset('dist/public') }}/about.html">@lang('public.banner.contact_us')</a>
                        {{-- <div class="d-inline-block align-self-center wow animated fadeInLeft" data-wow-duration="1.5s"
                            data-wow-delay="0.7s">
                            <a class="video-play-btn-hover" href="https://www.youtube.com/embed/Wimkqo8gDZ0"><img
                                    src="{{ asset('dist/public') }}/assets/img/video.svg" alt="img">
                                <h6 class="d-inline-block">@lang('public.banner.how_to_order')</h6>
                            </a>
                        </div> --}}
                    </div>
                </div>
                <div class="col-lg-6 col-md-9 wow animated fadeInRight" data-wow-duration="1.5s" data-wow-delay="0.3s">
                    <div class="banner-thumb-2 mt-4 mt-lg-0">
                        <img class="banner-animate-img banner-animate-img-4"
                            src="{{ asset('dist/public') }}/assets/img/banner-2/3.png" alt="img">
                        <div class="main-img-wrap">
                            <img class="banner-animate-img banner-animate-img-1 left_image_bounce"
                                src="{{ asset('dist/public') }}/assets/img/banner-2/4.png" alt="img">
                            <img class="banner-animate-img banner-animate-img-2 left_image_bounce"
                                src="{{ asset('dist/public') }}/assets/img/banner-2/5.png" alt="img">
                            <img class="banner-animate-img banner-animate-img-3 top_image_bounce"
                                src="{{ asset('dist/public') }}/assets/img/banner-2/2.png" alt="img">
                            <img class="main-img" src="{{ asset('dist/public') }}/assets/img/banner-2/1.png"
                                alt="img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- banner end -->
