<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Post extends Model
{
    //
    use Notifiable;
    protected $table = 'posts';
    protected $fillable = [
        'title',
        'user_id',
        'slug',
        'metadesc',
        'metadata',
        'metakey',
        'active',
        'status',
        'image',
        'content',
    ];

}
