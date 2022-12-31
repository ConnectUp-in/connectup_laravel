@extends('emails.local')

@section('content')
    <h2>
        Hello {{ $name ?? 'Superpreneur' }},
    </h2>
    Congratulations on being selected for the next round of our hiring process! In order to assess your skills and knowledge
    in graphic design, we would like you to complete a small assignment or task.
    <br><br>
    You have the option to choose from the following tasks:
    <br>
    <ul>
        <li>Create an Instagram Post for Republic Day</li>
        <li>Redesign UI for ConnectUp's Homepage</li>
        <li>Design a Poster for a Speaker Session/Webinar</li>
        <li>Redesign Logo of ConnectUp in Republic Day Theme</li>
        <li>Create an Illustration of a person or group representing Tech, Startup & Collaborations</li>
    </ul>
    <br>
    Please choose any two of the tasks above and complete it to the best of your ability. You should submit your task via
    email by 3rd Dec 2023 11:59 PM.
    <br><br>
    Do acknowledge this email and let us know which tasks you have chosen to complete.
    We look forward to reviewing your work and discussing your skills and knowledge further in the personal interview round.
    <br>
    <br>
    Happy Hustling! <br>
    <b>Team ConnectUp</b>
@endsection
