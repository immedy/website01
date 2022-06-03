<?php

namespace App\Http\Controllers;

use App\Models\dokter;
use App\Models\refsmf;
use App\Models\refjabatan;
use App\Models\refruangan;
use App\Models\refkategori;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

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
            "ruangan" => refruangan::all(),
            "dokter" => dokter::all(),
            "jabatan" => refjabatan::all()
        ]);
    }

    public function refsmf(Request $request)
    {
        $ValidasiSmf = $request->validate([
            'deskripsi' => 'required',
        ]);
        $ValidasiSmf['status'] = 1;
        $refsmf = refsmf::create($ValidasiSmf);
        if ($ValidasiSmf) {
            Alert::toast('Berhasil');
            return redirect('/kategori');
        }
    }

    public function refberita(Request $request)
    {
        $ValidasiBerita = $request->validate([
            'deskripsi' => 'required',
        ]);
        $ValidasiBerita['status'] = 1;
        $refkategori = refkategori::create($ValidasiBerita);
        if ($ValidasiBerita) {
            Alert::toast('Berhasil');
            return redirect('/kategori');
        }
    }

    public function refruangan(Request $request)
    {
        $ValidasiRuangan = $request->validate([
            'deskripsi' => 'required',
        ]);
        $ValidasiRuangan['status'] = 1;
        $refruangan = refruangan::create($ValidasiRuangan);
        if ($ValidasiRuangan) {
            Alert::toast('Berhasil');
            return redirect('/kategori');
        }
    }
    public function refjabatan(Request $request)
    {
        $ValidasiJabatan = $request->validate([
            'deskripsi' => 'required',
        ]);
        $ValidasiJabatan['status'] = 1;
        $refjabatan = refjabatan::create($ValidasiJabatan);
        if ($ValidasiJabatan) {
            Alert::toast('Berhasil');
            return redirect('/kategori');
        }
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
