<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{
    Protected $table = 'nilai';

    protected $fillable = [
        'siswa_id',
        'mata_pelajaran',
        'skor'
    ];

    public function siswa()
    {
        return $this->belongsTo(Siswa::class, 'siswa_id');
    }
}
