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
        // dd($request->all());
        $data = $request->all();
        Asset::create($data);
        return to_route('master.asset.index')->with('success', 'Data berhasil ditambahkan');
        // try {
        // } catch (Exception $error) {
        //     return to_route('master.asset.index')->with('error', $error);
        // }
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
        try {
            $data = $request->all();
            $asset->update($data);
            return to_route('master.asset.index')->with('success', 'Data berhasil diubah');
        } catch (Exception $error) {
            return to_route('master.asset.index')->with('error', $error);
        }
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
            $asset->delete();
            return to_route('master.asset.index')->with('success', 'Data berhasil dihapus');
        } catch (Exception $error) {
            return to_route('master.asset.index')->with('error', $error);
        }
    }
}
