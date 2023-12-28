<nav class="navbar navbar-expand-lg navbar-light sticky-top" data-navbar-on-scroll="data-navbar-on-scroll">
    <div class="container"><a class="navbar-brand" href="index.html"><img src="{{ asset('landpage/assets/img/logo.svg') }}" height="31"
        alt="logo" /></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span
        class="navbar-toggler-icon"> </span></button>
    <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link {{ Request::is('/') ? 'active' : '' }}" aria-current="page" href="/">Home</a></li>
        @auth
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class='bx bx-user-circle'></i> {{ auth()->user()->name }}</a>
                <div class="dropdown-menu shadow-sm m-0">
                    <a href="/dashboard" class="dropdown-item"><i class='bx bxs-dashboard'></i> Dashboard</a>
                    <hr class="dropdown-divider">
                    <a href="/logout" class="dropdown-item"><i class='bx bx-log-out'></i></i> Logout</a>
                </div>
            </div>
        @else
            <li class="nav-item"><a class="nav-link" aria-current="page" href="/login"><i class='bx bx-log-in'></i> Login</a></li>
        @endauth
        </ul>
    </div>
    </div>
</nav>