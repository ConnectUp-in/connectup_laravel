{{-- Create a PDF Template for Successful Event Registrtion --}}
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style type="text/css">
        @font-face {
            font-family: 'fontawesome3';
            src: url('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/fonts/fontawesome-webfont.ttf?v=4.7.0') format('truetype');
            font-weight: normal;
            font-style: normal;
        }

        .fa3 {
            display: inline-block;
            font: normal normal normal 14px/1 fontawesome3;
            text-rendering: auto;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }
    </style>
    <style>
        * {
            font-family: DejaVu Sans;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background: #0a192f20;
            height: 100vh;
            padding: 30px;
        }

        .ticket {
            width: 100%;
            height: 300px;
            background: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        }

        .left {
            width: 65%;
            height: 100%;
            float: left;
        }

        .ticket-info {
            width: 85%;
            margin: 20px auto;
        }

        .date {
            width: 100%;
            padding: 5px 2px;
            padding-bottom: 0px;
            margin: 0 auto;
            border-top: 2px solid #000;
            border-bottom: 2px solid #000;
        }

        .date-left,
        .date-center,
        .date-right {
            display: inline-block;
            margin: 0px;

        }

        .date-left {
            text-align: left;
            width: 25%;
        }

        .date-center {
            text-align: center;
            width: 47%;
            font-size: 1.3em;
            font-weight: 700;
        }

        .date-right {
            text-align: right;
            width: 25%;
        }


        .ticket-body {
            height: 200px;
            width: 100%;
        }

        .ticket-id {
            width: 100%;
            border-top: 2px solid #000;
            text-align: center;
        }



        .right {
            width: 35%;
            height: 100%;
            float: left;
            border-left: 3px dashed #000;
            overflow: hidden;
        }

        .admit-one {
            position: absolute;
            color: darkgray;
            height: 300px;
            left: 5px;
            letter-spacing: 0.15em;
            writing-mode: vertical-rl;
            transform: rotate(-90deg);

        }

        .admit-one span:nth-child(2) {
            color: #000;
            font-weight: 700;
        }

        .right-info-container {
            width: calc(100% - 30px);
            height: 100%;
            margin-left: 40px;
            text-align: center;
        }

        .time {
            margin-bottom: 20px;
        }

        .copyright {
            font-size: 0.6em;
            text-align: center;
        }

        .congrats {
            margin-top: 20px;
        }


        .above-ticket {
            width: 90%;
            margin: 0 auto;
            margin-bottom: 30px;
        }

        .above-left {
            width: 60%;
            display: inline-block;
        }

        .above-right {
            width: 30%;
            float: right;
            text-align: right;
            display: inline-block;
        }
    </style>
</head>

<body>

    <div class="above-ticket">
        <div class="above-left">
            <h2>Here is your Ticket</h2>
            <p>Bring it at the event</p>


        </div>
        <div class="above-right">
            <img src="https://connectup.in/assets/template/img/landing/logo.png" alt="ConnectUp Logo" width="50px">
        </div>
    </div>

    @php
        $event_start_date = Carbon::parse($registration->event->e_dates[0]);
        $event_end_date = Carbon::parse($registration->event->e_dates[1]);
    @endphp

    <div class="ticket">
        <div class="left">
            <div class="ticket-info">
                <div class="date">
                    <div class="date-left">
                        {{ $event_start_date->format('l') }}
                    </div>
                    <div class="date-center">
                        {{ $event_start_date->format('M d') }}
                    </div>
                    <div class="date-right">
                        {{ $event_start_date->format('Y') }}
                    </div>
                </div>
                <div class="ticket-body">

                    <div class="name">
                        <h2>
                            {{ $registration->event->title }}
                        </h2>
                    </div>
                    <p class="info"> Issued to: <span class="info-content">
                            {{ $registration->user->name }}
                        </span> </p>
                    <p class="info"> Location: <span class="info-content">
                            {{ $registration->event->location }}

                        </span> </p>
                </div>
                <p class="ticket-id">
                    ID: <span class="ticket-id-content">{{ $registration->ticket_id }}</span>
                </p>
            </div>
        </div>
        <div class="right">
            <p class="admit-one">
                <span>ADMIT ONE</span>
                <span>ADMIT ONE</span>
                <span>ADMIT ONE</span>
            </p>
            <div class="right-info-container">
                <div class="congrats">
                    <h2>CONGRATS!!</h2>
                </div>
                <div class="time">
                    {{-- <p>7:00 PM - 10:00 PM</p> --}}
                    <p>{{ $event_start_date->format('h:i A') }} - {{ $event_end_date->format('h:i A') }}
                    </p>
                </div>
                <div class="barcode">

                    <img src="data:image/png;base64, {!! base64_encode(
                        QrCode::format('png')->size(150)->generate(route('event.verify', [$registration->event_id, $registration->ticket_id])),
                    ) !!} ">
                </div>
                <p class="ticket-number">
                    Scan me to Verify
                </p>
            </div>
        </div>
    </div>

    <p class="copyright">
        &copy; 2022 ConnectUp | All Rights Reserved - Ticket Generated at {{ date('d-m-Y h:i:s A') }}
    </p>



</body>

</html>
