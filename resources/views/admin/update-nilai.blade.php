@extends('templates.main')

@section('body')
            <header class="mb-3">
            <a href="#" class="burger-btn d-block d-xl-none"><i class="bi bi-justify fs-3"></i></a>
            </header>
            <div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>Tambah Nilai </h3>
                            <p class="text-subtitle text-muted">Siswa</p>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="index.html">Dashboard</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Siswa</li>
                            </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <!-- // Basic multiple Column Form section start -->
                <section id="multiple-column-form">
                <div class="row match-height">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">User Merupakan Perwakilan Pembimbing Kelas Yang bertangungjawab terhadap Nilai</h4>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    @if (Session::has('message'))
                                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                                            {{ Session::get('message') }}
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                        </div>
                                    @endif
                                    <form class="form" method="POST" action="{{ route('admin.update-nilai-action', request()->siswa_id) }}">
                                        @csrf
                                        <div class="row">
                                            {{-- DATA SISWA --}}
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="nisn">NISN</label>
                                                    <input type="text" id="nisn" class="form-control" placeholder="NISN" name="nisn" value="{{ $siswa->nisn }}" disabled required>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="nama">Nama</label>
                                                    <input type="text" id="nama" class="form-control" placeholder="Nama" name="nama" value="{{ $siswa->nama }}" disabled required>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="is_active">Status</label>
                                                    <select name="is_active" id="is_active" class="form-select" required>
                                                        <option value="1" @if($siswa->is_active == 1) @selected(true) @endif>Aktif</option>
                                                        <option value="0" @if($siswa->is_active == 2) @selected(true) @endif>Tidak Aktif</option>
                                                    </select>
                                                </div>
                                            </div>

                                            {{-- NILAI --}}
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="pabd">Nilai PABD</label>
                                                    <input type="text" id="pabd" class="form-control" placeholder="" name="pabd" value="{{ $nilai->pabd }}" required></div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="ppkn">Nilai PPKN</label>
                                                    <input type="text" id="ppkn" class="form-control" placeholder="" name="ppkn" value="{{ $nilai->ppkn }}" required></div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="bahasa_indonesia">Nilai Bahasa Indonesia</label>
                                                    <input type="text" id="bahasa_indonesia" class="form-control" placeholder="" name="bahasa_indonesia" value="{{ $nilai->bahasa_indonesia }}" required></div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="matematika">Nilai Matematika</label>
                                                    <input type="text" id="matematika" class="form-control" placeholder="" name="matematika" value="{{ $nilai->matematika }}" required></div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="ipa">Nilai IPA</label>
                                                    <input type="text" id="ipa" class="form-control" placeholder="" name="ipa" value="{{ $nilai->ipa }}" required></div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="ips">Nilai IPS</label>
                                                    <input type="text" id="ips" class="form-control" placeholder="" name="ips" value="{{ $nilai->ips }}" required></div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="sbdb">Nilai SBDB</label>
                                                    <input type="text" id="sbdb" class="form-control" placeholder="" name="sbdb" value="{{ $nilai->sbdb }}" required></div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="bahasa_jawa">Nilai BAHASA Jawa</label>
                                                    <input type="text" id="bahasa_jawa" class="form-control" placeholder="" name="bahasa_jawa" value="{{ $nilai->bahasa_jawa }}" required></div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="pendidikan_batik">Nilai Pendidikan Batik</label>
                                                    <input type="text" id="pendidikan_batik" class="form-control" placeholder="" name="pendidikan_batik" value="{{ $nilai->pendidikan_batik }}" required></div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="kehadiran">Nilai Kehadiran</label>
                                                    <input type="text" id="kehadiran" class="form-control" placeholder="" name="kehadiran" value="{{ $nilai->kehadiran }}" required></div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="sikap">Nilai Sikap</label>
                                                    <input type="text" id="sikap" class="form-control" placeholder="" name="sikap" value="{{ $nilai->sikap }}" required></div>
                                            </div>
                                        
                                            <div class="col-12 d-flex justify-content-end">
                                                <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </section>
                <!-- // Basic multiple Column Form section end -->
            </div>
            <footer>
            @endsection