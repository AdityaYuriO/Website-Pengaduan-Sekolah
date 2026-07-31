<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create([
            'nama_role' => 'siswa',
        ]);

        Role::create([
            'nama_role' => 'bk',
        ]);

        Role::create([
            'nama_role' => 'kepala_sekolah',
        ]);

        Role::create([
            'nama_role' => 'kesiswaan',
        ]);

        Role::create([
            'nama_role' => 'hubin',
        ]);

        Role::create([
            'nama_role' => 'prasarana',
        ]);

        Role::create([
            'nama_role' => 'kurikulum',
        ]);

        Role::create([
            'nama_role' => 'admin',
        ]);

    }
}
