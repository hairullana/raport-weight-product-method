<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Dashboard - Baiq Nikum Yulisasih (1800018282)</title>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
<link rel="stylesheet" href="/admin-assets/css/bootstrap.css">
<link rel="stylesheet" href="/admin-assets/vendors/iconly/bold.css">
<link rel="stylesheet" href="/admin-assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
<link rel="stylesheet" href="/admin-assets/vendors/bootstrap-icons/bootstrap-icons.css">
<link rel="stylesheet" href="/admin-assets/css/app.css">
<link rel="shortcut icon" href="/admin-assets/images/favicon.svg" type="image/x-icon">
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
                    <li class="sidebar-item ">
                        <a href="Perhitungan.html" class='sidebar-link'>
                        <i class="bi bi-file-earmark-spreadsheet-fill"></i>
                        <span>Perhitungan</span>
                        </a>
                    </li>
                    <li class="sidebar-item active">
                        <a href="dashboard-siswa-berprestasi.html" class='sidebar-link'>
                        <i class="bi bi-file-earmark-spreadsheet-fill"></i>
                        <span>Siswa Berprestasi</span>
                        </a>
                    </li>
                    <li class="sidebar-item ">
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
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>Kelas I</h3>
                            <p class="text-subtitle text-muted">
                                 Berikut adalah Daftar Siswa Kelas I yang berprestasi
                            </p>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="index.html">Dashboard</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Siswa Berprestasi</li>
                            </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <!-- Groups section start -->
                <section id="groups">
                <div class="row match-height">
                    <div class="col-12 mt-3 mb-1">
                        <h4 class="section-title text-uppercase">Nama Siswa Berprestasi</h4>
                    </div>
                </div>
                <div class="row match-height">
                    <div class="col-12">
                        <div class="card-group">
                            <div class="card">
                                <div class="card-content">
                                    <img class="card-img-top img-fluid" src="https://i.ibb.co/8Y9LNYb/download.jpg" class="card-img" alt="Card image cap">
                                    <div class="card-body">
                                        <h4 class="card-title">Baiq Nikum Yulisasih</h4>
                                        <p class="card-text">
                                             Mendapatkan Predikat Juara 1 dengan nilai rata2 89 dari 30 siswa
                                        </p>
                                        <a href="lihat_data_siswa_berprestasi.html"><span class="badge bg-primary">Lihat Data</span></a>
                                        <small class="text-muted">Last updated 3 mins ago</small>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-content">
                                    <img class="card-img-top img-fluid" src="https://i.ibb.co/8Y9LNYb/download.jpg" class="card-img" alt="Card image cap"/>
                                    <div class="card-body">
                                        <h4 class="card-title">Leonardo Davinci</h4>
                                        <p class="card-text">
                                             Mendapatkan Predikat Juara 2 dengan nilai rata2 87 dari 30 siswa
                                        </p>
                                        <a href="lihat_data_siswa_berprestasi.html"><span class="badge bg-primary">Lihat Data</span></a>
                                        <small class="text-muted">Last updated 3 mins ago</small>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-content">
                                    <img class="card-img-top img-fluid" src="https://i.ibb.co/8Y9LNYb/download.jpg" class="card-img" alt="Card image cap">
                                    <div class="card-body">
                                        <h4 class="card-title">Siti Kamila</h4>
                                        <p class="card-text">
                                             Mendapatkan Predikat Juara 3 dengan nilai rata2 85 dari 30 siswa
                                        </p>
                                        <a href="lihat_data_siswa_berprestasi.html"><span class="badge bg-primary">Lihat Data</span></a>
                                        <small class="text-muted">Last updated 3 mins ago</small>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-content">
                                    <img class="card-img-top img-fluid" src="https://i.ibb.co/8Y9LNYb/download.jpg" class="card-img" alt="Card image cap">
                                    <div class="card-body">
                                        <h4 class="card-title">Davis lavanya</h4>
                                        <p class="card-text">
                                             Mendapatkan Predikat Juara 4 dengan nilai rata2 84 dari 30 siswa
                                        </p>
                                        <a href="lihat_data_siswa_berprestasi.html"><span class="badge bg-primary">Lihat Data</span></a>
                                        <small class="text-muted">Last updated 3 mins ago</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </section>
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
    <script src="/admin-assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="/admin-assets/js/bootstrap.bundle.min.js"></script>
    <script src="/admin-assets/vendors/apexcharts/apexcharts.js"></script>
    <script src="/admin-assets/js/pages/dashboard.js"></script>
    <script src="/admin-assets/js/main.js"></script>
    </body>
    </html>