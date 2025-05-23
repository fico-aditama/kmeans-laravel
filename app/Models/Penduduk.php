<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penduduk extends Model
{
    use HasFactory;

    protected $fillable = [
        'nik', 'nama', 'alamat', 'tahun', 'periode', 'kps', 'status_perkawinan',
        'umur', 'jumlah_tanggungan', 'pekerjaan', 'penghasilan', 'status_kepemilikan_rumah',
        'luas_bangunan', 'kondisi_rumah', 'jaringan_listrik', 'sumber_air', 'kepemilikan_kendaraan'
    ];
    }
