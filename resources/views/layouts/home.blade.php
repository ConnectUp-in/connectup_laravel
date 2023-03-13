<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/assets/template/img/landing/favicon.png">
    <link rel="stylesheet" href="/assets/home/assets/css/plugins.css">
    <link rel="stylesheet" href="/assets/home/assets/css/style.css">
    <link rel="stylesheet" href="/assets/home/assets/css/colors/grape.css">
    <link rel="preload" href="/assets/home/assets/css/fonts/urbanist.css" as="style"
        onload="this.rel='stylesheet'">

    @include('layouts.partials.meta')
    @stack('styles')
</head>

<body>
    <div class="content-wrapper">
        @import('home.header')
        @yield('content')
    </div>
    <div class="container-card">
        <div class="card image-wrapper bg-full bg-image bg-overlay bg-overlay-light-500 mb-14"
            data-image-src="/assets/home/assets/img/photos/bg22.png">
            <div class="card-body py-14 px-0">
                <div class="container">
                    <div class="row text-center">
                        <div class="col-xl-11 col-xxl-9 mx-auto">
                            <h2 class="fs-16 text-uppercase text-gradient gradient-1 mb-3">Join Our Community</h2>
                            <h3 class="display-4 mb-7 px-lg-17">Join ConnectUp Community and accelerate your success
                                to new heights!</h3>
                        </div>
                        <!-- /column -->
                    </div>
                    <!-- /.row -->
                    <div class="d-flex justify-content-center">
                        <span><a href="/join/member" class="btn btn-lg btn-gradient gradient-1 rounded">Get
                                Started</a></span>
                    </div>
                </div>
                <!--/.container -->
            </div>
            <!--/.card-body -->
        </div>
        <!--/.card -->
    </div>
    <footer class="bg-dark text-inverse">
        <div class="container py-13 py-md-15">
            <div class="row gy-6 gy-lg-0">
                <div class="col-md-4 col-lg-3">
                    <div class="widget">
                        <img class="mb-4" src="/assets/template/img/landing/logotextdark.png" style="height:40px"
                            alt="" />
                        <p class="mb-4">© 2023 ConnectUp <br class="d-none d-lg-block" />All rights reserved.</p>
                        <nav class="nav social social-white">
                            <a href="https://linkedin.com/company/connectupin"><i class="uil uil-linkedin"></i></a>
                            <a href="https://instagram.com/connectup.in"><i class="uil uil-instagram"></i></a>
                        </nav>
                        <!-- /.social -->
                    </div>
                    <!-- /.widget -->
                </div>
                <!-- /column -->
                <div class="col-md-4 col-lg-3">
                    <div class="widget">
                        <h4 class="widget-title text-white mb-3">Need Help?</h4>
                        <ul class="list-unstyled text-reset mb-0">
                            <li><a href="mailto:connectup.in@gmail.com">Support</a></li>
                            <li><a href="{{ route('termsofservice') }}">Terms of Use</a></li>
                            <li><a href="{{ route('privacypolicy') }}">Privacy Policy</a></li>
                        </ul>
                    </div>
                </div>
                <!-- /column -->
                <div class="col-md-4 col-lg-3">
                    <div class="widget">
                        <h4 class="widget-title text-white mb-3">Quick Links</h4>
                        <ul class="list-unstyled  mb-0">
                            <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="/blogs">Blogs</a></li>
                            <li class="nav-item"><a class="nav-link" href="/events">Events</a></li>
                        </ul>
                    </div>
                    <!-- /.widget -->
                </div>
                <!-- /column -->
                <div class="col-md-12 col-lg-3">
                    <div class="widget">
                        <h4 class="widget-title text-white mb-3">Our Newsletter</h4>
                        <p class="mb-5">Stay updated with entreprenurial ecosystem.</p>
                        <div class="newsletter-wrapper">
                            <!-- Begin Mailchimp Signup Form -->
                            <div id="mc_embed_signup2">
                                <form action="/subscribe/newsletter" method="post" id="mc-embedded-subscribe-form2"
                                    name="mc-embedded-subscribe-form" class="validate dark-fields" target="_blank"
                                    novalidate>
                                    <div id="mc_embed_signup_scroll2">
                                        <div class="mc-field-group input-group form-floating">
                                            <input type="email" value="" name="EMAIL"
                                                class="required email form-control" placeholder="Email Address"
                                                id="mce-EMAIL2">
                                            <label for="mce-EMAIL2">Email Address</label>
                                            <input type="submit" value="Join" name="subscribe"
                                                id="mc-embedded-subscribe2" class="btn btn-primary">
                                        </div>
                                        <div id="mce-responses2" class="clear">
                                            <div class="response" id="mce-error-response2" style="display:none">
                                            </div>
                                            <div class="response" id="mce-success-response2" style="display:none">
                                            </div>
                                        </div>
                                        <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                        <div style="position: absolute; left: -5000px;" aria-hidden="true"><input
                                                type="text" name="b_ddc180777a163e0f9f66ee014_4b1bcfa0bc"
                                                tabindex="-1" value=""></div>
                                        <div class="clear"></div>
                                    </div>
                                </form>
                            </div>
                            <!--End mc_embed_signup-->
                        </div>
                        <!-- /.newsletter-wrapper -->
                    </div>
                    <!-- /.widget -->
                </div>
                <!-- /column -->
            </div>
            <!--/.row -->
        </div>
        <!-- /.container -->
    </footer>
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <script src="/assets/home/assets/js/plugins.js"></script>
    <script src="/assets/home/assets/js/theme.js"></script>
    @stack('scripts')
</body>

</html>
