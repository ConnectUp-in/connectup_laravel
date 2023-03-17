@extends('emails.local')

@section('content')
    <h2>
        Hello {{ $name ?? 'Superpreneur' }},
    </h2>
    We wanted to update you on the deadline for submitting your web development and design task as part of our hiring
    process.
    <br><br>
    After receiving feedback from some of you, we understand that many of you are currently in the midst of end semester
    exams and may not have had the time to complete and submit your task. In recognition of this, we are offering a flexible
    deadline for task submission.
    <br><br>
    Please reply to this email with the date and time by which you will be able to complete and submit your task. We want to
    make sure that you have the opportunity to showcase your skills and knowledge to the best of your ability, while also
    taking into account your exam schedule and other commitments.
    <br><br>
    If you have any questions or concerns, please do not hesitate to reach out to us. We are here to support you and ensure
    that you have a smooth and stress-free experience during this hiring process.
    <br>
    <br>
    Happy Hustling! <br>
    <b>Team ConnectUp</b>
@endsection
