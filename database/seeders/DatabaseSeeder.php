<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Admin;
use App\Models\Guru;
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
    }
}
