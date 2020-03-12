<?php

namespace App\Http\Controllers;

use DB;
use File;
use App\Slider;
use App\OPD;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SliderController extends Controller
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
        $sliders = Slider::orderBy('created_at', 'DESC')->get();
        return view('admin.slider')->with('sliders', $sliders);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $opd = OPD::all();
        return view('form_slider', compact('opd'));
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
                'deskripsi' => 'required',
                'status' => 'required',
                'image' => 'required|mimes:jpg,png,jpeg|max:2048',
            ]
        );

        try {
            $image = $request->file('image');
            $imageName = 'slider-'.\Carbon\Carbon::now()->format('Y-m-dH:i:s') . '.' . $image->getClientOriginalExtension();
            $path = $image->storeAs('public/uploads/sliders', $imageName);

            $slider = new Slider();
            $slider->nama = $request->nama;
            $slider->deskripsi = $request->deskripsi;
            $slider->sumber = $request->opd;
            if ($request->popup == "1") {
                DB::table('sliders')->update(['popup' => 0]);
            }
            $slider->popup = intval($request->popup);
            $slider->url = str_slug($request->nama);
            $slider->imageName = $imageName;
            if ($request->hasFile('file')) {
                $file = $request->file('file');
                $opd = OPD::find($request->opd);
                $fileName = $opd->nama .'-'. $file->getClientOriginalName();
                $pathFile = $file->storeAs('public/uploads/file', $fileName);
                $slider->file = $fileName;
            }
            $slider->status = $request->status;
            $slider->save();

            return back()->with('success', 'Slider telah diupload');
        } catch (Exception $e) {
            return back()->withInput()->with('failed', 'Data gagal ditambah');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function show(Slider $slider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function edit(Slider $slider)
    {
        $opd = OPD::all();
        return view('form_slider', compact('slider', 'opd'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Slider $slider)
    {
        $request->validate(
            [
                'nama' => 'required',
                'deskripsi' => 'required',
                'status' => 'required',
                'opd' => 'required',
                'image' => 'image|mimes:jpg,png,jpeg|max:2048',
            ]
        );

        $slider = Slider::find($slider->id);
        $slider->nama = $request->nama;
        $slider->deskripsi = $request->deskripsi;
        $slider->sumber = $request->opd;
        if ($request->popup == "1") {
            DB::table('sliders')->update(['popup' => 0]);
            DB::table('sliders')->where('id', 3)->update(['popup' => 1]);
        }
        $slider->popup = intval($request->popup);
        $slider->url = str_slug($request->nama);
        $slider->status = $request->status;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $userImage = public_path("storage/uploads/sliders/{$slider->imageName}");

            if(file::exists($userImage)){
                unlink($userImage);
            }
            $imageName = 'slider-'.\Carbon\Carbon::now()->format('Y-m-dH:i:s') . '.' . $image->getClientOriginalExtension();
            $path = $image->storeAs('public/uploads/sliders', $imageName);

            $slider->imageName = $imageName;
        }

        if ($request->hasFile('file')) {
            $opd = OPD::find($request->opd);
            $file = $request->file('file');
            $userFile = public_path("storage/uploads/sliders/{$slider->file}");

            if(file::exists($userFile)){
                unlink($userFile);
            }
            $fileName = $opd->nama .'-'. $file->getClientOriginalName();
            $path = $image->storeAs('public/uploads/sliders', $fileName);

            $slider->file = $fileName;
        }
        $slider->save();

        return back()->with('success', 'Slider telah di Update');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy(Slider $slider)
    {
        $slider = Slider::find($id);
        $userImage = public_path("uploads/slider/{$slider->imageName}");
            if(file::exists($userImage)){
                unlink($userImage);
            }
        Slider::find($id)->delete($id);

        return response()->json([
            'success' => "Slider telah dihapus"
        ]);
    }
}
