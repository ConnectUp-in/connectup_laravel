@extends('emails.layout')

@section('content')
    <h2>
        Hello {{ $name ?? 'Entrepreneur' }},
    </h2>
    Thank you for joining ConnectUp. <br>
    <br>
    Best Regards, <br>
    <b>Team ConnectUp</b>
@endsection
