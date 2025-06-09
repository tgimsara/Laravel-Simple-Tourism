<?php

namespace App\Http\Controllers;
use App\Models\Photo;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class photoController extends Controller
{
    public function store(Request $request){
        // if ($request->hasFile('exampleFormControlFile1')) {
        // $image = $request->file('exampleFormControlFile1');

        // // Store the file in `storage/app/public/photos` and get its path
        // $path = $image->store('photos', 'public'); // 'public' disk refers to storage/app/public
        
        photo::create([
                "user_id" => auth()->user()->id,
                "exampleFormControlFile1" => $request->exampleFormControlFile1
        ]);
            
        //}
        // delays PHP execution by 2 seconds (blocks server!)
        sleep(2);
         
             
    }
    
}
