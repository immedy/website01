<?php

namespace App\Http\Controllers;

use App\Models\refruangan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.pegawai', [
            "user" => User::all(),
            "refruangan" => refruangan::all()
        ]);
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required']
        ]);
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            Alert::toast('Selamat Datang', 'success');
            return redirect()->intended('/adminb');
        }
        Alert::Toast('Username Dan Password Tidak Sama', 'error');
        return back();
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }

    public function login()
    {
        return view('dashboard.Login');
    }


    public function store(Request $request)
    {
        $ValidasiUsername = $request->validate([
            "nama" => 'required',
            "username" => 'required|unique:users',
            "password" => 'required',
            "refruangan_id" => 'required',
        ]);
        $ValidasiUsername['password'] = bcrypt($ValidasiUsername['password']);
        $ValidasiUsername['status'] = 1;
        user::create($ValidasiUsername);
        return redirect('/pegawai');
    }
}

    // /**
    //  * Display the specified resource.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function show($id)
    // {
    //     //
    // }

    // /**
    //  * Show the form for editing the specified resource.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function edit($id)
    // {
    //     //
    // }

    // /**
    //  * Update the specified resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function update(Request $request, $id)
    // {
    //     //
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function destroy($id)
    // {
    //     //
    // }
