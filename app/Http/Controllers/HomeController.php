<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pendaftaran;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function pendaftaranPDAM()
    {
        $pendaftar = Pendaftaran::all();
        return view('admin.pdam', compact('pendaftar'));
    }
    public function downloadSuratLamaran($fileName)
    {
        $path = public_path('/storage/uploads/pendaftaran/surat-lamaran/' . $fileName);
        return response()->download($path);
    }
    public function downloadPersyaratan($fileName)
    {
        $path = public_path('/storage/uploads/pendaftaran/sertifikat/' . $fileName);
        return response()->download($path);
    }
}
