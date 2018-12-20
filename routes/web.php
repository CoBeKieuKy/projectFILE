<?php

use Illuminate\Http\Request;
use App\nguoidung;
use App\phim;

/*****************LOGIN IN*******************************/

Route::post('/home', function(Request $request){
    $validator = Validator::make($request->all(),[
        'username' => 'required|min:6',
        'password' => 'required|min:6',
    ]);

    if ($validator->fails()) {
        return redirect('/home')
            ->withInput()
            ->withErrors($validator);

    }
    $nguoidungcu = nguoidung::where([['ten', '=', $request->username],['matkhau','=',$request->password]])->first();
    if ($nguoidungcu != null) {
       // session(['user' => $request->username]);
        return redirect('/home');
    } else {
        return redirect('/home')
            ->withInput()
            ->withErrors(array('message' => 'Your username or password was wrong!!! Try again :|'));
    }
});

/**********LOG OUT*****************
Route::post('/home', function(Request $request){
    session(['user' => null]);
    return redirect('/home');
});
*/

/******************SIGN UP*************************/

Route::post('home/signup', function(Request $request){
    $validator = Validator::make($request->all(),[
        'signup_username' => 'required|min:6',
        'signup_password' => 'required|min:6',
    ]);

    if ($validator->fails()) {
        return redirect('/home')
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
    } else {
        return redirect('/home')
            ->withInput()
            ->withErrors(array('message' => 'This username are being used.! Try another one.'));
    }
    return redirect('/home');
});

/*******************************************/

Route::get('/home', function(){
    return view('index');
});

Route::get('home/about', function(){
    return view('about');
});

Route::get('home/contact', function(){
    return view('contact');
});

Route::get('home/signup', function(){
    return view('signup');
});

Route::get('index', 'searchFilm@search');
Route::get('searchpage','searchFilm@search');