<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KompetensiKeahlian extends Model
{
    public function bidangstudi()
    {
        return $this->belongsTo('App\BidangStudi', 'bidang_kode');
    }

    public function guru()
    {
        return $this->hasMany('App\Guru', 'kompetensi_kode');
    }

    public function standarkompetensi()
    {
        return $this->hasMany('App\StandarKompetensi', 'kompetensi_kode');
    }

    public function siswa()
    {
        return $this->hasMany('App\Siswa', 'kompetensi_kode');
    }
}
