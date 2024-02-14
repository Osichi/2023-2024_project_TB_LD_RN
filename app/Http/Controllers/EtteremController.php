<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EtteremController extends Controller
{
    public function etteremPage(){
        return view('ettermek');
    }
}
