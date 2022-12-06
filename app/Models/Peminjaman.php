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

    public $table = "peminjamans";

    public function unit()
    {
        return $this->belongsTo(Unit::class);
    }

    public function asset()
    {
        return $this->belongsTo(Asset::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function admin()
    {
        return $this->belongsTo(Admin::class);
    }
}
