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
        if(Session::has('admin')){
            $users = User::all();
                $posts = DB::table('posts')->get();
                 return view('/admin', compact('users'), compact('posts') );
          
        }else{
                
            return redirect('/')->with('alert', 'Nincs hozzáférésed ehhez!');
        }
    }
    
    public function deleteUser($id){
        if(Session::has('admin')){
            $users = User::findOrFail($id);
            $users->delete();
            return redirect('/admin')->with('success', 'Felhasználó törölve!');
        }else{
            return redirect("/");
        }
    }

   
}
