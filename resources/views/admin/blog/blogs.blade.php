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
