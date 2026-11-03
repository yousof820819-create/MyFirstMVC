<?php

namespace App\Models;

 use Illuminate\Database\Eloquent\Model;
 use Illuminate\Database\Eloquent\SoftDeletes;

 class User extends Model{
     use SoftDeletes;

     protected $table = 'users';
     protected $fillable = ['name','last_name','phone_number', 'email', 'password'];
     protected $hidden = ['password'];
     protected $casts = ['password' => 'hashed'];

     public static function my_rules($id = null){
         return [
             'name' => 'required|max:191',
             'last_name' => 'required|max:191',
             'phone_number' => 'required|max:191|digits:11|unique:users,phone_number,'.$id,
             'email' => 'required|max:191|email|unique',
             'password' => 'required|max:191|hashed',
         ];
     }
     public static function var_print($x)
     {
         echo "<pre>";
         print_r($x);
         echo "</pre>";
     }
 }

