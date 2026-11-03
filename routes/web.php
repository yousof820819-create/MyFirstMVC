<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\RegisterRequest;



// ---> Log in methods
Route::get('/', fn() => redirect('/login'));
Route::get('/login', fn() => view('/login'));

Route::post('/login',function (Request $request){
   $data = $request -> except('_token');
   return view('/wait2',['data'=>$data]);
});

// ---> register
Route::get('/register', fn() => view('/register'));

//Route::post('register',function(Request $request_show , RegisterRequest $request){
//    $data2 = $request_show->except('_token');
//    $data = $request->validate();
//    return view('wait',['data_show'=>$data_show]);
//});

Route::post('/register',function (RegisterRequest $request){
   $data = $request->validate();
   return view('/wait',['data'=>$data]);
});
