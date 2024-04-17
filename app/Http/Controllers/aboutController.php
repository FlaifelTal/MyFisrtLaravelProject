<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class aboutController extends Controller
{
 //create a method
 public function index(){
    $blogs = [
        [
            'title' => 'one',
            'body' => 'body',
            'status'=> 1
        ],
        [
            'title' => 'two',
            'body' => 'body',
            'status'=> 0

        ],
        [
            'title' => 'three',
            'body' => 'body',
            'status'=> 1

        ]
        ];
        return view('about',compact('blogs')); //if i make a folder(in views) and the aboutfile is in it   return view('about.newFileName'); 

    
 }}
