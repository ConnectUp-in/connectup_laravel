@php
    
    $page['title'] = 'Followers | ' . $user->name . ' | ConnectUp';
    
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
                        <p class="section-pretitle">My Profile</p>
                        <!-- /SECTION PRETITLE -->

                        <!-- SECTION TITLE -->
                        <h2 class="section-title">
                            Followers
                            <span class="highlighted">
                                {{ $user->followers->count() }}
                            </span>
                        </h2>
                        <!-- /SECTION TITLE -->
                    </div>
                    <!-- /SECTION HEADER INFO -->

                    <!-- SECTION HEADER ACTIONS -->
                    <div class="section-header-actions">
                        <!-- SECTION HEADER ACTION -->
                        <p class="section-header-action">Find Friends</p>
                        <!-- /SECTION HEADER ACTION -->

                        <!-- SECTION HEADER ACTION -->
                        <p class="section-header-action">Settings</p>
                        <!-- /SECTION HEADER ACTION -->
                    </div>
                    <!-- /SECTION HEADER ACTIONS -->
                </div>
                <!-- /SECTION HEADER -->

                <!-- NOTIFICATION BOX LIST -->
                <div class="notification-box-list">

                    @forelse($user->followers as $follower)
                        @php
                            $user = $follower->user;
                        @endphp
                        <!-- NOTIFICATION BOX -->
                        <div class="notification-box">
                            <!-- USER STATUS -->
                            <div class="user-status request">
                                <!-- USER STATUS AVATAR -->
                                <a class="user-status-avatar" href="{{ route('user', $user->username) }}">
                                    <!-- USER AVATAR -->
                                    <div class="user-avatar small no-outline">
                                        <!-- USER AVATAR CONTENT -->
                                        <div class="user-avatar-content">
                                            <!-- HEXAGON -->
                                            <div class="hexagon-image-30-32" data-src="{{ $user->profile_photo_path }}">
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
                                <p class="user-status-title">
                                    <a class="bold" href="{{ route('user', $user->username) }}">{{ $user->name }}</a>
                                </p>
                                <!-- /USER STATUS TITLE -->

                                <!-- USER STATUS TEXT -->
                                <p class="user-status-text small-space">
                                    Followed you {{ $follower->created_at->diffForHumans() }}
                                </p>
                                <!-- /USER STATUS TEXT -->

                                <!-- ACTION REQUEST LIST -->
                                <div class="action-request-list">
                                    <!-- ACTION REQUEST -->
                                    <p class="action-request accept with-text non-functional">
                                        <!-- ACTION REQUEST ICON -->
                                        <svg class="action-request-icon icon-send-message">
                                            <use xlink:href="#svg-send-message"></use>
                                        </svg>
                                        <!-- /ACTION REQUEST ICON -->

                                        <!-- ACTION REQUEST TEXT -->
                                        <span class="action-request-text">Message</span>
                                        <!-- /ACTION REQUEST TEXT -->
                                    </p>
                                    <!-- /ACTION REQUEST -->

                                </div>
                                <!-- ACTION REQUEST LIST -->
                            </div>
                            <!-- /USER STATUS -->
                        </div>
                        <!-- /NOTIFICATION BOX -->

                    @empty
                    @endforelse
                </div>
                <!-- /NOTIFICATION BOX LIST -->
            </div>
            <!-- /GRID COLUMN -->
        </div>
        <!-- /GRID -->
    </div>
    <!-- /CONTENT GRID -->
@endsection

@push('styles')
    <style>
        .form-input.social-input .social-link {
            height: calc(100% - 8px);
        }
    </style>
@endpush


@push('scripts')
    <script>
        function updateSocials() {
            var socials = {};
            $('.social-input').each(function() {
                var social = $(this).find('input').attr('name');
                var value = $(this).find('input').val();
                if (value) {
                    socials[social] = value;
                }
            });
            $('#socials').val(JSON.stringify(socials));
            console.log(socials);
        }
    </script>
@endpush
