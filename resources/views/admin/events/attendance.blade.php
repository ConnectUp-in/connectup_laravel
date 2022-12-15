@php
    $page['title'] = 'Attendance - ' . $event->title . ' | ConnectUp';
@endphp
@extends('layouts.admin')
@section('content')
    <div class="middle-content container-xxl p-0">
        <!-- BREADCRUMB -->
        <div class="page-meta">
            <nav class="breadcrumb-style-one" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">{{ Str::limit($event->title, 30) }}</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Attendance</li>
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
                                <th>Name</th>
                                <th>Email</th>
                                <th>Checked In</th>
                            </tr>
                        </thead>
                        <tbody>

                            @forelse ($registrations as $user)
                                <tr>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ Carbon::parse($user->checked_in_at)->diffForHumans() }}</td>
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
