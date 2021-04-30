<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Channel extends Model
{
    //
    protected $fillable =[
       'cover',
       'title',
       'description',
       'slug',
       'hits'
    ];
}
