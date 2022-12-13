<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Unit;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // dd(User::Role('admin')->get());
        return view('pages.admin.index', [
            'data' => User::Role('admin')->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.create', [
            'unit' => Unit::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new User;
        $user->nama = $request->nama;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->assignRole('Admin');

        $user->save();

        $admin = new Admin;
        $admin->user_id = $user->id;
        $admin->unit_id = $request->unit_id;
        $admin->no_wa = $request->no_wa;
        $admin->save();

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
        return view('pages.admin.edit', [
            'data' => $admin,
            'unit' => Unit::all()
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
        // dd($admin);
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

        $user = User::findOrFail($request->user_id);
        $user->nama = $request->nama;
        $user->email = $request->email;
        $request->has('password') ? $user->password = Hash::make($request->password) : '';
        $user->update();

        return to_route('pengguna.admin.index')->with('success', 'Data berhasil diubah');
    }

    /**
     * updatePassword
     *
     * @param  mixed $request
     * @param  mixed $operator
     * @return void
     */
    public function changePassword(Request $request)
    {
        User::findOrFail(Auth::user()->id)->update([
            'password' => Hash::make($request->new_password)
        ]);

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
