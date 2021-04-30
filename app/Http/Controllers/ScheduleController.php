<?php

namespace App\Http\Controllers;

use App\Channel;
use App\ESportTeam;
use App\Schedule;
use App\ScheduleDetail;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;


class ScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        if (\Auth::user()->can('manage-schedule')) {
            # code...
            if ($request->ajax()) {
                # code...
                $schedule = Schedule::select();
                return DataTables::of($schedule)
                ->addColumn('action', function($schedule){
                    # code...
                    return view('datatables.action',[
                        'model' => $schedule,
                        'form_url' => route('schedule.destroy', $schedule->id),
                        'edit_url' => route('schedule.edit', $schedule->id),
                        'can_edit' => 'edit-schedule',
                        'can_delete' => 'delete-schedule',
                        'confirm_message' => 'Apakah Anda Yakin ?',
                    ]);
                })
                ->editColumn('cover', function($schedule){
                    # code...
                    $url = asset('storage/schedule/' . $schedule->cover);
                    return '<img src=" '.$url.' " border="0" width="60" class="img-rounded" align="center"/>';
                })
                ->editColumn('schedule_date', function($schedule){
                    # code...
                    return convert_tanggal($schedule->schedule_date);
                })
                ->rawColumns(['cover'])
                ->make(true);
            }
            return view('schedule.index');
        } else{
            return redirect()->back()->with('error', __('Permission denied'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        if (\Auth::user()->can('create-schedule')) {
            # code...
            $months = $this->getMonths();
            $channel = Channel::get()->pluck('title', 'id');
            return view('schedule.create', compact('months', 'channel'));
        } else{
            return redirect()->back()->with('error', __('Permission denied'));
        }
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
        if (\Auth::user()->can('create-schedule')) {
            # code...
            $this->validate($request,[
                'cover' => 'required',
                'description' => 'required',
                'hari' => 'required|digits:2|numeric',
                'bulan' => 'required|digits:2|numeric',
                'tahun' => 'required|digits:4|numeric',
                'jam' => 'required|digits:2|numeric',
                'menit' => 'required|digits:2|numeric',
            ]);

            $hari = $request->hari;
            $bulan = $request->bulan;
            $tahun = $request->tahun;
            $jam = $request->jam;
            $menit = $request->menit;
            $detik = '00';
            $tz = 'Asia/Jakarta';

            $schedule_date = Carbon::create($tahun, $bulan, $hari, $jam, $menit, $detik, $tz);

            $schedule = new Schedule();
            if ($request->file('cover')) {
                $uploadfile = $request->file('cover');
                $filename = $uploadfile->hashName();
                $file = $uploadfile->store('schedule', 'public');
                $schedule->cover = $filename;
            }
            $team_home = ESportTeam::find($request->team_esport_id);
            $team_away = ESportTeam::find($request->enemy_team_id);
            $slug = \Str::slug($team_home->name, '-').'-vs-'. \Str::slug($team_away->name, '-').'-'. generateRandomString();
            // dd($team_home->name);
            $schedule->schedule_date = $schedule_date;
            $schedule->description = $request->description;
            $schedule->enemy_team_id = $request->enemy_team_id;
            $schedule->team_esport_id = $request->team_esport_id;
            $schedule->slug = $slug;
            $schedule->meta_desc = $request->meta_desc;
            $schedule->save();

            $channel_id = $request->channel_id;
            foreach ($channel_id as $row => $key){
                $detailSchedule = new ScheduleDetail();
                $detailSchedule->schedule_id = $schedule->id;
                $detailSchedule->channel_id = $request->channel_id[$row];
                $detailSchedule->save();
            }

            return redirect()->route('schedule.index')->with('success', __('Schedule Successfully Created'));
        } else{
            return redirect()->back()->with('error', __('Permission denied'));
        }
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
        if (\Auth::user()->can('edit-schedule')) {
            # code...
            $months = $this->getMonths();
            $schedule = Schedule::find($id);
            $channel = Channel::get()->pluck('title', 'id');
            return view('schedule.edit', compact('months', 'schedule', 'channel'));
        } else{
            return redirect()->back()->with('error', __('Permission denied'));
        }
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
        if (\Auth::user()->can('edit-schedule')) {
            # code...
            $this->validate($request,[
                'description' => 'required',
                'hari' => 'required|digits:2|numeric',
                'bulan' => 'required|digits:2|numeric',
                'tahun' => 'required|digits:4|numeric',
                'jam' => 'required|digits:2|numeric',
                'menit' => 'required|digits:2|numeric',
            ]);

            $hari = $request->hari;
            $bulan = $request->bulan;
            $tahun = $request->tahun;
            $jam  = $request->jam;
            $menit = $request->menit;
            $detik = '00';
            $tz = 'Asia/Jakarta';

            $schedule_date = Carbon::create($tahun, $bulan, $hari, $jam, $menit, $detik, $tz);
            $schedule = Schedule::find($id);
            if ($request->file('cover')){
                if ($schedule->cover && file_exists(storage_path('app/public/schedule/' . $schedule->cover))) {
                    \Storage::delete('public/schedule/' . $schedule->cover);
                }
                $uploadfile = $request->file('cover');
                $filename = $uploadfile->hashName();
                $file = $uploadfile->store('schedule', 'public');
                $schedule->cover = $filename;
            }
            $schedule->schedule_date = $schedule_date;
            $schedule->description = $request->description;
            $schedule->enemy_team_id = $request->enemy_team_id;
            $schedule->team_esport_id = $request->team_esport_id;
            $schedule->meta_desc = $request->meta_desc;
            $schedule->update();

            $detailSchedule = ScheduleDetail::find($id);
            $detailSchedule->channel_id = $request->channel_id;
            // $detailSchedule->schedule_id = $schedule->id;
            $detailSchedule->with(['schedule_id'])->find($id)
            ->schedule_id()
            ->sync($request->schedule_id);
            $detailSchedule->update();
            dd($request);

            return redirect()->route('schedule.index')->with('success', __('Schedule Successfully Updated'));
        } else{
            return redirect()->back()->with('error', __('Permission denied'));
        }
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

    //
    public function getMonths()
    {
        return $months = array('01' => 'Jan.', '02' => 'Feb.', '03' => 'Mar.', '04' => 'Apr.', '05' => 'May', '06' => 'Jun.', '07' => 'Jul.', '08' => 'Aug.', '09' => 'Sep.', '10' => 'Oct.', '11' => 'Nov.', '12' => 'Dec.');
    }
}
