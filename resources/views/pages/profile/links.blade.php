<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Links | {{ $user->name }} </title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background: #0d1117;
            font-family: "Rajdhani", sans-serif;
        }

        .container {
            width: 100%;
            margin: 3em auto;
            max-width: 500px;
            padding: 2em;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            gap: 1em;
        }

        .main_logo {
            width: 100px;
            height: 100px;
            border-radius: 20px
        }

        .page_title {
            font-size: 1.42em;
            font-weight: 600;
            color: #fff;
        }

        .socials {
            display: flex;
            gap: 1em;
        }

        .socials a {
            color: #fff;
            font-size: 1.42em;
        }

        .links {
            display: flex;
            flex-direction: column;
            gap: 1em;
            width: 100%;
            text-align: center;
        }

        .links a {
            color: #fff;
            font-size: 1.42em;
            text-decoration: none;
            background: #2c394d;
            width: 100%;
            padding: 0.5em;
            border-radius: 0.5em;
            font-weight: 400;
            transition: all 0.3s ease;
        }

        .links a:hover {
            background: #3c4b61;
        }
    </style>
    <!-- import fontawesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="container">
        <a href="https://connectup.in">
            <img src="{{ $user->profile_photo_path }} " class="main_logo" alt="ConnectUp" />
        </a>
        <span class="page_title">Links | {{ $user->name }}</span>

        <div class="socials">
            <a href="mailto:{{ $user->email }}">
                <i class="fas fa-envelope"></i>
            </a>

            @foreach ($user->socials as $social => $link)
                <a href="{{ $link }}">
                    <i class="fab fa-{{ $social }}"></i>
                </a>
            @endforeach
        </div>

        <div class="links">
            @foreach ($links as $link)
                <a href="{{ $link->link }}" target="_blank">{{ $link->title }}</a>
            @endforeach
        </div>
    </div>
</body>

</html>
