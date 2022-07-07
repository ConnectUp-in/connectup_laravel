<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- bootstrap 4.3.1 -->
    <link rel="stylesheet" href="css/vendor/bootstrap.min.css">
    <!-- styles -->
    <link rel="stylesheet" href="/assets/vikinger/css/styles.min.css">
    <!-- favicon -->
    <link rel="icon" href="/assets/vikinger/img/favicon.ico">
    <title>ConnectUp | Home</title>

    @yield('styles')
</head>

<body>

    @yield('content')

    <!-- app -->
    <script src="/assets/vikinger/js/utils/app.js"></script>
    <!-- XM_Plugins -->
    <script src="/assets/vikinger/js/vendor/xm_plugins.min.js"></script>
    <!-- form.utils -->
    <script src="/assets/vikinger/js/form/form.utils.js"></script>
    <!-- landing.tabs -->
    <script src="/assets/vikinger/js/landing/landing.tabs.js"></script>
    <!-- SVG icons -->
    <script src="/assets/vikinger/js/utils/svg-loader.js"></script>

    @yield('scripts')
</body>

</html>
