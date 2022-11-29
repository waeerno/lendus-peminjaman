<?php

namespace App\Http\Controllers;

use App\Models\Asset;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;

class LandingController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {

        return view('pages.landing.index', [
            'kategori' => Kategori::get(),
            'asset' => Asset::where('status', 1)->get(),
        ]);
    }
}
