@php
    $page['title'] = 'Join Community | ConnectUp';
@endphp


@extends('layouts/auth')

@section('styles')
    <!-- toasterjs css from cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

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
        .toast-warning {
            background-color: #e6d21e;
            font-family: 'RAJDHANI';
            color: #000;
        }

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
            overflow-y: auto;
            overflow-x: hidden;

        }

        .hidden {
            display: none;
        }

        .overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.3);
            z-index: 0;
        }

        @media screen and (max-width: 1365px) {
            .overlay {
                display: none;
            }
        }
    </style>
@endsection


@section('content')
    <!-- LANDING -->
    <div class="landing member">

        {{-- overlay --}}
        <div class="overlay"></div>

        <!-- LANDING INFO -->
        <div class="landing-info">
            <!-- LOGO -->
            <div class="logo">
                <img src="/assets/template/img/landing/logo.png" alt="logo" width="70">
            </div>
            <!-- /LOGO -->

            <!-- LANDING INFO PRETITLE -->
            <h2 class="landing-info-pretitle">Join ConnectUp Community as</h2>
            <!-- /LANDING INFO PRETITLE -->

            <!-- LANDING INFO TITLE -->
            <h1 class="landing-info-title">Member</h1>
            <!-- /LANDING INFO TITLE -->

            <!-- LANDING INFO TEXT -->
            <p class="landing-info-text">ConnectUp Community is a Platform that brings together startups, entrepreneurs,
                investors, and friends to come together to share ideas, and discuss opportunities for collaboration.</p>
            <!-- /LANDING INFO TEXT -->

            <!-- TAB SWITCH -->
            <div class="tab-switch">
                <!-- TAB SWITCH BUTTON -->
                <p class="tab-switch-button login-register-form-trigger">Member</p>
                <!-- /TAB SWITCH BUTTON -->

                <!-- TAB SWITCH BUTTON -->
                <p class="tab-switch-button hidden login-register-form-trigger">Mentor</p>
                {{-- <a href="{{ route('join.mentor') }}" class=" tab-switch-button ">Mentor</a> --}}
                <p onclick="toastr.warning('Launching Soon', 'Mentor Registration');" class=" tab-switch-button ">Mentor</p>



                <!-- /TAB SWITCH BUTTON -->
            </div>
            <!-- /TAB SWITCH -->
        </div>
        <!-- /LANDING INFO -->

        <!-- LANDING FORM -->
        <div class="landing-form">


            @if (Auth::check())

                @if ($isAlreadyMember)
                    <!-- FORM BOX -->
                    <div class="form-box login-register-form-element" id="confetti">

                        {{-- <!-- FORM BOX TITLE -->
                        <h2 class="form-box-title">Hurray!!!</h2>
                        <!-- /FORM BOX TITLE --> --}}

                        @php
                            $jsons = [
                                [
                                    'src' => 'https://assets4.lottiefiles.com/packages/lf20_xb2j7dcm.json',
                                    'width' => '80%',
                                ],
                                [
                                    'src' => 'https://assets4.lottiefiles.com/packages/lf20_pJo4Hp.json',
                                    'width' => '70%',
                                ],
                            ];
                            
                            $json = $jsons[array_rand($jsons)];
                            $json = [
                                'src' => 'https://assets4.lottiefiles.com/packages/lf20_xb2j7dcm.json',
                                'width' => '80%',
                            ];
                        @endphp
                        {{-- <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
                        <lottie-player src="{{ $json['src'] }}" background="transparent" speed="1"
                            style="width: {{ $json['width'] }}; height: auto;margin:auto" loop autoplay></lottie-player> --}}

                        <div style="width:70%;margin:auto">

                            {{-- <img src="/assets/defaults/cards/result.png" class="js-tilt w-100" alt=""> --}}

                            <canvas class="js-tilt w-100" id="canvas"></canvas>
                        </div>

                        <h2 class="form-box-title">
                            <span style="font-size:1.2em;line-height:2.3em;">Congratulations!!!</span>
                            <br>
                            You are now a member of ConnectUp Community!
                        </h2>



                    </div>
                    <!-- /FORM BOX -->
                @else
                    <!-- FORM BOX -->
                    <div class="form-box
                            login-register-form-element">
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
                                        <input type="text" id="contact" name="contact" required>
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
                                        <select id="reasons" name="reasons[]" required multiple>
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
                @endif
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
                    <p class="lined-text" style="margin-bottom:20px">Account Login</p>





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


    <script src="https://cdn.jsdelivr.net/npm/party-js@latest/bundle/party.min.js"></script>
    <script>
        toastr.options = {
            "closeButton": false,
            "debug": false,
            "newestOnTop": true,
            "progressBar": true,
            "positionClass": "toast-bottom-right",
            "preventDuplicates": true,
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut",


        }
        $(document).ready(function() {

            function confetti() {

                party.confetti(document.getElementById('confetti'), {
                    count: party.variation.range(50, 170)
                });
            }
            confetti();
            // setInterval(() => {
            //         confetti()
            //     },
            //     5000);
        });
    </script>
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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/tilt.js/1.0.3/tilt.jquery.min.js"
        integrity="sha512-14AZ/DxUrlF26z6v7egDkpJHKyJRn/7ue2BgpWZ/fmqrqVzf4PrQnToy99sHmKwzKev/VZ1tjPxusuTV/n8CcQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>


    @if (Auth::check())
        <script src="https://cdnjs.cloudflare.com/ajax/libs/qrious/4.0.2/qrious.min.js"></script>
        <script>
            $('.js-tilt').tilt({
                scale: 1.3,
                speed: 600,
                glare: true,
            })


            //  Initializing variables
            var defaultCertPNG = "/assets/defaults/cards/blank.png";
            var url = "{{ route('user', Auth::user()->username) ?? '' }}";
            var name = "{{ Auth::user()->name ?? '' }}";
            var username = "{{ Auth::user()->username ?? '' }}";
            var profile = "{{ Auth::user()->profile_photo_path ?? '' }}";


            // Defining Canvas
            var canvas = document.getElementById("canvas");
            var ctx = canvas.getContext("2d");
            var frame = new Image();
            frame.crossOrigin = "anonymous"

            // On Document Load
            document.addEventListener("DOMContentLoaded", function() {
                // Creating Image from PNG file
                frame.src = defaultCertPNG;
                var dimentionRatio = frame.width / frame.height;

                var qrImage = new Image();
                var qrcode = new QRious({
                    element: qrImage,
                    background: '#ffffff',
                    backgroundAlpha: 1,
                    foreground: '#0d1117',
                    foregroundAlpha: 1,
                    level: 'H',
                    padding: 0,
                    mime: 'image/png',
                    value: url,
                    size: 200,
                });
                // When Image Loads Successfully
                frame.onload = function() {
                    // Setting Canvas Size
                    canvas.width = frame.width;
                    canvas.height = frame.height;

                    // add profile image
                    var profileImage = new Image();
                    profileImage.src = profile;
                    profileImage.onload = function() {
                        var profileImageWidth = 275;
                        var profileImageHeight = 275;
                        var profileImageX = 260;
                        var profileImageY = 200;


                        ctx.drawImage(profileImage, profileImageX, profileImageY, profileImageWidth,
                            profileImageHeight);

                        ctx.drawImage(frame, 0, 0, canvas.width, canvas.height);
                        // baseline to center
                        ctx.textBaseline = "middle";
                        ctx.drawImage(qrImage, (frame.width / 2) - 100, 650, 200, 200);

                        // Adding Text
                        ctx.font = "bold 60px 'Rajdhani'";
                        ctx.fillStyle = "#0d1117";
                        ctx.textAlign = "center";
                        ctx.fillText(name, frame.width / 2, 550);

                        ctx.font = "bold 40px 'Rajdhani'";
                        ctx.fillStyle = "#0d1117";
                        ctx.fillText('@' + username, frame.width / 2, 600);
                    }
                };
            });

            canvas.addEventListener("click", function() {
                var dataURL = canvas.toDataURL("image/png");
                var link = document.createElement('a');
                link.download = 'ConnectUp_ConnectCard.png';
                link.href = dataURL;
                link.click();
            });
        </script>
    @endif
@endsection
