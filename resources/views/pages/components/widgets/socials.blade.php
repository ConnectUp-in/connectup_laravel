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
                <p class="simple-dropdown-link">
                    Widget Settings
                </p>
                <!-- /SIMPLE DROPDOWN LINK -->
            </div>
            <!-- /SIMPLE DROPDOWN -->
        </div>
        <!-- /POST SETTINGS WRAP -->
    </div>
    <!-- /WIDGET BOX SETTINGS -->

    <!-- WIDGET BOX TITLE -->
    <p class="widget-box-title">Social Networks</p>
    <!-- /WIDGET BOX TITLE -->

    <!-- WIDGET BOX CONTENT -->
    <div class="widget-box-content">
        <!-- SOCIAL LINKS -->
        <div class="social-links multiline align-left">


            @foreach ($socials as $item => $link)
                <!-- SOCIAL LINK -->
                <a class="social-link small {{ $item }}" traget="_blank" href="{{ shorten($link) }}">
                    <!-- SOCIAL LINK ICON -->
                    <svg class="social-link-icon icon-icon">
                        <use xlink:href="#svg-{{ $item }}"></use>
                    </svg>
                    <!-- /SOCIAL LINK ICON -->
                </a>
                <!-- /SOCIAL LINK -->
            @endforeach

        </div>
        <!-- /SOCIAL LINKS -->
    </div>
    <!-- /WIDGET BOX CONTENT -->
</div>
<!-- /WIDGET BOX -->
