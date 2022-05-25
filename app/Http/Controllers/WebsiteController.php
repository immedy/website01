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
            "berita" => berita::orderBy("created_at", "desc")->get()
        ]);
    }
    public function detail($id)
    {
        return view('website.BeritaDetail', [
            'berita' => berita::find($id),
            'posting' => berita::orderBy("created_at", "desc")->paginate(5)
        ]);
    }
    public function BeritaKesehatan()
    {
        return view('website.BeritaKesehatan', [
            'berita' => berita::all(),
        ]);
    }
    public function CapaianIndikatorPMKP()
    {
        return view('website.Indikatorpmkp');
    }
    public function JadwalDokter()
    {
        return view('website.JadwalDokter');
    }
    public function TataTertibPengunjungDanjamBesuk()
    {
        return view('website.JadwalDokter');
    }
}
