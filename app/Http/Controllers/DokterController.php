<?php

namespace App\Http\Controllers;

use App\Models\dokter;
use App\Models\refruangan;
use App\Models\refsmf;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class DokterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.dokter', [
            "Dokter" => dokter::all(),
            "smf" => refsmf::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }
    public function store(Request $request)
    {
        $ValidasiDokter = $request->validate([
            'nama' => 'required',
            'refsmf_id' => 'required',
            'foto' => 'required|image|mimes:jpeg|file|max:2048',
            'residen' => 'required'
        ]);
        $ValidasiDokter['status'] = 1;        
        $ValidasiDokter['foto'] = $request->file('foto')->store('FotoDokter');     
        dokter::create($ValidasiDokter);
        if ($ValidasiDokter) {
            Alert::toast('Berhasil Menambahkan Dokter');
        return redirect('/dokter');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
