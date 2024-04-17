<?php

use App\Http\Controllers\aboutController;
use App\Http\Controllers\blogController;
use App\Http\Controllers\formController;
use App\Http\Controllers\galleryController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\shopController;
use App\Http\Controllers\singleActionController;
use App\Http\Controllers\submitController;
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

//controller for home  (better practice)
Route::get('home',[homeController::class,'index'] )->name('home');
//  { 
//     $pass = 'passed data'; //var name and in compact has to be the same 
//     $hello = 'hi';
//     //pass and render data
//     // return view('home',['pass'=>$pass]); //first method
//     return view('home',compact('pass','hello'));  //second method 
//     // return view('home');
// })->name('home');
//return view 
//good practice pass what u did with the controller 
// pass an array -> mention the class and specify the method/fun 
// mention class by starting with doing homeController and then a use will be made then cont 
Route::get('about',[aboutController::class,'index'])->name('about');
//  {
    //pass array
    //not a good way of coding (bad practice) using controllers is so much better
    // $blogs = [
    //     [
    //         'title' => 'one',
    //         'body' => 'body',
    //         'status'=> 1
    //     ],
    //     [
    //         'title' => 'two',
    //         'body' => 'body',
    //         'status'=> 0

    //     ],
    //     [
    //         'title' => 'three',
    //         'body' => 'body',
    //         'status'=> 1

    //     ]
    //     ];
    // return view('about',compact('blogs')); //if i make a folder(in views) and the aboutfile is in it   return view('about.newFileName'); 
// })->name('about');

Route::group(['prefix' => 'gallery'], function () { // to not have gallery in all of the routes we add prefix 
    Route::get('/',[galleryController::class,'index'] )->name('gallery');
    // {
    //     return view('gallery');
    // })->name('gallery');

    Route::get('/shop',[shopController::class,'index'] )->name('shop');
    // {
    //     return "<h1>Gallery shop</h1>";
    // })->name('shop');

    Route::get('/show',[shopController::class,'index'])->name('show');
    // {
    //     return "<h1>Gallery Showroom</h1>";
    // })->name('show');
});

// Route methods 
// Get -Request a resource 
// POST - create a resource 
// Route::post('home', function () {});
// Put - update a resource 
// Route::put('home', function () {});
// Patch - modify a resource
// Route::patch('home', function () {});
// Delete - delete a resource
// Route::delete('home', function () {});
//resource controller/ creates crud operations 
Route::resource('blog', blogController::class);
Route::get('new',singleActionController::class);

Route::get('form',formController::class);
Route::post('form', [submitController::class,'submit'])->name('form.submit');

//at the end of the routes always 
// fallback route
Route::fallback(function () {
    return "<h1>Route doesn't exist</h1>";
});
