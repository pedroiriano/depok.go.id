<?php

namespace App\Http\Controllers;

use App\DataTables\AgendaDatatable;
use App\Models\Agenda;
use App\Models\OPD;
use Illuminate\Http\Request;
use Exception;

class AgendaController extends Controller
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
    public function index(AgendaDatatable $datatable)
    {
        return $datatable->render('admin.agenda.index');    

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $opd = OPD::all();
        return view('admin.agenda.form', compact('opd'));
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
                'tempat' => 'required',
                'tanggal' => 'required|date',
                'image' => 'mimes:jpg,png,jpeg|max:2048',
            ]
        );

        try {
            $agenda = new Agenda();
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $imageName = 'agenda-' . \Carbon\Carbon::now()->format('Y-m-dH:i:s') . '.' . $image->getClientOriginalExtension();
                $path = $image->storeAs('public/uploads/agenda', $imageName);
            } else{
                $imageName = "no-image.png";
            }
            $agenda->nama = $request->nama;
            $agenda->tanggal = $request->tanggal;
            $agenda->sumber = $request->opd;
            $agenda->status = $request->status;
            $agenda->imageName = $imageName;
            $agenda->tempat = $request->tempat;
            $agenda->save();

            return redirect()
                ->route('agenda.index')
                ->with('success', "Agenda {$agenda->nama} telah berhasil ditambah");

        } catch (Exception $e) {
            return back()->withInput()->with('failed', 'Data gagal ditambah');
        }
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
        $opd = OPD::all();
        $agenda = Agenda::find($id);
        return view('admin.agenda.form', compact('agenda','opd'));
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
        $request->validate(
            [
                'nama' => 'required',
                'opd' => 'required',
                'status' => 'required',
                'tempat' => 'required',
                'tanggal' => 'required|date',
                'image' => 'mimes:jpg,png,jpeg|max:2048',
            ]
        );
        $agenda = Agenda::find($id);
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = 'agenda-' . \Carbon\Carbon::now()->format('Y-m-dH:i:s') . '.' . $image->getClientOriginalExtension();
            $path = $image->storeAs('public/uploads/agenda', $imageName);
        } else{
            $imageName = "no-image.png";
        }
        $agenda->nama = $request->nama;
        $agenda->tanggal = $request->tanggal;
        $agenda->sumber = $request->opd;
        $agenda->status = $request->status;
        $agenda->imageName = $imageName;
        $agenda->tempat = $request->tempat;
        $agenda->save();

        return redirect()
            ->route('agenda.index')
            ->with('success', "Agenda {$agenda->nama} telah berhasil diubah");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $agenda = Agenda::findOrFail($id);
        $agenda->delete();
        return back()->with('success', 'Agenda berhasil di hapus');
    }
}
