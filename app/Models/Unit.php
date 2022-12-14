<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'pimpinan',
        'nip'
    ];

    public function peminjaman()
    {
        return $this->hasOne(Peminjaman::class);
    }

    public function admin()
    {
        return $this->belongsTo(Admin::class);
    }

    public function asset()
    {
        return $this->hasOne(Asset::class);
    }

    public function client()
    {
        return $this->hasOne(Client::class);
    }
}
