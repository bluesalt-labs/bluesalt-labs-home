@extends('layouts.base')

@push('scripts')
<script src="{{ asset('js/app.js') }}" defer></script>
@endpush

{{--
    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
--}}

@push('styles')
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
@endpush

@section('base-content')
    @include('dashboard.partials.header')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2">
                @include('dashboard.partials.nav')
            </div>
            <div class="col-md-10 py-4">
                @yield('content')
            </div>
        </div>
    </div>
@endsection
