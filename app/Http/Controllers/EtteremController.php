<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class EtteremController extends Controller
{
    public function etteremPage(Request $request){
        if(request('search')){
            $posts = DB::select('SELECT * FROM posts INNER JOIN users ON users.id=posts.cegid WHERE nev LIKE "%' . request('search') . '%"');
        }else{
            $posts=DB::select('SELECT * FROM users INNER JOIN posts ON users.id=posts.cegid;');
            //$posts = DB::table('posts')->get();
        }
        //$valami = DB::select('SELECT * FROM users INNER JOIN posts ON users.id=posts.cegid;');
        return view('ettermek') -> with('posts', $posts);
    }
    public function feltoltesPage(){
        if(Session::has('nev')){
            return view('hozzaadas');

        }else{
            return redirect('ettermek');
        }
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
