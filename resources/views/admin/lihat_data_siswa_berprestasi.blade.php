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
                    <li class="sidebar-item">
                        <a href="index.html" class='sidebar-link'>
                        <i class="bi bi-grid-fill"></i>
                        <span>Dashboard</span>
                        </a>
                    </li>
                    <li class="sidebar-item ">
                        <a href="dashboard-table.html" class='sidebar-link'>
                        <i class="bi bi-file-earmark-spreadsheet-fill"></i>
                        <span>Daftar Siswa</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="Perhitungan.html" class='sidebar-link'>
                        <i class="bi bi-file-earmark-spreadsheet-fill"></i>
                        <span>Perhitungan</span>
                        </a>
                    </li>
                    <li class="sidebar-item active ">
                        <a href="dashboard-siswa-berprestasi.html" class='sidebar-link'>
                        <i class="bi bi-file-earmark-spreadsheet-fill"></i>
                        <span>Siswa Berprestasi</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="user.html" class='sidebar-link'>
                        <i class="bi bi-grid-fill"></i>
                        <span>user</span>
                        </a>
                    </li>
                    <li class="sidebar-item ">
                        <a href="logout.html" class='sidebar-link'>
                        <i class="bi bi-grid-fill"></i>
                        <span>Log out</span>
                        </a>
                    </li>
                </div>
                <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
            </div>
        </div>
        <div id="main">
            <header class="mb-3">
            <a href="#" class="burger-btn d-block d-xl-none"><i class="bi bi-justify fs-3"></i></a>
            </header>
            <div class="page-heading">
                <div class="card mb-3">
                    <img src="https://i.ibb.co/8Y9LNYb/download.jpg" class="card-img" style="float: center height: 300ps; width :200px;" height="300" width="200" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Baiq Nikum Yulisasih</h5>
                        <p class="card-text">
                            Peringkat <span nbsp double>: 1</span>
                        </p>
                        <p class="card-text">NISN : 2304</p>
                        <p class="card-text">Nilai C1 : 88</p>
                        <p class="card-text">Nilai C2 : 90</p>
                        <p class="card-text">Nilai C3 : 87</p>
                        <p class="card-text">Nilai Akhir : 89</p>
                        <p class="card-text">Status : active</p>
                        <p class="card-text">
                            <small class="text-muted">Last updated 3 mins ago</small>
                        </p>
                    </div>
                </div>
            </div>
            <footer>
            @endsection