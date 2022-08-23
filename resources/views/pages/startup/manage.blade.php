@php
$page['title'] = 'Manage Startups | ConnectUp';

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
                <!-- SECTION HEADER -->
                <div class="section-header">
                    <!-- SECTION HEADER INFO -->
                    <div class="section-header-info">
                        <!-- SECTION PRETITLE -->
                        <p class="section-pretitle">Groups</p>
                        <!-- /SECTION PRETITLE -->

                        <!-- SECTION TITLE -->
                        <h2 class="section-title">Manage Groups</h2>
                        <!-- /SECTION TITLE -->
                    </div>
                    <!-- /SECTION HEADER INFO -->
                </div>
                <!-- /SECTION HEADER -->

                <!-- GRID -->
                <div class="grid grid-3-3-3 centered-on-mobile">
                    <!-- CREATE ENTITY BOX -->
                    <div class="create-entity-box">
                        <!-- CREATE ENTITY BOX COVER -->
                        <div class="create-entity-box-cover"></div>
                        <!-- /CREATE ENTITY BOX COVER -->

                        <!-- CREATE ENTITY BOX AVATAR -->
                        <div class="create-entity-box-avatar">
                            <!-- CREATE ENTITY BOX AVATAR ICON -->
                            <svg class="create-entity-box-avatar-icon icon-group">
                                <use xlink:href="#svg-group"></use>
                            </svg>
                            <!-- /CREATE ENTITY BOX AVATAR ICON -->
                        </div>
                        <!-- /CREATE ENTITY BOX AVATAR -->

                        <!-- CREATE ENTITY BOX INFO -->
                        <div class="create-entity-box-info">
                            <!-- CREATE ENTITY BOX TITLE -->
                            <p class="create-entity-box-title">
                                Create New Group
                            </p>
                            <!-- /CREATE ENTITY BOX TITLE -->

                            <!-- CREATE ENTITY BOX TEXT -->
                            <p class="create-entity-box-text">
                                Share your passion with others!
                            </p>
                            <!-- /CREATE ENTITY BOX TEXT -->

                            <!-- BUTTON -->
                            <p class="button secondary full popup-manage-group-trigger">
                                Start Creating!
                            </p>
                            <!-- /BUTTON -->
                        </div>
                        <!-- /CREATE ENTITY BOX INFO -->
                    </div>
                    <!-- /CREATE ENTITY BOX -->

                    @foreach ($startups as $startup)
                        <!-- USER PREVIEW -->
                        <div class="user-preview small fixed-height-medium">
                            <!-- USER PREVIEW COVER -->
                            <figure class="user-preview-cover liquid">
                                <img src="{{ $startup->cover }}" alt="{{ $startup->name }}'s' Cover at ConnectUp" />
                            </figure>
                            <!-- /USER PREVIEW COVER -->

                            <!-- USER PREVIEW INFO -->
                            <div class="user-preview-info">
                                <!-- USER SHORT DESCRIPTION -->
                                <div class="user-short-description small">
                                    <!-- USER SHORT DESCRIPTION AVATAR -->
                                    <a class="user-short-description-avatar user-avatar no-stats"
                                        href="{{ route('startup', $startup->username) }}">
                                        <!-- USER AVATAR BORDER -->
                                        <div class="user-avatar-border">
                                            <!-- HEXAGON -->
                                            <div class="hexagon-100-108"></div>
                                            <!-- /HEXAGON -->
                                        </div>
                                        <!-- /USER AVATAR BORDER -->

                                        <!-- USER AVATAR CONTENT -->
                                        <div class="user-avatar-content">
                                            <!-- HEXAGON -->
                                            <div class="hexagon-image-84-92" data-src="{{ $startup->logo }}">
                                            </div>
                                            <!-- /HEXAGON -->
                                        </div>
                                        <!-- /USER AVATAR CONTENT -->
                                    </a>
                                    <!-- /USER SHORT DESCRIPTION AVATAR -->

                                    <!-- USER SHORT DESCRIPTION TITLE -->
                                    <p class="user-short-description-title small">
                                        <a href="{{ route('startup', $startup->username) }}">{{ $startup->name }}</a>
                                    </p>
                                    <!-- /USER SHORT DESCRIPTION TITLE -->

                                    <!-- USER SHORT DESCRIPTION TEXT -->
                                    <p class="user-short-description-text regular">
                                        {{ $startup->bio }}
                                    </p>
                                    <!-- /USER SHORT DESCRIPTION TEXT -->
                                </div>
                                <!-- /USER SHORT DESCRIPTION -->

                                <!-- BUTTON -->
                                <p class="button white full popup-manage-group-trigger">
                                    Manage Group
                                </p>
                                <!-- /BUTTON -->
                            </div>
                            <!-- /USER PREVIEW INFO -->
                        </div>
                        <!-- /USER PREVIEW -->
                    @endforeach
                </div>
                <!-- /GRID -->
            </div>
            <!-- /GRID COLUMN -->
        </div>
        <!-- /GRID -->
    </div>
    <!-- /CONTENT GRID -->



    <!-- POPUP BOX -->
    <div class="popup-box mid popup-manage-group">
        <!-- POPUP CLOSE BUTTON -->
        <div class="popup-close-button popup-manage-group-trigger">
            <!-- POPUP CLOSE BUTTON ICON -->
            <svg class="popup-close-button-icon icon-cross">
                <use xlink:href="#svg-cross"></use>
            </svg>
            <!-- /POPUP CLOSE BUTTON ICON -->
        </div>
        <!-- /POPUP CLOSE BUTTON -->

        <!-- POPUP BOX BODY -->
        <div class="popup-box-body">
            <!-- POPUP BOX SIDEBAR -->
            <div class="popup-box-sidebar">
                <!-- USER PREVIEW -->
                <div class="user-preview small">
                    <!-- USER PREVIEW COVER -->
                    <figure class="user-preview-cover liquid">
                        <img src="/assets/template/img/cover/29.jpg" alt="cover-29" />
                    </figure>
                    <!-- /USER PREVIEW COVER -->

                    <!-- USER PREVIEW INFO -->
                    <div class="user-preview-info">
                        <!-- USER SHORT DESCRIPTION -->
                        <div class="user-short-description small">
                            <!-- USER SHORT DESCRIPTION AVATAR -->
                            <a class="user-short-description-avatar user-avatar no-stats" href="group-timeline.html">
                                <!-- USER AVATAR BORDER -->
                                <div class="user-avatar-border">
                                    <!-- HEXAGON -->
                                    <div class="hexagon-100-108"></div>
                                    <!-- /HEXAGON -->
                                </div>
                                <!-- /USER AVATAR BORDER -->

                                <!-- USER AVATAR CONTENT -->
                                <div class="user-avatar-content">
                                    <!-- HEXAGON -->
                                    <div class="hexagon-image-84-92" data-src="/assets/template/img/avatar/24.jpg"></div>
                                    <!-- /HEXAGON -->
                                </div>
                                <!-- /USER AVATAR CONTENT -->
                            </a>
                            <!-- /USER SHORT DESCRIPTION AVATAR -->

                            <!-- USER SHORT DESCRIPTION TITLE -->
                            <p class="user-short-description-title small">
                                <a href="group-timeline.html">Cosplayers of the World</a>
                            </p>
                            <!-- /USER SHORT DESCRIPTION TITLE -->

                            <!-- USER SHORT DESCRIPTION TEXT -->
                            <p class="user-short-description-text regular">
                                Group Organizer
                            </p>
                            <!-- /USER SHORT DESCRIPTION TEXT -->
                        </div>
                        <!-- /USER SHORT DESCRIPTION -->
                    </div>
                    <!-- /USER PREVIEW INFO -->
                </div>
                <!-- /USER PREVIEW -->

                <!-- SIDEBAR MENU ITEM -->
                <div class="sidebar-menu-item">
                    <!-- SIDEBAR MENU BODY -->
                    <div class="sidebar-menu-body secondary">
                        <!-- SIDEBAR MENU LINK -->
                        <p class="sidebar-menu-link active">Group Info</p>
                        <!-- /SIDEBAR MENU LINK -->

                        <!-- SIDEBAR MENU LINK -->
                        <p class="sidebar-menu-link">Avatar and Cover</p>
                        <!-- /SIDEBAR MENU LINK -->

                        <!-- SIDEBAR MENU LINK -->
                        <p class="sidebar-menu-link">Social Networks</p>
                        <!-- /SIDEBAR MENU LINK -->

                        <!-- SIDEBAR MENU LINK -->
                        <p class="sidebar-menu-link">Settings</p>
                        <!-- /SIDEBAR MENU LINK -->

                        <!-- SIDEBAR MENU LINK -->
                        <p class="sidebar-menu-link">Members</p>
                        <!-- /SIDEBAR MENU LINK -->

                        <!-- SIDEBAR MENU LINK -->
                        <p class="sidebar-menu-link">Delete Group</p>
                        <!-- /SIDEBAR MENU LINK -->
                    </div>
                    <!-- /SIDEBAR MENU BODY -->
                </div>
                <!-- /SIDEBAR MENU ITEM -->

                <!-- POPUP BOX SIDEBAR FOOTER -->
                <div class="popup-box-sidebar-footer">
                    <!-- BUTTON -->
                    <p class="button secondary full popup-manage-group-trigger">
                        Save Changes!
                    </p>
                    <!-- /BUTTON -->

                    <!-- BUTTON -->
                    <p class="button white full popup-manage-group-trigger">
                        Discard All
                    </p>
                    <!-- /BUTTON -->
                </div>
                <!-- /POPUP BOX SIDEBAR FOOTER -->
            </div>
            <!-- /POPUP BOX SIDEBAR -->

            <!-- POPUP BOX CONTENT -->
            <div class="popup-box-content">
                <!-- WIDGET BOX -->
                <div class="widget-box">
                    <!-- WIDGET BOX TITLE -->
                    <p class="widget-box-title">Group Info</p>
                    <!-- /WIDGET BOX TITLE -->

                    <!-- WIDGET BOX CONTENT -->
                    <div class="widget-box-content">
                        <!-- FORM -->
                        <form class="form">
                            <!-- FORM ROW -->
                            <div class="form-row">
                                <!-- FORM ITEM -->
                                <div class="form-item">
                                    <!-- FORM INPUT -->
                                    <div class="form-input small active">
                                        <label for="group-name">Group Name</label>
                                        <input type="text" id="group-name" name="group_name"
                                            value="Cosplayers of the World" />
                                    </div>
                                    <!-- /FORM INPUT -->
                                </div>
                                <!-- /FORM ITEM -->
                            </div>
                            <!-- /FORM ROW -->

                            <!-- FORM ROW -->
                            <div class="form-row">
                                <!-- FORM ITEM -->
                                <div class="form-item">
                                    <!-- FORM INPUT -->
                                    <div class="form-input small active">
                                        <label for="group-tagline">Tagline</label>
                                        <input type="text" id="group-tagline" name="group_tagline"
                                            value="All Cosplayers Welcome!" />
                                    </div>
                                    <!-- /FORM INPUT -->
                                </div>
                                <!-- /FORM ITEM -->
                            </div>
                            <!-- /FORM ROW -->

                            <!-- FORM ROW -->
                            <div class="form-row">
                                <!-- FORM ITEM -->
                                <div class="form-item">
                                    <!-- FORM INPUT -->
                                    <div class="form-input small mid-textarea">
                                        <textarea id="group-description" name="group_description" placeholder="Write a little description about the group..."></textarea>
                                    </div>
                                    <!-- /FORM INPUT -->
                                </div>
                                <!-- /FORM ITEM -->
                            </div>
                            <!-- /FORM ROW -->

                            <!-- FORM ROW -->
                            <div class="form-row">
                                <!-- FORM ITEM -->
                                <div class="form-item">
                                    <!-- FORM INPUT -->
                                    <div class="form-input small active">
                                        <label for="group-public-email">Public Email</label>
                                        <input type="text" id="group-public-email" name="group_public_email"
                                            value="info@cosworld.com" />
                                    </div>
                                    <!-- /FORM INPUT -->
                                </div>
                                <!-- /FORM ITEM -->
                            </div>
                            <!-- /FORM ROW -->

                            <!-- FORM ROW -->
                            <div class="form-row">
                                <!-- FORM ITEM -->
                                <div class="form-item">
                                    <!-- FORM INPUT -->
                                    <div class="form-input small">
                                        <label for="group-public-website">Public Website</label>
                                        <input type="text" id="group-public-website" name="group_public_website" />
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
            </div>
            <!-- /POPUP BOX CONTENT -->
        </div>
        <!-- /POPUP BOX BODY -->
    </div>
    <!-- /POPUP BOX -->
@endsection

@push('styles')
@endpush

@section('scripts')
@endsection

@push('scripts')
@endpush
