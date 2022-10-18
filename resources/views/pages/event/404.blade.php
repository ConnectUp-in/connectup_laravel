@php
    $page['title'] = 'Oops 404 | Event Not Found | ConnectUp';
    $page['image'] = url('assets/default/events/404.jpg');
    
@endphp

@extends('layouts/app')


@section('content')
    <!-- CONTENT GRID -->
    <div class="content-grid">


        <!-- GRID -->
        <div class="grid grid-9-3 mobile-prefer-content">
            <!-- GRID COLUMN -->
            <div class="grid-column">



                <article class="post-open event">

                    <!-- POST OPEN BODY -->
                    <div class="post-open-body">
                        <!-- POST OPEN HEADING -->
                        <div class="post-open-heading">
                            <!-- POST OPEN TITLE -->
                            <h2 class="post-open-title">
                                OOOPS 404 | Event Not Found
                            </h2>
                            <!-- /POST OPEN TITLE -->

                            <p class="post-open-timestamp mt-4">
                                <span>
                                    <span class="highlighted">
                                        <i class="fas fa-map-marker-alt"></i>
                                    </span>
                                    Bermuda Triangle
                                </span>
                                <span class="float-right">
                                    <i class="fas fa-eye"></i>
                                    <span class="highlighted">
                                        404
                                    </span>
                                </span>
                            </p>
                        </div>
                        <!-- /POST OPEN HEADING -->

                        <img class="post-open-image mt-4" src="/assets/defaults/events/404.jpg" alt="Event Not Found"
                            onerror="this.style.display='none'">


                    </div>
                    <!-- /POST OPEN BODY -->
                </article>

            </div>
            <!-- /GRID COLUMN -->


            <!-- GRID COLUMN -->
            <div class="grid-column">
                @widget('statbox')
                {{-- @widget('refferal') --}}
            </div>
            <!-- /GRID COLUMN -->
        </div>
        <!-- /GRID -->
    </div>
    <!-- /CONTENT GRID -->



    <!-- POPUP EVENT -->
    <div class="popup-event popup-event-information">
        <!-- POPUP CLOSE BUTTON -->
        <div class="popup-close-button popup-event-information-trigger">
            <!-- POPUP CLOSE BUTTON ICON -->
            <svg class="popup-close-button-icon icon-cross">
                <use xlink:href="#svg-cross"></use>
            </svg>
            <!-- /POPUP CLOSE BUTTON ICON -->
        </div>
        <!-- /POPUP CLOSE BUTTON -->
    @endsection



    @push('styles')
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.13.6/css/selectize.css"
            integrity="sha512-6skR4yyaANUKXypVS+nB+HMmq8Xd17CSwFsBEHCRaa3UicPlksbwVtBTZl13Fea6zqsnnmqc7fRH97/M6JcwCA=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
        <style>
            .selectize-input {
                background-color: #1d2333 !important;
                border: 1px solid #3f485f;
                color: #fff;
                transition: border-color 0.2s ease-in-out;
                width: 100%;
                border-radius: 12px;
                font-size: 0.875rem;
                font-weight: 700;
                height: 48px;
                padding: 0 18px;
                display: flex;
                align-items: center;
                justify-content: flex-start;

            }

            .selectize-input,
            .selectize-control.single .selectize-input.input-active {
                display: flex;
            }

            .selectize-input,
            .selectize-control.single .selectize-input.input-active {
                border-radius: 12px;
            }

            .selectize-dropdown-content {

                background-color: #1d2333 !important;
                color: #fff;
                transition: border-color 0.2s ease-in-out;
                width: 100%;
                font-size: 0.875rem;
                font-weight: 700;
            }

            /* add custom scrollbar*/
            .selectize-dropdown-content::-webkit-scrollbar {
                width: 0px;
                background: transparent;
            }

            .selectize-dropdown {
                background: transparent;
                outline: none;
                border: none;
            }

            .selectize-control.multi .selectize-input>div {
                margin: 0px 5px 5px 0;
                padding: 5px 10px;
                background: #f2f2f233;
                color: #fffc;
                border-radius: 5px;
            }

            .selectize-control.multi .selectize-input.has-items {
                flex-wrap: wrap;
                height: auto;
            }

            .selectize-input.has-items>input {
                color: #fffc;
            }

            .selectize-control.single .selectize-input.input-active,
            .selectize-control.single .selectize-input.input-active input {
                color: #fffc;
            }


            input.is-valid {
                border-color: #28a745 !important;
            }

            input.is-invalid {
                border-color: #dc3545 !important;
            }

            #submitbutton[disabled] {
                background-color: #1d2333 !important;
                cursor: not-allowed;
                box-shadow: none;
                color: #fff !important;
            }

            .form-select-title {
                font-size: 0.875rem;
                font-weight: 500;
                color: #fffc;
                margin-bottom: 0.5rem;
                margin-left: 10px
            }

            .nogap+.nogap {
                margin-top: 15px;
            }

            .form-select {
                height: auto;
            }
        </style>



        {{-- Import Croppie css --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.4/croppie.min.css" />
        <style>
            .preview-container {
                display: none;
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

            .logo_button-container>div {
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
            #cover_change_image,
            input[name="upload_cover"],
            #logo_recrop_button,
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

            .up-title {
                font-size: 1.5rem;
                font-weight: 500;
                color: #fffc;
                margin-bottom: 0.5rem;
                margin-left: 10px
            }

            .loader-container {
                margin-top: 2em;
                display: none;
            }

            .hidden {
                display: none;
            }

            .post-open-image {
                width: 100%
            }

            .post-content * {
                color: #fffe !important;
                font-size: 18px;
                word-spacing: 0.3em;
                font-family: Rajdhani, sans-serif !important;
            }


            .post-content p {
                line-height: 1.3em !important;
                margin-bottom: 1em;
            }

            .post-content ol,
            .post-content ul {
                list-style: inside circle !important;
            }
        </style>
    @endpush

    @section('scripts')
    @endsection

    @push('scripts')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sifter/0.5.4/sifter.min.js"
            integrity="sha512-B60IUvYpG4cibCeQ30J8k/+qtN+fxKAIENb3DL2DVdzIt76IDIynAt92chPEwlCuKejOt//+OZL61i1xsvCIDQ=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/microplugin/0.0.3/microplugin.min.js"
            integrity="sha512-7amIsiQ/hxbdPNawBZwmWBWPiwQRNEJlxTj6eVO+xmWd71fs79Iydr4rYARHwDf0rKHpysFxWbj64fjPRHbqfA=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.13.6/js/selectize.min.js"
            integrity="sha512-DBOconMAY06o4R79zeXKKM3h/g5pca647Eabb+6viK4dRpiMOlZFS4gsbukTbHo+ppdKx4yr+/0m2JnpeAIrSw=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script>
            $(document).ready(function() {

                $('#academic_background').selectize({
                    placeholder: "Select Academic Background",
                });
                $('#country').selectize({
                    placeholder: "Select your Country",
                });
                $('#graduation_year').selectize({
                    placeholder: "Select Graduation Year",
                });
                $('#interests').selectize({
                    placeholder: "Select your Interests",
                    plugins: ["remove_button", "restore_on_backspace"],
                });


                $("#college").selectize({
                    valueField: "id",
                    labelField: "name",
                    searchField: "name",
                    create: false,
                    placeholder: "Select your Institute",
                    render: {
                        option: function(item, escape) {
                            console.log(item);
                            return (
                                `
                            <div class="option" data-selectable="" data-value="${item.id}">${item.name}</div>
                            `
                            );
                        },
                    },
                    load: function(query, callback) {
                        if (!query.length) return callback();
                        $.ajax({
                            url: "/api/search/college/" + encodeURIComponent(
                                query),
                            type: "GET",
                            error: function() {
                                callback();
                            },
                            success: function(res) {
                                console.log(res);
                                callback(res.slice(0, 10));
                            },
                        });
                    },
                });


                // on profile-update form submit
                $("#profile").submit(function(e) {
                    $(".loader-container").show();
                    $('.user-info').hide();
                    e.preventDefault();
                    var form = $(this);
                    var formData = new FormData(this);
                    $.ajax({
                        url: form.attr("action"),
                        type: form.attr("method"),
                        data: formData,
                        contentType: false,
                        cache: false,
                        processData: false,
                        success: function(data) {
                            console.log(data);
                            if (data.success) {
                                $(".loader-container").hide();
                                $('.user-registration').show();
                                toastr.success(data.message);
                            } else {
                                $(".loader-container").hide();
                                $('.user-info').show();
                                toastr.error(data.message);
                            }
                        },
                        error: function(data) {
                            console.log(data);
                            $(".loader-container").hide();
                            $('.user-info').show();
                            toastr.error(data.message);
                        }

                    });
                });


            });
        </script>

        <script src="https://cdn.jsdelivr.net/npm/party-js@latest/bundle/party.min.js"></script>
        <script></script>
    @endpush
