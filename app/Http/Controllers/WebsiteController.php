<?php

namespace App\Http\Controllers;

use App\Models\berita;
use App\Models\dokter;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index()
    {
        return view('website.index', [
            "DokterSpesialis" => dokter::all(),
            "berita" => berita::all()
        ]);
    }
    public function detail($id)
    {
        return view('website.BeritaKesehatan', [
            'berita' => berita::find($id)
        ]);
    }
}
