@php
    
    $page['title'] = 'Followings | ' . $user->name . ' | ConnectUp';
    
@endphp
@extends('layouts.app')

@push('styles')
    <style>
        .action-request.with-text {
            padding: 0 25px;
            color: #fff;
        }

        .mini-loader {
            border: 2px solid #f3f3f355;
            /* Light grey */
            border-top: 2px solid #fff;
            /* Blue */
            border-radius: 50%;
            width: 100%;
            aspect-ratio: 1/1;
            min-width: 15px;
            min-height: 15px;
            animation: spin 2s linear infinite;
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }
    </style>
@endpush


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
                            Following
                            <span class="highlighted">
                                {{ $user->following->count() }}
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

                    @forelse($user->following as $following)
                        @php
                            $user = $following->user;
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
                                    Followed {{ $following->created_at->diffForHumans() }}
                                </p>
                                <!-- /USER STATUS TEXT -->

                                <!-- ACTION REQUEST LIST -->
                                <div class="action-request-list">

                                    <!-- ACTION REQUEST -->
                                    <div class="action-request button secondary with-text"
                                        onclick="follow('{{ $following->followed_id }}')">
                                        UnFollow
                                    </div>
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

@push('scripts')
    <script>
        var loaderHTML = `<div class="mini-loader"></div>`;

        function follow(id) {
            // select clicked button using target
            var button = event.target;

            button.innerHTML = loaderHTML;
            // post request ajax
            $.ajax({
                url: "{{ route('follow') }}",
                type: 'POST',
                data: {
                    id: id,
                    type: 'user'
                },
                success: function(data) {
                    // console.log(data);
                    if (!data.data) {
                        button.innerHTML = 'Follow';
                        button.classList.remove('secondary');
                        button.classList.add('primary');
                        // document.querySelector('#followers').innerHTML -= 1;
                    } else {
                        button.innerHTML = 'UnFollow';
                        button.classList.remove('primary');
                        button.classList.add('secondary');
                        // document.querySelector('#followers').innerHTML = parseInt(document.querySelector(
                        //     '#followers').innerHTML) + 1;
                    }
                }
            });

        }
    </script>
@endpush
