@extends('layouts.frontend')
@section('title')
    Privacy Policy | My Home Security
@endsection

@section('content')
    <style>
        .header-style2 .navbar-default {
            box-shadow: none;
            background-color: #ffff;
        }
    </style>
    <!-- PAGE TITLE
                                                                                                    ================================================== -->
    <section class="page-title-section bg-img cover-background top-position1" data-overlay-dark="5"
        data-background="/frontend/my-img/bg-01.jpg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Privacy Policy</h1>
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li>Privacy Policy</li>
                    </ul>
                </div>
            </div>
        </div>
        <span class="triangle-3 z-index-1 d-none d-sm-inline-block"></span>
        <span class="triangle-4 z-index-1 d-none d-sm-inline-block"></span>
        <img src="/frontend/img/content/dots2.png"
            class="position-absolute right-5 bottom-5 ani-top-bottom z-index-3 d-none d-sm-block" alt="...">
        <div class="page-title-round ani-move"></div>
    </section>

    <!-- TERMS AND CONDITIONS
                                                                                                    ================================================== -->
    <section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="p-1-6 p-md-2-2 border border-color-extra-light-gray border-radius-5">

                        <!-- Privacy Policy -->
                        <div class="mb-1-6 mb-lg-1-9 mb-xl-2-5">
                            <h3 class="mb-3 h4">01. Privacy Policy</h3>
                            <p class="mb-0">
                                At My Home Security, we are committed to protecting your privacy. This Privacy Policy
                                outlines how we collect, use, and safeguard your personal information when you interact with
                                our products, services, and website. By using our services, you agree to the collection and
                                use of information in accordance with this policy.
                            </p>
                        </div>

                        <!-- Information We Collect -->
                        <div class="mb-1-6 mb-lg-1-9 mb-xl-2-5">
                            <h3 class="mb-3 h4">02. Information We Collect</h3>
                            <p>
                                When you sign up for services, contact us, or fill out forms on our website, we may collect
                                personal details such as your name, email address, phone number, billing information, and
                                physical address.
                            </p>

                            <p>
                                We also automatically collect information when you use our website or services, such as your
                                IP address, browser type, device information, and usage patterns.
                            </p>

                            <p class="mb-0">
                                If you use our home security products or services, we may collect data related to your
                                security system’s performance, including sensor status, alarm events, and video footage (if
                                applicable).
                            </p>
                        </div>

                        <!-- Data Sharing -->
                        <div class="mb-1-6 mb-lg-1-9 mb-xl-2-5">
                            <h3 class="mb-3 h4">03. Data Sharing</h3>
                            <p>
                                We do not sell or rent your personal information to third parties. However, we may share
                                your information in the following situations:
                            </p>

                            <ul class="list-style3">
                                <li><i class="ti-check text-primary me-3"></i>We may share your information with trusted
                                    third-party vendors who help us deliver services, such as payment processors or
                                    installation partners.</li>
                                <li><i class="ti-check text-primary me-3"></i>We may also disclose your information if
                                    required by law or to protect our legal rights, for example in response to a subpoena,
                                    court order, or government request.</li>
                            </ul>
                        </div>

                        <!-- Data Security -->
                        <div class="mb-1-6 mb-lg-1-9 mb-xl-2-5">
                            <h3 class="mb-3 h4">04. Data Security</h3>
                            <p class="mb-0">
                                We take the security of your personal information seriously. We implement industry-standard
                                measures like encryption, firewalls, and secure access controls to protect your data.
                                However, no method of transmission over the internet or electronic storage is 100% secure.
                            </p>
                        </div>

                        <!-- Contact -->
                        <div>
                            <h3 class="mb-3 h4">05. Contact Us</h3>
                            <p>If you have any questions about this Privacy Policy or how we handle your personal
                                information, please contact us:</p>

                            <p class="mb-0">
                                Phone: <a href="tel:+18558436011">+1 (855) 843-6011</a> <br>
                                By using our services, you consent to the terms of this Privacy Policy.
                            </p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
