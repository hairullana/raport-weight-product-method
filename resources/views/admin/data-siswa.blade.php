@extends('templates.main')

@section('body')
    <header class="mb-3">
    <a href="#" class="burger-btn d-block d-xl-none"><i class="bi bi-justify fs-3"></i></a>
    </header>
    <div class="page-heading">
        <div class="card mb-3">
            {{-- {{ dd(file_exists(public_path($siswa->foto))) }} --}}
        <center> <img src="{{ $siswa->foto ?? 'https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_1280.png' }}" class="card-img" style="float: center height: 300ps; width :200px; margin: 20px; " height="300" width="200" alt="...">
            <div class="card-body">
                <h5 class="col-md-8 fs-4" style="">{{ $siswa->nama }}</h5>
                @if (request()->juara)
                    <p class="card-text">Juara : {{ Crypt::decrypt(request()->juara) }}</p>
                @endif
                <p class="card-text">NISN : {{ $siswa->nisn }}</p>
                <p class="card-text">Nilai PABD : {{ $nilai->pabd }}</p>
                <p class="card-text">Nilai PPKN : {{ $nilai->ppkn }}</p>
                <p class="card-text">Nilai Bahasa Indonesia : {{ $nilai->bahasa_indonesia }}</p>
                <p class="card-text">Nilai Matematika : {{ $nilai->matematika }}</p>
                <p class="card-text">Nilai IPA : {{ $nilai->ipa }}</p>
                <p class="card-text">Nilai IPS : {{ $nilai->ips }}</p>
                <p class="card-text">Nilai SBDB : {{ $nilai->sbdb }}</p>
                <p class="card-text">Nilai PJOK : {{ $nilai->pjok }}</p>
                <p class="card-text">Nilai BAHASA Jawa  : {{ $nilai->bahasa_jawa }}</p>
                <p class="card-text">Nilai Pendidikan Batik : {{ $nilai->pendidikan_batik }}</p>
                <p class="card-text">Nilai Keadiran: {{ $nilai->kehadiran }}</p>
                <p class="card-text">Nilai Sikap  : {{ $nilai->sikap }}</p>
                <p class="card-text">Nilai Akhir  : {{ $nilai->vector_v ?? '-' }}</p>
                <p class="card-text">Status : {{ $siswa->is_active == 0 ? 'Tidak Aktif' : 'Aktif' }}</p>
            </div>
        </div>
    </div>
@endsection