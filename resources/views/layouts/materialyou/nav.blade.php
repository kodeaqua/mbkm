<style>
    nav {
        backdrop-filter: blur(16px);
    }

    nav .container #navbarSupportedContent ul .nav-item {
        font-weight: bold;
    }

    #nav-subtle {
        --bs-bg-opacity: .2;
        background-color: rgba(var(--bs-primary-rgb), var(--bs-bg-opacity)) !important;
        border-radius: 8px;
    }

    #nav-subtle .nav-link {
        color: var(--bs-primary);
    }

    #nav-subtle:hover {
        --bs-bg-opacity: .3;
        background-color: rgba(var(--bs-primary-rgb), var(--bs-bg-opacity)) !important;
    }

    #nav-solid {
        background-color: var(--bs-primary);
        border-radius: 8px;
    }

    #nav-solid .nav-link {
        color: white;
    }

    #nav-solid:hover {
        background-color: var(--bs-primary-text);
    }


    @media (max-width: 768px) {
        nav .container #navbarSupportedContent ul {
            margin-top: 6px;
        }

        nav .container #navbarSupportedContent ul .nav-item {
            font-weight: bold;
            text-align: center;
            padding: 12px;
        }

        #nav-subtle {
            margin-bottom: 24px;
        }

        #nav-solid {}
    }

    @media (min-width: 768px) {
        nav .container #navbarSupportedContent ul .nav-item {
            padding: 4px;
            margin: 0px 4px 0px 4px;
        }

        #nav-divider {
            border-left: 1px solid lightgray;
            height: 48px;
        }

        #nav-subtle {}
    }
</style>

<nav class="navbar navbar-expand-md navbar-light bg-white bg-opacity-75 border-bottom py-3 px-4 sticky-top">
    <div class="container">
        <div class="d-flex flex-row align-items-center">
            <img class="mx-2" src="{{ asset('assets/images/logo-unpak.webp') }}" alt="logo-unpak" height="48px">
            <img class="mx-2" src="{{ asset('assets/images/kampus-merdeka.png') }}" alt="kampus-merdeka" height="32px">
        </div>
        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav me-auto"></ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ms-auto">
                <!-- Authentication Links -->
                <li
                    class="nav-item @if (Request::is('/')) border border-1 border-dark-subtle rounded @endif">
                    <a class="nav-link" href="{{ route('landing') }}">Home</a>
                </li>
                <li
                    class="nav-item @if (Request::is('request')) border border-1 border-dark-subtle rounded @endif">
                    <a class="nav-link" href="{{ route('request') }}">Request</a>
                </li>
                <li
                    class="nav-item @if (Request::is('about')) border border-1 border-dark-subtle rounded @endif">
                    <a class="nav-link" href="{{ route('about') }}">About</a>
                </li>
                <div class="nav-item" id="nav-divider"></div>
                @guest
                @else
                    <li class="nav-item" id="nav-subtle">
                        <a class="nav-link" href="{{ route('home') }}">Dashboard</a>
                    </li>
                @endguest
                <li class="nav-item" id="nav-solid">
                    <a class="nav-link" href="{{ route('places') }}">Places</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
