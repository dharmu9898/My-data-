<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $connection = 'mysql2';
        protected $table = 'events';
    
    function user()
    {
        return $this->belongsTo(User::class);
    }
   
}
