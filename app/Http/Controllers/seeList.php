<?php

namespace App\Http\Controllers;

use App\nguoidung;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class seeList
{
    public function see(Request $request){
        if((strpos(($request->submitbut),'submit')) !== false) {
            $showmore3 = (substr($request->submitbut, 6));
            $userscore = $request->score;
            $userfilmstatus = $request->status;
            if ($userfilmstatus != 0) {
                DB::table('danhsach')
                    ->where([['msphim', '=', $showmore3], ['msnd', '=', session()->get('uservalue')]])
                    ->update([
                        'trangthai' => $request->status
                    ]);
            }
            if ($userscore != 0) {
                DB::table('danhsach')
                    ->where([['msphim', '=', $showmore3], ['msnd', '=', session()->get('uservalue')]])
                    ->update([
                        'diemnguoidung' => $request->score
                    ]);
            }
        }

        $list=DB::table('danhsach AS ds')
                    ->leftJoin('phim AS p','ds.msphim','=','p.msphim')
                    ->where('ds.msnd','=',session()->get('uservalue'))
                    ->get();
        return view('list',['list'=>$list]);
    }
}
