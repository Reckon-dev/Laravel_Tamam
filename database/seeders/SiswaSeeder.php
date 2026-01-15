<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Siswa::insert([
            [
                'nisn' => '1234567890',
                'nama_siswa' => 'Ahmad Fauzi',
                'jenis_kelamin' => 'Laki-laki',
                'kelas_id' => 1,
            ],
            [
                'nisn' => '0987654321',
                'nama_siswa' => 'Maria Putri',
                'jenis_kelamin' => 'Perempuan',
                'kelas_id' => 2,
            ],
            [
                'nisn' => '1122334455',
                'nama_siswa' => 'Asep Setiadi',
                'jenis_kelamin' => 'Laki-laki',
                'kelas_id' => 1,
            ],
        ]);
    }
}
