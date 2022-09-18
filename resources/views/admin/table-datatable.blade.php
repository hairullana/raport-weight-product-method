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
                    <li class="sidebar-item active">
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
                </ul>
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
                <div class="card-header">
                    Daftar Siswa Kelas I <a href="tambah_data_siswa.html"><span class="badge bg-primary">Tambah Data</span></a>
                </div>
                <div class="card-body">
                    <table class="table table-striped" id="table1">
                    <thead>
                    <tr>
                        <th>No</th>
                            <th>NISN</th>
                            <th>Nama</th>
                            <th>Nilai PABD</th>
                            <th>Nilai PPKN</th>
                            <th>Nilai Bahasa Indonesia</th>
                            <th>Nilai Matematika</th>
                            <th>Nilai IPA</th>
                            <th>Nilai IPS</th>
                            <th>Nilai SBDB</th>
                            <th>Nilai PJOK</th>
                            <th>Nilai BAHASA Jawa</th>
                            <th>Nilai Pendidikan Batik</th>
                            <th>Nilai Keadiran</th>
                            <th>Nilai Sikap</th>
                            <th>Status</th>
                            <th>Tambah Nilai</th>
                            <th>Aksi</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>1</td>
                        <td>2304</td>
                        <td>Baiq Nikum Yulisasih</td>
                        <td>88</td>
                            <td>90</td>
                            <td>87</td>
                            <td>88</td>
                            <td>88</td>
                            <td>88</td>
                            <td>88</td>
                            <td>88</td>
                            <td>88</td>
                            <td>88</td>
                            <td>88</td>
                            <td>88</td>
                        <td>
                            <span class="badge bg-success">Active</span>
                        </td>
                         <td>
                            <a href="tambah_nilai.html"><span class="badge bg-primary">Tambah Nilai</span></a>
                        </td>
                        <td>
                            <a href="lihat_data_siswa.html"><span class="badge bg-info">Lihat Data</span></a>
                            <a href="edit_data_siswa.html"><span class="badge bg-warning">Edit</span></a>
                            <a href="hapus.html"><span class="badge bg-danger">Hapus</span></a>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>2305</td>
                        <td>Leonardo Davinci</td>
                       <td>88</td>
                            <td>90</td>
                            <td>87</td>
                            <td>88</td>
                            <td>88</td>
                            <td>88</td>
                            <td>88</td>
                            <td>88</td>
                            <td>88</td>
                            <td>88</td>
                            <td>88</td>
                            <td>89</td> 
                        <td>
                            <span class="badge bg-success">Active</span>
                        </td>
                        <td>
                            <a href="tambah_nilai.html"><span class="badge bg-primary">Tambah Nilai</span></a>
                        </td>
                        <td>
                            <a href="lihat_data_siswa.html"><span class="badge bg-info">Lihat Data</span></a>
                            <a href="Edit.html"><span class="badge bg-warning">Edit</span></a>
                            <a href="hapus.html"><span class="badge bg-danger">Hapus</span></a>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>2306</td>
                        <td>Siti Kamila</td>
                     <td>88</td>
                            <td>90</td>
                            <td>87</td>
                            <td>88</td>
                            <td>88</td>
                            <td>88</td>
                            <td>88</td>
                            <td>88</td>
                            <td>88</td>
                            <td>88</td>
                            <td>88</td>
                            <td>89</td>
                        <td>
                            <span class="badge bg-success">Active</span>
                        </td>
                        <td>
                            <a href="tambah_nilai.html"><span class="badge bg-primary">Tambah Nilai</span></a>
                        </td>
                        <td>
                            <a href="lihat_data_siswa.html"><span class="badge bg-info">Lihat Data</span></a>
                            <a href="Edit.html"><span class="badge bg-warning">Edit</span></a>
                            <a href="hapus.html"><span class="badge bg-danger">Hapus</span></a>
                        </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>2307</td>
                        <td>Davis lavanya</td>
                  <td>88</td>
                            <td>90</td>
                            <td>87</td>
                            <td>88</td>
                            <td>88</td>
                            <td>88</td>
                            <td>88</td>
                            <td>88</td>
                            <td>88</td>
                            <td>88</td>
                            <td>88</td>
                            <td>88</td>
                        <td>
                            <span class="badge bg-success">Active</span>
                        </td>
                        <td>
                            <a href="tambah_nilai.html"><span class="badge bg-primary">Tambah Nilai</span></a>
                        </td>
                        <td>
                            <a href="lihat_data_siswa.html"><span class="badge bg-info">Lihat Data</span></a>
                            <a href="Edit.html"><span class="badge bg-warning">Edit</span></a>
                            <a href="hapus.html"><span class="badge bg-danger">Hapus</span></a>
                        </td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>2308</td>
                        <td>Krisna Angga</td>
                   <td>88</td>
                            <td>90</td>
                            <td>87</td>
                            <td>88</td>
                            <td>88</td>
                            <td>88</td>
                            <td>88</td>
                            <td>88</td>
                            <td>88</td>
                            <td>88</td>
                            <td>88</td>
                            <td>88</td>

                        <td>
                            <span class="badge bg-success">Active</span>
                        </td>
                        <td>
                            <a href="tambah_nilai.html"><span class="badge bg-primary">Tambah Nilai</span></a>
                        </td>
                        <td>
                            <a href="lihat_data_siswa.html"><span class="badge bg-info">Lihat Data</span></a>
                            <a href="Edit.html"><span class="badge bg-warning">Edit</span></a>
                            <a href="hapus.html"><span class="badge bg-danger">Hapus</span></a>
                        </td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>2309</td>
                        <td>Yuning Saestri</td>
                    <td>88</td>
                            <td>90</td>
                            <td>87</td>
                            <td>88</td>
                            <td>88</td>
                            <td>88</td>
                            <td>88</td>
                            <td>88</td>
                            <td>88</td>
                            <td>88</td>
                            <td>88</td>
                            <td>89</td>
                        <td>
                            <span class="badge bg-success">Active</span>
                        </td>
                        <td>
                            <a href="tambah_nilai.html"><span class="badge bg-primary">Tambah Nilai</span></a>
                        </td>
                        <td>
                            <a href="lihat_data_siswa.html"><span class="badge bg-info">Lihat Data</span></a>
                            <a href="Edit.html"><span class="badge bg-warning">Edit</span></a>
                            <a href="hapus.html"><span class="badge bg-danger">Hapus</span></a>
                        </td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>2400</td>
                        <td>Dorsal mareka</td>
                      <td>88</td>
                            <td>90</td>
                            <td>87</td>
                            <td>88</td>
                            <td>88</td>
                            <td>88</td>
                            <td>88</td>
                            <td>88</td>
                            <td>88</td>
                            <td>88</td>
                            <td>88</td>
                            <td>88</td>
                        <td>
                            <span class="badge bg-danger">Non-Active</span>
                        </td>
                        <td>
                            <a href="tambah_nilai.html"><span class="badge bg-primary">Tambah Nilai</span></a>
                        </td>
                        <td>
                            <a href="lihat_data_siswa.html"><span class="badge bg-info">Lihat Data</span></a>
                            <a href="Edit.html"><span class="badge bg-warning">Edit</span></a>
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