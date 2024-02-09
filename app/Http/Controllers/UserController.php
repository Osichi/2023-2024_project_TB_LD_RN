<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
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

    public function userUpdate(Request $request, string $id){
        $user = User::findOrFail($id);
        $user-> cegnev = $request->get('cegnev');
        $user-> cegszam = $request->get('cegszam');
        $user-> jelszo = $request->get('jelszo');
        $user->save();
        return redirect('/profile')-> with('success', 'Fiók frissítve');
    }
    
}
