<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Push Notifications Test</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">

</head>

<body class="antialiased">

    <form action="/test" method="POST">
        @csrf
        <input type="text" name="title" placeholder="Title">
        <input type="submit" value="Send">
    </form>

    <script>
        // Ask Permission for Push Notifications
        Notification.requestPermission().then(function(result) {
            console.log(result);
        });
    </script>

</body>

</html>
