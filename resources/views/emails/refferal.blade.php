@extends('emails.layout')

@section('content')
    <h2>
        Hello Superpreneur,
    </h2>
    @if ($found)
        You've successfully applied refferal of <a
            href="{{ shorten(url('/e/' . $username ?? 'abc')) }}">{{ $name ?? 'Entrepreneur' }}</a>.
    @else
        Refferal Code you've used doesn't belong to any user.
    @endif
    <br>
    <br>
    Happy Hustling, <br>
    <b>Team ConnectUp</b>
@endsection
