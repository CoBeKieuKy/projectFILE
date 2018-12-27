<?php
/**
 * Created by PhpStorm.
 * User: ad
 * Date: 12/13/2018
 * Time: 9:54 PM
 */

namespace App\Http\Controllers;

use Illuminate\HTTP\Request;
use Illuminate\Support\Facades\DB;



class manageController
{
    public function manage(Request $request) {
        if (($request->managebut) == 'user'&& session()->get('userright') == 1){
            $users = null;
            return view('manageuser')->with(['users' => $users]);
        }
        if (($request->managebut) == 'film'&& session()->get('userright') == 1){
            $films = null;
            return view('managefilm')->with(['films' => $films]);
        }
        $warn = 0;
        if(session()->get('userright') != 1){
            $warn = 1;
            return view('warn',['warn'=>$warn]);
        }
        return view('manage',['warn'=>$warn]);
    }
}