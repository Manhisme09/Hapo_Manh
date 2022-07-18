<header class="main-header">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="{{ route('home') }}">
            <img class="logo-image" src="{{ asset('images/logo.png') }}" alt="HapoLearn Logo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto w-100">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}">HOME <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">ALL COURSES</a>
                </li>
                @if(Auth::user())
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('logout') }}">LOGOUT</a>
                </li>
                @else
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">LOGIN/REGISTER</a>
                </li>
                @endif
                <li class="nav-item">
                    <a class="nav-link" href="#">PROFILE</a>
                </li>
                @if (session('name'))
                <li>
                    <a class="nav-link hello">Xin chào, {{ session('name') }}</a>
                </li>
                @endif
            </ul>
        </div>
    </nav>
</header>
