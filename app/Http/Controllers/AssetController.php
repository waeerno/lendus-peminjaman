<?php

namespace App\Http\Controllers;

use App\Http\Requests\AssetRequest;
use App\Models\Asset;
use App\Models\Kategori;
use App\Models\Unit;
use Exception;
use Illuminate\Http\Request;

class AssetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.asset.index', [
            'data' => Asset::with('unit', 'kategori')->orderBy('id', 'desc')->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.asset.create', [
            'unit' => Unit::get(),
            'kategori' => Kategori::get(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AssetRequest $request)
    {

        $data = new Asset;

        $data->unit_id = $request->unit_id;
        $data->nama = $request->nama;
        $data->jumlah = $request->jumlah;
        $data->jenis =  $request->jenis;
        $data->kategori_id = $request->kategori_id;
        // togle on off
        $request->has('status') ? $data['status'] = 1 : $data['status'] = 0;
        // foto asset
        if ($request->file('foto')) {
            $file = $request->file('foto')->store('AssetFoto', 'public');
            $data->foto = $file;
        }

        $data->save();
        return to_route('master.asset.index')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Asset  $asset
     * @return \Illuminate\Http\Response
     */
    public function edit(Asset $asset)
    {
        return view('pages.asset.edit', [
            'data' => $asset,
            'unit' => Unit::get(),
            'kategori' => Kategori::get(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Asset  $asset
     * @return \Illuminate\Http\Response
     */
    public function update(AssetRequest $request, Asset $asset)
    {
        $data = $request->all();
        // togle on off
        $request->has('status') ? $data['status'] = 1 : $data['status'] = 0;

        if ($request->file('foto')) {
            unlink(public_path('storage/') . $asset->foto);
            $file = $request->file('foto')->store('AssetFoto', 'public');
            $data['foto'] = $file;
        }

        $asset->update($data);
        return to_route('master.asset.index')->with('success', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Asset  $asset
     * @return \Illuminate\Http\Response
     */
    public function destroy(Asset $asset)
    {
        try {
            if ($asset->foto) {
                unlink(public_path('storage/') . $asset->foto);
            }
            $asset->delete();
            return to_route('master.asset.index')->with('success', 'Data berhasil dihapus');
        } catch (Exception $error) {
            return to_route('master.asset.index')->with('error', $error);
        }
    }

    public function getJumlah($id)
    {
        $course = Asset::find($id);
        return response()->json($course);
    }
}
