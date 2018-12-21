<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') | {{ config('app.name', 'Laravel') }} </title>

    <!-- Scripts -->
    @section('scripts')
        <script src="{{ asset('js/base.js') }}" defer></script>
    @endsection

    <!-- Styles -->
    @stack('styles')
</head>
<body>
<!-- Yes, I realize this code is a total mess. I'm trying to get the content -->
<!-- in here as fast as possible so just bear with me... -->
<div id="app">
    @yield('base-content')
</div>

@yield('page-script', '')
</body>
</html>
