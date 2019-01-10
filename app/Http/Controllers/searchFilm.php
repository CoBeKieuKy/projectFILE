<?php

namespace App\Http\Controllers;

use Illuminate\HTTP\Request;
use Illuminate\Support\Facades\DB;

class searchFilm
{
    public function searchfilm(Request $request)
    {
        if(($request->searchpagebut) == 'searchbut') {
            $search = strtolower($request->search);
            $posts = DB::table('phim')->whereRaw('lower(tenphim) like (?)', ["%{$search}%"])
                ->orWhereRaw('lower(tag) like (?)', ["%{$search}%"])->get();
            return view('searchpage', ['posts' => $posts]);
        }
        if((strpos(($request->searchpagebut),'showmorebut')) !== false) {
            $showmore = (substr($request->searchpagebut, 11));
            $details = DB::table('phim')->leftJoin('nhanxet','phim.msphim','=','nhanxet.msphim')
                ->leftJoin('nguoidung','nguoidung.msnd','=','nhanxet.msnd')
                ->where('phim.msphim', '=', $showmore)->get();
            session(['msphim4comment'=> $showmore]);
            return view('detail', ['details' => $details]);
        }
        if((strpos(($request->addfilmbut),'addbut')) !== false) {
            $check = 1;
            $showmore2 = (substr($request->addfilmbut, 6));
            $phimcu = DB::table('danhsach')->where([['msphim', '=', $showmore2], ['msnd', '=', session()->get('uservalue')]])->get();
            if (count($phimcu) == 0) {
                DB::table('danhsach')->insert(['msnd' => session()->get('uservalue'), 'msphim' => $showmore2]);
                return view('info', ['info' => $phimcu], ['check' => $check]);
            }
            return view('info', ['info' => $phimcu], ['check' => $check]);
        }

        if(($request->addcommentbut)=='addcomment') {
            $check = 3;
            $now= date("Y-m-d H:i:s");
            DB::table('nhanxet')->insert
            (['msnd' => session()->get('uservalue'), 'msphim' => session()->get('msphim4comment'), 'nhanxet' => $request->comment,'ngaynx'=>$now]);
            return view('info', ['check' => $check]);
        }
    }
}
