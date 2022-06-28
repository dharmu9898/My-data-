<?php

namespace App;

use DB;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    // protected $fillable = ["name","quantity", "description"]; //to be inserted
    protected $guarded =[]; //to not be inserte
    protected $table = "products";

}

