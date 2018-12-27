<?php

namespace App\Http\Controllers;

use Illuminate\HTTP\Request;
use Illuminate\Support\Facades\DB;

class searchUser
{
    public function searchuser(Request $request) {
        if ($request->manageuserpagebut == 'searchuserbut') {
            $search = $request->searchuser;
            $users = DB::table('nguoidung')->where('ten', 'LIKE', '%' . $search . '%')->get();
            return view('manageuser', ['users' => $users]);
        }
        elseif ((strpos(($request->manageuserpagebut),'ban')) !== false) {
            $usercode = (substr($request->manageuserpagebut, 3));
            echo $usercode;
            DB::table('nguoidung')->where('msnd', '=', $usercode)->delete();
            return back();
        }
        else
            return view('managefilm');
    }
}
