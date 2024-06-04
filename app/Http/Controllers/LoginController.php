<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class LoginController extends Controller
{
    public function login(){
        return view('buttonlogin');
    }

    public function login_proses(Request $request){
        $request->validate([
            'email'     => 'required',
            'password'  => 'required',
        ]);

         $data = [
            'email' =>  $request->email,
            'password' => $request->password,
        ]; 

        //
           $a= Hash::make($request->password);
        //   dd($a);

        
        if (Auth::attempt($data)) {
            return redirect()->route('aplikasi');
        } else {
            return redirect()->back();
        }

    }
}
