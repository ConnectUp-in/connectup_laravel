@extends('emails.local')

@section('content')
    <h2>
        Hello {{ $name ?? 'Superpreneur' }},
    </h2>

    This is your final chance to complete the Round 1 Test as part of this hiring process. The deadline for
    submitting the test has been extended to 25th Dec 01:00 PM.
    <br><br>
    Please use the following link to access the test: <a href="https://connectup.in/join/team/dev/test">
        https://connectup.in/join/team/dev/test</a>. Failure to complete the test by the new deadline
    will result in your disqualification from this hiring process. We will not be able to offer any further extensions or
    opportunities.
    <br><br>
    We understand that unforeseen circumstances may have prevented you from completing the test on time. If you have any
    valid reasons for not being able to complete the test by the original deadline, please contact us as soon as possible to
    discuss your situation.
    <br><br>

    We appreciate your interest in joining our team and we encourage you to take advantage of this final opportunity to
    demonstrate your skills and knowledge in web development and design. <br>
    <br>
    Happy Hustling! <br>
    <b>Team ConnectUp</b>
@endsection
