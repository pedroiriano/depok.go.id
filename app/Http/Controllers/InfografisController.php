<?php

namespace App\Http\Controllers;

use App\Infografis;
use App\OPD;
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
        return view('admin.infografis')->with('infografis', $infografis);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $opd = OPD::all();
        return view('admin.form_infografis', compact('opd'));
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

            return back()->with('success', 'Infografis telah diupload');
        } catch (Exception $e) {
            return back()->withInput()->with('failed', 'Data gagal ditambah');
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
        return view('admin.form_infografis', compact('infografis','opd'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Infografis  $infografis
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Infografis $infografis)
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
            $infographic = Infografis::find($infografis->id);
            $infographic->nama = $request->nama;
            $infographic->sumber = $request->opd;
            if ($request->hasFile('image')) {
                unlink(storage_path('app/public/uploads/infografis/'.$infografis->imageName));
                $image = $request->file('image');
                $imageName = 'infografis-'.\Carbon\Carbon::now()->format('Y-m-dH:i:s') . '.' . $image->getClientOriginalExtension();
                $path = $image->storeAs('public/uploads/infografis', $imageName);
            }else{
                $imageName = $infografis->imageName;
            }
            $infographic->imageName = $imageName;
            $infographic->status = $request->status;
            $infographic->save();

            return back()->with('success', 'Infografis telah diubah');
        } catch (Exception $e) {
            return back()->withInput()->with('failed', 'Data gagal diubah');
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
        //
    }
}
