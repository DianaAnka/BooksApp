<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User_Rate extends Model
{
    //
    protected $fillable = ['user_id','book_id','rating'];
}
