<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// create a controller with only one methoddddd  / single use 
// php artisan make:controller singleActionController --invokable
class singleActionController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        //
        return "<h1>single use</h1>";

    }
}
