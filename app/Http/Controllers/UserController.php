<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function userPage(){
        if(Session::has('nev') or Session::has('admin')){
            $user = Auth::user();
            return view('/profile', compact("user"));
        }
        return view('/login');
    }
    
}
