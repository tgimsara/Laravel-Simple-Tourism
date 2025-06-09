<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class photo extends Model
{
    protected $fillable = [
        'user_id', 
        'exampleFormControlFile1' // <-- also add this if you're saving it.
    ];
}
