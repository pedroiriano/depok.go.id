<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Filesystem\FilesystemManager;
use File;
use App\Agenda;
use App\Category;
use App\Sejarah;
use App\Slider;
use App\Service;
use App\Ikon;

class AdministratorController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function agenda()
    {
        $agendas = Agenda::all();
        return view('admin.agenda')->with('agendas', $agendas);
    }
    public function tambahAgenda(Request $request)
    {
        request()->validate([
            'inputNamaKegiatan' => 'required',
            'inputTanggalKegiatan' => 'required',
            'inputTempat' => 'required',
            // 'image' => 'required|image|mimes:jpg,png,jpeg|max:2048',
        ]);

        $agenda = new Agenda();
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() .'.'.request()->image->getClientOriginalExtension();
            request()->image->move(public_path('uploads/agenda'), $imageName);
        } else{
            $imageName = "no-image";
        }
            $agenda->nama = $request->inputNamaKegiatan;
            $agenda->tanggal = $request->inputTanggalKegiatan;
            $agenda->sumber = $request->inputOPD;
            $agenda->status = $request->inputStatus;
            $agenda->imageName = $imageName;
            $agenda->tempat = $request->inputTempat;
            $agenda->save();

        return back()->with('success', 'Gambar telah diupload');
        
    }
    public function layanan()
    {
        $categories = Category::paginate(5);
        $services = Service::paginate(10);
        return view('admin.layanan', compact('services', 'categories'));
    }
    public function tambahLayanan(Request $request)
    {
        request()->validate([
            'inputNamaLayanan' => 'required',
            'inputURL' => 'required',
            'inputStatus' => 'required',
            'inputTooltip' => 'required',
            'inputIcon' => 'required|image|mimes:jpg,png,jpeg|max:128',
        ]);
        if ($request->hasFile('inputIcon')) {
            $image = $request->file('inputIcon');
            $imageName = time().'.'.request()->inputIcon->getClientOriginalExtension();
            request()->inputIcon->move(public_path('img/icon'), $imageName);
            $service = new Service();
            $service->nama = $request->inputNamaLayanan;
            $service->url = $request->inputURL;
            $service->tooltip = $request->inputTooltip;
            $service->status = $request->inputStatus;
            if ($request->inputStatus == 0) {
                $service->pos = 99;
            }else{
                $otherService = Service::where('pos', $request->inputPosisi)->update(['pos' => 99]);
                $service->pos = $request->inputPosisi;
            } 
            $service->icon = $imageName;
            $service->save();
        }

        return back()->with('success', 'Layanan baru telah sukses ditambahkan');
    }
    public function ubahLayanan(Request $request, $id)
    {
        request()->validate([
            'inputUbahNamaLayanan' => 'required',
            'inputUbahURL' => 'required',
            'inputUbahStatus' => 'required',
            'inputUbahTooltip' => 'required',
            'inputUbahIcon' => 'required|image|mimes:jpg,png,jpeg|max:128',
        ]);
        $service = Service::find($id);
        $service->nama = $request->inputUbahNamaLayanan;
        $service->url = $request->inputUbahURL;
        $service->status = $request->inputUbahStatus;
        $service->tooltip = $request->inputUbahTooltip;
        if ($request->hasFile('inputUbahIcon')) {    
            $userImage = public_path("img/icon/{$slider->imageName}");
            if(file::exists($userImage)){
                unlink($userImage);
            }
            $image = $request->file('image');
            $imageName = time().'.'.request()->image->getClientOriginalExtension();
            request()->image->move(public_path('uploads/slider'), $imageName);
            $slider->imageName = $imageName;
        }
        $service->save();
        return back()->with('success', 'Layanan telah di Update');
    }
    public function slider()
    {
        $sliders = Slider::orderBy('status', 'DESC')->get();
        return view('admin.slider')->with('sliders', $sliders);
    }
    public function tambahSlider(Request $request)
    {
        request()->validate([
            'inputNama' => 'required',
            'inputDeskripsi' => 'required',
            'image' => 'required|image|mimes:jpg,png,jpeg|max:2048',
        ]);
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time().'.'.request()->image->getClientOriginalExtension();
            request()->image->move(public_path('uploads/slider'), $imageName);
            $slider = new Slider();
            $slider->nama = $request->inputNama;
            $slider->deskripsi = $request->inputDeskripsi;
            $slider->imageName = $imageName;
            $slider->status = $request->status;
            $slider->save();
        }

        return back()->with('success', 'Slider telah diupload');
    }
    public function ubahSlider(Request $request, $id)
    {
        request()->validate([
            'inputUbahNama' => 'required',
            'inputUbahDeskripsi' => 'required',
            'image' => 'required|image|mimes:jpg,png,jpeg|max:2048',
        ]);
        $slider = Slider::find($id);
        $slider->nama = $request->inputUbahNama;
        $slider->deskripsi = $request->inputUbahDeskripsi;
        $slider->status = $request->inputUbahStatus;
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
    public function hapusSlider ($id)
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
    public function sejarah()
    {
        $sejarah = Sejarah::find(1);
        return view('admin.sejarah')->with('sejarah', $sejarah);  
    }
    public function ubahSejarah(Request $request)
    {
        $sejarah = Sejarah::find(1);
        $sejarah->content = $request->inputContent;
        $sejarah->save();
        
        return back()->with('success', 'Sukses');
    }
    public function header()
    {
        return view('admin.header');
    }
    public function ubahHeader()
    {
        return "ini adalah header";
    }
    public function ikon()
    {
        $ikon = ikon::find(1);
        return view('admin.ikon')->with('ikon', $ikon);
    }
    public function ubahIkon(Request $request)
    {
        $ikon = ikon::find(1);
        $ikon->content = $request->inputContent;
        $ikon->save();
        
        return back()->with('success', 'Sukses');   
    }
    public function user()
    {
        return view('admin.user');
    }
}
