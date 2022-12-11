@php
    $page['title'] = 'Ecell Partnership Program | ConnectUp ...';
@endphp

@extends('layouts/app')

@section('styles')
    <!-- toasterjs css from cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.13.6/css/selectize.css"
        integrity="sha512-6skR4yyaANUKXypVS+nB+HMmq8Xd17CSwFsBEHCRaa3UicPlksbwVtBTZl13Fea6zqsnnmqc7fRH97/M6JcwCA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        .selectize-input {
            background-color: #1d2333 !important;
            border: 1px solid #3f485f;
            color: #fff;
            transition: border-color 0.2s ease-in-out;
            width: 100%;
            border-radius: 12px;
            font-size: 0.875rem;
            font-weight: 700;
            height: 48px;
            padding: 0 18px;
            display: flex;
            align-items: center;
            justify-content: flex-start;
            font-family: 'RAJDHANI';
        }

        .selectize-input,
        .selectize-control.single .selectize-input.input-active {
            display: flex;
        }

        .selectize-input,
        .selectize-control.single .selectize-input.input-active {
            border-radius: 12px;
        }

        .selectize-dropdown-content {
            background-color: #1d2333 !important;
            color: #fff;
            transition: border-color 0.2s ease-in-out;
            width: 100%;
            font-size: 0.875rem;
            font-weight: 700;
            font-family: 'RAJDHANI';
        }

        /* add custom scrollbar*/
        .selectize-dropdown-content::-webkit-scrollbar {
            width: 0px;
            background: transparent;
        }

        .selectize-dropdown {
            background: transparent;
            outline: none;
            border: none;
        }

        .selectize-control.multi .selectize-input>div {
            margin: 0px 5px 5px 0;
            padding: 5px 10px;
            background: #f2f2f233;
            color: #fffc;
            border-radius: 5px;
            font-family: 'RAJDHANI';
        }

        .selectize-control.multi .selectize-input.has-items {
            flex-wrap: wrap;
            height: auto;
        }

        .selectize-input.has-items>input {
            color: #fffc;
        }

        .selectize-control.single .selectize-input.input-active,
        .selectize-control.single .selectize-input.input-active input {
            color: #fffc;
        }


        input.is-valid {
            border-color: #28a745 !important;
        }

        input.is-invalid {
            border-color: #dc3545 !important;
        }

        #submitbutton[disabled] {
            background-color: #1d2333 !important;
            cursor: not-allowed;
            box-shadow: none;
            color: #fff !important;
        }
    </style>
    <style>
        .toast-warning {
            background-color: #e6d21e;
            font-family: 'RAJDHANI';
            color: #000;
        }

        .founder,
        .nofounder {
            margin: 1em 0;
        }

        .founder {
            display: none;
        }

        form {
            margin-top: 0 !important;
        }

        .landing {
            overflow-y: auto;
            overflow-x: hidden;

        }

        .hidden {
            display: none;
        }

        .overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.3);
            z-index: 0;
        }

        @media screen and (max-width: 1365px) {
            .overlay {
                display: none;
            }
        }

        .form-box-title a {
            color: #23D2E2;
            transition: 0.1s ease;
        }

        .form-box-title a:hover {
            transform: translateY(-5px);
        }

        .button-holder {
            position: relative;
            display: flex;
            justify-content: center;
            gap: 10px;
            margin-top: 1.2em;
        }

        .download-button {
            background: #23D2E2;
            width: fit-content;
            padding: 0 20px;
        }

        .download-button:hover {
            background: #1ca8b5;
        }

        .card-share-dropdown-trigger {
            color: #fff;
            font-size: 1.5rem;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .info-box {
            width: auto;
        }
    </style>
@endsection

@section('content')
    <style>
        .content-grid{
            /* background: #1d2333; */
        }
        .content {
            min-height: 100vh;
            display: flex;
            justify-content: flex-start;
            flex-direction: column;
            max-width: 650px;
            margin: 60px 100px;
        }
        .content .info h2 {

            font-size: 55px;
            text-transform: uppercase;
            font-weight: 800;
            letter-spacing: 2px;
            line-height: 60px;
            margin-bottom: 30px;
        }
        .content .info h2 span {
            font-size: 50px;
            font-weight: 600;
        }
        .content .info p {
            font-size: 16px;
            font-weight: 500;
            margin-bottom: 40px;
        }
        .content .info-btn {

        }
    </style>
    <!-- CONTENT GRID -->
    <div class="content-grid">
        <!-- GRID -->
        <div class="row justify-content-md-center">
            <div class="content">
                <div class="info">
                    <h2>Join Us <br><span>Let's Grow Together!</span></h2>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laborum facere, expedita consequuntur aliquid iste perferendis repellat dolores consequatur porro amet quaerat. Maiores possimus id fugiat iste ipsa nostrum accusamus iure quo soluta. Molestiae saepe ex perferendis maxime aut assumenda ea exercitationem, maiores architecto quod veritatis, dolorum natus voluptate reiciendis tempore non a, est molestias eius. Ab quod consequatur id, consectetur recusandae totam voluptate, maiores nemo magnam quaerat odio! Dolore aliquam, quam sequi voluptatem voluptas quo quae similique totam alias reprehenderit assumenda voluptatum cupiditate? Maiores iusto voluptas itaque, praesentium consequuntur nemo sed in sit ab numquam deserunt mollitia accusantium velit modi.</p>
                    <a href="#" class="info-btn">More Info</a>
                </div>
            </div>
            <div class="w-100"></div>
            <!-- GRID COLUMN -->
            <div class="col"></div>
            <div class="col">
                    <!-- FORM -->
                    <form class="form d-flex align-items-center w-1000" action="/join/register" enctype="multipart/form-data" method="POST">
                    @csrf
                    <div class="form-box login-register-form-element" style="transform: translate(0px, 0px); opacity: 1; visibility: visible; z-index: 1; position: static; left: 0px; transition: none 0s ease 0s; display: block;" id="form-element" style="width: 800px;">
                        {{-- Name --}}
                        <div class="form-row">
                            <!-- FORM ITEM -->
                            <div class="form-item">
                                <!-- FORM INPUT -->
                                <div class="form-input">
                                    <label for="society-name">Ecell/Society Name</label>
                                    <input type="text" id="society" name="society" required>
                                </div>
                                <!-- /FORM ITEM -->
                                <!-- FORM ITEM ERROR -->
                                @error('society')
                                <div class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </div>
                                @enderror
                                <!-- /FORM ITEM ERROR -->
                            </div>
                            <!-- FORM ITEM -->
                        </div>
                        {{-- College --}}
                        <div class="form-row">
                            <!-- FORM ITEM -->
                            <div class="form-item">
                                <!-- FORM INPUT -->
                                <div class="form-input">
                                    <label for="college">College/University Name</label>
                                    <input type="text" id="college" name="college" required>
                                </div>
                                <!-- /FORM ITEM -->
                                <!-- FORM ITEM ERROR -->
                                @error('college')
                                <div class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </div>
                                @enderror
                                <!-- /FORM ITEM ERROR -->
                            </div>
                            <!-- FORM ITEM -->
                        </div>
                        {{-- Website URL --}}
                        <div class="form-row">
                            <!-- FORM ITEM -->
                            <div class="form-item">
                                <!-- FORM INPUT -->
                                <div class="form-input">
                                    <label for="url">URL of your official website</label>
                                    <input type="text" id="url" name="url" required>
                                </div>
                                <!-- /FORM ITEM -->
                                <!-- FORM ITEM ERROR -->
                                @error('url')
                                <div class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </div>
                                @enderror
                                <!-- /FORM ITEM ERROR -->
                            </div>
                            <!-- FORM ITEM -->
                        </div>
                        {{-- State --}}
                        <div class="form-row">
                            <!-- FORM ITEM -->
                            <div class="form-item">
                                <!-- FORM INPUT -->
                                <div class="form-input">
                                    <label for="state">Your University/College State</label>
                                    <input type="text" id="state" name="state" required>
                                </div>
                                <!-- /FORM ITEM -->
                                <!-- FORM ITEM ERROR -->
                                @error('state')
                                <div class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </div>
                                @enderror
                                <!-- /FORM ITEM ERROR -->
                            </div>
                            <!-- FORM ITEM -->
                        </div>
                        {{-- City --}}
                        <div class="form-row">
                            <!-- FORM ITEM -->
                            <div class="form-item">
                                <!-- FORM INPUT -->
                                <div class="form-input">
                                    <label for="city">Your University/College City</label>
                                    <input type="text" id="uni-ity" name="city" required>
                                </div>
                                <!-- /FORM ITEM -->
                                <!-- FORM ITEM ERROR -->
                                @error('city')
                                <div class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </div>
                                @enderror
                                <!-- /FORM ITEM ERROR -->
                            </div>
                            <!-- FORM ITEM -->
                        </div>
                        {{-- LinkedIn --}}
                        <div class="form-row">
                            <!-- FORM ITEM -->
                            <div class="form-item">
                                <!-- FORM INPUT -->
                                <div class="form-input">
                                    <label for="linkein">Your E-Cell's LinkedIn Account URL</label>
                                    <input type="text" id="linkein" name="linkein" required>
                                </div>
                                <!-- /FORM ITEM -->
                                <!-- FORM ITEM ERROR -->
                                @error('linkein')
                                <div class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </div>
                                @enderror
                                <!-- /FORM ITEM ERROR -->
                            </div>
                            <!-- FORM ITEM -->
                        </div>
                        {{-- Instagram --}}
                        <div class="form-row">
                            <!-- FORM ITEM -->
                            <div class="form-item">
                                <!-- FORM INPUT -->
                                <div class="form-input">
                                    <label for="instagram">Your E-Cell's Instagram Account URL</label>
                                    <input type="text" id="instagram" name="instagram" required>
                                </div>
                                <!-- /FORM ITEM -->
                                <!-- FORM ITEM ERROR -->
                                @error('instagram')
                                <div class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </div>
                                @enderror
                                <!-- /FORM ITEM ERROR -->
                            </div>
                            <!-- FORM ITEM -->
                        </div>
                        {{-- Active Years --}}
                        <div class="form-row">
                            <!-- FORM ITEM -->
                            <div class="form-item">
                                <!-- FORM INPUT -->
                                <div class="form-input">
                                    <label for="activeyears">For how many years, you are actively functioning as E-Cell?</label>
                                    <input type="text" id="activeyears" name="activeyears" required>
                                </div>
                                <!-- /FORM ITEM -->
                                <!-- FORM ITEM ERROR -->
                                @error('activeyears')
                                <div class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </div>
                                @enderror
                                <!-- /FORM ITEM ERROR -->
                            </div>
                            <!-- FORM ITEM -->
                        </div>
                        {{-- Role of the Representative --}}
                        <div class="form-row">
                            <!-- FORM ITEM -->
                            <div class="form-item">
                                <!-- FORM INPUT -->
                                <div class="form-input">
                                    <label for="role">What is your role at your E-Cell?</label>
                                    <input type="text" id="role" name="role" required>
                                </div>
                                <!-- /FORM ITEM -->
                                <!-- FORM ITEM ERROR -->
                                @error('role')
                                <div class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </div>
                                @enderror
                                <!-- /FORM ITEM ERROR -->
                            </div>
                            <!-- FORM ITEM -->
                        </div>
                        {{-- Number --}}
                        <div class="form-row">
                            <!-- FORM ITEM -->
                            <div class="form-item">
                                <!-- FORM INPUT -->
                                <div class="form-input">
                                    <label for="wanumber">Enter WhatsApp Contact Number</label>
                                    <input type="text" id="wanumber" name="wanumber" required>
                                </div>
                                <!-- /FORM ITEM -->
                                <!-- FORM ITEM ERROR -->
                                @error('wanumber')
                                <div class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </div>
                                @enderror
                                <!-- /FORM ITEM ERROR -->
                            </div>
                            <!-- FORM ITEM -->
                        </div>
                        {{-- Representative LinkedIn --}}
                        <div class="form-row">
                            <!-- FORM ITEM -->
                            <div class="form-item">
                                <!-- FORM INPUT -->
                                <div class="form-input">
                                    <label for="replinkedin">Can we have you LinkedIn account Url</label>
                                    <input type="text" id="replinkedin" name="replinkedin" required>
                                </div>
                                <!-- /FORM ITEM -->
                                <!-- FORM ITEM ERROR -->
                                @error('replinkedin')
                                <div class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </div>
                                @enderror
                                <!-- /FORM ITEM ERROR -->
                            </div>
                            <!-- FORM ITEM -->
                        </div>
                        {{-- Submit Button --}}
                        <div class="form-row">
                            <!-- FORM ITEM -->
                            <div class="form-item">
                                <!-- BUTTON -->
                                <button class="button medium primary">Join Community</button>
                                <!-- /BUTTON -->
                            </div>
                            <!-- /FORM ITEM -->
                        </div>
                    </div>
                </form>
                <!-- FORM -->
            </div>
            <!-- /GRID COLUMN -->
        </div>
        <!-- /GRID -->
    </div>
    <!-- /CONTENT GRID -->
@endsection