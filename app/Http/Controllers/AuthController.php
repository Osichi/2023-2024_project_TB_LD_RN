<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

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
        \Log::info('User successfully registered.');
        return redirect('/login')->with('success', 'Sikeres regisztráció!');
    }

    public function login(){
        return view('login');
    }

    public function loginPost(Request $request){
        

        $user = User::where('cegszam', $request->cegszam)->first();

        if ($user && Hash::check($request->jelszo, $user->jelszo)) {
            \Log::info('User successfully logged in.');
            $nev = $user->cegnev;
            Session::put('nev', $nev);
            return redirect('/')->with('success', 'Sikeres bejelentkezés');
        } else {
            \Log::info('Login attempt failed for user: ' . $request->cegszam . ' , pwd: ' . $request->jelszo);
            return back()->with('error', 'Megadott adatok helytelenek.');
        }
    }

    public function logout(){
        Session::flush();
        return redirect('/')->with('success', 'Sikeres kijelentkezés');
    }
}
