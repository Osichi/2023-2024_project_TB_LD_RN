<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{

    public function adminPage(){
        if(Session::has('nev')){
           return redirect('/')->with('alert', 'Nincs hozzáférésed ehhez!');
        }else{
                $users = User::all();
                 return view('/admin', compact('users') );
    
        }
    }
    
    public function deleteUser($id){
        $users = User::findOrFail($id);
        $users->delete();
        return redirect('/admin')->with('success', 'Felhasználó törölve!');
    }

   
}
