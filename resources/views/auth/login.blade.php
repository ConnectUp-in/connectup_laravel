@php
$page['title'] = 'Login | ConnectUp | Connecting the Dots...';

@endphp


@extends('layouts/auth')



@section('content')
    <!-- LANDING -->
    <div class="landing">
        <!-- LANDING DECORATION -->
        <div class="landing-decoration"></div>
        <!-- /LANDING DECORATION -->

        <!-- LANDING INFO -->
        <div class="landing-info">
            <!-- LOGO -->
            <div class="logo">
                <img src="/assets/template/img/landing/logo.png" alt="logo" width="70">
            </div>
            <!-- /LOGO -->

            <!-- LANDING INFO PRETITLE -->
            <h2 class="landing-info-pretitle">Welcome to</h2>
            <!-- /LANDING INFO PRETITLE -->

            <!-- LANDING INFO TITLE -->
            <h1 class="landing-info-title">ConnectUp</h1>
            <!-- /LANDING INFO TITLE -->

            <!-- LANDING INFO TEXT -->
            <p class="landing-info-text">The next generation social network &amp; community! Connect with your friends
                and play with our quests and badges gamification system!</p>
            <!-- /LANDING INFO TEXT -->

            <!-- TAB SWITCH -->
            <div class="tab-switch">
                <!-- TAB SWITCH BUTTON -->
                <p class="tab-switch-button login-register-form-trigger">Login</p>
                <!-- /TAB SWITCH BUTTON -->

                <!-- TAB SWITCH BUTTON -->
                <p class="tab-switch-button login-register-form-trigger">Register</p>
                <!-- /TAB SWITCH BUTTON -->
            </div>
            <!-- /TAB SWITCH -->
        </div>
        <!-- /LANDING INFO -->

        <!-- LANDING FORM -->
        <div class="landing-form">
            <!-- FORM BOX -->
            <div class="form-box login-register-form-element">
                <!-- FORM BOX DECORATION -->
                <img class="form-box-decoration overflowing" src="/assets/template/img/landing/rocket.png" alt="rocket">
                <!-- /FORM BOX DECORATION -->

                <!-- FORM BOX TITLE -->
                <h2 class="form-box-title">Account Login</h2>
                <!-- /FORM BOX TITLE -->

                <center style="    color: #fff;
            font-family: 'RAJDHANI';
            margin-bottom: 10px;">
                    <x-jet-validation-errors class="mb-4" />
                </center>
                <!-- FORM -->
                <form class="form" method="POST" action="/login">

                    @csrf
                    <!-- FORM ROW -->
                    <div class="form-row">
                        <!-- FORM ITEM -->
                        <div class="form-item">
                            <!-- FORM INPUT -->
                            <div class="form-input">
                                <label for="login-username">Your Email</label>
                                <input type="text" id="login-username" name="email">
                            </div>
                            <!-- /FORM INPUT -->
                        </div>
                        <!-- /FORM ITEM -->
                    </div>
                    <!-- /FORM ROW -->

                    <!-- FORM ROW -->
                    <div class="form-row">
                        <!-- FORM ITEM -->
                        <div class="form-item">
                            <!-- FORM INPUT -->
                            <div class="form-input">
                                <label for="login-password">Password</label>
                                <input type="password" id="login-password" name="password">
                            </div>
                            <!-- /FORM INPUT -->
                        </div>
                        <!-- /FORM ITEM -->
                    </div>
                    <!-- /FORM ROW -->

                    <!-- FORM ROW -->
                    <div class="form-row space-between">
                        <!-- FORM ITEM -->
                        <div class="form-item">
                            <!-- CHECKBOX WRAP -->
                            <div class="checkbox-wrap">
                                <input type="checkbox" id="login-remember" name="remember" checked>
                                <!-- CHECKBOX BOX -->
                                <div class="checkbox-box">
                                    <!-- ICON CROSS -->
                                    <svg class="icon-cross">
                                        <use xlink:href="#svg-cross"></use>
                                    </svg>
                                    <!-- /ICON CROSS -->
                                </div>
                                <!-- /CHECKBOX BOX -->
                                <label for="login-remember">Remember Me</label>
                            </div>
                            <!-- /CHECKBOX WRAP -->
                        </div>
                        <!-- /FORM ITEM -->

                        <!-- FORM ITEM -->
                        <div class="form-item">
                            <!-- FORM LINK -->
                            <a class="form-link" href="#">Forgot Password?</a>
                            <!-- /FORM LINK -->
                        </div>
                        <!-- /FORM ITEM -->
                    </div>
                    <!-- /FORM ROW -->

                    <!-- FORM ROW -->
                    <div class="form-row">
                        <!-- FORM ITEM -->
                        <div class="form-item">
                            <!-- BUTTON -->
                            <button class="button medium secondary">Login to your Account!</button>
                            <!-- /BUTTON -->
                        </div>
                        <!-- /FORM ITEM -->
                    </div>
                    <!-- /FORM ROW -->
                </form>
                <!-- /FORM -->

                <!-- LINED TEXT -->
                <p class="lined-text">Login with your Social Account</p>
                <!-- /LINED TEXT -->

                <!-- SOCIAL LINKS -->
                <div class="social-links">

                    <!-- SOCIAL LINK -->
                    <a class="social-link youtube" href="/auth/google">
                        <i class="fab fa-google"></i>
                    </a>
                    <!-- /SOCIAL LINK -->
                    <!-- SOCIAL LINK -->
                    <a class="social-link github" href="/auth/github">
                        <i class="fab fa-github"></i>
                    </a>
                    <!-- /SOCIAL LINK -->

                    <!-- SOCIAL LINK -->
                    <a class="social-link linkedin" href="/auth/linkedin">
                        <i class="fab fa-linkedin"></i>
                    </a>
                    <!-- /SOCIAL LINK -->

                </div>
                <!-- /SOCIAL LINKS -->
            </div>
            <!-- /FORM BOX -->

            <!-- FORM BOX -->
            <div class="form-box login-register-form-element">
                <!-- FORM BOX DECORATION -->
                <img class="form-box-decoration" src="/assets/template/img/landing/rocket.png" alt="rocket">
                <!-- /FORM BOX DECORATION -->

                <!-- FORM BOX TITLE -->
                <h2 class="form-box-title">Create your Account!</h2>
                <!-- /FORM BOX TITLE -->

                <!-- FORM -->
                <form class="form" method="POST" action="/register">
                    <!-- FORM ROW -->
                    @csrf

                    <center
                        style="    color: #fff;
                    font-family: 'RAJDHANI';
                    margin-bottom: 10px;">
                        <x-jet-validation-errors class="mb-4" />
                    </center>
                    <div class="form-row">
                        <!-- FORM ITEM -->
                        <div class="form-item">
                            <!-- FORM INPUT -->
                            <div class="form-input">
                                <label for="email">Your Email</label>
                                <input type="text" id="email" name="email">
                            </div>
                            <!-- /FORM INPUT -->
                        </div>
                        <!-- /FORM ITEM -->
                    </div>
                    <!-- /FORM ROW -->

                    <!-- FORM ROW -->
                    <div class="form-row">
                        <!-- FORM ITEM -->
                        <div class="form-item">
                            <!-- FORM INPUT -->
                            <div class="form-input">
                                <label for="name">Your Name</label>
                                <input type="text" id="name" name="name">
                            </div>
                            <!-- /FORM INPUT -->
                        </div>
                        <!-- /FORM ITEM -->
                    </div>
                    <!-- /FORM ROW -->

                    <!-- FORM ROW -->
                    <div class="form-row">
                        <!-- FORM ITEM -->
                        <div class="form-item">
                            <!-- FORM INPUT -->
                            <div class="form-input">
                                <label for="password">Password</label>
                                <input type="password" id="password" name="password">
                            </div>
                            <!-- /FORM INPUT -->
                        </div>
                        <!-- /FORM ITEM -->
                    </div>
                    <!-- /FORM ROW -->

                    <!-- FORM ROW -->
                    <div class="form-row">
                        <!-- FORM ITEM -->
                        <div class="form-item">
                            <!-- FORM INPUT -->
                            <div class="form-input">
                                <label for="password_confirmation">Repeat Password</label>
                                <input type="password" id="password_confirmation" name="password_confirmation">
                            </div>
                            <!-- /FORM INPUT -->
                        </div>
                        <!-- /FORM ITEM -->
                    </div>
                    <!-- /FORM ROW -->

                    <!-- FORM ROW -->
                    <div class="form-row">
                        <!-- FORM ITEM -->
                        <div class="form-item">
                            <!-- CHECKBOX WRAP -->
                            <div class="checkbox-wrap">
                                <input type="checkbox" id="register-newsletter" name="register_newsletter" checked>
                                <!-- CHECKBOX BOX -->
                                <div class="checkbox-box">
                                    <!-- ICON CROSS -->
                                    <svg class="icon-cross">
                                        <use xlink:href="#svg-cross"></use>
                                    </svg>
                                    <!-- /ICON CROSS -->
                                </div>
                                <!-- /CHECKBOX BOX -->
                                <label for="register-newsletter">Send me news and updates via email</label>
                            </div>
                            <!-- /CHECKBOX WRAP -->
                        </div>
                        <!-- /FORM ITEM -->
                    </div>
                    <!-- /FORM ROW -->

                    <!-- FORM ROW -->
                    <div class="form-row">
                        <!-- FORM ITEM -->
                        <div class="form-item">
                            <!-- BUTTON -->
                            <button class="button medium primary">Register Now!</button>
                            <!-- /BUTTON -->
                        </div>
                        <!-- /FORM ITEM -->
                    </div>
                    <!-- /FORM ROW -->
                </form>
                <!-- /FORM -->

                <!-- FORM TEXT -->
                <p class="form-text">You'll receive a confirmation email in your inbox with a link to activate your
                    account. If you have any problems, <a href="#">contact us</a>!</p>
                <!-- /FORM TEXT -->
            </div>
            <!-- /FORM BOX -->
        </div>
        <!-- /LANDING FORM -->
    </div>
    <!-- /LANDING -->
@endsection
