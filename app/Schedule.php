<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    //
    protected $fillable = [
        'enemy_team_id',
        'team_esport_id',
        'cover',
        'schedule_date',
        'description'
    ];

    public function enemy_team()
    {
        return $this->belongsTo('App\ESportTeam', 'enemy_team_id');
    }

    public function team_esport()
    {
        return $this->belongsTo('App\ESportTeam', 'team_esport_id');
    }

    public function schedule_detail()
    {
        # code...
        return $this->hasMany('App\ScheduleDetail');
    }
}
