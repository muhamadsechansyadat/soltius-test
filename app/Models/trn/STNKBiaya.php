<?php

namespace App\Models\trn;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class STNKBiaya extends Model
{
    use HasFactory;

    protected $table = 'trn_stnk_biaya';
    protected $fillable = ['no_polisi', 'nama', 'biaya', 'denda', 'total', 'active'];

    public function stnk()
    {
        return $this->belongsTo('App\Models\trn\STNK', 'no_polisi', 'no_polisi');
    }
}
