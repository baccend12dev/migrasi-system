<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class perlpbbm extends Model
{
    protected $table = 'PERLPBBM'; // Nama tabel sesuai dengan nama tabel di database
    protected $fillable = [
        'NO_LPB', 'TGL_LPB', 'NO_LPB2', 'TGL_LPB2', 'NM_BHN', 'STN',
        'UNITB', 'HSATUAN', 'TOTAL', 'KP', 'NO_PO', 'TGL_PO',
        'KET_VAL', 'IMP', 'KET'
    ];

    public $timestamps = false; // Jika tabel tidak memiliki kolom created_at dan updated_at

}
