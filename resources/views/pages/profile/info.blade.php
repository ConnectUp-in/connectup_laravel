@extends('layouts.app')

@section('content')
    <!-- CONTENT GRID -->
    <div class="content-grid">
        {{-- <!-- SECTION BANNER -->
        <div class="section-banner">
            <!-- SECTION BANNER ICON -->
            <img class="section-banner-icon" src="/assets/vikinger/img/banner/accounthub-icon.png" alt="accounthub-icon">
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
            <!-- GRID COLUMN -->
            <div class="account-hub-sidebar">
                <!-- SIDEBAR BOX -->
                <div class="sidebar-box no-padding">
                    <!-- SIDEBAR MENU -->
                    <div class="sidebar-menu">
                        <!-- SIDEBAR MENU ITEM -->
                        <div class="sidebar-menu-item">
                            <!-- SIDEBAR MENU HEADER -->
                            <div class="sidebar-menu-header accordion-trigger-linked">
                                <!-- SIDEBAR MENU HEADER ICON -->
                                <svg class="sidebar-menu-header-icon icon-profile">
                                    <use xlink:href="#svg-profile"></use>
                                </svg>
                                <!-- /SIDEBAR MENU HEADER ICON -->

                                <!-- SIDEBAR MENU HEADER CONTROL ICON -->
                                <div class="sidebar-menu-header-control-icon">
                                    <!-- SIDEBAR MENU HEADER CONTROL ICON OPEN -->
                                    <svg class="sidebar-menu-header-control-icon-open icon-minus-small">
                                        <use xlink:href="#svg-minus-small"></use>
                                    </svg>
                                    <!-- /SIDEBAR MENU HEADER CONTROL ICON OPEN -->

                                    <!-- SIDEBAR MENU HEADER CONTROL ICON CLOSED -->
                                    <svg class="sidebar-menu-header-control-icon-closed icon-plus-small">
                                        <use xlink:href="#svg-plus-small"></use>
                                    </svg>
                                    <!-- /SIDEBAR MENU HEADER CONTROL ICON CLOSED -->
                                </div>
                                <!-- /SIDEBAR MENU HEADER CONTROL ICON -->

                                <!-- SIDEBAR MENU HEADER TITLE -->
                                <p class="sidebar-menu-header-title">My Profile</p>
                                <!-- /SIDEBAR MENU HEADER TITLE -->

                                <!-- SIDEBAR MENU HEADER TEXT -->
                                <p class="sidebar-menu-header-text">Change your avatar &amp; cover, accept friends, read
                                    messages and more!</p>
                                <!-- /SIDEBAR MENU HEADER TEXT -->
                            </div>
                            <!-- /SIDEBAR MENU HEADER -->

                            <!-- SIDEBAR MENU BODY -->
                            <div class="sidebar-menu-body accordion-content-linked accordion-open">
                                <!-- SIDEBAR MENU LINK -->
                                <a class="sidebar-menu-link active" href="hub-profile-info.html">Profile Info</a>
                                <!-- /SIDEBAR MENU LINK -->

                                <!-- SIDEBAR MENU LINK -->
                                <a class="sidebar-menu-link" href="hub-profile-social.html">Social &amp; Stream</a>
                                <!-- /SIDEBAR MENU LINK -->

                                <!-- SIDEBAR MENU LINK -->
                                <a class="sidebar-menu-link" href="hub-profile-notifications.html">Notifications</a>
                                <!-- /SIDEBAR MENU LINK -->

                                <!-- SIDEBAR MENU LINK -->
                                <a class="sidebar-menu-link" href="hub-profile-messages.html">Messages</a>
                                <!-- /SIDEBAR MENU LINK -->

                                <!-- SIDEBAR MENU LINK -->
                                <a class="sidebar-menu-link" href="hub-profile-requests.html">Friend Requests</a>
                                <!-- /SIDEBAR MENU LINK -->
                            </div>
                            <!-- /SIDEBAR MENU BODY -->
                        </div>
                        <!-- /SIDEBAR MENU ITEM -->

                        <!-- SIDEBAR MENU ITEM -->
                        <div class="sidebar-menu-item">
                            <!-- SIDEBAR MENU HEADER -->
                            <div class="sidebar-menu-header accordion-trigger-linked">
                                <!-- SIDEBAR MENU HEADER ICON -->
                                <svg class="sidebar-menu-header-icon icon-settings">
                                    <use xlink:href="#svg-settings"></use>
                                </svg>
                                <!-- /SIDEBAR MENU HEADER ICON -->

                                <!-- SIDEBAR MENU HEADER CONTROL ICON -->
                                <div class="sidebar-menu-header-control-icon">
                                    <!-- SIDEBAR MENU HEADER CONTROL ICON OPEN -->
                                    <svg class="sidebar-menu-header-control-icon-open icon-minus-small">
                                        <use xlink:href="#svg-minus-small"></use>
                                    </svg>
                                    <!-- /SIDEBAR MENU HEADER CONTROL ICON OPEN -->

                                    <!-- SIDEBAR MENU HEADER CONTROL ICON CLOSED -->
                                    <svg class="sidebar-menu-header-control-icon-closed icon-plus-small">
                                        <use xlink:href="#svg-plus-small"></use>
                                    </svg>
                                    <!-- /SIDEBAR MENU HEADER CONTROL ICON CLOSED -->
                                </div>
                                <!-- /SIDEBAR MENU HEADER CONTROL ICON -->

                                <!-- SIDEBAR MENU HEADER TITLE -->
                                <p class="sidebar-menu-header-title">Account</p>
                                <!-- /SIDEBAR MENU HEADER TITLE -->

                                <!-- SIDEBAR MENU HEADER TEXT -->
                                <p class="sidebar-menu-header-text">Change settings, configure notifications, and review
                                    your privacy</p>
                                <!-- /SIDEBAR MENU HEADER TEXT -->
                            </div>
                            <!-- /SIDEBAR MENU HEADER -->

                            <!-- SIDEBAR MENU BODY -->
                            <div class="sidebar-menu-body accordion-content-linked">
                                <!-- SIDEBAR MENU LINK -->
                                <a class="sidebar-menu-link" href="hub-account-info.html">Account Info</a>
                                <!-- /SIDEBAR MENU LINK -->

                                <!-- SIDEBAR MENU LINK -->
                                <a class="sidebar-menu-link" href="hub-account-password.html">Change Password</a>
                                <!-- /SIDEBAR MENU LINK -->

                                <!-- SIDEBAR MENU LINK -->
                                <a class="sidebar-menu-link" href="hub-account-settings.html">General Settings</a>
                                <!-- /SIDEBAR MENU LINK -->
                            </div>
                            <!-- /SIDEBAR MENU BODY -->
                        </div>
                        <!-- /SIDEBAR MENU ITEM -->

                        <!-- SIDEBAR MENU ITEM -->
                        <div class="sidebar-menu-item">
                            <!-- SIDEBAR MENU HEADER -->
                            <div class="sidebar-menu-header accordion-trigger-linked">
                                <!-- SIDEBAR MENU HEADER ICON -->
                                <svg class="sidebar-menu-header-icon icon-group">
                                    <use xlink:href="#svg-group"></use>
                                </svg>
                                <!-- /SIDEBAR MENU HEADER ICON -->

                                <!-- SIDEBAR MENU HEADER CONTROL ICON -->
                                <div class="sidebar-menu-header-control-icon">
                                    <!-- SIDEBAR MENU HEADER CONTROL ICON OPEN -->
                                    <svg class="sidebar-menu-header-control-icon-open icon-minus-small">
                                        <use xlink:href="#svg-minus-small"></use>
                                    </svg>
                                    <!-- /SIDEBAR MENU HEADER CONTROL ICON OPEN -->

                                    <!-- SIDEBAR MENU HEADER CONTROL ICON CLOSED -->
                                    <svg class="sidebar-menu-header-control-icon-closed icon-plus-small">
                                        <use xlink:href="#svg-plus-small"></use>
                                    </svg>
                                    <!-- /SIDEBAR MENU HEADER CONTROL ICON CLOSED -->
                                </div>
                                <!-- /SIDEBAR MENU HEADER CONTROL ICON -->

                                <!-- SIDEBAR MENU HEADER TITLE -->
                                <p class="sidebar-menu-header-title">Groups</p>
                                <!-- /SIDEBAR MENU HEADER TITLE -->

                                <!-- SIDEBAR MENU HEADER TEXT -->
                                <p class="sidebar-menu-header-text">Create new groups, manage the ones you created or accept
                                    invites!</p>
                                <!-- /SIDEBAR MENU HEADER TEXT -->
                            </div>
                            <!-- /SIDEBAR MENU HEADER -->

                            <!-- SIDEBAR MENU BODY -->
                            <div class="sidebar-menu-body accordion-content-linked">
                                <!-- SIDEBAR MENU LINK -->
                                <a class="sidebar-menu-link" href="hub-group-management.html">Manage Groups</a>
                                <!-- /SIDEBAR MENU LINK -->

                                <!-- SIDEBAR MENU LINK -->
                                <a class="sidebar-menu-link" href="hub-group-invitations.html">Invitations</a>
                                <!-- /SIDEBAR MENU LINK -->
                            </div>
                            <!-- /SIDEBAR MENU BODY -->
                        </div>
                        <!-- /SIDEBAR MENU ITEM -->

                        <!-- SIDEBAR MENU ITEM -->
                        <div class="sidebar-menu-item">
                            <!-- SIDEBAR MENU HEADER -->
                            <div class="sidebar-menu-header accordion-trigger-linked">
                                <!-- SIDEBAR MENU HEADER ICON -->
                                <svg class="sidebar-menu-header-icon icon-store">
                                    <use xlink:href="#svg-store"></use>
                                </svg>
                                <!-- /SIDEBAR MENU HEADER ICON -->

                                <!-- SIDEBAR MENU HEADER CONTROL ICON -->
                                <div class="sidebar-menu-header-control-icon">
                                    <!-- SIDEBAR MENU HEADER CONTROL ICON OPEN -->
                                    <svg class="sidebar-menu-header-control-icon-open icon-minus-small">
                                        <use xlink:href="#svg-minus-small"></use>
                                    </svg>
                                    <!-- /SIDEBAR MENU HEADER CONTROL ICON OPEN -->

                                    <!-- SIDEBAR MENU HEADER CONTROL ICON CLOSED -->
                                    <svg class="sidebar-menu-header-control-icon-closed icon-plus-small">
                                        <use xlink:href="#svg-plus-small"></use>
                                    </svg>
                                    <!-- /SIDEBAR MENU HEADER CONTROL ICON CLOSED -->
                                </div>
                                <!-- /SIDEBAR MENU HEADER CONTROL ICON -->

                                <!-- SIDEBAR MENU HEADER TITLE -->
                                <p class="sidebar-menu-header-title">My Store</p>
                                <!-- /SIDEBAR MENU HEADER TITLE -->

                                <!-- SIDEBAR MENU HEADER TEXT -->
                                <p class="sidebar-menu-header-text">Review your account, manage products check stats and
                                    much more!</p>
                                <!-- /SIDEBAR MENU HEADER TEXT -->
                            </div>
                            <!-- /SIDEBAR MENU HEADER -->

                            <!-- SIDEBAR MENU BODY -->
                            <div class="sidebar-menu-body accordion-content-linked">
                                <!-- SIDEBAR MENU LINK -->
                                <a class="sidebar-menu-link" href="hub-store-account.html">My Account</a>
                                <!-- /SIDEBAR MENU LINK -->

                                <!-- SIDEBAR MENU LINK -->
                                <a class="sidebar-menu-link" href="hub-store-statement.html">Sales Statement</a>
                                <!-- /SIDEBAR MENU LINK -->

                                <!-- SIDEBAR MENU LINK -->
                                <a class="sidebar-menu-link" href="hub-store-items.html">Manage Items</a>
                                <!-- /SIDEBAR MENU LINK -->

                                <!-- SIDEBAR MENU LINK -->
                                <a class="sidebar-menu-link" href="hub-store-downloads.html">Downloads</a>
                                <!-- /SIDEBAR MENU LINK -->
                            </div>
                            <!-- /SIDEBAR MENU BODY -->
                        </div>
                        <!-- /SIDEBAR MENU ITEM -->
                    </div>
                    <!-- /SIDEBAR MENU -->

                    <!-- SIDEBAR BOX FOOTER -->
                    <div class="sidebar-box-footer">
                        <!-- BUTTON -->
                        <p class="button primary">Save Changes!</p>
                        <!-- /BUTTON -->

                        <!-- BUTTON -->
                        <p class="button white small-space">Discard All</p>
                        <!-- /BUTTON -->
                    </div>
                    <!-- /SIDEBAR BOX FOOTER -->
                </div>
                <!-- /SIDEBAR BOX -->
            </div>
            <!-- /GRID COLUMN -->

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
                        <h2 class="section-title">Profile Info</h2>
                        <!-- /SECTION TITLE -->
                    </div>
                    <!-- /SECTION HEADER INFO -->
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
                        <div class="upload-box">
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
                        <div class="upload-box">
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
                            <form class="form">
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
                                            <label for="profile-tagline">Website</label>
                                            <input type="text" id="profile-tagline" name="website"
                                                value="{{ $user->website }}">
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
                                            <label for="profile-public-email">Public Email</label>
                                            <input type="text" id="profile-public-email" name="profile_public_email"
                                                value="ghuntress@yourmail.com">
                                        </div>
                                        <!-- /FORM INPUT -->

                                        <!-- FORM INPUT -->
                                        <div class="form-input small">
                                            <label for="profile-public-website">Public Website</label>
                                            <input type="text" id="profile-public-website"
                                                name="profile_public_website">
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
                                        <!-- FORM SELECT -->
                                        <div class="form-select">
                                            <label for="profile-country">Country</label>
                                            <select class="select2" id="profile-country" name="country">
                                                <option value="0" selected disabled>Select your Country</option>
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

                                    <!-- FORM ITEM -->
                                    <div class="form-item">
                                        <!-- FORM SELECT -->
                                        <div class="form-select">
                                            <label for="profile-city">City</label>
                                            <select id="profile-city" name="profile_city">
                                                <option value="0">Select your City</option>
                                                <option value="1" selected>New York</option>
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
                                        <!-- FORM INPUT DECORATED -->
                                        <div class="form-input-decorated">
                                            <!-- FORM INPUT -->
                                            <div class="form-input small active">
                                                <label for="profile-birthday">Birthday</label>
                                                <input type="text" id="profile-birthday" name="profile_birthday"
                                                    value="August 24th, 1987">
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
                                        <!-- FORM INPUT -->
                                        <div class="form-input small active">
                                            <label for="profile-occupation">Occupation</label>
                                            <input type="text" id="profile-occupation" name="profile_occupation"
                                                value="Costume Designer">
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
                                        <!-- FORM SELECT -->
                                        <div class="form-select">
                                            <label for="profile-status">Status</label>
                                            <select id="profile-status" name="profile_status">
                                                <option value="0">Select your Status</option>
                                                <option value="1" selected>In a Relationship</option>
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
                                        <!-- FORM INPUT -->
                                        <div class="form-input small">
                                            <label for="profile-birthplace">Birthplace</label>
                                            <input type="text" id="profile-birthplace" name="profile_birthplace">
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
                                            <label for="profile-psid">Ps ID</label>
                                            <input type="text" id="profile-psid" name="profile_psid">
                                        </div>
                                        <!-- /FORM INPUT -->
                                    </div>
                                    <!-- /FORM ITEM -->

                                    <!-- FORM ITEM -->
                                    <div class="form-item">
                                        <!-- FORM INPUT -->
                                        <div class="form-input small">
                                            <label for="profile-xbid">Xb ID</label>
                                            <input type="text" id="profile-xbid" name="profile_xbid">
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
                                        <img src="/assets/vikinger/img/badge/gold-s.png" alt="badge-gold-s">
                                    </div>
                                    <!-- /BADGE ITEM -->
                                </div>
                                <!-- /DRAGGABLE ITEM -->

                                <!-- DRAGGABLE ITEM -->
                                <div class="draggable-item">
                                    <!-- BADGE ITEM -->
                                    <div class="badge-item">
                                        <img src="/assets/vikinger/img/badge/age-s.png" alt="badge-age-s">
                                    </div>
                                    <!-- /BADGE ITEM -->
                                </div>
                                <!-- /DRAGGABLE ITEM -->

                                <!-- DRAGGABLE ITEM -->
                                <div class="draggable-item">
                                    <!-- BADGE ITEM -->
                                    <div class="badge-item">
                                        <img src="/assets/vikinger/img/badge/caffeinated-s.png" alt="badge-caffeinated-s">
                                    </div>
                                    <!-- /BADGE ITEM -->
                                </div>
                                <!-- /DRAGGABLE ITEM -->

                                <!-- DRAGGABLE ITEM -->
                                <div class="draggable-item">
                                    <!-- BADGE ITEM -->
                                    <div class="badge-item">
                                        <img src="/assets/vikinger/img/badge/warrior-s.png" alt="badge-warrior-s">
                                    </div>
                                    <!-- /BADGE ITEM -->
                                </div>
                                <!-- /DRAGGABLE ITEM -->

                                <!-- DRAGGABLE ITEM -->
                                <div class="draggable-item">
                                    <!-- BADGE ITEM -->
                                    <div class="badge-item">
                                        <img src="/assets/vikinger/img/badge/traveller-s.png" alt="badge-traveller-s">
                                    </div>
                                    <!-- /BADGE ITEM -->
                                </div>
                                <!-- /DRAGGABLE ITEM -->

                                <!-- DRAGGABLE ITEM -->
                                <div class="draggable-item">
                                    <!-- BADGE ITEM -->
                                    <div class="badge-item">
                                        <img src="/assets/vikinger/img/badge/scientist-s.png" alt="badge-scientist-s">
                                    </div>
                                    <!-- /BADGE ITEM -->
                                </div>
                                <!-- /DRAGGABLE ITEM -->

                                <!-- DRAGGABLE ITEM -->
                                <div class="draggable-item">
                                    <!-- BADGE ITEM -->
                                    <div class="badge-item">
                                        <img src="/assets/vikinger/img/badge/ncreature-s.png" alt="badge-ncreature-s">
                                    </div>
                                    <!-- /BADGE ITEM -->
                                </div>
                                <!-- /DRAGGABLE ITEM -->

                                <!-- DRAGGABLE ITEM -->
                                <div class="draggable-item">
                                    <!-- BADGE ITEM -->
                                    <div class="badge-item">
                                        <img src="/assets/vikinger/img/badge/mightiers-s.png" alt="badge-mightiers-s">
                                    </div>
                                    <!-- /BADGE ITEM -->
                                </div>
                                <!-- /DRAGGABLE ITEM -->

                                <!-- DRAGGABLE ITEM -->
                                <div class="draggable-item">
                                    <!-- BADGE ITEM -->
                                    <div class="badge-item">
                                        <img src="/assets/vikinger/img/badge/phantom-s.png" alt="badge-phantom-s">
                                    </div>
                                    <!-- /BADGE ITEM -->
                                </div>
                                <!-- /DRAGGABLE ITEM -->

                                <!-- DRAGGABLE ITEM -->
                                <div class="draggable-item">
                                    <!-- BADGE ITEM -->
                                    <div class="badge-item">
                                        <img src="/assets/vikinger/img/badge/collector-s.png" alt="badge-collector-s">
                                    </div>
                                    <!-- /BADGE ITEM -->
                                </div>
                                <!-- /DRAGGABLE ITEM -->

                                <!-- DRAGGABLE ITEM -->
                                <div class="draggable-item">
                                    <!-- BADGE ITEM -->
                                    <div class="badge-item">
                                        <img src="/assets/vikinger/img/badge/bronzec-s.png" alt="badge-bronzec-s">
                                    </div>
                                    <!-- /BADGE ITEM -->
                                </div>
                                <!-- /DRAGGABLE ITEM -->

                                <!-- DRAGGABLE ITEM -->
                                <div class="draggable-item">
                                    <!-- BADGE ITEM -->
                                    <div class="badge-item">
                                        <img src="/assets/vikinger/img/badge/silverc-s.png" alt="badge-silverc-s">
                                    </div>
                                    <!-- /BADGE ITEM -->
                                </div>
                                <!-- /DRAGGABLE ITEM -->

                                <!-- DRAGGABLE ITEM -->
                                <div class="draggable-item">
                                    <!-- BADGE ITEM -->
                                    <div class="badge-item">
                                        <img src="/assets/vikinger/img/badge/goldc-s.png" alt="badge-goldc-s">
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
            </div>
            <!-- /GRID COLUMN -->
        </div>
        <!-- /GRID -->
    </div>
    <!-- /CONTENT GRID -->
@endsection

@section('styles')
@endsection

@section('scriptfgs')
    {{-- import jquery from cdn --}}
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    {{-- import selectize --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.13.6/js/selectize.min.js"
        integrity="sha512-DBOconMAY06o4R79zeXKKM3h/g5pca647Eabb+6viK4dRpiMOlZFS4gsbukTbHo+ppdKx4yr+/0m2JnpeAIrSw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        $(document).ready(function() {
            // selectize
            $('.select2').selectize({
                plugins: ['remove_button'],
                delimiter: ',',
                persist: false,
                create: function(input) {
                    return {
                        value: input,
                        text: input
                    }
                }
            });
        });
    </script>
@endsection
