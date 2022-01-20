<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use phpDocumentor\Reflection\Types\Nullable;

class userController extends Controller
{
    public static function index(){
        return view('user');
    }

    public function cariJodoh($gender){
        $user = User::where('gender', '!=', $gender)->where('role', '!=', 'Admin')->get();
        
        return view('cariJodoh', ['user' => $user]);
    }

    public static function edit(){
        return view('editProfile');
    }

    public static function update(Request $request){
        
        $request->validate([
            'nama' => 'max:20|nullable',
            'umur' => 'numeric|gte:17|nullable',
            'phone' => 'min:8|max:14|nullable',
            'password' => 'min:8|max:20|nullable'
        ]);
        
        $user = User::find(Auth::User()->id);
        
        if($request->nama != null)
            $user->name = $request->nama;

        $image = $request->file('image');
        if($image != null){
            $imagename = $image->getClientOriginalName();
            
            Storage::putFileAs('public/images', $image, $imagename);
            $imagepath = 'images/'.$imagename;
            
            $user->image = $imagepath;
        }

        if($request->jenis_kelamin != null)
            $user->gender = $request->jenis_kelamin;

        if($request->umur != null)
            $user->age = $request->umur;

        if($request->phone != null)
            $user->phone = $request->phone;

        if($request->password != null)
            $user->password = password_hash($request->password, PASSWORD_DEFAULT);
        
        $user->save();
        return redirect()->back()->with('message', 'Update profil Berhasil!');

    }


    public static function manageUser(){
        $user = User::where('role', '=', 'Customer')->get();
        return view('manageUser', ['User' => $user]);
    }

    public function deleteUser($id){
        DB::delete('DELETE FROM users WHERE id = ?', [$id]);
        return redirect()->back();
    }

}
