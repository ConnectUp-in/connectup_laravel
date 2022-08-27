<!-- POPUP BOX -->
<div class="popup-box large popup-avatar-upload">
    <!-- POPUP CLOSE BUTTON -->
    <div class="popup-close-button popup-avatar-upload-trigger">
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
            <form action="{{ route('profile.update') }}" method="POST" class="avataruploadform"
                enctype="multipart/form-data">
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
                            <a class="user-short-description-avatar user-avatar no-stats" href="#">
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
                                    href="#">{{ $user->name }}</a></p>
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


@push('styles')
    <style>
        .avatar-container {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin: 10px;
            width: 100%;
        }

        .avatar-item {
            width: calc(20% - 10px);
            border-radius: 5px;
            overflow: hidden;
            position: relative
        }

        /* Add overlay to .avatar-item.active */
        .avatar-item.active {
            border: 2px solid #fff;
        }

        #avatar-preview {
            width: 100%;
        }

        .avatar-item.active::after {
            content: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24'%3E%3Cpath fill='%23fff' d='M9 21.035l-9-8.638 2.791-2.87 6.156 5.874 12.21-12.436 2.843 2.817z'/%3E%3C/svg%3E");
            color: #fff;
            display: flex;
            font-size: 3em;
            align-items: center;
            justify-content: center;
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
        }

        .avatar-item img {
            width: 100%;
        }

        .popup-box .popup-box-body .popup-box-sidebar {
            width: 25%;
        }

        .popup-box .popup-box-body .popup-box-content {
            width: 70%;
        }



        @media (max-width: 768px) {
            .avatar-item {
                width: calc(25% - 10px);
            }

            .popup-box .popup-box-body {
                display: flex;
            }
        }

        @media (max-width: 576px) {


            .popup-box .popup-box-body {
                display: block;
            }

            .avataruploadform {

                display: flex;
                align-items: center;
                justify-content: center;
            }

            .popup-box .popup-box-body .popup-box-sidebar {
                width: 100%;
            }

            .popup-box .popup-box-body .popup-box-content {
                width: 100%;
            }
        }
    </style>
@endpush


@push('customscript')
    <script>
        $(document).ready(function() {

            $('.avatar-container .avatar-item').click(function() {
                $('.avatar-container .avatar-item').removeClass('active');
                $(this).addClass('active');
                $('#avatar-preview').attr('src', $(this).find('img').attr('src'));
                $('#profile_photo_path').val($(this).find('img').attr('src'));

            });

        });
    </script>
@endpush
