<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('home', function () {
    return "<h1>Home</h1>";
}) -> name('home');


Route::get('about', function () {
    return "<h1>About</h1>";
}) -> name('anout');

Route :: group(['prefix'=>'customer'],function(){// to not have customer in all of the routes we add prefix 
    Route :: get('/',function(){ 
        return "<h1>Customer list</h1>";
    });
    
    
    Route :: get('/create',function(){
        return "<h1>Customer create</h1>";
    });
    
    Route :: get('/show',function(){
        return "<h1>Customer show</h1>";
    });
});
