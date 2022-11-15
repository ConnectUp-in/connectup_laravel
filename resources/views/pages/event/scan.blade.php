@php
    $page['title'] = 'Scan Attendance | ConnectUp';
    
@endphp

@extends('layouts/app')


@section('content')
    <!-- CONTENT GRID -->
    <div class="content-grid">
        sdfs
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
        function onScanSuccess(url, decodedResult) {
            var ticket_id = url.split('/')[6];
            var event_id = url.split('/')[5];

            console.log("Ticket ID: " + ticket_id);
            console.log("Event ID: " + event_id);

            markAttendance(ticket_id, event_id);
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
