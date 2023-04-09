@extends('emails.local')

@section('content')
    <h2>
        Hello {{ $name ?? 'Superpreneur' }},
    </h2>
    Your application to join the organizing team for the ConnectUp Mega Event has been shortlisted! We were impressed with
    your response to the initial form and believe that your skills and experience will be valuable to our team.
    <br>
    <br>
    To help us learn more about your interests and background, we kindly request that you complete a short form. This will
    allow us to evaluate potential candidates and assign them to roles that best suit their skills and interests.
    <br>
    <br>
    Please complete the form by 10th of April at <a
        href="https://forms.gle/CvmEYYhTTzeLeZew5">https://forms.gle/CvmEYYhTTzeLeZew5</a>
    <br>
    <br>
    Thank you for your interest in the ConnectUp Mega Event. We look forward to working with you.
    <br>
    <br>
    Happy Hustling! <br>
    <b>Team ConnectUp</b>
@endsection
