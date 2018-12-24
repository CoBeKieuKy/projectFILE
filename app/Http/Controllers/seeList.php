<?php

namespace App\Http\Controllers;

use App\nguoidung;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class seeList
{
    public function see(){
        $list=DB::table('danhsach AS ds')
                    ->leftJoin('phim AS p','ds.msphim','=','p.msphim')
                    ->where('ds.msnd','=',session()->get('uservalue'))
                    ->get();
        return view('list',['list'=>$list]);
    }
}
