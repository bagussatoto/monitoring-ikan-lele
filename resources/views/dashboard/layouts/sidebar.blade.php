<!-- Sidebar Start -->
<div class="sidebar pe-4 pb-3">
    <nav class="navbar bg-light navbar-light">
        <a href="\dashboard" class="navbar-brand mx-4 mb-3">
            <h3 class="text-warning"><i class="fa fa-hashtag me-2"></i>LeleMon</h3>
        </a>
        <div class="d-flex align-items-center ms-4 mb-4">
            <div class="position-relative">
                <img class="rounded-circle" src="{{ asset('dashmin/img/user.jpg') }}" alt="" style="width: 40px; height: 40px;">
                <div
                    class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1">
                </div>
            </div>
            <div class="ms-3">
                <h6 class="mb-0">{{ auth()->user()->name }}</h6>
                <span>Admin</span>
            </div>
        </div>
        <div class="navbar-nav w-100">
            <a href="/dashboard" class="nav-item nav-link {{ Request::is('dashboard') ? 'active' : '' }}"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
            <a href="/dashboard/controls" class="nav-item nav-link {{ Request::is('dashboard/controls') ? 'active' : '' }}"><i class="fa fa-table me-2"></i>Rekap Data</a>
            <a href="/logout" class="nav-item nav-link"><i class='bx bx-log-out me-2'></i>Logout</a>
        </div>
    </nav>
</div>
<!-- Sidebar End -->