<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pengolahan extends Model
{
    protected $fillable = [
        'kategori', 'penjelasan', 'gambar'];
    public $timestamps = true;
}
