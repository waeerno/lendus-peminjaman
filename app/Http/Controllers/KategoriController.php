<?php

namespace App\Http\Controllers;

use App\Http\Requests\KategoriRequest;
use App\Models\Kategori;
use Exception;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.kategori.index', [
            'data' => Kategori::orderBy('id', 'desc')->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.kategori.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(KategoriRequest $request)
    {
        try {
            $data = $request->all();
            Kategori::create($data);
            return to_route('master.kategori.index')->with('success', 'Data berhasil ditambahkan');
        } catch (Exception $error) {
            return to_route('master.kategori.index')->with('error', $error);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function edit(Kategori $kategori)
    {
        return view('pages.kategori.edit', [
            'data' => $kategori,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function update(KategoriRequest $request, Kategori $kategori)
    {
        try {
            $data = $request->all();
            $kategori->update($data);
            return to_route('master.kategori.index')->with('success', 'Data berhasil diubah');
        } catch (Exception $error) {
            return to_route('master.kategori.index')->with('error', $error);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kategori $kategori)
    {
        try {
            $kategori->delete();
            return to_route('master.kategori.index')->with('success', 'Data berhasil dihapus');
        } catch (Exception $error) {
            return to_route('master.kategori.index')->with('error', $error);
        }
    }
}
