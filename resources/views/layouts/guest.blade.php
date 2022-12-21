<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- styles -->
    <link rel="stylesheet" href="/assets/template-landing/css/custom.css">
    <link rel="stylesheet" href="/assets/template-landing/css/styles.min.css">



    <!-- favicon -->
    <link rel="icon" href="/assets/template/img/landing/favicon.png">

    <!-- Import Font Awesome Icons Set -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    @include('layouts.partials.meta')

    <style>
        /* Styling for Footer */
        .footer {
            padding: 5em 1em;
            font-size: 14px;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 2em;
            background: #10121a !important;
        }

        .footer-top {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 1.5em;
        }

        .footer-top h3 {
            font-size: 1.5em;
            font-weight: 700;
            color: #fff;
        }

        .footer-top h3 a {
            color: #fff;
            font-size: 2em;
            text-decoration: none;
        }

        .footer-top h3 a:hover {
            color: #fffc;
        }

        .footer-nav {
            display: flex;
            flex-direction: row;
            align-items: center;
            gap: 1em;
            font-size: 1.3em;
        }

        .footer-nav li a {
            color: #fffa;
            text-decoration: none;
            text-transform: uppercase;
        }

        .footer-nav li a:hover {
            color: #fff;
        }

        .footer-socials {
            display: flex;
            flex-direction: row;
            gap: 1em;
        }

        .footer-socials a {
            color: #fff;
            font-size: 1.3em;
            text-decoration: none;
            padding: 6px 8px;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .instagram {
            background-color: #f8468d;
        }

        .linkedin {
            background-color: #0077b5;
        }

        .footer-bottom {
            display: flex;
            flex-direction: row;
            align-items: center;
            gap: 1em;
        }

        .footer-bottom p {
            font-size: 1.2em;
        }

        .footer-bottom a {
            color: inherit;
        }

        .footer-bottom a:hover {
            color: #fff;
        }
    </style>
    @yield('styles')
</head>

<body>
    <amp-auto-ads type="adsense" data-ad-client="ca-pub-7811600246173013">
    </amp-auto-ads>

    <!-- NAVIGATION WRAP -->
    <div class="navigation-wrap">
        <!-- NAVIGATION -->
        <nav class="navigation grid-limit">
            <!-- LOGO -->
            <div class="logo void">
                <a href="/">
                    <img src="/assets/template/img/landing/logo.png" width="50px" height="50px" alt="ConnectUp Logo">
                </a>
            </div>
            <!-- /LOGO -->

            <!-- MENU -->
            <ul class="menu">


                <!-- MENU ITEM -->
                <li class="menu-item">
                    <!-- MENU ITEM LINK -->
                    <a class="menu-item-link" href="#about">About</a>
                    <!-- /MENU ITEM LINK -->
                </li>
                <!-- /MENU ITEM -->
                <!-- MENU ITEM -->
                <li class="menu-item">
                    <!-- MENU ITEM LINK -->
                    <a class="menu-item-link" href="#blogs">Blogs</a>
                    <!-- /MENU ITEM LINK -->
                </li>
                <!-- /MENU ITEM -->


                <!-- MENU ITEM -->
                <li class="menu-item">
                    <!-- MENU ITEM LINK -->
                    <a class="menu-item-link" href="#events">Events</a>
                    <!-- /MENU ITEM LINK -->
                </li>
                <!-- /MENU ITEM -->

                <!-- MENU ITEM -->
                <li class="menu-item">
                    <!-- MENU ITEM LINK -->
                    <a class="menu-item-link" href="mailto:connectup.in@gmail.com">Support</a>
                    <!-- /MENU ITEM LINK -->
                </li>
                <!-- /MENU ITEM -->

            </ul>
            <!-- /MENU -->


            <!-- BUTTON -->
            @if (Auth::check())
                <a href="/feed" class="button small primary" style="background:#615dfa">Go to Feed</a>
            @else
                <a class="button small primary" href="{{ route('join.member') }}" style="background:#615dfa">Join
                    Now</a>
            @endif
            <!-- /BUTTON -->
        </nav>
        <!-- /NAVIGATION -->
    </div>
    <!-- /NAVIGATION WRAP -->
    @yield('content')

    <footer class="section-wrap dark footer">

        <div class="footer-top">
            <h3>
                <a href="https://connectup.in">ConnectUp.in</a>
            </h3>
            <ul class="footer-nav">

                <li>
                    <a href="{{ route('home') }}"> Home </a>
                </li>
                <li>
                    <a href="{{ route('home') }}#about"> About </a>
                </li>
                <li>
                    <a href="{{ route('privacypolicy') }}"> Privacy </a>
                </li>
                <li>
                    <a href="{{ route('termsofservice') }}"> Terms </a>
                </li>
                <li>
                    <a href="mailto:{{ env('APP_CONTACT_EMAIL') ?? 'connectup.in@gmail.com' }}"> Contact </a>
                </li>
            </ul>
            <div class="footer-socials">
                <a href="https://www.linkedin.com/company/connectupin" aria-label="ConnectUp Linkedin" class="linkedin"
                    target="_blank">
                    <i class="fab fa-linkedin-in"></i>
                </a>
                <a href="https://www.instagram.com/connectup.in/" aria-label="ConnectUp Instagram" class="instagram"
                    target="_blank">
                    <i class="fab fa-instagram"></i>
                </a>
            </div>


        </div>
        <div class="footer-bottom">
            <p>© 2022 <a href="https://connectup.in"> ConnectUp.in</a>. All rights reserved.</p>
        </div>
    </footer>


    {{-- import jquery from cdn --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <!-- app -->
    <script src="/assets/template-landing/app.bundle.min.js"></script>
    @yield('scripts')
</body>

</html>
