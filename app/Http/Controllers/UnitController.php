<?php

namespace App\Http\Controllers;

use App\Http\Requests\UnitRequest;
use App\Models\Unit;
use Exception;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\TryCatch;

class UnitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('pages.unit.index', [
            'data' => Unit::orderBy('id', 'desc')->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.unit.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UnitRequest $request)
    {
        try {
            $data = $request->all();
            Unit::create($data);
            return to_route('master.unit.index')->with('success', 'Data berhasil ditambahkan');
        } catch (Exception $error) {
            return to_route('master.unit.index')->with('error', $error);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Unit  $unit
     * @return \Illuminate\Http\Response
     */
    public function edit(Unit $unit)
    {
        return view('pages.unit.edit', [
            'data' => $unit
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Unit  $unit
     * @return \Illuminate\Http\Response
     */
    public function update(UnitRequest $request, Unit $unit)
    {
        try {
            $data = $request->all();
            $unit->update($data);
            return to_route('master.unit.index')->with('success', 'Data berhasil diubah');
        } catch (Exception $error) {
            return to_route('master.unit.index')->with('error', $error);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Unit  $unit
     * @return \Illuminate\Http\Response
     */
    public function destroy(Unit $unit)
    {
        try {
            $unit->delete();
            return to_route('master.unit.index')->with('success', 'Data berhasil dihapus');
        } catch (Exception $error) {
            return to_route('master.unit.index')->with('error', $error);
        }
    }
}
