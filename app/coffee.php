<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class coffee extends Model
{
    protected $fillable = [
        'kategori', 'manfaat', 'efek', 'artikel', 'gambar'];
    public $timestamps = true;
}
