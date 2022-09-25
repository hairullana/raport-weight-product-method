@extends('templates.main')

@section('body')
    <header class="mb-3">
    <a href="#" class="burger-btn d-block d-xl-none"><i class="bi bi-justify fs-3"></i></a>
    </header>
    <div class="page-heading">
        <h3>Lihat Siswa</h3>
    </div>
    <div class="page-content">
        <section class="row">
        <div class="col-12 col-lg-12">
            <div class="row">
                @foreach ($gurus as $guru)
                    <div class="col-6 col-lg-3 col-lg-3">
                        <div class="card">
                            <div class="card-body px-3 py-4-5">
                                <div class="row">
                                    <div class="col-md-4">
                                        <a href="{{ route('admin.daftar-siswa-detail', Crypt::encrypt($guru->kelas)) }}">
                                        <div class="stats-icon purple">
                                            <i class="iconly-boldShow"></i>
                                        </div>
                                        </a>
                                    </div>
                                    <div class="col-md-8">
                                        <h6 class="text-muted font-semibold">Kelas {{ $guru->kelas }}</h6>
                                        <h6 class="font-extrabold mb-0">{{ $guru->nama }}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                </section>
            </div>
        </div>
    </div>
@endsection