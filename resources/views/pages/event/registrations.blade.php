<table>
    <th>
    <td>Name</td>
    <td>Email</td>
    @foreach ($event->required_fields as $field)
        <td>{{ ucfirst($field) }}</td>
    @endforeach

    @foreach ($event->additional_fields as $field)
        <td>{{ ucfirst($field['title']) }}</td>
    @endforeach
    </th>
    @foreach ($registrations as $registration)
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
    @endforeach
</table>
