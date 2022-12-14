@extends('layouts.admin')

@section('styles')
<link href="/assets/admin/src/assets/css/light/components/modal.css" rel="stylesheet" type="text/css">
<link href="/assets/admin/src/assets/css/light/apps/notes.css" rel="stylesheet" type="text/css" />

<link href="/assets/admin/src/assets/css/dark/components/modal.css" rel="stylesheet" type="text/css">
<link href="/assets/admin/src/assets/css/dark/apps/notes.css" rel="stylesheet" type="text/css" />
@endsection

@php
$required = array_values($event->required_fields);
$additional = array_values($event->additional_fields);
$required_fields = '';
$additional_fields = '';
for ($i=0; $i < count($required); $i++) { 
  $required_fields=$required_fields.$required[$i];
  if ($i == count($required) - 1) {
    break;
  }
  $required_fields=$required_fields.', ';
}
for ($i=0; $i < count($additional); $i++) { 
  $additional_fields = $additional_fields.$additional[$i]['title'];
  if ($i == count($additional) - 1) {
    break;
  }
  $additional_fields=$additional_fields.', ';
}
@endphp

@section('content') <div class="middle-content container-xxl p-0">

  <!-- BREADCRUMB -->
  <div class="page-meta">
    <nav class="breadcrumb-style-one" aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item active" aria-current="page"> {{ $event->title }} </li>
        <li class="breadcrumb-item"><a href="#">Event Information</a></li>
      </ol>
    </nav>
  </div>
  <!-- /BREADCRUMB -->

  <div class="row layout-top-spacing">
    <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
      <div class="widget-content widget-content-area br-8">
        <div>
          <p>Registrations Start : {{ $event->r_dates[0] }} / Registrations End : {{ $event->r_dates[1] }}</p>
          @if (Str::substr($event->e_dates[0], 0, 10)==Str::substr($event->e_dates[1], 0, 10))
          <p>Event Date: {{ Str::substr($event->e_dates[0], 0, 10) }} / Event Timings: Starts at {{
            Str::substr($event->e_dates[0], 11, 15) }} Ends at {{ Str::substr($event->e_dates[1], 11, 15) }}
          </p>
          @else
          <p>Event Starts: {{ $event->e_dates[0] }} / Event Ends On: {{ $event->e_dates[1] }}</p>
          @endif
          <p>Number of {{$redirected ? 'rediections' : 'registrations'}}: {{ count($registrations) }} </p>
          @if ($redirected)

          @else
          <p>Required Fields: {{ $required_fields }} </p>
          <p>Additional Fields: {{ $additional_fields }} </p>
          @endif
        </div>
      </div>
    </div>
  </div>

  @if ($redirected)
  <!-- BREADCRUMB -->
  <div class="page-meta">
    <nav class="breadcrumb-style-one" aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item active" aria-current="page"> Redirections </li>
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
              <th>User</th>
              <th>Registered At</th>
              <th>Agent</th>
              
            </tr>
          </thead>
          <tbody>
            @forelse ($registrations as $registree)
            <tr>
              <td> {{ $registree->user }} </td>
              <td> {{ $registree->created_at }} </td>
              <td> {{ $registree->agent }} </td>
            </tr>
            @empty
            @endforelse
          </tbody>
        </table>
      </div>
    </div>
  </div>

  @else
  <!-- BREADCRUMB -->
  <div class="page-meta">
    <nav class="breadcrumb-style-one" aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item active" aria-current="page"> Registrations </li>
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
              <th>Email</th>
              <th>Registered At</th>
              <th>Ticket ID</th>
              @if (count($event->required_fields)!=0)
              <th>Required Answers</th>
              @endif
              @if (count($event->additional_fields)!=0)
              <th>Additional Answers</th>
              @endif
            </tr>
          </thead>
          <tbody>
            @forelse ($registrations as $registree)
            <tr>
              <td> {{ $registree->name }} </td>
              <td> {{ $registree->email }} </td>
              <td> {{ $registree->created_at }} </td>
              <td> {{ $registree->ticket_id }} </td>
              @if (count($event->required_fields)!=0)
              <td>
                @foreach ($registree->required_fields as $r_fields)
                {{ $reason['name'] }}
                @if (!$loop->last)
                ,
                @endif
                @endforeach
              </td>
              @endif
            </tr>
            @empty

            @endforelse

          </tbody>
        </table>
      </div>
    </div>
  </div>
  @endif
  </div>
  @endsection

  @section('scripts')
  <script src="/assets/admin/src/assets/js/apps/notes.js"></script>
  @endsection