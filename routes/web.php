<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\RegisterRequest;
use Illuminate\Support\Facades\Auth;


// ---> Log in methods --->
Route::get('/', fn() => redirect('/login'));

Route::get('/login', fn() => view('/login'));

Route::post('/login',function (Request $request){
    $credit = $request->only('email','password');
    if (Auth::attempt($credit)){
        return view('wait');
    }
    return redirect('/login')->with('failure','Email or Password is incorrect');
});

// ---> register --->
Route::get('/register', fn() => view('/register'));

Route::post('register',function (RegisterRequest $request){
    User::create($request->validated());
    return redirect('/login')->with('success', 'your registration was successful!');
});
