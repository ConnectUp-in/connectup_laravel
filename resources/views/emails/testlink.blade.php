@extends('emails.local')

@section('content')
    <h2>
        Hello {{ $name ?? 'Superpreneur' }},
    </h2>

    Congratulations on being selected for the next stage of our hiring process! We are excited to have you join us as
    we continue to grow and expand our team.
    <br>
    <br>
    As part of this process, we would like you to complete a test through the following link: <a
        href="https://connectup.in/join/team/dev/test"> https://connectup.in/join/team/dev/test</a>. Please
    make sure to complete this test before the deadline of 25th Dec 11:59 PM. This test will help us evaluate your skills
    and abilities, and is an important part of our selection process.
    <br>
    <br>
    In addition to completing the test, we encourage you to try out our <a href="https://connectup.in/">platform</a> and
    follow us on social media (<a href="https://linkedin.com/company/connectupin">LinkedIn</a> & <a
        href="https://instagram.com/connectup.in">Instagram</a>) to get a
    better understanding of our company and culture.
    <br>
    <br>
    Thank you for your time and effort in this process, and we look forward to seeing your test results.
    <br>
    <br>
    Happy Hustling! <br>
    <b>Team ConnectUp</b>
@endsection
