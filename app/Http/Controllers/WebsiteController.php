<?php

namespace App\Http\Controllers;

use App\Models\berita;
use App\Models\dokter;
use App\Models\jabatan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

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
        $EnskripsiID = Crypt::decryptString($id);
        return view(
            'website.BeritaDetail',
            [
                'berita' => berita::findOrfail($EnskripsiID),
                'posting' => berita::orderBy("created_at", "desc")->paginate(5)
            ]
        );
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
    public function VisiDanMisi()
    {
        return view('website.visimisi');
    }
    public function Sejarah()
    {
        return view('website.sejarah');
    }
    public function StrukturOrganisasi()
    {
        return view('website.StrukturOrganisasi', [
            'jabatan' => jabatan::all()
        ]);
    }
}
