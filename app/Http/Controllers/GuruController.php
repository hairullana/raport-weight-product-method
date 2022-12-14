<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Nilai;
use App\Models\Siswa;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;

class GuruController extends Controller
{
    protected $kelas;

    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            $this->kelas = Auth::guard('guru')->user()->kelas;

            return $next($request);
        });
    }

    public function index()
    {
        $siswa_berprestasi = $this->perhitunganKelas($this->kelas)->sortByDesc('nilai');

        return view('guru.index', [
            'active' => 'dashboard',
            'siswa_berprestasi' => $siswa_berprestasi,
        ]);
    }

    public function daftarSiswa()
    {
        $siswa = Siswa::where('kelas', $this->kelas)->get();

        return view('guru.daftar-siswa', [
            'active' => 'daftar-siswa',
            'siswas' => $siswa,
        ]);
    }

    public function perhitungan()
    {
        $siswa = $this->perhitunganKelas($this->kelas);

        return view('guru.perhitungan', [
            'active' => 'perhitungan',
            'kelas' => Auth::guard('guru')->user()->kelas,
            'siswas' => $siswa->sortByDesc('nilai'),
        ]);
    }

    private function perhitunganKelas($kelas)
    {
        $siswa = Siswa::where('kelas', $kelas)->get();

        // hitung vektor s
        $total_vector_s = 0;
        foreach ($siswa as $murid) {
            $nilai = Nilai::where('siswa_id', $murid->id)->first();
            // c1
            $c1 = array($nilai->pabd, $nilai->ppkn, $nilai->bahasa_indonesia, $nilai->matematika, $nilai->ipa, $nilai->ips, $nilai->sbdb, $nilai->bahasa_jawa, $nilai->pendidikan_batik);
            $c1 = array_sum($c1) / count($c1);
            // c2
            $c2 = $nilai->kehadiran;
            // c3
            $c3 = $nilai->sikap;

            $murid['c1'] = $c1;
            $murid['c2'] = $c2;
            $murid['c3'] = $c3;

            $vector_s = $this->vector_s($c1, $c2, $c3);
            $total_vector_s += $vector_s;

            // input ke db
            $nilai->vector_s = $vector_s;
            $nilai->save();
        }

        // hitung vektor v
        foreach ($siswa as $murid) {
            $nilai = Nilai::where('siswa_id', $murid->id)->first();

            // vector v
            $vector_v = $this->vector_v($nilai->vector_s, $total_vector_s);

            // input ke db
            $nilai->vector_v = $vector_v;
            $nilai->save();

            $murid['nilai'] = $nilai->vector_v;
        }

        return $siswa;
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

        return view('guru.update-nilai', [
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

    public function siswaBerprestasi()
    {
        $siswa_berprestasi = $this->perhitunganKelas($this->kelas)->sortByDesc('nilai');

        return view('guru.index', [
            'active' => 'siswa-berprestasi',
            'siswa_berprestasi' => $siswa_berprestasi,
        ]);
    }

    public function dataSiswa($siswa_id)
    {
        $siswa = Siswa::find(Crypt::decrypt($siswa_id));
        $nilai = Nilai::where('siswa_id', $siswa->id)->first();

        return view('guru.data-siswa', [
            'active' => 'daftar-siswa',
            'siswa' => $siswa,
            'nilai' => $nilai,
        ]);
    }
}
