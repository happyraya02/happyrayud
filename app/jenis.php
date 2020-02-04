<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\coffee;

class jenis extends Model
{
    protected $fillable = [
        'nama_kopi', 'manfaat', 'varian'];
    public $timestamps = true;

    public function coffee()
    {
        return $this->hasMany('App\coffee', 'id_jenis');
    }
}

