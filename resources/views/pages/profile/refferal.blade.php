@php
$page['title'] = 'Refferals | ' . $user->name . ' | ConnectUp';
$message = [
    'content' => 'Hey, I am now a Member at ConnectUp. Join now and get lots of early bird benefits.',
    'code' => 'Here is my Refferal Code: ' . $user->invite_refferal,
    // 'link' => 'https://connectup.in/login?refferal=' . $user->invite_refferal,
    'link' => 'https://connectup.in/login',
];
@endphp


@extends('layouts.app')

@section('content')
    <!-- CONTENT GRID -->
    <div class="content-grid">

        <!-- GRID -->
        <div class="grid grid-3-9 small-space">
            @grid('useraccount')

            <!-- GRID COLUMN -->
            <div class="account-hub-content">

                <!-- SECTION HEADER -->
                <div class="section-header">
                    <!-- SECTION HEADER INFO -->
                    <div class="section-header-info">
                        <!-- SECTION PRETITLE -->
                        <p class="section-pretitle">Refferals</p>
                        <!-- /SECTION PRETITLE -->

                        <!-- SECTION TITLE -->
                        <h2 class="section-title">Your Refferals</h2>
                        <!-- /SECTION TITLE -->
                    </div>
                    <!-- /SECTION HEADER INFO -->

                    <!-- SECTION HEADER INFO -->
                    <div class="section-header-info  align-right">
                        <!-- SECTION PRETITLE -->
                        <p class="section-pretitle">Connect Coins</p>
                        <!-- /SECTION PRETITLE -->

                        <!-- SECTION TITLE -->
                        <h2 class="section-title">{{ $refferals->count() * 10 }} CC</h2>
                        <!-- /SECTION TITLE -->
                    </div>
                    <!-- /SECTION HEADER INFO -->
                </div>
                <!-- /SECTION HEADER -->

                <!-- GRID COLUMN -->
                <div class="grid-column">
                    <!-- GRID -->
                    <div class="grid grid-3-6-3 centered">

                        <!-- UPLOAD BOX -->
                        <div class="upload-box " onclick="copyCode('{{ $user->invite_refferal }}')">
                            <!-- UPLOAD BOX ICON -->
                            <svg class="upload-box-icon icon-share">
                                <use xlink:href="#svg-share"></use>
                            </svg>
                            <!-- /UPLOAD BOX ICON -->

                            <!-- UPLOAD BOX TITLE -->
                            <p class="upload-box-title refferal_code" id="refferal_code">{{ $user->invite_refferal }}</p>
                            <!-- /UPLOAD BOX TITLE -->

                            <!-- UPLOAD BOX TEXT -->
                            <p class="upload-box-text">Your Refferal Code</p>
                            <!-- /UPLOAD BOX TEXT -->
                        </div>
                        <!-- /UPLOAD BOX -->

                        <!-- UPLOAD BOX -->
                        <div class="upload-box nohover">

                            <div class="social-refferal">
                                <span>
                                    Share your Refferal Code
                                </span>

                            </div>

                            <!-- REACTION OPTIONS -->
                            <div class=" share-options nobg ">

                                {{-- Copy Link, Whatsapp, Linkedin, Twitter --}}

                                <div class="reaction-option text-tooltip-tft" data-title="Whatsapp">

                                    <a
                                        href="whatsapp://send?text={{ $message['content'] . ' ' . $message['code'] . ' ' . $message['link'] }}">
                                        <!-- REACTION OPTION
                                                                                                                                                                                                                                                                                                                    IMAGE -->
                                        <img class="reaction-option-image"
                                            src="https://cdn2.iconfinder.com/data/icons/social-messaging-ui-color-shapes-2-free/128/social-whatsapp-circle-512.png"
                                            alt="reaction-like">
                                        <!-- /REACTION OPTION IMAGE -->
                                    </a>
                                </div>

                                {{-- Linkedin share option --}}
                                <div class="reaction-option text-tooltip-tft" data-title="Linkedin">
                                    <a
                                        href="https://www.linkedin.com/shareArticle?mini=true&url={{ $message['link'] }}&title={{ $message['content'] . ' ' . $message['code'] }}&source=https://connectup.in">
                                        <!-- REACTION OPTION
                                                                                                                                                                                                                                                                                                                    IMAGE -->
                                        <img class="reaction-option-image"
                                            src="https://cdn2.iconfinder.com/data/icons/social-messaging-ui-color-shapes-2-free/128/social-linkedin-circle-512.png"
                                            alt="reaction-like">
                                        <!-- /REACTION OPTION IMAGE -->
                                    </a>
                                </div>

                                {{-- Twitter share option --}}
                                <div class="reaction-option text-tooltip-tft" data-title="Twitter">
                                    <a
                                        href="https://twitter.com/intent/tweet?text=https://connectup.in/post/asdf&via=connectup">
                                        <!-- REACTION OPTION
                                                                                                                                                                                                                                                                                                                    IMAGE -->
                                        <img class="reaction-option-image"
                                            src="https://cdn2.iconfinder.com/data/icons/social-messaging-ui-color-shapes-2-free/128/social-twitter-circle-512.png"
                                            alt="reaction-like">
                                        <!-- /REACTION OPTION IMAGE -->
                                    </a>
                                </div>

                                {{-- Copy Link share option --}}
                                <div class="reaction-option text-tooltip-tft" data-title="Copy Link">
                                    <a
                                        onclick="copyCode('{{ $message['content'] . ' ' . $message['code'] . ' ' . $message['link'] }}');toast.success('Copied to Clipboard')">

                                        <!-- REACTION OPTION
                                                                                                                                                                                                                                                                                                                    IMAGE -->
                                        <img class="reaction-option-image"
                                            src="https://cdn3.iconfinder.com/data/icons/text-editing-2/100/Artboard_12-512.png"
                                            alt="reaction-like">
                                        <!-- /REACTION OPTION IMAGE -->
                                    </a>
                                </div>

                            </div>
                        </div>
                        <!-- /UPLOAD BOX -->

                        <div class="upload-box nohover">
                            {{-- <!-- UPLOAD BOX ICON -->
                            <svg class="upload-box-icon icon-share">
                                <use xlink:href="#svg-members"></use>
                            </svg>
                            <!-- /UPLOAD BOX ICON --> --}}
                            <p class="upload-box-text">Total Members till date</p>

                            <!-- UPLOAD BOX TITLE -->
                            <p class="upload-box-title refferal_count" id="refferal_code">{{ $refferals->count() }}</p>
                            <!-- /UPLOAD BOX TITLE -->

                            <!-- UPLOAD BOX TEXT -->
                            <p class="upload-box-text">joined using your Refferal </p>
                            <!-- /UPLOAD BOX TEXT -->
                        </div>
                    </div>
                    <!-- /GRID -->


                    <!-- WIDGET BOX -->
                    <div class="widget-box">
                        <!-- WIDGET BOX SETTINGS -->
                        <div class="widget-box-settings">
                            <!-- POST SETTINGS WRAP -->
                            <div class="post-settings-wrap">
                                <!-- POST SETTINGS -->
                                <div class="post-settings widget-box-post-settings-dropdown-trigger">
                                    <!-- POST SETTINGS ICON -->
                                    <svg class="post-settings-icon icon-more-dots">
                                        <use xlink:href="#svg-more-dots"></use>
                                    </svg>
                                    <!-- /POST SETTINGS ICON -->
                                </div>
                                <!-- /POST SETTINGS -->

                                <!-- SIMPLE DROPDOWN -->
                                <div class="simple-dropdown widget-box-post-settings-dropdown">
                                    <!-- SIMPLE DROPDOWN LINK -->
                                    <p class="simple-dropdown-link">Widget Settings</p>
                                    <!-- /SIMPLE DROPDOWN LINK -->
                                </div>
                                <!-- /SIMPLE DROPDOWN -->
                            </div>
                            <!-- /POST SETTINGS WRAP -->
                        </div>
                        <!-- /WIDGET BOX SETTINGS -->

                        <!-- WIDGET BOX TITLE -->
                        <p class="widget-box-title">Your Refferals</p>
                        <!-- /WIDGET BOX TITLE -->

                        <!-- WIDGET BOX CONTENT -->
                        <div class="widget-box-content">
                            <!-- USER STATUS LIST -->
                            <div class="user-status-list">
                                @forelse ($refferals as $user)
                                    <!-- USER STATUS -->
                                    <div class="user-status">
                                        <!-- USER STATUS AVATAR -->
                                        <a class="user-status-avatar" href="{{ route('user', $user->username) }}">
                                            <!-- USER AVATAR -->
                                            <div class="user-avatar small no-outline">
                                                <!-- USER AVATAR CONTENT -->
                                                <div class="user-avatar-content">
                                                    <!-- HEXAGON -->
                                                    <div class="hexagon-image-30-32"
                                                        data-src="{{ $user->profile_photo_path }}">
                                                    </div>
                                                    <!-- /HEXAGON -->
                                                </div>
                                                <!-- /USER AVATAR CONTENT -->

                                                <!-- USER AVATAR PROGRESS -->
                                                <div class="user-avatar-progress">
                                                    <!-- HEXAGON -->
                                                    <div class="hexagon-progress-40-44"></div>
                                                    <!-- /HEXAGON -->
                                                </div>
                                                <!-- /USER AVATAR PROGRESS -->

                                                <!-- USER AVATAR PROGRESS BORDER -->
                                                <div class="user-avatar-progress-border">
                                                    <!-- HEXAGON -->
                                                    <div class="hexagon-border-40-44"></div>
                                                    <!-- /HEXAGON -->
                                                </div>
                                                <!-- /USER AVATAR PROGRESS BORDER -->

                                            </div>
                                            <!-- /USER AVATAR -->
                                        </a>
                                        <!-- /USER STATUS AVATAR -->

                                        <!-- USER STATUS TITLE -->
                                        <p class="user-status-title"><a class="bold"
                                                href="{{ route('user', $user->username) }}">{{ $user->name }}</a> joined
                                            using your
                                            Refferal</p>
                                        <!-- /USER STATUS TITLE -->

                                        <!-- USER STATUS TIMESTAMP -->
                                        <p class="user-status-timestamp">{{ $user->created_at->diffForHumans() }}</p>
                                        <!-- /USER STATUS TIMESTAMP -->
                                    </div>
                                    <!-- /USER STATUS -->
                                @empty
                                    <p>No one joined with your Refferal yet</p>
                                @endforelse
                            </div>
                            <!-- /USER STATUS LIST -->
                        </div>
                        <!-- WIDGET BOX CONTENT -->
                    </div>
                    <!-- /WIDGET BOX -->

                </div>
                <!-- /GRID COLUMN -->
            </div>
            <!-- /GRID COLUMN -->
        </div>
        <!-- /GRID -->
    </div>
    <!-- /CONTENT GRID -->
@endsection

@push('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.13.6/css/selectize.css"
        integrity="sha512-6skR4yyaANUKXypVS+nB+HMmq8Xd17CSwFsBEHCRaa3UicPlksbwVtBTZl13Fea6zqsnnmqc7fRH97/M6JcwCA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


    <style>
        .refferal_code {
            font-size: 1.6em !important;
        }

        .refferal_count {
            font-size: 3em !important;
            margin-top: 2px !important;
        }

        .nohover:hover {
            transform: translateY(0px);
        }

        .nobg {
            background: transparent;
        }

        .social-refferal {
            color: #fff;
            font-size: 1.2em;
            font-weight: bold;
            font-family: Rajdhani;
        }

        .align-right {
            text-align: right;
        }
    </style>
@endpush

@section('scripts')
@endsection

@push('scripts')
    <script>
        function copyCode(code) {
            navigator.clipboard.writeText(code)
            // notify using toastr
            toastr.success('Copied to clipboard')
        }
    </script>
@endpush
