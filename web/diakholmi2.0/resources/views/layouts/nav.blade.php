<!-- Navigation-->
<nav class="navbar navbar-expand-md navbar shadow-sm bg-body-tertiary">
    <div class="container">
        <div class="d-flex align-items-center">
            <img src="/img/logo.png" alt="" class="img-fluid">
        </div>
        <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('app.name', 'Laravel') }}
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav nav-pills me-auto text-uppercase ms-auto py-4 py-lg-0">
                <li class="nav-item"><a class="nav-link ps-2 {{ request()->routeIs('home') ? 'active' : '' }}"
                        href="{{ route('home') }}">Főoldal</a></li>
                <li class="nav-item"><a class="nav-link ps-2 {{ request()->routeIs('home#study') ? 'active' : '' }}"
                        href="{{ route('home') }}#study">Oktatás</a></li>
                <li class="nav-item"><a
                        class="nav-link ps-2 {{ request()->routeIs('students.create') ? 'active' : '' }}"
                        href="{{ route('students.create') }}">Jelentkezés</a></li>
                <li class="nav-item"><a class="nav-link ps-2 {{ request()->routeIs('about') ? 'active' : '' }}"
                        href="{{ route('about') }}">Rólunk</a></li>
                @auth
                    <li class="nav-item"><a
                            class="nav-link ps-2 {{ request()->routeIs('students.index') ? 'active' : '' }}"
                            href="{{ route('students.index') }}">Diákok</a></li>
                @endauth
            </ul>
            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav">
                <!-- Authentication Links -->
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link ps-2 {{ request()->routeIs('login') ? 'active' : '' }}"
                                href="{{ route('login') }}">Bejelentkezés</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            @if (Route::has('user.home'))
                                <a class="dropdown-item ps-2 {{ request()->routeIs('user.home') ? 'active' : '' }}"
                                    href="{{ route('user.home') }}">
                                    Fiókok
                                </a>
                            @endif
                            @if (Route::has('register'))
                                <a class="dropdown-item ps-2 {{ request()->routeIs('register') ? 'active' : '' }}"
                                    href="{{ route('register') }}">
                                    Regisztráció
                                </a>
                            @endif
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">Kijelentkezés</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
