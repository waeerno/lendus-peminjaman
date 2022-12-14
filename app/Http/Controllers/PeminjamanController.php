<?php

namespace App\Http\Controllers;

use App\Http\Requests\PeminjamanRequest;
use App\Models\Asset;
use App\Models\Client;
use App\Models\Peminjaman;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PeminjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.peminjaman.index', [
            'data' => Peminjaman::where('keputusan', NULL)->orderBy('id', 'desc')->get(),
            // 'user' => Client::get(),
            // 'asset' => Asset::get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.peminjaman.create', [
            'asset' => Asset::orderBy('id', 'desc')->get(),
            'user' => Client::get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PeminjamanRequest $request)
    {
        $data = new Peminjaman;

        $data->client_id = $request->pengguna;
        $data->asset_id = $request->asset;
        $data->mulai_pakai = $request->pakai;
        $data->durasi = $request->durasi;
        $data->jumlah = $request->jumlah;
        $data->tanggal_pengajuan = Carbon::now();

        if ($request->file('surat')) {
            $file = $request->file('surat')->store('AssetSurat', 'public');
            $data->surat = $file;
        }

        // dd($data);
        $data->save();
        return to_route('peminjaman.index')->with('success', 'Data berhasil ditambahkan');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Peminjaman  $peminjaman
     * @return \Illuminate\Http\Response
     */
    public function show(Peminjaman $peminjaman)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Peminjaman  $peminjaman
     * @return \Illuminate\Http\Response
     */
    public function edit(Peminjaman $peminjaman)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Peminjaman  $peminjaman
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Peminjaman $peminjaman)
    {
        $data = $request->all();
        $data['tanggal_keputusan'] = date("Y-m-d H:i:s");
        $peminjaman->update($data);

        // $data = new Peminjaman;
        // $data->admin_id = $request->admin_id;
        // $data->keputusan = $request->keputusan;
        // $data->tanggal_keputusan = date("Y-m-d H:i:s");
        // $data->update();
        return to_route('peminjaman.index')->with('success', 'Data berhasil diproses');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Peminjaman  $peminjaman
     * @return \Illuminate\Http\Response
     */
    public function destroy(Peminjaman $peminjaman)
    {
        //
    }
}
