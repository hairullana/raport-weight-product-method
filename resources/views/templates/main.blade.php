<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Dashboard - Baiq Nikum Yulisasih (1800018282)</title>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
<link rel="stylesheet" href="/dashboard-assets/css/bootstrap.css">
<link rel="stylesheet" href="/dashboard-assets/vendors/iconly/bold.css">
<link rel="stylesheet" href="/dashboard-assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
<link rel="stylesheet" href="/dashboard-assets/vendors/bootstrap-icons/bootstrap-icons.css">
<link rel="stylesheet" href="/dashboard-assets/css/app.css">
<link rel="shortcut icon" href="/dashboard-assets/images/favicon.svg" type="image/x-icon">
</head>
<body>
<div id="app">
    <div id="sidebar" class="active">
        <div class="sidebar-wrapper active">
            <div class="sidebar-header">
                <div class="d-flex justify-content-between">
                    <div class="logo">
                        <li class="sidebar-title">E-RAPOT</li>
                        <a href="index.html"></a>
                    </div>
                    <div class="toggler">
                        <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                    </div>
                </div>
            </div>
            <div class="sidebar-menu">
                <ul class="menu">
                    <li class="sidebar-title">Menu</li>
                    <li class="sidebar-item @if ($active == 'dashboard') active @endif">
                        @if (Auth::guard('admin')->check())
                            <a href="{{ route('admin.index') }}" class='sidebar-link'>
                        @else
                            <a href="{{ route('guru.index') }}" class='sidebar-link'>
                        @endif
                        <i class="bi bi-grid-fill"></i>
                        <span>Dashboard</span>
                        </a>
                    </li>
                    <li class="sidebar-item @if ($active == 'daftar-siswa') active @endif">
                        @if (Auth::guard('admin')->check())
                            <a href="{{ route('admin.daftar-siswa') }}" class='sidebar-link'>
                        @else
                            <a href="{{ route('guru.daftar-siswa') }}" class='sidebar-link'>
                        @endif
                        <i class="bi bi-file-earmark-spreadsheet-fill"></i>
                        <span>Daftar Siswa</span>
                        </a>
                    </li>
                    <li class="sidebar-item @if ($active == 'perhitungan') active @endif">
                        @if (Auth::guard('admin')->check())
                            <a href="{{ route('admin.perhitungan') }}" class='sidebar-link'>
                        @else
                            <a href="{{ route('guru.perhitungan') }}" class='sidebar-link'>
                        @endif
                        <i class="bi bi-file-earmark-spreadsheet-fill"></i>
                        <span>Perhitungan</span>
                        </a>
                    </li>
                    <li class="sidebar-item @if ($active == 'siswa-berprestasi') active @endif">
                        @if (Auth::guard('admin')->check())
                            <a href="{{ route('admin.siswa-berprestasi') }}" class='sidebar-link'>
                        @else
                            <a href="{{ route('guru.siswa-berprestasi') }}" class='sidebar-link'>
                        @endif
                        <i class="bi bi-file-earmark-spreadsheet-fill"></i>
                        <span>Siswa Berprestasi</span>
                        </a>
                    </li>
                    @if (Auth::guard('admin')->check())
                        <li class="sidebar-item @if ($active == 'users') active @endif">
                        <a href="{{ route('admin.users') }}" class='sidebar-link'>
                            <a href="{{ route('guru.users') }}" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span>user</span>
                            </a>
                        </li>
                    @endif
                    <li class="sidebar-item @if ($active == '') active @endif">
                        <a href="{{ route('auth.logout') }}" class='sidebar-link'>
                        <i class="bi bi-grid-fill"></i>
                        <span>Log out</span>
                        </a>
                    </li>
                </ul>
            </div>
            <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
        </div>
    </div>
    <div id="main">
        @yield('body')
    </div>
    <footer>
        <div class="footer clearfix mb-0 text-muted">
            <div class="float-start">
                <p>
                    2022 &copy; Universitas Ahmad Dalam
                </p>
            </div>
            <div class="float-end">
                <p>
                    Crafted with <span class="text-danger"><i class="bi bi-heart"></i></span> by Baiq Nikum Yulisasih (1800018282)</a>
                </p>
            </div>
        </div>
        </footer>
    </div>
</div>
<script src="/dashboard-assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script src="/dashboard-assets/js/bootstrap.bundle.min.js"></script>
<script src="/dashboard-assets/vendors/apexcharts/apexcharts.js"></script>
<script src="/dashboard-assets/js/pages/dashboard.js"></script>
<script src="/dashboard-assets/js/main.js"></script>
<script src="/dashboard-assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script src="/dashboard-assets/js/bootstrap.bundle.min.js"></script>
<script src="/dashboard-assets/vendors/simple-datatables/simple-datatables.js"></script>
<script>
    // Simple Datatable
    let table1 = document.querySelector('#table1');
    let dataTable = new simpleDatatables.DataTable(table1);
</script>
<script src="/dashboard-assets/js/main.js"></script>
@stack('custom-js')
</body>
</html>