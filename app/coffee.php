<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\kategori;
use App\jenis;
use App\transaksi;


class coffee extends Model
{
    protected $fillable = [
        'nama_kopi', 'kategori', 'manfaat', 'harga', 'gambar'];
    public $timestamps = true;

    public function kategori()
    {
        return $this->hasMany('App\kategori', 'id_kategori');
    }
}
