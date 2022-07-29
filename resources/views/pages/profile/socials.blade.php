@php

$socials = ['github', 'linkedin', 'facebook', 'instagram', 'twitter', 'youtube'];

// {"github":"https:\/\/github.com\/meinhoonharsh","linkedin":"https:\/\/www.linkedin.com\/in\/meinhoonharsh","facebook":"https:\/\/www.facebook.com\/meinhoonharsh","instagram":"https:\/\/www.instagram.com\/meinhoonharsh","twitter":"https:\/\/twitter.com\/meinhoonharsh","youtube":"https:\/\/www.youtube.com\/c\/harshvishwakarma7"}

// Group socials in pair of two
$socials = array_chunk($socials, 2);

$page['title'] = 'Edit Socials | ' . $user->name . ' | ConnectUp';

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

                <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" id="socials" name="socials" value="">

                    <!-- SECTION HEADER -->
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
                    <!-- /SECTION HEADER -->

                    <!-- GRID COLUMN -->
                    <div class="grid-column">
                        <!-- WIDGET BOX -->
                        <div class="widget-box">
                            <!-- WIDGET BOX TITLE -->
                            <p class="widget-box-title">Your Social Accounts</p>
                            <!-- /WIDGET BOX TITLE -->

                            <!-- WIDGET BOX CONTENT -->
                            <div class="widget-box-content">

                                @foreach ($socials as $pair)
                                    <!-- FORM ROW -->
                                    <div class="form-row split">

                                        @foreach ($pair as $social)
                                            <!-- FORM ITEM -->
                                            <div class="form-item">
                                                <!-- FORM INPUT -->
                                                <div class="form-input social-input active">
                                                    <!-- SOCIAL LINK -->
                                                    <div class="social-link no-hover {{ $social }}">
                                                        <!-- ICON FACEBOOK -->
                                                        <svg class="icon-icon">
                                                            <use xlink:href="#svg-{{ $social }}"></use>
                                                        </svg>
                                                        <!-- /ICON FACEBOOK -->
                                                    </div>
                                                    <!-- /SOCIAL LINK -->

                                                    <label for="social-account-facebook">{{ ucfirst($social) }}
                                                        Profile Link</label>
                                                    <input type="text" id="social-{{ $social }}"
                                                        name="{{ $social }}"
                                                        value="{{ $user->socials[$social] ?? '' }}"
                                                        onchange="updateSocials()">
                                                </div>
                                                <!-- /FORM INPUT -->
                                            </div>
                                            <!-- /FORM ITEM -->
                                        @endforeach

                                    </div>
                                    <!-- /FORM ROW -->
                                @endforeach
                            </div>
                            <!-- WIDGET BOX CONTENT -->
                        </div>
                        <!-- /WIDGET BOX -->
                    </div>
                    <!-- /GRID COLUMN -->

                </form>
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
    {{-- import jquery from cdn --}}
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

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
