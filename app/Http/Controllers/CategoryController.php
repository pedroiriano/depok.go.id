<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
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
        $categories = Category::paginate(10);
        return view('admin.kategori', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.form_kategori');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*return $request->all();*/
        request()->validate([
            'nama' => 'required',
            'status' => 'required',
            'tooltip' => 'required',
            'posisi' => 'required',
            'icon' => 'required|image|mimes:jpg,png,jpeg|max:128',
        ]);
        if ($request->hasFile('icon')) {
            $image = $request->file('icon');
            $category = new Category();
            $category->nama = $request->nama;
            $category->tooltip = $request->tooltip;
            $category->status = $request->status;
            /*if ($request->status == '0') {
                $category->pos = 99;
            }else{
                if ($request->posisi == '0') {
                    $category->pos = 99;
                }else{
                    $othercategory = category::where('pos', $request->posisi)->update(['pos' => 99]);
                    $category->pos = $request->posisi;
                }
            }*/
            $imageName = $category->nama.'.'.$image->getClientOriginalExtension();
            $image->move(public_path('img/icon'), $imageName);
            $category->pos = $request->posisi;
            $category->icon = $imageName;
            $category->save();
            
        }
        return redirect('admin-kategori-dsw')->with('success', 'Kategori '. $category->nama .'telah berhasil ditambahkan');
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        request()->validate([
            'nama' => 'required',
            'status' => 'required',
            'tooltip' => 'required',
            'posisi' => 'required',
            'icon' => 'required|image|mimes:jpg,png,jpeg|max:128',
        ]);

        $category = Category::find($request->id);
        $category->nama = $request->nama;
        $category->tooltip = $request->tooltip;
        $category->status = $request->status;
        if($request->hasFile('icon')){
            File::delete(public_path('img/icon/'.$category->icon));
            $icon = $request->file('icon');
            $imageName = time().'.'.request()->$icon->getClientOriginalExtension();
            request()->$icon->move(public_path('img/icon'), $imageName);
        }else{
            $imageName = $request -> $oldImage;
        }
        $category->pos = $request->posisi;
        $category->icon = $imageName;
        $category->save();

        return redirect('admin-kategori-dsw')->with('success', 'Kategori '. $category->nama . 'telah berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();
        return back()->with('success', 'Data berhasil di hapus');
    }
}
