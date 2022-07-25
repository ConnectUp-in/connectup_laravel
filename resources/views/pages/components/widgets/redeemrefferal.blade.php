@if (Auth::check() && !isset(Auth::user()->invited_by))
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
        <p class="widget-box-title">Refferal Code</p>


        <!-- /WIDGET BOX TITLE -->

        <span style="color:#fffa;">
            Fill out the referral code for the individual who invited you.
        </span>
        <!-- WIDGET BOX CONTENT -->
        <div class="widget-box-content">
            <div class="form-input  active">
                <label for="invited_by">Refferal Code</label>
                <input type="text" id="invited_by" name="name" value="">
            </div>
            <a href="/startups/create" class="button primary w-100 mt-3">Apply Refferal</a>

        </div>
        <!-- /WIDGET BOX CONTENT -->
    </div>
    <!-- /WIDGET BOX -->
@endif
