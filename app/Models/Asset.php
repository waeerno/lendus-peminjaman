<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asset extends Model
{
    use HasFactory;

    protected $fillable = [
        'unit_id',
        'nama',
        'jumlah',
        'status',
        'jenis',
        'kategori'
    ];
}
