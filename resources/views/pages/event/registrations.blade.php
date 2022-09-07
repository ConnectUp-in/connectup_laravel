<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registrations</title>
</head>

<body>



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
            </tr>
        </thead>
        @foreach ($registrations as $registration)
            <tbody>

                <tr>
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
        $(document).ready(function() {
            $('table').DataTable();
        });
    </script>


</body>

</html>
