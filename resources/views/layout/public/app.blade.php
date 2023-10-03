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

</head>

<body>

    <!-- preloader area start -->
    <div class="preloader" id="preloader">
        <div class="preloader-inner">
            <div class="spinner">
                <div class="dot1"></div>
                <div class="dot2"></div>
            </div>
        </div>
    </div>
    <!-- preloader area end -->

    <!-- search popup start-->
    <div class="td-search-popup" id="td-search-popup">
        <form action="index.html" class="search-form">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Search.....">
            </div>
            <button type="submit" class="submit-btn"><i class="fa fa-search"></i></button>
        </form>
    </div>
    <!-- search popup end-->
    <div class="body-overlay" id="body-overlay"></div>

    <!-- navbar start -->
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
                    <li class="menu-item-has-children">
                        <a href="#">Home</a>
                        <ul class="sub-menu">
                            <li><a href="index-1.html">IT / Softwer Agency</a></li>
                            <li><a href="index-2.html">SaaS App Landing</a></li>
                            <li><a href="index-3.html">Payments Solution</a></li>
                            <li><a href="index-4.html">Startup / Software Company</a></li>
                            <li><a href="index-5.html">Artificial Intelligence</a></li>
                            <li><a href="index-6.html">NFT Service</a></li>
                            <li><a href="index-7.html">Cyber Security</a></li>
                            <li><a href="index-8.html">Hardware Service</a></li>
                            <li><a href="index-9.html">ICO Landing</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="#">Service</a>
                        <ul class="sub-menu">
                            <li><a href="service.html">Service 01</a></li>
                            <li><a href="service-2.html">Service 02</a></li>
                            <li><a href="service-3.html">Service 03</a></li>
                            <li><a href="service-4.html">Service 04</a></li>
                            <li><a href="service-5.html">Service 05</a></li>
                            <li><a href="service-details.html">Service Single</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="#">Pages</a>
                        <ul class="sub-menu">
                            <li><a href="about.html">About Us</a></li>
                            <li><a href="team.html">Team 01</a></li>
                            <li><a href="team-2.html">Team 02</a></li>
                            <li><a href="team-3.html">Team 03</a></li>
                            <li><a href="team-details.html">Team Details</a></li>
                            <li><a href="pricing.html">Pricing 01</a></li>
                            <li><a href="pricing-2.html">Pricing 02</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children mega-menu">
                        <a href="#">Mega Menu</a>
                        <div class="sub-menu">
                            <div class="row">
                                <div class="col-lg-3">
                                    <ul>
                                        <li><a href="index-1.html">IT / Softwer Agency</a></li>
                                        <li><a href="index-2.html">SaaS App Landing</a></li>
                                        <li><a href="index-3.html">Payments Solution</a></li>
                                        <li><a href="index-4.html">Startup / Software Company</a></li>
                                        <li><a href="index-5.html">Artificial Intelligence</a></li>
                                        <li><a href="index-6.html">NFT Service</a></li>
                                        <li><a href="index-7.html">Cyber Security</a></li>
                                        <li><a href="index-8.html">Hardware Service</a></li>
                                        <li><a href="index-9.html">ICO Landing</a></li>
                                    </ul>
                                </div>
                                <div class="col-lg-3">
                                    <ul>
                                        <li><a href="service.html">Service 01</a></li>
                                        <li><a href="service-2.html">Service 02</a></li>
                                        <li><a href="service-3.html">Service 03</a></li>
                                        <li><a href="service-4.html">Service 04</a></li>
                                        <li><a href="service-5.html">Service 05</a></li>
                                        <li><a href="service-details.html">Service Single</a></li>
                                    </ul>
                                </div>
                                <div class="col-lg-3">
                                    <ul>
                                        <li><a href="project.html">Project 01</a></li>
                                        <li><a href="project-2.html">Project 02</a></li>
                                        <li><a href="project-3.html">Project 03</a></li>
                                        <li><a href="project-details.html">Case Study Details</a></li>
                                        <li><a href="pricing.html">Pricing 01</a></li>
                                        <li><a href="pricing-2.html">Pricing 02</a></li>
                                    </ul>
                                </div>
                                <div class="col-lg-3">
                                    <ul>
                                        <li><a href="about.html">About Us</a></li>
                                        <li><a href="team.html">Team 01</a></li>
                                        <li><a href="team-2.html">Team 02</a></li>
                                        <li><a href="team-3.html">Team 03</a></li>
                                        <li><a href="team-details.html">Team Details</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="#">Blog</a>
                        <ul class="sub-menu">
                            <li><a href="blog.html">Blog 01</a></li>
                            <li><a href="blog-2.html">Blog 02</a></li>
                            <li><a href="blog-3.html">Blog 03</a></li>
                            <li><a href="blog-4.html">Blog 04</a></li>
                            <li><a href="blog-details.html">Blog Details</a></li>
                        </ul>
                    </li>
                    <li><a href="contact.html">Contact Us</a></li>
                </ul>
            </div>
            <div class="nav-right-part nav-right-part-desktop align-self-center">
                <a class="btn btn-border-base" href="about.html">Discover More <i class="fa fa-plus"></i></a>
            </div>
        </div>
    </nav>
    <!-- navbar end -->

    <!-- page title start -->
    <div class="banner-area bg-relative banner-area-2 bg-cover"
        style="background-image: url('{{ asset('dist/public') }}/assets/img/bg/8.png');">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 align-self-center">
                    <div class="banner-inner pe-xl-5">
                        <h6 class="subtitle wow animated fadeInLeft" data-wow-duration="1.5s" data-wow-delay="0.3s">
                            Designing for the future</h6>
                        <h2 class="title wow animated fadeInLeft" data-wow-duration="1.5s" data-wow-delay="0.4s">
                            Revolutionize Your <span>Workflow</span> With SaaS</h2>
                        <p class="content pe-xl-5 wow animated fadeInLeft" data-wow-duration="1.5s"
                            data-wow-delay="0.5s">And In Order To Make A Business, Brand Advertising And Marketing
                            Plays An Important Role. Similarly, In Making Cultivation Business Are Necessary.</p>
                        <a class="btn btn-border-base wow animated fadeInLeft" data-wow-duration="1.5s"
                            data-wow-delay="0.6s" href="about.html">Discover More <i class="fa fa-plus"></i></a>
                        <div class="d-inline-block align-self-center wow animated fadeInLeft" data-wow-duration="1.5s"
                            data-wow-delay="0.7s">
                            <a class="video-play-btn-hover" href="https://www.youtube.com/embed/Wimkqo8gDZ0"><img
                                    src="{{ asset('dist/public') }}/assets/img/video.svg" alt="img">
                                <h6 class="d-inline-block">how we work</h6>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-9 wow animated fadeInRight" data-wow-duration="1.5s"
                    data-wow-delay="0.3s">
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

    <!-- about area start -->
    <div class="about-area pd-top-120 pd-bottom-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-4 mb-lg-0 wow animated fadeInLeft" data-wow-duration="1.5s"
                    data-wow-delay="0.3s">
                    <div class="about-thumb-inner">
                        <img class="main-img" src="{{ asset('dist/public') }}/assets/img/about/10.png"
                            alt="img">
                    </div>
                </div>
                <div class="col-lg-6 wow animated fadeInRight" data-wow-duration="1.5s" data-wow-delay="0.3s">
                    <div class="section-title mb-0">
                        <h6 class="sub-title">ABOUT US</h6>
                        <h2 class="title">Empowering businesses with SaaS technology</h2>
                        <p class="content mb-4">You can access SaaS applications through a web browser or mobile app,
                            as long as you have an internet connection.</p>
                        <div class="row">
                            <div class="col-md-6">
                                <ul class="single-list-inner style-check style-heading style-check mb-3">
                                    <li><i class="fas fa-check-circle"></i> Mistakes To Avoid to the</li>
                                    <li><i class="fas fa-check-circle"></i> Your Startup industry stan</li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <ul class="single-list-inner style-check style-heading style-check mb-3">
                                    <li><i class="fas fa-check-circle"></i> Mistakes To Avoid to the</li>
                                    <li><i class="fas fa-check-circle"></i> Your Startup industry stan</li>
                                </ul>
                            </div>
                        </div>
                        <p class="content">SaaS providers typically invest heavily in security measures to protect
                            customer data, such as encryption and multi-factor authentication. However, it is important
                            to research and choose a reputable provider and also to ensure that</p>
                        <a class="btn btn-border-base" href="about.html">Discover More <i class="fa fa-plus"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- about area end -->

    <!-- service area start -->
    <div class="service-area bg-gray bg-relative pd-top-120 pd-bottom-90">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title text-center">
                        <h6 class="sub-title">ADVANCED SERVICES</h6>
                        <h2 class="title">Optimize Your <span>Performance</span> With Saas</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-service-inner-2 text-center">
                        <div class="thumb">
                            <img src="{{ asset('dist/public') }}/assets/img/service/4.png" alt="img">
                        </div>
                        <div class="details">
                            <div class="icon mb-3">
                                <img src="{{ asset('dist/public') }}/assets/img/service/8.png" alt="img">
                            </div>
                            <h5><a href="service-details.html">CloudCRM</a></h5>
                            <p>SaaS stands for Software as a Service. It is a software</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-service-inner-2 text-center">
                        <div class="thumb">
                            <img src="{{ asset('dist/public') }}/assets/img/service/5.png" alt="img">
                        </div>
                        <div class="details">
                            <div class="icon mb-3">
                                <img src="{{ asset('dist/public') }}/assets/img/service/9.png" alt="img">
                            </div>
                            <h5><a href="service-details.html">CloudCRM</a></h5>
                            <p>SaaS stands for Software as a Service. It is a software</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-service-inner-2 text-center">
                        <div class="thumb">
                            <img src="{{ asset('dist/public') }}/assets/img/service/6.png" alt="img">
                        </div>
                        <div class="details">
                            <div class="icon mb-3">
                                <img src="{{ asset('dist/public') }}/assets/img/service/10.png" alt="img">
                            </div>
                            <h5><a href="service-details.html">CloudCRM</a></h5>
                            <p>SaaS stands for Software as a Service. It is a software</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- service area end -->

    <!-- pricing-area start -->
    <div class="pricing-area pd-top-120 pd-bottom-90">
        <div class="container">
            <div class="section-title text-center">
                <h6 class="sub-title">Pricing plan</h6>
                <h2 class="title">Best plane to get our <span>Services</span></h2>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-pricing-inner">
                        <div class="price-header text-center mb-lg-4">
                            <h5>Started</h5>
                            <h2 class="mb-3">$19 <sub>/mo</sub></h2>
                        </div>
                        <ul>
                            <li><i class="fa fa-check"></i>Mobile App Development</li>
                            <li><i class="fa fa-check"></i>Branding & Identity</li>
                            <li><i class="fa fa-check"></i>Email Marketing & Automation</li>
                            <li><i class="fa fa-check"></i>E-commerce Solutions</li>
                            <li class="hide"><i class="fa fa-check"></i>Social Media Management</li>
                            <li class="hide"><i class="fa fa-check"></i>Video & Animation Production </li>
                        </ul>
                        <a class="btn btn-border-gray border-radius-0 w-100" href="#">Started</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-pricing-inner price-active">
                        <div class="price-header text-center mb-lg-4">
                            <h5>Professional</h5>
                            <h2 class="mb-3">$29 <sub>/mo</sub></h2>
                        </div>
                        <ul>
                            <li><i class="fa fa-check"></i>Mobile App Development</li>
                            <li><i class="fa fa-check"></i>Branding & Identity</li>
                            <li><i class="fa fa-check"></i>Email Marketing & Automation</li>
                            <li><i class="fa fa-check"></i>E-commerce Solutions</li>
                            <li class="hide"><i class="fa fa-check"></i>Social Media Management</li>
                            <li class="hide"><i class="fa fa-check"></i>Video & Animation Production </li>
                        </ul>
                        <a class="btn btn-border-gray border-radius-0 w-100" href="#">Started</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-pricing-inner">
                        <div class="price-header text-center mb-lg-4">
                            <h5>Enterprise</h5>
                            <h2 class="mb-3">$39 <sub>/mo</sub></h2>
                        </div>
                        <ul>
                            <li><i class="fa fa-check"></i>Mobile App Development</li>
                            <li><i class="fa fa-check"></i>Branding & Identity</li>
                            <li><i class="fa fa-check"></i>Email Marketing & Automation</li>
                            <li><i class="fa fa-check"></i>E-commerce Solutions</li>
                            <li class="hide"><i class="fa fa-check"></i>Social Media Management</li>
                            <li class="hide"><i class="fa fa-check"></i>Video & Animation Production </li>
                        </ul>
                        <a class="btn btn-border-gray border-radius-0 w-100" href="#">Started</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- pricing-area start -->

    <!-- counter area start -->
    <div class="counter-area bg-relative bg-cover pd-top-110 pd-bottom-100"
        style="background-image: url('{{ asset('dist/public') }}/assets/img/bg/10.png');">
        <div class="container pd-bottom-90">
            <div class="row">
                <div class="col-lg-3 col-md-6 wow animated fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.1s">
                    <div class="single-counter-inner media">
                        <div class="thumb media-left pe-4">
                            <img src="{{ asset('dist/public') }}/assets/img/icon/16.svg" alt="img">
                        </div>
                        <div class="media-body">
                            <h4 class="mb-1"><span class="counter">200</span>+</h4>
                            <p class="mb-0">Team member</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow animated fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.2s">
                    <div class="single-counter-inner media">
                        <div class="thumb media-left pe-4">
                            <img src="{{ asset('dist/public') }}/assets/img/icon/17.svg" alt="img">
                        </div>
                        <div class="media-body">
                            <h4 class="mb-1"><span class="counter">10</span>k+</h4>
                            <p class="mb-0">Team member</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow animated fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.3s">
                    <div class="single-counter-inner media">
                        <div class="thumb media-left pe-4">
                            <img src="{{ asset('dist/public') }}/assets/img/icon/18.svg" alt="img">
                        </div>
                        <div class="media-body">
                            <h4 class="mb-1"><span class="counter">200</span>+</h4>
                            <p class="mb-0">Team member</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow animated fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.4s">
                    <div class="single-counter-inner media">
                        <div class="thumb media-left pe-4">
                            <img src="{{ asset('dist/public') }}/assets/img/icon/19.svg" alt="img">
                        </div>
                        <div class="media-body">
                            <h4 class="mb-1"><span class="counter">200</span>+</h4>
                            <p class="mb-0">Team member</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- counter area end -->

    <!-- contact-inner-1 start -->
    <div class="contact-area">
        <div class="container">
            <div class="contact-inner-1">
                <div class="row">
                    <div class="col-lg-8 wow animated fadeInLeft" data-wow-duration="1.5s" data-wow-delay="0.3s">
                        <img class="w-100" src="{{ asset('dist/public') }}/assets/img/bg/9.png" alt="img">
                    </div>
                    <div class="col-lg-4 wow animated fadeInRight" data-wow-duration="1.5s" data-wow-delay="0.3s">
                        <div class="section-title mb-0">
                            <h6 class="sub-title">GET IN TOUCH</h6>
                            <h2 class="title">Performance with SaaS</h2>
                            <p class="content">For your car we will do everything advice design in us repairs and
                                maintenance. We are the some preferred.</p>
                            <div class="accordion accordion-inner style-3 accordion-icon-left mt-3"
                                id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseOne" aria-expanded="true"
                                            aria-controls="collapseOne">
                                            What services do you offer?
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show"
                                        aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            Many desktop publishing packages and web page editors now use Lorem Ipsum as
                                            their default model text, search for 'lorem ipsum' will uncover
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                            aria-expanded="false" aria-controls="collapseTwo">
                                            How long does it take for you to complete a project?
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse"
                                        aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            Many desktop publishing packages and web page editors now use Lorem Ipsum as
                                            their default model text, search for 'lorem ipsum' will uncover
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                            aria-expanded="false" aria-controls="collapseThree">
                                            How much does it cost to work with your agency?
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse"
                                        aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            Many desktop publishing packages and web page editors now use Lorem Ipsum as
                                            their default model text, search for 'lorem ipsum' will uncover
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- contact-inner-1 end -->

    <!-- work-process-area start -->
    <div class="work-process-area pd-top-120">
        <div class="container">
            <div class="section-title text-center pb-5">
                <h6 class="sub-title">OUR SIMPLE PROCESS</h6>
                <h2 class="title">World <span>Best Step</span> Our It Process</h2>
            </div>
            <div class="work-process-area-inner bg-gray border-radius-20">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="single-work-process-inner-2 text-center">
                            <div class="thumb mb-3">
                                <img src="{{ asset('dist/public') }}/assets/img/icon/20.svg" alt="img">
                                <p class="process-count">01</p>
                            </div>
                            <div class="details">
                                <h5 class="mb-3">Requirements</h5>
                                <p class="content">Research ipsum dolor sit consec tetur sed diam in the aliquam tempor
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="single-work-process-inner-2 text-center">
                            <div class="thumb mb-3">
                                <img src="{{ asset('dist/public') }}/assets/img/icon/21.svg" alt="img">
                                <p class="process-count">02</p>
                            </div>
                            <div class="details">
                                <h5 class="mb-3">planning</h5>
                                <p class="content">Create ipsum dolor sit consec tetur sed diam in the aliquam tempor
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="single-work-process-inner-2 text-center">
                            <div class="thumb mb-3">
                                <img src="{{ asset('dist/public') }}/assets/img/icon/22.svg" alt="img">
                                <p class="process-count">03</p>
                            </div>
                            <div class="details">
                                <h5 class="mb-3">Implementation</h5>
                                <p class="content">Develope ipsum dolor sit consec tetur sed diam in the aliquam tempor
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="single-work-process-inner-2 text-center">
                            <div class="thumb mb-3">
                                <img src="{{ asset('dist/public') }}/assets/img/icon/23.svg" alt="img">
                                <p class="process-count">04</p>
                            </div>
                            <div class="details">
                                <h5 class="mb-3">Maintenance</h5>
                                <p class="content">Shop ipsum dolor sit consec tetur Malesuada sed diam in the</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- work-process-area end -->

    <!-- testimonial-area start -->
    <div class="testimonial-area pd-top-120 pd-bottom-90"
        style="background-image: url('{{ asset('dist/public') }}/assets/img/bg/11.png');">
        <div class="container">
            <div class="section-title">
                <h6 class="sub-title">TESTIMONIAL</h6>
                <h2 class="title">Advanced Engine Services</h2>
            </div>
            <div
                class="testimonial-slider-1 owl-carousel slider-control-round slider-control-dots slider-control-right-top">
                <div class="item">
                    <div class="single-testimonial-inner style-1 text-center">
                        <h5>Devon Lane</h5>
                        <p class="designation mb-3">Marketing Coordinator</p>
                        <div class="icon mb-2">
                            <img src="{{ asset('dist/public') }}/assets/img/icon/25.png" alt="img">
                        </div>
                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of
                            classical Latin literature from 45 BC</p>
                        <div class="ratting-inner mt-4">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <div class="thumb">
                            <img src="{{ asset('dist/public') }}/assets/img/testimonial/1.png" alt="img">
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="single-testimonial-inner style-1 text-center">
                        <h5>Devon Lane</h5>
                        <p class="designation mb-3">Marketing Coordinator</p>
                        <div class="icon mb-2">
                            <img src="{{ asset('dist/public') }}/assets/img/icon/25.png" alt="img">
                        </div>
                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of
                            classical Latin literature from 45 BC</p>
                        <div class="ratting-inner mt-4">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <div class="thumb">
                            <img src="{{ asset('dist/public') }}/assets/img/testimonial/2.png" alt="img">
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="single-testimonial-inner style-1 text-center">
                        <h5>Devon Lane</h5>
                        <p class="designation mb-3">Marketing Coordinator</p>
                        <div class="icon mb-2">
                            <img src="{{ asset('dist/public') }}/assets/img/icon/25.png" alt="img">
                        </div>
                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of
                            classical Latin literature from 45 BC</p>
                        <div class="ratting-inner mt-4">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <div class="thumb">
                            <img src="{{ asset('dist/public') }}/assets/img/testimonial/3.png" alt="img">
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="single-testimonial-inner style-1 text-center">
                        <h5>Devon Lane</h5>
                        <p class="designation mb-3">Marketing Coordinator</p>
                        <div class="icon mb-2">
                            <img src="{{ asset('dist/public') }}/assets/img/icon/25.png" alt="img">
                        </div>
                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of
                            classical Latin literature from 45 BC</p>
                        <div class="ratting-inner mt-4">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <div class="thumb">
                            <img src="{{ asset('dist/public') }}/assets/img/testimonial/1.png" alt="img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- testimonial-area start -->

    <!-- blog-area start -->
    <div class="blog-area pd-top-120 pd-bottom-90">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title text-center">
                        <h6 class="sub-title">RECENT BLOG</h6>
                        <h2 class="title">Discover a World of Sustainable Alternatives</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-blog-list style-2">
                        <div class="thumb">
                            <img src="{{ asset('dist/public') }}/assets/img/blog/4.png" alt="img">
                        </div>
                        <div class="details">
                            <ul class="blog-meta">
                                <li class="date">15 MAY</li>
                                <li><i class="far fa-user"></i> By Admin</li>
                                <li><i class="far fa-folder-open"></i> Category</li>
                            </ul>
                            <h5 class="mb-3"><a href="blog-details.html">Transforming businesses, one pixel at a
                                    time</a></h5>
                            <a class="read-more-text" href="blog-details.html">Discover More <i
                                    class="fa fa-plus"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-blog-list style-2">
                        <div class="thumb">
                            <img src="{{ asset('dist/public') }}/assets/img/blog/5.png" alt="img">
                        </div>
                        <div class="details">
                            <ul class="blog-meta">
                                <li class="date">15 MAY</li>
                                <li><i class="far fa-user"></i> By Admin</li>
                                <li><i class="far fa-folder-open"></i> Category</li>
                            </ul>
                            <h5 class="mb-3"><a href="blog-details.html">The Importance of a Strong Digital for
                                    Strategy</a></h5>
                            <a class="read-more-text" href="blog-details.html">Discover More <i
                                    class="fa fa-plus"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-blog-list style-2">
                        <div class="thumb">
                            <img src="{{ asset('dist/public') }}/assets/img/blog/6.png" alt="img">
                        </div>
                        <div class="details">
                            <ul class="blog-meta">
                                <li class="date">15 MAY</li>
                                <li><i class="far fa-user"></i> By Admin</li>
                                <li><i class="far fa-folder-open"></i> Category</li>
                            </ul>
                            <h5 class="mb-3"><a href="blog-details.html">Creating Engaging Content: A Guide for
                                    Digital</a></h5>
                            <a class="read-more-text" href="blog-details.html">Discover More <i
                                    class="fa fa-plus"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- blog-area start -->

    <!-- footer area start -->
    <footer class="footer-area footer-area-2 bg-gray mt-0 pd-top-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="widget widget_about">
                        <div class="thumb">
                            <img src="{{ asset('dist/public') }}/assets/img/logo.png" alt="img">
                        </div>
                        <div class="details">
                            <p>Melbourne is simply is dumiomy is text Lorem Ipsum is simply</p>
                            <div class="subscribe mt-4">
                                <input type="text" placeholder="E-mail">
                                <button><i class="fas fa-chevron-right"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 ps-xl-5">
                    <div class="widget widget_nav_menu">
                        <h4 class="widget-title">Our Service</h4>
                        <ul>
                            <li><a href="service.html"><i class="fas fa-chevron-right"></i> Ui Design</a></li>
                            <li><a href="service.html"><i class="fas fa-chevron-right"></i> Web design</a></li>
                            <li><a href="service.html"><i class="fas fa-chevron-right"></i> Digital marketing </a>
                            </li>
                            <li><a href="service.html"><i class="fas fa-chevron-right"></i> Video Editing</a></li>
                            <li><a href="service.html"><i class="fas fa-chevron-right"></i> Pc Repairs</a></li>
                            <li><a href="service.html"><i class="fas fa-chevron-right"></i> Web Development</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 ps-xl-5">
                    <div class="widget widget_nav_menu">
                        <h4 class="widget-title">Pay links</h4>
                        <ul>
                            <li><a href="service.html"><i class="fas fa-chevron-right"></i> Credit industrys</a></li>
                            <li><a href="service.html"><i class="fas fa-chevron-right"></i> Reasearch sector</a></li>
                            <li><a href="service.html"><i class="fas fa-chevron-right"></i> Finance Sector </a></li>
                            <li><a href="service.html"><i class="fas fa-chevron-right"></i> Credit industrys</a></li>
                            <li><a href="service.html"><i class="fas fa-chevron-right"></i> Reasearch sector</a></li>
                            <li><a href="service.html"><i class="fas fa-chevron-right"></i> Finance Sector</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="widget widget-recent-post">
                        <h4 class="widget-title">Contact us</h4>
                        <div class="widget widget_contact">
                            <ul class="details">
                                <li><i class="fa fa-map-marker-alt"></i>4517 Washington Ave. Manchester, Kentucky 39495
                                </li>
                                <li class="mt-3"><i class="fa fa-phone-alt"></i> (+888) 123 456 765</li>
                                <li class="mt-2"><i class="fas fa-envelope"></i> infoname@mail.com</li>
                            </ul>
                            <ul class="social-media mt-4">
                                <li>
                                    <a href="#">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fab fa-youtube"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 align-self-center">
                        <p>© Yoursitename 2023 | All Rights Reserved</p>
                    </div>
                    <div class="col-md-6 text-lg-end">
                        <a href="#">Trams & Condition</a>
                        <a href="#">Privacy Policy</a>
                        <a href="#">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer area end -->

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

    <!-- main js  -->
    <script src="{{ asset('dist/public') }}/assets/js/main.js"></script>
</body>

</html>
