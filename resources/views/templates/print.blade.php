<style>
  th, td {
    margin: 0 1px;
    text-align: center;
  }
</style>
<h1>Rekap Nilai Kelas {{ Crypt::decrypt(request()->kelas) }}</h1>
<hr/>
<table border="1" style="border-collapse: collapse;">
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
            <th>Nilai Akhir</th>
            <th>Status</th>
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
                <td>{{ $siswa->is_active ? 'Aktif' : 'Tidak Aktif' }}</td>
            </tr>
        @endforeach
    </tbody>
</table>