<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\User;

// ---> Log in methods
Route::get('/', fn() => redirect('/login'));
Route::get('/login', fn() => view('/login'));

Route::post('/login',function (Request $request){
   $data = $request -> except('_token');
   return view('/wait2',['data'=>$data]);
});


Route::get('/register', fn() => view('/register'));

Route::post('register',function(Request $request){
    $data = $request->except('_token');
    return view('wait',['data'=>$data]);
});
