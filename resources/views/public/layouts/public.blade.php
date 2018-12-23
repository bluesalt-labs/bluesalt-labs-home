@extends('layouts.base')

@push('scripts')
    <script src="{{ asset('js/public.js') }}" defer></script>
@endpush

@push('styles')
    <link href="{{ asset('css/public.css') }}" rel="stylesheet">
@endpush

@section('base-header')
    @hasSection('above-header')
        @yield('above-header')
    @else
        <div id="page-header-spacer"></div>
    @endif

    @include('public.partials.header')
@endsection

@section('base-content')

    <div id="page-content">
    @yield('content')
    </div>

@endsection

@section('base-footer')
    @include('public.partials.footer')
@endsection