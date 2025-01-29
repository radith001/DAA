<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Voli extends Model
{
    // Menentukan nama tabel yang digunakan oleh model ini
    protected $table = 'volis';

    // Menentukan kolom yang dapat diisi secara massal (mass assignment)
    protected $fillable = [
        'nama_atlet',
        'usia',
        'posisi',
        'tinggi',
        'berat',
        'performa',
        'status_bertanding',
    ];

    // Menentukan kolom yang tidak boleh diisi secara massal (mass assignment)
    protected $guarded = [];

    // Menentukan format tanggal yang digunakan oleh model ini
    protected $dates = ['created_at', 'updated_at'];
}
