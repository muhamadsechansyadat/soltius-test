<?php

namespace App\Models\mst;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipe extends Model
{
    use HasFactory;

    protected $table = 'mst_tipe';
    protected $fillable = ['merk_id', 'nama', 'active'];

    public function merk()
    {
        return $this->belongsTo('App\Models\mst\Merk', 'merk_id', 'id');
    }

    public function stnk()
    {
        return $this->hasMany('App\Models\rtn\STNK', 'id', 'tipe_id');
    }
}
