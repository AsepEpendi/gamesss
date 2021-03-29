<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    //
    protected $table = 'banners';

    protected $fillable = [
        'name',
        'img',
        'alt_text',
        'link',
        'text_link',
        'short_text',
        'highlight_text',
        'status',
        'urutan',
        'description',
    ];
}
