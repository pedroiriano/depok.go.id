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
use App\Content;

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

    public function layanan()
    {
        $categories = Category::all();
        $services = Service::paginate(10);
        return view('admin.layanan', compact('services', 'categories'));
    }
    public function tambahLayanan(Request $request)
    { 
        request()->validate([
            'inputNamaLayanan' => 'required',
            'inputURL' => 'required',
            'inputStatus' => 'required',
        ]);
            $service = new Service();
            $service->namaservice = $request->inputNamaLayanan;
            $service->url = $request->inputURL;
            $service->statusservice = $request->inputStatus;
            $service->category_id = $request->inputKategori;
            $service->save();

        return back()->with('success', 'Layanan ' . $service->namaservice . ' telah sukses ditambahkan');
    }
    public function ubahLayanan(Request $request, $id)
    {
        request()->validate([
            'inputUbahNamaLayanan' => 'required',
            'inputUbahURL' => 'required',
            'inputUbahStatus' => 'required',
        ]);
        $service = Service::find($id);
        $service->namaservice = $request->inputUbahNamaLayanan;
        $service->url = $request->inputUbahURL;
        $service->statusservice = $request->inputUbahStatus;
        $service->category_id = $request->inputUbahKategori;
        $service->save();
        return back()->with('success', 'Layanan telah di Update');
    }
    public function hapusLayanan($id)
    {
        $service = Service::findOrFail($id);
        $service->delete();
        return back()->with('success', 'Data berhasil di hapus');
    }
    public function content($content)
    {
        $content = Content::where('slug', $content)->first();
        if ($content == NULL) {
            abort(404);
        }
        return view('admin.content', compact('content'));
    }
    public function updateContent(Request $request, $content)
    {
        $content = Content::where('slug', $content)->first();
        $content->desc = $request->inputContent;
        $content->save();
        return back()->with('success', 'Konten '.$content->nama.' telah diubah'); 
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
}
