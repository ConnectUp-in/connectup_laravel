<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registrations</title>
    <style>
        .confirmed {
            background: #c3e6cb;
        }
    </style>
</head>

<body>
    {{-- Download Buttons --}}
    <button id="downloadCSV">Download CSV</button>
    {{-- Table --}}

    <hr>
    <table>
        <thead>

            <tr>
                <th>Sno.</th>
                <td>Name</td>
                <td>Email</td>
                @foreach ($event->required_fields as $field)
                    <td>{{ ucfirst($field) }}</td>
                @endforeach

                @foreach ($event->additional_fields as $field)
                    <td>{{ ucfirst($field['title']) }}</td>
                @endforeach
                <td>Actions</td>
            </tr>
        </thead>
        @foreach ($registrations as $registration)
            <tbody>

                <tr class="{{ $registration->confirmed_at ? 'confirmed' : '' }}">
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $registration->name }}</td>
                    <td>{{ $registration->email }}</td>
                    @foreach ($event->required_fields as $field)
                        {{-- $registration->required_fields[$field] is object or array --}}
                        @if (is_array($registration->required_fields[$field]))
                            <td>{{ $registration->required_fields[$field]['name'] ?? '' }}</td>
                        @else
                            <td>{{ $registration->required_fields[$field] }}</td>
                        @endif
                    @endforeach

                    @foreach ($event->additional_fields as $field)
                        <td>{{ $registration->additional_fields[$field['identifier']] ?? '' }}</td>
                    @endforeach
                    <td>
                        @if ($registration->confirmed_at)
                            <a href="{{ route('event.registration.sendticket', $registration->id) }}">Send Ticket</a>
                        @else
                            <a href="{{ route('event.registration.confirm', $registration->id) }}">Confirm</a>
                        @endif
                        <a
                            href="{{ route('event.verify', [$registration->event_id, $registration->ticket_id]) }}">Verify</a>
                    </td>
                </tr>
            </tbody>
        @endforeach
    </table>





    {{-- Import jquery --}}
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    {{-- Import Datatable --}}
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js"></script>



    {{-- Datatable --}}
    <script>
        // $(document).ready(function() {
        //     $('table').DataTable();
        // });

        // Download CSV  from table without using jQuery plugin
        $('#downloadCSV').click(function() {
            var csv = [];
            var rows = document.querySelectorAll("table tr");

            for (var i = 0; i < rows.length; i++) {
                var row = [],
                    cols = rows[i].querySelectorAll("td, th");

                for (var j = 0; j < cols.length; j++)
                    row.push(cols[j].innerText);

                csv.push(row.join(","));
            }

            // Download CSV
            downloadCSV(csv.join("\n"), 'registrations.csv');
        });

        function downloadCSV(csv, filename) {
            var csvFile;
            var downloadLink;

            // CSV file
            csvFile = new Blob([csv], {
                type: "text/csv"
            });

            // Download link
            downloadLink = document.createElement("a");

            // File name
            downloadLink.download = filename;

            // Create a link to the file
            downloadLink.href = window.URL.createObjectURL(csvFile);

            // Hide download link
            downloadLink.style.display = "none";

            // Add the link to DOM
            document.body.appendChild(downloadLink);

            // Click download link
            downloadLink.click();
        }
    </script>






</body>

</html>
