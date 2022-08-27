@php
$sidebaritems = [
    [
        'title' => 'My Profile',
        'svg' => 'profile',
        'text' => 'Change your avatar & cover, accept friends, read messages and more!',
        'identifier' => 'profile',
        'links' => [
            [
                'title' => 'Profile Info',
                'url' => route('profile.info'),
            ],
            [
                'title' => 'Social & Streams',
                'url' => route('profile.socials'),
            ],
            [
                'title' => 'Refferals',
                'url' => route('profile.refferals'),
            ],
        ],
    ],
    // [
    //     'title' => 'Account',
    //     'svg' => 'settings',
    //     'text' => 'Change settings, configure notifications, and review your privacy',
    //     'identifier' => 'account',
    //     'links' => [
    //         [
    //             'title' => 'Account Info',
    //             'url' => '#',
    //         ],
    //         [
    //             'title' => 'Change Password',
    //             'url' => '#',
    //         ],
    //         [
    //             'title' => 'General Settings',
    //             'url' => '#',
    //         ],
    //     ],
    // ],
    [
        'title' => 'My Startups',
        'svg' => 'profile',
        'text' => 'Create new groups, manage the ones you created or accept invites!',
        'identifier' => 'startup',
        'links' => [
            [
                'title' => 'Manage Startups',
                'url' => route('startup.manage'),
            ],
        ],
    ],
];

// Get url from current page
$current_url = Request::url();
@endphp


<!-- GRID COLUMN -->
<div class="account-hub-sidebar">
    <!-- SIDEBAR BOX -->
    <div class="sidebar-box no-padding">
        <!-- SIDEBAR MENU -->
        <div class="sidebar-menu">
            {{-- <!-- SIDEBAR MENU ITEM -->
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
                    <a class="sidebar-menu-link active" href="#">Profile Info</a>
                    <!-- /SIDEBAR MENU LINK -->

                    <!-- SIDEBAR MENU LINK -->
                    <a class="sidebar-menu-link" href="#">Social &amp; Stream</a>
                    <!-- /SIDEBAR MENU LINK -->

                    <!-- SIDEBAR MENU LINK -->
                    <a class="sidebar-menu-link" href="#">Notifications</a>
                    <!-- /SIDEBAR MENU LINK -->

                    <!-- SIDEBAR MENU LINK -->
                    <a class="sidebar-menu-link" href="#">Messages</a>
                    <!-- /SIDEBAR MENU LINK -->

                    <!-- SIDEBAR MENU LINK -->
                    <a class="sidebar-menu-link" href="#">Friend Requests</a>
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
                    <a class="sidebar-menu-link" href="#">Account Info</a>
                    <!-- /SIDEBAR MENU LINK -->

                    <!-- SIDEBAR MENU LINK -->
                    <a class="sidebar-menu-link" href="#">Change Password</a>
                    <!-- /SIDEBAR MENU LINK -->

                    <!-- SIDEBAR MENU LINK -->
                    <a class="sidebar-menu-link" href="#">General Settings</a>
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
                    <a class="sidebar-menu-link" href="#">Manage Groups</a>
                    <!-- /SIDEBAR MENU LINK -->

                    <!-- SIDEBAR MENU LINK -->
                    <a class="sidebar-menu-link" href="#">Invitations</a>
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
                    <a class="sidebar-menu-link" href="#">My Account</a>
                    <!-- /SIDEBAR MENU LINK -->

                    <!-- SIDEBAR MENU LINK -->
                    <a class="sidebar-menu-link" href="#">Sales Statement</a>
                    <!-- /SIDEBAR MENU LINK -->

                    <!-- SIDEBAR MENU LINK -->
                    <a class="sidebar-menu-link" href="#">Manage Items</a>
                    <!-- /SIDEBAR MENU LINK -->

                    <!-- SIDEBAR MENU LINK -->
                    <a class="sidebar-menu-link" href="#">Downloads</a>
                    <!-- /SIDEBAR MENU LINK -->
                </div>
                <!-- /SIDEBAR MENU BODY -->
            </div>
            <!-- /SIDEBAR MENU ITEM --> --}}

            @foreach ($sidebaritems as $item)
                <div class="sidebar-menu-item">
                    <!-- SIDEBAR MENU HEADER -->
                    <div class="sidebar-menu-header accordion-trigger-linked">
                        <!-- SIDEBAR MENU HEADER ICON -->
                        <svg class="sidebar-menu-header-icon icon-icon">
                            <use xlink:href="#svg-{{ $item['svg'] }}"></use>
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
                        <p class="sidebar-menu-header-title">{{ $item['title'] }}</p>
                        <!-- /SIDEBAR MENU HEADER TITLE -->

                        <!-- SIDEBAR MENU HEADER TEXT -->
                        <p class="sidebar-menu-header-text">{{ $item['text'] }}</p>
                        <!-- /SIDEBAR MENU HEADER TEXT -->
                    </div>
                    <!-- /SIDEBAR MENU HEADER -->

                    <!-- SIDEBAR MENU BODY -->
                    <div
                        class="sidebar-menu-body accordion-content-linked 
                    @if (strpos($current_url, $item['identifier']) !== false) accordion-open @endif
                    ">
                        @foreach ($item['links'] as $link)
                            <a class="sidebar-menu-link @if ($link['url'] == $current_url) active @endif"
                                href="{{ $link['url'] }}">{{ $link['title'] }}</a>
                        @endforeach
                    </div>
                    <!-- /SIDEBAR MENU BODY -->
                </div>
            @endforeach

        </div>
        <!-- /SIDEBAR MENU -->



        <!-- SIDEBAR BOX FOOTER -->
        <div class="sidebar-box-footer">
            {{-- <!-- BUTTON -->
            <p class="button primary">Save Changes!</p>
            <!-- /BUTTON --> --}}

            <!-- BUTTON -->
            <p class="button white small-space" onclick="window.location.reload()">
                Discard All</p>
            <!-- /BUTTON -->
        </div>
        <!-- /SIDEBAR BOX FOOTER -->
    </div>
    <!-- /SIDEBAR BOX -->
</div>
<!-- /GRID COLUMN -->
