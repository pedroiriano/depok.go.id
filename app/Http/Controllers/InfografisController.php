<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Infografis;
use App\Models\OPD;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class InfografisController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $infografis = Infografis::orderBy('created_at', 'DESC')->get();
        return view('admin.infographics.index')->with('infografis', $infografis);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $opd = OPD::all();
        return view('admin.infographics.form', compact('opd'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'nama' => 'required',
                'opd' => 'required',
                'status' => 'required',
                'image' => 'required|mimes:jpg,png,jpeg|max:2048',
            ]
        );

        try {
            $image = $request->file('image');
            $imageName = 'infografis-'.\Carbon\Carbon::now()->format('Y-m-dH:i:s') . '.' . $image->getClientOriginalExtension();
            $path = $image->storeAs('public/uploads/infografis', $imageName);

            $infografis = new Infografis();
            $infografis->nama = $request->nama;
            $infografis->sumber = $request->opd;
            $infografis->imageName = $imageName;
            $infografis->status = $request->status;
            $infografis->save();

            return redirect()
                ->route('admin-infografis.index')
                ->with('success', "Infografis {$infografis->nama} telah berhasil ditambah");
        } catch (Exception $e) {
            return back()->withInput()->with('failed', 'Infografis gagal ditambah');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Infografis  $infografis
     * @return \Illuminate\Http\Response
     */
    public function show(Infografis $infografis)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Infografis  $infografis
     * @return \Illuminate\Http\Response
     */
    public function edit(Infografis $infografis)
    {
        $opd = OPD::all();
        return view('admin.infographics.form', compact('infografis','opd'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Infografis  $infografis
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate(
            [
                'nama' => 'required',
                'opd' => 'required',
                'status' => 'required',
                'image' => 'mimes:jpg,png,jpeg|max:2048',
            ]
        );
        try {
            $infografis = Infografis::find($id);
            $infografis->nama = $request->nama;
            $infografis->sumber = $request->opd;
            if ($request->hasFile('image')) {
                unlink(storage_path('app/public/uploads/infografis/'.$infografis->imageName));
                $image = $request->file('image');
                $imageName = 'infografis-'.\Carbon\Carbon::now()->format('Y-m-dH:i:s') . '.' . $image->getClientOriginalExtension();
                $path = $image->storeAs('public/uploads/infografis', $imageName);
            }else{
                $imageName = $infografis->imageName;
            }
            $infografis->imageName = $imageName;
            $infografis->status = $request->status;
            $infografis->save();

            return redirect()
                ->route('admin-infografis.index')
                ->with('success', "Infografis {$infografis->nama} telah berhasil diubah");
        } catch (Exception $e) {
            return back()->withInput()->with('failed', 'Infografis gagal diubah');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Infografis  $infografis
     * @return \Illuminate\Http\Response
     */
    public function destroy(Infografis $infografis)
    {
        $name = $infografis->nama;
        $image = storage_path('app/public/uploads/infografis/'.$infografis->imageName);
        if (File::exists($image)) {
            unlink($image);
        }
        $infografis->delete();

        return back()->with('success', "Pengumuman {$name} telah di hapus");
    }
}
