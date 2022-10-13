<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Models\User;
use App\Models\Content;

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

    public function create()
    {
        $roles = Role::orderBy('id')->pluck('name', 'id');
        return view('admin.users.admin', compact('roles'));
    }

    public function store(Request $request)
    {
        $request->validate(
            [
                'nama' => 'required',
                'email' => 'required|email|unique:users',
                'password' => 'required|min:6|confirmed',
            ]
        );

        $user = new User();
        $user->name = $request->nama;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();

        $user->assignRole('administrator');

        return redirect()
            ->route('user.index')
            ->with('success', "Administrator {$user->name} telah ditambah");
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
}
