@php
    $page['title'] = 'Scan Attendance | ConnectUp';
    
@endphp

@extends('layouts/app')

@push('styles')
    <style>
        #loader {
            position: fixed;
            top: 0;
            right: 0;
            width: 100%;
            height: 100vh;
            background: rgba(0, 0, 0, 0.6);
            z-index: 999;
            display: none;
        }

        .loader-container {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            height: 100%;
        }
    </style>
@endpush


@section('content')
    <!-- CONTENT GRID -->
    <div class="content-grid">
        <div id="loader">

            <div class="loader-container">


                <!-- PAGE LOADER INDICATOR -->
                <div class="page-loader-indicator loader-bars">
                    <div class="loader-bar"></div>
                    <div class="loader-bar"></div>
                    <div class="loader-bar"></div>
                    <div class="loader-bar"></div>
                    <div class="loader-bar"></div>
                    <div class="loader-bar"></div>
                    <div class="loader-bar"></div>
                    <div class="loader-bar"></div>
                </div>

            </div>
        </div>
        <!-- /PAGE LOADER INDICATOR -->
        <div id="reader"></div>
    </div>
    <!-- /CONTENT GRID -->



    <!-- POPUP EVENT -->
@endsection



@push('scripts')
    {{-- Import HTML5QRCodeScanner from cdn --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5-qrcode/2.3.0/html5-qrcode.min.js"
        integrity="sha512-x3LIt0LY57mPvHaXNMcFqnVZvVBayzopR4WfWQid5alkV0Rx/mMrrmoNu+U9K9o9iXj5UGQ4Vx+EZKkoWtofGw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        var prevUrl = "";

        function onScanSuccess(url, decodedResult) {
            $('#loader').show();
            var ticket_id = url.split('/')[6];
            var event_id = url.split('/')[5];

            console.log("Ticket ID: " + ticket_id);
            console.log("Event ID: " + event_id);
            if (url != prevUrl) {
                markAttendance(ticket_id, event_id);
                prevUrl = url;
                $('#loader').hide();
            }
        }

        function onScanError(errorMessage) {
            // handle on error condition, with error message
            // alert(`OOPs Something Wrong \n ${errorMessage}`);
        }

        var html5QrcodeScanner = new Html5QrcodeScanner(
            "reader", {
                fps: 10,
                qrbox: 250
            });
        html5QrcodeScanner.render(onScanSuccess, onScanError);

        function markAttendance(ticket_id, event_id) {
            $.ajax({
                url: "{{ route('event.markattendance') }}",
                type: 'POST',
                data: {
                    _token: "{{ csrf_token() }}",
                    ticket_id: ticket_id,
                    event_id: event_id
                },
                success: function(data) {
                    $('#loader').hide();
                    console.log(data);
                    if (data.success) {
                        toastr.success(data.message);
                    } else {
                        toastr.error(data.message);
                    }
                }
            });
        }
    </script>
@endpush
