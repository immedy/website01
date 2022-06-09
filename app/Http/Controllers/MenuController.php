<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\menuinsert;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.home', [
            'Menu' => Menu::all(),
            "dashboard" => menuinsert::orderBy('menu_id', 'asc')->get()
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ValidasiMenuWebsite = $request->validate([
            'menu_id' => 'required',
            'index' => 'required',
            'isi' => 'required',
            'foto' => 'required|image|mimes:jpeg|file|max:2048',
        ]);
        $ValidasiMenuWebsite['status'] = 1;
        $ValidasiMenuWebsite['foto'] = $request->file('foto')->store('FotoInstalasi');
        menuinsert::create($ValidasiMenuWebsite);
        if ($ValidasiMenuWebsite) {
            Alert::toast('Berhasil ');
            return redirect('/Menu');
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
