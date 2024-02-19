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
        DB::table('user')->insert([
            'name' => 'fathur',
            'username' => 'macha',
            'email' => 'macha@gmail.com',
            'password'=> bcrypt('123'),
            'alamat'=> 'tangerang',
            'telepon'=> '12345678',
            'akses'=> 'admin',
            'nik'=> '1234567890',
            'email_verified_at' => now(),
        ]);
    }
}
