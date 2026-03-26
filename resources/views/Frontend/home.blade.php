@extends('layouts.frontend')
@section('title')
    My Home Security | Professional CCTV Installation & 24/7 Security Solutions
@endsection
@section('content')
    <!-- BANNER
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                 ================================================== -->
    <section class="py-6 py-md-16 py-lg-20 py-xxl-24 bg-img cover-background left-overlay-dark" data-overlay-dark="8"
        data-background="/frontend/my-img/banner-04.jpg">
        <div class="container pt-1-9 pt-sm-6 pt-md-0 mt-n1-9">
            <div class="row">
                <div class="col-md-8 col-lg-8 col-xxl-6">
                    <h1
                        class="display-10 display-md-5 display-lg-4 display-xl-2 text-shadow text-white mb-4 text-white fw-bolder lh-1">
                        Secure Your Home, Protect Your Family</h1>
                    <a href="tel:+18558436011"
                        class="butn white secondary-hover align-middle white mb-4 mb-sm-0 me-sm-4"><span class="text-btn"><i
                                class="fa-solid fa-phone"></i> Connect Now</span></a>
                </div>
            </div>
        </div>
    </section>

    <!-- ABOUTUS ================================================== -->
    <section class="about-us-section" id="about">
        <div class="container">
            <div class="row mt-n2-9 position-relative z-index-9">
                <div class="col-lg-6 mt-2-9 wow fadeIn" data-wow-delay="100ms">
                    <div class="position-relative me-xl-2-9 ps-md-4 text-center text-sm-start">
                        <div class="image-hover d-inline-block z-index-1 pb-sm-8">
                            <img src="/frontend/img/content/about-03.jpg" class="rounded" alt="About Image1">
                        </div>
                        <div
                            class="image-hover position-absolute right-n5 right-md-10 right-lg-n5 bottom-0 d-none d-sm-block z-index-2">
                            <img src="/frontend/img/content/about-04.jpg" class="rounded" alt="About Image2">
                        </div>
                        <img src="/frontend/img/content/dots.png"
                            class="position-absolute left-n5 bottom-5 z-index-0 ani-left-right d-none d-sm-inline-block"
                            alt="About Image3">
                        <div
                            class="d-sm-inline-block d-none p-18 bg-light rounded-circle position-absolute right-5 right-md-10 right-lg-5 top-n5">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mt-2-9 wow fadeIn" data-wow-delay="200ms">
                    <div class="ps-lg-1-9 ps-xl-7">
                        <h2 class="h1 mb-lg-1-9">When You Need Better Security Installation</h2>
                        <p class="display-25 mb-lg-1-9 text-secondary">“Get help from a caring and knowledgeable
                            professional. Let us know what we can do to make your life easier.”</p>
                        <div class="row mb-1-9 mt-n1-9">
                            <div class="col-sm-6 mt-1-9">
                                <div class="d-flex">
                                    <div class="flex-shrink-0">
                                        <img src="/frontend/img/icons/icon-01.png" alt="Icon Image">

                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h4 class="h5">Video Surveillance</h4>
                                        <p class="mb-0">Advanced cameras for smart home monitoring</p>

                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 mt-1-9">
                                <div class="d-flex">
                                    <div class="flex-shrink-0">
                                        <img src="/frontend/img/icons/icon-02.png" alt="Icon Image">

                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h4 class="h5">Integrated Security Systems</h4>
                                        <p class="mb-0">Advanced smart home security</p>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-1-9 mt-n1-9">
                            <div class="col-sm-6 mt-1-9">
                                <div class="d-flex">
                                    <div class="flex-shrink-0">
                                        <img src="/frontend/img/icons/icon-01.png" alt="Icon Image">

                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h4 class="h5">Real-Time Security Support</h4>
                                        <p class="mb-0">Instant alerts for better safety control</p>

                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 mt-1-9">
                                <div class="d-flex">
                                    <div class="flex-shrink-0">
                                        <img src="/frontend/img/icons/icon-02.png" alt="Icon Image">

                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h4 class="h5">24/7 Alarm Monitoring</h4>
                                        <p class="mb-0">Round the clock alarm protection system</p>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="quform-submit-inner">
                            <a class="butn border-0" href="tel:+18558436011"><i class="fa-solid fa-phone"></i> Call Our
                                Security
                                Expert </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>


    <!-- SERVICES  ================================================== -->
    <section class="pb-12 pb-lg-16 pb-xl-20">
        <div class="container">
            <div class="section-heading wow fadeIn text-center mb-1-9 mb-md-2-3 mb-lg-2-9 " data-wow-delay="100ms">
                <span>Our services</span>
                <h2 class="display-5 font-weight-800 mb-0">Our awesome services</h2>
                <p class="pt-3">At My Home Security, we offer expert security solutions tailored to protect what
                    matters most. With
                    advanced technology and professional care, we ensure your safety and peace of mind.</p>
            </div>
            <div class="row mt-n8">
                <div class="col-lg-4 mt-8 wow fadeInRight" data-wow-delay="200ms">
                    <div class="card card-style7">
                        <img src="/frontend/my-img/private.jpg" class="d-block border-radius-10" alt="...">
                        <div class="service-data px-4 border-radius-10">
                            <img src="/frontend/img/icons/icon-25.png" alt="...">
                            <h3 class="h5 mb-0 ms-3">Private Security</h3>
                        </div>
                        <div class="card-body p-0 border-radius-10">
                            <div class="p-4">
                                <div class="service-inner border-bottom border-color-light-white pb-3">
                                    <img src="/frontend/img/icons/icon-25.png" alt="...">
                                    <h3 class="h5 mb-0 ms-3"><a href="#0" class="text-white">Private Security</a></h3>
                                </div>
                                <p class="text-white mb-0 small">Delivering high-quality security systems and the latest
                                    technology to keep you safe and secure.</p>
                            </div>
                            <div class="card-footer bg-secondary border-0 text-center">
                                <a class="text-white d-block" href="tel:+18558436011"><i class="fa-solid fa-phone"></i>
                                    Call Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mt-8 wow fadeInRight" data-wow-delay="200ms">
                    <div class="card card-style7">
                        <img src="/frontend/my-img/bank.jpg" class="d-block border-radius-10" alt="...">
                        <div class="service-data px-4 border-radius-10">
                            <img src="/frontend/img/icons/icon-25.png" alt="...">
                            <h3 class="h5 mb-0 ms-3">Banking Sector</h3>
                        </div>
                        <div class="card-body p-0 border-radius-10">
                            <div class="p-4">
                                <div class="service-inner border-bottom border-color-light-white pb-3">
                                    <img src="/frontend/img/icons/icon-25.png" alt="...">
                                    <h3 class="h5 mb-0 ms-3"><a href="#0" class="text-white">Banking Sector</a>
                                    </h3>
                                </div>
                                <p class="text-white mb-0 small">Protect your financial assets with advanced banking
                                    security solutions. Stay ahead of fraud with real-time monitoring and threat detection.
                                </p>
                            </div>
                            <div class="card-footer bg-secondary border-0 text-center">
                                <a class="text-white d-block" href="tel:+18558436011"><i class="fa-solid fa-phone"></i>
                                    Call Now</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mt-8 wow fadeInRight" data-wow-delay="200ms">
                    <div class="card card-style7">
                        <img src="/frontend/my-img/school.jpg" class="d-block border-radius-10" alt="...">
                        <div class="service-data px-4 border-radius-10">
                            <img src="/frontend/img/icons/icon-25.png" alt="...">
                            <h3 class="h5 mb-0 ms-3">Education Institute</h3>
                        </div>
                        <div class="card-body p-0 border-radius-10">
                            <div class="p-4">
                                <div class="service-inner border-bottom border-color-light-white pb-3">
                                    <img src="/frontend/img/icons/icon-25.png" alt="...">
                                    <h3 class="h5 mb-0 ms-3"><a href="#0" class="text-white">Education Institute</a>
                                    </h3>
                                </div>
                                <p class="text-white mb-0 small">Empower your institution with Nextus Home security
                                    systems. Monitor, manage, and safeguard your campus - anytime, anywhere.</p>
                            </div>
                            <div class="card-footer bg-secondary border-0 text-center">
                                <a class="text-white d-block" href="tel:+18558436011"><i class="fa-solid fa-phone"></i>
                                    Call Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- EXTRA
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    ================================================== -->
    <section class="bg-img cover-background primary-overlay" data-overlay-dark="7"
        data-background="/frontend/img/bg/bg-05.jpg">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 mb-1-9 mb-lg-0 wow fadeIn" data-wow-delay="200ms">
                    <h2 class="display-5 lh-1 font-weight-800 w-100 text-white mb-0">Protect Your Home Today With Expert
                        Solutions</h2>
                </div>
                <div class="col-lg-5 wow fadeIn" data-wow-delay="400ms">
                    <div class="text-start text-lg-end">
                        <a href="tel:+18558436011" class="butn border-0"><span class="text-btn"><i
                                    class="fa-solid fa-phone" style="color:white"></i> Call Our Security
                                Expert
                            </span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- COUNTER
                                                                                                                                                                                                

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    ================================================== -->
    <section class="bg-light bg-img background-position-center background-no-repeat"
        data-background="/frontend/my-img/map.png">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 mb-1-9 mb-lg-0 wow fadeIn" data-wow-delay="200ms">
                    <div class="pe-xxl-2-3">
                        <div class="section-heading mb-2 mb-sm-3 wow fadeIn" data-wow-delay="100ms">
                            <span>testimonial</span>
                            <h2 class="display-5 font-weight-800 mb-0">What our client say</h2>
                        </div>
                        <div class="testimonial-carousel1 owl-carousel owl-theme" data-slider-id="1">
                            <div class="bg-white pt-2-9 p-1-9 border-radius-10 inner-text">
                                <p class="mb-1-6 lead font-weight-400">My Home Security transformed my home into a safe
                                    haven, I’m so impressed!</p>
                                <h6 class="mb-0">Ilene Dorsey</h6>
                                <span class="small">Customer</span>
                            </div>

                            <div class="bg-white pt-2-9 p-1-9 border-radius-10 inner-text">
                                <p class="mb-1-6 lead font-weight-400">Their team was professional, knowledgeable, and the
                                    installation was a breeze!</p>
                                <h6 class="mb-0">Steven Bartley</h6>
                                <span class="small">Customer</span>
                            </div>

                            <div class="bg-white pt-2-9 p-1-9 border-radius-10 inner-text">
                                <p class="mb-1-6 lead font-weight-400">CCTV camera is worth much more than I paid.
                                    Thanks guys, keep up the good work! We're loving it. I will recommend you to my
                                    colleagues.</p>
                                <h6 class="mb-0">Rosemary Frye</h6>
                                <span class="small">Customer</span>
                            </div>

                            <div class="bg-white pt-2-9 p-1-9 border-radius-10 inner-text">
                                <p class="mb-1-6 lead font-weight-400">I feel so much safer knowing my home is monitored
                                    24/7. The installation was quick, the staff were friendly, and the system works
                                    flawlessly.</p>
                                <h6 class="mb-0">Abigail Gunn</h6>
                                <span class="small">Customer</span>
                            </div>

                            <div class="bg-white pt-2-9 p-1-9 border-radius-10 inner-text">
                                <p class="mb-1-6 lead font-weight-400">CCTV camera security should be nominated for
                                    service of the year. It's incredible. If you aren't sure, always go for cctv
                                    camera security.</p>
                                <h6 class="mb-0">Archie Cousens</h6>
                                <span class="small">Customer</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 wow fadeIn" data-wow-delay="400ms">
                    <div class="ps-xxl-6 position-relative">
                        <div class="owl-thumbs text-center testimonial-img" data-slider-id="1">
                            <button class="owl-thumb-item me-lg-auto"><img src="/frontend/img/avatar/avatar-11.jpg"
                                    class="img-radius1" alt="..."></button>
                            <button class="owl-thumb-item ms-lg-auto img-2"><img src="/frontend/img/avatar/avatar-15.jpg"
                                    class="img-radius2" alt="..."></button>
                            <button class="owl-thumb-item me-lg-auto ms-lg-6 img-3"><img
                                    src="/frontend/img/avatar/avatar-12.jpg" class="img-radius3" alt="..."></button>
                            <button class="owl-thumb-item ms-lg-auto img-2"><img src="/frontend/img/avatar/avatar-14.jpg"
                                    class="img-radius4" alt="..."></button>
                            <button class="owl-thumb-item me-lg-auto"><img src="/frontend/img/avatar/avatar-13.jpg"
                                    class="img-radius5" alt="..."></button>
                        </div>
                        <div class="square-shape top-35 left-25 z-index-9"></div>
                        <div class="square-shape-two bottom-20 left-35 z-index-9"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- PROCESS
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    ================================================== -->
    <section class="bg-dark">
        <div class="container">
            <div class="section-heading mb-2-3 mb-md-2-9 mb-lg-6 text-center wow fadeIn" data-wow-delay="100ms">
                <span class="text-white">Process</span>
                <h2 class="display-5 font-weight-800 text-white mb-0">Easy process steps</h2>
            </div>
            <div class="row mt-n2-9">
                <div class="col-md-6 col-lg-4 mt-2-9 wow fadeInRight" data-wow-delay="200ms">
                    <div class="process-style2 text-center position-relative">
                        <div class="process-icon mb-4">
                            <i class="icon-profile-male"></i>
                            <span class="process-number">01</span>
                        </div>
                        <h3 class="text-white mb-3 h5">Consultation</h3>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mt-2-9 wow fadeInRight" data-wow-delay="400ms">
                    <div class="process-style2 text-center position-relative">
                        <div class="process-icon mb-4">
                            <i class="icon-notebook"></i>
                            <span class="process-number">02</span>
                        </div>
                        <h3 class="text-white mb-3 h5">Requirements</h3>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mt-2-9 wow fadeInRight" data-wow-delay="600ms">
                    <div class="process-style2 text-center position-relative last">
                        <div class="process-icon mb-4">
                            <i class="icon-globe"></i>
                            <span class="process-number">03</span>
                        </div>
                        <h3 class="text-white mb-3 h5">Install CCTV</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="pt-15 mt-n7 bg-transparent d-none d-xl-block" id="contact">
        <div class="container wow flipInX" data-wow-delay="200ms">
            <div class="row g-0">
                <div class="col-md-4 wow fadeIn" data-wow-delay="100ms">
                    <div class="bg-img cover-background h-100" data-background="/frontend/my-img/call.jpg"
                        style="background-image: url(https://monityhtml.websitelayout.net/&quot;img/bg/bg-06.jpg&quot;);">
                    </div>
                </div>
                <div class="col-md-8 wow fadeIn" data-wow-delay="200ms">
                    <div class="bg-secondary h-100 p-1-9 p-lg-6 position-relative">
                        <h3 class="text-white call-text"><a href="tel:+18558436011">Call Us +1 (855) 843-6011</a></h3>
                        <p class="text-white mb-0">If you're searching out advice, please call us. We will discover you and
                            get in touch.</p>
                        <span class="position-absolute top-35 left-n25px"><i
                                class="fas fa-phone p-3 rounded-circle d-block bg-white text-secondary d-none d-md-block"></i></span>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
