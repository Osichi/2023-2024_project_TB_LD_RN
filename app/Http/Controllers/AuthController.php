<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(){
        return view ('register');
    }
    public function registerPost(Request $request){
        $user = new User();

        $user->cegnev = $request->cegnev;
        $user->cegszam = $request->cegszam;
        $user->jelszo = Hash::make($request->jelszo);

        $user->save();
        return back()->with('success', 'Sikeres regisztráció!');
    }
}
