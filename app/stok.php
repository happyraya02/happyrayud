<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\transaksi;

class stok extends Model
{
    protected $fillable = [
        'id_coffee', 'jumlah_barang', 'barang_masuk', 'barang keluar', 'sisa barang'];
    public $timestamps = true;

    public function coffee()
    {
        return $this->belongsTo('App\coffee', 'id_coffee');
    }
}
