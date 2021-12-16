<?php

namespace App\Models\trn;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class STNK extends Model
{
    use HasFactory;

    protected $table = 'trn_stnk';
    protected $fillable = ['no_polisi', 'nama_pemilik', 'alamat', 'merk_id', 'tipe_id', 'model', 'warna', 'no_rangka', 'no_mesin', 'active'];

    public function merk()
    {
        return $this->belongsTo('App\Models\mst\Merk', 'merk_id', 'id');
    }

    public function tipe()
    {
        return $this->belongsTo('App\Models\mst\Tipe', 'tipe_id', 'id');
    }

    public function stnkBiaya()
    {
        return $this->hasMany('App\Models\trn\STNKBiaya', 'no_polisi', 'no_polisi');
    }
}
