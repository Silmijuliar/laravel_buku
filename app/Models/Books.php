<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    protected $table="buku";
    protected $primaryKey="kode_buku";
    protected $fillable=['judul','author','sinopsis','penerbit'];
}