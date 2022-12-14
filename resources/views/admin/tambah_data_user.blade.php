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
                    <li class="sidebar-item active">
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
                            <h3>Tambah Data</h3>
                            <p class="text-subtitle text-muted">User</p>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="index.html">Dashboard</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">User</li>
                            </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <!-- // Basic multiple Column Form section start -->
                <section id="multiple-column-form">
                <div class="row match-height">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">User Merupakan Perwakilan Pembimbing Kelas Yang bertangungjawab terhadap Nilai</h4>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <form class="form">
                                        <div class="row">
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="first-name-column">Nama</label>
                                                    <input type="text" id="first-name-column" class="form-control" placeholder="Nama" name="fname-column"></div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="last-name-column">Telepon</label>
                                                    <input type="text" id="last-name-column" class="form-control" placeholder="Telepon" name="lname-column"></div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="city-column">Email</label>
                                                    <input type="text" id="city-column" class="form-control" placeholder="Email" name="city-column"></div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="country-floating">Password</label>
                                                    <input type="text" id="country-floating" class="form-control" name="country-floating" placeholder="Password"></div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="company-column">Pembimbing Kelas</label>
                                                    <input type="text" id="company-column" class="form-control" name="company-column" placeholder="Pembimbing Kelas"></div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="email-id-column">Kota</label>
                                                    <input type="email" id="email-id-column" class="form-control" name="email-id-column" placeholder="Kota"></div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="email-id-column">Status</label>
                                                    <input type="email" id="email-id-column" class="form-control" name="email-id-column" placeholder="Status"></div>
                                            </div>
                                            <div class="form-group col-12">
                                                <div class='form-check'>
                                                    <div class="checkbox">
                                                        <input type="checkbox" id="checkbox5" class='form-check-input' checked>
                                                        <label for="checkbox5">Remember Me</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 d-flex justify-content-end">
                                                <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                                                <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </section>
                <!-- // Basic multiple Column Form section end -->
            </div>
            <footer>
            @endsection