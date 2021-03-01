<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PermissionRole extends Model
{
    //
    protected $table = 'permission_role';

    public function permission()
    {
        # code...
        return $this->belongsTo('App\Permission');
    }
}
