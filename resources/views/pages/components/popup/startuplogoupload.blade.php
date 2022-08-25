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
        <div class="container" id="coveruploadbody">

            <div>
                <p class="up-title">Select Logo</p>

                <label class="droparea logo_droparea" for="upload_logo">
                    Select a file to upload Logo
                </label>

                <div class="cropper-container logo_cropper-container">

                    <div id="logo_cropper"></div>
                </div>

                <div class="logo_pb_container">

                    <div class="preview-container logo_preview-container">
                        <img id="preview_logo" src="" alt="">
                    </div>
                    <div class="button-container logo_button-container">
                        <div>

                            <form action="{{ route('startup.update.cover', $startup->id) }}" method="POST"
                                enctype="multipart/form-data">

                                @csrf
                                <!-- Limit only Image File -->
                                {{-- <input type="file" name="abc" id=""> --}}
                                <input type="file" id="upload_logo" name="upload_logo" accept="image/*">
                                <input type="hidden" name="logo" id="logo">
                                <button class="button secondary" type="button" id="logo_crop_button">Crop</button>
                                <button class="button secondary" type="submit" id="logo_upload_button">Upload</button>
                                <button class="button white" type="button" id="logo_recrop_button">ReCrop</button>
                                <button class="button white" type="button" id="logo_change_image">Change
                                    <span class="hide-text-mobile">Image</span></button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- /POPUP BOX BODY -->
</div>
<!-- /POPUP BOX -->


@push('styles')
    {{-- Import Croppie css --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.4/croppie.min.css" />
    <style>
        .preview-container {
            display: none;
            margin: 1em;
        }

        .logo_preview-container {
            max-width: 240px;
        }

        .preview-container img {
            width: 100%;
            height: auto;
        }

        .droparea {
            margin: 0.5em 0.5em;
            padding: 2em;
            /* width: 100%; */
            box-sizing: border-box;
            min-height: 100px;
            border: 3px dashed #fff5;
            border-radius: 10px;
            font-size: 2em;
            color: #fff9;
            text-align: center;
        }

        .cropper-container {
            width: 100%;
            height: 100%;
            margin-top: 1em;
        }

        .button-container {
            display: none;
            margin-bottom: 1em;
        }

        .button-container>div {
            display: flex;
            justify-content: center;
        }

        .logo_button-container>div>form {
            display: flex;
            flex-direction: column;
            gap: 0.6em;
        }


        .logo_pb_container {
            display: flex;
            gap: 1em;
            justify-content: center;

        }

        .button-container>div button {
            margin: 0 1em;
            width: fit-content;
            padding: 0 20px;
            min-width: 100px;
        }

        .logo_button-container>div button {
            width: initial !important;
        }

        #cover_recrop_button,
        #cover_upload_button,
        #cover_change_image,
        input[name="upload_cover"],
        #logo_recrop_button,
        #logo_upload_button,
        #logo_change_image,
        input[name="upload_logo"] {
            display: none;
        }



        @media (max-width: 768px) {
            .droparea {
                margin: 1em 1em;
            }
        }

        @media (max-width: 576px) {
            .droparea {
                margin: 1em 0.5em;
                padding: 1em;
            }
        }

        .form-select-title {
            font-size: 0.875rem;
            font-weight: 500;
            color: #fffc;
            margin: 0.5em;
        }


        .up-title {
            font-size: 1.5rem;
            font-weight: 500;
            color: #fffc;
            margin-top: 1em;
            margin-left: 1em
        }
    </style>
@endpush


@push('scripts')
    {{-- Import CroppieJS --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.4/croppie.min.js"></script>

    <script>
        $(document).ready(function() {

            $('input[name="upload_logo"]').change(function() {
                console.log('Image Selected or Changed');




                const bodywidth = $('#coveruploadbody').width();
                const width = bodywidth * 0.9;
                const config = {
                    enableExif: true,
                    viewport: {
                        width: width / 2,
                        height: width / 2,
                        type: 'square'
                    },
                    boundary: {
                        width: width * 1.06,
                        height: width / 2
                    }
                }



                var file = this.files[0];
                var reader = new FileReader();
                $('#logo_cropper').croppie('destroy');
                $logo_crop = $('#logo_cropper').croppie(config);
                reader.onload = function(event) {
                    $('.logo_droparea').hide();
                    $('.logo_button-container').show();

                    $('#logo_recrop_button').hide();
                    $('#logo_upload_button').hide();
                    $('#logo_change_image').hide();
                    $('#logo_crop_button').show();
                    $('#logo_cropper').show();
                    $('.logo_preview-container').hide();
                    $logo_crop.croppie('bind', {
                        url: event.target.result
                    }).then(function() {
                        // $('#submitbtn').removeClass('btn-primary').addClass('btn-dark').prop(
                        //     'disabled', true);
                    });
                }
                reader.readAsDataURL(file);


                $('#logo_crop_button').click(function() {
                    console.log('Crop Button clicked');
                    $logo_crop.croppie('result', {
                        type: 'canvas',
                        size: 'original'
                    }).then(function(response) {
                        console.log(response);
                        $('#preview_logo').attr('src', response);

                        $('#logo').val(response);
                        $('#logo_recrop_button').show();
                        $('#logo_upload_button').show();
                        $('#logo_change_image').show();
                        $('#logo_crop_button').hide();
                        $('#logo_cropper').hide();
                        $('.logo_preview-container').show();
                    });
                });

                $('#logo_change_image').click(function() {
                    $('input[name="upload_logo"]').click();
                })

                $('#logo_recrop_button').click(function() {
                    $('#logo_cropper').show();
                    $('.logo_preview-container').hide();
                    $('#logo_recrop_button').hide();
                    $('#logo_upload_button').hide();
                    $('#logo_change_image').hide();
                    $('#logo_crop_button').show();
                });

            });

        });
    </script>
@endpush
