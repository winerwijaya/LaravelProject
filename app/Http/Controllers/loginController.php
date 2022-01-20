<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    public static function index(){
        return view('login');
    }

    public static function login(Request $request){
        $data = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::Attempt($data)) {
            return redirect('user');
        }else{
            return redirect()->back()->with('message', 'Email atau Password Salah!');
        }
    }

    public function logout(){
        Auth::logout();
        return redirect('/login');
    }
}
