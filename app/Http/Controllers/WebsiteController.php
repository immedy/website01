<?php

namespace App\Http\Controllers;

use App\Models\berita;
use App\Models\dokter;
use App\Models\jabatan;
use App\Models\Menuindikator;
use App\Models\menuinsert;
use App\Models\refindikator;
use App\Models\refkategori;
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
            'kategori' => refkategori::all()
        ]);
    }
    public function JadwalDokter()
    {
        return view('website.JadwalDokter', [
            "DokterSpesialis" => dokter::Where("residen", "=", "0")->get(),
            "DokterResiden" => dokter::Where("residen", "=", "1")->get()
        ]);
    }
    public function TataTertibPengunjungDanjamBesuk()
    {
        return view('website.Tatatertib');
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
    public function InstalasiRawatJalan()
    {
        return view('website.InstalasiRawatJalan', [
            'webrawatjalan' => menuinsert::where("menu_id", "=", "3")->get()

        ]);
    }
    public function InstalasiRawatdarurat()
    {
        return view('website.instalasigawatdarurat', [
            'P' => menuinsert::where("menu_id", "=", "1")->get()

        ]);
    }
    public function InstalasiRawatInap()
    {
        return view('website.instalasirawatinap', [
            'P' => menuinsert::where("menu_id", "=", "2")->get()

        ]);
    }
    public function InstalasiLab()
    {
        return view('website.instalasilaboratorium', [
            'P' => menuinsert::where("menu_id", "=", "4")->get()

        ]);
    }
    public function InstalasiRadiologi()
    {
        return view('website.instalasiradiologi', [
            'P' => menuinsert::where("menu_id", "=", "5")->get()

        ]);
    }
    public function InstalasiFarmasi()
    {
        return view('website.instalasifarmasi', [
            'P' => menuinsert::where("menu_id", "=", "6")->get()

        ]);
    }
    public function InstalasiCareUnit()
    {
        return view('website.icu', [
            'P' => menuinsert::where("menu_id", "=", "7")->get()

        ]);
    }
    public function InstalasiNonMedik()
    {
        return view('website.instalasinonpenunjang', [
            'P' => menuinsert::where("menu_id", "=", "8")->get()

        ]);
    }
    public function InstalasiKamarOperasi()
    {
        return view('website.instalasikamaroperasi', [
            'P' => menuinsert::where("menu_id", "=", "9")->get()

        ]);
    }
    public function CapaianIndikatorPMKP()
    {
        return view('website.Indikatorpmkp',[
            "indikator" => Menuindikator::orderBy('tahun','desc')->orderBy('refindikator_id','asc')->get()
        ]);
    }
    public function IndikatorDetail()
    {
        return view('website.DetailIndikator.DetailIndikator');
    }
    
}
