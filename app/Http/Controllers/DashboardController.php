<?php

namespace App\Http\Controllers;

use App\Models\Asset;
use App\Models\Client;
use App\Models\Kategori;
use App\Models\Peminjaman;
use App\Models\Unit;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * __construct
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        // $a =


        return view('pages.dashboard.index', [
            'frekuensi_peminjaman' => Peminjaman::whereMonth('created_at', now()->month)->count(),
            'asset_tersedia'       => Asset::where('status', 1)->count(),
            'kategori'             => Kategori::count(),
            'kontribusi_unit'      => Unit::count(),
            'total_peminjaman'     => Peminjaman::where('keputusan', 1)->count(),
            'total_asset'          => Asset::count(),
            'total_pengguna'       => User::count() + Client::count(),

        ]);
    }
}
