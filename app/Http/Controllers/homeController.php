<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mockery\Matcher\Type;

// it extends the main contrller
class homeController extends Controller
{
    //create a method
 public function index(){
    $pass = 'passed data'; //var name and in compact has to be the same 
        $hello = 'hi';
       
        return view('home',compact('pass','hello'));  //second method 

    
 }
}


// to create a controller use this command on the project terminal ( php artisan make:controller homeController )