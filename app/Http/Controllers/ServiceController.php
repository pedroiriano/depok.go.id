<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataTables\ServiceDataTable;
use App\Service;
use App\Category;

class ServiceController extends Controller
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
    public function index(ServiceDataTable $dataTable)
    {
        return $dataTable->render('admin.services.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.services.form', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
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

        return redirect()
            ->route('admin-service.index')
            ->with('success', "Layanan DSW {$service->namaservice} telah ditambah");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $service = Service::find($id);
        $categories = Category::all();
        return view('admin.services.form', compact('categories', 'service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        request()->validate([
            'inputNamaLayanan' => 'required',
            'inputURL' => 'required',
            'inputStatus' => 'required',
        ]);
        $service = Service::find($id);
        $service->namaservice = $request->inputNamaLayanan;
        $service->url = $request->inputURL;
        $service->statusservice = $request->inputStatus;
        $service->category_id = $request->inputKategori;
        $service->save();

        return redirect()
            ->route('admin-service.index')
            ->with('success', "Layanan DSW {$service->namaservice} telah diubah");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $service = Service::findOrFail($id);
        $service->delete();
        return back()->with('success', 'Data berhasil di hapus');
    }
}
