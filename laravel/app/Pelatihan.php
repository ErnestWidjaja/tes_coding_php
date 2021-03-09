<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pelatihan extends Model
{
    protected $fillable = [
        'user_id', 'kursus1', 'sertifikat1', 'tahun1', 'kursus2', 'sertifikat2', 'tahun2',
    ];
}
