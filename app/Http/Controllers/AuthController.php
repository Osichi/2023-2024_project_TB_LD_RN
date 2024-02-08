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
        if(Session::has('nev') or Session::has('admin')){
            return redirect('/');
        }

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
        if(Session::has('nev') or Session::has('admin')){
            return redirect('/');
        }

        return view('login');
    }

    public function loginPost(Request $request){
        
        

        $user = User::where('cegszam', $request->cegszam)->first();

        if ($user && Hash::check($request->jelszo, $user->jelszo)) {
            $nev = $user->cegnev;
            $szam = $user->cegszam;
            $jelszo= $user->jelszo;
            \Log::info($nev);
            if($nev == "admin"){
                $admin = $nev;
                Session::put('admin', $admin);
                \Log::info("Sikeres admin login");
                return redirect('/')->with('success', 'Sikeres admin bejelentkezés');
            }else{
            \Log::info('User successfully logged in.');
            Session::put('nev', $nev);
            Session::put('cegszam', $szam);
            Session::put('jelszo', $jelszo);
            return redirect('/')->with('success', 'Sikeres bejelentkezés');
            } 
        } else {
            \Log::info('sikertelen login: ' . $request->cegszam . ' , pwd: ' . $request->jelszo);
            return back()->with('error', 'Megadott adatok helytelenek.');
        }
    }

    public function logout(){
        Session::flush();
        return redirect('/')->with('success', 'Sikeres kijelentkezés');
    }
}
