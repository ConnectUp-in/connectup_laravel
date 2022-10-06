@php
$page['title'] = 'Login | ConnectUp | Connecting the Dots...';

@endphp


@extends('layouts/auth')

@section('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.13.6/css/selectize.css"
        integrity="sha512-6skR4yyaANUKXypVS+nB+HMmq8Xd17CSwFsBEHCRaa3UicPlksbwVtBTZl13Fea6zqsnnmqc7fRH97/M6JcwCA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


    <style>
        .selectize-input {
            background-color: #1d2333 !important;
            border: 1px solid #3f485f;
            color: #fff;
            transition: border-color 0.2s ease-in-out;
            width: 100%;
            border-radius: 12px;
            font-size: 0.875rem;
            font-weight: 700;
            height: 48px;
            padding: 0 18px;
            display: flex;
            align-items: center;
            justify-content: flex-start;
            font-family: 'RAJDHANI';

        }

        .selectize-input,
        .selectize-control.single .selectize-input.input-active {
            display: flex;
        }

        .selectize-input,
        .selectize-control.single .selectize-input.input-active {
            border-radius: 12px;
        }

        .selectize-dropdown-content {

            background-color: #1d2333 !important;
            color: #fff;
            transition: border-color 0.2s ease-in-out;
            width: 100%;
            font-size: 0.875rem;
            font-weight: 700;
            font-family: 'RAJDHANI';
        }

        /* add custom scrollbar*/
        .selectize-dropdown-content::-webkit-scrollbar {
            width: 0px;
            background: transparent;
        }

        .selectize-dropdown {
            background: transparent;
            outline: none;
            border: none;
        }

        .selectize-control.multi .selectize-input>div {
            margin: 0px 5px 5px 0;
            padding: 5px 10px;
            background: #f2f2f233;
            color: #fffc;
            border-radius: 5px;
            font-family: 'RAJDHANI';
        }

        .selectize-control.multi .selectize-input.has-items {
            flex-wrap: wrap;
            height: auto;
        }

        .selectize-input.has-items>input {
            color: #fffc;
        }

        .selectize-control.single .selectize-input.input-active,
        .selectize-control.single .selectize-input.input-active input {
            color: #fffc;
        }


        input.is-valid {
            border-color: #28a745 !important;
        }

        input.is-invalid {
            border-color: #dc3545 !important;
        }

        #submitbutton[disabled] {
            background-color: #1d2333 !important;
            cursor: not-allowed;
            box-shadow: none;
            color: #fff !important;
        }
    </style>
    <style>
        .founder,
        .nofounder {
            margin: 1em 0;
        }


        .founder {
            display: none;
        }

        form {
            margin-top: 0 !important;
        }

        .landing {
            overflow-y: scroll;
            overflow-x: hidden;

        }
    </style>
@endsection


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


            @if (Auth::check())
                <!-- FORM BOX -->
                <div class="form-box login-register-form-element">
                    {{-- 
                    <!-- FORM BOX TITLE -->
                    <h2 class="form-box-title">Join Community</h2>
                    <!-- /FORM BOX TITLE -->


 --}}


                    <!-- FORM -->
                    <form class="form" method="POST" action="{{ route('register.member') }}">
                        <!-- FORM ROW -->
                        @csrf

                        {{-- Contact Number(WhatsApp) - text - contact, 
                            Are you a Startup Founder - boolean - founder,

                            --}}

                        <div class="form-row">
                            <!-- FORM ITEM -->
                            <div class="form-item">
                                <!-- FORM INPUT -->
                                <div class="form-input">
                                    <label for="contact">Contact Number (WhatsApp)</label>
                                    <input type="text" id="contact" name="contact">
                                </div>
                                <!-- /FORM INPUT -->
                            </div>
                            <!-- /FORM ITEM -->
                        </div>
                        <!-- /FORM ROW -->


                        <div class="form-row">
                            <!-- FORM ITEM -->
                            <div class="form-item">



                                <div class="switch-option  " style="margin-right:1em;margin-left:0.5em">
                                    <p class="switch-option-title">
                                        Founder
                                    </p>
                                    <p class="switch-option-text">
                                        Are you a Startup Founder
                                    </p>
                                    <div class="form-switch " onclick="updateCheck(this)">
                                        <input type="hidden" name="founder" value="0">
                                        <!-- FORM SWITCH BUTTON -->
                                        <div class="form-switch-button"></div>
                                        <!-- /FORM SWITCH BUTTON -->
                                    </div>
                                    <!-- /FORM SWITCH -->
                                </div>
                                <!-- /SWITCH OPTION -->


                            </div>
                            <!-- /FORM ITEM -->
                        </div>
                        <!-- /FORM ROW -->


                        <div class="nofounder">
                            {{-- 
                                Any Idea you want to start with - textarea - idea,
                                What are you looking forward to? - multi-select - reasons,
                                --}}

                            <div class="form-row">
                                <!-- FORM ITEM -->
                                <div class="form-item">
                                    <!-- FORM INPUT -->
                                    <div class="form-input">
                                        <label for="idea">Any Idea you want to start with</label>
                                        <textarea id="idea" name="idea"></textarea>
                                    </div>
                                    <!-- /FORM INPUT -->
                                </div>
                                <!-- /FORM ITEM -->
                            </div>



                        </div>

                        <div class="founder">
                            {{-- 
                                Startup Name - text - startupname,
                                Describe your Startup in short - textarea - startupdesc,
                                Startup Website - text - website,
                                What are you looking forward to? - multi-select - lookingfor,
                                 --}}

                            <div class="form-row">
                                <!-- FORM ITEM -->
                                <div class="form-item">
                                    <!-- FORM INPUT -->
                                    <div class="form-input">
                                        <label for="startupname">Startup Name</label>
                                        <input type="text" id="startupname" name="startupname">
                                    </div>
                                    <!-- /FORM INPUT -->
                                </div>
                                <!-- /FORM ITEM -->
                            </div>

                            <div class="form-row">
                                <!-- FORM ITEM -->
                                <div class="form-item">
                                    <!-- FORM INPUT -->
                                    <div class="form-input">
                                        <label for="about">About your Startup</label>
                                        <textarea id="about" name="about"></textarea>
                                    </div>
                                    <!-- /FORM INPUT -->
                                </div>
                                <!-- /FORM ITEM -->
                            </div>

                            <div class="form-row">
                                <!-- FORM ITEM -->
                                <div class="form-item">
                                    <!-- FORM INPUT -->
                                    <div class="form-input">
                                        <label for="website">Startup Website</label>
                                        <input type="text" id="website" name="website">
                                    </div>
                                    <!-- /FORM INPUT -->
                                </div>
                                <!-- /FORM ITEM -->
                            </div>

                        </div>


                        <div class="form-row">
                            <!-- FORM ITEM -->
                            <div class="form-item">
                                <!-- FORM INPUT -->
                                <div class="form-input">
                                    <label for="linkedin">Your LinkedIn</label>
                                    <input type="text" id="linkedin" name="linkedin">
                                </div>
                                <!-- /FORM INPUT -->
                            </div>
                            <!-- /FORM ITEM -->
                        </div>



                        <div class="form-row">
                            <!-- FORM ITEM -->
                            <div class="form-item">
                                <!-- FORM INPUT -->
                                <div class="form-input">
                                    <label for="reasons">What are you looking forward to?</label>
                                    <select id="reasons" name="reasons[]" multiple>
                                        @forelse ($objectives as $objective)
                                            <option value="{{ $objective->id }}">{{ $objective->name }}</option>
                                        @empty
                                            <option value="0">No Objectives</option>
                                        @endforelse

                                    </select>
                                </div>
                                <!-- /FORM INPUT -->
                            </div>
                            <!-- /FORM ITEM -->
                        </div>


                        <!-- FORM ROW -->
                        <div class="form-row">
                            <!-- FORM ITEM -->
                            <div class="form-item">
                                <!-- BUTTON -->
                                <button class="button medium primary">Join Community</button>
                                <!-- /BUTTON -->
                            </div>
                            <!-- /FORM ITEM -->
                        </div>
                        <!-- /FORM ROW -->
                    </form>
                    <!-- /FORM -->

                </div>
                <!-- /FORM BOX -->
            @else
                <!-- FORM BOX -->
                <div class="form-box login-register-form-element">

                    {{-- <!-- FORM BOX TITLE -->
                    <h2 class="form-box-title">Account Login</h2>
                    <!-- /FORM BOX TITLE --> --}}


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
                    <p class="lined-text">Account Login</p>





                    <!-- FORM -->
                    <form class="form" method="POST" action="#">



                        <!-- FORM ROW -->
                        <div class="form-row">
                            <!-- FORM ITEM -->
                            <div class="form-item">
                                <!-- BUTTON -->
                                <a href="{{ route('login') }}" class="button w-100 medium primary">Login to Continue!</a>
                                <!-- /BUTTON -->
                            </div>
                            <!-- /FORM ITEM -->
                        </div>
                        <!-- /FORM ROW -->
                    </form>
                    <!-- /FORM -->

                </div>
                <!-- /FORM BOX -->
            @endif
            <!-- FORM BOX -->
            <div class="form-box login-register-form-element">

            </div>
            <!-- /FORM BOX -->
        </div>
        <!-- /LANDING FORM -->
    </div>
    <!-- /LANDING -->
@endsection

@section('scripts')
    {{-- import jquery from cdn --}}
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

    {{-- Import Toasterjs from cdn --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/sifter/0.5.4/sifter.min.js"
        integrity="sha512-B60IUvYpG4cibCeQ30J8k/+qtN+fxKAIENb3DL2DVdzIt76IDIynAt92chPEwlCuKejOt//+OZL61i1xsvCIDQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/microplugin/0.0.3/microplugin.min.js"
        integrity="sha512-7amIsiQ/hxbdPNawBZwmWBWPiwQRNEJlxTj6eVO+xmWd71fs79Iydr4rYARHwDf0rKHpysFxWbj64fjPRHbqfA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.13.6/js/selectize.min.js"
        integrity="sha512-DBOconMAY06o4R79zeXKKM3h/g5pca647Eabb+6viK4dRpiMOlZFS4gsbukTbHo+ppdKx4yr+/0m2JnpeAIrSw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        function updateCheck(el) {
            var input = $(el).find('input');
            if (input.val() == '1') {
                input.val('0');
                displayNoFounder();
            } else {
                input.val('1');
                displayFounder();
            }
        }

        function displayFounder() {
            $('.founder').slideDown();
            $('.nofounder').slideUp();
        }

        function displayNoFounder() {
            $('.founder').slideUp();
            $('.nofounder').slideDown();
        }


        $(document).ready(function() {
            $('#reasons').selectize({
                placeholder: "What are you looking forward to?",
                plugins: ["remove_button", "restore_on_backspace"],
            });
        })
    </script>
@endsection
