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
                    <a href="{{ route('admin.perhitungan-action', request()->kelas) }}"><span class="badge bg-primary">Mode Standart</span></a>
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
                        @foreach ($siswas as $siswa)
                            @php
                                $nilai = App\Models\Nilai::where('siswa_id', $siswa->id)->first();
                            @endphp
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $siswa->nisn }}</td>
                                <td>{{ $siswa->nama }}</td>
                                <td>{{ $nilai->pabd }}</td>
                                <td>{{ $nilai->ppkn }}</td>
                                <td>{{ $nilai->bahasa_indonesia }}</td>
                                <td>{{ $nilai->matematika }}</td>
                                <td>{{ $nilai->ipa }}</td>
                                <td>{{ $nilai->ips }}</td>
                                <td>{{ $nilai->sbdb }}</td>
                                <td>{{ $nilai->pjok }}</td>
                                <td>{{ $nilai->bahasa_jawa }}</td>
                                <td>{{ $nilai->pendidikan_batik }}</td>
                                <td>{{ $nilai->kehadiran }}</td>
                                <td>{{ $nilai->sikap }}</td>
                                <td>{{ number_format($siswa->nilai, 2) }}</td>
                                <td>
                                    <a href="{{ route('admin.edit-siswa-status', Crypt::encrypt($siswa->id)) }}" onclick="confirm('Apakah anda yakin untuk mengubah status siswa?')">
                                        <span class="badge bg-{{ $siswa->is_active ? 'success' : 'danger' }}">{{ $siswa->is_active ? 'Aktif' : 'Tidak Aktif' }}</span>
                                    </a>
                                </td>
                                <td>
                                <a href="{{ route('admin.update-nilai', Crypt::encrypt($siswa->id)) }}"><span class="badge bg-primary">Update Nilai</span></a>
                                </td>
                                <td>
                                    <a href="{{ route('admin.data-siswa', Crypt::encrypt($siswa->id)) }}"><span class="badge bg-info">Lihat Data</span></a>
                                    <a href="{{ route('admin.edit-siswa', Crypt::encrypt($siswa->id)) }}"><span class="badge bg-warning">Edit</span></a>
                                    <a href="{{ route('admin.hapus-siswa', Crypt::encrypt($siswa->id)) }}" onclick="confirm('Apakah anda yakin untuk menghapus data siswa?')"><span class="badge bg-danger">Hapus</span></a>
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