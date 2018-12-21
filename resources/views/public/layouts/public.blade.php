@extends('layouts.base')

@push('scripts')
    <script src="{{ asset('js/public.js') }}" defer></script>
@endpush

@push('styles')
    <link href="{{ asset('css/public.css') }}" rel="stylesheet">
@endpush

@section('base-content')

    @yield('content')
@endsection