@extends('templates.admin')

@section('body')
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
@endsection