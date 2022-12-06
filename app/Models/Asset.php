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
        'kategori_id',
        'foto'
    ];

    // protected $foto;

    public function peminjaman()
    {
        return $this->hasOne(Peminjaman::class);
    }

    public function unit()
    {
        return $this->belongsTo(Unit::class);
    }

    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }
}
