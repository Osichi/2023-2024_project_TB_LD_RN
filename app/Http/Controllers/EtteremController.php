<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class EtteremController extends Controller
{
    public function etteremPage(){
        return view('ettermek');
    }
    public function feltoltesPage(){
        return view('hozzaadas');
    }
    public function feltoltes(Request $request){
        $id = Session::get('id');
        $nev= $request->nev;
        $telefonszam= $request->teloszam;
        $cim= $request-> cim;
        $kategoria= $request->kategoria;
        $kep= $request-> kep;
        $upload = DB::table('posts')
            ->insert([
                'cegid' => $id,
                'nev' => $nev,
                'telefonszam'=> $telefonszam,
                'cim'=> $cim,
                'kategoria'=> $kategoria,
                'kep'=> $kep,
            ]);

            if ($upload) {
                return redirect('/ettermek')->with('success', 'Sikeres feltöltés.');
            } else {
                return redirect('/feltoltes')->with('error', 'Hiba történt a feltöltés közben.');
            }

    }
}
