<!DOCTYPE html>
<html lang="en">

<head>

    <!-- metas -->
    <meta charset="utf-8" />
    <meta name="author" content="Website Design Templates" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="description"
        content="Protect what matters most with My Home Security. We provide modern home security systems, smart monitoring, and reliable protection for homes and businesses." />
    <meta name="robots" content="follow, index, max-snippet:-1, max-video-preview:-1, max-image-preview:large" />
    <link rel="canonical" href="{{ url()->current() }}" />
    <!-- title  -->
    <title>@yield('title')</title>

    <!-- favicon -->
    <link rel="shortcut icon" href="/frontend/my-img/favicon.png" />
    <link rel="apple-touch-icon" href="/frontend/img/logos/apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="/frontend/img/logos/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="/frontend/img/logos/apple-touch-icon-114x114.png" />

    <!-- plugins -->
    <link rel="stylesheet" href="/frontend/css/plugins.css">

    <!-- search css -->
    <link rel="stylesheet" href="/frontend/search/search.css">

    <!-- quform css -->
    <link rel="stylesheet" href="/frontend/quform/css/base.css">

    <!-- theme core css -->
    <link href="/frontend/css/styles.css" rel="stylesheet">

    <!-- my css -->
    <link href="/frontend/css/my.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

</head>

<body>

    <a href="tel:+18558436011" class="call-float">
        <i class="fa-solid fa-phone" style="color:white"></i>
    </a>

    <!-- Security Popup -->
    <div id="securityPopup" class="security-popup">
        <div class="security-popup-content">

            <!-- Close Button -->
            <span class="popup-close">&times;</span>

            <!-- Logo -->
            <img src="/frontend/my-img/new-logo.png" class="popup-logo" alt="Home Security">

            <h3>Talk To Security Experts</h3>
            <p>Get 3 Months Free Monitoring Services</p>

            <!-- Call Button -->
            <a href="tel:+18558436011" class="butn border-0">
                <span class="text-btn"><i class="fa-solid fa-phone" style="color:white"></i> Call Our Security
                    Expert</span>
            </a>

        </div>
    </div>

    <!-- PAGE LOADING
    ================================================== -->
    {{-- <div id="preloader"></div> --}}

    <!-- MAIN WRAPPER
    ================================================== -->
    <div class="main-wrapper">

        <!-- HEADER
        ================================================== -->
        <header class="header-style2">

            <div class="top-bar bg-secondary">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-xs-12">
                            <div class="top-bar-info d-flex justify-content-center">
                                <p class="mb-0 text-center">
                                    <b>Limited Time Offer:</b> Talk To Our Security Experts & Get 3 Months Free
                                    Monitoring Services
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="navbar-default border-bottom border-color-light-white">

                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-12 col-lg-12">
                            <div class="menu_area alt-font">
                                <nav class="navbar navbar-expand-lg navbar-light p-0">

                                    <div class="navbar-header navbar-header-custom">
                                        <!-- start logo -->
                                        <a href="/" class="navbar-brand logodefault"><img id="logo"
                                                src="/frontend/my-img/new-logo.png" alt="logo"></a>
                                        <!-- end logo -->
                                    </div>

                                    <div class="navbar-toggler bg-dark"></div>

                                    <!-- menu area -->
                                    <ul class="navbar-nav align-items-lg-center ms-auto" id="nav"
                                        style="display: none;">
                                        <li>
                                            <a href="/">Home</a>
                                        </li>
                                        <li>
                                            <a href="/#about">About Us</a>
                                        </li>
                                        <li>
                                            <a href="/#contact">Contact Us</a>
                                        </li>
                                    </ul>
                                    <!-- end menu area -->

                                    <!-- start attribute navigation -->
                                    <div class="attr-nav align-items-xl-center ms-xl-auto main-font">
                                        <ul>

                                            <li class="d-none d-xl-inline-block"><a href="tel:+18558436011"
                                                    class="butn sm"><span><i class="fa-solid fa-phone"
                                                            style="color:white"></i> +1 (855)
                                                        843-6011</span></a></li>
                                        </ul>
                                    </div>
                                    <!-- end attribute navigation -->
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        @yield('content')
        <!-- FOOTER
        ================================================== -->
        <footer class="bg-dark pt-5">
            <div class="container">

                <!-- Top Heading -->
                <div class="row mb-5">
                    <div class="col-12">
                        <h2 class="text-white fw-bold">
                            <span class="highlight"> Reliable Security </span> When You Need It Most.
                        </h2>
                    </div>
                </div>

                <!-- Footer Columns -->
                <div class="row gx-5 gy-4 pb-5 border-bottom border-secondary">

                    <!-- About -->
                    <div class="col-lg-6 col-md-6">
                        <h5 class="text-white mb-3">My Home Security</h5>
                        <p class="text-light mb-0 footer-about">
                            <b>My Home Security</b> provides advanced and reliable security
                            solutions for homes and businesses. With modern technology
                            and expert support, we create safe environments for you
                            and your loved ones.
                        </p>
                    </div>

                    <!-- Contact -->
                    <div class="col-lg-3 col-md-6">
                        <h5 class="text-white mb-3">Say Hello</h5>

                        {{-- <p class="mb-2">
                            <a href="mailto:info@yourdomain.com" class="text-light text-decoration-none">
                                info@yourdomain.com
                            </a>
                        </p> --}}

                        <p class="mb-0 fs-5">
                            <a href="tel:+18558436011" class="text-light text-decoration-none">
                                +1 855-843-6011
                            </a>
                        </p>
                    </div>

                    <!-- Quick Links -->
                    <div class="col-lg-3 col-md-6">
                        <h5 class="text-white mb-3">Quick Links</h5>

                        <ul class="list-unstyled footer-links">
                            <li><a href="/">Home</a></li>
                            <li><a href="/#about">About Us</a></li>
                            <li><a href="/#contact">Contact Us</a></li>
                            <li><a href="/privacy-policy">Privacy Policy</a></li>
                            <li><a href="/terms-and-condition">Terms & Conditions</a></li>
                        </ul>
                    </div>

                </div>
                <style>
                    .footer-links a {
                        color: #ffffff;
                        padding-left: 4px;
                    }
                </style>


                <!-- Copyright -->
                <div class="row py-3">
                    <div class="col text-center">
                        <p class="text-light mb-0">
                            © Copyright 2026
                            <a href="/" class="text-white text-decoration-none fw-semibold">
                                <span class="highlight">My Home Security</span>
                            </a>
                            All rights reserved.
                        </p>
                    </div>
                </div>

            </div>
        </footer>

    </div>


    <!-- SCROLL TO TOP
    ================================================== -->
    <div class="scroll-top-percentage"><span id="scroll-value"></span></div>

    <!-- all js include start -->

    <!-- jQuery -->
    <script src="/frontend/js/jquery.min.js"></script>

    <!-- popper js -->
    <script src="/frontend/js/popper.min.js"></script>

    <!-- bootstrap -->
    <script src="/frontend/js/bootstrap.min.js"></script>

    <!-- jquery -->
    <script src="/frontend/js/core.min.js"></script>

    <!-- search -->
    <script src="/frontend/search/search.js"></script>

    <!-- custom scripts -->
    <script src="/frontend/js/main.js"></script>

    <!-- form plugins js -->
    <script src="/frontend/quform/js/plugins.js"></script>

    <!-- form scripts js -->
    <script src="/frontend/quform/js/scripts.js"></script>

    <!-- all js include end -->


    <script>
        document.addEventListener("DOMContentLoaded", function() {

            setTimeout(function() {
                document.getElementById("securityPopup").style.display = "flex";
            }, 3000);

            document.querySelector(".popup-close").onclick = function() {
                document.getElementById("securityPopup").style.display = "none";
            };

        });
    </script>
</body>

</html>
