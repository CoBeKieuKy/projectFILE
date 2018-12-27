<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class updateFilm
{
    public function updatefilm(Request $request) {
        DB::table('phim')
            ->where('msphim', '=', $request->updatefilmbut)
            ->update([
                'tenphim' => $request->name,
                'poster' => $request->poster,
                'noidung' => $request->sum,
                'tag' => $request->gen,
                'dodai' => $request->len,
                'tap' => $request->eps,
                'ngaycongchieu' => $request->rel,
                'nsx' => $request->prd,
                'luuy' => $request->rat
            ]);
        return back();
    }
}
