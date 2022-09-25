@extends('templates.main')

@section('body')
    <header class="mb-3">
    <a href="#" class="burger-btn d-block d-xl-none"><i class="bi bi-justify fs-3"></i></a>
    </header>
    <div class="page-heading">
        <h3>Siswa Berprestasi Kelas I</h3>
    </div>
    <div class="page-content">
        <section class="row">
        <div class="col-12 col-lg-12">
            <div class="row">
                @php
                    $i = 1;
                @endphp
                @foreach ($siswa_berprestasi as $siswa)
                @if ($i < 5)
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
                                        <h6 class="text-muted font-semibold">Peringkat {{ $i }}</h6>
                                        <h6 class="font-extrabold mb-0">{{ $siswa->nama }}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
                    @php
                        $i++;
                    @endphp
                @endforeach
            </div>
            </section>
        </div>
@endsection