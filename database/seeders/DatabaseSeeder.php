<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Guru;
use App\Models\User;
use App\Models\Admin;
use App\Models\Nilai;
use App\Models\Siswa;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // create default admin
        Admin::create([
            'username' => 'admin',
            'password' => password_hash('admin', PASSWORD_DEFAULT),
        ]);

        // create guru
        for ($i = 1; $i <= 6; $i++) {
            Guru::create([
                'username' => "guru$i",
                'password' => password_hash('password', PASSWORD_DEFAULT),
                'nama' => fake()->name(),
                'kelas' => $i,
            ]);
        }

        // create siswa
        for ($i = 1; $i <= 6; $i++) {
            for ($j = 1; $j <= 20; $j++) {
                Siswa::create([
                    'nama' => fake()->name(),
                    'nisn' => fake()->numberBetween(0000000001, 9999999999),
                    'kelas' => $i,
                    'is_active' => true,
                    'foto' => null,
                ]);
            }
        }

        // create nilai
        foreach (Siswa::all() as $siswa) {
            Nilai::create([
                'siswa_id' => $siswa->id,
                'pabd' => rand(60, 100),
                'ppkn' => rand(60, 100),
                'bahasa_indonesia' => rand(60, 100),
                'matematika' => rand(60, 100),
                'ipa' => rand(60, 100),
                'ips' => rand(60, 100),
                'sbdb' => rand(60, 100),
                'pjok' => rand(60, 100),
                'bahasa_jawa' => rand(60, 100),
                'pendidikan_batik' => rand(60, 100),
                'kehadiran' => rand(60, 100),
                'sikap' => rand(60, 100),
            ]);
        }
    }
}
