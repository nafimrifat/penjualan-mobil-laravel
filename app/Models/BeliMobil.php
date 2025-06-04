<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BeliMobil extends Model
{
    use HasFactory;
    protected $fillable = ['kode','tgl','pabrikan','mobil','harga'];
    protected $table = 'beli_mobil';
    public $timestamps = false;
}
