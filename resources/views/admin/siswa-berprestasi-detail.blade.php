@extends('templates.main')

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
                    @php
                        $i = 1;
                    @endphp
                    @foreach ($siswa as $s)
                    @if ($i < 5)
                        <div class="card">
                            <div class="card-content">
                                <img class="card-img-top img-fluid" src="{{ $s->foto ?? 'https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_1280.png' }}" class="card-img" alt="Card image cap">
                                <div class="card-body">
                                    <h4 class="card-title">{{ $s->nama }} {{ $i }}</h4>
                                    <p class="card-text">
                                            Mendapatkan Predikat Juara {{ $loop->iteration }} dengan nilai rata2 {{ number_format($s->nilai, 2) }} dari {{ $s->count() }} siswa
                                    </p>
                                    <a href="{{ route('admin.data-siswa', [Crypt::encrypt($s->id), Crypt::encrypt($i)]) }}"><span class="badge bg-info">Lihat Data</span></a>
                                </div>
                            </div>
                        </div>
                        @php
                            $i++;
                        @endphp
                    @endif
                    @endforeach
                </div>
            </div>
        </div>
        </section>
    </div>
    <footer>
@endsection