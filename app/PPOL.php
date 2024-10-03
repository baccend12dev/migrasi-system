<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PPOL extends Model
{  
    
    protected $table = 'PPOL'; // Tentukan nama tabel
    public $timestamps = false; // Nonaktifkan timestamps
    
    protected $fillable = [
        'NO_PO', 'TGL_PO', 'NO_SP', 'TGL_SP', 'NM_BHN', 'STN', 'PESAN',
        'SATUAN', 'H_UNIT', 'SISA', 'KODE_P', 'BG', 'KET', 'NO_SPH'
    ];
}
