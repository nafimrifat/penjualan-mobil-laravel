<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembeli extends Model
{
    use HasFactory;
    protected $fillable = ['id','nama','nik','jns_kel','usia','alamat','no_tlp','email','pekerjaan'];
    protected $table = 'pembeli';
    public $timestamps = false;
}
