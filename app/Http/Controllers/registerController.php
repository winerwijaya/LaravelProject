<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class registerController extends Controller
{
    public static function index(){
        return view('register');
    }

    public static function regis(Request $request){
        $request->validate([
            'nama' => 'required|max:20',
            'username' => 'required|max:15|unique:users,username',
            'jenis_kelamin' => 'required',
            'umur' => 'required|numeric|gte:17',
            'phone' => 'required|min:8|max:14',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8|max:20'
        ]);

        $user = new User();
        $user->name = $request->nama;
        $user->username = $request->username;
        $user->gender =  $request->jenis_kelamin;
        $user->age = $request->umur;
        $user->phone = $request->phone;
        $user->email = $request->email;
        $user->password = password_hash($request->password, PASSWORD_DEFAULT);
        $user->role = 'Customer';
        
        $imagepath = 'images/defaultImage.png';
        $user->image = $imagepath;

        $user->save();

        return redirect()->back()->with('message', 'Register Berhasil!');
    }
}
