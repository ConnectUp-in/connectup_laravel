@extends('emails.layout')

@section('content')
    <h3>Hi {{ $user->name ?? 'Entrepreneur' }},</h3>

    Your ticket for <b> <a href="{{ route('event', $event->slug) }}">{{ $event->title }}</a> </b> has been confirmed. <br>
    For Reference, your ticket id is <b>{{ $registration->ticket_id }}</b>. <br>

    <center>
        <h3> Here's your ticket </h3>
        <span> Bring this ticket to the event. </span>
        <br>
        <img src="{{ url('/assets/defauls/dummyticket.png') }}" alt="ticket">
        <br>
        <span> Ticket is attached below. </span>

    </center>


    Enjoy the event! <br>
    <br>
    Best Regards, <br>
    <b>Team ConnectUp</b>
@endsection
