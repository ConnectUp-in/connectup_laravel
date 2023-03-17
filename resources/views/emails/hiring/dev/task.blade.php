@extends('emails.local')

@section('content')
    <h2>
        Hello {{ $name ?? 'Superpreneur' }},
    </h2>
    Congratulations on being selected for the next round of our hiring process! In order to assess your skills and knowledge
    in web development and design, we would like you to complete a small assignment or task.
    <br><br>
    You have the option to choose from the following tasks:
    <br>
    <ul>
        <li>Create Landing Page of a Event Listing Platform</li>
        <li>Create Landing Page for a Job portal</li>
        <li>Design Web Page for Campus Ambassador Program</li>
        <li>Create a Search Result Page listing Events, Jobs, Blogs, Startups, Programmes, Offers etc.</li>
        <li>Redesign the ConnectUp Website Homepage</li>
    </ul>
    <br>
    Please choose any two of the tasks above and complete it to the best of your ability. You should submit your task via
    email by 4th Jan 2023 11:59 PM.
    <br><br>
    Do acknowledge this email and let us know which tasks you have chosen to complete.
    We look forward to reviewing your work and discussing your skills and knowledge further in the personal interview round.
    <br>
    <br>
    Happy Hustling! <br>
    <b>Team ConnectUp</b>
@endsection
