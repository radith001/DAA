<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ikan extends Model
{
    use HasFactory;

    protected $table = 'ikans';

    protected $fillable = [
        'nama', 
        'ukuran', 
        'harga'
    ];

    protected $hidden = [
        'created_at', 
        'updated_at'
    ];

    public function getHargaAttribute($value)
    {
        return number_format($value, 2, ',', '.');
    }
}
