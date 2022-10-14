@extends('emails.local')

@section('content')
    <h2>
        Hello {{ $name ?? 'Superpreneur' }},
    </h2>

    Thank you for expressing an interest in becoming a member of Team ConnectUp. We would like to move forward with your
    application and encourage you to reserve a time slot on our calendar.
    <br>
    <br>
    Book your slot here: <a href="https://calendly.com/meinhoonharsh/team-interaction">
        https://calendly.com/meinhoonharsh/team-interaction</a>
    <br>
    <br>
    Kindly acknowledge by replying to this email.
    <br>
    <br>
    Happy Hustling! <br>
    <b>Team ConnectUp</b>
@endsection
