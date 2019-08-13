<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    public function kompetensikeahlian()
    {
        return $this->belongsTo('App\KompetensiKeahlian', 'kompetensi_kode');
    }

    public function walisiswa()
    {
        return $this->hasMany('App\WaliSiswa', 'siswa_nisn');
    }

    public function nilai()
    {
        return $this->hasMany('App\Nilai', 'siswa_nisn');
    }
}
