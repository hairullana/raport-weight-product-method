<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Nilai;
use App\Models\Siswa;
use Illuminate\Support\Facades\Crypt;

class AdminController extends Controller
{
    public function index()
    {
        $guru = Guru::all();

        return view('admin.index', [
            'active' => 'dashboard',
            'gurus' => $guru,
        ]);
    }

    public function daftarSiswa()
    {
        $guru = Guru::all();

        return view('admin.daftar-siswa', [
            'active' => 'daftar-siswa',
            'gurus' => $guru,
        ]);
    }

    public function daftarSiswaDetail($kelas)
    {
        $kelas = Crypt::decrypt($kelas);
        $siswa = Siswa::where('kelas', $kelas)->get();

        return view('admin.daftar-siswa-detail', [
            'active' => 'daftar-siswa',
            'siswas' => $siswa,
        ]);
    }

    public function tambahSiswa()
    {
        return view('admin.tambah_data_siswa', [
            'active' => 'daftar-siswa',
        ]);
    }

    public function tambahSiswaAction(Request $request, $kelas)
    {
        $kelas = Crypt::decrypt($kelas);

        $request->validate([
            'nisn' => ['numeric', 'unique:siswas,nisn', 'min:10', 'max:10'],
            'nama' => ['min:3'],
            'foto' => ['mimes:jpg,png,jpeg', 'max:1024']
        ]);

        $foto = $request->file('foto');
        $foto = $foto->store('foto');

        Siswa::create([
            'nama' => $request->nama,
            'nisn' => $request->nisn,
            'kelas' => $kelas,
            'foto' => $foto,
        ]);

        return redirect()->route('admin.daftar-siswa-detail', Crypt::encrypt($kelas))->with('message', 'Siswa berhasil ditambahkan');
    }

    public function perhitungan()
    {
        return view('admin.perhitungan', [
            'active' => 'perhitungan'
        ]);
    }

    public function perhitunganAction($kelas)
    {
        $kelas = Crypt::decrypt($kelas);

        return view('admin.perhitungan-detail', [
            'active' => 'perhitungan'
        ]);
    }

    private function vector_s(float $nilai, float $kehadiran, float $sikap)
    {
        //variable nilai yang masuk pakek niai asli
        //kehadiran berdasarkan persentase kehadiran siswa dikelas
        //untuk kehadiran sakit, izin, dan bolos tetap dihitung tidak hadir atau gimana ?
        //sikap dinilai oleh walikelas
        // buatin kolom vector s jadinya ntar masukin db pakek function ini
        return $nilai * 0.6 + $kehadiran * 0.1 + $sikap * 0.3;
    }

    //input vector dan total nilai vector dari keseluruhan data kelas, untuk total ambil lansung dari db jumlah vector s
    private function vector_v(float $v, float $total)
    {
        // jadinya ntar di db ada tambahan 2 baris buat vector s sama vector v
        //predikat diurutkan berdasarkan nilai vector v setiap siswa
        return $v * $total;
    }

    public function updateNilai($siswa_id)
    {
        $siswa_id = Crypt::decrypt($siswa_id);
        $siswa = Siswa::find($siswa_id);
        $nilai = Nilai::where('siswa_id', $siswa_id)->first();

        return view('admin.update-nilai', [
            'active' => 'daftar-siswa',
            'siswa' => $siswa,
            'nilai' => $nilai,
        ]);
    }

    public function updateNilaiAction(Request $request, $siswa_id)
    {
        $siswa_id = Crypt::decrypt($siswa_id);

        Nilai::where('siswa_id', $siswa_id)->update([
            'pabd' => $request->pabd,
            'ppkn' => $request->ppkn,
            'bahasa_indonesia' => $request->bahasa_indonesia,
            'matematika' => $request->matematika,
            'ipa' => $request->ipa,
            'ips' => $request->ips,
            'sbdb' => $request->sbdb,
            'bahasa_jawa' => $request->bahasa_jawa,
            'pendidikan_batik' => $request->pendidikan_batik,
            'kehadiran' => $request->kehadiran,
            'sikap' => $request->sikap,
        ]);

        return back()->with('message', 'Nilai berhasil di update');
    }
}
