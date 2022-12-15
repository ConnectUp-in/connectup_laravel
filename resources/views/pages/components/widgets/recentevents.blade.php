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
    <p class="widget-box-title">
        Latest Events <span class="highlighted">2</span>
    </p>
    <!-- /WIDGET BOX TITLE -->

    <!-- WIDGET BOX CONTENT -->
    <div class="widget-box-content">
        <!-- EVENT PREVIEW LIST -->
        <div class="event-preview-list">

            @foreach (\App\Models\Event::where('active', 1)->orderBy('created_at', 'desc')->limit(3)->get() as $event)
                <!-- EVENT PREVIEW -->
                <div class="event-preview small">
                    <!-- EVENT PREVIEW COVER -->
                    <figure class="event-preview-cover liquid">
                        <img src="{{ $event->image }}" alt="cover-33" />
                    </figure>
                    <!-- /EVENT PREVIEW COVER -->

                    <!-- EVENT PREVIEW INFO -->
                    <div class="event-preview-info">
                        <!-- DATE STICKER -->
                        <div class="date-sticker">
                            <!-- DATE STICKER DAY -->
                            <p class="date-sticker-day">{{ $event->created_at->format('d') }}</p>
                            <!-- /DATE STICKER DAY -->

                            <!-- DATE STICKER MONTH -->
                            <p class="date-sticker-month">
                                {{ $event->created_at->format('M') }}
                            </p>
                            <!-- /DATE STICKER MONTH -->
                        </div>
                        <!-- /DATE STICKER -->

                        <!-- EVENT PREVIEW TITLE -->
                        <p class="event-preview-title popup-event-information-trigger">
                            {{ $event->title }}
                        </p>
                        <!-- /EVENT PREVIEW TITLE -->

                        <!-- EVENT PREVIEW TIMESTAMP -->
                        <p class="event-preview-timestamp">
                            {{ $event->created_at->format('h:i A') }}
                        </p>
                        <!-- /EVENT PREVIEW TIMESTAMP -->

                        <!-- EVENT PREVIEW LOCATION -->
                        <p class="event-preview-location">
                            {{ $event->location }}
                        </p>
                        <!-- /EVENT PREVIEW LOCATION -->
                    </div>
                    <!-- /EVENT PREVIEW INFO -->
                </div>
                <!-- /EVENT PREVIEW -->
            @endforeach


        </div>
        <!-- /EVENT PREVIEW LIST -->
    </div>
    <!-- WIDGET BOX CONTENT -->
</div>
<!-- /WIDGET BOX -->
