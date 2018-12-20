<?php

namespace App\Http\Controllers;

use Illuminate\HTTP\Request;
use Illuminate\Support\Facades\DB;

class searchFilm
{
    public function search(Request $request)
    {
        if(($request->searchpagebut) == 'searchbut') {
            //echo $request->searchpagebut;
            $search = strtolower($request->search);
            $posts = DB::table('phim')->whereRaw('lower(tenphim) like (?)', ["%{$search}%"])->get();
            return view('searchpage', ['posts' => $posts]);
        }
        //if (is_int($request->searchpagebut) === true) {
        if((strpos(($request->searchpagebut),'showmorebut')) !== false) {
            $showmore = (substr($request->searchpagebut, 11));
            $details = DB::table('phim')->where('msphim', '=', $showmore)->get();
            return view('detail', ['details' => $details]);
        }

    }
}
