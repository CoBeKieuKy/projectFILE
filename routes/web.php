<?php

use Illuminate\Http\Request;
use App\nguoidung;
use App\phim;

/*****************LOGIN IN*******************************/

Route::post('home/login', function(Request $request){
    $validator = Validator::make($request->all(),[
        'username' => 'required|min:6',
        'password' => 'required|min:6',
    ]);

    if ($validator->fails()) {
        return redirect('home/login')
            ->withInput()
            ->withErrors($validator);

    }
    $nguoidungcu = nguoidung::where([['ten', '=', $request->username],['matkhau','=',$request->password]])->first();
    if ($nguoidungcu != null) {

        session(['uservalue'=> $nguoidungcu->msnd]);
        session(['username'=>$nguoidungcu->ten]);
        session(['userright'=>$nguoidungcu->vaitro]);

        return redirect('home');
    } else {
        return redirect('home/login')
            ->withInput()
            ->withErrors(array('message' => 'Your username or password was wrong!!! Try again :|'));
    }
});

/**********LOG OUT*********************************/
Route::get('home/logout', function(){
        session()->flush();
        return redirect ('home');
});

/******************SIGN UP*************************/

Route::post('home/signup', function(Request $request){
    $validator = Validator::make($request->all(),[
        'signup_username' => 'required|min:6',
        'signup_password' => 'required|min:6',
    ]);

    if ($validator->fails()) {
        return redirect('/home/signup')
            ->withInput()
            ->withErrors($validator);
    }

    $nguoidungcu = nguoidung::where('ten', '=', $request->signup_username)->first();
    if ($nguoidungcu == null) {
        $nguoidungmoi = new nguoidung;
        $nguoidungmoi->ten = $request->signup_username;
        $nguoidungmoi->matkhau = $request->signup_password;
        $nguoidungmoi->vaitro = 0;
        $nguoidungmoi->save();
        $nguoidungmoi= nguoidung::where([['ten', '=', $request->signup_username],['matkhau','=',$request->signup_password]])->first();

        session(['uservalue'=> $nguoidungmoi->msnd]);
        session(['username'=>$nguoidungmoi->ten]);
        return redirect('home');

    } else {
        return redirect('/home/signup')
            ->withInput()
            ->withErrors(array('message' => 'This username are being used.! Try another one.'));
    }
    return redirect('/home');
});

/*******************************************/

Route::get('home/list','seeList@see');

Route::get('/home','showTrending@show');

Route::get('home/about', function(){
    return view('about');
});

Route::get('home/contact', function(){
    return view('contact');
});

Route::get('home/signup', function(){
    return view('signup');
});

Route::get('home/login', function(){
    return view('login');
});

Route::get('home/searchpage','searchFilm@searchfilm');

Route::get('home/manageuser','searchUser@searchuser');

Route::get('home/managefilm','searchFilm2@searchfilm2');

Route::get('home/manage','manageController@manage');

Route::get('home/updatefilm','updateFilm@updatefilm');

Route::post('home/detail','searchFilm@searchfilm');




