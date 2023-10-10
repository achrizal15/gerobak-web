<!-- about area start -->
<div class="about-area pd-top-120 pd-bottom-120" id="what-you-get-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mb-4 mb-lg-0 wow animated fadeInLeft" data-wow-duration="1.5s" data-wow-delay="0.3s">
                <div class="about-thumb-inner">
                    <img class="main-img" src="{{ asset('dist/public') }}/assets/img/about/10.png" alt="img">
                </div>
            </div>
            <div class="col-lg-6 wow animated fadeInRight" data-wow-duration="1.5s" data-wow-delay="0.3s">
                <div class="section-title mb-0">
                    <h6 class="sub-title">@lang('public.what_you_get.subtitle')</h6>
                    <h2 class="title">@lang('public.what_you_get.title')</h2>
                    <p class="content mb-4">@lang('public.what_you_get.detail')</p>
                    <div class="row">
                        <div class="col-md-6">
                            <ul class="single-list-inner style-check style-heading style-check mb-2">
                                @for ($i = 0; $i < 3; $i++)
                                    <li><i class="fas fa-check-circle"></i>@lang('public.what_you_get.feature.' . $i)</li>
                                @endfor
                            </ul>
                        </div>

                        <div class="col-md-6">
                            <ul class="single-list-inner style-check style-heading style-check mb-2">
                                @for ($i = 3; $i < 6; $i++)
                                    <li><i class="fas fa-check-circle"></i>@lang('public.what_you_get.feature.' . $i)</li>
                                @endfor
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
