<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Biodata extends Model
{
    protected $fillable = [
        'user_id', 'nama', 'posisi', 'no_ktp', 'ttl', 'jk', 'agama', 'golongan_darah', 'status', 'alamat_ktp', 'alamat_tinggal','email', 'telp', 'orang_terdekat', 'skill', 'ditempatkan', 'penghasilan',
    ];
}
