<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(Request $request) {
        $request->validate([
            'email' =>'required|email',
            'password' => 'required|min:8'
        ]);

        $credentials = $request->only('email', 'password');
        
        if (auth()->attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('index');
        }else{
            return redirect()->route('login')->with('error', 'Invalid Credentials');
        }
    }

    public function register(Request $request){

        if(User::where('email', $request->email)->first()) {
            return redirect()->back()->withErrors(['email' => 'O email já está em uso.'])->withInput();
        }
      
        $request->validate([
            'name' =>'required',
            'email' =>'required|email',
            'password' => 'required|min:8'
        ]);



        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' =>  Hash::make($request->password)
        ]);

        return redirect()->route('login');
    }
}
