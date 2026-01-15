<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = 'siswa';


    protected $fillable = [
        'nisn',
        'nama_siswa',
        'jenis_kelamin',
        'kelas_id',
    ];

    public function kelas()
    {
        return $this->belongsTo(Kelas::class, 'kelas_id');
    }
    public function nilai()
    {
        return $this->hasMany(Nilai::class, 'siswa_id');
    }
}
