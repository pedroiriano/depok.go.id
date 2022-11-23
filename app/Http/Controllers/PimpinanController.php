<?php

namespace App\Http\Controllers;

use App\Http\Requests\PimpinanRequest;
use App\Models\Pimpinan;
use App\Models\Content;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PimpinanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $content = Content::where('slug', 'pimpinan')->first();
        $walikota = Pimpinan::findOrFail(1);
        $wakilWalikota = Pimpinan::findOrFail(2);
        return view('admin.pimpinan.index', compact('walikota', 'wakilWalikota', 'content'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pimpinan  $pimpinan
     * @return \Illuminate\Http\Response
     */
    public function show(Pimpinan $pimpinan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pimpinan  $pimpinan
     * @return \Illuminate\Http\Response
     */
    public function edit(Pimpinan $pimpinan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pimpinan  $pimpinan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $content = Content::where('slug', 'pimpinan')->first();
        $content->desc = $request->content;
        $content->save();
        return back()->with('success', 'Konten '.$content->nama.' telah diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pimpinan  $pimpinan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pimpinan $pimpinan)
    {
        //
    }

    public function updateWalikota(PimpinanRequest $request)
    {
        $walikota = Pimpinan::find(1);
        $oldImage = $walikota->image;
        
        $walikota->nama = $request->nama;
        $walikota->image = $request->storePimpinanImage();
        $walikota->deskripsi = $request->deskripsi;
        $walikota->facebook = $request->facebook;
        $walikota->twitter = $request->twitter;
        $walikota->instagram = $request->instagram;

        $walikota->save();

        if($walikota->image !== $oldImage) {
            Storage::delete($oldImage);
        }

        return redirect()
            ->route('pimpinan.index')
            ->with('success', 'Walikota '. $walikota->nama . ' telah berhasil diupdate');
    }

    public function updateWakilWalikota(PimpinanRequest $request)
    {
        $wakilWalikota = Pimpinan::find(2);
        $oldImage = $wakilWalikota->image;

        $wakilWalikota->nama = $request->nama;
        $wakilWalikota->image = $request->storePimpinanImage();
        $wakilWalikota->deskripsi = $request->deskripsi;
        $wakilWalikota->facebook = $request->facebook;
        $wakilWalikota->twitter = $request->twitter;
        $wakilWalikota->instagram = $request->instagram;
        
        $wakilWalikota->save();

        if($wakilWalikota->image !== $oldImage) {
            Storage::delete($oldImage);
        }

        return redirect()
            ->route('pimpinan.index')
            ->with('success', 'Wakil Walikota '. $wakilWalikota->nama . ' telah berhasil diupdate');
    }
}
