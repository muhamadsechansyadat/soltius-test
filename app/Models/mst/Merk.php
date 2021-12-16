<?php

namespace App\Models\mst;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Merk extends Model
{
    use HasFactory;

    protected $table = 'mst_merk';
    protected $fillable = ['nama', 'active'];

    public function tipe()
    {
        return $this->hasMany('App\Models\mst\Tipe', 'id', 'merk_id');
    }

    public function stnk()
    {
        return $this->hasMany('App\Models\rtn\STNK', 'id', 'merk_id');
    }
}
