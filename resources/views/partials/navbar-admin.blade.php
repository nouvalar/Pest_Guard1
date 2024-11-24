<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #C0E5B7;">
    <div class="container-fluid">

        <div class="sidebar-brand-text mx-3 d-flex align-items-center">
            <img src="{{ asset('assets/img/logo1.png') }}" alt="Logo" class="sidebar-logo"
                style="width: 50px; height: 50px; margin-right: -12px;">
            <span class="font-poppins"
                style="color: #29593D; font-size: 24px; font-weight: bold; margin-left: 5px;">Admin Panel</span>
        </div>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a href="{{ route('admin.reports.download-pdf') }}" class="btn btn-success">Download PDF</a>
                    <a class="btn btn-danger" href="/" role="button"><strong>Keluar</strong></a>

                </li>
            </ul>
        </div>
    </div>
</nav>