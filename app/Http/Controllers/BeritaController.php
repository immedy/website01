<?php

namespace App\Http\Controllers;

use App\Models\berita;
use App\Models\refkategori;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Storage;

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
            'berita' => 'required',
            'refkategori_id' => 'required',
            'foto' => 'required|image|mimes:jpeg|file|max:2048',
        ]);
        $ValidasiBerita['user_id'] = auth()->user()->id;
        $ValidasiBerita['refruangan_id'] = auth()->user()->refruangan_id;
        $ValidasiBerita['status'] = 1;
        $ValidasiBerita['exeprt'] = Str::limit(strip_tags($request->berita, 100));
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
        return view('dashboard.EditBerita', [
            'berita' => berita::find($id),
            'kategori' => refkategori::all()
        ]);
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
        $ValidasiBerita = $request->validate([
            'judul' => 'required',
            'berita' => 'required',
            'refkategori_id' => 'required',
            'foto' => 'required|image|mimes:jpeg|file|max:2048',
        ]);
        $ValidasiBerita['exeprt'] = Str::limit(strip_tags($request->berita, 100));
        $ValidasiBerita['foto'] = $request->file('foto')->store('FotoBerita');
        berita::where('id', $id)
            ->update($ValidasiBerita);
        if ($ValidasiBerita) {
            Alert::toast('Berhasil Update Berita');
            return redirect('/berita');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $berita = berita::find($id);
        $berita->delete();
        if ($berita) {
            Alert::toast('Berhasil menghapus Berita');
            return redirect('/berita');
        }
    }
}
