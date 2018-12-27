<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class searchFilm2
{
    public function searchfilm2 (Request $request)
    {
        if (($request->managefilmbut) == 'searchfilmbut') {
            $search = strtolower($request->searchfilm);
            $films = DB::table('phim')->whereRaw('lower(tenphim) like (?)', ["%{$search}%"])->get();
            return view('managefilm', ['films' => $films]);
        }

        if((strpos(($request->managefilmbut),'update')) !== false){
            $update = (substr($request->managefilmbut, 6));
            $details = DB::table('phim')->where('msphim', '=', $update)->get();
            return view('updatefilm', ['details' => $details]);
        }

        if((strpos(($request->managefilmbut),'delete')) !== false){
            $delete = (substr($request->managefilmbut, 6));
            DB::table('phim')->where('msphim','=',$delete)->delete();
            $check =2;
            return view('info',['check'=>$check]);
        }
        return view('managefilm');
    }
}
