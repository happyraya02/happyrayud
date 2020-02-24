<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\kategori;
use App\transaksi;


class coffee extends Model
{
    protected $fillable = [
        'nama_kopi', 'id_kategori', 'manfaat', 'harga', 'gambar'];
    public $timestamps = true;

    public function kategori()
    {
        return $this->belongsTo('App\kategori', 'id_kategori');
    }

    public function stok()
    {
        return $this->hasMany('App\stok', 'id_stok');
    }

    public function transaksi()
    {
        return $this->hasMany('App\transaksi', 'id_transaksi');
    }
}
