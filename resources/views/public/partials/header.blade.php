<div class="flex-center position-ref ">
    <div class="top-left links">
        <a href="{{ url('/') }}">Home</a>
        <a href="{{ url('/about') }}">About</a>
        <a href="{{ url('/blog') }}">Blog</a>
        <a href="{{ url('/contact') }}">Contact</a>
    </div>
    @if (Route::has('login'))
    <div class="top-right links">
        @auth
            <a href="{{ url('/dashboard') }}">Dashboard</a>
        @else
            <a href="{{ route('login') }}">Login</a>
            <a href="{{ route('register') }}">Register</a>
        @endauth
    </div>
    @endif
</div>