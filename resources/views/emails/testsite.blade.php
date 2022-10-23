@extends('emails.local')

@section('content')
    <h2>
        Hello {{ $name ?? 'Superpreneur' }},
    </h2>

    We are pleased to inform you that your application for the aforementioned position has been accepted for further round
    <br>
    <br>
    We'll notify you about the upcoming interaction round soon. Here's our <a href="https://connectup.in">platform</a> until
    then. As you are aware, since we have just recently started and the site is still being developed, there are tonnes of
    bugs. For the time being, all you need to do is visit our <a href="https://connectup.in">website</a>, browse through it,
    analyze it, and look for bugs, flaws, and ways to improve it.
    <br>
    <br>
    One more thing is something we'd like to know. When will you be able to participate in the remaining rounds, given that
    the holidays and festive season are already underway?
    <br>
    <br>
    Kindly reply to this email with your availability.
    <br>
    <br>
    Happy Hustling! <br>
    <b>Team ConnectUp</b>
@endsection
