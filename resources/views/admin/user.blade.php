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
                    <li class="sidebar-item ">
                        <a href="dashboard-siswa-berprestasi.html" class='sidebar-link'>
                        <i class="bi bi-file-earmark-spreadsheet-fill"></i>
                        <span>Siswa Berprestasi</span>
                        </a>
                    </li>
                    <li class="sidebar-item active ">
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
                            <h3>Data Siswa</h3>
                            <p class="text-subtitle text-muted">Kelas I</p>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="index.html">Dashboard</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Daftar Siswa</li>
                            </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <section class="section">
                <div class="card">
                    <div class="card-header">Daftar Pembimbing Kelas</div>
                    <div class="card-body">
                        <a href="tambah_data_user.html"><span class="badge bg-primary">Tambah Data</span></a>
                        <table class="table table-striped" id="table1">
                        <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Telepon</th>
                            <th>Kota</th>
                            <th>Pembimbing Kelas</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Arianto Buidowo</td>
                            <td>Bara@gmail.com</td>
                            <td>0894820 8838</td>
                            <td>joogja</td>
                            <td>1</td>
                            <td>
                                <span class="badge bg-success">Active</span>
                            </td>
                            <td>
                                <a href="edit_data_user.html"><span class="badge bg-warning">Edit</span></a>
                                <a href="hapus.html"><span class="badge bg-danger">Hapus</span></a>
                            </td>
                        </tr>
                        <tr>
                            <td>Bambang</td>
                            <td>Dale@gmail.com</td>
                            <td>087 527693</td>
                            <td>solo</td>
                            <td>2</td>
                            <td>
                                <span class="badge bg-danger">Non-Active</span>
                            </td>
                            <td>
                                <a href="edit_data_user.html"><span class="badge bg-warning">Edit</span></a>
                                <a href="hapus.html"><span class="badge bg-danger">Hapus</span></a>
                            </td>
                        </tr>
                        </tbody>
                        </table>
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