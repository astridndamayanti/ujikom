<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Masyarakat extends Model
{
    protected $table = 'masyarakat';
    protected $fillable = ['nik','user_id','nama','username','password','telp','created_at','updated_at'];
}
