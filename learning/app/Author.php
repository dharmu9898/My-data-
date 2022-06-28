<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $guarded =[]; //to not be inserte
    public $timestamps =false;
}
