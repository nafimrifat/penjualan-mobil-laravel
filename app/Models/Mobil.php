<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mobil extends Model
{
    use HasFactory;
    protected $primaryKey = 'kode';
    protected $fillable = ['kode','merek','tipe','warna','seat','tahun','bbm','harga'];
    protected $table = 'mobil';
    public $timestamps = false;
}
