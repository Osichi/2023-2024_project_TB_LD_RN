<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{

    public function adminPage(){
        if(Session::has('nev') or Session::has('admin')){
            return redirect('/');
        }

        return view('/admin');
    }

    public function userList(){
        
        #return view("admin");
    }
}
