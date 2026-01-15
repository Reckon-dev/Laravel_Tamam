<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NilaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Nilai::insert([
            [
                'siswa_id' => 1,
                'mata_pelajaran' => 'PKN',
                'skor' => 85,
            ],
            [
                'siswa_id' => 2,
                'mata_pelajaran' => 'Bahasa Indonesia',
                'skor' => 90,
            ]
        ]);
    }
}
