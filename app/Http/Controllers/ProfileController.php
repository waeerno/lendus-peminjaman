<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileRequest;
use App\Models\Admin;
use App\Models\Unit;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;



class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.profile.index', [
            'data' => User::find(Auth::user()->id),
            'unit' => Unit::get()
        ]);
    }
    /**
     * changePassword
     *
     * @param  mixed $request
     * @return void
     */
    public function changePassword(ProfileRequest $request)
    {
        $user = User::findOrFail(Auth::user()->id);
        dd($user);
        $user->update([
            'password' => Hash::make($request->new_password)
        ]);
        return redirect()->back()->with('success', 'Password berhasil diubah');
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();

        if ($request->level == 'operator') {
            $user = User::findOrFail($id);
            $user->update($data);
        } elseif ($request->level == 'admin') {

            $admin = Admin::findOrFail($request->admin);
            $admin->update($data);

            $user = User::findOrFail($id);
            $user->update($data);
        }
        return to_route('profile.index')->with('success', 'Data diri berhasil diubah');
    }
}
