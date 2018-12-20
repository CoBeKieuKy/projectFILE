<?php
/**
 * Created by PhpStorm.
 * User: ホアン・コン・タイン
 * Date: 27-Nov-18
 * Time: 8:55 PM
 */

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class HomeController extends BaseController
{
    public function showHome($name){
        return view('web')->with('name',$name);
    }
};

