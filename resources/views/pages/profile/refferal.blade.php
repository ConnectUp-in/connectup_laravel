@php
$page['title'] = 'Refferals | ' . $user->name . ' | ConnectUp';

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

                {{-- <!-- SECTION HEADER -->
                <div class="section-header">
                    <!-- SECTION HEADER INFO -->
                    <div class="section-header-info">
                        <!-- SECTION PRETITLE -->
                        <p class="section-pretitle">My Profile</p>
                        <!-- /SECTION PRETITLE -->

                        <!-- SECTION TITLE -->
                        <h2 class="section-title">Profile Info</h2>
                        <!-- /SECTION TITLE -->
                    </div>
                    <!-- /SECTION HEADER INFO -->


                    <button class="button primary" style="padding:0 30px; width:fit-content">Save Changes!</button>
                </div>
                <!-- /SECTION HEADER --> --}}

                <!-- GRID COLUMN -->
                <div class="grid-column">
                    <!-- GRID -->
                    <div class="grid grid-3-9 centered">

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
                        <div class="upload-box popup-cover-upload-trigger">
                            <!-- UPLOAD BOX ICON -->
                            <svg class="upload-box-icon icon-photos">
                                <use xlink:href="#svg-photos"></use>
                            </svg>
                            <!-- /UPLOAD BOX ICON -->

                            <!-- UPLOAD BOX TITLE -->
                            <p class="upload-box-title">Change Cover</p>
                            <!-- /UPLOAD BOX TITLE -->

                            <!-- UPLOAD BOX TEXT -->
                            <p class="upload-box-text">1184x300px size minimum</p>
                            <!-- /UPLOAD BOX TEXT -->
                        </div>
                        <!-- /UPLOAD BOX -->
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
                                        <a class="user-status-avatar" href="profile-timeline.html">
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
                                                href="profile-timeline.html">{{ $user->name }}</a> joined using your
                                            Refferal</p>
                                        <!-- /USER STATUS TITLE -->

                                        <!-- USER STATUS TIMESTAMP -->
                                        <p class="user-status-timestamp">{{ $user->created_at->diffForHumans() }}</p>
                                        <!-- /USER STATUS TIMESTAMP -->
                                    </div>
                                    <!-- /USER STATUS -->
                                @empty
                                    <p>No Refferals</p>
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
