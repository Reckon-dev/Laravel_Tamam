<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Kelas::insert([
            ['nama_kelas' => 'XII PPLG 2'],
            ['nama_kelas' => 'XII DKV 1'],
            ['nama_kelas' => 'XII DKV 2'],
            ['nama_kelas' => 'XII DKV 3'],
            ['nama_kelas' => 'XII TKJ '],
        ]);
    }
}
