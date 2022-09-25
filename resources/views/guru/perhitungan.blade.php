@extends('templates.main')

@section('body')
<header class="mb-3">
    <a href="#" class="burger-btn d-block d-xl-none"><i class="bi bi-justify fs-3"></i></a>
    </header>
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Data Siswa</h3>
                    <p class="text-subtitle text-muted">Hasil Perhitungan</p>
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
                 Hasil Perhitungan Metode Weigted Product <a href="#"><span class="badge bg-dark">Cetak Semua Data</span></a>
            </div>
            <div class="card-body">
                <table class="table table-striped" id="table1">
                <thead>
                <tr>
                    <th>Peringkat</th>
                    <th>NISN</th>
                    <th>Nama</th>
                    <th>Nilai C1</th>
                    <th>Nilai C2</th>
                    <th>Nilai C3</th>
                    <th>Nilai Akhir</th>
                    <th>Status</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($siswas as $siswa)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $siswa->nisn }}</td>
                            <td>{{ $siswa->nama }}</td>
                            <td>{{ number_format($siswa->c1, 2) }}</td>
                            <td>{{ number_format($siswa->c2, 2) }}</td>
                            <td>{{ number_format($siswa->c3, 2) }}</td>
                            <td>{{ number_format($siswa->nilai, 2) }}</td>
                            <td>
                                <a href="{{ route('guru.data-siswa', [Crypt::encrypt($siswa->id), Crypt::encrypt($loop->iteration)]) }}"><span class="badge bg-info">Lihat Data</span></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                </table>
            </div>
        </div>
        </section>
    </div>
@endsection