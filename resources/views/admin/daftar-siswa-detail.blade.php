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
                    <p class="text-subtitle text-muted">Kelas {{ Crypt::decrypt(request()->kelas) }}</p>
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
                Daftar Siswa Kelas {{ Crypt::decrypt(request()->kelas) }} <a href="{{ route('admin.tambah-siswa', request()->kelas) }}"><span class="badge bg-primary">Tambah Data</span></a>
            </div>
            <div class="card-body">
                @if (Session::has('message'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ Session::get('message') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
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
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $siswa->nisn }}</td>
                            <td>{{ $siswa->nama }}</td>
                            <td>{{ $siswa->nilai->pabd }}</td>
                            <td>{{ $siswa->nilai->ppkn }}</td>
                            <td>{{ $siswa->nilai->bahasa_indonesia }}</td>
                            <td>{{ $siswa->nilai->matematika }}</td>
                            <td>{{ $siswa->nilai->ipa }}</td>
                            <td>{{ $siswa->nilai->ips }}</td>
                            <td>{{ $siswa->nilai->sbdb }}</td>
                            <td>{{ $siswa->nilai->pjok }}</td>
                            <td>{{ $siswa->nilai->bahasa_jawa }}</td>
                            <td>{{ $siswa->nilai->pendidikan_batik }}</td>
                            <td>{{ $siswa->nilai->kehadiran }}</td>
                            <td>{{ $siswa->nilai->sikap }}</td>
                            <td>
                                <span class="badge bg-{{ $siswa->is_active ? 'success' : 'danger' }}">{{ $siswa->is_active ? 'Aktif' : 'Tidak Aktif' }}</span>
                            </td>
                            <td>
                            <a href="{{ route('admin.update-nilai', Crypt::encrypt($siswa->id)) }}"><span class="badge bg-primary">Update Nilai</span></a>
                            </td>
                            <td>
                                <a href="{{ route('admin.data-siswa', Crypt::encrypt($siswa->id)) }}"><span class="badge bg-info">Lihat Data</span></a>
                                <a href="edit_data_siswa.html"><span class="badge bg-warning">Edit</span></a>
                                <a href="hapus.html"><span class="badge bg-danger">Hapus</span></a>
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