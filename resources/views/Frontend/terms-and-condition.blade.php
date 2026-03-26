@extends('layouts.frontend')
@section('title')
    Terms And Conditions | My Home Security
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
                    <h1>Terms &amp; Condition</h1>
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li>Terms &amp; Condition</li>
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

                        <!-- Terms and Conditions -->
                        <div class="mb-1-6 mb-lg-1-9 mb-xl-2-5">
                            <h3 class="mb-3 h4">Terms and Conditions</h3>
                            <p>
                                Welcome to My Home Security. These Terms and Conditions (“Terms”) govern your use of our
                                website, products, and services. By accessing or using our website or services, you agree to
                                be bound by these Terms. If you do not agree with any part of these Terms, please do not use
                                our services.
                            </p>
                        </div>

                        <!-- Use of Our Services -->
                        <div class="mb-1-6 mb-lg-1-9 mb-xl-2-5">
                            <h3 class="mb-3 h4">1. Use of Our Services</h3>
                            <p class="mb-0">
                                You agree to use our services only for lawful purposes and in a manner that does not
                                infringe on the rights of others or restrict their use and enjoyment of the site. You must
                                be at least 18 years old to use our services or have the consent of a legal guardian.
                            </p>
                        </div>

                        <!-- Account Registration -->
                        <div class="mb-1-6 mb-lg-1-9 mb-xl-2-5">
                            <h3 class="mb-3 h4">2. Account Registration</h3>
                            <p class="mb-0">
                                To access certain features of our services, you may be required to register for an account.
                                You agree to provide accurate, current, and complete information and to keep your login
                                credentials secure. You are responsible for all activity that occurs under your account.
                            </p>
                        </div>

                        <!-- Purchases and Payments -->
                        <div class="mb-1-6 mb-lg-1-9 mb-xl-2-5">
                            <h3 class="mb-3 h4">3. Purchases and Payments</h3>
                            <p class="mb-0">
                                By placing an order, you agree to pay the listed price and any applicable taxes or fees.
                                Payments are processed through third-party providers, and My Home Security is not
                                responsible for any issues arising from those providers.
                            </p>
                        </div>

                        <!-- Installation and Monitoring Services -->
                        <div class="mb-1-6 mb-lg-1-9 mb-xl-2-5">
                            <h3 class="mb-3 h4">4. Installation and Monitoring Services</h3>
                            <p class="mb-0">
                                If you purchase installation or monitoring services through our website, additional terms
                                may apply. These will be provided at the time of service engagement. You are responsible for
                                ensuring access to your property for installation appointments.
                            </p>
                        </div>

                        <!-- Intellectual Property -->
                        <div class="mb-1-6 mb-lg-1-9 mb-xl-2-5">
                            <h3 class="mb-3 h4">5. Intellectual Property</h3>
                            <p class="mb-0">
                                All content on our website—including logos, designs, text, graphics, and software—is the
                                property of My Home Security or its licensors and is protected by intellectual property
                                laws. You may not reproduce, distribute, or create derivative works from any content without
                                our express written permission.
                            </p>
                        </div>

                        <!-- User Conduct -->
                        <div class="mb-1-6 mb-lg-1-9 mb-xl-2-5">
                            <h3 class="mb-3 h4">6. User Conduct</h3>
                            <p>You agree not to:</p>

                            <ul class="list-style3">
                                <li><i class="ti-check text-primary me-3"></i>A) Use the site for any unlawful purpose;</li>
                                <li><i class="ti-check text-primary me-3"></i>B) Interfere with the operation or security of
                                    the website;</li>
                                <li><i class="ti-check text-primary me-3"></i>C) Attempt to gain unauthorized access to any
                                    part of the site or services;</li>
                                <li><i class="ti-check text-primary me-3"></i>D) Upload or transmit viruses, malware, or
                                    harmful code.</li>
                            </ul>
                        </div>

                        <!-- Disclaimers -->
                        <div class="mb-1-6 mb-lg-1-9 mb-xl-2-5">
                            <h3 class="mb-3 h4">7. Disclaimers</h3>
                            <p class="mb-0">
                                Our website and services are provided “as is” and “as available.” We make no warranties,
                                express or implied, including but not limited to merchantability, fitness for a particular
                                purpose, or non-infringement. We do not guarantee uninterrupted or error-free service.
                            </p>
                        </div>

                        <!-- Limitation of Liability -->
                        <div class="mb-1-6 mb-lg-1-9 mb-xl-2-5">
                            <h3 class="mb-3 h4">8. Limitation of Liability</h3>
                            <p class="mb-0">
                                To the maximum extent permitted by law, My Home Security is not liable for any indirect,
                                incidental, special, or consequential damages arising from your use of the website or
                                services, even if we have been advised of the possibility of such damages.
                            </p>
                        </div>

                        <!-- Privacy -->
                        <div class="mb-1-6 mb-lg-1-9 mb-xl-2-5">
                            <h3 class="mb-3 h4">9. Privacy</h3>
                            <p class="mb-0">
                                Your use of our services is also governed by our Privacy Policy, which explains how we
                                collect, use, and protect your personal information.
                            </p>
                        </div>

                        <!-- Termination -->
                        <div class="mb-1-6 mb-lg-1-9 mb-xl-2-5">
                            <h3 class="mb-3 h4">10. Termination</h3>
                            <p class="mb-0">
                                We reserve the right to suspend or terminate your access to the site or services at our sole
                                discretion, without notice, for conduct that we believe violates these Terms or is otherwise
                                harmful to other users or us.
                            </p>
                        </div>

                        <!-- Governing Law -->
                        <div class="mb-1-6 mb-lg-1-9 mb-xl-2-5">
                            <h3 class="mb-3 h4">11. Governing Law</h3>
                            <p class="mb-0">
                                These Terms are governed by the laws of the State of Maryland, USA, without regard to its
                                conflict of laws principles. Any disputes arising out of or related to these Terms shall be
                                resolved in the courts located in Montgomery County, Maryland.
                            </p>
                        </div>

                        <!-- Changes to Terms -->
                        <div class="mb-1-6 mb-lg-1-9 mb-xl-2-5">
                            <h3 class="mb-3 h4">12. Changes to Terms</h3>
                            <p class="mb-0">
                                We may update these Terms from time to time. When we do, we will revise the “Effective Date”
                                at the top of this page. Continued use of our services after changes have been posted
                                constitutes your acceptance of the updated Terms.
                            </p>
                        </div>

                        <!-- Contact -->
                        <div>
                            <h3 class="mb-3 h4">13. Contact Us</h3>
                            <p>If you have any questions about these Terms, please contact us:</p>

                            <p class="mb-0">
                                Phone: <a href="tel:+18558436011">+1 (855) 843-6011</a>
                            </p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
