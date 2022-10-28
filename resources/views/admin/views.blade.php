@extends('layouts.admin')
@section('content')
    <div class="middle-content container-xxl p-0">
        <!-- BREADCRUMB -->
        <div class="page-meta">
            <nav class="breadcrumb-style-one" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Views</a></li>
                    <li class="breadcrumb-item active" aria-current="page">All</li>
                </ol>
            </nav>
        </div>
        <!-- /BREADCRUMB -->

        <div class="row layout-top-spacing">

            <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                <div class="widget-content widget-content-area br-8">
                    <table id="zero-config" class="table table-striped dt-table-hover" style="width:100%">
                        <thead>
                            <tr>
                                <th>By</th>
                                <th>Page/Action</th>
                                <th>IP</th>
                                <th>Profile Viewed</th>
                                <th>Time</th>
                            </tr>
                        </thead>
                        <tbody>

                            @forelse ($views as $view)
                                <tr>
                                    <td>
                                        @if ($view->user)
                                            <a href="{{ route('user', $view->user->username) }}" class="d-flex">
                                                <div class="usr-img-frame me-2 rounded-circle">
                                                    <img alt="avatar" class="img-fluid rounded-circle"
                                                        src=" {{ $view->user->profile_photo_path }}">
                                                </div>
                                                <p class="align-self-center mb-0 admin-name"> {{ $view->user->name }}
                                                </p>

                                            </a>
                                        @else
                                            <p class="align-self-center mb-0 admin-name"> Guest User
                                            </p>
                                        @endif
                                    </td>
                                    <td>{{ $view->page }}
                                    </td>
                                    <td>

                                        {{ $view->ip_address }}
                                    </td>
                                    <td>
                                        @if ($view->profile)
                                            <a href="{{ route('user', $view->profile->username) }}" class="d-flex">
                                                <div class="usr-img-frame me-2 rounded-circle">
                                                    <img alt="avatar" class="img-fluid rounded-circle"
                                                        src=" {{ $view->profile->profile_photo_path }}">
                                                </div>
                                                <p class="align-self-center mb-0 admin-name"> {{ $view->profile->name }}
                                                </p>
                                            </a>
                                        @endif
                                    </td>
                                    <td>{{ $view->created_at->diffForHumans() }}</td>
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
