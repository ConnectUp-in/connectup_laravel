@if (Auth::check())
    <!-- WIDGET BOX -->
    <div class="widget-box">
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
                    <p class="simple-dropdown-link">Widget Settings</p>
                    <!-- /SIMPLE DROPDOWN LINK -->
                </div>
                <!-- /SIMPLE DROPDOWN -->
            </div>
            <!-- /POST SETTINGS WRAP -->
        </div>
        <!-- /WIDGET BOX SETTINGS -->

        <!-- WIDGET BOX TITLE -->
        <p class="widget-box-title">Your Refferals</p>
        <!-- /WIDGET BOX TITLE -->

        <!-- WIDGET BOX CONTENT -->
        <div class="widget-box-content">
            <!-- USER STATUS LIST -->
            <div class="user-status-list">


                <!-- USER STATUS -->
                <div class="user-status">
                    <!-- USER STATUS AVATAR -->
                    <a class="user-status-avatar" href="profile-timeline.html">
                        <!-- USER AVATAR -->
                        <div class="user-avatar small no-outline">
                            <!-- USER AVATAR CONTENT -->
                            <div class="user-avatar-content">
                                <!-- HEXAGON -->
                                <div class="hexagon-image-30-32" data-src="/assets/template/img/avatar/05.jpg">
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
                    <p class="user-status-title"><a class="bold" href="profile-timeline.html">Ankur
                            Gupta</a> joined using your Refferal</p>
                    <!-- /USER STATUS TITLE -->

                    <!-- USER STATUS TIMESTAMP -->
                    <p class="user-status-timestamp">3 minutes ago</p>
                    <!-- /USER STATUS TIMESTAMP -->
                </div>
                <!-- /USER STATUS -->

            </div>
            <!-- /USER STATUS LIST -->
        </div>
        <!-- WIDGET BOX CONTENT -->
    </div>
    <!-- /WIDGET BOX -->
@endif
