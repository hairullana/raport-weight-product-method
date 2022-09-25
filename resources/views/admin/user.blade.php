@extends('templates.main')

@section('body')
    <header class="mb-3">
    <a href="#" class="burger-btn d-block d-xl-none"><i class="bi bi-justify fs-3"></i></a>
    </header>
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Data User</h3>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{ route('admin.index') }}">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Daftar User</li>
                    </ol>
                    </nav>
                </div>
            </div>
        </div>
        <section class="section">
        <div class="card">
            <div class="card-header">Daftar Pembimbing Kelas</div>
            <div class="card-body">
                {{-- <a href="tambah_data_user.html"><span class="badge bg-primary">Tambah Data</span></a> --}}
                <table class="table table-striped" id="table1">
                <thead>
                <tr>
                    <th>Nama</th>
                    <th>Username</th>
                    <th>Pembimbing Kelas</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($users as $guru)
                        <tr>
                            <td>{{ $guru->nama }}</td>
                            <td>{{ $guru->username }}</td>
                            <td>{{ $guru->kelas }}</td>
                            <td>
                                <a href="{{ route('admin.edit-user', Crypt::encrypt($guru->id)) }}"><span class="badge bg-warning">Edit</span></a>
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