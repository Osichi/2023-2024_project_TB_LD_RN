<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{

    public function adminPage(){
        if(Session::has('nev')){
           return redirect('/')->with('alert', 'Nincs hozzáférésed ehhez!');
        }else{
                $users = User::all();
                $posts = DB::table('posts')->get();
                 return view('/admin', compact('users'), compact('posts') );
    
        }
    }
    
    public function deleteUser($id){
        $users = User::findOrFail($id);
        $users->delete();
        return redirect('/admin')->with('success', 'Felhasználó törölve!');
    }

   
}
