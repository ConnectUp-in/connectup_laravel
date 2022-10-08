@extends('layouts.admin')
@section('content')
    <div class="middle-content container-xxl p-0">

        <!-- BREADCRUMB -->
        <div class="page-meta">
            <nav class="breadcrumb-style-one" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Community</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Members</li>
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
                                <th>Name</th>
                                <th>Contact</th>
                                <th>Startup</th>
                                <th>Description</th>
                                <th>Looking For</th>
                            </tr>
                        </thead>
                        <tbody>

                            @forelse ($members as $member)
                                <tr>
                                    <td>
                                        <div class="d-flex">
                                            <div class="usr-img-frame me-2 rounded-circle">
                                                <img alt="avatar" class="img-fluid rounded-circle"
                                                    src=" {{ $member->user->profile_photo_path }}">
                                            </div>
                                            <p class="align-self-center mb-0 admin-name"> {{ $member->user->name }}
                                                &nbsp;
                                                @if ($member->linkedin)
                                                    <a href=" {{ $member->linkedin }} " target="_blank">
                                                        <i class="fab fa-linkedin-in"></i>
                                                    </a>
                                                @endif
                                            </p>

                                        </div>
                                    </td>
                                    <td>
                                        <a href="tel: {{ $member->contact }} "> {{ $member->contact }} </a>
                                    </td>
                                    <td>

                                        @if ($member->founder)
                                            <a href=" {{ $member->website }} " target="_blank">
                                                {{ $member->startupname }}
                                            </a>
                                        @else
                                            <span class="badge badge-secondary">!Founder</span>
                                        @endif
                                    </td>
                                    <td>{{ $member->description }}</td>
                                    <td>
                                        {{-- {{ json_encode($member->reasons) }} --}}
                                        @foreach ($member->reasons as $reason)
                                            {{ $reason['name'] }}
                                            @if (!$loop->last)
                                                ,
                                            @endif
                                        @endforeach
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
