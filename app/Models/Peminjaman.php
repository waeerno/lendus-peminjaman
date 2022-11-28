<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'no_induk',
        'nama',
        'no_wa',
        'email',
        'unit_id',
        'jenis'
    ];
}
