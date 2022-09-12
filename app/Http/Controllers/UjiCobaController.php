<?php

namespace App\Http\Controllers;

use App\Models\Detailindikator;
use App\Models\refjuduldetailindikator;
use Illuminate\Http\Request;

class UjiCObaController extends Controller
{
    public function index()
    {
        return view('dashboard.test',[
            'REF' => refjuduldetailindikator::with('refindikator')->get(),
            'detail' => Detailindikator::all()

        ]);
    }
}
