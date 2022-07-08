<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- bootstrap 4.3.1 -->
    <link rel="stylesheet" href="/assets/vikinger/css/vendor/bootstrap.min.css">
    <!-- styles -->
    <link rel="stylesheet" href="/assets/vikinger/css/styles.min.css">
    <!-- simplebar styles -->
    <link rel="stylesheet" href="/assets/vikinger/css/vendor/simplebar.css">
    <!-- tiny-slider styles -->
    <link rel="stylesheet" href="/assets/vikinger/css/vendor/tiny-slider.css">
    <!-- favicon -->
    <link rel="icon" href="/assets/vikinger/img/landing/favicon.png">
    <title>Vikinger | Newsfeed</title>
</head>

<body>

    <!-- PAGE LOADER -->
    <div class="page-loader">
        <!-- PAGE LOADER DECORATION -->
        <div class="page-loader-decoration">
            <img src="/assets/vikinger/img/landing/logo.png" alt="" width="85px">
        </div>
        <!-- /PAGE LOADER DECORATION -->

        <!-- PAGE LOADER INFO -->
        <div class="page-loader-info">
            <!-- PAGE LOADER INFO TITLE -->
            <p class="page-loader-info-title">ConnectUp</p>
            <!-- /PAGE LOADER INFO TITLE -->

            <!-- PAGE LOADER INFO TEXT -->
            <p class="page-loader-info-text">Loading...</p>
            <!-- /PAGE LOADER INFO TEXT -->
        </div>
        <!-- /PAGE LOADER INFO -->

        <!-- PAGE LOADER INDICATOR -->
        <div class="page-loader-indicator loader-bars">
            <div class="loader-bar"></div>
            <div class="loader-bar"></div>
            <div class="loader-bar"></div>
            <div class="loader-bar"></div>
            <div class="loader-bar"></div>
            <div class="loader-bar"></div>
            <div class="loader-bar"></div>
            <div class="loader-bar"></div>
        </div>
        <!-- /PAGE LOADER INDICATOR -->
    </div>
    <!-- /PAGE LOADER -->

    {{-- <!-- NAVIGATION WIDGET -->
    <nav id="navigation-widget-small" class="navigation-widget navigation-widget-desktop closed sidebar left delayed">
        <!-- USER AVATAR -->
        <a class="user-avatar small no-outline online" href="profile-timeline.html">
            <!-- USER AVATAR CONTENT -->
            <div class="user-avatar-content">
                <!-- HEXAGON -->
                <div class="hexagon-image-30-32" data-src="/assets/vikinger/img/avatar/01.jpg"></div>
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

            <!-- USER AVATAR BADGE -->
            <div class="user-avatar-badge">
                <!-- USER AVATAR BADGE BORDER -->
                <div class="user-avatar-badge-border">
                    <!-- HEXAGON -->
                    <div class="hexagon-22-24"></div>
                    <!-- /HEXAGON -->
                </div>
                <!-- /USER AVATAR BADGE BORDER -->

                <!-- USER AVATAR BADGE CONTENT -->
                <div class="user-avatar-badge-content">
                    <!-- HEXAGON -->
                    <div class="hexagon-dark-16-18"></div>
                    <!-- /HEXAGON -->
                </div>
                <!-- /USER AVATAR BADGE CONTENT -->

                <!-- USER AVATAR BADGE TEXT -->
                <p class="user-avatar-badge-text">24</p>
                <!-- /USER AVATAR BADGE TEXT -->
            </div>
            <!-- /USER AVATAR BADGE -->
        </a>
        <!-- /USER AVATAR -->

        <!-- MENU -->
        <ul class="menu small">
            <!-- MENU ITEM -->
            <li class="menu-item active">
                <!-- MENU ITEM LINK -->
                <a class="menu-item-link text-tooltip-tfr" href="newsfeed.html" data-title="Newsfeed">
                    <!-- MENU ITEM LINK ICON -->
                    <svg class="menu-item-link-icon icon-newsfeed">
                        <use xlink:href="#svg-newsfeed"></use>
                    </svg>
                    <!-- /MENU ITEM LINK ICON -->
                </a>
                <!-- /MENU ITEM LINK -->
            </li>
            <!-- /MENU ITEM -->

            <!-- MENU ITEM -->
            <li class="menu-item">
                <!-- MENU ITEM LINK -->
                <a class="menu-item-link text-tooltip-tfr" href="overview.html" data-title="Overview">
                    <!-- MENU ITEM LINK ICON -->
                    <svg class="menu-item-link-icon icon-overview">
                        <use xlink:href="#svg-overview"></use>
                    </svg>
                    <!-- /MENU ITEM LINK ICON -->
                </a>
                <!-- /MENU ITEM LINK -->
            </li>
            <!-- /MENU ITEM -->

            <!-- MENU ITEM -->
            <li class="menu-item">
                <!-- MENU ITEM LINK -->
                <a class="menu-item-link text-tooltip-tfr" href="groups.html" data-title="Groups">
                    <!-- MENU ITEM LINK ICON -->
                    <svg class="menu-item-link-icon icon-group">
                        <use xlink:href="#svg-group"></use>
                    </svg>
                    <!-- /MENU ITEM LINK ICON -->
                </a>
                <!-- /MENU ITEM LINK -->
            </li>
            <!-- /MENU ITEM -->

            <!-- MENU ITEM -->
            <li class="menu-item">
                <!-- MENU ITEM LINK -->
                <a class="menu-item-link text-tooltip-tfr" href="members.html" data-title="Members">
                    <!-- MENU ITEM LINK ICON -->
                    <svg class="menu-item-link-icon icon-members">
                        <use xlink:href="#svg-members"></use>
                    </svg>
                    <!-- /MENU ITEM LINK ICON -->
                </a>
                <!-- /MENU ITEM LINK -->
            </li>
            <!-- /MENU ITEM -->

            <!-- MENU ITEM -->
            <li class="menu-item">
                <!-- MENU ITEM LINK -->
                <a class="menu-item-link text-tooltip-tfr" href="badges.html" data-title="Badges">
                    <!-- MENU ITEM LINK ICON -->
                    <svg class="menu-item-link-icon icon-badges">
                        <use xlink:href="#svg-badges"></use>
                    </svg>
                    <!-- /MENU ITEM LINK ICON -->
                </a>
                <!-- /MENU ITEM LINK -->
            </li>
            <!-- /MENU ITEM -->

            <!-- MENU ITEM -->
            <li class="menu-item">
                <!-- MENU ITEM LINK -->
                <a class="menu-item-link text-tooltip-tfr" href="quests.html" data-title="Quests">
                    <!-- MENU ITEM LINK ICON -->
                    <svg class="menu-item-link-icon icon-quests">
                        <use xlink:href="#svg-quests"></use>
                    </svg>
                    <!-- /MENU ITEM LINK ICON -->
                </a>
                <!-- /MENU ITEM LINK -->
            </li>
            <!-- /MENU ITEM -->

            <!-- MENU ITEM -->
            <li class="menu-item">
                <!-- MENU ITEM LINK -->
                <a class="menu-item-link text-tooltip-tfr" href="streams.html" data-title="Streams">
                    <!-- MENU ITEM LINK ICON -->
                    <svg class="menu-item-link-icon icon-streams">
                        <use xlink:href="#svg-streams"></use>
                    </svg>
                    <!-- /MENU ITEM LINK ICON -->
                </a>
                <!-- /MENU ITEM LINK -->
            </li>
            <!-- /MENU ITEM -->

            <!-- MENU ITEM -->
            <li class="menu-item">
                <!-- MENU ITEM LINK -->
                <a class="menu-item-link text-tooltip-tfr" href="events.html" data-title="Events">
                    <!-- MENU ITEM LINK ICON -->
                    <svg class="menu-item-link-icon icon-events">
                        <use xlink:href="#svg-events"></use>
                    </svg>
                    <!-- /MENU ITEM LINK ICON -->
                </a>
                <!-- /MENU ITEM LINK -->
            </li>
            <!-- /MENU ITEM -->

            <!-- MENU ITEM -->
            <li class="menu-item">
                <!-- MENU ITEM LINK -->
                <a class="menu-item-link text-tooltip-tfr" href="forums.html" data-title="Forums">
                    <!-- MENU ITEM LINK ICON -->
                    <svg class="menu-item-link-icon icon-forums">
                        <use xlink:href="#svg-forums"></use>
                    </svg>
                    <!-- /MENU ITEM LINK ICON -->
                </a>
                <!-- /MENU ITEM LINK -->
            </li>
            <!-- /MENU ITEM -->

            <!-- MENU ITEM -->
            <li class="menu-item">
                <!-- MENU ITEM LINK -->
                <a class="menu-item-link text-tooltip-tfr" href="marketplace.html" data-title="Marketplace">
                    <!-- MENU ITEM LINK ICON -->
                    <svg class="menu-item-link-icon icon-marketplace">
                        <use xlink:href="#svg-marketplace"></use>
                    </svg>
                    <!-- /MENU ITEM LINK ICON -->
                </a>
                <!-- /MENU ITEM LINK -->
            </li>
            <!-- /MENU ITEM -->
        </ul>
        <!-- /MENU -->
    </nav>
    <!-- /NAVIGATION WIDGET -->

    <!-- NAVIGATION WIDGET -->
    <nav id="navigation-widget" class="navigation-widget navigation-widget-desktop sidebar left hidden"
        data-simplebar>
        <!-- NAVIGATION WIDGET COVER -->
        <figure class="navigation-widget-cover liquid">
            <img src="/assets/vikinger/img/cover/01.jpg" alt="cover-01">
        </figure>
        <!-- /NAVIGATION WIDGET COVER -->

        <!-- USER SHORT DESCRIPTION -->
        <div class="user-short-description">
            <!-- USER SHORT DESCRIPTION AVATAR -->
            <a class="user-short-description-avatar user-avatar medium" href="profile-timeline.html">
                <!-- USER AVATAR BORDER -->
                <div class="user-avatar-border">
                    <!-- HEXAGON -->
                    <div class="hexagon-120-132"></div>
                    <!-- /HEXAGON -->
                </div>
                <!-- /USER AVATAR BORDER -->

                <!-- USER AVATAR CONTENT -->
                <div class="user-avatar-content">
                    <!-- HEXAGON -->
                    <div class="hexagon-image-82-90" data-src="/assets/vikinger/img/avatar/01.jpg"></div>
                    <!-- /HEXAGON -->
                </div>
                <!-- /USER AVATAR CONTENT -->

                <!-- USER AVATAR PROGRESS -->
                <div class="user-avatar-progress">
                    <!-- HEXAGON -->
                    <div class="hexagon-progress-100-110"></div>
                    <!-- /HEXAGON -->
                </div>
                <!-- /USER AVATAR PROGRESS -->

                <!-- USER AVATAR PROGRESS BORDER -->
                <div class="user-avatar-progress-border">
                    <!-- HEXAGON -->
                    <div class="hexagon-border-100-110"></div>
                    <!-- /HEXAGON -->
                </div>
                <!-- /USER AVATAR PROGRESS BORDER -->

                <!-- USER AVATAR BADGE -->
                <div class="user-avatar-badge">
                    <!-- USER AVATAR BADGE BORDER -->
                    <div class="user-avatar-badge-border">
                        <!-- HEXAGON -->
                        <div class="hexagon-32-36"></div>
                        <!-- /HEXAGON -->
                    </div>
                    <!-- /USER AVATAR BADGE BORDER -->

                    <!-- USER AVATAR BADGE CONTENT -->
                    <div class="user-avatar-badge-content">
                        <!-- HEXAGON -->
                        <div class="hexagon-dark-26-28"></div>
                        <!-- /HEXAGON -->
                    </div>
                    <!-- /USER AVATAR BADGE CONTENT -->

                    <!-- USER AVATAR BADGE TEXT -->
                    <p class="user-avatar-badge-text">24</p>
                    <!-- /USER AVATAR BADGE TEXT -->
                </div>
                <!-- /USER AVATAR BADGE -->
            </a>
            <!-- /USER SHORT DESCRIPTION AVATAR -->

            <!-- USER SHORT DESCRIPTION TITLE -->
            <p class="user-short-description-title"><a href="profile-timeline.html">Marina Valentine</a></p>
            <!-- /USER SHORT DESCRIPTION TITLE -->

            <!-- USER SHORT DESCRIPTION TEXT -->
            <p class="user-short-description-text"><a href="#">www.gamehuntress.com</a></p>
            <!-- /USER SHORT DESCRIPTION TEXT -->
        </div>
        <!-- /USER SHORT DESCRIPTION -->

        <!-- BADGE LIST -->
        <div class="badge-list small">
            <!-- BADGE ITEM -->
            <div class="badge-item">
                <img src="/assets/vikinger/img/badge/gold-s.png" alt="badge-gold-s">
            </div>
            <!-- /BADGE ITEM -->

            <!-- BADGE ITEM -->
            <div class="badge-item">
                <img src="/assets/vikinger/img/badge/age-s.png" alt="badge-age-s">
            </div>
            <!-- /BADGE ITEM -->

            <!-- BADGE ITEM -->
            <div class="badge-item">
                <img src="/assets/vikinger/img/badge/caffeinated-s.png" alt="badge-caffeinated-s">
            </div>
            <!-- /BADGE ITEM -->

            <!-- BADGE ITEM -->
            <div class="badge-item">
                <img src="/assets/vikinger/img/badge/warrior-s.png" alt="badge-warrior-s">
            </div>
            <!-- /BADGE ITEM -->

            <!-- BADGE ITEM -->
            <a class="badge-item" href="profile-badges.html">
                <img src="/assets/vikinger/img/badge/blank-s.png" alt="badge-blank-s">
                <!-- BADGE ITEM TEXT -->
                <p class="badge-item-text">+9</p>
                <!-- /BADGE ITEM TEXT -->
            </a>
            <!-- /BADGE ITEM -->
        </div>
        <!-- /BADGE LIST -->

        <!-- USER STATS -->
        <div class="user-stats">
            <!-- USER STAT -->
            <div class="user-stat">
                <!-- USER STAT TITLE -->
                <p class="user-stat-title">930</p>
                <!-- /USER STAT TITLE -->

                <!-- USER STAT TEXT -->
                <p class="user-stat-text">posts</p>
                <!-- /USER STAT TEXT -->
            </div>
            <!-- /USER STAT -->

            <!-- USER STAT -->
            <div class="user-stat">
                <!-- USER STAT TITLE -->
                <p class="user-stat-title">82</p>
                <!-- /USER STAT TITLE -->

                <!-- USER STAT TEXT -->
                <p class="user-stat-text">friends</p>
                <!-- /USER STAT TEXT -->
            </div>
            <!-- /USER STAT -->

            <!-- USER STAT -->
            <div class="user-stat">
                <!-- USER STAT TITLE -->
                <p class="user-stat-title">5.7k</p>
                <!-- /USER STAT TITLE -->

                <!-- USER STAT TEXT -->
                <p class="user-stat-text">visits</p>
                <!-- /USER STAT TEXT -->
            </div>
            <!-- /USER STAT -->
        </div>
        <!-- /USER STATS -->

        <!-- MENU -->
        <ul class="menu">
            <!-- MENU ITEM -->
            <li class="menu-item active">
                <!-- MENU ITEM LINK -->
                <a class="menu-item-link" href="newsfeed.html">
                    <!-- MENU ITEM LINK ICON -->
                    <svg class="menu-item-link-icon icon-newsfeed">
                        <use xlink:href="#svg-newsfeed"></use>
                    </svg>
                    <!-- /MENU ITEM LINK ICON -->
                    Newsfeed
                </a>
                <!-- /MENU ITEM LINK -->
            </li>
            <!-- /MENU ITEM -->

            <!-- MENU ITEM -->
            <li class="menu-item">
                <!-- MENU ITEM LINK -->
                <a class="menu-item-link" href="overview.html">
                    <!-- MENU ITEM LINK ICON -->
                    <svg class="menu-item-link-icon icon-overview">
                        <use xlink:href="#svg-overview"></use>
                    </svg>
                    <!-- /MENU ITEM LINK ICON -->
                    Overview
                </a>
                <!-- /MENU ITEM LINK -->
            </li>
            <!-- /MENU ITEM -->

            <!-- MENU ITEM -->
            <li class="menu-item">
                <!-- MENU ITEM LINK -->
                <a class="menu-item-link" href="groups.html">
                    <!-- MENU ITEM LINK ICON -->
                    <svg class="menu-item-link-icon icon-group">
                        <use xlink:href="#svg-group"></use>
                    </svg>
                    <!-- /MENU ITEM LINK ICON -->
                    Groups
                </a>
                <!-- /MENU ITEM LINK -->
            </li>
            <!-- /MENU ITEM -->

            <!-- MENU ITEM -->
            <li class="menu-item">
                <!-- MENU ITEM LINK -->
                <a class="menu-item-link" href="members.html">
                    <!-- MENU ITEM LINK ICON -->
                    <svg class="menu-item-link-icon icon-members">
                        <use xlink:href="#svg-members"></use>
                    </svg>
                    <!-- /MENU ITEM LINK ICON -->
                    Members
                </a>
                <!-- /MENU ITEM LINK -->
            </li>
            <!-- /MENU ITEM -->

            <!-- MENU ITEM -->
            <li class="menu-item">
                <!-- MENU ITEM LINK -->
                <a class="menu-item-link" href="badges.html">
                    <!-- MENU ITEM LINK ICON -->
                    <svg class="menu-item-link-icon icon-badges">
                        <use xlink:href="#svg-badges"></use>
                    </svg>
                    <!-- /MENU ITEM LINK ICON -->
                    Badges
                </a>
                <!-- /MENU ITEM LINK -->
            </li>
            <!-- /MENU ITEM -->

            <!-- MENU ITEM -->
            <li class="menu-item">
                <!-- MENU ITEM LINK -->
                <a class="menu-item-link" href="quests.html">
                    <!-- MENU ITEM LINK ICON -->
                    <svg class="menu-item-link-icon icon-quests">
                        <use xlink:href="#svg-quests"></use>
                    </svg>
                    <!-- /MENU ITEM LINK ICON -->
                    Quests
                </a>
                <!-- /MENU ITEM LINK -->
            </li>
            <!-- /MENU ITEM -->

            <!-- MENU ITEM -->
            <li class="menu-item">
                <!-- MENU ITEM LINK -->
                <a class="menu-item-link" href="streams.html">
                    <!-- MENU ITEM LINK ICON -->
                    <svg class="menu-item-link-icon icon-streams">
                        <use xlink:href="#svg-streams"></use>
                    </svg>
                    <!-- /MENU ITEM LINK ICON -->
                    Streams
                </a>
                <!-- /MENU ITEM LINK -->
            </li>
            <!-- /MENU ITEM -->

            <!-- MENU ITEM -->
            <li class="menu-item">
                <!-- MENU ITEM LINK -->
                <a class="menu-item-link" href="events.html">
                    <!-- MENU ITEM LINK ICON -->
                    <svg class="menu-item-link-icon icon-events">
                        <use xlink:href="#svg-events"></use>
                    </svg>
                    <!-- /MENU ITEM LINK ICON -->
                    Events
                </a>
                <!-- /MENU ITEM LINK -->
            </li>
            <!-- /MENU ITEM -->

            <!-- MENU ITEM -->
            <li class="menu-item">
                <!-- MENU ITEM LINK -->
                <a class="menu-item-link" href="forums.html">
                    <!-- MENU ITEM LINK ICON -->
                    <svg class="menu-item-link-icon icon-forums">
                        <use xlink:href="#svg-forums"></use>
                    </svg>
                    <!-- /MENU ITEM LINK ICON -->
                    Forums
                </a>
                <!-- /MENU ITEM LINK -->
            </li>
            <!-- /MENU ITEM -->

            <!-- MENU ITEM -->
            <li class="menu-item">
                <!-- MENU ITEM LINK -->
                <a class="menu-item-link" href="marketplace.html">
                    <!-- MENU ITEM LINK ICON -->
                    <svg class="menu-item-link-icon icon-marketplace">
                        <use xlink:href="#svg-marketplace"></use>
                    </svg>
                    <!-- /MENU ITEM LINK ICON -->
                    Marketplace
                </a>
                <!-- /MENU ITEM LINK -->
            </li>
            <!-- /MENU ITEM -->
        </ul>
        <!-- /MENU -->
    </nav>
    <!-- /NAVIGATION WIDGET -->

    <!-- NAVIGATION WIDGET -->
    <nav id="navigation-widget-mobile" class="navigation-widget navigation-widget-mobile sidebar left hidden"
        data-simplebar>
        <!-- NAVIGATION WIDGET CLOSE BUTTON -->
        <div class="navigation-widget-close-button">
            <!-- NAVIGATION WIDGET CLOSE BUTTON ICON -->
            <svg class="navigation-widget-close-button-icon icon-back-arrow">
                <use xlink:href="#svg-back-arrow"></use>
            </svg>
            <!-- NAVIGATION WIDGET CLOSE BUTTON ICON -->
        </div>
        <!-- /NAVIGATION WIDGET CLOSE BUTTON -->

        <!-- NAVIGATION WIDGET INFO WRAP -->
        <div class="navigation-widget-info-wrap">
            <!-- NAVIGATION WIDGET INFO -->
            <div class="navigation-widget-info">
                <!-- USER AVATAR -->
                <a class="user-avatar small no-outline" href="profile-timeline.html">
                    <!-- USER AVATAR CONTENT -->
                    <div class="user-avatar-content">
                        <!-- HEXAGON -->
                        <div class="hexagon-image-30-32" data-src="/assets/vikinger/img/avatar/01.jpg"></div>
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

                    <!-- USER AVATAR BADGE -->
                    <div class="user-avatar-badge">
                        <!-- USER AVATAR BADGE BORDER -->
                        <div class="user-avatar-badge-border">
                            <!-- HEXAGON -->
                            <div class="hexagon-22-24"></div>
                            <!-- /HEXAGON -->
                        </div>
                        <!-- /USER AVATAR BADGE BORDER -->

                        <!-- USER AVATAR BADGE CONTENT -->
                        <div class="user-avatar-badge-content">
                            <!-- HEXAGON -->
                            <div class="hexagon-dark-16-18"></div>
                            <!-- /HEXAGON -->
                        </div>
                        <!-- /USER AVATAR BADGE CONTENT -->

                        <!-- USER AVATAR BADGE TEXT -->
                        <p class="user-avatar-badge-text">24</p>
                        <!-- /USER AVATAR BADGE TEXT -->
                    </div>
                    <!-- /USER AVATAR BADGE -->
                </a>
                <!-- /USER AVATAR -->

                <!-- NAVIGATION WIDGET INFO TITLE -->
                <p class="navigation-widget-info-title"><a href="profile-timeline.html">Marina Valentine</a></p>
                <!-- /NAVIGATION WIDGET INFO TITLE -->

                <!-- NAVIGATION WIDGET INFO TEXT -->
                <p class="navigation-widget-info-text">Welcome Back!</p>
                <!-- /NAVIGATION WIDGET INFO TEXT -->
            </div>
            <!-- /NAVIGATION WIDGET INFO -->

            <!-- NAVIGATION WIDGET BUTTON -->
            <p class="navigation-widget-info-button button small secondary">Logout</p>
            <!-- /NAVIGATION WIDGET BUTTON -->
        </div>
        <!-- /NAVIGATION WIDGET INFO WRAP -->

        <!-- NAVIGATION WIDGET SECTION TITLE -->
        <p class="navigation-widget-section-title">Sections</p>
        <!-- /NAVIGATION WIDGET SECTION TITLE -->

        <!-- MENU -->
        <ul class="menu">
            <!-- MENU ITEM -->
            <li class="menu-item active">
                <!-- MENU ITEM LINK -->
                <a class="menu-item-link" href="newsfeed.html">
                    <!-- MENU ITEM LINK ICON -->
                    <svg class="menu-item-link-icon icon-newsfeed">
                        <use xlink:href="#svg-newsfeed"></use>
                    </svg>
                    <!-- /MENU ITEM LINK ICON -->
                    Newsfeed
                </a>
                <!-- /MENU ITEM LINK -->
            </li>
            <!-- /MENU ITEM -->

            <!-- MENU ITEM -->
            <li class="menu-item">
                <!-- MENU ITEM LINK -->
                <a class="menu-item-link" href="overview.html">
                    <!-- MENU ITEM LINK ICON -->
                    <svg class="menu-item-link-icon icon-overview">
                        <use xlink:href="#svg-overview"></use>
                    </svg>
                    <!-- /MENU ITEM LINK ICON -->
                    Overview
                </a>
                <!-- /MENU ITEM LINK -->
            </li>
            <!-- /MENU ITEM -->

            <!-- MENU ITEM -->
            <li class="menu-item">
                <!-- MENU ITEM LINK -->
                <a class="menu-item-link" href="groups.html">
                    <!-- MENU ITEM LINK ICON -->
                    <svg class="menu-item-link-icon icon-group">
                        <use xlink:href="#svg-group"></use>
                    </svg>
                    <!-- /MENU ITEM LINK ICON -->
                    Groups
                </a>
                <!-- /MENU ITEM LINK -->
            </li>
            <!-- /MENU ITEM -->

            <!-- MENU ITEM -->
            <li class="menu-item">
                <!-- MENU ITEM LINK -->
                <a class="menu-item-link" href="members.html">
                    <!-- MENU ITEM LINK ICON -->
                    <svg class="menu-item-link-icon icon-members">
                        <use xlink:href="#svg-members"></use>
                    </svg>
                    <!-- /MENU ITEM LINK ICON -->
                    Members
                </a>
                <!-- /MENU ITEM LINK -->
            </li>
            <!-- /MENU ITEM -->

            <!-- MENU ITEM -->
            <li class="menu-item">
                <!-- MENU ITEM LINK -->
                <a class="menu-item-link" href="badges.html">
                    <!-- MENU ITEM LINK ICON -->
                    <svg class="menu-item-link-icon icon-badges">
                        <use xlink:href="#svg-badges"></use>
                    </svg>
                    <!-- /MENU ITEM LINK ICON -->
                    Badges
                </a>
                <!-- /MENU ITEM LINK -->
            </li>
            <!-- /MENU ITEM -->

            <!-- MENU ITEM -->
            <li class="menu-item">
                <!-- MENU ITEM LINK -->
                <a class="menu-item-link" href="quests.html">
                    <!-- MENU ITEM LINK ICON -->
                    <svg class="menu-item-link-icon icon-quests">
                        <use xlink:href="#svg-quests"></use>
                    </svg>
                    <!-- /MENU ITEM LINK ICON -->
                    Quests
                </a>
                <!-- /MENU ITEM LINK -->
            </li>
            <!-- /MENU ITEM -->

            <!-- MENU ITEM -->
            <li class="menu-item">
                <!-- MENU ITEM LINK -->
                <a class="menu-item-link" href="streams.html">
                    <!-- MENU ITEM LINK ICON -->
                    <svg class="menu-item-link-icon icon-streams">
                        <use xlink:href="#svg-streams"></use>
                    </svg>
                    <!-- /MENU ITEM LINK ICON -->
                    Streams
                </a>
                <!-- /MENU ITEM LINK -->
            </li>
            <!-- /MENU ITEM -->

            <!-- MENU ITEM -->
            <li class="menu-item">
                <!-- MENU ITEM LINK -->
                <a class="menu-item-link" href="events.html">
                    <!-- MENU ITEM LINK ICON -->
                    <svg class="menu-item-link-icon icon-events">
                        <use xlink:href="#svg-events"></use>
                    </svg>
                    <!-- /MENU ITEM LINK ICON -->
                    Events
                </a>
                <!-- /MENU ITEM LINK -->
            </li>
            <!-- /MENU ITEM -->

            <!-- MENU ITEM -->
            <li class="menu-item">
                <!-- MENU ITEM LINK -->
                <a class="menu-item-link" href="forums.html">
                    <!-- MENU ITEM LINK ICON -->
                    <svg class="menu-item-link-icon icon-forums">
                        <use xlink:href="#svg-forums"></use>
                    </svg>
                    <!-- /MENU ITEM LINK ICON -->
                    Forums
                </a>
                <!-- /MENU ITEM LINK -->
            </li>
            <!-- /MENU ITEM -->

            <!-- MENU ITEM -->
            <li class="menu-item">
                <!-- MENU ITEM LINK -->
                <a class="menu-item-link" href="marketplace.html">
                    <!-- MENU ITEM LINK ICON -->
                    <svg class="menu-item-link-icon icon-marketplace">
                        <use xlink:href="#svg-marketplace"></use>
                    </svg>
                    <!-- /MENU ITEM LINK ICON -->
                    Marketplace
                </a>
                <!-- /MENU ITEM LINK -->
            </li>
            <!-- /MENU ITEM -->
        </ul>
        <!-- /MENU -->

        <!-- NAVIGATION WIDGET SECTION TITLE -->
        <p class="navigation-widget-section-title">My Profile</p>
        <!-- /NAVIGATION WIDGET SECTION TITLE -->

        <!-- NAVIGATION WIDGET SECTION LINK -->
        <a class="navigation-widget-section-link" href="hub-profile-info.html">Profile Info</a>
        <!-- /NAVIGATION WIDGET SECTION LINK -->

        <!-- NAVIGATION WIDGET SECTION LINK -->
        <a class="navigation-widget-section-link" href="hub-profile-social.html">Social &amp; Stream</a>
        <!-- /NAVIGATION WIDGET SECTION LINK -->

        <!-- NAVIGATION WIDGET SECTION LINK -->
        <a class="navigation-widget-section-link" href="hub-profile-notifications.html">Notifications</a>
        <!-- /NAVIGATION WIDGET SECTION LINK -->

        <!-- NAVIGATION WIDGET SECTION LINK -->
        <a class="navigation-widget-section-link" href="hub-profile-messages.html">Messages</a>
        <!-- /NAVIGATION WIDGET SECTION LINK -->

        <!-- NAVIGATION WIDGET SECTION LINK -->
        <a class="navigation-widget-section-link" href="hub-profile-requests.html">Friend Requests</a>
        <!-- /NAVIGATION WIDGET SECTION LINK -->

        <!-- NAVIGATION WIDGET SECTION TITLE -->
        <p class="navigation-widget-section-title">Account</p>
        <!-- /NAVIGATION WIDGET SECTION TITLE -->

        <!-- NAVIGATION WIDGET SECTION LINK -->
        <a class="navigation-widget-section-link" href="hub-account-info.html">Account Info</a>
        <!-- /NAVIGATION WIDGET SECTION LINK -->

        <!-- NAVIGATION WIDGET SECTION LINK -->
        <a class="navigation-widget-section-link" href="hub-account-password.html">Change Password</a>
        <!-- /NAVIGATION WIDGET SECTION LINK -->

        <!-- NAVIGATION WIDGET SECTION LINK -->
        <a class="navigation-widget-section-link" href="hub-account-settings.html">General Settings</a>
        <!-- /NAVIGATION WIDGET SECTION LINK -->

        <!-- NAVIGATION WIDGET SECTION TITLE -->
        <p class="navigation-widget-section-title">Groups</p>
        <!-- /NAVIGATION WIDGET SECTION TITLE -->

        <!-- NAVIGATION WIDGET SECTION LINK -->
        <a class="navigation-widget-section-link" href="hub-group-management.html">Manage Groups</a>
        <!-- /NAVIGATION WIDGET SECTION LINK -->

        <!-- NAVIGATION WIDGET SECTION LINK -->
        <a class="navigation-widget-section-link" href="hub-group-invitations.html">Invitations</a>
        <!-- /NAVIGATION WIDGET SECTION LINK -->

        <!-- NAVIGATION WIDGET SECTION TITLE -->
        <p class="navigation-widget-section-title">My Store</p>
        <!-- /NAVIGATION WIDGET SECTION TITLE -->

        <!-- NAVIGATION WIDGET SECTION LINK -->
        <a class="navigation-widget-section-link" href="hub-store-account.html">My Account <span
                class="highlighted">$250,32</span></a>
        <!-- /NAVIGATION WIDGET SECTION LINK -->

        <!-- NAVIGATION WIDGET SECTION LINK -->
        <a class="navigation-widget-section-link" href="hub-store-statement.html">Sales Statement</a>
        <!-- /NAVIGATION WIDGET SECTION LINK -->

        <!-- NAVIGATION WIDGET SECTION LINK -->
        <a class="navigation-widget-section-link" href="hub-store-items.html">Manage Items</a>
        <!-- /NAVIGATION WIDGET SECTION LINK -->

        <!-- NAVIGATION WIDGET SECTION LINK -->
        <a class="navigation-widget-section-link" href="hub-store-downloads.html">Downloads</a>
        <!-- /NAVIGATION WIDGET SECTION LINK -->

        <!-- NAVIGATION WIDGET SECTION TITLE -->
        <p class="navigation-widget-section-title">Main Links</p>
        <!-- /NAVIGATION WIDGET SECTION TITLE -->

        <!-- NAVIGATION WIDGET SECTION LINK -->
        <a class="navigation-widget-section-link" href="#">Home</a>
        <!-- /NAVIGATION WIDGET SECTION LINK -->

        <!-- NAVIGATION WIDGET SECTION LINK -->
        <a class="navigation-widget-section-link" href="#">Careers</a>
        <!-- /NAVIGATION WIDGET SECTION LINK -->

        <!-- NAVIGATION WIDGET SECTION LINK -->
        <a class="navigation-widget-section-link" href="#">Faqs</a>
        <!-- /NAVIGATION WIDGET SECTION LINK -->

        <!-- NAVIGATION WIDGET SECTION LINK -->
        <a class="navigation-widget-section-link" href="#">About Us</a>
        <!-- /NAVIGATION WIDGET SECTION LINK -->

        <!-- NAVIGATION WIDGET SECTION LINK -->
        <a class="navigation-widget-section-link" href="#">Our Blog</a>
        <!-- /NAVIGATION WIDGET SECTION LINK -->

        <!-- NAVIGATION WIDGET SECTION LINK -->
        <a class="navigation-widget-section-link" href="#">Contact Us</a>
        <!-- /NAVIGATION WIDGET SECTION LINK -->

        <!-- NAVIGATION WIDGET SECTION LINK -->
        <a class="navigation-widget-section-link" href="#">Privacy Policy</a>
        <!-- /NAVIGATION WIDGET SECTION LINK -->
    </nav>
    <!-- /NAVIGATION WIDGET --> --}}

    {{-- <!-- CHAT WIDGET -->
    <aside id="chat-widget-messages" class="chat-widget closed sidebar right">
        <!-- CHAT WIDGET MESSAGES -->
        <div class="chat-widget-messages" data-simplebar>
            <!-- CHAT WIDGET MESSAGE -->
            <div class="chat-widget-message">
                <!-- USER STATUS -->
                <div class="user-status">
                    <!-- USER STATUS AVATAR -->
                    <div class="user-status-avatar">
                        <!-- USER AVATAR -->
                        <div class="user-avatar small no-outline online">
                            <!-- USER AVATAR CONTENT -->
                            <div class="user-avatar-content">
                                <!-- HEXAGON -->
                                <div class="hexagon-image-30-32" data-src="/assets/vikinger/img/avatar/03.jpg"></div>
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

                            <!-- USER AVATAR BADGE -->
                            <div class="user-avatar-badge">
                                <!-- USER AVATAR BADGE BORDER -->
                                <div class="user-avatar-badge-border">
                                    <!-- HEXAGON -->
                                    <div class="hexagon-22-24"></div>
                                    <!-- /HEXAGON -->
                                </div>
                                <!-- /USER AVATAR BADGE BORDER -->

                                <!-- USER AVATAR BADGE CONTENT -->
                                <div class="user-avatar-badge-content">
                                    <!-- HEXAGON -->
                                    <div class="hexagon-dark-16-18"></div>
                                    <!-- /HEXAGON -->
                                </div>
                                <!-- /USER AVATAR BADGE CONTENT -->

                                <!-- USER AVATAR BADGE TEXT -->
                                <p class="user-avatar-badge-text">16</p>
                                <!-- /USER AVATAR BADGE TEXT -->
                            </div>
                            <!-- /USER AVATAR BADGE -->
                        </div>
                        <!-- /USER AVATAR -->
                    </div>
                    <!-- /USER STATUS AVATAR -->

                    <!-- USER STATUS TITLE -->
                    <p class="user-status-title"><span class="bold">Nick Grissom</span></p>
                    <!-- /USER STATUS TITLE -->

                    <!-- USER STATUS TEXT -->
                    <p class="user-status-text small">Can you stream the new game?</p>
                    <!-- /USER STATUS TEXT -->

                    <!-- USER STATUS TIMESTAMP -->
                    <p class="user-status-timestamp floaty">2hrs</p>
                    <!-- /USER STATUS TIMESTAMP -->
                </div>
                <!-- /USER STATUS -->
            </div>
            <!-- /CHAT WIDGET MESSAGE -->

            <!-- CHAT WIDGET MESSAGE -->
            <div class="chat-widget-message">
                <!-- USER STATUS -->
                <div class="user-status">
                    <!-- USER STATUS AVATAR -->
                    <div class="user-status-avatar">
                        <!-- USER AVATAR -->
                        <div class="user-avatar small no-outline online">
                            <!-- USER AVATAR CONTENT -->
                            <div class="user-avatar-content">
                                <!-- HEXAGON -->
                                <div class="hexagon-image-30-32" data-src="/assets/vikinger/img/avatar/20.jpg"></div>
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

                            <!-- USER AVATAR BADGE -->
                            <div class="user-avatar-badge">
                                <!-- USER AVATAR BADGE BORDER -->
                                <div class="user-avatar-badge-border">
                                    <!-- HEXAGON -->
                                    <div class="hexagon-22-24"></div>
                                    <!-- /HEXAGON -->
                                </div>
                                <!-- /USER AVATAR BADGE BORDER -->

                                <!-- USER AVATAR BADGE CONTENT -->
                                <div class="user-avatar-badge-content">
                                    <!-- HEXAGON -->
                                    <div class="hexagon-dark-16-18"></div>
                                    <!-- /HEXAGON -->
                                </div>
                                <!-- /USER AVATAR BADGE CONTENT -->

                                <!-- USER AVATAR BADGE TEXT -->
                                <p class="user-avatar-badge-text">9</p>
                                <!-- /USER AVATAR BADGE TEXT -->
                            </div>
                            <!-- /USER AVATAR BADGE -->
                        </div>
                        <!-- /USER AVATAR -->
                    </div>
                    <!-- /USER STATUS AVATAR -->

                    <!-- USER STATUS TITLE -->
                    <p class="user-status-title"><span class="bold">Matt Parker</span></p>
                    <!-- /USER STATUS TITLE -->

                    <!-- USER STATUS TEXT -->
                    <p class="user-status-text small">Can you stream the new game?</p>
                    <!-- /USER STATUS TEXT -->

                    <!-- USER STATUS TIMESTAMP -->
                    <p class="user-status-timestamp floaty">2hrs</p>
                    <!-- /USER STATUS TIMESTAMP -->
                </div>
                <!-- /USER STATUS -->
            </div>
            <!-- /CHAT WIDGET MESSAGE -->

            <!-- CHAT WIDGET MESSAGE -->
            <div class="chat-widget-message">
                <!-- USER STATUS -->
                <div class="user-status">
                    <!-- USER STATUS AVATAR -->
                    <div class="user-status-avatar">
                        <!-- USER AVATAR -->
                        <div class="user-avatar small no-outline away">
                            <!-- USER AVATAR CONTENT -->
                            <div class="user-avatar-content">
                                <!-- HEXAGON -->
                                <div class="hexagon-image-30-32" data-src="/assets/vikinger/img/avatar/05.jpg"></div>
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

                            <!-- USER AVATAR BADGE -->
                            <div class="user-avatar-badge">
                                <!-- USER AVATAR BADGE BORDER -->
                                <div class="user-avatar-badge-border">
                                    <!-- HEXAGON -->
                                    <div class="hexagon-22-24"></div>
                                    <!-- /HEXAGON -->
                                </div>
                                <!-- /USER AVATAR BADGE BORDER -->

                                <!-- USER AVATAR BADGE CONTENT -->
                                <div class="user-avatar-badge-content">
                                    <!-- HEXAGON -->
                                    <div class="hexagon-dark-16-18"></div>
                                    <!-- /HEXAGON -->
                                </div>
                                <!-- /USER AVATAR BADGE CONTENT -->

                                <!-- USER AVATAR BADGE TEXT -->
                                <p class="user-avatar-badge-text">12</p>
                                <!-- /USER AVATAR BADGE TEXT -->
                            </div>
                            <!-- /USER AVATAR BADGE -->
                        </div>
                        <!-- /USER AVATAR -->
                    </div>
                    <!-- /USER STATUS AVATAR -->

                    <!-- USER STATUS TITLE -->
                    <p class="user-status-title"><span class="bold">Neko Bebop</span></p>
                    <!-- /USER STATUS TITLE -->

                    <!-- USER STATUS TEXT -->
                    <p class="user-status-text small">Awesome! I'll see you there!</p>
                    <!-- /USER STATUS TEXT -->

                    <!-- USER STATUS TIMESTAMP -->
                    <p class="user-status-timestamp floaty">54mins</p>
                    <!-- /USER STATUS TIMESTAMP -->
                </div>
                <!-- /USER STATUS -->
            </div>
            <!-- /CHAT WIDGET MESSAGE -->

            <!-- CHAT WIDGET MESSAGE -->
            <div class="chat-widget-message">
                <!-- USER STATUS -->
                <div class="user-status">
                    <!-- USER STATUS AVATAR -->
                    <div class="user-status-avatar">
                        <!-- USER AVATAR -->
                        <div class="user-avatar small no-outline offline">
                            <!-- USER AVATAR CONTENT -->
                            <div class="user-avatar-content">
                                <!-- HEXAGON -->
                                <div class="hexagon-image-30-32" data-src="/assets/vikinger/img/avatar/04.jpg"></div>
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

                            <!-- USER AVATAR BADGE -->
                            <div class="user-avatar-badge">
                                <!-- USER AVATAR BADGE BORDER -->
                                <div class="user-avatar-badge-border">
                                    <!-- HEXAGON -->
                                    <div class="hexagon-22-24"></div>
                                    <!-- /HEXAGON -->
                                </div>
                                <!-- /USER AVATAR BADGE BORDER -->

                                <!-- USER AVATAR BADGE CONTENT -->
                                <div class="user-avatar-badge-content">
                                    <!-- HEXAGON -->
                                    <div class="hexagon-dark-16-18"></div>
                                    <!-- /HEXAGON -->
                                </div>
                                <!-- /USER AVATAR BADGE CONTENT -->

                                <!-- USER AVATAR BADGE TEXT -->
                                <p class="user-avatar-badge-text">6</p>
                                <!-- /USER AVATAR BADGE TEXT -->
                            </div>
                            <!-- /USER AVATAR BADGE -->
                        </div>
                        <!-- /USER AVATAR -->
                    </div>
                    <!-- /USER STATUS AVATAR -->

                    <!-- USER STATUS TITLE -->
                    <p class="user-status-title"><span class="bold">Bearded Wonder</span></p>
                    <!-- /USER STATUS TITLE -->

                    <!-- USER STATUS TEXT -->
                    <p class="user-status-text small">Great! Then we'll meet with them at...</p>
                    <!-- /USER STATUS TEXT -->

                    <!-- USER STATUS TIMESTAMP -->
                    <p class="user-status-timestamp floaty">2hrs</p>
                    <!-- /USER STATUS TIMESTAMP -->
                </div>
                <!-- /USER STATUS -->
            </div>
            <!-- /CHAT WIDGET MESSAGE -->

            <!-- CHAT WIDGET MESSAGE -->
            <div class="chat-widget-message">
                <!-- USER STATUS -->
                <div class="user-status">
                    <!-- USER STATUS AVATAR -->
                    <div class="user-status-avatar">
                        <!-- USER AVATAR -->
                        <div class="user-avatar small no-outline online">
                            <!-- USER AVATAR CONTENT -->
                            <div class="user-avatar-content">
                                <!-- HEXAGON -->
                                <div class="hexagon-image-30-32" data-src="/assets/vikinger/img/avatar/09.jpg"></div>
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

                            <!-- USER AVATAR BADGE -->
                            <div class="user-avatar-badge">
                                <!-- USER AVATAR BADGE BORDER -->
                                <div class="user-avatar-badge-border">
                                    <!-- HEXAGON -->
                                    <div class="hexagon-22-24"></div>
                                    <!-- /HEXAGON -->
                                </div>
                                <!-- /USER AVATAR BADGE BORDER -->

                                <!-- USER AVATAR BADGE CONTENT -->
                                <div class="user-avatar-badge-content">
                                    <!-- HEXAGON -->
                                    <div class="hexagon-dark-16-18"></div>
                                    <!-- /HEXAGON -->
                                </div>
                                <!-- /USER AVATAR BADGE CONTENT -->

                                <!-- USER AVATAR BADGE TEXT -->
                                <p class="user-avatar-badge-text">27</p>
                                <!-- /USER AVATAR BADGE TEXT -->
                            </div>
                            <!-- /USER AVATAR BADGE -->
                        </div>
                        <!-- /USER AVATAR -->
                    </div>
                    <!-- /USER STATUS AVATAR -->

                    <!-- USER STATUS TITLE -->
                    <p class="user-status-title"><span class="bold">Sandra Strange</span></p>
                    <!-- /USER STATUS TITLE -->

                    <!-- USER STATUS TEXT -->
                    <p class="user-status-text small">Can you stream the new game?</p>
                    <!-- /USER STATUS TEXT -->

                    <!-- USER STATUS TIMESTAMP -->
                    <p class="user-status-timestamp floaty">2hrs</p>
                    <!-- /USER STATUS TIMESTAMP -->
                </div>
                <!-- /USER STATUS -->
            </div>
            <!-- /CHAT WIDGET MESSAGE -->

            <!-- CHAT WIDGET MESSAGE -->
            <div class="chat-widget-message">
                <!-- USER STATUS -->
                <div class="user-status">
                    <!-- USER STATUS AVATAR -->
                    <div class="user-status-avatar">
                        <!-- USER AVATAR -->
                        <div class="user-avatar small no-outline online">
                            <!-- USER AVATAR CONTENT -->
                            <div class="user-avatar-content">
                                <!-- HEXAGON -->
                                <div class="hexagon-image-30-32" data-src="/assets/vikinger/img/avatar/12.jpg"></div>
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

                            <!-- USER AVATAR BADGE -->
                            <div class="user-avatar-badge">
                                <!-- USER AVATAR BADGE BORDER -->
                                <div class="user-avatar-badge-border">
                                    <!-- HEXAGON -->
                                    <div class="hexagon-22-24"></div>
                                    <!-- /HEXAGON -->
                                </div>
                                <!-- /USER AVATAR BADGE BORDER -->

                                <!-- USER AVATAR BADGE CONTENT -->
                                <div class="user-avatar-badge-content">
                                    <!-- HEXAGON -->
                                    <div class="hexagon-dark-16-18"></div>
                                    <!-- /HEXAGON -->
                                </div>
                                <!-- /USER AVATAR BADGE CONTENT -->

                                <!-- USER AVATAR BADGE TEXT -->
                                <p class="user-avatar-badge-text">10</p>
                                <!-- /USER AVATAR BADGE TEXT -->
                            </div>
                            <!-- /USER AVATAR BADGE -->
                        </div>
                        <!-- /USER AVATAR -->
                    </div>
                    <!-- /USER STATUS AVATAR -->

                    <!-- USER STATUS TITLE -->
                    <p class="user-status-title"><span class="bold">James Murdock</span></p>
                    <!-- /USER STATUS TITLE -->

                    <!-- USER STATUS TEXT -->
                    <p class="user-status-text small">Great! Then we'll meet with them at...</p>
                    <!-- /USER STATUS TEXT -->

                    <!-- USER STATUS TIMESTAMP -->
                    <p class="user-status-timestamp floaty">7hrs</p>
                    <!-- /USER STATUS TIMESTAMP -->
                </div>
                <!-- /USER STATUS -->
            </div>
            <!-- /CHAT WIDGET MESSAGE -->

            <!-- CHAT WIDGET MESSAGE -->
            <div class="chat-widget-message">
                <!-- USER STATUS -->
                <div class="user-status">
                    <!-- USER STATUS AVATAR -->
                    <div class="user-status-avatar">
                        <!-- USER AVATAR -->
                        <div class="user-avatar small no-outline away">
                            <!-- USER AVATAR CONTENT -->
                            <div class="user-avatar-content">
                                <!-- HEXAGON -->
                                <div class="hexagon-image-30-32" data-src="/assets/vikinger/img/avatar/10.jpg"></div>
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

                            <!-- USER AVATAR BADGE -->
                            <div class="user-avatar-badge">
                                <!-- USER AVATAR BADGE BORDER -->
                                <div class="user-avatar-badge-border">
                                    <!-- HEXAGON -->
                                    <div class="hexagon-22-24"></div>
                                    <!-- /HEXAGON -->
                                </div>
                                <!-- /USER AVATAR BADGE BORDER -->

                                <!-- USER AVATAR BADGE CONTENT -->
                                <div class="user-avatar-badge-content">
                                    <!-- HEXAGON -->
                                    <div class="hexagon-dark-16-18"></div>
                                    <!-- /HEXAGON -->
                                </div>
                                <!-- /USER AVATAR BADGE CONTENT -->

                                <!-- USER AVATAR BADGE TEXT -->
                                <p class="user-avatar-badge-text">5</p>
                                <!-- /USER AVATAR BADGE TEXT -->
                            </div>
                            <!-- /USER AVATAR BADGE -->
                        </div>
                        <!-- /USER AVATAR -->
                    </div>
                    <!-- /USER STATUS AVATAR -->

                    <!-- USER STATUS TITLE -->
                    <p class="user-status-title"><span class="bold">The Green Goo</span></p>
                    <!-- /USER STATUS TITLE -->

                    <!-- USER STATUS TEXT -->
                    <p class="user-status-text small">Can you stream the new game?</p>
                    <!-- /USER STATUS TEXT -->

                    <!-- USER STATUS TIMESTAMP -->
                    <p class="user-status-timestamp floaty">2hrs</p>
                    <!-- /USER STATUS TIMESTAMP -->
                </div>
                <!-- /USER STATUS -->
            </div>
            <!-- /CHAT WIDGET MESSAGE -->

            <!-- CHAT WIDGET MESSAGE -->
            <div class="chat-widget-message">
                <!-- USER STATUS -->
                <div class="user-status">
                    <!-- USER STATUS AVATAR -->
                    <div class="user-status-avatar">
                        <!-- USER AVATAR -->
                        <div class="user-avatar small no-outline online">
                            <!-- USER AVATAR CONTENT -->
                            <div class="user-avatar-content">
                                <!-- HEXAGON -->
                                <div class="hexagon-image-30-32" data-src="/assets/vikinger/img/avatar/07.jpg"></div>
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

                            <!-- USER AVATAR BADGE -->
                            <div class="user-avatar-badge">
                                <!-- USER AVATAR BADGE BORDER -->
                                <div class="user-avatar-badge-border">
                                    <!-- HEXAGON -->
                                    <div class="hexagon-22-24"></div>
                                    <!-- /HEXAGON -->
                                </div>
                                <!-- /USER AVATAR BADGE BORDER -->

                                <!-- USER AVATAR BADGE CONTENT -->
                                <div class="user-avatar-badge-content">
                                    <!-- HEXAGON -->
                                    <div class="hexagon-dark-16-18"></div>
                                    <!-- /HEXAGON -->
                                </div>
                                <!-- /USER AVATAR BADGE CONTENT -->

                                <!-- USER AVATAR BADGE TEXT -->
                                <p class="user-avatar-badge-text">26</p>
                                <!-- /USER AVATAR BADGE TEXT -->
                            </div>
                            <!-- /USER AVATAR BADGE -->
                        </div>
                        <!-- /USER AVATAR -->
                    </div>
                    <!-- /USER STATUS AVATAR -->

                    <!-- USER STATUS TITLE -->
                    <p class="user-status-title"><span class="bold">Sarah Diamond</span></p>
                    <!-- /USER STATUS TITLE -->

                    <!-- USER STATUS TEXT -->
                    <p class="user-status-text small">I'm sending you the latest news of...</p>
                    <!-- /USER STATUS TEXT -->

                    <!-- USER STATUS TIMESTAMP -->
                    <p class="user-status-timestamp floaty">16hrs</p>
                    <!-- /USER STATUS TIMESTAMP -->
                </div>
                <!-- /USER STATUS -->
            </div>
            <!-- /CHAT WIDGET MESSAGE -->

            <!-- CHAT WIDGET MESSAGE -->
            <div class="chat-widget-message">
                <!-- USER STATUS -->
                <div class="user-status">
                    <!-- USER STATUS AVATAR -->
                    <div class="user-status-avatar">
                        <!-- USER AVATAR -->
                        <div class="user-avatar small no-outline offline">
                            <!-- USER AVATAR CONTENT -->
                            <div class="user-avatar-content">
                                <!-- HEXAGON -->
                                <div class="hexagon-image-30-32" data-src="/assets/vikinger/img/avatar/02.jpg"></div>
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

                            <!-- USER AVATAR BADGE -->
                            <div class="user-avatar-badge">
                                <!-- USER AVATAR BADGE BORDER -->
                                <div class="user-avatar-badge-border">
                                    <!-- HEXAGON -->
                                    <div class="hexagon-22-24"></div>
                                    <!-- /HEXAGON -->
                                </div>
                                <!-- /USER AVATAR BADGE BORDER -->

                                <!-- USER AVATAR BADGE CONTENT -->
                                <div class="user-avatar-badge-content">
                                    <!-- HEXAGON -->
                                    <div class="hexagon-dark-16-18"></div>
                                    <!-- /HEXAGON -->
                                </div>
                                <!-- /USER AVATAR BADGE CONTENT -->

                                <!-- USER AVATAR BADGE TEXT -->
                                <p class="user-avatar-badge-text">13</p>
                                <!-- /USER AVATAR BADGE TEXT -->
                            </div>
                            <!-- /USER AVATAR BADGE -->
                        </div>
                        <!-- /USER AVATAR -->
                    </div>
                    <!-- /USER STATUS AVATAR -->

                    <!-- USER STATUS TITLE -->
                    <p class="user-status-title"><span class="bold">Destroy Dex</span></p>
                    <!-- /USER STATUS TITLE -->

                    <!-- USER STATUS TEXT -->
                    <p class="user-status-text small">Can you stream the new game?</p>
                    <!-- /USER STATUS TEXT -->

                    <!-- USER STATUS TIMESTAMP -->
                    <p class="user-status-timestamp floaty">2hrs</p>
                    <!-- /USER STATUS TIMESTAMP -->
                </div>
                <!-- /USER STATUS -->
            </div>
            <!-- /CHAT WIDGET MESSAGE -->

            <!-- CHAT WIDGET MESSAGE -->
            <div class="chat-widget-message">
                <!-- USER STATUS -->
                <div class="user-status">
                    <!-- USER STATUS AVATAR -->
                    <div class="user-status-avatar">
                        <!-- USER AVATAR -->
                        <div class="user-avatar small no-outline online">
                            <!-- USER AVATAR CONTENT -->
                            <div class="user-avatar-content">
                                <!-- HEXAGON -->
                                <div class="hexagon-image-30-32" data-src="/assets/vikinger/img/avatar/08.jpg"></div>
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

                            <!-- USER AVATAR BADGE -->
                            <div class="user-avatar-badge">
                                <!-- USER AVATAR BADGE BORDER -->
                                <div class="user-avatar-badge-border">
                                    <!-- HEXAGON -->
                                    <div class="hexagon-22-24"></div>
                                    <!-- /HEXAGON -->
                                </div>
                                <!-- /USER AVATAR BADGE BORDER -->

                                <!-- USER AVATAR BADGE CONTENT -->
                                <div class="user-avatar-badge-content">
                                    <!-- HEXAGON -->
                                    <div class="hexagon-dark-16-18"></div>
                                    <!-- /HEXAGON -->
                                </div>
                                <!-- /USER AVATAR BADGE CONTENT -->

                                <!-- USER AVATAR BADGE TEXT -->
                                <p class="user-avatar-badge-text">4</p>
                                <!-- /USER AVATAR BADGE TEXT -->
                            </div>
                            <!-- /USER AVATAR BADGE -->
                        </div>
                        <!-- /USER AVATAR -->
                    </div>
                    <!-- /USER STATUS AVATAR -->

                    <!-- USER STATUS TITLE -->
                    <p class="user-status-title"><span class="bold">Damian Greyson</span></p>
                    <!-- /USER STATUS TITLE -->

                    <!-- USER STATUS TEXT -->
                    <p class="user-status-text small">Can you stream the new game?</p>
                    <!-- /USER STATUS TEXT -->

                    <!-- USER STATUS TIMESTAMP -->
                    <p class="user-status-timestamp floaty">2hrs</p>
                    <!-- /USER STATUS TIMESTAMP -->
                </div>
                <!-- /USER STATUS -->
            </div>
            <!-- /CHAT WIDGET MESSAGE -->

            <!-- CHAT WIDGET MESSAGE -->
            <div class="chat-widget-message">
                <!-- USER STATUS -->
                <div class="user-status">
                    <!-- USER STATUS AVATAR -->
                    <div class="user-status-avatar">
                        <!-- USER AVATAR -->
                        <div class="user-avatar small no-outline online">
                            <!-- USER AVATAR CONTENT -->
                            <div class="user-avatar-content">
                                <!-- HEXAGON -->
                                <div class="hexagon-image-30-32" data-src="/assets/vikinger/img/avatar/14.jpg"></div>
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

                            <!-- USER AVATAR BADGE -->
                            <div class="user-avatar-badge">
                                <!-- USER AVATAR BADGE BORDER -->
                                <div class="user-avatar-badge-border">
                                    <!-- HEXAGON -->
                                    <div class="hexagon-22-24"></div>
                                    <!-- /HEXAGON -->
                                </div>
                                <!-- /USER AVATAR BADGE BORDER -->

                                <!-- USER AVATAR BADGE CONTENT -->
                                <div class="user-avatar-badge-content">
                                    <!-- HEXAGON -->
                                    <div class="hexagon-dark-16-18"></div>
                                    <!-- /HEXAGON -->
                                </div>
                                <!-- /USER AVATAR BADGE CONTENT -->

                                <!-- USER AVATAR BADGE TEXT -->
                                <p class="user-avatar-badge-text">3</p>
                                <!-- /USER AVATAR BADGE TEXT -->
                            </div>
                            <!-- /USER AVATAR BADGE -->
                        </div>
                        <!-- /USER AVATAR -->
                    </div>
                    <!-- /USER STATUS AVATAR -->

                    <!-- USER STATUS TITLE -->
                    <p class="user-status-title"><span class="bold">Paul Lang</span></p>
                    <!-- /USER STATUS TITLE -->

                    <!-- USER STATUS TEXT -->
                    <p class="user-status-text small">Can you stream the new game?</p>
                    <!-- /USER STATUS TEXT -->

                    <!-- USER STATUS TIMESTAMP -->
                    <p class="user-status-timestamp floaty">2hrs</p>
                    <!-- /USER STATUS TIMESTAMP -->
                </div>
                <!-- /USER STATUS -->
            </div>
            <!-- /CHAT WIDGET MESSAGE -->
        </div>
        <!-- /CHAT WIDGET MESSAGES -->

        <!-- CHAT WIDGET FORM -->
        <form class="chat-widget-form">
            <!-- INTERACTIVE INPUT -->
            <div class="interactive-input small">
                <input type="text" id="chat-widget-search" name="chat_widget_search"
                    placeholder="Search Messages...">
                <!-- INTERACTIVE INPUT ICON WRAP -->
                <div class="interactive-input-icon-wrap">
                    <!-- INTERACTIVE INPUT ICON -->
                    <svg class="interactive-input-icon icon-magnifying-glass">
                        <use xlink:href="#svg-magnifying-glass"></use>
                    </svg>
                    <!-- /INTERACTIVE INPUT ICON -->
                </div>
                <!-- /INTERACTIVE INPUT ICON WRAP -->

                <!-- INTERACTIVE INPUT ACTION -->
                <div class="interactive-input-action">
                    <!-- INTERACTIVE INPUT ACTION ICON -->
                    <svg class="interactive-input-action-icon icon-cross-thin">
                        <use xlink:href="#svg-cross-thin"></use>
                    </svg>
                    <!-- /INTERACTIVE INPUT ACTION ICON -->
                </div>
                <!-- /INTERACTIVE INPUT ACTION -->
            </div>
            <!-- /INTERACTIVE INPUT -->
        </form>
        <!-- /CHAT WIDGET FORM -->

        <!-- CHAT WIDGET BUTTON -->
        <div class="chat-widget-button">
            <!-- CHAT WIDGET BUTTON ICON -->
            <div class="chat-widget-button-icon">
                <!-- BURGER ICON -->
                <div class="burger-icon">
                    <!-- BURGER ICON BAR -->
                    <div class="burger-icon-bar"></div>
                    <!-- /BURGER ICON BAR -->

                    <!-- BURGER ICON BAR -->
                    <div class="burger-icon-bar"></div>
                    <!-- /BURGER ICON BAR -->

                    <!-- BURGER ICON BAR -->
                    <div class="burger-icon-bar"></div>
                    <!-- /BURGER ICON BAR -->
                </div>
                <!-- /BURGER ICON -->
            </div>
            <!-- /CHAT WIDGET BUTTON ICON -->

            <!-- CHAT WIDGET BUTTON TEXT -->
            <p class="chat-widget-button-text">Messages / Chat</p>
            <!-- /CHAT WIDGET BUTTON TEXT -->
        </div>
        <!-- /CHAT WIDGET BUTTON -->
    </aside>
    <!-- /CHAT WIDGET -->

    <!-- CHAT WIDGET -->
    <aside id="chat-widget-message" class="chat-widget chat-widget-overlay hidden sidebar right">
        <!-- CHAT WIDGET HEADER -->
        <div class="chat-widget-header">
            <!-- CHAT WIDGET CLOSE BUTTON -->
            <div class="chat-widget-close-button">
                <!-- CHAT WIDGET CLOSE BUTTON ICON -->
                <svg class="chat-widget-close-button-icon icon-back-arrow">
                    <use xlink:href="#svg-back-arrow"></use>
                </svg>
                <!-- CHAT WIDGET CLOSE BUTTON ICON -->
            </div>
            <!-- /CHAT WIDGET CLOSE BUTTON -->

            <!-- USER STATUS -->
            <div class="user-status">
                <!-- USER STATUS AVATAR -->
                <div class="user-status-avatar">
                    <!-- USER AVATAR -->
                    <div class="user-avatar small no-outline online">
                        <!-- USER AVATAR CONTENT -->
                        <div class="user-avatar-content">
                            <!-- HEXAGON -->
                            <div class="hexagon-image-30-32" data-src="/assets/vikinger/img/avatar/03.jpg"></div>
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

                        <!-- USER AVATAR BADGE -->
                        <div class="user-avatar-badge">
                            <!-- USER AVATAR BADGE BORDER -->
                            <div class="user-avatar-badge-border">
                                <!-- HEXAGON -->
                                <div class="hexagon-22-24"></div>
                                <!-- /HEXAGON -->
                            </div>
                            <!-- /USER AVATAR BADGE BORDER -->

                            <!-- USER AVATAR BADGE CONTENT -->
                            <div class="user-avatar-badge-content">
                                <!-- HEXAGON -->
                                <div class="hexagon-dark-16-18"></div>
                                <!-- /HEXAGON -->
                            </div>
                            <!-- /USER AVATAR BADGE CONTENT -->

                            <!-- USER AVATAR BADGE TEXT -->
                            <p class="user-avatar-badge-text">16</p>
                            <!-- /USER AVATAR BADGE TEXT -->
                        </div>
                        <!-- /USER AVATAR BADGE -->
                    </div>
                    <!-- /USER AVATAR -->
                </div>
                <!-- /USER STATUS AVATAR -->

                <!-- USER STATUS TITLE -->
                <p class="user-status-title"><span class="bold">Nick Grissom</span></p>
                <!-- /USER STATUS TITLE -->

                <!-- USER STATUS TAG -->
                <p class="user-status-tag online">Online</p>
                <!-- /USER STATUS TAG -->
            </div>
            <!-- /USER STATUS -->
        </div>
        <!-- /CHAT WIDGET HEADER -->

        <!-- CHAT WIDGET CONVERSATION -->
        <div class="chat-widget-conversation" data-simplebar>
            <!-- CHAT WIDGET SPEAKER -->
            <div class="chat-widget-speaker left">
                <!-- CHAT WIDGET SPEAKER AVATAR -->
                <div class="chat-widget-speaker-avatar">
                    <!-- USER AVATAR -->
                    <div class="user-avatar tiny no-border">
                        <!-- USER AVATAR CONTENT -->
                        <div class="user-avatar-content">
                            <!-- HEXAGON -->
                            <div class="hexagon-image-24-26" data-src="/assets/vikinger/img/avatar/03.jpg"></div>
                            <!-- /HEXAGON -->
                        </div>
                        <!-- /USER AVATAR CONTENT -->
                    </div>
                    <!-- /USER AVATAR -->
                </div>
                <!-- /CHAT WIDGET SPEAKER AVATAR -->

                <!-- CHAT WIDGET SPEAKER MESSAGE -->
                <p class="chat-widget-speaker-message">Hi Marina! It's been a long time!</p>
                <!-- /CHAT WIDGET SPEAKER MESSAGE -->

                <!-- CHAT WIDGET SPEAKER TIMESTAMP -->
                <p class="chat-widget-speaker-timestamp">Yesterday at 8:36PM</p>
                <!-- /CHAT WIDGET SPEAKER TIMESTAMP -->
            </div>
            <!-- /CHAT WIDGET SPEAKER -->

            <!-- CHAT WIDGET SPEAKER -->
            <div class="chat-widget-speaker right">
                <!-- CHAT WIDGET SPEAKER MESSAGE -->
                <p class="chat-widget-speaker-message">Hey Nick!</p>
                <!-- /CHAT WIDGET SPEAKER MESSAGE -->

                <!-- CHAT WIDGET SPEAKER MESSAGE -->
                <p class="chat-widget-speaker-message">You're right, it's been a really long time! I think the last
                    time we saw was at Neko's party</p>
                <!-- /CHAT WIDGET SPEAKER MESSAGE -->

                <!-- CHAT WIDGET SPEAKER TIMESTAMP -->
                <p class="chat-widget-speaker-timestamp">10:05AM</p>
                <!-- /CHAT WIDGET SPEAKER TIMESTAMP -->
            </div>
            <!-- /CHAT WIDGET SPEAKER -->

            <!-- CHAT WIDGET SPEAKER -->
            <div class="chat-widget-speaker left">
                <!-- CHAT WIDGET SPEAKER AVATAR -->
                <div class="chat-widget-speaker-avatar">
                    <!-- USER AVATAR -->
                    <div class="user-avatar tiny no-border">
                        <!-- USER AVATAR CONTENT -->
                        <div class="user-avatar-content">
                            <!-- HEXAGON -->
                            <div class="hexagon-image-24-26" data-src="/assets/vikinger/img/avatar/03.jpg"></div>
                            <!-- /HEXAGON -->
                        </div>
                        <!-- /USER AVATAR CONTENT -->
                    </div>
                    <!-- /USER AVATAR -->
                </div>
                <!-- /CHAT WIDGET SPEAKER AVATAR -->

                <!-- CHAT WIDGET SPEAKER MESSAGE -->
                <p class="chat-widget-speaker-message">Yeah! I remember now! The stream launch party</p>
                <!-- /CHAT WIDGET SPEAKER MESSAGE -->

                <!-- CHAT WIDGET SPEAKER MESSAGE -->
                <p class="chat-widget-speaker-message">That reminds me that I wanted to ask you something</p>
                <!-- /CHAT WIDGET SPEAKER MESSAGE -->

                <!-- CHAT WIDGET SPEAKER MESSAGE -->
                <p class="chat-widget-speaker-message">Can you stream the new game?</p>
                <!-- /CHAT WIDGET SPEAKER MESSAGE -->
            </div>
            <!-- /CHAT WIDGET SPEAKER -->
        </div>
        <!-- /CHAT WIDGET CONVERSATION -->

        <!-- CHAT WIDGET FORM -->
        <form class="chat-widget-form">
            <!-- INTERACTIVE INPUT -->
            <div class="interactive-input small">
                <input type="text" id="chat-widget-message-text" name="chat_widget_message_text"
                    placeholder="Write a message...">
                <!-- INTERACTIVE INPUT ICON WRAP -->
                <div class="interactive-input-icon-wrap">
                    <!-- INTERACTIVE INPUT ICON -->
                    <svg class="interactive-input-icon icon-send-message">
                        <use xlink:href="#svg-send-message"></use>
                    </svg>
                    <!-- /INTERACTIVE INPUT ICON -->
                </div>
                <!-- /INTERACTIVE INPUT ICON WRAP -->

                <!-- INTERACTIVE INPUT ACTION -->
                <div class="interactive-input-action">
                    <!-- INTERACTIVE INPUT ACTION ICON -->
                    <svg class="interactive-input-action-icon icon-cross-thin">
                        <use xlink:href="#svg-cross-thin"></use>
                    </svg>
                    <!-- /INTERACTIVE INPUT ACTION ICON -->
                </div>
                <!-- /INTERACTIVE INPUT ACTION -->
            </div>
            <!-- /INTERACTIVE INPUT -->
        </form>
        <!-- /CHAT WIDGET FORM -->
    </aside>
    <!-- /CHAT WIDGET --> --}}


    @include('layouts/partials/header')

    <!-- FLOATY BAR -->
    <aside class="floaty-bar">
        <!-- BAR ACTIONS -->
        <div class="bar-actions">
            <!-- PROGRESS STAT -->
            <div class="progress-stat">
                <!-- BAR PROGRESS WRAP -->
                <div class="bar-progress-wrap">
                    <!-- BAR PROGRESS INFO -->
                    <p class="bar-progress-info">Next: <span class="bar-progress-text"></span></p>
                    <!-- /BAR PROGRESS INFO -->
                </div>
                <!-- /BAR PROGRESS WRAP -->

                <!-- PROGRESS STAT BAR -->
                <div id="logged-user-level-cp" class="progress-stat-bar"></div>
                <!-- /PROGRESS STAT BAR -->
            </div>
            <!-- /PROGRESS STAT -->
        </div>
        <!-- /BAR ACTIONS -->

        <!-- BAR ACTIONS -->
        <div class="bar-actions">
            <!-- ACTION LIST -->
            <div class="action-list dark">
                <!-- ACTION LIST ITEM -->
                <a class="action-list-item" href="marketplace-cart.html">
                    <!-- ACTION LIST ITEM ICON -->
                    <svg class="action-list-item-icon icon-shopping-bag">
                        <use xlink:href="#svg-shopping-bag"></use>
                    </svg>
                    <!-- /ACTION LIST ITEM ICON -->
                </a>
                <!-- /ACTION LIST ITEM -->

                <!-- ACTION LIST ITEM -->
                <a class="action-list-item" href="hub-profile-requests.html">
                    <!-- ACTION LIST ITEM ICON -->
                    <svg class="action-list-item-icon icon-friend">
                        <use xlink:href="#svg-friend"></use>
                    </svg>
                    <!-- /ACTION LIST ITEM ICON -->
                </a>
                <!-- /ACTION LIST ITEM -->

                <!-- ACTION LIST ITEM -->
                <a class="action-list-item" href="hub-profile-messages.html">
                    <!-- ACTION LIST ITEM ICON -->
                    <svg class="action-list-item-icon icon-messages">
                        <use xlink:href="#svg-messages"></use>
                    </svg>
                    <!-- /ACTION LIST ITEM ICON -->
                </a>
                <!-- /ACTION LIST ITEM -->

                <!-- ACTION LIST ITEM -->
                <a class="action-list-item unread" href="hub-profile-notifications.html">
                    <!-- ACTION LIST ITEM ICON -->
                    <svg class="action-list-item-icon icon-notification">
                        <use xlink:href="#svg-notification"></use>
                    </svg>
                    <!-- /ACTION LIST ITEM ICON -->
                </a>
                <!-- /ACTION LIST ITEM -->
            </div>
            <!-- /ACTION LIST -->

            <!-- ACTION ITEM WRAP -->
            <a class="action-item-wrap" href="hub-profile-info.html">
                <!-- ACTION ITEM -->
                <div class="action-item dark">
                    <!-- ACTION ITEM ICON -->
                    <svg class="action-item-icon icon-settings">
                        <use xlink:href="#svg-settings"></use>
                    </svg>
                    <!-- /ACTION ITEM ICON -->
                </div>
                <!-- /ACTION ITEM -->
            </a>
            <!-- /ACTION ITEM WRAP -->
        </div>
        <!-- /BAR ACTIONS -->
    </aside>
    <!-- /FLOATY BAR -->

    @yield('content')

    <!-- POPUP PICTURE -->
    {{-- <div class="popup-picture">
        <!-- POPUP CLOSE BUTTON -->
        <div class="popup-close-button popup-picture-trigger">
            <!-- POPUP CLOSE BUTTON ICON -->
            <svg class="popup-close-button-icon icon-cross">
                <use xlink:href="#svg-cross"></use>
            </svg>
            <!-- /POPUP CLOSE BUTTON ICON -->
        </div>
        <!-- /POPUP CLOSE BUTTON -->

        <!-- WIDGET BOX -->
        <div class="widget-box no-padding">
            <!-- WIDGET BOX SCROLLABLE -->
            <div class="widget-box-scrollable" data-simplebar>
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
                            <p class="simple-dropdown-link">Edit Post</p>
                            <!-- /SIMPLE DROPDOWN LINK -->

                            <!-- SIMPLE DROPDOWN LINK -->
                            <p class="simple-dropdown-link">Delete Post</p>
                            <!-- /SIMPLE DROPDOWN LINK -->

                            <!-- SIMPLE DROPDOWN LINK -->
                            <p class="simple-dropdown-link">Make it Featured</p>
                            <!-- /SIMPLE DROPDOWN LINK -->

                            <!-- SIMPLE DROPDOWN LINK -->
                            <p class="simple-dropdown-link">Report Post</p>
                            <!-- /SIMPLE DROPDOWN LINK -->

                            <!-- SIMPLE DROPDOWN LINK -->
                            <p class="simple-dropdown-link">Report Author</p>
                            <!-- /SIMPLE DROPDOWN LINK -->
                        </div>
                        <!-- /SIMPLE DROPDOWN -->
                    </div>
                    <!-- /POST SETTINGS WRAP -->
                </div>
                <!-- /WIDGET BOX SETTINGS -->

                <!-- WIDGET BOX STATUS -->
                <div class="widget-box-status">
                    <!-- WIDGET BOX STATUS CONTENT -->
                    <div class="widget-box-status-content">
                        <!-- USER STATUS -->
                        <div class="user-status">
                            <!-- USER STATUS AVATAR -->
                            <a class="user-status-avatar" href="profile-timeline.html">
                                <!-- USER AVATAR -->
                                <div class="user-avatar small no-outline">
                                    <!-- USER AVATAR CONTENT -->
                                    <div class="user-avatar-content">
                                        <!-- HEXAGON -->
                                        <div class="hexagon-image-30-32" data-src="/assets/vikinger/img/avatar/01.jpg"></div>
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

                                    <!-- USER AVATAR BADGE -->
                                    <div class="user-avatar-badge">
                                        <!-- USER AVATAR BADGE BORDER -->
                                        <div class="user-avatar-badge-border">
                                            <!-- HEXAGON -->
                                            <div class="hexagon-22-24"></div>
                                            <!-- /HEXAGON -->
                                        </div>
                                        <!-- /USER AVATAR BADGE BORDER -->

                                        <!-- USER AVATAR BADGE CONTENT -->
                                        <div class="user-avatar-badge-content">
                                            <!-- HEXAGON -->
                                            <div class="hexagon-dark-16-18"></div>
                                            <!-- /HEXAGON -->
                                        </div>
                                        <!-- /USER AVATAR BADGE CONTENT -->

                                        <!-- USER AVATAR BADGE TEXT -->
                                        <p class="user-avatar-badge-text">24</p>
                                        <!-- /USER AVATAR BADGE TEXT -->
                                    </div>
                                    <!-- /USER AVATAR BADGE -->
                                </div>
                                <!-- /USER AVATAR -->
                            </a>
                            <!-- /USER STATUS AVATAR -->

                            <!-- USER STATUS TITLE -->
                            <p class="user-status-title medium"><a class="bold"
                                    href="profile-timeline.html">Marina Valentine</a></p>
                            <!-- /USER STATUS TITLE -->

                            <!-- USER STATUS TEXT -->
                            <p class="user-status-text small">29 minutes ago</p>
                            <!-- /USER STATUS TEXT -->
                        </div>
                        <!-- /USER STATUS -->

                        <!-- WIDGET BOX STATUS TEXT -->
                        <p class="widget-box-status-text">Here's a sneak peek of the official box cover art for <a
                                href="#">Machine Wasteland II</a>! Remember that I'll be having a stream showing
                            a preview tommorrow at 9PM PCT!</p>
                        <!-- /WIDGET BOX STATUS TEXT -->

                        <!-- TAG LIST -->
                        <div class="tag-list">
                            <!-- TAG ITEM -->
                            <a class="tag-item secondary" href="newsfeed.html">Cover</a>
                            <!-- /TAG ITEM -->

                            <!-- TAG ITEM -->
                            <a class="tag-item secondary" href="newsfeed.html">Preview</a>
                            <!-- /TAG ITEM -->

                            <!-- TAG ITEM -->
                            <a class="tag-item secondary" href="newsfeed.html">Art</a>
                            <!-- /TAG ITEM -->

                            <!-- TAG ITEM -->
                            <a class="tag-item secondary" href="newsfeed.html">Machine</a>
                            <!-- /TAG ITEM -->

                            <!-- TAG ITEM -->
                            <a class="tag-item secondary" href="newsfeed.html">Wasteland</a>
                            <!-- /TAG ITEM -->
                        </div>
                        <!-- /TAG LIST -->

                        <!-- CONTENT ACTIONS -->
                        <div class="content-actions">
                            <!-- CONTENT ACTION -->
                            <div class="content-action">
                                <!-- META LINE -->
                                <div class="meta-line">
                                    <!-- META LINE LIST -->
                                    <div class="meta-line-list reaction-item-list">
                                        <!-- REACTION ITEM -->
                                        <div class="reaction-item">
                                            <!-- REACTION IMAGE -->
                                            <img class="reaction-image reaction-item-dropdown-trigger"
                                                src="/assets/vikinger/img/reaction/love.png" alt="reaction-love">
                                            <!-- /REACTION IMAGE -->

                                            <!-- SIMPLE DROPDOWN -->
                                            <div class="simple-dropdown padded reaction-item-dropdown">
                                                <!-- SIMPLE DROPDOWN TEXT -->
                                                <p class="simple-dropdown-text"><img class="reaction"
                                                        src="/assets/vikinger/img/reaction/love.png" alt="reaction-love"> <span
                                                        class="bold">Love</span></p>
                                                <!-- /SIMPLE DROPDOWN TEXT -->

                                                <!-- SIMPLE DROPDOWN TEXT -->
                                                <p class="simple-dropdown-text">Destroy Dex</p>
                                                <!-- /SIMPLE DROPDOWN TEXT -->

                                                <!-- SIMPLE DROPDOWN TEXT -->
                                                <p class="simple-dropdown-text">The Green Goo</p>
                                                <!-- /SIMPLE DROPDOWN TEXT -->

                                                <!-- SIMPLE DROPDOWN TEXT -->
                                                <p class="simple-dropdown-text">Bearded Wonder</p>
                                                <!-- /SIMPLE DROPDOWN TEXT -->

                                                <!-- SIMPLE DROPDOWN TEXT -->
                                                <p class="simple-dropdown-text">Sandra Strange</p>
                                                <!-- /SIMPLE DROPDOWN TEXT -->

                                                <!-- SIMPLE DROPDOWN TEXT -->
                                                <p class="simple-dropdown-text">Matt Parker</p>
                                                <!-- /SIMPLE DROPDOWN TEXT -->

                                                <!-- SIMPLE DROPDOWN TEXT -->
                                                <p class="simple-dropdown-text">James Murdock</p>
                                                <!-- /SIMPLE DROPDOWN TEXT -->

                                                <!-- SIMPLE DROPDOWN TEXT -->
                                                <p class="simple-dropdown-text"><span class="bold">and 14
                                                        more...</span></p>
                                                <!-- /SIMPLE DROPDOWN TEXT -->
                                            </div>
                                            <!-- /SIMPLE DROPDOWN -->
                                        </div>
                                        <!-- /REACTION ITEM -->

                                        <!-- REACTION ITEM -->
                                        <div class="reaction-item">
                                            <!-- REACTION IMAGE -->
                                            <img class="reaction-image reaction-item-dropdown-trigger"
                                                src="/assets/vikinger/img/reaction/wow.png" alt="reaction-wow">
                                            <!-- /REACTION IMAGE -->

                                            <!-- SIMPLE DROPDOWN -->
                                            <div class="simple-dropdown padded reaction-item-dropdown">
                                                <!-- SIMPLE DROPDOWN TEXT -->
                                                <p class="simple-dropdown-text"><img class="reaction"
                                                        src="/assets/vikinger/img/reaction/wow.png" alt="reaction-wow"> <span
                                                        class="bold">Wow</span></p>
                                                <!-- /SIMPLE DROPDOWN TEXT -->

                                                <!-- SIMPLE DROPDOWN TEXT -->
                                                <p class="simple-dropdown-text">Jett Spiegel</p>
                                                <!-- /SIMPLE DROPDOWN TEXT -->
                                            </div>
                                            <!-- /SIMPLE DROPDOWN -->
                                        </div>
                                        <!-- /REACTION ITEM -->

                                        <!-- REACTION ITEM -->
                                        <div class="reaction-item">
                                            <!-- REACTION IMAGE -->
                                            <img class="reaction-image reaction-item-dropdown-trigger"
                                                src="/assets/vikinger/img/reaction/like.png" alt="reaction-like">
                                            <!-- /REACTION IMAGE -->

                                            <!-- SIMPLE DROPDOWN -->
                                            <div class="simple-dropdown padded reaction-item-dropdown">
                                                <!-- SIMPLE DROPDOWN TEXT -->
                                                <p class="simple-dropdown-text"><img class="reaction"
                                                        src="/assets/vikinger/img/reaction/like.png" alt="reaction-like"> <span
                                                        class="bold">Like</span></p>
                                                <!-- /SIMPLE DROPDOWN TEXT -->

                                                <!-- SIMPLE DROPDOWN TEXT -->
                                                <p class="simple-dropdown-text">Neko Bebop</p>
                                                <!-- /SIMPLE DROPDOWN TEXT -->

                                                <!-- SIMPLE DROPDOWN TEXT -->
                                                <p class="simple-dropdown-text">Nick Grissom</p>
                                                <!-- /SIMPLE DROPDOWN TEXT -->

                                                <!-- SIMPLE DROPDOWN TEXT -->
                                                <p class="simple-dropdown-text">Sarah Diamond</p>
                                                <!-- /SIMPLE DROPDOWN TEXT -->
                                            </div>
                                            <!-- /SIMPLE DROPDOWN -->
                                        </div>
                                        <!-- /REACTION ITEM -->
                                    </div>
                                    <!-- /META LINE LIST -->

                                    <!-- META LINE TEXT -->
                                    <p class="meta-line-text">24</p>
                                    <!-- /META LINE TEXT -->
                                </div>
                                <!-- /META LINE -->
                            </div>
                            <!-- /CONTENT ACTION -->

                            <!-- CONTENT ACTION -->
                            <div class="content-action">
                                <!-- META LINE -->
                                <div class="meta-line">
                                    <!-- META LINE LINK -->
                                    <p class="meta-line-link">13 Comments</p>
                                    <!-- /META LINE LINK -->
                                </div>
                                <!-- /META LINE -->

                                <!-- META LINE -->
                                <div class="meta-line">
                                    <!-- META LINE TEXT -->
                                    <p class="meta-line-text">0 Shares</p>
                                    <!-- /META LINE TEXT -->
                                </div>
                                <!-- /META LINE -->
                            </div>
                            <!-- /CONTENT ACTION -->
                        </div>
                        <!-- /CONTENT ACTIONS -->
                    </div>
                    <!-- /WIDGET BOX STATUS CONTENT -->
                </div>
                <!-- /WIDGET BOX STATUS -->

                <!-- POST OPTIONS -->
                <div class="post-options">
                    <!-- POST OPTION WRAP -->
                    <div class="post-option-wrap">
                        <!-- POST OPTION -->
                        <div class="post-option no-text reaction-options-dropdown-trigger">
                            <!-- POST OPTION ICON -->
                            <svg class="post-option-icon icon-thumbs-up">
                                <use xlink:href="#svg-thumbs-up"></use>
                            </svg>
                            <!-- /POST OPTION ICON -->
                        </div>
                        <!-- /POST OPTION -->

                        <!-- REACTION OPTIONS -->
                        <div class="reaction-options small reaction-options-dropdown">
                            <!-- REACTION OPTION -->
                            <div class="reaction-option text-tooltip-tft" data-title="Like">
                                <!-- REACTION OPTION IMAGE -->
                                <img class="reaction-option-image" src="/assets/vikinger/img/reaction/like.png"
                                    alt="reaction-like">
                                <!-- /REACTION OPTION IMAGE -->
                            </div>
                            <!-- /REACTION OPTION -->

                            <!-- REACTION OPTION -->
                            <div class="reaction-option text-tooltip-tft" data-title="Love">
                                <!-- REACTION OPTION IMAGE -->
                                <img class="reaction-option-image" src="/assets/vikinger/img/reaction/love.png"
                                    alt="reaction-love">
                                <!-- /REACTION OPTION IMAGE -->
                            </div>
                            <!-- /REACTION OPTION -->

                            <!-- REACTION OPTION -->
                            <div class="reaction-option text-tooltip-tft" data-title="Dislike">
                                <!-- REACTION OPTION IMAGE -->
                                <img class="reaction-option-image" src="/assets/vikinger/img/reaction/dislike.png"
                                    alt="reaction-dislike">
                                <!-- /REACTION OPTION IMAGE -->
                            </div>
                            <!-- /REACTION OPTION -->

                            <!-- REACTION OPTION -->
                            <div class="reaction-option text-tooltip-tft" data-title="Happy">
                                <!-- REACTION OPTION IMAGE -->
                                <img class="reaction-option-image" src="/assets/vikinger/img/reaction/happy.png"
                                    alt="reaction-happy">
                                <!-- /REACTION OPTION IMAGE -->
                            </div>
                            <!-- /REACTION OPTION -->

                            <!-- REACTION OPTION -->
                            <div class="reaction-option text-tooltip-tft" data-title="Funny">
                                <!-- REACTION OPTION IMAGE -->
                                <img class="reaction-option-image" src="/assets/vikinger/img/reaction/funny.png"
                                    alt="reaction-funny">
                                <!-- /REACTION OPTION IMAGE -->
                            </div>
                            <!-- /REACTION OPTION -->

                            <!-- REACTION OPTION -->
                            <div class="reaction-option text-tooltip-tft" data-title="Wow">
                                <!-- REACTION OPTION IMAGE -->
                                <img class="reaction-option-image" src="/assets/vikinger/img/reaction/wow.png" alt="reaction-wow">
                                <!-- /REACTION OPTION IMAGE -->
                            </div>
                            <!-- /REACTION OPTION -->

                            <!-- REACTION OPTION -->
                            <div class="reaction-option text-tooltip-tft" data-title="Angry">
                                <!-- REACTION OPTION IMAGE -->
                                <img class="reaction-option-image" src="/assets/vikinger/img/reaction/angry.png"
                                    alt="reaction-angry">
                                <!-- /REACTION OPTION IMAGE -->
                            </div>
                            <!-- /REACTION OPTION -->

                            <!-- REACTION OPTION -->
                            <div class="reaction-option text-tooltip-tft" data-title="Sad">
                                <!-- REACTION OPTION IMAGE -->
                                <img class="reaction-option-image" src="/assets/vikinger/img/reaction/sad.png" alt="reaction-sad">
                                <!-- /REACTION OPTION IMAGE -->
                            </div>
                            <!-- /REACTION OPTION -->
                        </div>
                        <!-- /REACTION OPTIONS -->
                    </div>
                    <!-- /POST OPTION WRAP -->

                    <!-- POST OPTION -->
                    <div class="post-option no-text active">
                        <!-- POST OPTION ICON -->
                        <svg class="post-option-icon icon-comment">
                            <use xlink:href="#svg-comment"></use>
                        </svg>
                        <!-- /POST OPTION ICON -->
                    </div>
                    <!-- /POST OPTION -->

                    <!-- POST OPTION -->
                    <div class="post-option no-text">
                        <!-- POST OPTION ICON -->
                        <svg class="post-option-icon icon-share">
                            <use xlink:href="#svg-share"></use>
                        </svg>
                        <!-- /POST OPTION ICON -->
                    </div>
                    <!-- /POST OPTION -->
                </div>
                <!-- /POST OPTIONS -->

                <!-- POST COMMENT LIST -->
                <div class="post-comment-list">
                    <!-- POST COMMENT -->
                    <div class="post-comment">
                        <!-- USER AVATAR -->
                        <a class="user-avatar small no-outline" href="profile-timeline.html">
                            <!-- USER AVATAR CONTENT -->
                            <div class="user-avatar-content">
                                <!-- HEXAGON -->
                                <div class="hexagon-image-30-32" data-src="/assets/vikinger/img/avatar/05.jpg"></div>
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

                            <!-- USER AVATAR BADGE -->
                            <div class="user-avatar-badge">
                                <!-- USER AVATAR BADGE BORDER -->
                                <div class="user-avatar-badge-border">
                                    <!-- HEXAGON -->
                                    <div class="hexagon-22-24"></div>
                                    <!-- /HEXAGON -->
                                </div>
                                <!-- /USER AVATAR BADGE BORDER -->

                                <!-- USER AVATAR BADGE CONTENT -->
                                <div class="user-avatar-badge-content">
                                    <!-- HEXAGON -->
                                    <div class="hexagon-dark-16-18"></div>
                                    <!-- /HEXAGON -->
                                </div>
                                <!-- /USER AVATAR BADGE CONTENT -->

                                <!-- USER AVATAR BADGE TEXT -->
                                <p class="user-avatar-badge-text">12</p>
                                <!-- /USER AVATAR BADGE TEXT -->
                            </div>
                            <!-- /USER AVATAR BADGE -->
                        </a>
                        <!-- /USER AVATAR -->

                        <!-- POST COMMENT TEXT -->
                        <p class="post-comment-text"><a class="post-comment-text-author"
                                href="profile-timeline.html">Neko Bebop</a>It's always a pleasure to do this streams
                            with you! If we have at least half the fun than last time it will be an incredible success!
                        </p>
                        <!-- /POST COMMENT TEXT -->

                        <!-- CONTENT ACTIONS -->
                        <div class="content-actions">
                            <!-- CONTENT ACTION -->
                            <div class="content-action">
                                <!-- META LINE -->
                                <div class="meta-line">
                                    <!-- META LINE LIST -->
                                    <div class="meta-line-list reaction-item-list small">
                                        <!-- REACTION ITEM -->
                                        <div class="reaction-item">
                                            <!-- REACTION IMAGE -->
                                            <img class="reaction-image reaction-item-dropdown-trigger"
                                                src="/assets/vikinger/img/reaction/happy.png" alt="reaction-happy">
                                            <!-- /REACTION IMAGE -->

                                            <!-- SIMPLE DROPDOWN -->
                                            <div class="simple-dropdown padded reaction-item-dropdown">
                                                <!-- SIMPLE DROPDOWN TEXT -->
                                                <p class="simple-dropdown-text"><img class="reaction"
                                                        src="/assets/vikinger/img/reaction/happy.png" alt="reaction-happy"> <span
                                                        class="bold">Happy</span></p>
                                                <!-- /SIMPLE DROPDOWN TEXT -->

                                                <!-- SIMPLE DROPDOWN TEXT -->
                                                <p class="simple-dropdown-text">Marcus Jhonson</p>
                                                <!-- /SIMPLE DROPDOWN TEXT -->
                                            </div>
                                            <!-- /SIMPLE DROPDOWN -->
                                        </div>
                                        <!-- /REACTION ITEM -->

                                        <!-- REACTION ITEM -->
                                        <div class="reaction-item">
                                            <!-- REACTION IMAGE -->
                                            <img class="reaction-image reaction-item-dropdown-trigger"
                                                src="/assets/vikinger/img/reaction/like.png" alt="reaction-like">
                                            <!-- /REACTION IMAGE -->

                                            <!-- SIMPLE DROPDOWN -->
                                            <div class="simple-dropdown padded reaction-item-dropdown">
                                                <!-- SIMPLE DROPDOWN TEXT -->
                                                <p class="simple-dropdown-text"><img class="reaction"
                                                        src="/assets/vikinger/img/reaction/like.png" alt="reaction-like"> <span
                                                        class="bold">Like</span></p>
                                                <!-- /SIMPLE DROPDOWN TEXT -->

                                                <!-- SIMPLE DROPDOWN TEXT -->
                                                <p class="simple-dropdown-text">Neko Bebop</p>
                                                <!-- /SIMPLE DROPDOWN TEXT -->

                                                <!-- SIMPLE DROPDOWN TEXT -->
                                                <p class="simple-dropdown-text">Nick Grissom</p>
                                                <!-- /SIMPLE DROPDOWN TEXT -->

                                                <!-- SIMPLE DROPDOWN TEXT -->
                                                <p class="simple-dropdown-text">Sarah Diamond</p>
                                                <!-- /SIMPLE DROPDOWN TEXT -->
                                            </div>
                                            <!-- /SIMPLE DROPDOWN -->
                                        </div>
                                        <!-- /REACTION ITEM -->
                                    </div>
                                    <!-- /META LINE LIST -->

                                    <!-- META LINE TEXT -->
                                    <p class="meta-line-text">4</p>
                                    <!-- /META LINE TEXT -->
                                </div>
                                <!-- /META LINE -->

                                <!-- META LINE -->
                                <div class="meta-line">
                                    <!-- META LINE LINK -->
                                    <p class="meta-line-link light reaction-options-small-dropdown-trigger">React!</p>
                                    <!-- /META LINE LINK -->

                                    <!-- REACTION OPTIONS -->
                                    <div class="reaction-options small reaction-options-small-dropdown">
                                        <!-- REACTION OPTION -->
                                        <div class="reaction-option text-tooltip-tft" data-title="Like">
                                            <!-- REACTION OPTION IMAGE -->
                                            <img class="reaction-option-image" src="/assets/vikinger/img/reaction/like.png"
                                                alt="reaction-like">
                                            <!-- /REACTION OPTION IMAGE -->
                                        </div>
                                        <!-- /REACTION OPTION -->

                                        <!-- REACTION OPTION -->
                                        <div class="reaction-option text-tooltip-tft" data-title="Love">
                                            <!-- REACTION OPTION IMAGE -->
                                            <img class="reaction-option-image" src="/assets/vikinger/img/reaction/love.png"
                                                alt="reaction-love">
                                            <!-- /REACTION OPTION IMAGE -->
                                        </div>
                                        <!-- /REACTION OPTION -->

                                        <!-- REACTION OPTION -->
                                        <div class="reaction-option text-tooltip-tft" data-title="Dislike">
                                            <!-- REACTION OPTION IMAGE -->
                                            <img class="reaction-option-image" src="/assets/vikinger/img/reaction/dislike.png"
                                                alt="reaction-dislike">
                                            <!-- /REACTION OPTION IMAGE -->
                                        </div>
                                        <!-- /REACTION OPTION -->

                                        <!-- REACTION OPTION -->
                                        <div class="reaction-option text-tooltip-tft" data-title="Happy">
                                            <!-- REACTION OPTION IMAGE -->
                                            <img class="reaction-option-image" src="/assets/vikinger/img/reaction/happy.png"
                                                alt="reaction-happy">
                                            <!-- /REACTION OPTION IMAGE -->
                                        </div>
                                        <!-- /REACTION OPTION -->

                                        <!-- REACTION OPTION -->
                                        <div class="reaction-option text-tooltip-tft" data-title="Funny">
                                            <!-- REACTION OPTION IMAGE -->
                                            <img class="reaction-option-image" src="/assets/vikinger/img/reaction/funny.png"
                                                alt="reaction-funny">
                                            <!-- /REACTION OPTION IMAGE -->
                                        </div>
                                        <!-- /REACTION OPTION -->

                                        <!-- REACTION OPTION -->
                                        <div class="reaction-option text-tooltip-tft" data-title="Wow">
                                            <!-- REACTION OPTION IMAGE -->
                                            <img class="reaction-option-image" src="/assets/vikinger/img/reaction/wow.png"
                                                alt="reaction-wow">
                                            <!-- /REACTION OPTION IMAGE -->
                                        </div>
                                        <!-- /REACTION OPTION -->

                                        <!-- REACTION OPTION -->
                                        <div class="reaction-option text-tooltip-tft" data-title="Angry">
                                            <!-- REACTION OPTION IMAGE -->
                                            <img class="reaction-option-image" src="/assets/vikinger/img/reaction/angry.png"
                                                alt="reaction-angry">
                                            <!-- /REACTION OPTION IMAGE -->
                                        </div>
                                        <!-- /REACTION OPTION -->

                                        <!-- REACTION OPTION -->
                                        <div class="reaction-option text-tooltip-tft" data-title="Sad">
                                            <!-- REACTION OPTION IMAGE -->
                                            <img class="reaction-option-image" src="/assets/vikinger/img/reaction/sad.png"
                                                alt="reaction-sad">
                                            <!-- /REACTION OPTION IMAGE -->
                                        </div>
                                        <!-- /REACTION OPTION -->
                                    </div>
                                    <!-- /REACTION OPTIONS -->
                                </div>
                                <!-- /META LINE -->

                                <!-- META LINE -->
                                <div class="meta-line">
                                    <!-- META LINE LINK -->
                                    <p class="meta-line-link light">Reply</p>
                                    <!-- /META LINE LINK -->
                                </div>
                                <!-- /META LINE -->

                                <!-- META LINE -->
                                <div class="meta-line">
                                    <!-- META LINE TIMESTAMP -->
                                    <p class="meta-line-timestamp">15 min ago</p>
                                    <!-- /META LINE TIMESTAMP -->
                                </div>
                                <!-- /META LINE -->

                                <!-- META LINE -->
                                <div class="meta-line settings">
                                    <!-- POST SETTINGS WRAP -->
                                    <div class="post-settings-wrap">
                                        <!-- POST SETTINGS -->
                                        <div class="post-settings post-settings-dropdown-trigger">
                                            <!-- POST SETTINGS ICON -->
                                            <svg class="post-settings-icon icon-more-dots">
                                                <use xlink:href="#svg-more-dots"></use>
                                            </svg>
                                            <!-- /POST SETTINGS ICON -->
                                        </div>
                                        <!-- /POST SETTINGS -->

                                        <!-- SIMPLE DROPDOWN -->
                                        <div class="simple-dropdown post-settings-dropdown">
                                            <!-- SIMPLE DROPDOWN LINK -->
                                            <p class="simple-dropdown-link">Report Post</p>
                                            <!-- /SIMPLE DROPDOWN LINK -->
                                        </div>
                                        <!-- /SIMPLE DROPDOWN -->
                                    </div>
                                    <!-- /POST SETTINGS WRAP -->
                                </div>
                                <!-- /META LINE -->
                            </div>
                            <!-- /CONTENT ACTION -->
                        </div>
                        <!-- /CONTENT ACTIONS -->
                    </div>
                    <!-- /POST COMMENT -->

                    <!-- POST COMMENT -->
                    <div class="post-comment unread reply-2">
                        <!-- USER AVATAR -->
                        <a class="user-avatar small no-outline" href="profile-timeline.html">
                            <!-- USER AVATAR CONTENT -->
                            <div class="user-avatar-content">
                                <!-- HEXAGON -->
                                <div class="hexagon-image-30-32" data-src="/assets/vikinger/img/avatar/03.jpg"></div>
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

                            <!-- USER AVATAR BADGE -->
                            <div class="user-avatar-badge">
                                <!-- USER AVATAR BADGE BORDER -->
                                <div class="user-avatar-badge-border">
                                    <!-- HEXAGON -->
                                    <div class="hexagon-22-24"></div>
                                    <!-- /HEXAGON -->
                                </div>
                                <!-- /USER AVATAR BADGE BORDER -->

                                <!-- USER AVATAR BADGE CONTENT -->
                                <div class="user-avatar-badge-content">
                                    <!-- HEXAGON -->
                                    <div class="hexagon-dark-16-18"></div>
                                    <!-- /HEXAGON -->
                                </div>
                                <!-- /USER AVATAR BADGE CONTENT -->

                                <!-- USER AVATAR BADGE TEXT -->
                                <p class="user-avatar-badge-text">16</p>
                                <!-- /USER AVATAR BADGE TEXT -->
                            </div>
                            <!-- /USER AVATAR BADGE -->
                        </a>
                        <!-- /USER AVATAR -->

                        <!-- POST COMMENT TEXT -->
                        <p class="post-comment-text"><a class="post-comment-text-author"
                                href="profile-timeline.html">Nick Grissom</a>I wouldn't miss it for anything!! Love
                            both streams!</p>
                        <!-- /POST COMMENT TEXT -->

                        <!-- CONTENT ACTIONS -->
                        <div class="content-actions">
                            <!-- CONTENT ACTION -->
                            <div class="content-action">
                                <!-- META LINE -->
                                <div class="meta-line">
                                    <!-- META LINE LIST -->
                                    <div class="meta-line-list reaction-item-list small">
                                        <!-- REACTION ITEM -->
                                        <div class="reaction-item">
                                            <!-- REACTION IMAGE -->
                                            <img class="reaction-image reaction-item-dropdown-trigger"
                                                src="/assets/vikinger/img/reaction/like.png" alt="reaction-like">
                                            <!-- /REACTION IMAGE -->

                                            <!-- SIMPLE DROPDOWN -->
                                            <div class="simple-dropdown padded reaction-item-dropdown">
                                                <!-- SIMPLE DROPDOWN TEXT -->
                                                <p class="simple-dropdown-text"><img class="reaction"
                                                        src="/assets/vikinger/img/reaction/like.png" alt="reaction-like"> <span
                                                        class="bold">Like</span></p>
                                                <!-- /SIMPLE DROPDOWN TEXT -->

                                                <!-- SIMPLE DROPDOWN TEXT -->
                                                <p class="simple-dropdown-text">Neko Bebop</p>
                                                <!-- /SIMPLE DROPDOWN TEXT -->
                                            </div>
                                            <!-- /SIMPLE DROPDOWN -->
                                        </div>
                                        <!-- /REACTION ITEM -->
                                    </div>
                                    <!-- /META LINE LIST -->

                                    <!-- META LINE TEXT -->
                                    <p class="meta-line-text">1</p>
                                    <!-- /META LINE TEXT -->
                                </div>
                                <!-- /META LINE -->

                                <!-- META LINE -->
                                <div class="meta-line">
                                    <!-- META LINE LINK -->
                                    <p class="meta-line-link light reaction-options-small-dropdown-trigger">React!</p>
                                    <!-- /META LINE LINK -->

                                    <!-- REACTION OPTIONS -->
                                    <div class="reaction-options small reaction-options-small-dropdown">
                                        <!-- REACTION OPTION -->
                                        <div class="reaction-option text-tooltip-tft" data-title="Like">
                                            <!-- REACTION OPTION IMAGE -->
                                            <img class="reaction-option-image" src="/assets/vikinger/img/reaction/like.png"
                                                alt="reaction-like">
                                            <!-- /REACTION OPTION IMAGE -->
                                        </div>
                                        <!-- /REACTION OPTION -->

                                        <!-- REACTION OPTION -->
                                        <div class="reaction-option text-tooltip-tft" data-title="Love">
                                            <!-- REACTION OPTION IMAGE -->
                                            <img class="reaction-option-image" src="/assets/vikinger/img/reaction/love.png"
                                                alt="reaction-love">
                                            <!-- /REACTION OPTION IMAGE -->
                                        </div>
                                        <!-- /REACTION OPTION -->

                                        <!-- REACTION OPTION -->
                                        <div class="reaction-option text-tooltip-tft" data-title="Dislike">
                                            <!-- REACTION OPTION IMAGE -->
                                            <img class="reaction-option-image" src="/assets/vikinger/img/reaction/dislike.png"
                                                alt="reaction-dislike">
                                            <!-- /REACTION OPTION IMAGE -->
                                        </div>
                                        <!-- /REACTION OPTION -->

                                        <!-- REACTION OPTION -->
                                        <div class="reaction-option text-tooltip-tft" data-title="Happy">
                                            <!-- REACTION OPTION IMAGE -->
                                            <img class="reaction-option-image" src="/assets/vikinger/img/reaction/happy.png"
                                                alt="reaction-happy">
                                            <!-- /REACTION OPTION IMAGE -->
                                        </div>
                                        <!-- /REACTION OPTION -->

                                        <!-- REACTION OPTION -->
                                        <div class="reaction-option text-tooltip-tft" data-title="Funny">
                                            <!-- REACTION OPTION IMAGE -->
                                            <img class="reaction-option-image" src="/assets/vikinger/img/reaction/funny.png"
                                                alt="reaction-funny">
                                            <!-- /REACTION OPTION IMAGE -->
                                        </div>
                                        <!-- /REACTION OPTION -->

                                        <!-- REACTION OPTION -->
                                        <div class="reaction-option text-tooltip-tft" data-title="Wow">
                                            <!-- REACTION OPTION IMAGE -->
                                            <img class="reaction-option-image" src="/assets/vikinger/img/reaction/wow.png"
                                                alt="reaction-wow">
                                            <!-- /REACTION OPTION IMAGE -->
                                        </div>
                                        <!-- /REACTION OPTION -->

                                        <!-- REACTION OPTION -->
                                        <div class="reaction-option text-tooltip-tft" data-title="Angry">
                                            <!-- REACTION OPTION IMAGE -->
                                            <img class="reaction-option-image" src="/assets/vikinger/img/reaction/angry.png"
                                                alt="reaction-angry">
                                            <!-- /REACTION OPTION IMAGE -->
                                        </div>
                                        <!-- /REACTION OPTION -->

                                        <!-- REACTION OPTION -->
                                        <div class="reaction-option text-tooltip-tft" data-title="Sad">
                                            <!-- REACTION OPTION IMAGE -->
                                            <img class="reaction-option-image" src="/assets/vikinger/img/reaction/sad.png"
                                                alt="reaction-sad">
                                            <!-- /REACTION OPTION IMAGE -->
                                        </div>
                                        <!-- /REACTION OPTION -->
                                    </div>
                                    <!-- /REACTION OPTIONS -->
                                </div>
                                <!-- /META LINE -->

                                <!-- META LINE -->
                                <div class="meta-line">
                                    <!-- META LINE LINK -->
                                    <p class="meta-line-link light">Reply</p>
                                    <!-- /META LINE LINK -->
                                </div>
                                <!-- /META LINE -->

                                <!-- META LINE -->
                                <div class="meta-line">
                                    <!-- META LINE TIMESTAMP -->
                                    <p class="meta-line-timestamp">2 min ago</p>
                                    <!-- /META LINE TIMESTAMP -->
                                </div>
                                <!-- /META LINE -->

                                <!-- META LINE -->
                                <div class="meta-line settings">
                                    <!-- POST SETTINGS WRAP -->
                                    <div class="post-settings-wrap">
                                        <!-- POST SETTINGS -->
                                        <div class="post-settings post-settings-dropdown-trigger">
                                            <!-- POST SETTINGS ICON -->
                                            <svg class="post-settings-icon icon-more-dots">
                                                <use xlink:href="#svg-more-dots"></use>
                                            </svg>
                                            <!-- /POST SETTINGS ICON -->
                                        </div>
                                        <!-- /POST SETTINGS -->

                                        <!-- SIMPLE DROPDOWN -->
                                        <div class="simple-dropdown post-settings-dropdown">
                                            <!-- SIMPLE DROPDOWN LINK -->
                                            <p class="simple-dropdown-link">Report Post</p>
                                            <!-- /SIMPLE DROPDOWN LINK -->
                                        </div>
                                        <!-- /SIMPLE DROPDOWN -->
                                    </div>
                                    <!-- /POST SETTINGS WRAP -->
                                </div>
                                <!-- /META LINE -->
                            </div>
                            <!-- /CONTENT ACTION -->
                        </div>
                        <!-- /CONTENT ACTIONS -->
                    </div>
                    <!-- /POST COMMENT -->

                    <!-- POST COMMENT -->
                    <div class="post-comment">
                        <!-- USER AVATAR -->
                        <a class="user-avatar small no-outline" href="profile-timeline.html">
                            <!-- USER AVATAR CONTENT -->
                            <div class="user-avatar-content">
                                <!-- HEXAGON -->
                                <div class="hexagon-image-30-32" data-src="/assets/vikinger/img/avatar/02.jpg"></div>
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

                            <!-- USER AVATAR BADGE -->
                            <div class="user-avatar-badge">
                                <!-- USER AVATAR BADGE BORDER -->
                                <div class="user-avatar-badge-border">
                                    <!-- HEXAGON -->
                                    <div class="hexagon-22-24"></div>
                                    <!-- /HEXAGON -->
                                </div>
                                <!-- /USER AVATAR BADGE BORDER -->

                                <!-- USER AVATAR BADGE CONTENT -->
                                <div class="user-avatar-badge-content">
                                    <!-- HEXAGON -->
                                    <div class="hexagon-dark-16-18"></div>
                                    <!-- /HEXAGON -->
                                </div>
                                <!-- /USER AVATAR BADGE CONTENT -->

                                <!-- USER AVATAR BADGE TEXT -->
                                <p class="user-avatar-badge-text">19</p>
                                <!-- /USER AVATAR BADGE TEXT -->
                            </div>
                            <!-- /USER AVATAR BADGE -->
                        </a>
                        <!-- /USER AVATAR -->

                        <!-- POST COMMENT TEXT -->
                        <p class="post-comment-text"><a class="post-comment-text-author"
                                href="profile-timeline.html">Destroy Dex</a>YEAHHH!! <a
                                href="profile-timeline.html">@MarinaValentine</a> I really enjoyed your last stream
                            and it also was really funny! Can't wait!</p>
                        <!-- /POST COMMENT TEXT -->

                        <!-- CONTENT ACTIONS -->
                        <div class="content-actions">
                            <!-- CONTENT ACTION -->
                            <div class="content-action">
                                <!-- META LINE -->
                                <div class="meta-line">
                                    <!-- META LINE LINK -->
                                    <p class="meta-line-link light reaction-options-small-dropdown-trigger">React!</p>
                                    <!-- /META LINE LINK -->

                                    <!-- REACTION OPTIONS -->
                                    <div class="reaction-options small reaction-options-small-dropdown">
                                        <!-- REACTION OPTION -->
                                        <div class="reaction-option text-tooltip-tft" data-title="Like">
                                            <!-- REACTION OPTION IMAGE -->
                                            <img class="reaction-option-image" src="/assets/vikinger/img/reaction/like.png"
                                                alt="reaction-like">
                                            <!-- /REACTION OPTION IMAGE -->
                                        </div>
                                        <!-- /REACTION OPTION -->

                                        <!-- REACTION OPTION -->
                                        <div class="reaction-option text-tooltip-tft" data-title="Love">
                                            <!-- REACTION OPTION IMAGE -->
                                            <img class="reaction-option-image" src="/assets/vikinger/img/reaction/love.png"
                                                alt="reaction-love">
                                            <!-- /REACTION OPTION IMAGE -->
                                        </div>
                                        <!-- /REACTION OPTION -->

                                        <!-- REACTION OPTION -->
                                        <div class="reaction-option text-tooltip-tft" data-title="Dislike">
                                            <!-- REACTION OPTION IMAGE -->
                                            <img class="reaction-option-image" src="/assets/vikinger/img/reaction/dislike.png"
                                                alt="reaction-dislike">
                                            <!-- /REACTION OPTION IMAGE -->
                                        </div>
                                        <!-- /REACTION OPTION -->

                                        <!-- REACTION OPTION -->
                                        <div class="reaction-option text-tooltip-tft" data-title="Happy">
                                            <!-- REACTION OPTION IMAGE -->
                                            <img class="reaction-option-image" src="/assets/vikinger/img/reaction/happy.png"
                                                alt="reaction-happy">
                                            <!-- /REACTION OPTION IMAGE -->
                                        </div>
                                        <!-- /REACTION OPTION -->

                                        <!-- REACTION OPTION -->
                                        <div class="reaction-option text-tooltip-tft" data-title="Funny">
                                            <!-- REACTION OPTION IMAGE -->
                                            <img class="reaction-option-image" src="/assets/vikinger/img/reaction/funny.png"
                                                alt="reaction-funny">
                                            <!-- /REACTION OPTION IMAGE -->
                                        </div>
                                        <!-- /REACTION OPTION -->

                                        <!-- REACTION OPTION -->
                                        <div class="reaction-option text-tooltip-tft" data-title="Wow">
                                            <!-- REACTION OPTION IMAGE -->
                                            <img class="reaction-option-image" src="/assets/vikinger/img/reaction/wow.png"
                                                alt="reaction-wow">
                                            <!-- /REACTION OPTION IMAGE -->
                                        </div>
                                        <!-- /REACTION OPTION -->

                                        <!-- REACTION OPTION -->
                                        <div class="reaction-option text-tooltip-tft" data-title="Angry">
                                            <!-- REACTION OPTION IMAGE -->
                                            <img class="reaction-option-image" src="/assets/vikinger/img/reaction/angry.png"
                                                alt="reaction-angry">
                                            <!-- /REACTION OPTION IMAGE -->
                                        </div>
                                        <!-- /REACTION OPTION -->

                                        <!-- REACTION OPTION -->
                                        <div class="reaction-option text-tooltip-tft" data-title="Sad">
                                            <!-- REACTION OPTION IMAGE -->
                                            <img class="reaction-option-image" src="/assets/vikinger/img/reaction/sad.png"
                                                alt="reaction-sad">
                                            <!-- /REACTION OPTION IMAGE -->
                                        </div>
                                        <!-- /REACTION OPTION -->
                                    </div>
                                    <!-- /REACTION OPTIONS -->
                                </div>
                                <!-- /META LINE -->

                                <!-- META LINE -->
                                <div class="meta-line">
                                    <!-- META LINE LINK -->
                                    <p class="meta-line-link light">Reply</p>
                                    <!-- /META LINE LINK -->
                                </div>
                                <!-- /META LINE -->

                                <!-- META LINE -->
                                <div class="meta-line">
                                    <!-- META LINE TIMESTAMP -->
                                    <p class="meta-line-timestamp">27 min ago</p>
                                    <!-- /META LINE TIMESTAMP -->
                                </div>
                                <!-- /META LINE -->

                                <!-- META LINE -->
                                <div class="meta-line settings">
                                    <!-- POST SETTINGS WRAP -->
                                    <div class="post-settings-wrap">
                                        <!-- POST SETTINGS -->
                                        <div class="post-settings post-settings-dropdown-trigger">
                                            <!-- POST SETTINGS ICON -->
                                            <svg class="post-settings-icon icon-more-dots">
                                                <use xlink:href="#svg-more-dots"></use>
                                            </svg>
                                            <!-- /POST SETTINGS ICON -->
                                        </div>
                                        <!-- /POST SETTINGS -->

                                        <!-- SIMPLE DROPDOWN -->
                                        <div class="simple-dropdown post-settings-dropdown">
                                            <!-- SIMPLE DROPDOWN LINK -->
                                            <p class="simple-dropdown-link">Report Post</p>
                                            <!-- /SIMPLE DROPDOWN LINK -->
                                        </div>
                                        <!-- /SIMPLE DROPDOWN -->
                                    </div>
                                    <!-- /POST SETTINGS WRAP -->
                                </div>
                                <!-- /META LINE -->
                            </div>
                            <!-- /CONTENT ACTION -->
                        </div>
                        <!-- /CONTENT ACTIONS -->
                    </div>
                    <!-- /POST COMMENT -->

                    <!-- POST COMMENT -->
                    <div class="post-comment">
                        <!-- USER AVATAR -->
                        <a class="user-avatar small no-outline" href="profile-timeline.html">
                            <!-- USER AVATAR CONTENT -->
                            <div class="user-avatar-content">
                                <!-- HEXAGON -->
                                <div class="hexagon-image-30-32" data-src="/assets/vikinger/img/avatar/07.jpg"></div>
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

                            <!-- USER AVATAR BADGE -->
                            <div class="user-avatar-badge">
                                <!-- USER AVATAR BADGE BORDER -->
                                <div class="user-avatar-badge-border">
                                    <!-- HEXAGON -->
                                    <div class="hexagon-22-24"></div>
                                    <!-- /HEXAGON -->
                                </div>
                                <!-- /USER AVATAR BADGE BORDER -->

                                <!-- USER AVATAR BADGE CONTENT -->
                                <div class="user-avatar-badge-content">
                                    <!-- HEXAGON -->
                                    <div class="hexagon-dark-16-18"></div>
                                    <!-- /HEXAGON -->
                                </div>
                                <!-- /USER AVATAR BADGE CONTENT -->

                                <!-- USER AVATAR BADGE TEXT -->
                                <p class="user-avatar-badge-text">26</p>
                                <!-- /USER AVATAR BADGE TEXT -->
                            </div>
                            <!-- /USER AVATAR BADGE -->
                        </a>
                        <!-- /USER AVATAR -->

                        <!-- POST COMMENT TEXT -->
                        <p class="post-comment-text"><a class="post-comment-text-author"
                                href="profile-timeline.html">Sarah Diamond</a>That sounds awesome Marina! And also
                            thanks a lot for the art sneak peek! I went to the GameCon last week and had a great time
                            playing the game's open demo.</p>
                        <!-- /POST COMMENT TEXT -->

                        <!-- CONTENT ACTIONS -->
                        <div class="content-actions">
                            <!-- CONTENT ACTION -->
                            <div class="content-action">
                                <!-- META LINE -->
                                <div class="meta-line">
                                    <!-- META LINE LINK -->
                                    <p class="meta-line-link light reaction-options-small-dropdown-trigger">React!</p>
                                    <!-- /META LINE LINK -->

                                    <!-- REACTION OPTIONS -->
                                    <div class="reaction-options small reaction-options-small-dropdown">
                                        <!-- REACTION OPTION -->
                                        <div class="reaction-option text-tooltip-tft" data-title="Like">
                                            <!-- REACTION OPTION IMAGE -->
                                            <img class="reaction-option-image" src="/assets/vikinger/img/reaction/like.png"
                                                alt="reaction-like">
                                            <!-- /REACTION OPTION IMAGE -->
                                        </div>
                                        <!-- /REACTION OPTION -->

                                        <!-- REACTION OPTION -->
                                        <div class="reaction-option text-tooltip-tft" data-title="Love">
                                            <!-- REACTION OPTION IMAGE -->
                                            <img class="reaction-option-image" src="/assets/vikinger/img/reaction/love.png"
                                                alt="reaction-love">
                                            <!-- /REACTION OPTION IMAGE -->
                                        </div>
                                        <!-- /REACTION OPTION -->

                                        <!-- REACTION OPTION -->
                                        <div class="reaction-option text-tooltip-tft" data-title="Dislike">
                                            <!-- REACTION OPTION IMAGE -->
                                            <img class="reaction-option-image" src="/assets/vikinger/img/reaction/dislike.png"
                                                alt="reaction-dislike">
                                            <!-- /REACTION OPTION IMAGE -->
                                        </div>
                                        <!-- /REACTION OPTION -->

                                        <!-- REACTION OPTION -->
                                        <div class="reaction-option text-tooltip-tft" data-title="Happy">
                                            <!-- REACTION OPTION IMAGE -->
                                            <img class="reaction-option-image" src="/assets/vikinger/img/reaction/happy.png"
                                                alt="reaction-happy">
                                            <!-- /REACTION OPTION IMAGE -->
                                        </div>
                                        <!-- /REACTION OPTION -->

                                        <!-- REACTION OPTION -->
                                        <div class="reaction-option text-tooltip-tft" data-title="Funny">
                                            <!-- REACTION OPTION IMAGE -->
                                            <img class="reaction-option-image" src="/assets/vikinger/img/reaction/funny.png"
                                                alt="reaction-funny">
                                            <!-- /REACTION OPTION IMAGE -->
                                        </div>
                                        <!-- /REACTION OPTION -->

                                        <!-- REACTION OPTION -->
                                        <div class="reaction-option text-tooltip-tft" data-title="Wow">
                                            <!-- REACTION OPTION IMAGE -->
                                            <img class="reaction-option-image" src="/assets/vikinger/img/reaction/wow.png"
                                                alt="reaction-wow">
                                            <!-- /REACTION OPTION IMAGE -->
                                        </div>
                                        <!-- /REACTION OPTION -->

                                        <!-- REACTION OPTION -->
                                        <div class="reaction-option text-tooltip-tft" data-title="Angry">
                                            <!-- REACTION OPTION IMAGE -->
                                            <img class="reaction-option-image" src="/assets/vikinger/img/reaction/angry.png"
                                                alt="reaction-angry">
                                            <!-- /REACTION OPTION IMAGE -->
                                        </div>
                                        <!-- /REACTION OPTION -->

                                        <!-- REACTION OPTION -->
                                        <div class="reaction-option text-tooltip-tft" data-title="Sad">
                                            <!-- REACTION OPTION IMAGE -->
                                            <img class="reaction-option-image" src="/assets/vikinger/img/reaction/sad.png"
                                                alt="reaction-sad">
                                            <!-- /REACTION OPTION IMAGE -->
                                        </div>
                                        <!-- /REACTION OPTION -->
                                    </div>
                                    <!-- /REACTION OPTIONS -->
                                </div>
                                <!-- /META LINE -->

                                <!-- META LINE -->
                                <div class="meta-line">
                                    <!-- META LINE LINK -->
                                    <p class="meta-line-link light">Reply</p>
                                    <!-- /META LINE LINK -->
                                </div>
                                <!-- /META LINE -->

                                <!-- META LINE -->
                                <div class="meta-line">
                                    <!-- META LINE TIMESTAMP -->
                                    <p class="meta-line-timestamp">39 min ago</p>
                                    <!-- /META LINE TIMESTAMP -->
                                </div>
                                <!-- /META LINE -->

                                <!-- META LINE -->
                                <div class="meta-line settings">
                                    <!-- POST SETTINGS WRAP -->
                                    <div class="post-settings-wrap">
                                        <!-- POST SETTINGS -->
                                        <div class="post-settings post-settings-dropdown-trigger">
                                            <!-- POST SETTINGS ICON -->
                                            <svg class="post-settings-icon icon-more-dots">
                                                <use xlink:href="#svg-more-dots"></use>
                                            </svg>
                                            <!-- /POST SETTINGS ICON -->
                                        </div>
                                        <!-- /POST SETTINGS -->

                                        <!-- SIMPLE DROPDOWN -->
                                        <div class="simple-dropdown post-settings-dropdown">
                                            <!-- SIMPLE DROPDOWN LINK -->
                                            <p class="simple-dropdown-link">Report Post</p>
                                            <!-- /SIMPLE DROPDOWN LINK -->
                                        </div>
                                        <!-- /SIMPLE DROPDOWN -->
                                    </div>
                                    <!-- /POST SETTINGS WRAP -->
                                </div>
                                <!-- /META LINE -->
                            </div>
                            <!-- /CONTENT ACTION -->
                        </div>
                        <!-- /CONTENT ACTIONS -->
                    </div>
                    <!-- /POST COMMENT -->

                    <!-- POST COMMENT HEADING -->
                    <p class="post-comment-heading">Load More Comments <span class="highlighted">9+</span></p>
                    <!-- /POST COMMENT HEADING -->
                </div>
                <!-- /POST COMMENT LIST -->
            </div>
            <!-- /WIDGET BOX SCROLLABLE -->

            <!-- POST COMMENT FORM -->
            <div class="post-comment-form bordered-top">
                <!-- USER AVATAR -->
                <div class="user-avatar small no-outline">
                    <!-- USER AVATAR CONTENT -->
                    <div class="user-avatar-content">
                        <!-- HEXAGON -->
                        <div class="hexagon-image-30-32" data-src="/assets/vikinger/img/avatar/01.jpg"></div>
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

                    <!-- USER AVATAR BADGE -->
                    <div class="user-avatar-badge">
                        <!-- USER AVATAR BADGE BORDER -->
                        <div class="user-avatar-badge-border">
                            <!-- HEXAGON -->
                            <div class="hexagon-22-24"></div>
                            <!-- /HEXAGON -->
                        </div>
                        <!-- /USER AVATAR BADGE BORDER -->

                        <!-- USER AVATAR BADGE CONTENT -->
                        <div class="user-avatar-badge-content">
                            <!-- HEXAGON -->
                            <div class="hexagon-dark-16-18"></div>
                            <!-- /HEXAGON -->
                        </div>
                        <!-- /USER AVATAR BADGE CONTENT -->

                        <!-- USER AVATAR BADGE TEXT -->
                        <p class="user-avatar-badge-text">24</p>
                        <!-- /USER AVATAR BADGE TEXT -->
                    </div>
                    <!-- /USER AVATAR BADGE -->
                </div>
                <!-- /USER AVATAR -->

                <!-- FORM -->
                <form class="form">
                    <!-- FORM ROW -->
                    <div class="form-row">
                        <!-- FORM ITEM -->
                        <div class="form-item">
                            <!-- FORM INPUT -->
                            <div class="form-input small">
                                <label for="popup-post-reply">Your Reply</label>
                                <input type="text" id="popup-post-reply" name="popup_post_reply">
                            </div>
                            <!-- /FORM INPUT -->
                        </div>
                        <!-- /FORM ITEM -->
                    </div>
                    <!-- /FORM ROW -->
                </form>
                <!-- /FORM -->
            </div>
            <!-- /POST COMMENT FORM -->
        </div>
        <!-- /WIDGET BOX -->

        <!-- POPUP PICTURE IMAGE WRAP -->
        <div class="popup-picture-image-wrap">
            <!-- POPUP PICTURE IMAGE -->
            <figure class="popup-picture-image">
                <img src="/assets/vikinger/img/cover/04.jpg" alt="cover-04">
            </figure>
            <!-- /POPUP PICTURE IMAGE -->
        </div>
        <!-- /POPUP PICTURE IMAGE WRAP -->
    </div> --}}
    <!-- /POPUP PICTURE -->

    <!-- app -->
    <script src="/assets/vikinger/js/utils/app.js"></script>
    <!-- page loader -->
    <script src="/assets/vikinger/js/utils/page-loader.js"></script>
    <!-- simplebar -->
    <script src="/assets/vikinger/js/vendor/simplebar.min.js"></script>
    <!-- liquidify -->
    <script src="/assets/vikinger/js/utils/liquidify.js"></script>
    <!-- XM_Plugins -->
    <script src="/assets/vikinger/js/vendor/xm_plugins.min.js"></script>
    <!-- tiny-slider -->
    <script src="/assets/vikinger/js/vendor/tiny-slider.min.js"></script>
    <!-- chartJS -->
    <script src="/assets/vikinger/js/vendor/Chart.bundle.min.js"></script>
    <!-- global.hexagons -->
    <script src="/assets/vikinger/js/global/global.hexagons.js"></script>
    <!-- global.tooltips -->
    <script src="/assets/vikinger/js/global/global.tooltips.js"></script>
    <!-- global.popups -->
    <script src="/assets/vikinger/js/global/global.popups.js"></script>
    <!-- global.charts -->
    <script src="/assets/vikinger/js/global/global.charts.js"></script>
    <!-- header -->
    <script src="/assets/vikinger/js/header/header.js"></script>
    <!-- sidebar -->
    <script src="/assets/vikinger/js/sidebar/sidebar.js"></script>
    <!-- content -->
    <script src="/assets/vikinger/js/content/content.js"></script>
    <!-- form.utils -->
    <script src="/assets/vikinger/js/form/form.utils.js"></script>
    <!-- SVG icons -->
    <script src="/assets/vikinger/js/utils/svg-loader.js"></script>
</body>

</html>
