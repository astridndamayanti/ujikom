<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengaduan extends Model
{
    protected $table = 'pengaduan';
    protected $fillable = ['id','tgl_pengaduan','nik','isi_laporan','foto','status','created_at','updated_at'];
}
