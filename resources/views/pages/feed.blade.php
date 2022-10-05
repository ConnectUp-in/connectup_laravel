@php
$page['title'] = 'Feed | ConnectUp | Connecting the Dots...';

@endphp

@extends('layouts/app')


@section('content')
    <!-- CONTENT GRID -->
    <div class="content-grid">

        <!-- GRID -->
        <div class="grid grid-3-6-3 mobile-prefer-content">
            <!-- GRID COLUMN -->
            <div class="grid-column">
                @widget('redeemrefferal')
                @widget('profilecompletion')

            </div>
            <!-- /GRID COLUMN -->

            <!-- GRID COLUMN -->
            <div class="grid-column">

                @import('components.posts')

                <!-- LOADER BARS -->
                <div class="loader-bars">
                    <div class="loader-bar"></div>
                    <div class="loader-bar"></div>
                    <div class="loader-bar"></div>
                    <div class="loader-bar"></div>
                    <div class="loader-bar"></div>
                    <div class="loader-bar"></div>
                    <div class="loader-bar"></div>
                    <div class="loader-bar"></div>
                </div>
                <!-- /LOADER BARS -->
            </div>
            <!-- /GRID COLUMN -->

            <!-- GRID COLUMN -->
            <div class="grid-column">
                @widget('statbox')
                @widget('refferal')
            </div>
            <!-- /GRID COLUMN -->
        </div>
        <!-- /GRID -->
    </div>
    <!-- /CONTENT GRID -->
@endsection
