<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pegawai extends Model
{
    use HasFactory;
    protected $fillable = ['id','nama','jns_kelamin','no_tlp','username','password'];
    protected $table = 'pegawai';
    public $timestamps = false;
}
