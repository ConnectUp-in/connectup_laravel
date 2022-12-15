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
                            <p class="date-sticker-day">{{ Carbon::parse($event->e_dates[0])->format('d') }}</p>
                            <!-- /DATE STICKER DAY -->

                            <!-- DATE STICKER MONTH -->
                            <p class="date-sticker-month">
                                {{ Carbon::parse($event->e_dates[0])->format('M') }}
                            </p>
                            <!-- /DATE STICKER MONTH -->
                        </div>
                        <!-- /DATE STICKER -->

                        <!-- EVENT PREVIEW TITLE -->
                        <a href='{{ route('event', $event->slug) }}' class="event-preview-title">
                            {{ $event->title }}
                        </a>
                        <!-- /EVENT PREVIEW TITLE -->


                        <!-- EVENT PREVIEW LOCATION -->
                        <p class="event-preview-location mt-1">
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
