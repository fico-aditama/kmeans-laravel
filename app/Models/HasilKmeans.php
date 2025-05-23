<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HasilKmeans extends Model
{
    use HasFactory;
    protected $fillable = [
        'nik', 'nama', 'cluster', 'tahun', 'periode', 'hasil'
    ];
}