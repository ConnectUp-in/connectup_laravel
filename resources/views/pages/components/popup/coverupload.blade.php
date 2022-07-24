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

        <div class="dropzone">dsfsfsfsdfsf</div>

    </div>
    <!-- /POPUP BOX BODY -->
</div>
<!-- /POPUP BOX -->

@push('styles')
    <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />

    <style>
        .dropzone {
            border: 2px dashed #0087ff;
            border-radius: 5px;
            background: white;
            min-height: 200px;
            width: 100%;
            padding: 10px;
            text-align: center;
        }
    </style>
@endpush


@push('scripts')
    <script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>
    <script>
        // Dropzone has been added as a global variable.
        const dropzone = new Dropzone("div.dropzone", {
            url: "/file/post"
        });
    </script>
@endpush
