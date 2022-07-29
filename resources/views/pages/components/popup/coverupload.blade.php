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

        <div class="container">
            <div class="my-3 w-100 preview-container">
                <img id="preview_cover" src="{{ $user->cover_photo_path }}" alt="" style="width: 100%">
            </div>
            <div>
                <label class="droparea" for="upload_cover">
                    Select a file
                </label>

                <div class="cropper-container">

                    <div id="image_demo"></div>
                </div>
                <div class="button-container">
                    <div>
                        <form action="{{ route('profile.update.cover') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <!-- Limit only Image File -->
                            {{-- <input type="file" name="abc" id=""> --}}
                            <input type="file" id="upload_cover" name="upload_cover" accept="image/*">
                            <input type="hidden" name="cover_photo_path" id="cover_photo_path">
                            <button class="button secondary" type="button" id="crop_button">Crop</button>
                            <button class="button primary" type="submit" id="upload_button">Upload</button>

                        </form>
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
        }

        .droparea {
            margin: 1em 2em;
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

        input[name="upload_cover"] {
            display: none;
        }

        .cropper-container {
            width: 100%;
            height: 100%;
        }

        .button-container {
            display: none;
            margin-bottom: 1em;
        }

        .button-container>div>form {
            display: flex;
            justify-content: center;
        }

        .button-container>div button {
            margin: 0 1em;
            width: fit-content;
            padding: 0 20px;
            min-width: 100px;
        }

        #upload_button {
            display: none;
        }
    </style>
@endpush


@push('scripts')
    {{-- Import CroppieJS --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.4/croppie.min.js"></script>

    <script>
        $(document).ready(function() {

            const config = {
                enableExif: true,
                viewport: {
                    width: 600,
                    height: 150,
                    type: 'square'
                },
                boundary: {
                    width: 800,
                    height: 400
                }
            }

            $('input[type="file"]').change(function() {
                var file = this.files[0];
                var reader = new FileReader();
                $crop = $('#image_demo').croppie(config);
                reader.onload = function(event) {
                    $('.droparea').hide();
                    $('.button-container').show();
                    $crop.croppie('bind', {
                        url: event.target.result
                    }).then(function() {
                        $('#submitbtn').removeClass('btn-primary').addClass('btn-dark').prop(
                            'disabled', true);
                    });
                }
                reader.readAsDataURL(file);


                $('#crop_button').click(function() {
                    $crop.croppie('result', {
                        type: 'canvas',
                        size: 'original'
                    }).then(function(response) {
                        $('#preview_cover').attr('src', response);
                        $('#cover_photo_path').val(response);
                        $('#upload_button').show();
                        $('#crop_button').hide();
                        $('#image_demo').hide();
                        $('.preview-container').show();
                    });
                });

            });
        });
    </script>
@endpush
