<?php

namespace App\Http\Controllers;

use App\Slider;
use DB;
use App\OPD;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SliderController extends Controller
{
    public function __construct()
    {

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = Slider::orderBy('status', 'DESC')->get();
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

        $image = $request->file('image');
        $imageName = 'slider-'.\Carbon\Carbon::now()->format('Y-m-dH:i:s') . '.' . $image->getClientOriginalExtension();
        $path = $image->storeAs('public/uploads/sliders', $imageName);
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $opd = OPD::find($request->opd);
            $fileName = $opd->nama .'-'. $file->getClientOriginalName();
            $pathFile = $file->storeAs('public/uploads/file', $fileName);
        }
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
        $slider->file = $fileName;
        $slider->status = $request->status;
        $slider->save();


        return back()->with('success', 'Slider telah diupload');

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
                'image' => 'required|image|mimes:jpg,png,jpeg|max:2048',
            ]
        );

        $slider = Slider::find($slider->id);
        $slider->nama = $request->nama;
        $slider->deskripsi = $request->deskripsi;
        $slider->sumber = $request->opd;
        if ($request->popup == "1") {
            DB::table('sliders')->update(['popup' => 0]);
        }
        $slider->popup = intval($request->popup);
        $slider->url = str_slug($request->nama);
        $slider->imageName = $imageName;
        $slider->status = $request->status;

        if ($request->hasFile('image')) {
            $userImage = public_path("uploads/slider/{$slider->imageName}");
            if(file::exists($userImage)){
                unlink($userImage);
            }
            $image = $request->file('image');
            $imageName = time().'.'.request()->image->getClientOriginalExtension();
            request()->image->move(public_path('uploads/slider'), $imageName);
            $slider->imageName = $imageName;
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
