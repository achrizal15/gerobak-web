  <!-- service area start -->
  <div class="service-area bg-gray bg-relative pd-top-120 pd-bottom-90" id="business-lines-area">
      <div class="container">
          <div class="row justify-content-center">
              <div class="col-lg-6">
                  <div class="section-title text-center">
                      <h6 class="sub-title">@lang('public.business_lines.subtitle')</h6>
                      <h2 class="title">{!! __('public.business_lines.title') !!}</h2>
                      <p class="content">{!! __('public.business_lines.detail') !!}</p>
                  </div>
              </div>
          </div>
          <div class="row ">
              @foreach ($business_lines as $item)
                  <div class="col-lg-4 col-md-6">
                      <div class="single-service-inner-2 text-center">
                          <div class="thumb">
                              <img height="300px" width="100%" style="object-fit: contain"
                                  src="{{ $item['thumbnail'] }}" alt="img">
                          </div>
                          <div class="details">
                              <div class="icon mb-3">
                                  <img src="{{ $item['icon'] }}" alt="img">
                              </div>
                              <h5><a href="service-details.html">{{ $item['title'] }}</a></h5>
                              <p>{{ $item['detail'] }} </p>
                          </div>
                      </div>
                  </div>
              @endforeach
          </div>
          <div class="text-center">
              <button class="btn btn-primary">
                  <span>
                      Lebih Banyak Lagi
                  </span>
                  <i class="fas fa-arrow-right"></i>
              </button>
          </div>
      </div>
  </div>
  <!-- service area end -->
