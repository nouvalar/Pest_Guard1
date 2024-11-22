<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light topbar mb-4 static-top shadow" style="background-color: #C0E5B7;">

            <!-- Sidebar Toggle (Topbar) -->
            <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                <i class="fa fa-bars"></i>
            </button>

            <!-- Sidebar  TopBar -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/home">
                <div class="sidebar-brand-icon rotate-n-15">
                </div>
                <div class="sidebar-brand-text mx-3 d-flex align-items-center">
                    <img src="{{ asset('assets/img/logo1.png') }}" alt="Logo" class="sidebar-logo"
                        style="width: 50px; height: 50px; margin-right: -12px;"> <!-- mengatur logo dan text -->
                    <span style="color: #29593D; font-size: 24px; font-weight: bold;">PestGuard</span>
                </div>
            </a>


            <!-- Topbar Navbar -->
            <ul class="navbar-nav ml-auto">

                <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                <li class="nav-item dropdown no-arrow d-sm-none">
                    <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-search fa-fw"></i>
                    </a>
                    <!-- Dropdown - Messages -->
                    <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                        aria-labelledby="searchDropdown">
                        <form class="form-inline mr-auto w-100 navbar-search">
                            <div class="input-group">
                                <input type="text" class="form-control bg-light border-0 small"
                                    placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="button">
                                        <i class="fas fa-search fa-sm"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li>

                <!-- Nav Item - Alerts -->
                <li class="nav-item dropdown no-arrow mx-1">
                    <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-bell fa-fw" style="color: #000000;"></i>
                        <!-- Counter - Alerts -->
                        @if (isset($navbarReminders) && $navbarReminders->count() > 0)
                            <span class="badge badge-danger badge-counter" id="notifBadge">
                                {{ $navbarReminders->count() }}
                            </span>
                        @endif

                    </a>
                    <!-- Dropdown - Alerts -->
                    <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                        aria-labelledby="alertsDropdown">
                        <h6 class="dropdown-header" style="background-color: #C0E5B7;">
                            Alerts Center
                        </h6>
                        @if (isset($navbarReminders) && $navbarReminders->count() > 0)
                            @foreach ($navbarReminders as $reminder)
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-warning">
                                            <i class="fas fa-exclamation-triangle text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">{{ $reminder->tanggal }}</div>
                                        <span class="font-weight-bold">{{ $reminder->catatan }}</span>
                                    </div>
                                </a>
                            @endforeach
                        @else
                            <a class="dropdown-item text-center small text-gray-500" href="#">Tidak ada pengingat
                                baru</a>
                        @endif
                        <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                    </div>
                    <!-- Nav Item - Messages -->
                <li class="nav-item dropdown no-arrow mx-1">
                    <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-envelope fa-fw" style="color: #000000;"></i>
                        <!-- Counter - Messages -->
                        <span class="badge badge-danger badge-counter">3</span>
                    </a>
                    <!-- Dropdown - Messages -->
                    <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                        aria-labelledby="messagesDropdown">
                        <h6 class="dropdown-header" style="background-color: #C0E5B7;">
                            Message Center
                        </h6>
                        <a class="dropdown-item d-flex align-items-center" href="#">
                            <div class="dropdown-list-image mr-3">
                                <img class="rounded-circle" src="{{ asset('tmplt/img/undraw_profile_1.svg') }}"
                                    alt="...">
                                <div class="status-indicator bg-success"></div>
                            </div>
                            <div class="font-weight-bold">
                                <div class="text-truncate">Sudahkah Anda melakukan penyemprotan Pestisida?</div>
                                <div class="small text-gray-500">Agung · 58m</div>
                            </div>
                        </a>
                        <a class="dropdown-item d-flex align-items-center" href="#">
                            <div class="dropdown-list-image mr-3">
                                <img class="rounded-circle" src="{{ asset('tmplt/img/undraw_profile_2.svg') }}"
                                    alt="...">
                                <div class="status-indicator"></div>
                            </div>
                            <div>
                                <div class="text-truncate">Pestisida Jenis Baru!!!</div>
                                <div class="small text-gray-500">Asep · 1d</div>
                            </div>
                        </a>
                        <a class="dropdown-item d-flex align-items-center" href="#">
                            <div class="dropdown-list-image mr-3">
                                <img class="rounded-circle" src="{{ asset('tmplt/img/undraw_profile_3.svg') }}"
                                    alt="...">
                                <div class="status-indicator bg-warning"></div>
                            </div>
                            <div>
                                <div class="text-truncate">Pestisida yang lalu membuat tanaman menjadi kurang
                                    berkualitas</div>
                                <div class="small text-gray-500">Morgan · 2d</div>
                            </div>
                        </a>
                        <a class="dropdown-item text-center small text-gray-500" href="#">Read More
                            Messages</a>
                    </div>
                </li>

                <div class="topbar-divider d-none d-sm-block"></div>

                <!-- Nav Item - User Information -->
                <li class="nav-item dropdown no-arrow">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="mr-2 d-none d-lg-inline text-gray-600 small">Hi, {{ Auth::user()->name }}</span>
                        <img class="img-profile rounded-circle" src="{{ asset('tmplt/img/undraw_profile.svg') }}">
                    </a>

                    <!-- Dropdown - User Information -->
                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                        aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="{{ route('profile.edit') }}">
                            <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                            Edit Profile
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                            Logout
                        </a>
                    </div>
                </li>

            </ul>

        </nav>
        <!-- End of Topbar -->
        <!-- Sidebar -->
        <div class="sidebar" id="customSidebar">
            <div class="sidebar-menu">
                <a href="/home">
                    <h6 class="menu-heading">Home</h6>
                </a>
                <ul>
                    <li>
                        <a href="/pengingat">
                            <i class="fas fa-clock"></i>
                            <span>Pengingat Jadwal Pestisida</span>
                        </a>
                    </li>
                    <li>
                        <a href="/pelaporan">
                            <i class="fas fa-exclamation-triangle"></i>
                            <span>Pelaporan Penggunaan Pestisida</span>
                        </a>
                    </li>
                    <li>
                        <a href="/petunjuk">
                            <i class="fas fa-info-circle"></i>
                            <span>Petunjuk Penggunaan Pestisida</span>
                        </a>
                    </li>
                    <li>
                        <a href="/bookmark">
                            <i class="fas fa-bookmark"></i>
                            <span>Bookmark</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- End of Sidebar -->

        <!-- CSS -->
        <style>
            body {
                display: flex;
                flex-direction: column;
                min-height: 100vh;
                /* Halaman memenuhi tinggi layar */
                margin: 0;
            }

            .sidebar {
                background-color: #29593D;
                color: #fff;
                width: 250px;
                height: 100vh;
                position: fixed;
                left: 0;
                top: 0;
                padding-top: 70px;
                /* Jarak dari navbar */
            }

            .sidebar-menu ul {
                list-style: none;
                padding: 0;
                margin: 0;
                width: 100%;
                text-align: left;
                /* Pastikan menu memanfaatkan lebar sidebar */
            }

            .sidebar-menu ul li {
                margin-bottom: 15px;
                /* Beri jarak antar item */
                background-color: #C0E5B7;
                border-radius: 5px;
            }

            .sidebar-menu ul li a {
                display: flex;
                align-items: center;
                color: #29593D;
                font-size: 16px;
                text-decoration: none;
                padding: 10px 15px;
                /* Jarak dalam item menu */
                transition: background-color 0.3s ease;
            }

            .sidebar-menu ul li a:hover {
                background-color: #3E774F;
                color: #fff;
            }

            .sidebar-menu ul li a i {
                margin-right: 10px;
            }

            .menu-heading {
                padding-left: 15px;
                font-size: 1.1rem;
                color: #fff;
                margin-bottom: 15px;
                font-weight: bold;
            }

            .dropdown-item:active,
            .dropdown-item.active {
                background-color: #C0E5B7 !important;
            }
        </style>

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const notifBadge = document.getElementById('notifBadge');

                if (notifBadge) {
                    notifBadge.addEventListener('click', function() {
                        // Hilangkan badge dengan cara menyembunyikannya
                        notifBadge.style.display = 'none';

                        // Kirim permintaan ke server untuk meng-update status notifikasi
                        fetch('/mark-notifications-read', {
                                method: 'POST',
                                headers: {
                                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')
                                        .content,
                                    'Content-Type': 'application/json',
                                },
                                body: JSON.stringify({
                                    clearNotifications: true
                                }),
                            })
                            .then(response => {
                                if (!response.ok) {
                                    console.error('Gagal mengupdate status notifikasi');
                                }
                            })
                            .catch(error => console.error('Terjadi kesalahan:', error));
                    });
                }
            });
        </script>
