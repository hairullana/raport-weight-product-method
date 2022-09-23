@extends('templates.admin')

@section('body')
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
@endsection