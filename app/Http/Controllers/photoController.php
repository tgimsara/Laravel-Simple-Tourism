<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class photoController extends Controller
{
    public function store(Request $request){
        photo::create([
                "user_id" => auth()->user()->id
        ]);
            
        
            
    }
}
