<?php

namespace App\Http\Controllers;

use App\Models\Peminjaman;
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
        $a = Peminjaman::where('mulai_pakai', now()->month)->count();
        dd($a);

        return view('pages.dashboard.index', [
            'frekuensi_peminjaman' => $a,
        ]);
    }
}
