@forelse ($posts as $post)
    <!-- WIDGET BOX -->
    <div class="widget-box no-padding">
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
                    <p class="simple-dropdown-link">View Post</p>
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
                                <div class="hexagon-image-30-32" data-src="{{ $post->user->profile_photo_url }}">
                                </div>
                                <!-- /HEXAGON -->
                                {{-- <img src="{{ $post->user->profile_photo_url }}" alt=""> --}}
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

                            {{-- <!-- USER AVATAR BADGE -->
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
                            <!-- /USER AVATAR BADGE --> --}}
                        </div>
                        <!-- /USER AVATAR -->
                    </a>
                    <!-- /USER STATUS AVATAR -->

                    <!-- USER STATUS TITLE -->
                    <p class="user-status-title medium"><a class="bold"
                            href="profile-timeline.html">{{ $post->user->name }}</a> shared a <span
                            class="bold">post</span></p>
                    <!-- /USER STATUS TITLE -->

                    <!-- USER STATUS TEXT -->
                    <p class="user-status-text small">
                        {{ $post->created_at->diffForHumans() }}
                    </p>
                    <!-- /USER STATUS TEXT -->
                </div>
                <!-- /USER STATUS -->

                <!-- WIDGET BOX STATUS TEXT -->
                <p class="widget-box-status-text">{!! $post->caption !!}</p>
                <!-- /WIDGET BOX STATUS TEXT -->
            </div>
            <!-- /WIDGET BOX STATUS CONTENT -->


            @if (isset($post->meta))
                <div class="widget-box-status-content">

                    <!-- VIDEO STATUS -->
                    <a class="video-status" href="{{ $post->meta['url'] }}" target="_blank">
                        <!-- VIDEO STATUS IMAGE -->
                        <img class="video-status-image" src="{{ $post->meta['image_url'] }}"
                            alt="{{ $post->meta['title'] }}" onerror="this.style.display='none'">
                        <!-- /VIDEO STATUS IMAGE -->

                        <!-- VIDEO STATUS INFO -->
                        <div class="video-status-info">
                            <!-- VIDEO STATUS META -->
                            <p class="video-status-meta">{{ $post->meta['url'] }}</p>
                            <!-- /VIDEO STATUS META -->

                            <!-- VIDEO STATUS TITLE -->
                            <p class="video-status-title">
                                <span class="bold">{{ $post->meta['title'] }}</span>
                            </p>
                            <!-- /VIDEO STATUS TITLE -->

                            <!-- VIDEO STATUS TEXT -->
                            <p class="video-status-text">{{ $post->meta['body'] }}</p>
                            <!-- /VIDEO STATUS TEXT -->
                        </div>
                        <!-- /VIDEO STATUS INFO -->
                    </a>
                    <!-- /VIDEO STATUS -->
                </div>
            @endif
            @if (isset($post->ytlink))
                <div class="widget-box-status-content">

                    <!-- IFRAME WRAP -->
                    <div class="iframe-wrap">
                        <iframe src="https://www.youtube.com/embed/{{ getYoutubeVideoId($post->ytlink) }}"
                            allowfullscreen></iframe>
                    </div>
                    <!-- /IFRAME WRAP -->
                </div>
            @endif




            <!-- WIDGET BOX STATUS CONTENT -->
            <div class="widget-box-status-content">
                <!-- TAG LIST -->
                <div class="tag-list">

                    @forelse ($post->tags as $tag)
                        <!-- TAG ITEM -->
                        <a class="tag-item secondary" href="newsfeed.html">{{ $tag }}</a>
                        <!-- /TAG ITEM -->
                    @empty
                    @endforelse


                </div>
                <!-- /TAG LIST -->

                {{-- <!-- CONTENT ACTIONS -->
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
                                                class="bold">Love</span>
                                        </p>
                                        <!-- /SIMPLE DROPDOWN TEXT -->

                                        <!-- SIMPLE DROPDOWN TEXT -->
                                        <p class="simple-dropdown-text">Matt Parker</p>
                                        <!-- /SIMPLE DROPDOWN TEXT -->

                                        <!-- SIMPLE DROPDOWN TEXT -->
                                        <p class="simple-dropdown-text">Destroy Dex</p>
                                        <!-- /SIMPLE DROPDOWN TEXT -->

                                        <!-- SIMPLE DROPDOWN TEXT -->
                                        <p class="simple-dropdown-text">The Green Goo</p>
                                        <!-- /SIMPLE DROPDOWN TEXT -->
                                    </div>
                                    <!-- /SIMPLE DROPDOWN -->
                                </div>
                                <!-- /REACTION ITEM -->

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
                                                src="/assets/vikinger/img/reaction/happy.png" alt="reaction-happy">
                                            <span class="bold">Happy</span>
                                        </p>
                                        <!-- /SIMPLE DROPDOWN TEXT -->

                                        <!-- SIMPLE DROPDOWN TEXT -->
                                        <p class="simple-dropdown-text">Sandra Strange</p>
                                        <!-- /SIMPLE DROPDOWN TEXT -->

                                        <!-- SIMPLE DROPDOWN TEXT -->
                                        <p class="simple-dropdown-text">Jane Rodgers</p>
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
                                                class="bold">Like</span>
                                        </p>
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

                                        <!-- SIMPLE DROPDOWN TEXT -->
                                        <p class="simple-dropdown-text">Jett Spiegel</p>
                                        <!-- /SIMPLE DROPDOWN TEXT -->

                                        <!-- SIMPLE DROPDOWN TEXT -->
                                        <p class="simple-dropdown-text">Marcus Jhonson</p>
                                        <!-- /SIMPLE DROPDOWN TEXT -->

                                        <!-- SIMPLE DROPDOWN TEXT -->
                                        <p class="simple-dropdown-text"><span class="bold">and 6
                                                more...</span></p>
                                        <!-- /SIMPLE DROPDOWN TEXT -->
                                    </div>
                                    <!-- /SIMPLE DROPDOWN -->
                                </div>
                                <!-- /REACTION ITEM -->
                            </div>
                            <!-- /META LINE LIST -->

                            <!-- META LINE TEXT -->
                            <p class="meta-line-text">{{ count($post->likes) }}</p>
                            <!-- /META LINE TEXT -->
                        </div>
                        <!-- /META LINE -->

                        <!-- META LINE -->
                        <div class="meta-line">
                            <!-- META LINE LIST -->
                            <div class="meta-line-list user-avatar-list">
                                <!-- USER AVATAR -->
                                <div class="user-avatar micro no-stats">
                                    <!-- USER AVATAR BORDER -->
                                    <div class="user-avatar-border">
                                        <!-- HEXAGON -->
                                        <div class="hexagon-22-24"></div>
                                        <!-- /HEXAGON -->
                                    </div>
                                    <!-- /USER AVATAR BORDER -->

                                    <!-- USER AVATAR CONTENT -->
                                    <div class="user-avatar-content">
                                        <!-- HEXAGON -->
                                        <div class="hexagon-image-18-20" data-src="/assets/vikinger/img/avatar/07.jpg">
                                        </div>
                                        <!-- /HEXAGON -->
                                    </div>
                                    <!-- /USER AVATAR CONTENT -->
                                </div>
                                <!-- /USER AVATAR -->

                                <!-- USER AVATAR -->
                                <div class="user-avatar micro no-stats">
                                    <!-- USER AVATAR BORDER -->
                                    <div class="user-avatar-border">
                                        <!-- HEXAGON -->
                                        <div class="hexagon-22-24"></div>
                                        <!-- /HEXAGON -->
                                    </div>
                                    <!-- /USER AVATAR BORDER -->

                                    <!-- USER AVATAR CONTENT -->
                                    <div class="user-avatar-content">
                                        <!-- HEXAGON -->
                                        <div class="hexagon-image-18-20"
                                            data-src="/assets/vikinger/img/avatar/13.jpg">
                                        </div>
                                        <!-- /HEXAGON -->
                                    </div>
                                    <!-- /USER AVATAR CONTENT -->
                                </div>
                                <!-- /USER AVATAR -->

                                <!-- USER AVATAR -->
                                <div class="user-avatar micro no-stats">
                                    <!-- USER AVATAR BORDER -->
                                    <div class="user-avatar-border">
                                        <!-- HEXAGON -->
                                        <div class="hexagon-22-24"></div>
                                        <!-- /HEXAGON -->
                                    </div>
                                    <!-- /USER AVATAR BORDER -->

                                    <!-- USER AVATAR CONTENT -->
                                    <div class="user-avatar-content">
                                        <!-- HEXAGON -->
                                        <div class="hexagon-image-18-20"
                                            data-src="/assets/vikinger/img/avatar/22.jpg">
                                        </div>
                                        <!-- /HEXAGON -->
                                    </div>
                                    <!-- /USER AVATAR CONTENT -->
                                </div>
                                <!-- /USER AVATAR -->

                                <!-- USER AVATAR -->
                                <div class="user-avatar micro no-stats">
                                    <!-- USER AVATAR BORDER -->
                                    <div class="user-avatar-border">
                                        <!-- HEXAGON -->
                                        <div class="hexagon-22-24"></div>
                                        <!-- /HEXAGON -->
                                    </div>
                                    <!-- /USER AVATAR BORDER -->

                                    <!-- USER AVATAR CONTENT -->
                                    <div class="user-avatar-content">
                                        <!-- HEXAGON -->
                                        <div class="hexagon-image-18-20"
                                            data-src="/assets/vikinger/img/avatar/10.jpg">
                                        </div>
                                        <!-- /HEXAGON -->
                                    </div>
                                    <!-- /USER AVATAR CONTENT -->
                                </div>
                                <!-- /USER AVATAR -->

                                <!-- USER AVATAR -->
                                <div class="user-avatar micro no-stats">
                                    <!-- USER AVATAR BORDER -->
                                    <div class="user-avatar-border">
                                        <!-- HEXAGON -->
                                        <div class="hexagon-22-24"></div>
                                        <!-- /HEXAGON -->
                                    </div>
                                    <!-- /USER AVATAR BORDER -->

                                    <!-- USER AVATAR CONTENT -->
                                    <div class="user-avatar-content">
                                        <!-- HEXAGON -->
                                        <div class="hexagon-image-18-20"
                                            data-src="/assets/vikinger/img/avatar/08.jpg">
                                        </div>
                                        <!-- /HEXAGON -->
                                    </div>
                                    <!-- /USER AVATAR CONTENT -->
                                </div>
                                <!-- /USER AVATAR -->
                            </div>
                            <!-- /META LINE LIST -->

                            <!-- META LINE TEXT -->
                            <p class="meta-line-text">19 Participants</p>
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
                            <p class="meta-line-link">2 Comments</p>
                            <!-- /META LINE LINK -->
                        </div>
                        <!-- /META LINE -->

                        <!-- META LINE -->
                        <div class="meta-line">
                            <!-- META LINE TEXT -->
                            <p class="meta-line-text">{{ count($post->shares) }} Shares</p>
                            <!-- /META LINE TEXT -->
                        </div>
                        <!-- /META LINE -->
                    </div>
                    <!-- /CONTENT ACTION -->
                </div>
                <!-- /CONTENT ACTIONS --> --}}
            </div>
            <!-- /WIDGET BOX STATUS CONTENT -->
        </div>
        <!-- /WIDGET BOX STATUS -->

        <!-- POST OPTIONS -->
        <div class="post-options">
            <!-- POST OPTION WRAP -->
            <div class="post-option-wrap">
                <!-- POST OPTION -->
                <div class="post-option reaction-options-dropdown-trigger">
                    <!-- POST OPTION ICON -->
                    <svg class="post-option-icon icon-thumbs-up">
                        <use xlink:href="#svg-thumbs-up"></use>
                    </svg>
                    <!-- /POST OPTION ICON -->

                    <!-- POST OPTION TEXT -->
                    <p class="post-option-text">React!</p>
                    <!-- /POST OPTION TEXT -->
                </div>
                <!-- /POST OPTION -->

                <!-- REACTION OPTIONS -->
                <div class="reaction-options reaction-options-dropdown"
                    style="height: auto;color:white;padding:5px initial">
                    Feature on way..
                </div>
                {{-- <!-- REACTION OPTIONS -->
                    <div class="reaction-options reaction-options-dropdown">


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
                </div> --}}
                <!-- /REACTION OPTIONS -->
            </div>
            <!-- /POST OPTION WRAP -->

            <!-- POST OPTION -->
            <div class="post-option reaction-options-dropdown-trigger">
                <!-- POST OPTION ICON -->
                <svg class="post-option-icon icon-comment">
                    <use xlink:href="#svg-comment"></use>
                </svg>
                <!-- /POST OPTION ICON -->

                <!-- POST OPTION TEXT -->
                <p class="post-option-text">Comment</p>
                <!-- /POST OPTION TEXT -->
            </div>
            <!-- /POST OPTION -->

            <div class="post-option-wrap">

                <!-- POST OPTION -->
                <div class="post-option share-options-dropdown-trigger">
                    <!-- POST OPTION ICON -->
                    <svg class="post-option-icon icon-share">
                        <use xlink:href="#svg-share"></use>
                    </svg>
                    <!-- /POST OPTION ICON -->

                    <!-- POST OPTION TEXT -->
                    <p class="post-option-text">Share</p>
                    <!-- /POST OPTION TEXT -->
                </div>
                <!-- /POST OPTION -->


                <!-- REACTION OPTIONS -->
                <div class="share-options-dropdown share-options ">

                    <div class="reaction-option text-tooltip-tft" data-title="Like">
                        <a href="whatsapp://send?text=https://connectup.in/post/{{ $post->id }}">
                            <!-- REACTION OPTION
                            IMAGE -->
                            <img class="reaction-option-image"
                                src="https://cdn2.iconfinder.com/data/icons/social-messaging-ui-color-shapes-2-free/128/social-whatsapp-circle-512.png"
                                alt="reaction-like">
                            <!-- /REACTION OPTION IMAGE -->
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /POST OPTIONS -->
    </div>
    <!-- /WIDGET BOX -->
@empty
@endforelse

{{-- <!-- WIDGET BOX -->
<div class="widget-box no-padding">
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
                </a>
                <!-- /USER STATUS AVATAR -->

                <!-- USER STATUS TITLE -->
                <p class="user-status-title medium"><a class="bold" href="profile-timeline.html">Neko
                        Bebop</a> uploaded a <span class="bold">video</span></p>
                <!-- /USER STATUS TITLE -->

                <!-- USER STATUS TEXT -->
                <p class="user-status-text small">2 minutes ago</p>
                <!-- /USER STATUS TEXT -->
            </div>
            <!-- /USER STATUS -->

            <!-- WIDGET BOX STATUS TEXT -->
            <p class="widget-box-status-text">Hi to everyone! Check out my latest video of the outlaws
                expansion for Court Striker GO. I'm really excited because my last video had almost
                50.000 views.</p>
            <!-- /WIDGET BOX STATUS TEXT -->
        </div>
        <!-- /WIDGET BOX STATUS CONTENT -->

        <!-- IFRAME WRAP -->
        <div class="iframe-wrap">
            <iframe src="https://www.youtube.com/embed/rk-wIgg9fNk" allowfullscreen></iframe>
        </div>
        <!-- /IFRAME WRAP -->

        <!-- WIDGET BOX STATUS CONTENT -->
        <div class="widget-box-status-content">
            <!-- TAG LIST -->
            <div class="tag-list">
                <!-- TAG ITEM -->
                <a class="tag-item secondary" href="newsfeed.html">Stream</a>
                <!-- /TAG ITEM -->

                <!-- TAG ITEM -->
                <a class="tag-item secondary" href="newsfeed.html">StrikerGO</a>
                <!-- /TAG ITEM -->

                <!-- TAG ITEM -->
                <a class="tag-item secondary" href="newsfeed.html">Outlaws</a>
                <!-- /TAG ITEM -->

                <!-- TAG ITEM -->
                <a class="tag-item secondary" href="newsfeed.html">Gaming</a>
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
                                            class="bold">Love</span>
                                    </p>
                                    <!-- /SIMPLE DROPDOWN TEXT -->

                                    <!-- SIMPLE DROPDOWN TEXT -->
                                    <p class="simple-dropdown-text">Matt Parker</p>
                                    <!-- /SIMPLE DROPDOWN TEXT -->

                                    <!-- SIMPLE DROPDOWN TEXT -->
                                    <p class="simple-dropdown-text">Destroy Dex</p>
                                    <!-- /SIMPLE DROPDOWN TEXT -->

                                    <!-- SIMPLE DROPDOWN TEXT -->
                                    <p class="simple-dropdown-text">The Green Goo</p>
                                    <!-- /SIMPLE DROPDOWN TEXT -->
                                </div>
                                <!-- /SIMPLE DROPDOWN -->
                            </div>
                            <!-- /REACTION ITEM -->

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
                                            class="bold">Happy</span>
                                    </p>
                                    <!-- /SIMPLE DROPDOWN TEXT -->

                                    <!-- SIMPLE DROPDOWN TEXT -->
                                    <p class="simple-dropdown-text">Sandra Strange</p>
                                    <!-- /SIMPLE DROPDOWN TEXT -->

                                    <!-- SIMPLE DROPDOWN TEXT -->
                                    <p class="simple-dropdown-text">Jane Rodgers</p>
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
                                            class="bold">Like</span>
                                    </p>
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

                                    <!-- SIMPLE DROPDOWN TEXT -->
                                    <p class="simple-dropdown-text">Jett Spiegel</p>
                                    <!-- /SIMPLE DROPDOWN TEXT -->

                                    <!-- SIMPLE DROPDOWN TEXT -->
                                    <p class="simple-dropdown-text">Marcus Jhonson</p>
                                    <!-- /SIMPLE DROPDOWN TEXT -->

                                    <!-- SIMPLE DROPDOWN TEXT -->
                                    <p class="simple-dropdown-text"><span class="bold">and 6
                                            more...</span></p>
                                    <!-- /SIMPLE DROPDOWN TEXT -->
                                </div>
                                <!-- /SIMPLE DROPDOWN -->
                            </div>
                            <!-- /REACTION ITEM -->
                        </div>
                        <!-- /META LINE LIST -->

                        <!-- META LINE TEXT -->
                        <p class="meta-line-text">16</p>
                        <!-- /META LINE TEXT -->
                    </div>
                    <!-- /META LINE -->

                    <!-- META LINE -->
                    <div class="meta-line">
                        <!-- META LINE LIST -->
                        <div class="meta-line-list user-avatar-list">
                            <!-- USER AVATAR -->
                            <div class="user-avatar micro no-stats">
                                <!-- USER AVATAR BORDER -->
                                <div class="user-avatar-border">
                                    <!-- HEXAGON -->
                                    <div class="hexagon-22-24"></div>
                                    <!-- /HEXAGON -->
                                </div>
                                <!-- /USER AVATAR BORDER -->

                                <!-- USER AVATAR CONTENT -->
                                <div class="user-avatar-content">
                                    <!-- HEXAGON -->
                                    <div class="hexagon-image-18-20" data-src="/assets/vikinger/img/avatar/07.jpg">
                                    </div>
                                    <!-- /HEXAGON -->
                                </div>
                                <!-- /USER AVATAR CONTENT -->
                            </div>
                            <!-- /USER AVATAR -->

                            <!-- USER AVATAR -->
                            <div class="user-avatar micro no-stats">
                                <!-- USER AVATAR BORDER -->
                                <div class="user-avatar-border">
                                    <!-- HEXAGON -->
                                    <div class="hexagon-22-24"></div>
                                    <!-- /HEXAGON -->
                                </div>
                                <!-- /USER AVATAR BORDER -->

                                <!-- USER AVATAR CONTENT -->
                                <div class="user-avatar-content">
                                    <!-- HEXAGON -->
                                    <div class="hexagon-image-18-20" data-src="/assets/vikinger/img/avatar/13.jpg">
                                    </div>
                                    <!-- /HEXAGON -->
                                </div>
                                <!-- /USER AVATAR CONTENT -->
                            </div>
                            <!-- /USER AVATAR -->

                            <!-- USER AVATAR -->
                            <div class="user-avatar micro no-stats">
                                <!-- USER AVATAR BORDER -->
                                <div class="user-avatar-border">
                                    <!-- HEXAGON -->
                                    <div class="hexagon-22-24"></div>
                                    <!-- /HEXAGON -->
                                </div>
                                <!-- /USER AVATAR BORDER -->

                                <!-- USER AVATAR CONTENT -->
                                <div class="user-avatar-content">
                                    <!-- HEXAGON -->
                                    <div class="hexagon-image-18-20" data-src="/assets/vikinger/img/avatar/22.jpg">
                                    </div>
                                    <!-- /HEXAGON -->
                                </div>
                                <!-- /USER AVATAR CONTENT -->
                            </div>
                            <!-- /USER AVATAR -->

                            <!-- USER AVATAR -->
                            <div class="user-avatar micro no-stats">
                                <!-- USER AVATAR BORDER -->
                                <div class="user-avatar-border">
                                    <!-- HEXAGON -->
                                    <div class="hexagon-22-24"></div>
                                    <!-- /HEXAGON -->
                                </div>
                                <!-- /USER AVATAR BORDER -->

                                <!-- USER AVATAR CONTENT -->
                                <div class="user-avatar-content">
                                    <!-- HEXAGON -->
                                    <div class="hexagon-image-18-20" data-src="/assets/vikinger/img/avatar/10.jpg">
                                    </div>
                                    <!-- /HEXAGON -->
                                </div>
                                <!-- /USER AVATAR CONTENT -->
                            </div>
                            <!-- /USER AVATAR -->

                            <!-- USER AVATAR -->
                            <div class="user-avatar micro no-stats">
                                <!-- USER AVATAR BORDER -->
                                <div class="user-avatar-border">
                                    <!-- HEXAGON -->
                                    <div class="hexagon-22-24"></div>
                                    <!-- /HEXAGON -->
                                </div>
                                <!-- /USER AVATAR BORDER -->

                                <!-- USER AVATAR CONTENT -->
                                <div class="user-avatar-content">
                                    <!-- HEXAGON -->
                                    <div class="hexagon-image-18-20" data-src="/assets/vikinger/img/avatar/08.jpg">
                                    </div>
                                    <!-- /HEXAGON -->
                                </div>
                                <!-- /USER AVATAR CONTENT -->
                            </div>
                            <!-- /USER AVATAR -->
                        </div>
                        <!-- /META LINE LIST -->

                        <!-- META LINE TEXT -->
                        <p class="meta-line-text">19 Participants</p>
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
                        <p class="meta-line-link">2 Comments</p>
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
            <div class="post-option reaction-options-dropdown-trigger">
                <!-- POST OPTION ICON -->
                <svg class="post-option-icon icon-thumbs-up">
                    <use xlink:href="#svg-thumbs-up"></use>
                </svg>
                <!-- /POST OPTION ICON -->

                <!-- POST OPTION TEXT -->
                <p class="post-option-text">React!</p>
                <!-- /POST OPTION TEXT -->
            </div>
            <!-- /POST OPTION -->

            <!-- REACTION OPTIONS -->
            <div class="reaction-options reaction-options-dropdown">
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
        <!-- /POST OPTION WRAP -->

        <!-- POST OPTION -->
        <div class="post-option">
            <!-- POST OPTION ICON -->
            <svg class="post-option-icon icon-comment">
                <use xlink:href="#svg-comment"></use>
            </svg>
            <!-- /POST OPTION ICON -->

            <!-- POST OPTION TEXT -->
            <p class="post-option-text">Comment</p>
            <!-- /POST OPTION TEXT -->
        </div>
        <!-- /POST OPTION -->

        <!-- POST OPTION -->
        <div class="post-option">
            <!-- POST OPTION ICON -->
            <svg class="post-option-icon icon-share">
                <use xlink:href="#svg-share"></use>
            </svg>
            <!-- /POST OPTION ICON -->

            <!-- POST OPTION TEXT -->
            <p class="post-option-text">Share</p>
            <!-- /POST OPTION TEXT -->
        </div>
        <!-- /POST OPTION -->
    </div>
    <!-- /POST OPTIONS -->
</div>
<!-- /WIDGET BOX -->

<!-- WIDGET BOX -->
<div class="widget-box no-padding">
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
                </a>
                <!-- /USER STATUS AVATAR -->

                <!-- USER STATUS TITLE -->
                <p class="user-status-title medium"><a class="bold" href="profile-timeline.html">Sarah
                        Diamond</a> created a <span class="bold">poll</span></p>
                <!-- /USER STATUS TITLE -->

                <!-- USER STATUS TEXT -->
                <p class="user-status-text small">9 minutes ago</p>
                <!-- /USER STATUS TEXT -->
            </div>
            <!-- /USER STATUS -->

            <!-- WIDGET BOX STATUS TEXT -->
            <p class="widget-box-status-text">I've created a poll to ask all of you what you would
                like to see more in my upcoming videos! It will only take a couple of seconds...thanks
                to all in advance!!</p>
            <!-- /WIDGET BOX STATUS TEXT -->

            <!-- POLL BOX -->
            <div class="poll-box">
                <!-- POLL TITLE -->
                <p class="poll-title">What do you wanna see in my upcoming videos?</p>
                <!-- /POLL TITLE -->

                <!-- POLL TEXT -->
                <p class="poll-text">Poll ends in 5 days</p>
                <!-- /POLL TEXT -->

                <!-- FORM -->
                <form class="form">
                    <!-- FORM ROW -->
                    <div class="form-row">
                        <!-- FORM ITEM -->
                        <div class="form-item">
                            <!-- CHECKBOX WRAP -->
                            <div class="checkbox-wrap">
                                <input type="radio" id="poll-option-1" name="poll_option" value="option-1">
                                <!-- CHECKBOX BOX -->
                                <div class="checkbox-box round"></div>
                                <!-- /CHECKBOX BOX -->
                                <label for="poll-option-1">Retro Games</label>
                            </div>
                            <!-- /CHECKBOX WRAP -->
                        </div>
                        <!-- /FORM ITEM -->
                    </div>
                    <!-- /FORM ROW -->

                    <!-- FORM ROW -->
                    <div class="form-row">
                        <!-- FORM ITEM -->
                        <div class="form-item">
                            <!-- CHECKBOX WRAP -->
                            <div class="checkbox-wrap">
                                <input type="radio" id="poll-option-2" name="poll_option" value="option-2"
                                    checked>
                                <!-- CHECKBOX BOX -->
                                <div class="checkbox-box round"></div>
                                <!-- /CHECKBOX BOX -->
                                <label for="poll-option-2">Walkthroughs</label>
                            </div>
                            <!-- /CHECKBOX WRAP -->
                        </div>
                        <!-- /FORM ITEM -->
                    </div>
                    <!-- /FORM ROW -->

                    <!-- FORM ROW -->
                    <div class="form-row">
                        <!-- FORM ITEM -->
                        <div class="form-item">
                            <!-- CHECKBOX WRAP -->
                            <div class="checkbox-wrap">
                                <input type="radio" id="poll-option-3" name="poll_option" value="option-3">
                                <!-- CHECKBOX BOX -->
                                <div class="checkbox-box round"></div>
                                <!-- /CHECKBOX BOX -->
                                <label for="poll-option-3">Unboxings</label>
                            </div>
                            <!-- /CHECKBOX WRAP -->
                        </div>
                        <!-- /FORM ITEM -->
                    </div>
                    <!-- /FORM ROW -->
                </form>
                <!-- /FORM -->

                <!-- POLL BOX ACTIONS -->
                <div class="poll-box-actions">
                    <!-- BUTTON -->
                    <p class="button small secondary">Vote Now!</p>
                    <!-- /BUTTON -->

                    <!-- BUTTON -->
                    <p class="button small white">See Results</p>
                    <!-- /BUTTON -->
                </div>
                <!-- /POLL BOX ACTIONS -->
            </div>
            <!-- /POLL BOX -->

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
                                    src="/assets/vikinger/img/reaction/funny.png" alt="reaction-funny">
                                <!-- /REACTION IMAGE -->

                                <!-- SIMPLE DROPDOWN -->
                                <div class="simple-dropdown padded reaction-item-dropdown">
                                    <!-- SIMPLE DROPDOWN TEXT -->
                                    <p class="simple-dropdown-text"><img class="reaction"
                                            src="/assets/vikinger/img/reaction/funny.png" alt="reaction-funny"> <span
                                            class="bold">Funny</span>
                                    </p>
                                    <!-- /SIMPLE DROPDOWN TEXT -->

                                    <!-- SIMPLE DROPDOWN TEXT -->
                                    <p class="simple-dropdown-text">Matt Parker</p>
                                    <!-- /SIMPLE DROPDOWN TEXT -->

                                    <!-- SIMPLE DROPDOWN TEXT -->
                                    <p class="simple-dropdown-text">Destroy Dex</p>
                                    <!-- /SIMPLE DROPDOWN TEXT -->

                                    <!-- SIMPLE DROPDOWN TEXT -->
                                    <p class="simple-dropdown-text">The Green Goo</p>
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
                                            class="bold">Like</span>
                                    </p>
                                    <!-- /SIMPLE DROPDOWN TEXT -->

                                    <!-- SIMPLE DROPDOWN TEXT -->
                                    <p class="simple-dropdown-text">Sandra Strange</p>
                                    <!-- /SIMPLE DROPDOWN TEXT -->

                                    <!-- SIMPLE DROPDOWN TEXT -->
                                    <p class="simple-dropdown-text">Jane Rodgers</p>
                                    <!-- /SIMPLE DROPDOWN TEXT -->
                                </div>
                                <!-- /SIMPLE DROPDOWN -->
                            </div>
                            <!-- /REACTION ITEM -->

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
                                            class="bold">Love</span>
                                    </p>
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

                                    <!-- SIMPLE DROPDOWN TEXT -->
                                    <p class="simple-dropdown-text">Jett Spiegel</p>
                                    <!-- /SIMPLE DROPDOWN TEXT -->
                                </div>
                                <!-- /SIMPLE DROPDOWN -->
                            </div>
                            <!-- /REACTION ITEM -->
                        </div>
                        <!-- /META LINE LIST -->

                        <!-- META LINE TEXT -->
                        <p class="meta-line-text">9</p>
                        <!-- /META LINE TEXT -->
                    </div>
                    <!-- /META LINE -->

                    <!-- META LINE -->
                    <div class="meta-line">
                        <!-- META LINE LIST -->
                        <div class="meta-line-list user-avatar-list">
                            <!-- USER AVATAR -->
                            <div class="user-avatar micro no-stats">
                                <!-- USER AVATAR BORDER -->
                                <div class="user-avatar-border">
                                    <!-- HEXAGON -->
                                    <div class="hexagon-22-24"></div>
                                    <!-- /HEXAGON -->
                                </div>
                                <!-- /USER AVATAR BORDER -->

                                <!-- USER AVATAR CONTENT -->
                                <div class="user-avatar-content">
                                    <!-- HEXAGON -->
                                    <div class="hexagon-image-18-20" data-src="/assets/vikinger/img/avatar/09.jpg">
                                    </div>
                                    <!-- /HEXAGON -->
                                </div>
                                <!-- /USER AVATAR CONTENT -->
                            </div>
                            <!-- /USER AVATAR -->

                            <!-- USER AVATAR -->
                            <div class="user-avatar micro no-stats">
                                <!-- USER AVATAR BORDER -->
                                <div class="user-avatar-border">
                                    <!-- HEXAGON -->
                                    <div class="hexagon-22-24"></div>
                                    <!-- /HEXAGON -->
                                </div>
                                <!-- /USER AVATAR BORDER -->

                                <!-- USER AVATAR CONTENT -->
                                <div class="user-avatar-content">
                                    <!-- HEXAGON -->
                                    <div class="hexagon-image-18-20" data-src="/assets/vikinger/img/avatar/08.jpg">
                                    </div>
                                    <!-- /HEXAGON -->
                                </div>
                                <!-- /USER AVATAR CONTENT -->
                            </div>
                            <!-- /USER AVATAR -->

                            <!-- USER AVATAR -->
                            <div class="user-avatar micro no-stats">
                                <!-- USER AVATAR BORDER -->
                                <div class="user-avatar-border">
                                    <!-- HEXAGON -->
                                    <div class="hexagon-22-24"></div>
                                    <!-- /HEXAGON -->
                                </div>
                                <!-- /USER AVATAR BORDER -->

                                <!-- USER AVATAR CONTENT -->
                                <div class="user-avatar-content">
                                    <!-- HEXAGON -->
                                    <div class="hexagon-image-18-20" data-src="/assets/vikinger/img/avatar/12.jpg">
                                    </div>
                                    <!-- /HEXAGON -->
                                </div>
                                <!-- /USER AVATAR CONTENT -->
                            </div>
                            <!-- /USER AVATAR -->

                            <!-- USER AVATAR -->
                            <div class="user-avatar micro no-stats">
                                <!-- USER AVATAR BORDER -->
                                <div class="user-avatar-border">
                                    <!-- HEXAGON -->
                                    <div class="hexagon-22-24"></div>
                                    <!-- /HEXAGON -->
                                </div>
                                <!-- /USER AVATAR BORDER -->

                                <!-- USER AVATAR CONTENT -->
                                <div class="user-avatar-content">
                                    <!-- HEXAGON -->
                                    <div class="hexagon-image-18-20" data-src="/assets/vikinger/img/avatar/16.jpg">
                                    </div>
                                    <!-- /HEXAGON -->
                                </div>
                                <!-- /USER AVATAR CONTENT -->
                            </div>
                            <!-- /USER AVATAR -->

                            <!-- USER AVATAR -->
                            <div class="user-avatar micro no-stats">
                                <!-- USER AVATAR BORDER -->
                                <div class="user-avatar-border">
                                    <!-- HEXAGON -->
                                    <div class="hexagon-22-24"></div>
                                    <!-- /HEXAGON -->
                                </div>
                                <!-- /USER AVATAR BORDER -->

                                <!-- USER AVATAR CONTENT -->
                                <div class="user-avatar-content">
                                    <!-- HEXAGON -->
                                    <div class="hexagon-image-18-20" data-src="/assets/vikinger/img/avatar/06.jpg">
                                    </div>
                                    <!-- /HEXAGON -->
                                </div>
                                <!-- /USER AVATAR CONTENT -->
                            </div>
                            <!-- /USER AVATAR -->
                        </div>
                        <!-- /META LINE LIST -->

                        <!-- META LINE TEXT -->
                        <p class="meta-line-text">11 Participants</p>
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
                        <p class="meta-line-link">1 Comments</p>
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
            <div class="post-option reaction-options-dropdown-trigger">
                <!-- POST OPTION ICON -->
                <svg class="post-option-icon icon-thumbs-up">
                    <use xlink:href="#svg-thumbs-up"></use>
                </svg>
                <!-- /POST OPTION ICON -->

                <!-- POST OPTION TEXT -->
                <p class="post-option-text">React!</p>
                <!-- /POST OPTION TEXT -->
            </div>
            <!-- /POST OPTION -->

            <!-- REACTION OPTIONS -->
            <div class="reaction-options reaction-options-dropdown">
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
        <!-- /POST OPTION WRAP -->

        <!-- POST OPTION -->
        <div class="post-option">
            <!-- POST OPTION ICON -->
            <svg class="post-option-icon icon-comment">
                <use xlink:href="#svg-comment"></use>
            </svg>
            <!-- /POST OPTION ICON -->

            <!-- POST OPTION TEXT -->
            <p class="post-option-text">Comment</p>
            <!-- /POST OPTION TEXT -->
        </div>
        <!-- /POST OPTION -->

        <!-- POST OPTION -->
        <div class="post-option">
            <!-- POST OPTION ICON -->
            <svg class="post-option-icon icon-share">
                <use xlink:href="#svg-share"></use>
            </svg>
            <!-- /POST OPTION ICON -->

            <!-- POST OPTION TEXT -->
            <p class="post-option-text">Share</p>
            <!-- /POST OPTION TEXT -->
        </div>
        <!-- /POST OPTION -->
    </div>
    <!-- /POST OPTIONS -->
</div>
<!-- /WIDGET BOX -->

<!-- WIDGET BOX -->
<div class="widget-box no-padding">
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
                    </div>
                    <!-- /USER AVATAR -->
                </a>
                <!-- /USER STATUS AVATAR -->

                <!-- USER STATUS TITLE -->
                <p class="user-status-title medium"><a class="bold" href="profile-timeline.html">Destroy Dex</a>
                    uploaded <span class="bold">26 new
                        photos</span></p>
                <!-- /USER STATUS TITLE -->

                <!-- USER STATUS TEXT -->
                <p class="user-status-text small">17 minutes ago</p>
                <!-- /USER STATUS TEXT -->
            </div>
            <!-- /USER STATUS -->

            <!-- WIDGET BOX STATUS TEXT -->
            <p class="widget-box-status-text">Here are some of the photos from my last visit to
                StreamCon 2019!!</p>
            <!-- /WIDGET BOX STATUS TEXT -->

            <!-- PICTURE COLLAGE -->
            <div class="picture-collage">
                <!-- PICTURE COLLAGE ROW -->
                <div class="picture-collage-row medium">
                    <!-- PICTURE COLLAGE ITEM -->
                    <div class="picture-collage-item popup-picture-trigger">
                        <!-- PHOTO PREVIEW -->
                        <div class="photo-preview">
                            <!-- PHOTO PREVIEW IMAGE -->
                            <figure class="photo-preview-image liquid">
                                <img src="/assets/vikinger/img/cover/10.jpg" alt="photo-preview-10">
                            </figure>
                            <!-- /PHOTO PREVIEW IMAGE -->

                            <!-- PHOTO PREVIEW INFO -->
                            <div class="photo-preview-info">
                                <!-- REACTION COUNT LIST -->
                                <div class="reaction-count-list">
                                    <!-- REACTION COUNT -->
                                    <div class="reaction-count negative">
                                        <!-- REACTION COUNT ICON -->
                                        <svg class="reaction-count-icon icon-thumbs-up">
                                            <use xlink:href="#svg-thumbs-up"></use>
                                        </svg>
                                        <!-- /REACTION COUNT ICON -->

                                        <!-- REACTION COUNT TEXT -->
                                        <p class="reaction-count-text">2</p>
                                        <!-- /REACTION COUNT TEXT -->
                                    </div>
                                    <!-- /REACTION COUNT -->

                                    <!-- REACTION COUNT -->
                                    <div class="reaction-count negative">
                                        <!-- REACTION COUNT ICON -->
                                        <svg class="reaction-count-icon icon-comment">
                                            <use xlink:href="#svg-comment"></use>
                                        </svg>
                                        <!-- /REACTION COUNT ICON -->

                                        <!-- REACTION COUNT TEXT -->
                                        <p class="reaction-count-text">5</p>
                                        <!-- /REACTION COUNT TEXT -->
                                    </div>
                                    <!-- /REACTION COUNT -->
                                </div>
                                <!-- /REACTION COUNT LIST -->
                            </div>
                            <!-- /PHOTO PREVIEW INFO -->
                        </div>
                        <!-- /PHOTO PREVIEW -->
                    </div>
                    <!-- /PICTURE COLLAGE ITEM -->

                    <!-- PICTURE COLLAGE ITEM -->
                    <div class="picture-collage-item popup-picture-trigger">
                        <!-- PHOTO PREVIEW -->
                        <div class="photo-preview">
                            <!-- PHOTO PREVIEW IMAGE -->
                            <figure class="photo-preview-image liquid">
                                <img src="/assets/vikinger/img/cover/12.jpg" alt="photo-preview-12">
                            </figure>
                            <!-- /PHOTO PREVIEW IMAGE -->

                            <!-- PHOTO PREVIEW INFO -->
                            <div class="photo-preview-info">
                                <!-- REACTION COUNT LIST -->
                                <div class="reaction-count-list">
                                    <!-- REACTION COUNT -->
                                    <div class="reaction-count negative">
                                        <!-- REACTION COUNT ICON -->
                                        <svg class="reaction-count-icon icon-thumbs-up">
                                            <use xlink:href="#svg-thumbs-up"></use>
                                        </svg>
                                        <!-- /REACTION COUNT ICON -->

                                        <!-- REACTION COUNT TEXT -->
                                        <p class="reaction-count-text">2</p>
                                        <!-- /REACTION COUNT TEXT -->
                                    </div>
                                    <!-- /REACTION COUNT -->

                                    <!-- REACTION COUNT -->
                                    <div class="reaction-count negative">
                                        <!-- REACTION COUNT ICON -->
                                        <svg class="reaction-count-icon icon-comment">
                                            <use xlink:href="#svg-comment"></use>
                                        </svg>
                                        <!-- /REACTION COUNT ICON -->

                                        <!-- REACTION COUNT TEXT -->
                                        <p class="reaction-count-text">5</p>
                                        <!-- /REACTION COUNT TEXT -->
                                    </div>
                                    <!-- /REACTION COUNT -->
                                </div>
                                <!-- /REACTION COUNT LIST -->
                            </div>
                            <!-- /PHOTO PREVIEW INFO -->
                        </div>
                        <!-- /PHOTO PREVIEW -->
                    </div>
                    <!-- /PICTURE COLLAGE ITEM -->
                </div>
                <!-- /PICTURE COLLAGE ROW -->

                <!-- PICTURE COLLAGE ROW -->
                <div class="picture-collage-row">
                    <!-- PICTURE COLLAGE ITEM -->
                    <div class="picture-collage-item popup-picture-trigger">
                        <!-- PHOTO PREVIEW -->
                        <div class="photo-preview">
                            <!-- PHOTO PREVIEW IMAGE -->
                            <figure class="photo-preview-image liquid">
                                <img src="/assets/vikinger/img/cover/16.jpg" alt="photo-preview-16">
                            </figure>
                            <!-- /PHOTO PREVIEW IMAGE -->

                            <!-- PHOTO PREVIEW INFO -->
                            <div class="photo-preview-info">
                                <!-- REACTION COUNT LIST -->
                                <div class="reaction-count-list">
                                    <!-- REACTION COUNT -->
                                    <div class="reaction-count negative">
                                        <!-- REACTION COUNT ICON -->
                                        <svg class="reaction-count-icon icon-thumbs-up">
                                            <use xlink:href="#svg-thumbs-up"></use>
                                        </svg>
                                        <!-- /REACTION COUNT ICON -->

                                        <!-- REACTION COUNT TEXT -->
                                        <p class="reaction-count-text">2</p>
                                        <!-- /REACTION COUNT TEXT -->
                                    </div>
                                    <!-- /REACTION COUNT -->

                                    <!-- REACTION COUNT -->
                                    <div class="reaction-count negative">
                                        <!-- REACTION COUNT ICON -->
                                        <svg class="reaction-count-icon icon-comment">
                                            <use xlink:href="#svg-comment"></use>
                                        </svg>
                                        <!-- /REACTION COUNT ICON -->

                                        <!-- REACTION COUNT TEXT -->
                                        <p class="reaction-count-text">5</p>
                                        <!-- /REACTION COUNT TEXT -->
                                    </div>
                                    <!-- /REACTION COUNT -->
                                </div>
                                <!-- /REACTION COUNT LIST -->
                            </div>
                            <!-- /PHOTO PREVIEW INFO -->
                        </div>
                        <!-- /PHOTO PREVIEW -->
                    </div>
                    <!-- /PICTURE COLLAGE ITEM -->

                    <!-- PICTURE COLLAGE ITEM -->
                    <div class="picture-collage-item popup-picture-trigger">
                        <!-- PHOTO PREVIEW -->
                        <div class="photo-preview">
                            <!-- PHOTO PREVIEW IMAGE -->
                            <figure class="photo-preview-image liquid">
                                <img src="/assets/vikinger/img/cover/08.jpg" alt="photo-preview-08">
                            </figure>
                            <!-- /PHOTO PREVIEW IMAGE -->

                            <!-- PHOTO PREVIEW INFO -->
                            <div class="photo-preview-info">
                                <!-- REACTION COUNT LIST -->
                                <div class="reaction-count-list">
                                    <!-- REACTION COUNT -->
                                    <div class="reaction-count negative">
                                        <!-- REACTION COUNT ICON -->
                                        <svg class="reaction-count-icon icon-thumbs-up">
                                            <use xlink:href="#svg-thumbs-up"></use>
                                        </svg>
                                        <!-- /REACTION COUNT ICON -->

                                        <!-- REACTION COUNT TEXT -->
                                        <p class="reaction-count-text">2</p>
                                        <!-- /REACTION COUNT TEXT -->
                                    </div>
                                    <!-- /REACTION COUNT -->

                                    <!-- REACTION COUNT -->
                                    <div class="reaction-count negative">
                                        <!-- REACTION COUNT ICON -->
                                        <svg class="reaction-count-icon icon-comment">
                                            <use xlink:href="#svg-comment"></use>
                                        </svg>
                                        <!-- /REACTION COUNT ICON -->

                                        <!-- REACTION COUNT TEXT -->
                                        <p class="reaction-count-text">5</p>
                                        <!-- /REACTION COUNT TEXT -->
                                    </div>
                                    <!-- /REACTION COUNT -->
                                </div>
                                <!-- /REACTION COUNT LIST -->
                            </div>
                            <!-- /PHOTO PREVIEW INFO -->
                        </div>
                        <!-- /PHOTO PREVIEW -->
                    </div>
                    <!-- /PICTURE COLLAGE ITEM -->

                    <!-- PICTURE COLLAGE ITEM -->
                    <div class="picture-collage-item">
                        <!-- PICTURE COLLAGE ITEM OVERLAY -->
                        <a class="picture-collage-item-overlay" href="profile-photos.html">
                            <!-- PICTURE COLLAGE ITEM OVERLAY TEXT -->
                            <p class="picture-collage-item-overlay-text">+22</p>
                            <!-- /PICTURE COLLAGE ITEM OVERLAY TEXT -->
                        </a>
                        <!-- /PICTURE COLLAGE ITEM OVERLAY -->

                        <!-- PHOTO PREVIEW -->
                        <div class="photo-preview">
                            <!-- PHOTO PREVIEW IMAGE -->
                            <figure class="photo-preview-image liquid">
                                <img src="/assets/vikinger/img/cover/14.jpg" alt="photo-preview-14">
                            </figure>
                            <!-- /PHOTO PREVIEW IMAGE -->

                            <!-- PHOTO PREVIEW INFO -->
                            <div class="photo-preview-info">
                                <!-- REACTION COUNT LIST -->
                                <div class="reaction-count-list">
                                    <!-- REACTION COUNT -->
                                    <div class="reaction-count negative">
                                        <!-- REACTION COUNT ICON -->
                                        <svg class="reaction-count-icon icon-thumbs-up">
                                            <use xlink:href="#svg-thumbs-up"></use>
                                        </svg>
                                        <!-- /REACTION COUNT ICON -->

                                        <!-- REACTION COUNT TEXT -->
                                        <p class="reaction-count-text">2</p>
                                        <!-- /REACTION COUNT TEXT -->
                                    </div>
                                    <!-- /REACTION COUNT -->

                                    <!-- REACTION COUNT -->
                                    <div class="reaction-count negative">
                                        <!-- REACTION COUNT ICON -->
                                        <svg class="reaction-count-icon icon-comment">
                                            <use xlink:href="#svg-comment"></use>
                                        </svg>
                                        <!-- /REACTION COUNT ICON -->

                                        <!-- REACTION COUNT TEXT -->
                                        <p class="reaction-count-text">5</p>
                                        <!-- /REACTION COUNT TEXT -->
                                    </div>
                                    <!-- /REACTION COUNT -->
                                </div>
                                <!-- /REACTION COUNT LIST -->
                            </div>
                            <!-- /PHOTO PREVIEW INFO -->
                        </div>
                        <!-- /PHOTO PREVIEW -->
                    </div>
                    <!-- /PICTURE COLLAGE ITEM -->
                </div>
                <!-- /PICTURE COLLAGE ROW -->
            </div>
            <!-- /PICTURE COLLAGE -->

            <!-- TAG LIST -->
            <div class="tag-list">
                <!-- TAG ITEM -->
                <a class="tag-item secondary" href="newsfeed.html">Photos</a>
                <!-- /TAG ITEM -->

                <!-- TAG ITEM -->
                <a class="tag-item secondary" href="newsfeed.html">StreamCon</a>
                <!-- /TAG ITEM -->

                <!-- TAG ITEM -->
                <a class="tag-item secondary" href="newsfeed.html">StarGirl</a>
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
                                    <p class="simple-dropdown-text">Matt Parker</p>
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
                                            class="bold">Like</span>
                                    </p>
                                    <!-- /SIMPLE DROPDOWN TEXT -->

                                    <!-- SIMPLE DROPDOWN TEXT -->
                                    <p class="simple-dropdown-text">Sandra Strange</p>
                                    <!-- /SIMPLE DROPDOWN TEXT -->

                                    <!-- SIMPLE DROPDOWN TEXT -->
                                    <p class="simple-dropdown-text">Jane Rodgers</p>
                                    <!-- /SIMPLE DROPDOWN TEXT -->
                                </div>
                                <!-- /SIMPLE DROPDOWN -->
                            </div>
                            <!-- /REACTION ITEM -->
                        </div>
                        <!-- /META LINE LIST -->

                        <!-- META LINE TEXT -->
                        <p class="meta-line-text">3</p>
                        <!-- /META LINE TEXT -->
                    </div>
                    <!-- /META LINE -->

                    <!-- META LINE -->
                    <div class="meta-line">
                        <!-- META LINE LIST -->
                        <div class="meta-line-list user-avatar-list">
                            <!-- USER AVATAR -->
                            <div class="user-avatar micro no-stats">
                                <!-- USER AVATAR BORDER -->
                                <div class="user-avatar-border">
                                    <!-- HEXAGON -->
                                    <div class="hexagon-22-24"></div>
                                    <!-- /HEXAGON -->
                                </div>
                                <!-- /USER AVATAR BORDER -->

                                <!-- USER AVATAR CONTENT -->
                                <div class="user-avatar-content">
                                    <!-- HEXAGON -->
                                    <div class="hexagon-image-18-20" data-src="/assets/vikinger/img/avatar/03.jpg">
                                    </div>
                                    <!-- /HEXAGON -->
                                </div>
                                <!-- /USER AVATAR CONTENT -->
                            </div>
                            <!-- /USER AVATAR -->

                            <!-- USER AVATAR -->
                            <div class="user-avatar micro no-stats">
                                <!-- USER AVATAR BORDER -->
                                <div class="user-avatar-border">
                                    <!-- HEXAGON -->
                                    <div class="hexagon-22-24"></div>
                                    <!-- /HEXAGON -->
                                </div>
                                <!-- /USER AVATAR BORDER -->

                                <!-- USER AVATAR CONTENT -->
                                <div class="user-avatar-content">
                                    <!-- HEXAGON -->
                                    <div class="hexagon-image-18-20" data-src="/assets/vikinger/img/avatar/15.jpg">
                                    </div>
                                    <!-- /HEXAGON -->
                                </div>
                                <!-- /USER AVATAR CONTENT -->
                            </div>
                            <!-- /USER AVATAR -->

                            <!-- USER AVATAR -->
                            <div class="user-avatar micro no-stats">
                                <!-- USER AVATAR BORDER -->
                                <div class="user-avatar-border">
                                    <!-- HEXAGON -->
                                    <div class="hexagon-22-24"></div>
                                    <!-- /HEXAGON -->
                                </div>
                                <!-- /USER AVATAR BORDER -->

                                <!-- USER AVATAR CONTENT -->
                                <div class="user-avatar-content">
                                    <!-- HEXAGON -->
                                    <div class="hexagon-image-18-20" data-src="/assets/vikinger/img/avatar/14.jpg">
                                    </div>
                                    <!-- /HEXAGON -->
                                </div>
                                <!-- /USER AVATAR CONTENT -->
                            </div>
                            <!-- /USER AVATAR -->

                            <!-- USER AVATAR -->
                            <div class="user-avatar micro no-stats">
                                <!-- USER AVATAR BORDER -->
                                <div class="user-avatar-border">
                                    <!-- HEXAGON -->
                                    <div class="hexagon-22-24"></div>
                                    <!-- /HEXAGON -->
                                </div>
                                <!-- /USER AVATAR BORDER -->

                                <!-- USER AVATAR CONTENT -->
                                <div class="user-avatar-content">
                                    <!-- HEXAGON -->
                                    <div class="hexagon-image-18-20" data-src="/assets/vikinger/img/avatar/07.jpg">
                                    </div>
                                    <!-- /HEXAGON -->
                                </div>
                                <!-- /USER AVATAR CONTENT -->
                            </div>
                            <!-- /USER AVATAR -->
                        </div>
                        <!-- /META LINE LIST -->

                        <!-- META LINE TEXT -->
                        <p class="meta-line-text">4 Participants</p>
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
                        <p class="meta-line-link">3 Comments</p>
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
            <div class="post-option reaction-options-dropdown-trigger">
                <!-- POST OPTION ICON -->
                <svg class="post-option-icon icon-thumbs-up">
                    <use xlink:href="#svg-thumbs-up"></use>
                </svg>
                <!-- /POST OPTION ICON -->

                <!-- POST OPTION TEXT -->
                <p class="post-option-text">React!</p>
                <!-- /POST OPTION TEXT -->
            </div>
            <!-- /POST OPTION -->

            <!-- REACTION OPTIONS -->
            <div class="reaction-options reaction-options-dropdown">
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
        <!-- /POST OPTION WRAP -->

        <!-- POST OPTION -->
        <div class="post-option">
            <!-- POST OPTION ICON -->
            <svg class="post-option-icon icon-comment">
                <use xlink:href="#svg-comment"></use>
            </svg>
            <!-- /POST OPTION ICON -->

            <!-- POST OPTION TEXT -->
            <p class="post-option-text">Comment</p>
            <!-- /POST OPTION TEXT -->
        </div>
        <!-- /POST OPTION -->

        <!-- POST OPTION -->
        <div class="post-option">
            <!-- POST OPTION ICON -->
            <svg class="post-option-icon icon-share">
                <use xlink:href="#svg-share"></use>
            </svg>
            <!-- /POST OPTION ICON -->

            <!-- POST OPTION TEXT -->
            <p class="post-option-text">Share</p>
            <!-- /POST OPTION TEXT -->
        </div>
        <!-- /POST OPTION -->
    </div>
    <!-- /POST OPTIONS -->
</div>
<!-- /WIDGET BOX -->

<!-- WIDGET BOX -->
<div class="widget-box no-padding">
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
                </a>
                <!-- /USER STATUS AVATAR -->

                <!-- USER STATUS TITLE -->
                <p class="user-status-title medium"><a class="bold" href="profile-timeline.html">Bearded Wonder</a>
                </p>
                <!-- /USER STATUS TITLE -->

                <!-- USER STATUS TEXT -->
                <p class="user-status-text small">39 minutes ago</p>
                <!-- /USER STATUS TEXT -->
            </div>
            <!-- /USER STATUS -->

            <!-- WIDGET BOX STATUS TEXT -->
            <p class="widget-box-status-text">Sorry everyone, but from now on, I will only be able to
                edit and upload one design tutorial per month. This happens because I'm having a lot on
                my plate right now and recording and editing the tutorials requiere a lot of attention.
            </p>
            <!-- /WIDGET BOX STATUS TEXT -->

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
                                    src="/assets/vikinger/img/reaction/dislike.png" alt="reaction-dislike">
                                <!-- /REACTION IMAGE -->

                                <!-- SIMPLE DROPDOWN -->
                                <div class="simple-dropdown padded reaction-item-dropdown">
                                    <!-- SIMPLE DROPDOWN TEXT -->
                                    <p class="simple-dropdown-text"><img class="reaction"
                                            src="/assets/vikinger/img/reaction/dislike.png" alt="reaction-dislike">
                                        <span class="bold">Dislike</span>
                                    </p>
                                    <!-- /SIMPLE DROPDOWN TEXT -->

                                    <!-- SIMPLE DROPDOWN TEXT -->
                                    <p class="simple-dropdown-text">Matt Parker</p>
                                    <!-- /SIMPLE DROPDOWN TEXT -->

                                    <!-- SIMPLE DROPDOWN TEXT -->
                                    <p class="simple-dropdown-text">Destroy Dex</p>
                                    <!-- /SIMPLE DROPDOWN TEXT -->

                                    <!-- SIMPLE DROPDOWN TEXT -->
                                    <p class="simple-dropdown-text">The Green Goo</p>
                                    <!-- /SIMPLE DROPDOWN TEXT -->
                                </div>
                                <!-- /SIMPLE DROPDOWN -->
                            </div>
                            <!-- /REACTION ITEM -->

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
                                            class="bold">Love</span>
                                    </p>
                                    <!-- /SIMPLE DROPDOWN TEXT -->

                                    <!-- SIMPLE DROPDOWN TEXT -->
                                    <p class="simple-dropdown-text">Sandra Strange</p>
                                    <!-- /SIMPLE DROPDOWN TEXT -->

                                    <!-- SIMPLE DROPDOWN TEXT -->
                                    <p class="simple-dropdown-text">Jane Rodgers</p>
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
                                            class="bold">Like</span>
                                    </p>
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

                                    <!-- SIMPLE DROPDOWN TEXT -->
                                    <p class="simple-dropdown-text">Jett Spiegel</p>
                                    <!-- /SIMPLE DROPDOWN TEXT -->

                                    <!-- SIMPLE DROPDOWN TEXT -->
                                    <p class="simple-dropdown-text"><span class="bold">and 2
                                            more...</span></p>
                                    <!-- /SIMPLE DROPDOWN TEXT -->
                                </div>
                                <!-- /SIMPLE DROPDOWN -->
                            </div>
                            <!-- /REACTION ITEM -->
                        </div>
                        <!-- /META LINE LIST -->

                        <!-- META LINE TEXT -->
                        <p class="meta-line-text">11</p>
                        <!-- /META LINE TEXT -->
                    </div>
                    <!-- /META LINE -->

                    <!-- META LINE -->
                    <div class="meta-line">
                        <!-- META LINE LIST -->
                        <div class="meta-line-list user-avatar-list">
                            <!-- USER AVATAR -->
                            <div class="user-avatar micro no-stats">
                                <!-- USER AVATAR BORDER -->
                                <div class="user-avatar-border">
                                    <!-- HEXAGON -->
                                    <div class="hexagon-22-24"></div>
                                    <!-- /HEXAGON -->
                                </div>
                                <!-- /USER AVATAR BORDER -->

                                <!-- USER AVATAR CONTENT -->
                                <div class="user-avatar-content">
                                    <!-- HEXAGON -->
                                    <div class="hexagon-image-18-20" data-src="/assets/vikinger/img/avatar/08.jpg">
                                    </div>
                                    <!-- /HEXAGON -->
                                </div>
                                <!-- /USER AVATAR CONTENT -->
                            </div>
                            <!-- /USER AVATAR -->

                            <!-- USER AVATAR -->
                            <div class="user-avatar micro no-stats">
                                <!-- USER AVATAR BORDER -->
                                <div class="user-avatar-border">
                                    <!-- HEXAGON -->
                                    <div class="hexagon-22-24"></div>
                                    <!-- /HEXAGON -->
                                </div>
                                <!-- /USER AVATAR BORDER -->

                                <!-- USER AVATAR CONTENT -->
                                <div class="user-avatar-content">
                                    <!-- HEXAGON -->
                                    <div class="hexagon-image-18-20" data-src="/assets/vikinger/img/avatar/11.jpg">
                                    </div>
                                    <!-- /HEXAGON -->
                                </div>
                                <!-- /USER AVATAR CONTENT -->
                            </div>
                            <!-- /USER AVATAR -->

                            <!-- USER AVATAR -->
                            <div class="user-avatar micro no-stats">
                                <!-- USER AVATAR BORDER -->
                                <div class="user-avatar-border">
                                    <!-- HEXAGON -->
                                    <div class="hexagon-22-24"></div>
                                    <!-- /HEXAGON -->
                                </div>
                                <!-- /USER AVATAR BORDER -->

                                <!-- USER AVATAR CONTENT -->
                                <div class="user-avatar-content">
                                    <!-- HEXAGON -->
                                    <div class="hexagon-image-18-20" data-src="/assets/vikinger/img/avatar/06.jpg">
                                    </div>
                                    <!-- /HEXAGON -->
                                </div>
                                <!-- /USER AVATAR CONTENT -->
                            </div>
                            <!-- /USER AVATAR -->

                            <!-- USER AVATAR -->
                            <div class="user-avatar micro no-stats">
                                <!-- USER AVATAR BORDER -->
                                <div class="user-avatar-border">
                                    <!-- HEXAGON -->
                                    <div class="hexagon-22-24"></div>
                                    <!-- /HEXAGON -->
                                </div>
                                <!-- /USER AVATAR BORDER -->

                                <!-- USER AVATAR CONTENT -->
                                <div class="user-avatar-content">
                                    <!-- HEXAGON -->
                                    <div class="hexagon-image-18-20" data-src="/assets/vikinger/img/avatar/07.jpg">
                                    </div>
                                    <!-- /HEXAGON -->
                                </div>
                                <!-- /USER AVATAR CONTENT -->
                            </div>
                            <!-- /USER AVATAR -->

                            <!-- USER AVATAR -->
                            <div class="user-avatar micro no-stats">
                                <!-- USER AVATAR BORDER -->
                                <div class="user-avatar-border">
                                    <!-- HEXAGON -->
                                    <div class="hexagon-22-24"></div>
                                    <!-- /HEXAGON -->
                                </div>
                                <!-- /USER AVATAR BORDER -->

                                <!-- USER AVATAR CONTENT -->
                                <div class="user-avatar-content">
                                    <!-- HEXAGON -->
                                    <div class="hexagon-image-18-20" data-src="/assets/vikinger/img/avatar/10.jpg">
                                    </div>
                                    <!-- /HEXAGON -->
                                </div>
                                <!-- /USER AVATAR CONTENT -->
                            </div>
                            <!-- /USER AVATAR -->
                        </div>
                        <!-- /META LINE LIST -->

                        <!-- META LINE TEXT -->
                        <p class="meta-line-text">18 Participants</p>
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
                        <p class="meta-line-link">15 Comments</p>
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
            <div class="post-option reaction-options-dropdown-trigger">
                <!-- POST OPTION ICON -->
                <svg class="post-option-icon icon-thumbs-up">
                    <use xlink:href="#svg-thumbs-up"></use>
                </svg>
                <!-- /POST OPTION ICON -->

                <!-- POST OPTION TEXT -->
                <p class="post-option-text">React!</p>
                <!-- /POST OPTION TEXT -->
            </div>
            <!-- /POST OPTION -->

            <!-- REACTION OPTIONS -->
            <div class="reaction-options reaction-options-dropdown">
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
        <!-- /POST OPTION WRAP -->

        <!-- POST OPTION -->
        <div class="post-option">
            <!-- POST OPTION ICON -->
            <svg class="post-option-icon icon-comment">
                <use xlink:href="#svg-comment"></use>
            </svg>
            <!-- /POST OPTION ICON -->

            <!-- POST OPTION TEXT -->
            <p class="post-option-text">Comment</p>
            <!-- /POST OPTION TEXT -->
        </div>
        <!-- /POST OPTION -->

        <!-- POST OPTION -->
        <div class="post-option">
            <!-- POST OPTION ICON -->
            <svg class="post-option-icon icon-share">
                <use xlink:href="#svg-share"></use>
            </svg>
            <!-- /POST OPTION ICON -->

            <!-- POST OPTION TEXT -->
            <p class="post-option-text">Share</p>
            <!-- /POST OPTION TEXT -->
        </div>
        <!-- /POST OPTION -->
    </div>
    <!-- /POST OPTIONS -->
</div>
<!-- /WIDGET BOX -->

<!-- WIDGET BOX -->
<div class="widget-box no-padding">
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
                </a>
                <!-- /USER STATUS AVATAR -->

                <!-- USER STATUS TITLE -->
                <p class="user-status-title medium"><a class="bold" href="profile-timeline.html">Nick
                        Grissom</a>
                    shared a <span class="bold">post</span></p>
                <!-- /USER STATUS TITLE -->

                <!-- USER STATUS TEXT -->
                <p class="user-status-text small">40 minutes ago</p>
                <!-- /USER STATUS TEXT -->
            </div>
            <!-- /USER STATUS -->

            <!-- WIDGET BOX STATUS TEXT -->
            <p class="widget-box-status-text">Keep an eye out for <a href="#">@DestroyDex</a>
                surprise streams for awesome givaways!</p>
            <!-- /WIDGET BOX STATUS TEXT -->

            <!-- WIDGET BOX -->
            <div class="widget-box no-padding">
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
                                        <div class="hexagon-image-30-32"
                                            data-src="/assets/vikinger/img/avatar/02.jpg"></div>
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
                                </div>
                                <!-- /USER AVATAR -->
                            </a>
                            <!-- /USER STATUS AVATAR -->

                            <!-- USER STATUS TITLE -->
                            <p class="user-status-title medium"><a class="bold"
                                    href="profile-timeline.html">Destroy Dex</a></p>
                            <!-- /USER STATUS TITLE -->

                            <!-- USER STATUS TEXT -->
                            <p class="user-status-text small">6 hours ago</p>
                            <!-- /USER STATUS TEXT -->
                        </div>
                        <!-- /USER STATUS -->

                        <!-- WIDGET BOX STATUS TEXT -->
                        <p class="widget-box-status-text">Attention everyone! From now on and through
                            all the holydays season I'll be giving free season passes for a bunch of
                            different games. Be on the lookout for these special streams to participate
                            and win awesome prizes!</p>
                        <!-- /WIDGET BOX STATUS TEXT -->

                        <!-- VIDEO STATUS -->
                        <a class="video-status" href="https://www.twitch.tv/" target="_blank">
                            <!-- VIDEO STATUS IMAGE -->
                            <img class="video-status-image" src="/assets/vikinger/img/cover/51.jpg" alt="cover-51">
                            <!-- /VIDEO STATUS IMAGE -->

                            <!-- VIDEO STATUS INFO -->
                            <div class="video-status-info">
                                <!-- VIDEO STATUS META -->
                                <p class="video-status-meta">twitch.tv</p>
                                <!-- /VIDEO STATUS META -->

                                <!-- VIDEO STATUS TITLE -->
                                <p class="video-status-title"><span class="bold">Destroy
                                        Dex</span> on <span class="highlighted">Twitch</span></p>
                                <!-- /VIDEO STATUS TITLE -->

                                <!-- VIDEO STATUS TEXT -->
                                <p class="video-status-text">Tune in every Sunday for awesome
                                    givaways!</p>
                                <!-- /VIDEO STATUS TEXT -->
                            </div>
                            <!-- /VIDEO STATUS INFO -->
                        </a>
                        <!-- /VIDEO STATUS -->
                    </div>
                    <!-- /WIDGET BOX STATUS CONTENT -->
                </div>
                <!-- /WIDGET BOX STATUS -->
            </div>
            <!-- /WIDGET BOX -->

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
                                            class="bold">Love</span>
                                    </p>
                                    <!-- /SIMPLE DROPDOWN TEXT -->

                                    <!-- SIMPLE DROPDOWN TEXT -->
                                    <p class="simple-dropdown-text">Matt Parker</p>
                                    <!-- /SIMPLE DROPDOWN TEXT -->

                                    <!-- SIMPLE DROPDOWN TEXT -->
                                    <p class="simple-dropdown-text">Destroy Dex</p>
                                    <!-- /SIMPLE DROPDOWN TEXT -->

                                    <!-- SIMPLE DROPDOWN TEXT -->
                                    <p class="simple-dropdown-text">The Green Goo</p>
                                    <!-- /SIMPLE DROPDOWN TEXT -->
                                </div>
                                <!-- /SIMPLE DROPDOWN -->
                            </div>
                            <!-- /REACTION ITEM -->

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
                                            src="/assets/vikinger/img/reaction/happy.png" alt="reaction-happy">
                                        <span class="bold">Happy</span>
                                    </p>
                                    <!-- /SIMPLE DROPDOWN TEXT -->

                                    <!-- SIMPLE DROPDOWN TEXT -->
                                    <p class="simple-dropdown-text">Sandra Strange</p>
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
                                            class="bold">Like</span>
                                    </p>
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

                                    <!-- SIMPLE DROPDOWN TEXT -->
                                    <p class="simple-dropdown-text">Jett Spiegel</p>
                                    <!-- /SIMPLE DROPDOWN TEXT -->

                                    <!-- SIMPLE DROPDOWN TEXT -->
                                    <p class="simple-dropdown-text">Marcus Jhonson</p>
                                    <!-- /SIMPLE DROPDOWN TEXT -->

                                    <!-- SIMPLE DROPDOWN TEXT -->
                                    <p class="simple-dropdown-text">Jane Rodgers</p>
                                    <!-- /SIMPLE DROPDOWN TEXT -->

                                    <!-- SIMPLE DROPDOWN TEXT -->
                                    <p class="simple-dropdown-text"><span class="bold">and 6
                                            more...</span></p>
                                    <!-- /SIMPLE DROPDOWN TEXT -->
                                </div>
                                <!-- /SIMPLE DROPDOWN -->
                            </div>
                            <!-- /REACTION ITEM -->
                        </div>
                        <!-- /META LINE LIST -->

                        <!-- META LINE TEXT -->
                        <p class="meta-line-text">16</p>
                        <!-- /META LINE TEXT -->
                    </div>
                    <!-- /META LINE -->

                    <!-- META LINE -->
                    <div class="meta-line">
                        <!-- META LINE LIST -->
                        <div class="meta-line-list user-avatar-list">
                            <!-- USER AVATAR -->
                            <div class="user-avatar micro no-stats">
                                <!-- USER AVATAR BORDER -->
                                <div class="user-avatar-border">
                                    <!-- HEXAGON -->
                                    <div class="hexagon-22-24"></div>
                                    <!-- /HEXAGON -->
                                </div>
                                <!-- /USER AVATAR BORDER -->

                                <!-- USER AVATAR CONTENT -->
                                <div class="user-avatar-content">
                                    <!-- HEXAGON -->
                                    <div class="hexagon-image-18-20" data-src="/assets/vikinger/img/avatar/07.jpg">
                                    </div>
                                    <!-- /HEXAGON -->
                                </div>
                                <!-- /USER AVATAR CONTENT -->
                            </div>
                            <!-- /USER AVATAR -->

                            <!-- USER AVATAR -->
                            <div class="user-avatar micro no-stats">
                                <!-- USER AVATAR BORDER -->
                                <div class="user-avatar-border">
                                    <!-- HEXAGON -->
                                    <div class="hexagon-22-24"></div>
                                    <!-- /HEXAGON -->
                                </div>
                                <!-- /USER AVATAR BORDER -->

                                <!-- USER AVATAR CONTENT -->
                                <div class="user-avatar-content">
                                    <!-- HEXAGON -->
                                    <div class="hexagon-image-18-20" data-src="/assets/vikinger/img/avatar/13.jpg">
                                    </div>
                                    <!-- /HEXAGON -->
                                </div>
                                <!-- /USER AVATAR CONTENT -->
                            </div>
                            <!-- /USER AVATAR -->

                            <!-- USER AVATAR -->
                            <div class="user-avatar micro no-stats">
                                <!-- USER AVATAR BORDER -->
                                <div class="user-avatar-border">
                                    <!-- HEXAGON -->
                                    <div class="hexagon-22-24"></div>
                                    <!-- /HEXAGON -->
                                </div>
                                <!-- /USER AVATAR BORDER -->

                                <!-- USER AVATAR CONTENT -->
                                <div class="user-avatar-content">
                                    <!-- HEXAGON -->
                                    <div class="hexagon-image-18-20" data-src="/assets/vikinger/img/avatar/22.jpg">
                                    </div>
                                    <!-- /HEXAGON -->
                                </div>
                                <!-- /USER AVATAR CONTENT -->
                            </div>
                            <!-- /USER AVATAR -->

                            <!-- USER AVATAR -->
                            <div class="user-avatar micro no-stats">
                                <!-- USER AVATAR BORDER -->
                                <div class="user-avatar-border">
                                    <!-- HEXAGON -->
                                    <div class="hexagon-22-24"></div>
                                    <!-- /HEXAGON -->
                                </div>
                                <!-- /USER AVATAR BORDER -->

                                <!-- USER AVATAR CONTENT -->
                                <div class="user-avatar-content">
                                    <!-- HEXAGON -->
                                    <div class="hexagon-image-18-20" data-src="/assets/vikinger/img/avatar/10.jpg">
                                    </div>
                                    <!-- /HEXAGON -->
                                </div>
                                <!-- /USER AVATAR CONTENT -->
                            </div>
                            <!-- /USER AVATAR -->

                            <!-- USER AVATAR -->
                            <div class="user-avatar micro no-stats">
                                <!-- USER AVATAR BORDER -->
                                <div class="user-avatar-border">
                                    <!-- HEXAGON -->
                                    <div class="hexagon-22-24"></div>
                                    <!-- /HEXAGON -->
                                </div>
                                <!-- /USER AVATAR BORDER -->

                                <!-- USER AVATAR CONTENT -->
                                <div class="user-avatar-content">
                                    <!-- HEXAGON -->
                                    <div class="hexagon-image-18-20" data-src="/assets/vikinger/img/avatar/08.jpg">
                                    </div>
                                    <!-- /HEXAGON -->
                                </div>
                                <!-- /USER AVATAR CONTENT -->
                            </div>
                            <!-- /USER AVATAR -->
                        </div>
                        <!-- /META LINE LIST -->

                        <!-- META LINE TEXT -->
                        <p class="meta-line-text">19 Participants</p>
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
                        <p class="meta-line-link">2 Comments</p>
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
            <div class="post-option reaction-options-dropdown-trigger">
                <!-- POST OPTION ICON -->
                <svg class="post-option-icon icon-thumbs-up">
                    <use xlink:href="#svg-thumbs-up"></use>
                </svg>
                <!-- /POST OPTION ICON -->

                <!-- POST OPTION TEXT -->
                <p class="post-option-text">React!</p>
                <!-- /POST OPTION TEXT -->
            </div>
            <!-- /POST OPTION -->

            <!-- REACTION OPTIONS -->
            <div class="reaction-options reaction-options-dropdown">
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
        <!-- /POST OPTION WRAP -->

        <!-- POST OPTION -->
        <div class="post-option">
            <!-- POST OPTION ICON -->
            <svg class="post-option-icon icon-comment">
                <use xlink:href="#svg-comment"></use>
            </svg>
            <!-- /POST OPTION ICON -->

            <!-- POST OPTION TEXT -->
            <p class="post-option-text">Comment</p>
            <!-- /POST OPTION TEXT -->
        </div>
        <!-- /POST OPTION -->

        <!-- POST OPTION -->
        <div class="post-option">
            <!-- POST OPTION ICON -->
            <svg class="post-option-icon icon-share">
                <use xlink:href="#svg-share"></use>
            </svg>
            <!-- /POST OPTION ICON -->

            <!-- POST OPTION TEXT -->
            <p class="post-option-text">Share</p>
            <!-- /POST OPTION TEXT -->
        </div>
        <!-- /POST OPTION -->
    </div>
    <!-- /POST OPTIONS -->
</div>
<!-- /WIDGET BOX -->

<!-- WIDGET BOX -->
<div class="widget-box no-padding">
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
                </a>
                <!-- /USER STATUS AVATAR -->

                <!-- USER STATUS TITLE -->
                <div class="user-status-title medium"><a class="bold" href="profile-timeline.html">Neko
                        Bebop</a> replied to the discussion <a class="bold" href="forums-discussion.html">In your
                        opinion, who has the
                        best Cosplay?</a> in the forum
                    <!-- USER AVATAR -->
                    <a class="user-avatar micro no-stats" href="group-timeline.html">
                        <!-- USER AVATAR BORDER -->
                        <div class="user-avatar-border">
                            <!-- HEXAGON -->
                            <div class="hexagon-22-24"></div>
                            <!-- /HEXAGON -->
                        </div>
                        <!-- /USER AVATAR BORDER -->

                        <!-- USER AVATAR CONTENT -->
                        <div class="user-avatar-content">
                            <!-- HEXAGON -->
                            <div class="hexagon-image-18-20" data-src="/assets/vikinger/img/avatar/24.jpg"></div>
                            <!-- /HEXAGON -->
                        </div>
                        <!-- /USER AVATAR CONTENT -->
                    </a>
                    <!-- /USER AVATAR -->
                    <a class="bold" href="group-timeline.html">Cosplayers of the World</a>
                </div>
                <!-- /USER STATUS TITLE -->

                <!-- USER STATUS TEXT -->
                <p class="user-status-text small">42 minutes ago</p>
                <!-- /USER STATUS TEXT -->
            </div>
            <!-- /USER STATUS -->

            <!-- QUOTE BOX -->
            <blockquote class="quote-box">
                <!-- QUOTE BOX ICON -->
                <svg class="quote-box-icon icon-quote">
                    <use xlink:href="#svg-quote"></use>
                </svg>
                <!-- /QUOTE BOX ICON -->

                <!-- QUOTE BOX TEXT -->
                <p class="quote-box-text">I've been cosplaying for 9 years now and I've never seen a
                    more perfect cosplay like the Samurai Robot one from Rosie Sakura.</p>
                <!-- /QUOTE BOX TEXT -->
            </blockquote>
            <!-- /QUOTE BOX -->

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
                                            class="bold">Love</span>
                                    </p>
                                    <!-- /SIMPLE DROPDOWN TEXT -->

                                    <!-- SIMPLE DROPDOWN TEXT -->
                                    <p class="simple-dropdown-text">Matt Parker</p>
                                    <!-- /SIMPLE DROPDOWN TEXT -->

                                    <!-- SIMPLE DROPDOWN TEXT -->
                                    <p class="simple-dropdown-text">Destroy Dex</p>
                                    <!-- /SIMPLE DROPDOWN TEXT -->

                                    <!-- SIMPLE DROPDOWN TEXT -->
                                    <p class="simple-dropdown-text">The Green Goo</p>
                                    <!-- /SIMPLE DROPDOWN TEXT -->
                                </div>
                                <!-- /SIMPLE DROPDOWN -->
                            </div>
                            <!-- /REACTION ITEM -->

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
                                            src="/assets/vikinger/img/reaction/happy.png" alt="reaction-happy">
                                        <span class="bold">Happy</span>
                                    </p>
                                    <!-- /SIMPLE DROPDOWN TEXT -->

                                    <!-- SIMPLE DROPDOWN TEXT -->
                                    <p class="simple-dropdown-text">Sandra Strange</p>
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
                                            class="bold">Like</span>
                                    </p>
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

                                    <!-- SIMPLE DROPDOWN TEXT -->
                                    <p class="simple-dropdown-text">Jett Spiegel</p>
                                    <!-- /SIMPLE DROPDOWN TEXT -->

                                    <!-- SIMPLE DROPDOWN TEXT -->
                                    <p class="simple-dropdown-text">Marcus Jhonson</p>
                                    <!-- /SIMPLE DROPDOWN TEXT -->

                                    <!-- SIMPLE DROPDOWN TEXT -->
                                    <p class="simple-dropdown-text">Jane Rodgers</p>
                                    <!-- /SIMPLE DROPDOWN TEXT -->

                                    <!-- SIMPLE DROPDOWN TEXT -->
                                    <p class="simple-dropdown-text"><span class="bold">and 6
                                            more...</span></p>
                                    <!-- /SIMPLE DROPDOWN TEXT -->
                                </div>
                                <!-- /SIMPLE DROPDOWN -->
                            </div>
                            <!-- /REACTION ITEM -->
                        </div>
                        <!-- /META LINE LIST -->

                        <!-- META LINE TEXT -->
                        <p class="meta-line-text">16</p>
                        <!-- /META LINE TEXT -->
                    </div>
                    <!-- /META LINE -->

                    <!-- META LINE -->
                    <div class="meta-line">
                        <!-- META LINE LIST -->
                        <div class="meta-line-list user-avatar-list">
                            <!-- USER AVATAR -->
                            <div class="user-avatar micro no-stats">
                                <!-- USER AVATAR BORDER -->
                                <div class="user-avatar-border">
                                    <!-- HEXAGON -->
                                    <div class="hexagon-22-24"></div>
                                    <!-- /HEXAGON -->
                                </div>
                                <!-- /USER AVATAR BORDER -->

                                <!-- USER AVATAR CONTENT -->
                                <div class="user-avatar-content">
                                    <!-- HEXAGON -->
                                    <div class="hexagon-image-18-20" data-src="/assets/vikinger/img/avatar/07.jpg">
                                    </div>
                                    <!-- /HEXAGON -->
                                </div>
                                <!-- /USER AVATAR CONTENT -->
                            </div>
                            <!-- /USER AVATAR -->

                            <!-- USER AVATAR -->
                            <div class="user-avatar micro no-stats">
                                <!-- USER AVATAR BORDER -->
                                <div class="user-avatar-border">
                                    <!-- HEXAGON -->
                                    <div class="hexagon-22-24"></div>
                                    <!-- /HEXAGON -->
                                </div>
                                <!-- /USER AVATAR BORDER -->

                                <!-- USER AVATAR CONTENT -->
                                <div class="user-avatar-content">
                                    <!-- HEXAGON -->
                                    <div class="hexagon-image-18-20" data-src="/assets/vikinger/img/avatar/13.jpg">
                                    </div>
                                    <!-- /HEXAGON -->
                                </div>
                                <!-- /USER AVATAR CONTENT -->
                            </div>
                            <!-- /USER AVATAR -->

                            <!-- USER AVATAR -->
                            <div class="user-avatar micro no-stats">
                                <!-- USER AVATAR BORDER -->
                                <div class="user-avatar-border">
                                    <!-- HEXAGON -->
                                    <div class="hexagon-22-24"></div>
                                    <!-- /HEXAGON -->
                                </div>
                                <!-- /USER AVATAR BORDER -->

                                <!-- USER AVATAR CONTENT -->
                                <div class="user-avatar-content">
                                    <!-- HEXAGON -->
                                    <div class="hexagon-image-18-20" data-src="/assets/vikinger/img/avatar/22.jpg">
                                    </div>
                                    <!-- /HEXAGON -->
                                </div>
                                <!-- /USER AVATAR CONTENT -->
                            </div>
                            <!-- /USER AVATAR -->

                            <!-- USER AVATAR -->
                            <div class="user-avatar micro no-stats">
                                <!-- USER AVATAR BORDER -->
                                <div class="user-avatar-border">
                                    <!-- HEXAGON -->
                                    <div class="hexagon-22-24"></div>
                                    <!-- /HEXAGON -->
                                </div>
                                <!-- /USER AVATAR BORDER -->

                                <!-- USER AVATAR CONTENT -->
                                <div class="user-avatar-content">
                                    <!-- HEXAGON -->
                                    <div class="hexagon-image-18-20" data-src="/assets/vikinger/img/avatar/10.jpg">
                                    </div>
                                    <!-- /HEXAGON -->
                                </div>
                                <!-- /USER AVATAR CONTENT -->
                            </div>
                            <!-- /USER AVATAR -->

                            <!-- USER AVATAR -->
                            <div class="user-avatar micro no-stats">
                                <!-- USER AVATAR BORDER -->
                                <div class="user-avatar-border">
                                    <!-- HEXAGON -->
                                    <div class="hexagon-22-24"></div>
                                    <!-- /HEXAGON -->
                                </div>
                                <!-- /USER AVATAR BORDER -->

                                <!-- USER AVATAR CONTENT -->
                                <div class="user-avatar-content">
                                    <!-- HEXAGON -->
                                    <div class="hexagon-image-18-20" data-src="/assets/vikinger/img/avatar/08.jpg">
                                    </div>
                                    <!-- /HEXAGON -->
                                </div>
                                <!-- /USER AVATAR CONTENT -->
                            </div>
                            <!-- /USER AVATAR -->
                        </div>
                        <!-- /META LINE LIST -->

                        <!-- META LINE TEXT -->
                        <p class="meta-line-text">19 Participants</p>
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
                        <p class="meta-line-link">2 Comments</p>
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
            <div class="post-option reaction-options-dropdown-trigger">
                <!-- POST OPTION ICON -->
                <svg class="post-option-icon icon-thumbs-up">
                    <use xlink:href="#svg-thumbs-up"></use>
                </svg>
                <!-- /POST OPTION ICON -->

                <!-- POST OPTION TEXT -->
                <p class="post-option-text">React!</p>
                <!-- /POST OPTION TEXT -->
            </div>
            <!-- /POST OPTION -->

            <!-- REACTION OPTIONS -->
            <div class="reaction-options reaction-options-dropdown">
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
        <!-- /POST OPTION WRAP -->

        <!-- POST OPTION -->
        <div class="post-option">
            <!-- POST OPTION ICON -->
            <svg class="post-option-icon icon-comment">
                <use xlink:href="#svg-comment"></use>
            </svg>
            <!-- /POST OPTION ICON -->

            <!-- POST OPTION TEXT -->
            <p class="post-option-text">Comment</p>
            <!-- /POST OPTION TEXT -->
        </div>
        <!-- /POST OPTION -->

        <!-- POST OPTION -->
        <div class="post-option">
            <!-- POST OPTION ICON -->
            <svg class="post-option-icon icon-share">
                <use xlink:href="#svg-share"></use>
            </svg>
            <!-- /POST OPTION ICON -->

            <!-- POST OPTION TEXT -->
            <p class="post-option-text">Share</p>
            <!-- /POST OPTION TEXT -->
        </div>
        <!-- /POST OPTION -->
    </div>
    <!-- /POST OPTIONS -->
</div>
<!-- /WIDGET BOX -->

<!-- WIDGET BOX -->
<div class="widget-box no-padding">
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
                </a>
                <!-- /USER STATUS AVATAR -->

                <!-- USER STATUS TITLE -->
                <p class="user-status-title medium"><a class="bold" href="profile-timeline.html">Nick
                        Grissom</a></p>
                <!-- /USER STATUS TITLE -->

                <!-- USER STATUS TEXT -->
                <p class="user-status-text small">1 hour ago</p>
                <!-- /USER STATUS TEXT -->
            </div>
            <!-- /USER STATUS -->

            <!-- WIDGET BOX STATUS TEXT -->
            <p class="widget-box-status-text">When you finally pass the quest that you've been trying
                for so long...</p>
            <!-- /WIDGET BOX STATUS TEXT -->
        </div>
        <!-- /WIDGET BOX STATUS CONTENT -->

        <!-- IFRAME WRAP -->
        <div class="iframe-wrap">
            <iframe src="https://giphy.com/embed/1LnQIODGufGec" allowFullScreen></iframe>
        </div>
        <!-- /IFRAME WRAP -->

        <!-- WIDGET BOX STATUS CONTENT -->
        <div class="widget-box-status-content">
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
                                            class="bold">Love</span>
                                    </p>
                                    <!-- /SIMPLE DROPDOWN TEXT -->

                                    <!-- SIMPLE DROPDOWN TEXT -->
                                    <p class="simple-dropdown-text">Matt Parker</p>
                                    <!-- /SIMPLE DROPDOWN TEXT -->

                                    <!-- SIMPLE DROPDOWN TEXT -->
                                    <p class="simple-dropdown-text">Destroy Dex</p>
                                    <!-- /SIMPLE DROPDOWN TEXT -->

                                    <!-- SIMPLE DROPDOWN TEXT -->
                                    <p class="simple-dropdown-text">The Green Goo</p>
                                    <!-- /SIMPLE DROPDOWN TEXT -->
                                </div>
                                <!-- /SIMPLE DROPDOWN -->
                            </div>
                            <!-- /REACTION ITEM -->

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
                                            src="/assets/vikinger/img/reaction/happy.png" alt="reaction-happy">
                                        <span class="bold">Happy</span>
                                    </p>
                                    <!-- /SIMPLE DROPDOWN TEXT -->

                                    <!-- SIMPLE DROPDOWN TEXT -->
                                    <p class="simple-dropdown-text">Sandra Strange</p>
                                    <!-- /SIMPLE DROPDOWN TEXT -->

                                    <!-- SIMPLE DROPDOWN TEXT -->
                                    <p class="simple-dropdown-text">Jane Rodgers</p>
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
                                            class="bold">Like</span>
                                    </p>
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

                                    <!-- SIMPLE DROPDOWN TEXT -->
                                    <p class="simple-dropdown-text">Jett Spiegel</p>
                                    <!-- /SIMPLE DROPDOWN TEXT -->

                                    <!-- SIMPLE DROPDOWN TEXT -->
                                    <p class="simple-dropdown-text">Marcus Jhonson</p>
                                    <!-- /SIMPLE DROPDOWN TEXT -->

                                    <!-- SIMPLE DROPDOWN TEXT -->
                                    <p class="simple-dropdown-text"><span class="bold">and 6
                                            more...</span></p>
                                    <!-- /SIMPLE DROPDOWN TEXT -->
                                </div>
                                <!-- /SIMPLE DROPDOWN -->
                            </div>
                            <!-- /REACTION ITEM -->
                        </div>
                        <!-- /META LINE LIST -->

                        <!-- META LINE TEXT -->
                        <p class="meta-line-text">16</p>
                        <!-- /META LINE TEXT -->
                    </div>
                    <!-- /META LINE -->

                    <!-- META LINE -->
                    <div class="meta-line">
                        <!-- META LINE LIST -->
                        <div class="meta-line-list user-avatar-list">
                            <!-- USER AVATAR -->
                            <div class="user-avatar micro no-stats">
                                <!-- USER AVATAR BORDER -->
                                <div class="user-avatar-border">
                                    <!-- HEXAGON -->
                                    <div class="hexagon-22-24"></div>
                                    <!-- /HEXAGON -->
                                </div>
                                <!-- /USER AVATAR BORDER -->

                                <!-- USER AVATAR CONTENT -->
                                <div class="user-avatar-content">
                                    <!-- HEXAGON -->
                                    <div class="hexagon-image-18-20" data-src="/assets/vikinger/img/avatar/07.jpg">
                                    </div>
                                    <!-- /HEXAGON -->
                                </div>
                                <!-- /USER AVATAR CONTENT -->
                            </div>
                            <!-- /USER AVATAR -->

                            <!-- USER AVATAR -->
                            <div class="user-avatar micro no-stats">
                                <!-- USER AVATAR BORDER -->
                                <div class="user-avatar-border">
                                    <!-- HEXAGON -->
                                    <div class="hexagon-22-24"></div>
                                    <!-- /HEXAGON -->
                                </div>
                                <!-- /USER AVATAR BORDER -->

                                <!-- USER AVATAR CONTENT -->
                                <div class="user-avatar-content">
                                    <!-- HEXAGON -->
                                    <div class="hexagon-image-18-20" data-src="/assets/vikinger/img/avatar/13.jpg">
                                    </div>
                                    <!-- /HEXAGON -->
                                </div>
                                <!-- /USER AVATAR CONTENT -->
                            </div>
                            <!-- /USER AVATAR -->

                            <!-- USER AVATAR -->
                            <div class="user-avatar micro no-stats">
                                <!-- USER AVATAR BORDER -->
                                <div class="user-avatar-border">
                                    <!-- HEXAGON -->
                                    <div class="hexagon-22-24"></div>
                                    <!-- /HEXAGON -->
                                </div>
                                <!-- /USER AVATAR BORDER -->

                                <!-- USER AVATAR CONTENT -->
                                <div class="user-avatar-content">
                                    <!-- HEXAGON -->
                                    <div class="hexagon-image-18-20" data-src="/assets/vikinger/img/avatar/22.jpg">
                                    </div>
                                    <!-- /HEXAGON -->
                                </div>
                                <!-- /USER AVATAR CONTENT -->
                            </div>
                            <!-- /USER AVATAR -->

                            <!-- USER AVATAR -->
                            <div class="user-avatar micro no-stats">
                                <!-- USER AVATAR BORDER -->
                                <div class="user-avatar-border">
                                    <!-- HEXAGON -->
                                    <div class="hexagon-22-24"></div>
                                    <!-- /HEXAGON -->
                                </div>
                                <!-- /USER AVATAR BORDER -->

                                <!-- USER AVATAR CONTENT -->
                                <div class="user-avatar-content">
                                    <!-- HEXAGON -->
                                    <div class="hexagon-image-18-20" data-src="/assets/vikinger/img/avatar/10.jpg">
                                    </div>
                                    <!-- /HEXAGON -->
                                </div>
                                <!-- /USER AVATAR CONTENT -->
                            </div>
                            <!-- /USER AVATAR -->

                            <!-- USER AVATAR -->
                            <div class="user-avatar micro no-stats">
                                <!-- USER AVATAR BORDER -->
                                <div class="user-avatar-border">
                                    <!-- HEXAGON -->
                                    <div class="hexagon-22-24"></div>
                                    <!-- /HEXAGON -->
                                </div>
                                <!-- /USER AVATAR BORDER -->

                                <!-- USER AVATAR CONTENT -->
                                <div class="user-avatar-content">
                                    <!-- HEXAGON -->
                                    <div class="hexagon-image-18-20" data-src="/assets/vikinger/img/avatar/08.jpg">
                                    </div>
                                    <!-- /HEXAGON -->
                                </div>
                                <!-- /USER AVATAR CONTENT -->
                            </div>
                            <!-- /USER AVATAR -->
                        </div>
                        <!-- /META LINE LIST -->

                        <!-- META LINE TEXT -->
                        <p class="meta-line-text">19 Participants</p>
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
                        <p class="meta-line-link">2 Comments</p>
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
            <div class="post-option reaction-options-dropdown-trigger">
                <!-- POST OPTION ICON -->
                <svg class="post-option-icon icon-thumbs-up">
                    <use xlink:href="#svg-thumbs-up"></use>
                </svg>
                <!-- /POST OPTION ICON -->

                <!-- POST OPTION TEXT -->
                <p class="post-option-text">React!</p>
                <!-- /POST OPTION TEXT -->
            </div>
            <!-- /POST OPTION -->

            <!-- REACTION OPTIONS -->
            <div class="reaction-options reaction-options-dropdown">
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
        <!-- /POST OPTION WRAP -->

        <!-- POST OPTION -->
        <div class="post-option">
            <!-- POST OPTION ICON -->
            <svg class="post-option-icon icon-comment">
                <use xlink:href="#svg-comment"></use>
            </svg>
            <!-- /POST OPTION ICON -->

            <!-- POST OPTION TEXT -->
            <p class="post-option-text">Comment</p>
            <!-- /POST OPTION TEXT -->
        </div>
        <!-- /POST OPTION -->

        <!-- POST OPTION -->
        <div class="post-option">
            <!-- POST OPTION ICON -->
            <svg class="post-option-icon icon-share">
                <use xlink:href="#svg-share"></use>
            </svg>
            <!-- /POST OPTION ICON -->

            <!-- POST OPTION TEXT -->
            <p class="post-option-text">Share</p>
            <!-- /POST OPTION TEXT -->
        </div>
        <!-- /POST OPTION -->
    </div>
    <!-- /POST OPTIONS -->
</div>
<!-- /WIDGET BOX -->

<!-- WIDGET BOX -->
<div class="widget-box no-padding">
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
                </a>
                <!-- /USER STATUS AVATAR -->

                <!-- USER STATUS TITLE -->
                <p class="user-status-title medium"><a class="bold" href="profile-timeline.html">Sarah
                        Diamond</a> created a <span class="bold">poll</span></p>
                <!-- /USER STATUS TITLE -->

                <!-- USER STATUS TEXT -->
                <p class="user-status-text small">9 minutes ago</p>
                <!-- /USER STATUS TEXT -->
            </div>
            <!-- /USER STATUS -->

            <!-- WIDGET BOX STATUS TEXT -->
            <p class="widget-box-status-text">I've created a poll to ask all of you what you would
                like to see more in my upcoming videos! It will only take a couple of seconds...thanks
                to all in advance!!</p>
            <!-- /WIDGET BOX STATUS TEXT -->

            <!-- POLL BOX -->
            <div class="poll-box">
                <!-- POLL TITLE -->
                <p class="poll-title">What do you wanna see in my upcoming videos?</p>
                <!-- /POLL TITLE -->

                <!-- POLL TEXT -->
                <p class="poll-text">Poll ends in 5 days</p>
                <!-- /POLL TEXT -->

                <!-- POLL RESULTS -->
                <div class="poll-results">
                    <!-- POLL RESULT -->
                    <div class="poll-result">
                        <!-- PROGRESS STAT -->
                        <div class="progress-stat">
                            <!-- BAR PROGRESS WRAP -->
                            <div class="bar-progress-wrap medium">
                                <!-- BAR PROGRESS INFO -->
                                <p class="bar-progress-info medium negative regular">Walkthroughs<span
                                        class="bar-progress-text no-space"></span></p>
                                <!-- /BAR PROGRESS INFO -->
                            </div>
                            <!-- /BAR PROGRESS WRAP -->

                            <!-- PROGRESS STAT BAR -->
                            <div id="poll-result-1" class="progress-stat-bar"></div>
                            <!-- /PROGRESS STAT BAR -->
                        </div>
                        <!-- /PROGRESS STAT -->

                        <!-- META LINE -->
                        <div class="meta-line">
                            <!-- META LINE LIST -->
                            <div class="meta-line-list user-avatar-list">
                                <!-- USER AVATAR -->
                                <div class="user-avatar micro no-stats">
                                    <!-- USER AVATAR BORDER -->
                                    <div class="user-avatar-border">
                                        <!-- HEXAGON -->
                                        <div class="hexagon-22-24"></div>
                                        <!-- /HEXAGON -->
                                    </div>
                                    <!-- /USER AVATAR BORDER -->

                                    <!-- USER AVATAR CONTENT -->
                                    <div class="user-avatar-content">
                                        <!-- HEXAGON -->
                                        <div class="hexagon-image-18-20"
                                            data-src="/assets/vikinger/img/avatar/10.jpg"></div>
                                        <!-- /HEXAGON -->
                                    </div>
                                    <!-- /USER AVATAR CONTENT -->
                                </div>
                                <!-- /USER AVATAR -->

                                <!-- USER AVATAR -->
                                <div class="user-avatar micro no-stats">
                                    <!-- USER AVATAR BORDER -->
                                    <div class="user-avatar-border">
                                        <!-- HEXAGON -->
                                        <div class="hexagon-22-24"></div>
                                        <!-- /HEXAGON -->
                                    </div>
                                    <!-- /USER AVATAR BORDER -->

                                    <!-- USER AVATAR CONTENT -->
                                    <div class="user-avatar-content">
                                        <!-- HEXAGON -->
                                        <div class="hexagon-image-18-20"
                                            data-src="/assets/vikinger/img/avatar/05.jpg"></div>
                                        <!-- /HEXAGON -->
                                    </div>
                                    <!-- /USER AVATAR CONTENT -->
                                </div>
                                <!-- /USER AVATAR -->

                                <!-- USER AVATAR -->
                                <div class="user-avatar micro no-stats">
                                    <!-- USER AVATAR BORDER -->
                                    <div class="user-avatar-border">
                                        <!-- HEXAGON -->
                                        <div class="hexagon-22-24"></div>
                                        <!-- /HEXAGON -->
                                    </div>
                                    <!-- /USER AVATAR BORDER -->

                                    <!-- USER AVATAR CONTENT -->
                                    <div class="user-avatar-content">
                                        <!-- HEXAGON -->
                                        <div class="hexagon-image-18-20"
                                            data-src="/assets/vikinger/img/avatar/09.jpg"></div>
                                        <!-- /HEXAGON -->
                                    </div>
                                    <!-- /USER AVATAR CONTENT -->
                                </div>
                                <!-- /USER AVATAR -->

                                <!-- USER AVATAR -->
                                <div class="user-avatar micro no-stats">
                                    <!-- USER AVATAR BORDER -->
                                    <div class="user-avatar-border">
                                        <!-- HEXAGON -->
                                        <div class="hexagon-22-24"></div>
                                        <!-- /HEXAGON -->
                                    </div>
                                    <!-- /USER AVATAR BORDER -->

                                    <!-- USER AVATAR CONTENT -->
                                    <div class="user-avatar-content">
                                        <!-- HEXAGON -->
                                        <div class="hexagon-image-18-20"
                                            data-src="/assets/vikinger/img/avatar/08.jpg"></div>
                                        <!-- /HEXAGON -->
                                    </div>
                                    <!-- /USER AVATAR CONTENT -->
                                </div>
                                <!-- /USER AVATAR -->

                                <!-- USER AVATAR -->
                                <div class="user-avatar micro no-stats">
                                    <!-- USER AVATAR BORDER -->
                                    <div class="user-avatar-border">
                                        <!-- HEXAGON -->
                                        <div class="hexagon-22-24"></div>
                                        <!-- /HEXAGON -->
                                    </div>
                                    <!-- /USER AVATAR BORDER -->

                                    <!-- USER AVATAR CONTENT -->
                                    <div class="user-avatar-content">
                                        <!-- HEXAGON -->
                                        <div class="hexagon-image-18-20"
                                            data-src="/assets/vikinger/img/avatar/12.jpg"></div>
                                        <!-- /HEXAGON -->
                                    </div>
                                    <!-- /USER AVATAR CONTENT -->
                                </div>
                                <!-- /USER AVATAR -->

                                <!-- USER AVATAR -->
                                <div class="user-avatar micro no-stats">
                                    <!-- USER AVATAR BORDER -->
                                    <div class="user-avatar-border">
                                        <!-- HEXAGON -->
                                        <div class="hexagon-22-24"></div>
                                        <!-- /HEXAGON -->
                                    </div>
                                    <!-- /USER AVATAR BORDER -->

                                    <!-- USER AVATAR CONTENT -->
                                    <div class="user-avatar-content">
                                        <!-- HEXAGON -->
                                        <div class="hexagon-image-18-20"
                                            data-src="/assets/vikinger/img/avatar/16.jpg"></div>
                                        <!-- /HEXAGON -->
                                    </div>
                                    <!-- /USER AVATAR CONTENT -->
                                </div>
                                <!-- /USER AVATAR -->

                                <!-- USER AVATAR -->
                                <div class="user-avatar micro no-stats">
                                    <!-- USER AVATAR BORDER -->
                                    <div class="user-avatar-border">
                                        <!-- HEXAGON -->
                                        <div class="hexagon-22-24"></div>
                                        <!-- /HEXAGON -->
                                    </div>
                                    <!-- /USER AVATAR BORDER -->

                                    <!-- USER AVATAR CONTENT -->
                                    <div class="user-avatar-content">
                                        <!-- HEXAGON -->
                                        <div class="hexagon-image-18-20"
                                            data-src="/assets/vikinger/img/avatar/06.jpg"></div>
                                        <!-- /HEXAGON -->
                                    </div>
                                    <!-- /USER AVATAR CONTENT -->
                                </div>
                                <!-- /USER AVATAR -->

                                <!-- USER AVATAR -->
                                <div class="user-avatar micro no-stats">
                                    <!-- USER AVATAR BORDER -->
                                    <div class="user-avatar-border">
                                        <!-- HEXAGON -->
                                        <div class="hexagon-22-24"></div>
                                        <!-- /HEXAGON -->
                                    </div>
                                    <!-- /USER AVATAR BORDER -->

                                    <!-- USER AVATAR CONTENT -->
                                    <div class="user-avatar-content">
                                        <!-- HEXAGON -->
                                        <div class="hexagon-image-18-20"
                                            data-src="/assets/vikinger/img/avatar/13.jpg"></div>
                                        <!-- /HEXAGON -->
                                    </div>
                                    <!-- /USER AVATAR CONTENT -->
                                </div>
                                <!-- /USER AVATAR -->

                                <!-- USER AVATAR -->
                                <div class="user-avatar micro no-stats">
                                    <!-- USER AVATAR BORDER -->
                                    <div class="user-avatar-border">
                                        <!-- HEXAGON -->
                                        <div class="hexagon-22-24"></div>
                                        <!-- /HEXAGON -->
                                    </div>
                                    <!-- /USER AVATAR BORDER -->

                                    <!-- USER AVATAR CONTENT -->
                                    <div class="user-avatar-content">
                                        <!-- HEXAGON -->
                                        <div class="hexagon-image-18-20"
                                            data-src="/assets/vikinger/img/avatar/11.jpg"></div>
                                        <!-- /HEXAGON -->
                                    </div>
                                    <!-- /USER AVATAR CONTENT -->
                                </div>
                                <!-- /USER AVATAR -->

                                <!-- USER AVATAR -->
                                <div class="user-avatar micro no-stats">
                                    <!-- USER AVATAR BORDER -->
                                    <div class="user-avatar-border">
                                        <!-- HEXAGON -->
                                        <div class="hexagon-22-24"></div>
                                        <!-- /HEXAGON -->
                                    </div>
                                    <!-- /USER AVATAR BORDER -->

                                    <!-- USER AVATAR CONTENT -->
                                    <div class="user-avatar-content">
                                        <!-- HEXAGON -->
                                        <div class="hexagon-image-18-20"
                                            data-src="/assets/vikinger/img/avatar/30.jpg"></div>
                                        <!-- /HEXAGON -->
                                    </div>
                                    <!-- /USER AVATAR CONTENT -->
                                </div>
                                <!-- /USER AVATAR -->

                                <!-- USER AVATAR -->
                                <div class="user-avatar micro no-stats">
                                    <!-- USER AVATAR BORDER -->
                                    <div class="user-avatar-border">
                                        <!-- HEXAGON -->
                                        <div class="hexagon-22-24"></div>
                                        <!-- /HEXAGON -->
                                    </div>
                                    <!-- /USER AVATAR BORDER -->

                                    <!-- USER AVATAR CONTENT -->
                                    <div class="user-avatar-content">
                                        <!-- HEXAGON -->
                                        <div class="hexagon-image-18-20"
                                            data-src="/assets/vikinger/img/avatar/03.jpg"></div>
                                        <!-- /HEXAGON -->
                                    </div>
                                    <!-- /USER AVATAR CONTENT -->
                                </div>
                                <!-- /USER AVATAR -->

                                <!-- USER AVATAR -->
                                <div class="user-avatar micro no-stats">
                                    <!-- USER AVATAR BORDER -->
                                    <div class="user-avatar-border">
                                        <!-- HEXAGON -->
                                        <div class="hexagon-22-24"></div>
                                        <!-- /HEXAGON -->
                                    </div>
                                    <!-- /USER AVATAR BORDER -->

                                    <!-- USER AVATAR CONTENT -->
                                    <div class="user-avatar-content">
                                        <!-- HEXAGON -->
                                        <div class="hexagon-image-18-20"
                                            data-src="/assets/vikinger/img/avatar/04.jpg"></div>
                                        <!-- /HEXAGON -->
                                    </div>
                                    <!-- /USER AVATAR CONTENT -->
                                </div>
                                <!-- /USER AVATAR -->
                            </div>
                            <!-- /META LINE LIST -->

                            <!-- META LINE TEXT -->
                            <p class="meta-line-text">12 Votes</p>
                            <!-- /META LINE TEXT -->
                        </div>
                        <!-- /META LINE -->
                    </div>
                    <!-- /POLL RESULT -->

                    <!-- POLL RESULT -->
                    <div class="poll-result">
                        <!-- PROGRESS STAT -->
                        <div class="progress-stat">
                            <!-- BAR PROGRESS WRAP -->
                            <div class="bar-progress-wrap medium">
                                <!-- BAR PROGRESS INFO -->
                                <p class="bar-progress-info medium negative regular">Retro Games<span
                                        class="bar-progress-text no-space"></span></p>
                                <!-- /BAR PROGRESS INFO -->
                            </div>
                            <!-- /BAR PROGRESS WRAP -->

                            <!-- PROGRESS STAT BAR -->
                            <div id="poll-result-2" class="progress-stat-bar"></div>
                            <!-- /PROGRESS STAT BAR -->
                        </div>
                        <!-- /PROGRESS STAT -->

                        <!-- META LINE -->
                        <div class="meta-line">
                            <!-- META LINE LIST -->
                            <div class="meta-line-list user-avatar-list">
                                <!-- USER AVATAR -->
                                <div class="user-avatar micro no-stats">
                                    <!-- USER AVATAR BORDER -->
                                    <div class="user-avatar-border">
                                        <!-- HEXAGON -->
                                        <div class="hexagon-22-24"></div>
                                        <!-- /HEXAGON -->
                                    </div>
                                    <!-- /USER AVATAR BORDER -->

                                    <!-- USER AVATAR CONTENT -->
                                    <div class="user-avatar-content">
                                        <!-- HEXAGON -->
                                        <div class="hexagon-image-18-20"
                                            data-src="/assets/vikinger/img/avatar/11.jpg"></div>
                                        <!-- /HEXAGON -->
                                    </div>
                                    <!-- /USER AVATAR CONTENT -->
                                </div>
                                <!-- /USER AVATAR -->

                                <!-- USER AVATAR -->
                                <div class="user-avatar micro no-stats">
                                    <!-- USER AVATAR BORDER -->
                                    <div class="user-avatar-border">
                                        <!-- HEXAGON -->
                                        <div class="hexagon-22-24"></div>
                                        <!-- /HEXAGON -->
                                    </div>
                                    <!-- /USER AVATAR BORDER -->

                                    <!-- USER AVATAR CONTENT -->
                                    <div class="user-avatar-content">
                                        <!-- HEXAGON -->
                                        <div class="hexagon-image-18-20"
                                            data-src="/assets/vikinger/img/avatar/22.jpg"></div>
                                        <!-- /HEXAGON -->
                                    </div>
                                    <!-- /USER AVATAR CONTENT -->
                                </div>
                                <!-- /USER AVATAR -->

                                <!-- USER AVATAR -->
                                <div class="user-avatar micro no-stats">
                                    <!-- USER AVATAR BORDER -->
                                    <div class="user-avatar-border">
                                        <!-- HEXAGON -->
                                        <div class="hexagon-22-24"></div>
                                        <!-- /HEXAGON -->
                                    </div>
                                    <!-- /USER AVATAR BORDER -->

                                    <!-- USER AVATAR CONTENT -->
                                    <div class="user-avatar-content">
                                        <!-- HEXAGON -->
                                        <div class="hexagon-image-18-20"
                                            data-src="/assets/vikinger/img/avatar/21.jpg"></div>
                                        <!-- /HEXAGON -->
                                    </div>
                                    <!-- /USER AVATAR CONTENT -->
                                </div>
                                <!-- /USER AVATAR -->

                                <!-- USER AVATAR -->
                                <div class="user-avatar micro no-stats">
                                    <!-- USER AVATAR BORDER -->
                                    <div class="user-avatar-border">
                                        <!-- HEXAGON -->
                                        <div class="hexagon-22-24"></div>
                                        <!-- /HEXAGON -->
                                    </div>
                                    <!-- /USER AVATAR BORDER -->

                                    <!-- USER AVATAR CONTENT -->
                                    <div class="user-avatar-content">
                                        <!-- HEXAGON -->
                                        <div class="hexagon-image-18-20"
                                            data-src="/assets/vikinger/img/avatar/19.jpg"></div>
                                        <!-- /HEXAGON -->
                                    </div>
                                    <!-- /USER AVATAR CONTENT -->
                                </div>
                                <!-- /USER AVATAR -->

                                <!-- USER AVATAR -->
                                <div class="user-avatar micro no-stats">
                                    <!-- USER AVATAR BORDER -->
                                    <div class="user-avatar-border">
                                        <!-- HEXAGON -->
                                        <div class="hexagon-22-24"></div>
                                        <!-- /HEXAGON -->
                                    </div>
                                    <!-- /USER AVATAR BORDER -->

                                    <!-- USER AVATAR CONTENT -->
                                    <div class="user-avatar-content">
                                        <!-- HEXAGON -->
                                        <div class="hexagon-image-18-20"
                                            data-src="/assets/vikinger/img/avatar/14.jpg"></div>
                                        <!-- /HEXAGON -->
                                    </div>
                                    <!-- /USER AVATAR CONTENT -->
                                </div>
                                <!-- /USER AVATAR -->

                                <!-- USER AVATAR -->
                                <div class="user-avatar micro no-stats">
                                    <!-- USER AVATAR BORDER -->
                                    <div class="user-avatar-border">
                                        <!-- HEXAGON -->
                                        <div class="hexagon-22-24"></div>
                                        <!-- /HEXAGON -->
                                    </div>
                                    <!-- /USER AVATAR BORDER -->

                                    <!-- USER AVATAR CONTENT -->
                                    <div class="user-avatar-content">
                                        <!-- HEXAGON -->
                                        <div class="hexagon-image-18-20"
                                            data-src="/assets/vikinger/img/avatar/15.jpg"></div>
                                        <!-- /HEXAGON -->
                                    </div>
                                    <!-- /USER AVATAR CONTENT -->
                                </div>
                                <!-- /USER AVATAR -->

                                <!-- USER AVATAR -->
                                <div class="user-avatar micro no-stats">
                                    <!-- USER AVATAR BORDER -->
                                    <div class="user-avatar-border">
                                        <!-- HEXAGON -->
                                        <div class="hexagon-22-24"></div>
                                        <!-- /HEXAGON -->
                                    </div>
                                    <!-- /USER AVATAR BORDER -->

                                    <!-- USER AVATAR CONTENT -->
                                    <div class="user-avatar-content">
                                        <!-- HEXAGON -->
                                        <div class="hexagon-image-18-20"
                                            data-src="/assets/vikinger/img/avatar/07.jpg"></div>
                                        <!-- /HEXAGON -->
                                    </div>
                                    <!-- /USER AVATAR CONTENT -->
                                </div>
                                <!-- /USER AVATAR -->
                            </div>
                            <!-- /META LINE LIST -->

                            <!-- META LINE TEXT -->
                            <p class="meta-line-text">7 Votes</p>
                            <!-- /META LINE TEXT -->
                        </div>
                        <!-- /META LINE -->
                    </div>
                    <!-- /POLL RESULT -->

                    <!-- POLL RESULT -->
                    <div class="poll-result">
                        <!-- PROGRESS STAT -->
                        <div class="progress-stat">
                            <!-- BAR PROGRESS WRAP -->
                            <div class="bar-progress-wrap medium">
                                <!-- BAR PROGRESS INFO -->
                                <p class="bar-progress-info medium negative regular">Unboxings<span
                                        class="bar-progress-text no-space"></span></p>
                                <!-- /BAR PROGRESS INFO -->
                            </div>
                            <!-- /BAR PROGRESS WRAP -->

                            <!-- PROGRESS STAT BAR -->
                            <div id="poll-result-3" class="progress-stat-bar"></div>
                            <!-- /PROGRESS STAT BAR -->
                        </div>
                        <!-- /PROGRESS STAT -->

                        <!-- META LINE -->
                        <div class="meta-line">
                            <!-- META LINE LIST -->
                            <div class="meta-line-list user-avatar-list">
                                <!-- USER AVATAR -->
                                <div class="user-avatar micro no-stats">
                                    <!-- USER AVATAR BORDER -->
                                    <div class="user-avatar-border">
                                        <!-- HEXAGON -->
                                        <div class="hexagon-22-24"></div>
                                        <!-- /HEXAGON -->
                                    </div>
                                    <!-- /USER AVATAR BORDER -->

                                    <!-- USER AVATAR CONTENT -->
                                    <div class="user-avatar-content">
                                        <!-- HEXAGON -->
                                        <div class="hexagon-image-18-20"
                                            data-src="/assets/vikinger/img/avatar/18.jpg"></div>
                                        <!-- /HEXAGON -->
                                    </div>
                                    <!-- /USER AVATAR CONTENT -->
                                </div>
                                <!-- /USER AVATAR -->

                                <!-- USER AVATAR -->
                                <div class="user-avatar micro no-stats">
                                    <!-- USER AVATAR BORDER -->
                                    <div class="user-avatar-border">
                                        <!-- HEXAGON -->
                                        <div class="hexagon-22-24"></div>
                                        <!-- /HEXAGON -->
                                    </div>
                                    <!-- /USER AVATAR BORDER -->

                                    <!-- USER AVATAR CONTENT -->
                                    <div class="user-avatar-content">
                                        <!-- HEXAGON -->
                                        <div class="hexagon-image-18-20"
                                            data-src="/assets/vikinger/img/avatar/02.jpg"></div>
                                        <!-- /HEXAGON -->
                                    </div>
                                    <!-- /USER AVATAR CONTENT -->
                                </div>
                                <!-- /USER AVATAR -->
                            </div>
                            <!-- /META LINE LIST -->

                            <!-- META LINE TEXT -->
                            <p class="meta-line-text">2 Votes</p>
                            <!-- /META LINE TEXT -->
                        </div>
                        <!-- /META LINE -->
                    </div>
                    <!-- /POLL RESULT -->
                </div>
                <!-- /POLL RESULTS -->
            </div>
            <!-- /POLL BOX -->

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
                                    src="/assets/vikinger/img/reaction/funny.png" alt="reaction-funny">
                                <!-- /REACTION IMAGE -->

                                <!-- SIMPLE DROPDOWN -->
                                <div class="simple-dropdown padded reaction-item-dropdown">
                                    <!-- SIMPLE DROPDOWN TEXT -->
                                    <p class="simple-dropdown-text"><img class="reaction"
                                            src="/assets/vikinger/img/reaction/funny.png" alt="reaction-funny">
                                        <span class="bold">Funny</span>
                                    </p>
                                    <!-- /SIMPLE DROPDOWN TEXT -->

                                    <!-- SIMPLE DROPDOWN TEXT -->
                                    <p class="simple-dropdown-text">Matt Parker</p>
                                    <!-- /SIMPLE DROPDOWN TEXT -->

                                    <!-- SIMPLE DROPDOWN TEXT -->
                                    <p class="simple-dropdown-text">Destroy Dex</p>
                                    <!-- /SIMPLE DROPDOWN TEXT -->

                                    <!-- SIMPLE DROPDOWN TEXT -->
                                    <p class="simple-dropdown-text">The Green Goo</p>
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
                                            class="bold">Like</span>
                                    </p>
                                    <!-- /SIMPLE DROPDOWN TEXT -->

                                    <!-- SIMPLE DROPDOWN TEXT -->
                                    <p class="simple-dropdown-text">Sandra Strange</p>
                                    <!-- /SIMPLE DROPDOWN TEXT -->

                                    <!-- SIMPLE DROPDOWN TEXT -->
                                    <p class="simple-dropdown-text">Jane Rodgers</p>
                                    <!-- /SIMPLE DROPDOWN TEXT -->
                                </div>
                                <!-- /SIMPLE DROPDOWN -->
                            </div>
                            <!-- /REACTION ITEM -->

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
                                            class="bold">Love</span>
                                    </p>
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

                                    <!-- SIMPLE DROPDOWN TEXT -->
                                    <p class="simple-dropdown-text">Jett Spiegel</p>
                                    <!-- /SIMPLE DROPDOWN TEXT -->
                                </div>
                                <!-- /SIMPLE DROPDOWN -->
                            </div>
                            <!-- /REACTION ITEM -->
                        </div>
                        <!-- /META LINE LIST -->

                        <!-- META LINE TEXT -->
                        <p class="meta-line-text">9</p>
                        <!-- /META LINE TEXT -->
                    </div>
                    <!-- /META LINE -->

                    <!-- META LINE -->
                    <div class="meta-line">
                        <!-- META LINE LIST -->
                        <div class="meta-line-list user-avatar-list">
                            <!-- USER AVATAR -->
                            <div class="user-avatar micro no-stats">
                                <!-- USER AVATAR BORDER -->
                                <div class="user-avatar-border">
                                    <!-- HEXAGON -->
                                    <div class="hexagon-22-24"></div>
                                    <!-- /HEXAGON -->
                                </div>
                                <!-- /USER AVATAR BORDER -->

                                <!-- USER AVATAR CONTENT -->
                                <div class="user-avatar-content">
                                    <!-- HEXAGON -->
                                    <div class="hexagon-image-18-20" data-src="/assets/vikinger/img/avatar/09.jpg">
                                    </div>
                                    <!-- /HEXAGON -->
                                </div>
                                <!-- /USER AVATAR CONTENT -->
                            </div>
                            <!-- /USER AVATAR -->

                            <!-- USER AVATAR -->
                            <div class="user-avatar micro no-stats">
                                <!-- USER AVATAR BORDER -->
                                <div class="user-avatar-border">
                                    <!-- HEXAGON -->
                                    <div class="hexagon-22-24"></div>
                                    <!-- /HEXAGON -->
                                </div>
                                <!-- /USER AVATAR BORDER -->

                                <!-- USER AVATAR CONTENT -->
                                <div class="user-avatar-content">
                                    <!-- HEXAGON -->
                                    <div class="hexagon-image-18-20" data-src="/assets/vikinger/img/avatar/08.jpg">
                                    </div>
                                    <!-- /HEXAGON -->
                                </div>
                                <!-- /USER AVATAR CONTENT -->
                            </div>
                            <!-- /USER AVATAR -->

                            <!-- USER AVATAR -->
                            <div class="user-avatar micro no-stats">
                                <!-- USER AVATAR BORDER -->
                                <div class="user-avatar-border">
                                    <!-- HEXAGON -->
                                    <div class="hexagon-22-24"></div>
                                    <!-- /HEXAGON -->
                                </div>
                                <!-- /USER AVATAR BORDER -->

                                <!-- USER AVATAR CONTENT -->
                                <div class="user-avatar-content">
                                    <!-- HEXAGON -->
                                    <div class="hexagon-image-18-20" data-src="/assets/vikinger/img/avatar/12.jpg">
                                    </div>
                                    <!-- /HEXAGON -->
                                </div>
                                <!-- /USER AVATAR CONTENT -->
                            </div>
                            <!-- /USER AVATAR -->

                            <!-- USER AVATAR -->
                            <div class="user-avatar micro no-stats">
                                <!-- USER AVATAR BORDER -->
                                <div class="user-avatar-border">
                                    <!-- HEXAGON -->
                                    <div class="hexagon-22-24"></div>
                                    <!-- /HEXAGON -->
                                </div>
                                <!-- /USER AVATAR BORDER -->

                                <!-- USER AVATAR CONTENT -->
                                <div class="user-avatar-content">
                                    <!-- HEXAGON -->
                                    <div class="hexagon-image-18-20" data-src="/assets/vikinger/img/avatar/16.jpg">
                                    </div>
                                    <!-- /HEXAGON -->
                                </div>
                                <!-- /USER AVATAR CONTENT -->
                            </div>
                            <!-- /USER AVATAR -->

                            <!-- USER AVATAR -->
                            <div class="user-avatar micro no-stats">
                                <!-- USER AVATAR BORDER -->
                                <div class="user-avatar-border">
                                    <!-- HEXAGON -->
                                    <div class="hexagon-22-24"></div>
                                    <!-- /HEXAGON -->
                                </div>
                                <!-- /USER AVATAR BORDER -->

                                <!-- USER AVATAR CONTENT -->
                                <div class="user-avatar-content">
                                    <!-- HEXAGON -->
                                    <div class="hexagon-image-18-20" data-src="/assets/vikinger/img/avatar/06.jpg">
                                    </div>
                                    <!-- /HEXAGON -->
                                </div>
                                <!-- /USER AVATAR CONTENT -->
                            </div>
                            <!-- /USER AVATAR -->
                        </div>
                        <!-- /META LINE LIST -->

                        <!-- META LINE TEXT -->
                        <p class="meta-line-text">11 Participants</p>
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
                        <p class="meta-line-link">1 Comments</p>
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
            <div class="post-option reaction-options-dropdown-trigger">
                <!-- POST OPTION ICON -->
                <svg class="post-option-icon icon-thumbs-up">
                    <use xlink:href="#svg-thumbs-up"></use>
                </svg>
                <!-- /POST OPTION ICON -->

                <!-- POST OPTION TEXT -->
                <p class="post-option-text">React!</p>
                <!-- /POST OPTION TEXT -->
            </div>
            <!-- /POST OPTION -->

            <!-- REACTION OPTIONS -->
            <div class="reaction-options reaction-options-dropdown">
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
        <!-- /POST OPTION WRAP -->

        <!-- POST OPTION -->
        <div class="post-option">
            <!-- POST OPTION ICON -->
            <svg class="post-option-icon icon-comment">
                <use xlink:href="#svg-comment"></use>
            </svg>
            <!-- /POST OPTION ICON -->

            <!-- POST OPTION TEXT -->
            <p class="post-option-text">Comment</p>
            <!-- /POST OPTION TEXT -->
        </div>
        <!-- /POST OPTION -->

        <!-- POST OPTION -->
        <div class="post-option">
            <!-- POST OPTION ICON -->
            <svg class="post-option-icon icon-share">
                <use xlink:href="#svg-share"></use>
            </svg>
            <!-- /POST OPTION ICON -->

            <!-- POST OPTION TEXT -->
            <p class="post-option-text">Share</p>
            <!-- /POST OPTION TEXT -->
        </div>
        <!-- /POST OPTION -->
    </div>
    <!-- /POST OPTIONS -->
</div>
<!-- /WIDGET BOX --> --}}
