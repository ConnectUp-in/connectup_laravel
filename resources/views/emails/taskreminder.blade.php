@extends('emails.local')

@section('content')
    <h2>
        Hello {{ $name ?? 'Superpreneur' }},
    </h2>
    This is a reminder that the deadline to submit your web development and design task is fast approaching. Please make
    sure to complete and submit your task by 30th Dec 2022 11:59 PM to be considered for the next round of our hiring
    process.
    <br><br>
    Do acknowledge this email and let us know which tasks you have chosen to complete.
    If you have any questions or issues with submitting your task, please do not hesitate to reach out to us. We are here to
    support you and ensure that you have the opportunity to showcase your skills and knowledge.
    <br><br>
    We look forward to reviewing your work and discussing it further in the personal interview round.<br>
    <br>
    Happy Hustling! <br>
    <b>Team ConnectUp</b>
@endsection
