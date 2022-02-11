<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class APIController extends Controller
{
    function JSONreturn(){

        return response()->json([
            'asd' => 'dsa',
            'fdds' => 'fdgdfg',
        ]);  
    }
    
}
