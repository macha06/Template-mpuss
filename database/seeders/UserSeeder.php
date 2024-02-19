<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'admin',
            'email' => 'lJ1eA@example.com',
            'username' => 'admin',
            'password' => Hash::make('admin'),
            'akses' => 'admin',
            'alamat' => 'tangerang',
            'nik' => '123123123',
            'telepon' => '4234234',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        User::create([
            'name' => 'Petugas',
            'email' => 'petugas@gmail.com',
            'username' => 'Petugas',
            'password' => Hash::make('petugas'),
            'akses' => 'petugas',
            'alamat' => 'tangerang',
            'nik' => '432342423',
            'telepon' => '6547567',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        User::create([
            'name' => 'Peminjam',
            'email' => 'peminjam@gmail.com',
            'username' => 'Peminjam',
            'password' => Hash::make('peminjam'),
            'akses' => 'peminjam',
            'alamat' => 'tangerang',
            'nik' => '97987978',
            'telepon' => '5464566',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
