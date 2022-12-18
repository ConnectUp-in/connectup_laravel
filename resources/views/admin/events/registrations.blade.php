@php
    $page['title'] = 'Registrations - ' . $event->title . ' | ConnectUp';
@endphp

@extends('layouts.admin')
@section('content')
    <style>
        .confirmed {
            background: #14ce8d !important;
            color: #fff;
        }
    </style>
    <div class="middle-content container-xxl p-0">
        <!-- BREADCRUMB -->
        <div class="page-meta">
            <nav class="breadcrumb-style-one" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">{{ Str::limit($event->title, 30) }}</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Registrations</li>
                </ol>
                {{-- <a href="{{ route('superadmin.blog.add') }}" class="btn float-right btn-primary">Add New</a> --}}

                {{-- Add button to Right --}}

            </nav>
        </div>
        <!-- /BREADCRUMB -->

        <div class="row layout-top-spacing">

            <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                <div class="widget-content widget-content-area br-8">
                    <table id="zero-config" class="table table-striped dt-table-hover" style="width:100%">
                        <thead>
                            <tr>
                                <td>Sno.</td>
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
                        <tbody>

                            @forelse ($registrations as $registration)
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
                                            <a href="{{ route('event.registration.sendticket', $registration->id) }}">Send
                                                Ticket</a>
                                        @else
                                            <a class="btn btn-success"
                                                href="{{ route('event.registration.confirm', $registration->id) }}">Confirm</a>
                                        @endif
                                        <a
                                            href="{{ route('event.verify', [$registration->event_id, $registration->ticket_id]) }}">Verify</a>
                                    </td>
                                </tr>

                            @empty
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>

        </div>

    </div>
@endsection
