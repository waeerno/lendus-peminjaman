<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'asset_id',
        'admin_id',
        'tanggal_pengajuan',
        'mulai_pakai',
        'durasi',
        'surat',
        'jumlah',
        'catatan',
        'tanggal_keputusan',
        'keputusan',
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

    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function admin()
    {
        return $this->belongsTo(Admin::class);
    }
}
