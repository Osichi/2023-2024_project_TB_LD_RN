<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class EtteremController extends Controller
{
    public function etteremPage(){
        $posts = DB::table('posts')->get();
        return view('ettermek', compact('posts'));
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
        $leiras=$request->leiras;
        $weboldal=$request->weboldal;
        $upload = DB::table('posts')
            ->insert([
                'cegid' => $id,
                'nev' => $nev,
                'telefonszam'=> $telefonszam,
                'cim'=> $cim,
                'kategoria'=> $kategoria,
                'leiras'=>$leiras,
                'kep'=> $kep,
                'weboldal'=>$weboldal
            ]);

                if ($upload) {
                    return redirect('/ettermek')->with('success', 'Sikeres feltöltés.');
                } else {
                    return redirect('/feltoltes')->with('error', 'Hiba történt a feltöltés közben.');
                }

    }

    public function deleteLocation($id){
        $posts = Post::findOrFail($id);
        $posts->delete();
        return back()->with('success', 'Helyszín törölve!');
    }
}
