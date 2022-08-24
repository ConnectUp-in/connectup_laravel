@php

$socials = ['github', 'linkedin', 'facebook', 'instagram', 'twitter', 'youtube'];

// {"github":"https:\/\/github.com\/meinhoonharsh","linkedin":"https:\/\/www.linkedin.com\/in\/meinhoonharsh","facebook":"https:\/\/www.facebook.com\/meinhoonharsh","instagram":"https:\/\/www.instagram.com\/meinhoonharsh","twitter":"https:\/\/twitter.com\/meinhoonharsh","youtube":"https:\/\/www.youtube.com\/c\/harshvishwakarma7"}

// Group socials in pair of two
$socials = array_chunk($socials, 2);

$page['title'] = 'Edit Socials | ' . $startup->name . ' | ConnectUp';

@endphp
@extends('layouts.app')



@section('content')
    <!-- CONTENT GRID -->
    <div class="content-grid">

        <!-- GRID -->
        <div class="grid grid-3-9 small-space">
            @grid('updatestartup')

            <!-- GRID COLUMN -->
            <div class="account-hub-content">

                <form action="{{ route('startup.update', $startup->id) }}" method="POST" enctype="multipart/form-data">
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
                                                        value="{{ $startup->socials[$social] ?? '' }}"
                                                        onchange="updateSocials()">
                                                </div>
                                                <!-- /FORM INPUT -->
                                            </div>
                                            <!-- /FORM ITEM -->
                                        @endforeach

                                    </div>
                                    <!-- /FORM ROW -->
                                @endforeach


                                <!-- FORM ROW -->
                                <div class="form-row split">
                                    <!-- FORM ITEM -->
                                    <div class="form-item">
                                        <!-- FORM SELECT -->
                                        <div class="form-select">

                                            <span class="form-select-title">Stage:</span>
                                            {{-- <label for="profile-city">Institute or College</label> --}}
                                            {{-- <input type="text" list="colleges-list"> --}}
                                            <select id="stage" name="stage" class="single-select">
                                                @foreach ($stages as $stage)
                                                    <option value="{{ $stage->id }}"
                                                        {{ $startup->stage == $stage->id ? 'selected' : '' }}>
                                                        {{ $stage->name }}
                                                    </option>
                                                @endforeach

                                            </select>
                                        </div>
                                        <!-- /FORM SELECT -->
                                    </div>
                                    <!-- /FORM ITEM -->
                                    <!-- FORM ITEM -->
                                    <div class="form-item">

                                        <span class="form-select-title">Category:</span>
                                        <!-- FORM SELECT -->
                                        <div class="form-select">
                                            {{-- <label for="profile-city">Institute or College</label> --}}
                                            {{-- <input type="text" list="colleges-list"> --}}
                                            <select id="category" name="category" class="single-select">
                                                @foreach ($categories as $category)
                                                    <option value="{{ $category->id }}"
                                                        {{ $startup->category == $category->id ? 'selected' : '' }}>
                                                        {{ $category->name }}
                                                    </option>
                                                @endforeach

                                            </select>
                                            <!-- FORM SELECT ICON -->
                                            <svg class="form-select-icon icon-small-arrow">
                                                <use xlink:href="#svg-small-arrow"></use>
                                            </svg>
                                            <!-- /FORM SELECT ICON -->
                                        </div>
                                        <!-- /FORM SELECT -->
                                    </div>
                                    <!-- /FORM ITEM -->


                                </div>
                                <!-- /FORM ROW -->

                                <!-- FORM ROW -->
                                <div class="form-row ">

                                    <!-- FORM ITEM -->
                                    <div class="form-item">

                                        <span class="form-select-title">Interests:</span>
                                        <!-- FORM INPUT -->
                                        <div class="form-input small">
                                            <label for="interests">Interests</label>
                                            <select id="interests" class="multi-select" name="interests[]" multiple>
                                                @foreach ($interests as $interest)
                                                    <option value="{{ $interest->id }}"
                                                        @if (in_array($interest->id, $startup->interests ?? [])) selected @endif>
                                                        {{ $interest->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <!-- /FORM INPUT -->
                                    </div>
                                    <!-- /FORM ITEM -->
                                </div>
                                <!-- /FORM ROW -->

                                <!-- FORM ROW -->
                                <div class="form-row ">

                                    <!-- FORM ITEM -->
                                    <div class="form-item">

                                        <span class="form-select-title">Objectives/Reasons:</span>
                                        <!-- FORM INPUT -->
                                        <div class="form-input small">
                                            <label for="objectives">Objectives</label>
                                            <select id="objectives" class="multi-select" name="objectives[]" multiple>
                                                @foreach ($objectives as $objective)
                                                    <option value="{{ $objective->id }}"
                                                        @if (in_array($objective->id, $startup->objectives ?? [])) selected @endif>
                                                        {{ $objective->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <!-- /FORM INPUT -->
                                    </div>
                                    <!-- /FORM ITEM -->
                                </div>
                                <!-- /FORM ROW -->






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

        .form-select-title {
            font-size: 0.875rem;
            font-weight: 500;
            color: #fffc;
            margin-bottom: 0.5rem;
            margin-left: 10px
        }
    </style>
@endpush
@push('styles')
    <style>
        .form-input.social-input .social-link {
            height: calc(100% - 8px);
        }
    </style>
@endpush


@push('scripts')
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
        var allgood = [true, true]

        $(document).ready(function() {
            $('.single-select').selectize({
                placeholder: "Select...",
            });
            $('.multi-select').selectize({
                placeholder: "Select your Interests",
                plugins: ["remove_button", "restore_on_backspace"],
            });
        });
    </script>
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
