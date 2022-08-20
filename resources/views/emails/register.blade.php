@extends('emails.layout')

@section('content')
    <h2>
        Hello {{ $name ?? 'Entrepreneur' }},
    </h2>
    Thank you for joining ConnectUp. <br>
    We are excited to have you at our network and we look forward to connecting with you and developing startup and
    entrepreneurship ecosystem in India.<br>
    <br>
    Your Refferal Code is <b>{{ $invite_refferal ?? 'Oops, Unable to create' }}</b>.<br>
    You can manage your Refferals <a href="{{ route('profile.refferals') }}">here</a>.<br>


    <br>
    Happy Hustling, <br>
    <b>Team ConnectUp</b>
@endsection
