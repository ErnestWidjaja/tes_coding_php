<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pekerjaan extends Model
{
    protected $fillable = [
        'user_id', 'perusahaan1', 'posisi1', 'pendapatan1', 'tahun1', 'perusahaan2', 'posisi2', 'pendapatan2', 'tahun2',
    ];
}
