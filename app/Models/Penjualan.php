<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
    use HasFactory;
    protected $fillable = ['id','tgl','id_mobil','id_pembeli','harga','status' ];
    protected $table = 'penjualan';
    public $timestamps = false;
}
