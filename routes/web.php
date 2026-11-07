<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\RegisterRequest;
use Illuminate\Support\Facades\Auth;


//--------------------->>>   Login    --------------------->>>
Route::get('/', fn() => redirect('/login'));

Route::get('/login', fn() => view('/login'));

Route::post('/login',function (Request $request){
    $admin_email = config('auth.admin_name');
    $admin_password = config('auth.admin_password');

    if ($admin_email && $admin_password && $request->email == $admin_email && $request->password == $admin_password) {
        $request->session()->put('is_admin', true);
        return redirect('/admin');
    }

    $credit = $request->only('email','password');
    if (Auth::attempt($credit)){
        return redirect('/home');
    }
    return redirect('/login')->with('failure','Email or Password is incorrect');
});


//--------------------->>>   register    --------------------->>>
Route::get('/register', fn() => view('/register'));


Route::post('register',function (RegisterRequest $request){
    User::create($request->validated());
    return redirect('/login')->with('success', 'your registration was successful!');
});


//--------------------->>>   home    --------------------->>>

//
//Route::get('/home',function (Request $request){
//    view('/home')->with('user',$request);
//});
Route::get('/home', function(){
    return view('home', ['user_information' => Auth::user()]);
});


//--------------------->>>   admin    --------------------->>>
//Route::get('/admin', function(){
//    return view('admin', ['user_information' => Auth::user()]);
//});


Route::get('/admin',function(){
   if (!session('is_admin')){
       return redirect('/login');
   }
   return view('admin',['admin_name' => config('auth.admin_name'),
       'admin_password' => config('auth.admin_password'),
       'all_users' => User::all()
   ]);
});


//--------------------->>>   edit    --------------------->>>

Route::get('edit/{id}',function($id){
//    return view('edit');
    if (!session('is_admin')){
        return redirect('/login');
    }
    $user = User::find($id);
    return view('edit',['edit_user' => $user]);
});



//--------------------->>>   delete    --------------------->>>
