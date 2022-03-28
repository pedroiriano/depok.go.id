<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('admin.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $permissions = Permission::orderBy('id')->pluck('name', 'id');
        return view('admin.users.create', compact('permissions'));
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
                'email' => 'required|email|unique:users',
                'permission' => 'required',
                'password' => 'required|min:6|confirmed',
            ]
        );

        try {
            $user = new User();
            $user->name = $request->nama;
            $user->email = $request->email;
            $user->password = bcrypt($request->password);
            $user->save();

            $user->syncPermissions($request->permission);

            return redirect()
                ->route('user.index')
                ->with('success', "Pengguna {$user->name} telah ditambah");

            } catch (Exception $e) {
            return back()->withInput()->with('failed', 'User gagal ditambah');
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
        $user = User::find($id);
        $permissions = Permission::orderBy('id')->pluck('name', 'id');
        return view('admin.users.edit', compact('user', 'permissions'));
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
                'email' => 'required|email|unique:users',
                'permission' => 'required',
            ]
        );

        try {
            $user = User::find($id);
            $user->name = $request->nama;
            $user->email = $request->email;

            $user->save();

            $user->syncPermissions($request->permission);

            return redirect()
                ->route('user.index')
                ->with('success', "Pengguna {$user->name} telah diubah");

        } catch (Exception $e) {
            return back()->withInput()->with('failed', 'User gagal diubah');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $name = $user->name;
        $user->roles()->detach();
        $user->delete();

        return redirect()
            ->route('user.index')
            ->with('success', "Pengguna {$name} telah dihapus");
    }

    /**
     * Update user password.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updatePassword(Request $request, $id)
    {
        $request->validate(
            [
                'password' => 'min:6|confirmed',
            ]
        );

        $user = User::find($id);
        $user->password = bcrypt($request->password);
        $user->update();

        return redirect()
            ->route('user.index')
            ->with('success', "Pengguna {$user->name} password telah diubah");
    }
}
