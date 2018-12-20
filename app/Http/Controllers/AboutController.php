<?php
/**
 * Created by PhpStorm.
 * User: ホアン・コン・タイン
 * Date: 27-Nov-18
 * Time: 9:15 PM
 */

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class AboutController extends BaseController
{
    public function showSubject($Subject){
        return "Subject la $Subject";
    }
    public function showAbout(){
        return 'show about';
    }
};