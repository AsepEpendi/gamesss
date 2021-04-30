<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ScheduleDetail extends Model
{
    //
    protected $fillable = [
        'channel_id',
        'schedule_id',
    ];

    public function channel()
    {
        # code...
        return $this->belongsTo('App\Channel', 'channel_id');
    }

    public function schedule()
    {
        # code...
        return $this->belongsTo('App\Schedule', 'schedule_id');
    }
}
