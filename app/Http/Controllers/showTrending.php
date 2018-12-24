<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class showTrending
{
    public function show()
    {
        $trends = DB::table('phim')->where('xephang', '<', '4')->orderBy('xephang','asc')->get();
        return view('home', ['trends' => $trends]);
    }
}
