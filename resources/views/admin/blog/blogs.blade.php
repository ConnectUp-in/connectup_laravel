@php
    $page['title'] = 'Blogs - SuperAdmin | ConnectUp';
@endphp
@extends('layouts.admin')
@section('content')
    <div class="middle-content container-xxl p-0">
        <!-- BREADCRUMB -->
        <div class="page-meta">
            <nav class="breadcrumb-style-one" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Blog</a></li>
                    <li class="breadcrumb-item active" aria-current="page">All</li>
                </ol>
                <a href="{{ route('superadmin.blog.add') }}" class="btn float-right btn-primary">Add New</a>

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
                                <th>By</th>
                                <th>Title</th>
                                <th>Ft. Image</th>
                                <th>Last Updated</th>
                                <th>Acitons</th>
                            </tr>
                        </thead>
                        <tbody>

                            @forelse ($blogs as $blog)
                                <tr>
                                    <td>
                                        @if ($blog->user)
                                            @if ($blog->creator_type == 'e')
                                                <a href="{{ route('user', $blog->user->username) }}" class="d-flex">
                                                    <div class="usr-img-frame me-2 rounded-circle">
                                                        <img alt="avatar" class="img-fluid rounded-circle"
                                                            src=" {{ $blog->user->profile_photo_path }}">
                                                    </div>
                                                    <p class="align-self-center mb-0 admin-name"> {{ $blog->user->name }}
                                                    </p>

                                                </a>
                                            @elseif($blog->creator_type == 's')
                                                <a href="{{ route('startup', $blog->user->username) }}" class="d-flex">
                                                    <div class="usr-img-frame me-2 rounded-circle">
                                                        <img alt="avatar" class="img-fluid rounded-circle"
                                                            src=" {{ $blog->user->logo }}">
                                                    </div>
                                                    <p class="align-self-center mb-0 admin-name"> {{ $blog->user->name }}
                                                    </p>

                                                </a>
                                            @endif
                                        @else
                                            <p class="align-self-center mb-0 admin-name"> Guest User
                                            </p>
                                        @endif
                                    </td>
                                    <td>

                                        <a href="{{ route('blog', $blog->slug) }}" class="d-flex">
                                            {{ Str::limit($blog->title, 40) }}
                                        </a>
                                    </td>
                                    <td>
                                        <img src="{{ $blog->image }}" alt="" width="150px">

                                    </td>
                                    <td>{{ $blog->updated_at->diffForHumans() }}</td>
                                    <td>
                                        <div class="dropdown">
                                            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink20"
                                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-more-horizontal">
                                                    <circle cx="12" cy="12" r="1"></circle>
                                                    <circle cx="19" cy="12" r="1"></circle>
                                                    <circle cx="5" cy="12" r="1"></circle>
                                                </svg>
                                            </a>

                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink20">
                                                <a class="dropdown-item" href="{{ route('blog', $blog->slug) }}">View</a>
                                                <a class="dropdown-item"
                                                    href="{{ route('superadmin.blog.edit', $blog->id) }}">Edit</a>
                                                <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                            </div>
                                        </div>
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
