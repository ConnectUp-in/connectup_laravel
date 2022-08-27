<!-- WIDGET BOX -->
<div class="widget-box">
    {{-- <!-- WIDGET BOX SETTINGS -->
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
                <p class="simple-dropdown-link">Great Try, </p>
                <!-- /SIMPLE DROPDOWN LINK -->
            </div>
            <!-- /SIMPLE DROPDOWN -->
        </div>
        <!-- /POST SETTINGS WRAP -->
    </div>
    <!-- /WIDGET BOX SETTINGS --> --}}

    <!-- WIDGET BOX TITLE -->
    <p class="widget-box-title">Startups <span class="highlighted">0</span></p>
    <!-- /WIDGET BOX TITLE -->

    <!-- WIDGET BOX CONTENT -->
    <div class="widget-box-content">
        <!-- PICTURE ITEM LIST -->
        <div class="picture-item-list small">
            @forelse ($user->startups as $startup)
                <!-- PICTURE ITEM -->
                <div class="picture-item">
                    <!-- PICTURE -->
                    <figure class="picture round liquid">
                        <img src="/assets/template/img/avatar/01.jpg" alt="avatar-01">
                    </figure>
                    <!-- /PICTURE -->
                </div>
                <!-- /PICTURE ITEM -->


                @if ($loop->iteration == 9)
                    <!-- PICTURE ITEM -->
                    <a class="picture-item" href="#">
                        <!-- PICTURE -->
                        <figure class="picture round liquid">
                            <img src="/assets/template/img/cover/17.jpg" alt="avatar-17">
                        </figure>
                        <!-- /PICTURE -->

                        <!-- PICTURE ITEM OVERLAY -->
                        <div class="picture-item-overlay round">
                            <!-- PICTURE ITEM OVERLAY TEXT -->
                            <p class="picture-item-overlay-text">+61</p>
                            <!-- /PICTURE ITEM OVERLAY TEXT -->
                        </div>
                        <!-- /PICTURE ITEM OVERLAY -->
                    </a>
                    <!-- /PICTURE ITEM -->
                @break
            @endif

        @empty
        @endforelse

    </div>
    <!-- /PICTURE ITEM LIST -->

    <p>No startups Created Yet</p>

    @if (Auth::check() && Auth::user()->id == $user->id)
        <a style="cursor: not-allowed" href="#" class="button warning w-100 mt-3">Create Startup</a>
    @endif
</div>
<!-- /WIDGET BOX CONTENT -->
</div>
<!-- /WIDGET BOX -->
