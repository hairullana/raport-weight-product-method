@extends('templates.admin')

@section('body')    
    <header class="mb-3">
    <a href="#" class="burger-btn d-block d-xl-none"><i class="bi bi-justify fs-3"></i></a>
    </header>
    <div class="page-heading">
        <h3>Pembimbing Kelas</h3>
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
                                        <div class="stats-icon purple">
                                            <i class="iconly-boldShow"></i>
                                        </div>
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
                <h3>Siswa Berprestasi</h3>
            </div>
            <div class="page-content">
                <section class="row">
                <div class="col-12 col-lg-12">
                    <div class="row">
                        <div class="col-6 col-lg-3 col-lg-3">
                            <div class="card">
                                <div class="card-body px-3 py-4-5">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="stats-icon green">
                                                <i class="iconly-boldAdd-User"></i>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <h6 class="text-muted font-semibold">Kelas I</h6>
                                            <h6 class="font-extrabold mb-0">Baiq Nikum Yulisasih</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-lg-3 col-lg-3">
                            <div class="card">
                                <div class="card-body px-3 py-4-5">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="stats-icon green">
                                                <i class="iconly-boldAdd-User"></i>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <h6 class="text-muted font-semibold">Kelas II</h6>
                                            <h6 class="font-extrabold mb-0">Bambang sudiro</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-lg-3 col-lg-3">
                            <div class="card">
                                <div class="card-body px-3 py-4-5">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="stats-icon green">
                                                <i class="iconly-boldAdd-User"></i>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <h6 class="text-muted font-semibold">Kelas III</h6>
                                            <h6 class="font-extrabold mb-0">Sulissati Wicaksono</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-lg-3 col-lg-3">
                            <div class="card">
                                <div class="card-body px-3 py-4-5">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="stats-icon green">
                                                <i class="iconly-boldAdd-User"></i>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <h6 class="text-muted font-semibold">Kelas IV</h6>
                                            <h6 class="font-extrabold mb-0">Marko Felish</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-lg-3 col-lg-3">
                            <div class="card">
                                <div class="card-body px-3 py-4-5">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="stats-icon green">
                                                <i class="iconly-boldAdd-User"></i>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <h6 class="text-muted font-semibold">Kelas V</h6>
                                            <h6 class="font-extrabold mb-0">Dianti Presmasni</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-lg-3 col-lg-3">
                            <div class="card">
                                <div class="card-body px-3 py-4-5">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="stats-icon green">
                                                <i class="iconly-boldAdd-User"></i>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <h6 class="text-muted font-semibold">Kelas VI</h6>
                                            <h6 class="font-extrabold mb-0">Joko Santoso</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </section>
                </div>
                <footer>
                <div class="footer clearfix mb-0 text-muted">
                    <div class="float-start">
                        <p>
                            2022 &copy; Universitas Ahmad Dalam
                        </p>
                    </div>
                    <div class="float-end">
                        <p>
                            Crafted with <span class="text-danger"><i class="bi bi-heart"></i></span> by Baiq Nikum Yulisasih (1800018282)</a>
                        </p>
                    </div>
                </div>
                </footer>
            </div>
        </section>
    </div>
@endsection