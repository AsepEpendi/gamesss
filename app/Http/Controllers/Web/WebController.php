<?php

namespace App\Http\Controllers\Web;

use App\Channel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Schedule;
use App\ScheduleDetail;



class WebController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function matches(Request $request)
    {
        //
        $matches = Channel::get();
        // $date = date('Y-m-d', strtotime(now()));
        $schedule = Schedule::with('enemy_team', 'team_esport')->get();

        return view('web.page.matches', compact('matches', 'schedule'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function match($slug)
    {
        //
        $channels = Channel::where('slug', $slug);
        $channel = $channels->first();
        $hits = $channel->hits;
        $channels->update(['hits' => $hits + 1]);

        $schedule = Schedule::with('enemy_team', 'team_esport')->get();
        return view('web.page.match', compact('channel', 'schedule'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
