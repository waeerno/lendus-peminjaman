<?php

namespace App\Http\Controllers;

use App\Models\Operator;
use Illuminate\Http\Request;

class OperatorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // echo "test";
        // die;
        return view('pages.operator.index', [
            'data' => Operator::get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.operator.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $data['password'] = bcrypt($request->password);
        Operator::create($data);

        return to_route('pengguna.operator.index')->with('success', 'Data berhasil ditambahkan');
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Operator  $operator
     * @return \Illuminate\Http\Response
     */
    public function edit(Operator $operator)
    {
        return view('pages.operator.edit', [
            'data' => $operator
        ]);
    }

    public function password(Operator $operator)
    {
        return view('pages.operator.password', [
            'data' => $operator
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Operator  $operator
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Operator $operator)
    {
        $data = $request->all();
        $operator->update($data);

        return to_route('pengguna.operator.index')->with('success', 'Data berhasil diubah');
    }

    /**
     * updatePassword
     *
     * @param  mixed $request
     * @return void
     */
    public function updatePassword(Request $request, Operator $operator)
    {
        $data = $request->all();
        $operator->update($data);

        return to_route('pengguna.operator.index')->with('success', 'Password berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Operator  $operator
     * @return \Illuminate\Http\Response
     */
    public function destroy(Operator $operator)
    {
        $operator->delete();
        return to_route('pengguna.operator.index')->with('success', 'Data berhasil dihapus');
    }
}
