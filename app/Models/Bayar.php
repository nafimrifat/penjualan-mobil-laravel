<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bayar extends Model
{
    use HasFactory;
    protected $fillable = ['id','id_penjualan','tgl','bayar','metode','status' ];
    protected $table = 'bayar';
    public $timestamps = false;

}
