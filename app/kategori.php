<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\coffee;

class kategori extends Model
{
    protected $fillable = [
        'nama_kopi', 'slug'];
    public $timestamps = true;

    public function coffee()
    {
        return $this->hasMany('App\coffee', 'id_kategori');
    }
}
