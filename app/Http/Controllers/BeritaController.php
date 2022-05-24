<?php

namespace App\Http\Controllers;

use App\Models\berita;
use App\Models\refkategori;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.BeritaKesehatan', [
            'berita' => berita::all()
        ]);
    }
    public function insert()
    {
        return view('dashboard.InsertBerita', [
            'kategori' => refkategori::all()
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
        $ValidasiBerita = $request->validate([
            'judul' => 'required',
            'berita' => 'required|',
            'refkategori_id' => 'required',
            'foto' => 'required|image|mimes:jpeg|file|max:2048',
        ]);
        $ValidasiBerita['user_id'] = auth()->user()->id;
        $ValidasiBerita['refruangan_id'] = auth()->user()->refruangan_id;
        $ValidasiBerita['status'] = 1;
        $ValidasiBerita['foto'] = $request->file('foto')->store('FotoBerita');
        berita::create($ValidasiBerita);
        if ($ValidasiBerita) {
            Alert::toast('Berhasil Menambahkan Berita');
            return redirect('/berita');
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
