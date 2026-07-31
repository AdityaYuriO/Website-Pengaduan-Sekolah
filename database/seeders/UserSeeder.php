<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /// Admin
        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'role_id' => 7,
            'password' => Hash::make(123456),
        ]);

        ///Siswa
        User::create([
            'name' => 'Siswa',
            'email'=> 'siswa@gmail.com',
            'role_id' => 1,
            'password' => Hash::make(123456),
        ]);

        ///Wakasek
        User::create([
            'name' => 'hubin',
            'email' => 'hubin@gmail.com',
            'role_id' => '4',
            'password' => Hash::make(123456),
        ]);

        User::create([
            'name' => 'kesiswaan',
            'email' => 'kesiswaan@gmail.com',
            'role_id' => 3,
            'password' => Hash::make(123456),
        ]);

        User::create([
            'name' => 'prasarana',
            'email' => 'prasarana@gmail.com',
            'role_id' => 5,
            'password' => Hash::make(123456),
        ]);

        User::create([
            'name' => 'kurikulum',
            'email' => 'kurikulum@gmail.com',
            'role_id' => 6,
            'password' => Hash::make(123456),
        ]);

        ///kepala Sekolah

        User::create([
            'name' => 'kepala Sekolah',
            'email' => 'kepala@gmail.com',
            'role_id' => 2,
            'password' => Hash::make(123456),
        ]);
    }
}
