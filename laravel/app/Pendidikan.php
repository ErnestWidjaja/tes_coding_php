<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pendidikan extends Model
{
    protected $fillable = [
        'user_id', 'pendidikan1', 'institusi1', 'jurusan1', 'lulus1', 'ipk1', 'pendidikan2', 'institusi2', 'jurusan2', 'lulus2', 'ipk2',
    ];
}
