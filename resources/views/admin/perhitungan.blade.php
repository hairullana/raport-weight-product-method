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
                        @for ($i = 1; $i <= 6 ; $i++)
                            <tr>
                                <td>{{ $i }}</td>
                                <td>{{ App\Models\Siswa::where('kelas', $i)->get()->count() }}</td>
                                <td>
                                    <a href="{{ route('admin.perhitungan-action', Crypt::encrypt($i)) }}"><span class="badge bg-warning">Hitung</span></a>
                                </td>
                            </tr>
                        @endfor
                    </tbody>
                    </table>
                </div>
            </div>
            </section>
        </div>
    </div>
@endsection