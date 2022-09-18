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
                    <li class="sidebar-item ">
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
                    <li class="sidebar-item active">
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
                            <h3>Data Siswa</h3>
                            <p class="text-subtitle text-muted">Klik Button Untuk Menghitung</p>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary jeda"data-bs-toggle="modal" data-bs-target="#exampleModal">Alternatif</button>
                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Alternatif</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <p>
                                                *Noted
                                            </p>
                                            <p>
                                                1. C1 merupakan nilai rata rata dari keseluruhan siswa kelas yang dihitung.
                                            </p>
                                            <p>
                                                2. C2 merupakan nilai kehadiran dari siswa
                                                </p>
                                                <p>
                                                    3. C3 merupakan nilai sikap siswa di kelas.
                                                </p>
                                                <table class="table table-striped" id="table1">
                                                <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Kode Kriteria</th>
                                                    <th>Nama Kriteria</th>
                                                    <th>Bobot</th>
                                                    <th>Tipe Data</th>
                                                    <th>Skala perhitungan</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>C1</td>
                                                    <td>Rata-Rata Nilai</td>
                                                    <td>60%</td>
                                                    <td>Bilangan Bulat</td>
                                                    <td>1-100</td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>C2</td>
                                                    <td>Kehadiran</td>
                                                    <td>30%</td>
                                                    <td>Bilangan Bulat</td>
                                                    <td>1-100</td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>C3</td>
                                                    <td>Sikap</td>
                                                    <td>10%</td>
                                                    <td>Bilangan Bulat</td>
                                                    <td>1-100</td>
                                                </tr>
                                                </tbody>
                                                </table>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Modal --></div>
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
                        <div class="card-header">Daftar Siswa Kelas I</div>
                        <div class="card-body">
                            <table class="table table-striped" id="table1">
                            <thead>
                            <tr>
                                <th>Kelas</th>
                                <th>Jumlah Siswa</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>30</td>
                                <td>
                                    <a href="kelas_1.html"><span class="badge bg-warning">Hitung</span></a>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>32</td>
                                <td>
                                    <a href="kelas_2.html"><span class="badge bg-warning">Hitung</span></a>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>22</td>
                                <td>
                                    <a href="kelas_3.html"><span class="badge bg-warning">Hitung</span></a>
                                </td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>42</td>
                                <td>
                                    <a href="kelas_4.html"><span class="badge bg-warning">Hitung</span></a>
                                </td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>30</td>
                                <td>
                                    <a href="kelas_5.html"><span class="badge bg-warning">Hitung</span></a>
                                </td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>62</td>
                                <td>
                                    <a href="kelas_6.html"><span class="badge bg-warning">Hitung</span></a>
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
        <script src="/admin-assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
        <script src="/admin-assets/js/bootstrap.bundle.min.js"></script>
        <script src="/admin-assets/vendors/simple-datatables/simple-datatables.js"></script>
        <script>
        // Simple Datatable
        let table1 = document.querySelector('#table1');
        let dataTable = new simpleDatatables.DataTable(table1);
    </script>
        <script src="/admin-assets/js/main.js"></script>
        </body>
        </html>