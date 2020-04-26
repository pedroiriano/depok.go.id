<?php

namespace App\Http\Controllers;

use App\Pendaftaran;
use Illuminate\Http\Request;

class PendaftaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pendaftaran');
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
        $message = [
            'required' => ':attribute wajib diisi',
            'numeric' => ':attribute diisi dengan menggunakan angka',
            'unique' => ':attribute sudah terdaftar',
            'digits' => ':attribute harus diisi dengan angka dengan jumlah karakter :digits',
            'not_regex' => 'Format :attribute tidak valid'
        ];
        $request->validate(
            [
                'nik' => 'required|unique:pendaftaran,nik|digits:16|not_regex:/0{2}$/',
                'nama' => 'required',
                'email' => 'required',
                'handphone' => 'required',
                'surat_lamaran' => 'required|mimes:doc,pdf,docx,zip',
                'sertifikat' => 'required|mimes:doc,pdf,docx,zip',
            ], $message);
        try {
            $surat_lamaran = $request->file('surat_lamaran');
            $surat_lamaranName = 'surat-lamaran-'. strtoupper($request->nama) . '.' . $surat_lamaran->getClientOriginalExtension();
            $path_surat_lamaran = $surat_lamaran->storeAs('public/uploads/pendaftaran/surat-lamaran', $surat_lamaranName);

            $sertifikat = $request->file('sertifikat');
            $sertifikatName = 'sertifikat-'. strtoupper($request->nama) . '.' . $sertifikat->getClientOriginalExtension();
            $path_sertifikat = $sertifikat->storeAs('public/uploads/pendaftaran/sertifikat', $sertifikatName);

            $pendaftaran = new Pendaftaran;
            $pendaftaran->nik = $request->nik;
            $pendaftaran->nama = strtoupper($request->nama);
            $pendaftaran->email = $request->email;
            $pendaftaran->handphone = $request->handphone;
            $pendaftaran->surat_lamaran = $surat_lamaranName;
            $pendaftaran->sertifikat = $sertifikatName;
            $pendaftaran->save();

            return redirect()->route('pendaftaran.success');
        } catch (Exception $e) {
            return back()->withInput()->with('failed', 'Terjadi kesalahan');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pendaftaran  $pendaftaran
     * @return \Illuminate\Http\Response
     */
    public function show(Pendaftaran $pendaftaran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pendaftaran  $pendaftaran
     * @return \Illuminate\Http\Response
     */
    public function edit(Pendaftaran $pendaftaran)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pendaftaran  $pendaftaran
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pendaftaran $pendaftaran)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pendaftaran  $pendaftaran
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pendaftaran $pendaftaran)
    {
        //
    }

    public function success()
    {
        return view('pendaftaran-success');
    }
}
