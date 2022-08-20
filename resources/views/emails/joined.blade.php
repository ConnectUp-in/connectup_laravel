@extends('emails.layout')

@section('content')
    <h2>
        Hello Superpreneur,
    </h2>
    <a href="{{ shorten(url('/e/' . $username ?? 'abc')) }}">{{ $name ?? 'Entrepreneur' }}</a> joined using your refferal
    code.

    <br>
    <br>
    Happy Hustling, <br>
    <b>Team ConnectUp</b>
@endsection
