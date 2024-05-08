<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('index', ['users' => $users]);
    }

    public function showUpdate($id)
    {
        $user = User::find($id);
        return view('users.update', ['user' => $user]);
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;

        if ($request->password) {
            $user->password = $request->password;
        }

        $user->save();

        return redirect()->route('index');
    }

    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();

        return redirect()->route('index');
    }
}
