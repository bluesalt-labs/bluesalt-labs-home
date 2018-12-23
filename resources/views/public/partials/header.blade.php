<nav id="page-header">
    <div id="page-header-content">
        <div class="header-left">
            <a href="{{ route('public.home') }}" {{ Route::currentRouteName() === 'public.home' ? "class=active" : '' }}>
                Home
            </a>

            <a href="{{ route('public.about') }}" {{ Route::currentRouteName() === 'public.about' ? "class=active" : '' }}>
                About
            </a>

            <a href="{{ route('public.blog.home') }}" {{ Route::currentRouteName() === 'public.blog.home' ? "class=active" : '' }}>
                Blog
            </a>

            <a href="{{ route('public.contact') }}" {{ Route::currentRouteName() === 'public.contact' ? "class=active" : '' }}>
                Contact
            </a>
        </div>
        @if (Route::has('login'))
        <div class="header-right">
            @auth
                <a href="{{ route('dashboard') }}">Dashboard</a>
            @else
                <a href="{{ route('login') }}">Login</a>
                <a href="{{ route('register') }}">Register</a>
            @endauth
        </div>
        @endif
    </div>
</nav>