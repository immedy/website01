<?php

namespace App\Http\Controllers;

use App\Models\refkategori;
use App\Models\refruangan;
use App\Models\refsmf;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        return view('dashboard.kategori', [
            "smf" => refsmf::all(),
            "berita" => refkategori::all(),
            "ruangan" => refruangan::all()
        ]);
    }

    public function refsmf(Request $request)
    {
        $ValidasiSmf = $request->validate([
            'deskripsi' => 'required',
        ]);
        $ValidasiSmf['status'] = 1;
        $refsmf = refsmf::create($ValidasiSmf);
        return redirect('/kategori');
    }

    public function refberita(Request $request)
    {
        $ValidasiBerita = $request->validate([
            'deskripsi' => 'required',
        ]);
        $ValidasiBerita['status'] = 1;
        $refkategori = refkategori::create($ValidasiBerita);
        return redirect('/kategori');
    }

    public function refruangan(Request $request)
    {
        $ValidasiRuangan = $request->validate([
            'deskripsi' => 'required',
        ]);
        $ValidasiRuangan['status'] = 1;
        $refruangan = refruangan::create($ValidasiRuangan);
        return redirect('/kategori');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
