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
                                <span id="preview-name">Startup Name</span>
                            </p>
                            <!-- /USER SHORT DESCRIPTION TITLE -->

                            <!-- USER SHORT DESCRIPTION TEXT -->
                            <p class="user-short-description-text regular" id="preview-bio">
                                Startup Bio or Tagline
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

                        @php
                            $sideitems = [
                                [
                                    'title' => 'General Info',
                                    'identifier' => 'generalinfo',
                                    'active' => true,
                                    'fields' => [
                                        [
                                            'title' => 'Startup Name',
                                            'identifier' => 'name',
                                            'type' => 'text',
                                            'required' => true,
                                        ],
                                        [
                                            'title' => 'Username',
                                            'identifier' => 'username',
                                            'type' => 'text',
                                            'required' => true,
                                        ],
                                        [
                                            'title' => 'Tagline',
                                            'identifier' => 'bio',
                                            'type' => 'text',
                                            'required' => false,
                                        ],
                                        [
                                            'title' => 'About',
                                            'identifier' => 'about',
                                            'type' => 'textarea',
                                            'value' => 'Write a little description about the startup...',
                                            'required' => false,
                                        ],
                            
                                        [
                                            'title' => 'Public',
                                            'identifier' => 'active',
                                            'type' => 'boolean',
                                            'placeholder' => 'Make Startup Public or Private',
                                            'value' => true,
                                            'required' => true,
                                        ],
                                    ],
                                ],
                                [
                                    'title' => 'Logo and Cover',
                                    'identifier' => 'logocover',
                                    'active' => false,
                                ],
                                [
                                    'title' => 'Contact Details',
                                    'identifier' => 'contact',
                                    'active' => false,
                            
                                    'fields' => [
                                        [
                                            'title' => 'Contact Email',
                                            'identifier' => 'contact_email',
                                            'type' => 'email',
                                            'required' => true,
                                        ],
                                        [
                                            'title' => 'Hiring Email',
                                            'identifier' => 'hiring_email',
                                            'type' => 'email',
                                            'required' => false,
                                        ],
                                        [
                                            'title' => 'Website',
                                            'identifier' => 'website',
                                            'type' => 'url',
                                            'required' => false,
                                        ],
                                        [
                                            'title' => 'Contact Number',
                                            'identifier' => 'contact',
                                            'type' => 'text',
                                            'required' => false,
                                        ],
                                        [
                                            'title' => 'Founded At',
                                            'identifier' => 'founded_at',
                                            'type' => 'date',
                                            'required' => false,
                                            'value' => date('Y-m-d'),
                                        ],
                                        [
                                            'title' => 'Funded',
                                            'identifier' => 'funded',
                                            'type' => 'select',
                                            'required' => false,
                                            'options' => [
                                                [
                                                    'title' => 'Yes, Funded',
                                                    'value' => 1,
                                                ],
                                                [
                                                    'title' => 'No, Bootstrapped',
                                                    'value' => 0,
                                                    'selected' => true,
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                                [
                                    'title' => 'Social Networks',
                                    'identifier' => 'social',
                                    'active' => false,
                                ],
                                [
                                    'title' => 'Startup Info',
                                    'identifier' => 'startupinfo',
                                    'active' => false,
                            
                                    'fields' => [
                                        [
                                            'title' => 'Stage',
                                            'identifier' => 'stage',
                                            'type' => 'select',
                                            'required' => false,
                                            'multiple' => false,
                                            'options' => $stages
                                                ->map(function ($stages) {
                                                    return [
                                                        'title' => $stages->name,
                                                        'value' => $stages->id,
                                                    ];
                                                })
                                                ->toArray(),
                                        ],
                                        [
                                            'title' => 'Category',
                                            'identifier' => 'category',
                                            'type' => 'select',
                                            'required' => false,
                                            'multiple' => false,
                                            'options' => $categories
                                                ->map(function ($categories) {
                                                    return [
                                                        'title' => $categories->name,
                                                        'value' => $categories->id,
                                                    ];
                                                })
                                                ->toArray(),
                                        ],
                                        [
                                            'title' => 'Startup Interests/Domains',
                                            'identifier' => 'interests[]',
                                            'type' => 'select',
                                            'required' => false,
                                            'multiple' => true,
                                            'options' => $interests
                                                ->map(function ($interest) {
                                                    return [
                                                        'title' => $interest->name,
                                                        'value' => $interest->id,
                                                    ];
                                                })
                                                ->toArray(),
                                        ],
                                        [
                                            'title' => 'Objective/Reason to Join',
                                            'identifier' => 'objectives[]',
                                            'type' => 'select',
                                            'required' => false,
                                            'multiple' => true,
                                            'options' => $objectives
                                                ->map(function ($objectives) {
                                                    return [
                                                        'title' => $objectives->name,
                                                        'value' => $objectives->id,
                                                    ];
                                                })
                                                ->toArray(),
                                        ],
                                    ],
                                ],
                            ];
                            
                            $socials = ['github', 'linkedin', 'facebook', 'instagram', 'twitter', 'youtube'];
                            
                        @endphp
                        @foreach ($sideitems as $sideitem)
                            <!-- SIDEBAR MENU LINK -->
                            <p class="sidebar-menu-link tabitem {{ $sideitem['active'] ? 'active' : '' }}"
                                data-identifier="{{ $sideitem['identifier'] }}">{{ $sideitem['title'] }}</p>
                            <!-- /SIDEBAR MENU LINK -->
                        @endforeach
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

                @foreach ($sideitems as $block)
                    @if ($block['fields'] ?? false)
                        <!-- WIDGET BOX -->
                        <div class="widget-box datablock" style="display: {{ $block['active'] ? 'block' : 'none' }}"
                            id="{{ $block['identifier'] }}">
                            <!-- WIDGET BOX TITLE -->
                            <p class="widget-box-title">{{ $block['title'] }}</p>
                            <!-- /WIDGET BOX TITLE -->
                            <!-- WIDGET BOX CONTENT -->
                            <div class="widget-box-content">
                                <!-- FORM -->
                                <!-- FORM ROW -->
                                @foreach ($block['fields'] ?? [] as $field)
                                    <div class="form-row {{ $field['type'] == 'select' ? 'nogap' : '' }}">

                                        @if ($field['type'] == 'select')
                                            <!-- FORM ITEM -->
                                            <div class="form-item">
                                                <!-- FORM SELECT -->
                                                <div class="form-select">
                                                    <span class="form-select-title">{{ $field['title'] }}</span>
                                                    <select id="{{ $field['identifier'] }}"
                                                        name="{{ $field['identifier'] }}"
                                                        data-title="{{ $field['title'] }}"
                                                        {{ $field['multiple'] ?? '' ? 'multiple class=multi-select' : 'class=single-select' }}>
                                                        @foreach ($field['options'] ?? [] as $option)
                                                            <option value="{{ $option['value'] }}"
                                                                {{ $option['selected'] ?? false ? 'selected' : '' }}>
                                                                {{ $option['title'] }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <!-- /FORM SELECT -->
                                            </div>
                                            <!-- /FORM ITEM -->
                                        @elseif ($field['type'] == 'boolean')
                                            <div class="switch-option w-100">
                                                <p class="switch-option-title">
                                                    {{ $field['title'] }}
                                                </p>
                                                <p class="switch-option-text">
                                                    {{ $field['placeholder'] ?? '' }}
                                                </p>
                                                <div class="form-switch {{ $field['value'] ? 'active' : '' }}"
                                                    onclick="updateCheck(this)">
                                                    <input type="hidden" name="{{ $field['identifier'] }}"
                                                        value="{{ $field['value'] ?? '0' }}">
                                                    <!-- FORM SWITCH BUTTON -->
                                                    <div class="form-switch-button"></div>
                                                    <!-- /FORM SWITCH BUTTON -->
                                                </div>
                                                <!-- /FORM SWITCH -->
                                            </div>
                                            <!-- /SWITCH OPTION -->
                                        @else
                                            <!-- FORM ITEM -->
                                            <div class="form-item">
                                                <!-- FORM INPUT -->
                                                <div
                                                    class="form-input {{ $field['value'] ?? '' ? 'active' : '' }} {{ $field['type'] == 'textarea' ? 'mid-textarea' : '' }} {{ $field['required'] ? 'required' : '' }}">
                                                    <label for="{{ $field['identifier'] }}">{{ $field['title'] }}</label>
                                                    @if ($field['type'] == 'textarea')
                                                        <textarea id="{{ $field['identifier'] }}" name="{{ $field['identifier'] }}"
                                                            placeholder="{{ $field['placeholder'] ?? '' }}">{{ $field['value'] ?? '' }}</textarea>
                                                    @elseif ($field['type'] == 'select')
                                                    @else
                                                        <input type="{{ $field['type'] }}" id="{{ $field['identifier'] }}"
                                                            name="{{ $field['identifier'] }}"
                                                            value="{{ $field['value'] ?? '' }}"
                                                            placeholder="{{ $field['placeholder'] ?? '' }}" />
                                                    @endif
                                                </div>
                                                <!-- /FORM INPUT -->
                                            </div>
                                            <!-- /FORM ITEM -->
                                        @endif
                                    </div>
                                @endforeach
                                <!-- /FORM ROW -->
                                <!-- /FORM -->
                            </div>
                            <!-- WIDGET BOX CONTENT -->
                        </div>
                        <!-- /WIDGET BOX -->
                    @endif
                @endforeach


                <!-- WIDGET BOX -->
                <div class="widget-box datablock" style="display:none" id="social">
                    <!-- WIDGET BOX TITLE -->
                    <p class="widget-box-title">Social Networks</p>
                    <input type="hidden" id="socials" name="socials" value="">

                    <!-- /WIDGET BOX TITLE -->
                    <!-- WIDGET BOX CONTENT -->
                    <div class="widget-box-content">

                        @foreach ($socials as $social)
                            <!-- FORM ROW -->
                            <div class="form-row split">

                                {{-- @foreach ($pair as $social) --}}
                                <!-- FORM ITEM -->
                                <div class="form-item">
                                    <!-- FORM INPUT -->
                                    <div class="form-input social-input">
                                        <!-- SOCIAL LINK -->
                                        <div class="social-link no-hover {{ $social }}">
                                            <!-- ICON FACEBOOK -->
                                            <svg class="icon-icon">
                                                <use xlink:href="#svg-{{ $social }}"></use>
                                            </svg>
                                            <!-- /ICON FACEBOOK -->
                                        </div>
                                        <!-- /SOCIAL LINK -->

                                        <label for="social-account-facebook">Startup {{ ucfirst($social) }}
                                            Link</label>
                                        <input type="text" id="social-{{ $social }}"
                                            name="{{ $social }}" value="{{ $user->socials[$social] ?? '' }}"
                                            onchange="updateSocials()">
                                    </div>
                                    <!-- /FORM INPUT -->
                                </div>
                                <!-- /FORM ITEM -->
                                {{-- @endforeach --}}

                            </div>
                            <!-- /FORM ROW -->
                        @endforeach
                    </div>
                    <!-- WIDGET BOX CONTENT -->
                </div>
                <!-- /WIDGET BOX -->


                <!-- WIDGET BOX -->
                <div class="widget-box datablock" style="display:none" id="logocover">
                    <!-- WIDGET BOX TITLE -->
                    <p class="widget-box-title">Logo and Cover</p>

                    <!-- /WIDGET BOX TITLE -->
                    <!-- WIDGET BOX CONTENT -->
                    <div class="widget-box-content">


                        Yha
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
            font-weight: 700;
            color: #fff;
            margin-bottom: 0.5rem;
            margin-left: 10px
        }

        .nogap+.nogap {
            margin-top: 15px;
        }

        .form-select {
            height: auto;
        }
    </style>
@endpush

@section('scripts')
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
            $('.tabitem').click(function() {
                $('.tabitem').removeClass('active');
                $(this).addClass('active');
                var identifier = $(this).data('identifier');
                $('.datablock').hide();
                $('#' + identifier).show();
            });


            $('.multi-select').selectize({
                placeholder: 'Select...',
                plugins: ["remove_button", "restore_on_backspace"],
            });

            $('.single-select').selectize({
                placeholder: 'Select...',
            });

            $('input[name="name"]').on('keyup', function() {
                $("#preview-name").text($(this).val());
            });
            $('input[name="bio"]').on('keyup', function() {
                $("#preview-bio").text($(this).val());
            });
        });

        function updateCheck(el) {
            var input = $(el).find('input');
            if (input.val() == '1') {
                input.val('0');
            } else {
                input.val('1');
            }
        }

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
