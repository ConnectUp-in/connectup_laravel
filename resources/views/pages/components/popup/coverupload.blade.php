<!-- POPUP BOX -->
<div class="popup-box large popup-cover-upload">
    <!-- POPUP CLOSE BUTTON -->
    <div class="popup-close-button popup-cover-upload-trigger">
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
            <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
                @csrf
                {{-- <!-- USER PREVIEW -->
                <div class="user-preview small">
                    <!-- USER PREVIEW COVER -->
                    <figure class="user-preview-cover liquid">
                        <img src="{{ $user->cover_photo_path }}" alt="cover-29">
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
                                    <div class="hexagon-image-84-92" data-src="{{ $user->profile_photo_path }}"></div>
                                    <!-- /HEXAGON -->
                                </div>
                                <!-- /USER AVATAR CONTENT -->
                            </a>
                            <!-- /USER SHORT DESCRIPTION AVATAR -->

                            <!-- USER SHORT DESCRIPTION TITLE -->
                            <p class="user-short-description-title small"><a
                                    href="group-timeline.html">{{ $user->name }}</a></p>
                            <!-- /USER SHORT DESCRIPTION TITLE -->

                            <!-- USER SHORT DESCRIPTION TEXT -->
                            <p class="user-short-description-text regular">{{ '@' . $user->username }}</p>
                            <!-- /USER SHORT DESCRIPTION TEXT -->
                        </div>
                        <!-- /USER SHORT DESCRIPTION -->
                    </div>
                    <!-- /USER PREVIEW INFO -->
                </div>
                <!-- /USER PREVIEW --> --}}


                {{-- <span class="m-1">
                    <h4>Choose Avatar</h4>
                </span> --}}


                <!-- SIDEBAR MENU ITEM -->
                <div class="sidebar-menu-item">
                    <img id="avatar-preview" src="{{ $user->profile_photo_path }}" class="img-fluid" alt="profile">
                    <input type="hidden" name="profile_photo_path" id="profile_photo_path"
                        value="{{ $user->profile_photo_path }}">
                </div>
                <!-- /SIDEBAR MENU ITEM -->

                <!-- POPUP BOX SIDEBAR FOOTER -->
                <div class="popup-box-sidebar-footer">
                    <!-- BUTTON -->
                    <button type="submit" class="button secondary ">Update
                        Avatar</button>
                    <!-- /BUTTON -->

                    <!-- BUTTON -->
                    <p class="button white full popup-manage-group-trigger">Discard All</p>
                    <!-- /BUTTON -->
                </div>
                <!-- /POPUP BOX SIDEBAR FOOTER -->


            </form>

        </div>
        <!-- /POPUP BOX SIDEBAR -->

        <!-- POPUP BOX CONTENT -->
        <div class="popup-box-content">
            <div class="avatar-container">

                <div class="avatar-item active">
                    <img src="{{ $user->profile_photo_path }}" class="img-fluid" alt="profile">
                </div>
                @for ($i = 0; $i < 14; $i++)
                    <div class="avatar-item ">
                        <img src="/assets/custom/img/avatars/{{ $i + 1 }}.jpg" class="img-fluid" alt="profile">
                    </div>
                @endfor
            </div>

        </div>
        <!-- /POPUP BOX CONTENT -->
    </div>
    <!-- /POPUP BOX BODY -->
</div>
<!-- /POPUP BOX -->
