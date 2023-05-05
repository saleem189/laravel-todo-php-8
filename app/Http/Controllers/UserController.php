<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller{

public function index(){
    
    $data = [
        'name' => 'saleem',
        'email' => 'saleem@gmail.com',  
        'password' => bcrypt('password'),
         ];
  
    //   User::create($data);
 
    return view('home');
}
}
