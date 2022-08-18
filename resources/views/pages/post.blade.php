@php
$page['title'] = 'Feed | ConnectUp | Connecting the Dots...';
@endphp

@extends('layouts/app')
@section('content')
    <div class="content-grid">
        <div class="grid grid-3-6-3 mobile-prefer-content">
            <div class="grid-column">
                @widget('profilecompletion')
            </div>
            <div class="grid-column">
                @import('components.post', ['post' => $post])
            </div>
            <div class="grid-column">
                @widget('statbox')
                @widget('refferal')
            </div>
        </div>
    </div>
@endsection
