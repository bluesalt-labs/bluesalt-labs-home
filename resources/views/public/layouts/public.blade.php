@extends('layouts.base')

@push('scripts')
    <script src="{{ asset('js/public.js') }}" defer></script>
@endpush

@push('styles')
    <link href="{{ asset('css/public.css') }}" rel="stylesheet">
@endpush

@section('base-content')
    @include('public.partials.header')

    <div id="page-content">
    @yield('content')
    </div>

    @include('public.partials.footer')
@endsection