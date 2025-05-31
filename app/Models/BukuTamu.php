<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BukuTamu extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama', 'email', 'no_hp', 'instansi', 'pesan', 'waktu_kunjungan',
    ];

    public $timestamps = true;
}
