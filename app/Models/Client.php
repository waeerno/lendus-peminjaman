<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'no_induk',
        'nama',
        'no_wa',
        'email',
        'unit_id',
        'jenis',
    ];

    public function peminjaman()
    {
        return $this->hasOne(Peminjaman::class);
    }

    public function unit()
    {
        return $this->belongsTo(Unit::class);
    }
}
