<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Alumni;
use App\Models\Admin;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    
    Alumni::create([
        'nisn' => '0012345678',
        'nis' => '20210801',
        'nama_alumni' => 'Andini',
        'ttl' => '2006-08-01',
        'jk' => 'P',
        'alamat' => 'Ciheras',
        'kontak' => '081563943793',
        'foto' => '',
        'password' => bcrypt('12345678'),
    ]);
    Admin::create([
        'id_admin' => '01',
        'nama' => 'admin',
        'email' => 'admin@gmail.com',
        'password' => bcrypt('12345'),
        'kontak' => '083242144543',
    ]);
}
}