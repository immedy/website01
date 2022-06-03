<?php

namespace App\Http\Controllers;

use App\Models\jabatan;
use App\Models\refjabatan;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class JabatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.Jabatan', [
            'jabatan' => jabatan::all(),
            'refjabatan' => refjabatan::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ValidasiJabatan = $request->validate([
            'nama' => 'required',
            'refjabatan_id' => 'required|unique:jabatans,refjabatan_id',
            'foto' => 'required|image|mimes:jpeg|file|max:512',
        ]);
        $ValidasiJabatan['status'] = 1;
        $ValidasiJabatan['foto'] = $request->file('foto')->store('FotoPejabat');
        jabatan::create($ValidasiJabatan);
        if ($ValidasiJabatan) {
            Alert::toast('Berhasil Menambahkan Pejabat');
            return redirect('/jabatan');
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
