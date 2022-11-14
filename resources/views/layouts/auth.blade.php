<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- bootstrap 4.3.1 -->
    <link rel="stylesheet" href="css/vendor/bootstrap.min.css">
    <!-- styles -->
    <link rel="stylesheet" href="/assets/template/css/styles.min.css">
    <!-- favicon -->
    <link rel="icon" href="/assets/template/img/landing/favicon.png">
    <title>ConnectUp | Home</title>
    @include('layouts.partials.meta')


    {{-- Import fontawesome --}}
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">


    <style>
        .w-100 {
            width: 100%;
        }
    </style>

    @yield('styles')

</head>

<body>

    @yield('content')

    <!-- app -->
    <script src="/assets/template/js/utils/app.js"></script>
    <!-- page loader -->
    <script src="/assets/template/js/utils/page-loader.js"></script>
    <!-- simplebar -->
    <script src="/assets/template/js/vendor/simplebar.min.js"></script>
    <!-- liquidify -->
    <script src="/assets/template/js/utils/liquidify.js"></script>
    <!-- XM_Plugins -->
    <script src="/assets/template/js/vendor/xm_plugins.min.js"></script>
    <!-- tiny-slider -->
    <script src="/assets/template/js/vendor/tiny-slider.min.js"></script>
    <!-- chartJS -->
    <script src="/assets/template/js/vendor/Chart.bundle.min.js"></script>
    <!-- global.hexagons -->
    <script src="/assets/template/js/global/global.hexagons.js"></script>
    <!-- global.tooltips -->
    <script src="/assets/template/js/global/global.tooltips.js"></script>
    <!-- global.popups -->
    <script src="/assets/template/js/global/global.popups.js"></script>
    <!-- global.charts -->
    <script src="/assets/template/js/global/global.charts.js"></script>
    <!-- global.accordion -->
    <script src="/assets/template/js/global/global.accordions.js"></script>
    <!-- header -->
    <script src="/assets/template/js/header/header.js"></script>
    <!-- sidebar -->
    <script src="/assets/template/js/sidebar/sidebar.js"></script>
    <!-- content -->
    <script src="/assets/template/js/content/content.js"></script>
    <!-- form.utils -->
    <script src="/assets/template/js/form/form.utils.js"></script>
    <!-- landing.tabs -->
    <script src="/assets/template/js/landing/landing.tabs.js"></script>
    <!-- SVG icons -->
    <script src="/assets/template/js/utils/svg-loader.js"></script>

    @yield('scripts')
</body>

</html>
