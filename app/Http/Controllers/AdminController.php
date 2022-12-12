<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.admin.index', [
            'data' => Admin::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.create');
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
        Admin::create($data);

        return to_route('pengguna.admin.index')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(Admin $admin)
    {
        return view('pages.operator.edit', [
            'data' => $admin
        ]);
    }

    /**
     * password
     *
     * @param  mixed $operator
     * @return void
     */
    public function password(Admin $admin)
    {
        return view('pages.admin.password', [
            'data' => $admin
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Admin $admin)
    {
        $data = $request->all();
        $admin->update($data);

        return to_route('pengguna.admin.index')->with('success', 'Data berhasil diubah');
    }

    /**
     * updatePassword
     *
     * @param  mixed $request
     * @param  mixed $operator
     * @return void
     */
    public function updatePassword(Request $request, Admin $admin)
    {
        $data = $request->all();
        $admin->update($data);

        return to_route('pengguna.admin.index')->with('success', 'Password berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admin $admin)
    {
        $admin->delete();
        return to_route('pengguna.admin.index')->with('success', 'Data berhasil dihapus');
    }
}
