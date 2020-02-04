<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\transaksi;

class stok extends Model
{
    protected $fillable = [
        'nama_kopi', 'jumlah_barang', 'barang_masuk', 'barang keluar', 'sisa barang'];
    public $timestamps = true;

    public function transaksi()
    {
        return $this->hasMany('App\transaksi', 'id_stok');
    }
}
