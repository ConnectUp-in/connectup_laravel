<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Dashboard - ConnectUp | Connecting the Dots...</title>
    <link href="/assets/admin/layouts/collapsible-menu/css/light/loader.css" rel="stylesheet" type="text/css" />
    <link href="/assets/admin/layouts/collapsible-menu/css/dark/loader.css" rel="stylesheet" type="text/css" />
    <script src="/assets/admin/layouts/collapsible-menu/loader.js"></script>




    <link rel="stylesheet" type="text/css"
        href="/assets/admin/src/plugins/css/light/table/datatable/dt-global_style.css">
    <link rel="stylesheet" type="text/css"
        href="/assets/admin/src/plugins/css/dark/table/datatable/dt-global_style.css">



    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="/assets/admin/src/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="/assets/admin/layouts/collapsible-menu/css/light/plugins.css" rel="stylesheet" type="text/css" />
    <link href="/assets/admin/layouts/collapsible-menu/css/dark/plugins.css" rel="stylesheet" type="text/css" />

    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
    <link href="/assets/admin/src/plugins/src/apex/apexcharts.css" rel="stylesheet" type="text/css">
    <link href="/assets/admin/src/assets/css/light/dashboard/dash_1.css" rel="stylesheet" type="text/css" />
    <link href="/assets/admin/src/assets/css/dark/dashboard/dash_1.css" rel="stylesheet" type="text/css" />
    <script src="https://kit.fontawesome.com/c5fe5e7547.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.13.6/css/selectize.css"
        integrity="sha512-6skR4yyaANUKXypVS+nB+HMmq8Xd17CSwFsBEHCRaa3UicPlksbwVtBTZl13Fea6zqsnnmqc7fRH97/M6JcwCA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Blogs -->
    <link rel="stylesheet" href="/assets/admin/src/plugins/src/filepond/filepond.min.css">
    <link rel="stylesheet" href="/assets/admin/src/plugins/src/filepond/FilePondPluginImagePreview.min.css">
    <link rel="stylesheet" type="text/css" href="/assets/admin/src/plugins/src/tagify/tagify.css">

    <link rel="stylesheet" type="text/css" href="/assets/admin/src/assets/css/light/forms/switches.css">
    <link rel="stylesheet" type="text/css" href="/assets/admin/src/plugins/css/light/editors/quill/quill.snow.css">
    <link rel="stylesheet" type="text/css" href="/assets/admin/src/plugins/css/light/tagify/custom-tagify.css">
    <link href="/assets/admin/src/plugins/css/light/filepond/custom-filepond.css" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" type="text/css" href="/assets/admin/src/assets/css/dark/forms/switches.css">
    <link rel="stylesheet" type="text/css" href="/assets/admin/src/plugins/css/dark/editors/quill/quill.snow.css">
    <link rel="stylesheet" type="text/css" href="/assets/admin/src/plugins/css/dark/tagify/custom-tagify.css">
    <link href="/assets/admin/src/plugins/css/dark/filepond/custom-filepond.css" rel="stylesheet" type="text/css" />
    <!-- Blogs -->





    <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->

    <link rel="icon" href="/assets/template/img/landing/favicon.png">

    <!-- BEGIN PAGE LEVEL STYLES -->
    <link rel="stylesheet" type="text/css" href="/assets/admin/src/plugins/src/table/datatable/datatables.css">


    @yield('styles')
</head>

<body class="layout-boxed alt-menu">
    <!-- BEGIN LOADER -->
    <div id="load_screen">
        <div class="loader">
            <div class="loader-content">
                <div class="spinner-grow align-self-center"></div>
            </div>
        </div>
    </div>
    <!--  END LOADER -->
    @import('admin.navbar')

    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container sidebar-closed sidebar-closed" id="container">

        <div class="overlay"></div>
        <div class="search-overlay"></div>

        @import("admin.sidebar")

        <!--  BEGIN CONTENT AREA  -->
        <div id="content" class="main-content">
            <div class="layout-px-spacing">
                @yield('content')

            </div>
            <!--  BEGIN FOOTER  -->
            <div class="footer-wrapper">
                <div class="footer-section f-section-1">
                    <p class="">Copyright © <span class="dynamic-year">2022</span> <a target="_blank"
                            href="https://designreset.com/cork-admin/">DesignReset</a>, All rights reserved.</p>
                </div>
                <div class="footer-section f-section-2">
                    <p class="">Coded with <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart">
                            <path
                                d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z">
                            </path>
                        </svg></p>
                </div>
            </div>
            <!--  END FOOTER  -->
        </div>
        <!--  END CONTENT AREA  -->

    </div>
    <!-- END MAIN CONTAINER -->

    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="/assets/admin/src/plugins/src/global/vendors.min.js"></script>
    <script src="/assets/admin/src/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/admin/src/plugins/src/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="/assets/admin/src/plugins/src/mousetrap/mousetrap.min.js"></script>
    <script src="/assets/admin/layouts/collapsible-menu/app.js"></script>
    <script src="/assets/admin/src/assets/js/custom.js"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
    <script src="/assets/admin/src/plugins/src/apex/apexcharts.min.js"></script>
    <script src="/assets/admin/src/assets/js/dashboard/dash_1.js"></script>



    <!-- blog -->

    <script src="/assets/admin/src/plugins/src/editors/quill/quill.js"></script>
    <script src="/assets/admin/src/plugins/src/filepond/filepond.min.js"></script>
    <script src="/assets/admin/src/plugins/src/filepond/FilePondPluginFileValidateType.min.js"></script>
    <script src="/assets/admin/src/plugins/src/filepond/FilePondPluginImageExifOrientation.min.js"></script>
    <script src="/assets/admin/src/plugins/src/filepond/FilePondPluginImagePreview.min.js"></script>
    <script src="/assets/admin/src/plugins/src/filepond/FilePondPluginImageCrop.min.js"></script>
    <script src="/assets/admin/src/plugins/src/filepond/FilePondPluginImageResize.min.js"></script>
    <script src="/assets/admin/src/plugins/src/filepond/FilePondPluginImageTransform.min.js"></script>
    <script src="/assets/admin/src/plugins/src/filepond/filepondPluginFileValidateSize.min.js"></script>

    <script src="/assets/admin/src/plugins/src/tagify/tagify.min.js"></script>

    <script src="/assets/admin/src/assets/js/apps/blog-create.js"></script>

    <!-- blog -->



    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
    <script src="/assets/admin/src/plugins/src/table/datatable/datatables.js"></script>
    <script>
        $('#zero-config').DataTable({
            "dom": "<'dt--top-section'<'row'<'col-12 col-sm-6 d-flex justify-content-sm-start justify-content-center'l><'col-12 col-sm-6 d-flex justify-content-sm-end justify-content-center mt-sm-0 mt-3'f>>>" +
                "<'table-responsive'tr>" +
                "<'dt--bottom-section d-sm-flex justify-content-sm-between text-center'<'dt--pages-count  mb-sm-0 mb-3'i><'dt--pagination'p>>",
            "oLanguage": {
                "oPaginate": {
                    "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>',
                    "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>'
                },
                "sInfo": "Showing page _PAGE_ of _PAGES_",
                "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
                "sSearchPlaceholder": "Search...",
                "sLengthMenu": "Results :  _MENU_",
            },
            "createdRow": function(row, data, dataIndex) {
                //  if row has class confirmed then add class bg-success-light
                if ($(row).hasClass('confirmed')) {
                    // background color as important
                    $(row).attr('style', 'background-color: #14ce8d !important');
                }

            },
            "stripeClasses": [],
            "lengthMenu": [7, 10, 20, 50],
            "pageLength": 100,
            "aaSorting": [],
        });
    </script>


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

            $('.single-select').selectize({
                placeholder: "Select your choice",
            });
            $('.multi-select').selectize({
                placeholder: "Search & Select",
                plugins: ["remove_button", "restore_on_backspace"],
            });

        });
    </script>
    @yield('scripts')


</body>

</html>
