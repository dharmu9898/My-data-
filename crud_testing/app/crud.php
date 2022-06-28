<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class crud extends Model
{
    protected $fillable = ['first_name','last_name','email','class','roll'];
}
