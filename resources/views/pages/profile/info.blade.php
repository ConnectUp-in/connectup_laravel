@php
$page['title'] = 'Info | ' . $user->name . ' | ConnectUp';

@endphp


@extends('layouts.app')

@section('content')
    <!-- CONTENT GRID -->
    <div class="content-grid">
        {{-- <!-- SECTION BANNER -->
        <div class="section-banner">
            <!-- SECTION BANNER ICON -->
            <img class="section-banner-icon" src="/assets/template/img/banner/accounthub-icon.png" alt="accounthub-icon">
            <!-- /SECTION BANNER ICON -->

            <!-- SECTION BANNER TITLE -->
            <p class="section-banner-title">Account Hub</p>
            <!-- /SECTION BANNER TITLE -->

            <!-- SECTION BANNER TEXT -->
            <p class="section-banner-text">Profile info, messages, settings and much more!</p>
            <!-- /SECTION BANNER TEXT -->
        </div>
        <!-- /SECTION BANNER --> --}}

        <!-- GRID -->
        <div class="grid grid-3-9 small-space">
            @grid('useraccount')

            <!-- GRID COLUMN -->
            <div class="account-hub-content">

                <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
                    @csrf

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
                        <!-- GRID -->
                        <div class="grid grid-3-3-3 centered">
                            <!-- USER PREVIEW -->
                            <div class="user-preview small fixed-height">
                                <!-- USER PREVIEW COVER -->
                                <figure class="user-preview-cover liquid">
                                    <img src="{{ $user->cover_photo_path }}" alt="cover-01">
                                </figure>
                                <!-- /USER PREVIEW COVER -->

                                <!-- USER PREVIEW INFO -->
                                <div class="user-preview-info">
                                    <!-- USER SHORT DESCRIPTION -->
                                    <div class="user-short-description small">
                                        <!-- USER SHORT DESCRIPTION AVATAR -->
                                        <div class="user-short-description-avatar user-avatar">
                                            <!-- USER AVATAR BORDER -->
                                            <div class="user-avatar-border">
                                                <!-- HEXAGON -->
                                                <div class="hexagon-100-110"></div>
                                                <!-- /HEXAGON -->
                                            </div>
                                            <!-- /USER AVATAR BORDER -->

                                            <!-- USER AVATAR CONTENT -->
                                            <div class="user-avatar-content">
                                                <!-- HEXAGON -->
                                                <div class="hexagon-image-68-74" data-src="{{ $user->profile_photo_path }}">
                                                </div>
                                                <!-- /HEXAGON -->
                                            </div>
                                            <!-- /USER AVATAR CONTENT -->

                                            <!-- USER AVATAR PROGRESS -->
                                            <div class="user-avatar-progress">
                                                <!-- HEXAGON -->
                                                <div class="hexagon-progress-84-92"></div>
                                                <!-- /HEXAGON -->
                                            </div>
                                            <!-- /USER AVATAR PROGRESS -->

                                            <!-- USER AVATAR PROGRESS BORDER -->
                                            <div class="user-avatar-progress-border">
                                                <!-- HEXAGON -->
                                                <div class="hexagon-border-84-92"></div>
                                                <!-- /HEXAGON -->
                                            </div>
                                            <!-- /USER AVATAR PROGRESS BORDER -->

                                        </div>
                                        <!-- /USER SHORT DESCRIPTION AVATAR -->
                                    </div>
                                    <!-- /USER SHORT DESCRIPTION -->
                                </div>
                                <!-- /USER PREVIEW INFO -->
                            </div>
                            <!-- /USER PREVIEW -->

                            <!-- UPLOAD BOX -->
                            <div class="upload-box popup-avatar-upload-trigger">
                                <!-- UPLOAD BOX ICON -->
                                <svg class="upload-box-icon icon-members">
                                    <use xlink:href="#svg-members"></use>
                                </svg>
                                <!-- /UPLOAD BOX ICON -->

                                <!-- UPLOAD BOX TITLE -->
                                <p class="upload-box-title">Change Avatar</p>
                                <!-- /UPLOAD BOX TITLE -->

                                <!-- UPLOAD BOX TEXT -->
                                <p class="upload-box-text">110x110px size minimum</p>
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
                            <!-- WIDGET BOX TITLE -->
                            <p class="widget-box-title">About Your Profile</p>
                            <!-- /WIDGET BOX TITLE -->

                            <!-- WIDGET BOX CONTENT -->
                            <div class="widget-box-content">
                                <!-- FORM -->
                                {{-- <form class="form"> --}}
                                <!-- FORM ROW -->
                                <div class="form-row split">
                                    <!-- FORM ITEM -->
                                    <div class="form-item">
                                        <!-- FORM INPUT -->
                                        <div class="form-input small active">
                                            <label for="profile-name">Profile Name</label>
                                            <input type="text" id="profile-name" name="name"
                                                value="{{ $user->name }}">
                                        </div>
                                        <!-- /FORM INPUT -->
                                    </div>
                                    <!-- /FORM ITEM -->

                                    <!-- FORM ITEM -->
                                    <div class="form-item">
                                        <!-- FORM INPUT -->
                                        <div class="form-input small active">
                                            <label for="profile-tagline">Username</label>
                                            <input type="text" id="profile-tagline" name="username"
                                                value="{{ $user->username }}">
                                        </div>
                                        <!-- /FORM INPUT -->
                                    </div>
                                    <!-- /FORM ITEM -->
                                </div>
                                <!-- /FORM ROW -->

                                <!-- FORM ROW -->
                                <div class="form-row split">
                                    <!-- FORM ITEM -->
                                    <div class="form-item">
                                        <!-- FORM INPUT -->
                                        <div class="form-input small full">
                                            <textarea id="profile-description" name="bio" placeholder="Write a little description about you...">{{ $user->bio }}</textarea>
                                        </div>
                                        <!-- /FORM INPUT -->
                                    </div>
                                    <!-- /FORM ITEM -->

                                    <!-- FORM ITEM -->
                                    <div class="form-item">
                                        <!-- FORM INPUT -->
                                        <div class="form-input small active">
                                            <label for="email">Public Email</label>
                                            <input type="text" id="email" name="email" value="{{ $user->email }}">
                                        </div>
                                        <!-- /FORM INPUT -->

                                        <!-- FORM INPUT -->
                                        <div class="form-input small active">
                                            <label for="profile-public-website">Public Website</label>
                                            <input type="text" id="profile-public-website" name="website"
                                                value={{ $user->website }}>
                                        </div>
                                        <!-- /FORM INPUT -->
                                    </div>
                                    <!-- /FORM ITEM -->
                                </div>
                                <!-- /FORM ROW -->

                                <!-- FORM ROW -->
                                <div class="form-row split">


                                    <!-- FORM ITEM -->
                                    <div class="form-item">
                                        <!-- FORM INPUT DECORATED -->
                                        <div class="form-input-decorated">
                                            <!-- FORM INPUT -->
                                            <div class="form-input small active">
                                                <label for="birthday">Birthday</label>
                                                <input type="date" id="birthday" name="birthday"
                                                    value="{{ $user->birthday }}">
                                            </div>
                                            <!-- /FORM INPUT -->

                                            <!-- FORM INPUT ICON -->
                                            <svg class="form-input-icon icon-events">
                                                <use xlink:href="#svg-events"></use>
                                            </svg>
                                            <!-- /FORM INPUT ICON -->
                                        </div>
                                        <!-- /FORM INPUT DECORATED -->
                                    </div>
                                    <!-- /FORM ITEM -->


                                    <!-- FORM ITEM -->
                                    <div class="form-item">
                                        <!-- FORM SELECT -->
                                        <div class="form-select">
                                            {{-- <label for="country">Country</label> --}}
                                            <select class="select2" id="country" name="country" placeholder="Nahi yaar">
                                                <option value="" selected disabled></option>
                                                @foreach ($countries as $country)
                                                    <option value="{{ $country->id }}"
                                                        @if ($country->id == $user->country->id) selected @endif>
                                                        {{ $country->name }}</option>
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
                                <div class="form-row split">

                                    <!-- FORM ITEM -->
                                    <div class="form-item">
                                        <!-- FORM SELECT -->
                                        <div class="form-select">
                                            {{-- <label for="background">Academic Background</label> --}}
                                            <select id="background" placeholder="aabra ka dabra"
                                                name="academic_background">
                                                <option value="" selected disabled></option>
                                                @foreach ($backgrounds as $background)
                                                    <option value="{{ $background->id }}"
                                                        @if ($background->id == ($user->academic_background->id ?? '')) selected @endif>
                                                        {{ $background->name }}</option>
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

                                    <!-- FORM ITEM -->
                                    <div class="form-item">
                                        <!-- FORM SELECT -->
                                        <div class="form-select">
                                            {{-- <label for="profile-city">Institute or College</label> --}}
                                            {{-- <input type="text" list="colleges-list"> --}}
                                            <select id="college" name="college">
                                                {{-- <datalist id="colleges-list"> --}}
                                                <option value="" disabled selected>Select your Institute</option>
                                                @if (isset($user->college))
                                                    <option value="{{ $user->college->id }}" selected>
                                                        {{ $user->college->name }}</option>
                                                @endif
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
                                        <!-- FORM INPUT -->
                                        <div class="form-input small">
                                            <label for="interests">Interests</label>
                                            <select id="interests" name="interests[]" multiple>
                                                @foreach ($interests as $interest)
                                                    <option value="{{ $interest->id }}"
                                                        @if (in_array($interest->id, $user->interests ?? [])) selected @endif>
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
                                        <!-- FORM INPUT -->
                                        <div class="form-input small">
                                            <label for="profile-birthplace">Skills</label>
                                            <input type="text" id="profile-birthplace" name="profile_birthplace">
                                        </div>
                                        <!-- /FORM INPUT -->
                                    </div>
                                    <!-- /FORM ITEM -->
                                </div>
                                <!-- /FORM ROW -->

                                {{-- </form> --}}
                                <!-- /FORM -->
                            </div>
                            <!-- WIDGET BOX CONTENT -->
                        </div>
                        <!-- /WIDGET BOX -->

                        {{-- <!-- WIDGET BOX -->
                    <div class="widget-box">
                        <!-- WIDGET BOX TITLE -->
                        <p class="widget-box-title">Manage Badges</p>
                        <!-- /WIDGET BOX TITLE -->

                        <!-- WIDGET BOX CONTENT -->
                        <div class="widget-box-content">
                            <!-- DRAGGABLE ITEMS -->
                            <div class="draggable-items">
                                <!-- DRAGGABLE ITEM -->
                                <div class="draggable-item">
                                    <!-- BADGE ITEM -->
                                    <div class="badge-item">
                                        <img src="/assets/template/img/badge/gold-s.png" alt="badge-gold-s">
                                    </div>
                                    <!-- /BADGE ITEM -->
                                </div>
                                <!-- /DRAGGABLE ITEM -->

                                <!-- DRAGGABLE ITEM -->
                                <div class="draggable-item">
                                    <!-- BADGE ITEM -->
                                    <div class="badge-item">
                                        <img src="/assets/template/img/badge/age-s.png" alt="badge-age-s">
                                    </div>
                                    <!-- /BADGE ITEM -->
                                </div>
                                <!-- /DRAGGABLE ITEM -->

                                <!-- DRAGGABLE ITEM -->
                                <div class="draggable-item">
                                    <!-- BADGE ITEM -->
                                    <div class="badge-item">
                                        <img src="/assets/template/img/badge/caffeinated-s.png" alt="badge-caffeinated-s">
                                    </div>
                                    <!-- /BADGE ITEM -->
                                </div>
                                <!-- /DRAGGABLE ITEM -->

                                <!-- DRAGGABLE ITEM -->
                                <div class="draggable-item">
                                    <!-- BADGE ITEM -->
                                    <div class="badge-item">
                                        <img src="/assets/template/img/badge/warrior-s.png" alt="badge-warrior-s">
                                    </div>
                                    <!-- /BADGE ITEM -->
                                </div>
                                <!-- /DRAGGABLE ITEM -->

                                <!-- DRAGGABLE ITEM -->
                                <div class="draggable-item">
                                    <!-- BADGE ITEM -->
                                    <div class="badge-item">
                                        <img src="/assets/template/img/badge/traveller-s.png" alt="badge-traveller-s">
                                    </div>
                                    <!-- /BADGE ITEM -->
                                </div>
                                <!-- /DRAGGABLE ITEM -->

                                <!-- DRAGGABLE ITEM -->
                                <div class="draggable-item">
                                    <!-- BADGE ITEM -->
                                    <div class="badge-item">
                                        <img src="/assets/template/img/badge/scientist-s.png" alt="badge-scientist-s">
                                    </div>
                                    <!-- /BADGE ITEM -->
                                </div>
                                <!-- /DRAGGABLE ITEM -->

                                <!-- DRAGGABLE ITEM -->
                                <div class="draggable-item">
                                    <!-- BADGE ITEM -->
                                    <div class="badge-item">
                                        <img src="/assets/template/img/badge/ncreature-s.png" alt="badge-ncreature-s">
                                    </div>
                                    <!-- /BADGE ITEM -->
                                </div>
                                <!-- /DRAGGABLE ITEM -->

                                <!-- DRAGGABLE ITEM -->
                                <div class="draggable-item">
                                    <!-- BADGE ITEM -->
                                    <div class="badge-item">
                                        <img src="/assets/template/img/badge/mightiers-s.png" alt="badge-mightiers-s">
                                    </div>
                                    <!-- /BADGE ITEM -->
                                </div>
                                <!-- /DRAGGABLE ITEM -->

                                <!-- DRAGGABLE ITEM -->
                                <div class="draggable-item">
                                    <!-- BADGE ITEM -->
                                    <div class="badge-item">
                                        <img src="/assets/template/img/badge/phantom-s.png" alt="badge-phantom-s">
                                    </div>
                                    <!-- /BADGE ITEM -->
                                </div>
                                <!-- /DRAGGABLE ITEM -->

                                <!-- DRAGGABLE ITEM -->
                                <div class="draggable-item">
                                    <!-- BADGE ITEM -->
                                    <div class="badge-item">
                                        <img src="/assets/template/img/badge/collector-s.png" alt="badge-collector-s">
                                    </div>
                                    <!-- /BADGE ITEM -->
                                </div>
                                <!-- /DRAGGABLE ITEM -->

                                <!-- DRAGGABLE ITEM -->
                                <div class="draggable-item">
                                    <!-- BADGE ITEM -->
                                    <div class="badge-item">
                                        <img src="/assets/template/img/badge/bronzec-s.png" alt="badge-bronzec-s">
                                    </div>
                                    <!-- /BADGE ITEM -->
                                </div>
                                <!-- /DRAGGABLE ITEM -->

                                <!-- DRAGGABLE ITEM -->
                                <div class="draggable-item">
                                    <!-- BADGE ITEM -->
                                    <div class="badge-item">
                                        <img src="/assets/template/img/badge/silverc-s.png" alt="badge-silverc-s">
                                    </div>
                                    <!-- /BADGE ITEM -->
                                </div>
                                <!-- /DRAGGABLE ITEM -->

                                <!-- DRAGGABLE ITEM -->
                                <div class="draggable-item">
                                    <!-- BADGE ITEM -->
                                    <div class="badge-item">
                                        <img src="/assets/template/img/badge/goldc-s.png" alt="badge-goldc-s">
                                    </div>
                                    <!-- /BADGE ITEM -->
                                </div>
                                <!-- /DRAGGABLE ITEM -->

                                <!-- DRAGGABLE ITEM -->
                                <div class="draggable-item empty"></div>
                                <!-- /DRAGGABLE ITEM -->

                                <!-- DRAGGABLE ITEM -->
                                <div class="draggable-item empty"></div>
                                <!-- /DRAGGABLE ITEM -->

                                <!-- DRAGGABLE ITEM -->
                                <div class="draggable-item empty"></div>
                                <!-- /DRAGGABLE ITEM -->

                                <!-- DRAGGABLE ITEM -->
                                <div class="draggable-item empty"></div>
                                <!-- /DRAGGABLE ITEM -->

                                <!-- DRAGGABLE ITEM -->
                                <div class="draggable-item empty"></div>
                                <!-- /DRAGGABLE ITEM -->

                                <!-- DRAGGABLE ITEM -->
                                <div class="draggable-item empty"></div>
                                <!-- /DRAGGABLE ITEM -->

                                <!-- DRAGGABLE ITEM -->
                                <div class="draggable-item empty"></div>
                                <!-- /DRAGGABLE ITEM -->
                            </div>
                            <!-- /DRAGGABLE ITEMS -->

                            <!-- WIDGET BOX TEXT -->
                            <p class="widget-box-text light">Choose the order in which your badges are shown. Just drag and
                                place them wherever you want!</p>
                            <!-- /WIDGET BOX TEXT -->
                        </div>
                        <!-- WIDGET BOX CONTENT -->
                    </div>
                    <!-- /WIDGET BOX -->

                    <!-- WIDGET BOX -->
                    <div class="widget-box">
                        <!-- WIDGET BOX TITLE -->
                        <p class="widget-box-title">Interests</p>
                        <!-- /WIDGET BOX TITLE -->

                        <!-- WIDGET BOX CONTENT -->
                        <div class="widget-box-content">
                            <!-- FORM -->
                            <form class="form">
                                <!-- FORM ROW -->
                                <div class="form-row split">
                                    <!-- FORM ITEM -->
                                    <div class="form-item">
                                        <!-- FORM INPUT -->
                                        <div class="form-input small mid-textarea active">
                                            <label for="profile-favourite-shows">Favourite TV Shows</label>
                                            <textarea id="profile-favourite-shows" name="profile_favourite_shows">Breaking Good, RedDevil, People of Interest, The Running Dead, Found,  American Guy, The Last Windbender, Game of Wars.</textarea>
                                        </div>
                                        <!-- /FORM INPUT -->
                                    </div>
                                    <!-- /FORM ITEM -->

                                    <!-- FORM ITEM -->
                                    <div class="form-item">
                                        <!-- FORM INPUT -->
                                        <div class="form-input small mid-textarea active">
                                            <label for="profile-favourite-music">Favourite Music Bands / Artists</label>
                                            <textarea id="profile-favourite-music" name="profile_favourite_music">Iron Maid, DC/AC, Megablow, Kung Fighters, System of a Revenge, Rammstown.</textarea>
                                        </div>
                                        <!-- /FORM INPUT -->
                                    </div>
                                    <!-- /FORM ITEM -->
                                </div>
                                <!-- /FORM ROW -->

                                <!-- FORM ROW -->
                                <div class="form-row split">
                                    <!-- FORM ITEM -->
                                    <div class="form-item">
                                        <!-- FORM INPUT -->
                                        <div class="form-input small mid-textarea active">
                                            <label for="profile-favourite-movies">Favourite Movies</label>
                                            <textarea id="profile-favourite-movies" name="profile_favourite_movies">The Revengers Saga, The Scarred Wizard and the Fire Crown, Crime Squad, Metal Man, The Dark Rider, Watchers, The Impossible Heist.</textarea>
                                        </div>
                                        <!-- /FORM INPUT -->
                                    </div>
                                    <!-- /FORM ITEM -->

                                    <!-- FORM ITEM -->
                                    <div class="form-item">
                                        <!-- FORM INPUT -->
                                        <div class="form-input small mid-textarea active">
                                            <label for="profile-favourite-books">Favourite Books</label>
                                            <textarea id="profile-favourite-books" name="profile_favourite_books">The Crime of the Century, Egiptian Mythology 101, The Scarred Wizard, Lord of the Wings, Amongst Gods, The Oracle, A Tale of Air and Water</textarea>
                                        </div>
                                        <!-- /FORM INPUT -->
                                    </div>
                                    <!-- /FORM ITEM -->
                                </div>
                                <!-- /FORM ROW -->

                                <!-- FORM ROW -->
                                <div class="form-row split">
                                    <!-- FORM ITEM -->
                                    <div class="form-item">
                                        <!-- FORM INPUT -->
                                        <div class="form-input small mid-textarea active">
                                            <label for="profile-favourite-games">Favourite Games</label>
                                            <textarea id="profile-favourite-games" name="profile_favourite_games">The First of Us, Assassin's Squad, Dark Assylum, NMAK16, Last Cause 4, Grand Snatch Auto</textarea>
                                        </div>
                                        <!-- /FORM INPUT -->
                                    </div>
                                    <!-- /FORM ITEM -->

                                    <!-- FORM ITEM -->
                                    <div class="form-item">
                                        <!-- FORM INPUT -->
                                        <div class="form-input small mid-textarea">
                                            <label for="profile-hobbies">My Hobbies</label>
                                            <textarea id="profile-hobbies" name="profile_hobbies"></textarea>
                                        </div>
                                        <!-- /FORM INPUT -->
                                    </div>
                                    <!-- /FORM ITEM -->
                                </div>
                                <!-- /FORM ROW -->
                            </form>
                            <!-- /FORM -->
                        </div>
                        <!-- WIDGET BOX CONTENT -->
                    </div>
                    <!-- /WIDGET BOX -->

                    <!-- WIDGET BOX -->
                    <div class="widget-box">
                        <!-- WIDGET BOX TITLE -->
                        <p class="widget-box-title">Jobs &amp; Education</p>
                        <!-- /WIDGET BOX TITLE -->

                        <!-- WIDGET BOX CONTENT -->
                        <div class="widget-box-content">
                            <!-- FORM -->
                            <form class="form">
                                <!-- FORM ROW -->
                                <div class="form-row split">
                                    <!-- FORM ITEM -->
                                    <div class="form-item">
                                        <!-- FORM INPUT -->
                                        <div class="form-input small active">
                                            <label for="profile-job-1-title">Title or Place</label>
                                            <input type="text" id="profile-job-1-title" name="profile_job_1_title"
                                                value="Lead Costume Designer">
                                        </div>
                                        <!-- /FORM INPUT -->
                                    </div>
                                    <!-- /FORM ITEM -->

                                    <!-- FORM ROW -->
                                    <div class="form-row split">
                                        <!-- FORM ITEM -->
                                        <div class="form-item">
                                            <!-- FORM SELECT -->
                                            <div class="form-select">
                                                <label for="profile-job-1-year-started">Year Started</label>
                                                <select id="profile-job-1-year-started" name="profile_job_1_year_started">
                                                    <option value="0">Select Year</option>
                                                    <option value="1" selected>2015</option>
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

                                        <!-- FORM ITEM -->
                                        <div class="form-item">
                                            <!-- FORM SELECT -->
                                            <div class="form-select">
                                                <label for="profile-job-1-year-ended">Year Ended</label>
                                                <select id="profile-job-1-year-ended" name="profile_job_1_year_ended">
                                                    <option value="0">Select Year</option>
                                                    <option value="1" selected>Now</option>
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
                                </div>
                                <!-- /FORM ROW -->

                                <!-- FORM ROW -->
                                <div class="form-row">
                                    <!-- FORM ITEM -->
                                    <div class="form-item">
                                        <!-- FORM INPUT -->
                                        <div class="form-input small mid-textarea active">
                                            <label for="profile-job-1-description">Description</label>
                                            <textarea id="profile-job-1-description" name="profile_job_1_description">Lead Costume Designer for the "Amazzo Costumes" agency. I’m in charge of a ten person group, overseeing all the proyects and talking to potential clients. I also handle some face to face interviews for new candidates.</textarea>
                                        </div>
                                        <!-- /FORM INPUT -->
                                    </div>
                                    <!-- /FORM ITEM -->
                                </div>
                                <!-- /FORM ROW -->

                                <!-- FORM ROW -->
                                <div class="form-row split">
                                    <!-- FORM ITEM -->
                                    <div class="form-item">
                                        <!-- FORM INPUT -->
                                        <div class="form-input small">
                                            <label for="profile-job-2-title">Title or Place</label>
                                            <input type="text" id="profile-job-2-title" name="profile_job_2_title">
                                        </div>
                                        <!-- /FORM INPUT -->
                                    </div>
                                    <!-- /FORM ITEM -->

                                    <!-- FORM ROW -->
                                    <div class="form-row split">
                                        <!-- FORM ITEM -->
                                        <div class="form-item">
                                            <!-- FORM SELECT -->
                                            <div class="form-select">
                                                <label for="profile-job-2-year-started">Year Started</label>
                                                <select id="profile-job-2-year-started" name="profile_job_2_year_started">
                                                    <option value="0">Select Year</option>
                                                    <option value="1" selected>2019</option>
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

                                        <!-- FORM ITEM -->
                                        <div class="form-item">
                                            <!-- FORM SELECT -->
                                            <div class="form-select">
                                                <label for="profile-job-2-year-ended">Year Ended</label>
                                                <select id="profile-job-2-year-ended" name="profile_job_2_year_ended">
                                                    <option value="0">Select Year</option>
                                                    <option value="1" selected>2019</option>
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
                                </div>
                                <!-- /FORM ROW -->

                                <!-- FORM ROW -->
                                <div class="form-row">
                                    <!-- FORM ITEM -->
                                    <div class="form-item">
                                        <!-- FORM INPUT -->
                                        <div class="form-input small mid-textarea">
                                            <label for="profile-job-2-description">Description</label>
                                            <textarea id="profile-job-2-description" name="profile_job_2_description"></textarea>
                                        </div>
                                        <!-- /FORM INPUT -->
                                    </div>
                                    <!-- /FORM ITEM -->
                                </div>
                                <!-- /FORM ROW -->
                            </form>
                            <!-- /FORM -->

                            <!-- BUTTON -->
                            <p class="button small white add-field-button">+ Add New Field</p>
                            <!-- /BUTTON -->
                        </div>
                        <!-- WIDGET BOX CONTENT -->
                    </div>
                    <!-- /WIDGET BOX --> --}}
                    </div>
                    <!-- /GRID COLUMN -->
                </form>
            </div>
            <!-- /GRID COLUMN -->
        </div>
        <!-- /GRID -->
    </div>
    <!-- /CONTENT GRID -->




    @popup('avatarupload')
    @popup('coverupload')
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
    </style>
@endpush

@section('scripts')
    {{-- import jquery from cdn --}}
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
@endsection

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
        $(document).ready(function() {
            $('#background').selectize({
                placeholder: "Select Academic Background",
            });
            $('#country').selectize({
                placeholder: "Select your Country",
            });
            $('#interests').selectize({
                placeholder: "Select your Interests",
                plugins: ["remove_button", "restore_on_backspace"],
            });


            $("#college").selectize({
                valueField: "id",
                labelField: "name",
                searchField: "name",
                create: false,
                placeholder: "Select your Institute",
                render: {
                    option: function(item, escape) {
                        console.log(item);
                        return (
                            `
                            <div class="option" data-selectable="" data-value="${item.id}">${item.name}</div>
                            `
                        );
                    },
                },
                load: function(query, callback) {
                    if (!query.length) return callback();
                    $.ajax({
                        url: "/api/search/college/" + encodeURIComponent(
                            query),
                        type: "GET",
                        error: function() {
                            callback();
                        },
                        success: function(res) {
                            console.log(res);
                            callback(res.slice(0, 10));
                        },
                    });
                },
            });


        });
    </script>
@endpush
