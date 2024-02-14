<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function userPage(){
        if(Session::has('nev') or Session::has('admin')){
            $user = Auth::user();
            return view('/profile', compact("user"));
        }
        return view('/login');
    }

    public function userUpdate(Request $request){
        $id = Session::get('id');
        \Log::info($id);
        $cegnev = $request->cegnev;
        $cegszam = $request->cegszam;
        $update = DB::table('users')
            ->where('id', $id)
            ->update([
                'cegnev' => $cegnev,
                'cegszam' => $cegszam,
            ]);

        if ($update) {
            Session::put('nev', $cegnev);
            Session::put('cegszam', $cegszam);
            return redirect('/profile')->with('success', 'Fiók frissítve.');
        } else {
            return redirect('/profile')->with('error', 'Hiba történt a frissítés közben.');
        }
    }

    public function userUpdatePWD(Request $request){
        $id = Session::get('id');
        $user = User::where('id', Session::get('id'))->first();
        if ($user && Hash::check($request->jelszo, $user->jelszo)) {
            $ujJelszo = $request ->ujjelszo;
            $update = DB::table('users')
            ->where('id', $id)
            ->update([
                'jelszo' => Hash::make($ujJelszo),
            ]);
            if ($update) {
                Session::flush();
                return redirect('/login')->with('success', 'Jelszó frissítve.');
            } else {
                return redirect('/profile')->with('error', 'Hiba történt a frissítés közben.');
            }
        }else{
            return redirect('/profile')->with('error', 'Hibás jelszó.');
        }
    }

    public function updatePic(Request $request){
        $id = Session::get('id');
        $profilkep = $request-> kep;
        $update = DB::table('users')
            ->where('id', $id)
            ->update([
                'profilkep' => $profilkep,
            ]);
            if ($update) {
                Session::put('profilkep');
                return redirect('/profile')->with('success', 'Kép frissítve.');
            } else {
                return redirect('/profile')->with('error', 'Hiba történt a frissítés közben.');
            }
    }
    
}
