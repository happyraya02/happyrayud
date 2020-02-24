<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\coffee;
use App\stok;
use App\transaksi;


class transaksi extends Model
{
    protected $fillable = [
        'nama', 'id_coffee', 'jumlah_kopi'];
    public $timestamps = true;

    public function coffee()
    {
        return $this->belongsTo('App\coffee', 'id_coffee');
    }

}
