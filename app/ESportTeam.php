<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ESportTeam extends Model
{
    //
    protected $fillable = [
        'esport_category_id',
        'name',
        'logo'
    ];

    public function esport_category()
    {
        # code...
        return $this->belongsTo('App\ESportCategory', 'esport_category_id');
    }
}
