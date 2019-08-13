<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{
    public function siswa()
    {
        return $this->belongsTo('App\Siswa', 'siswa_nisn');
    }

    public function guru()
    {
        return $this->belongsTo('App\Guru', 'guru_kode');
    }

    public function standarkompetensi()
    {
        return $this->belongsTo('App\StandarKompetensi', 'sk_kode');
    }
}
