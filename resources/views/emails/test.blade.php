@extends('emails.layout')

@section('content')
    <h2>
        Hello {{ $name ?? 'Entrepreneur' }},
    </h2>
    Thank you for joining ConnectUp. <br>
    <br>
    We’d like to confirm that your account was created successfully. To access [customer portal] click the link below. <br>
    <br>
    [Link/Button] <br>
    <br>
    If you experience any issues logging into your account, reach out to us at [email address]. <br>
    <br>
    Best Regards, <br>
    <b>Team ConnectUp</b>
@endsection
