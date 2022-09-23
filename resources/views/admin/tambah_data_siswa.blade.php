@extends('templates.admin')

@section('body')
    <header class="mb-3">
    <a href="#" class="burger-btn d-block d-xl-none"><i class="bi bi-justify fs-3"></i></a>
    </header>
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Tambah Data</h3>
                    <p class="text-subtitle text-muted">Siswa</p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="index.html">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">User</li>
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
                            <form class="form" method="POST" enctype="multipart/form-data" action="{{ route('admin.tambah-siswa-action', request()->kelas) }}">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="nisn">NISN</label>
                                                    <input type="text" id="nisn" class="form-control @if($errors->has('nisn')) is-invalid @endif" placeholder="NISN" name="nisn" value="{{ old('nisn') }}" required></div>
                                                    @if ($errors->has('nisn'))
                                                        <div class="invalid-feedback">{{ $errors->first('nisn') }}</div>
                                                    @endif
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="nama">Nama</label>
                                                    <input type="text" id="nama" class="form-control @if($errors->has('nama')) is-invalid @endif" placeholder="Nama" name="nama" value="{{ old('nama') }}" required></div>
                                                    @if ($errors->has('nama'))
                                                        <div class="invalid-feedback">{{ $errors->first('nama') }}</div>
                                                    @endif
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="is_active">Status</label>
                                                    <select name="is_active" id="is_active" class="form-select" required>
                                                        <option value="1">Aktif</option>
                                                        <option value="0">Tidak Aktif</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="foto" class="form-label">Foto</label>
                                                <input class="form-control @if($errors->has('foto')) is-invalid @endif" id="foto" name='foto' type="file" required>
                                                @if ($errors->has('foto'))
                                                    <div class="invalid-feedback">{{ $errors->first('foto') }}</div>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <img src="" alt="" id="preview" class="img-fluid border" style="max-width: 150px">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
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
@push('custom-js')
    <script>
        foto.onchange = evt => {
            const [file] = foto.files
            if (file) {
                preview.src = URL.createObjectURL(file)
            }
        }
    </script>
@endpush