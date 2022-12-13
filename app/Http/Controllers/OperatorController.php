<?php

namespace App\Http\Controllers;

use App\Models\Operator;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class OperatorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $data = User::with('roles')->get();
        return view('pages.operator.index', [
            'data' => User::Role('operator')->get(),
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
        User::create($data)->assignRole('Operator');

        return to_route('pengguna.operator.index')->with('success', 'Data berhasil ditambahkan');
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Operator  $operator
     * @return \Illuminate\Http\Response
     */
    public function edit(User $operator)
    {
        return view('pages.operator.edit', [
            'data' => $operator
        ]);
    }

    public function password(User $operator)
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
    public function update(Request $request, User $operator)
    {
        $data = $request->all();
        $request->has('password') ? $data['password'] = Hash::make($request->password) : '';
        $operator->update($data);

        return to_route('pengguna.operator.index')->with('success', 'Data berhasil diubah');
    }

    /**
     * updatePassword
     *
     * @param  mixed $request
     * @return void
     */
    public function changePassword(Request $request)
    {
        // dd($request->all);
        User::findOrFail(Auth::user()->id)->update([
            'password' => Hash::make($request->new_password)
        ]);

        return to_route('pengguna.operator.index')->with('success', 'Password berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Operator  $operator
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $operator)
    {
        $operator->delete();
        return to_route('pengguna.operator.index')->with('success', 'Data berhasil dihapus');
    }
}
