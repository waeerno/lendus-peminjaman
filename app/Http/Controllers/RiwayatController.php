<?php

namespace App\Http\Controllers;

use App\Models\Peminjaman;
use Illuminate\Http\Request;

class RiwayatController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        return view('pages.riwayat.index', [
            'data' => Peminjaman::where('keputusan', '!=', NULL)->orderBy('id', 'desc')->get(),
        ]);
    }
}
