<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\coffee;
use App\stok;


class transaksi extends Model
{
    protected $fillable = [
        'nama', 'nama_kopi', 'jumlah_kopi'];
    public $timestamps = true;

    public function coffee()
    {
        return $this->hasMany('App\coffee', 'id_transaksi');
    }
}
