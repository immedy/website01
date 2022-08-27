<?php

namespace App\Http\Controllers;

use App\Models\Menuindikator;
use App\Models\refindikator;
use App\Models\refjuduldetailindikator;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class IndikatorMutuCOntroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.IndikatorMutu',[
            'indikator' => refindikator::where("status","1")->get(),
            'menuindikator' => Menuindikator::orderBy('tahun','desc')->orderBy('refindikator_id','asc')->get()
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
        $validasiJudulIndikator = $request->validate([
            'tahun' => 'required',
            'refindikator_id' => 'required'
        ]);
        $validasiJudulIndikator['user_id'] = auth()->user()->id;
        $validasiJudulIndikator['refruangan_id'] = auth()->user()->refruangan_id;
  
        Menuindikator::create($validasiJudulIndikator);
        if($validasiJudulIndikator){
            Alert::Toast('Judul Besar Indikator Telah Terinput');
            return redirect('/IndikatorMutu');
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
        return view('dashboard.DetailMenuIndikator',[
            'JudulIndikator' => Menuindikator::find($id),
            'menu' => refjuduldetailindikator::where("refindikator_id","=",($id))->get()
        ]);
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
