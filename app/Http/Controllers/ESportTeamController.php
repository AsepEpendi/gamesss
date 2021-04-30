<?php

namespace App\Http\Controllers;

use App\ESportTeam;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Yajra\DataTables\DataTables;

class ESportTeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        if (\Auth::user()->can('manage-e-sport-team')) {
            # code...
            if ($request->ajax()) {
                # code...
                $esport_team = ESportTeam::with('esport_category')->select();
                return DataTables::of($esport_team)
                ->addColumn('action', function($esport_team){
                    # code...
                    return view('datatables.action',[
                        'model' => $esport_team,
                        'form_url' => route('e-sport-team.destroy', $esport_team->id),
                        'edit_url' => route('e-sport-team.edit', $esport_team->id),
                        'can_edit' => 'edit-e-sport-team',
                        'can_delete' => 'delete-e-sport-team',
                        'confirm_message' => 'Apakah Anda Yakin ?',
                    ]);
                })
                ->editColumn('logo', function($esport_team){
                    # code...
                    $url = asset('storage/e-sport-team/' . $esport_team->logo);
                    return '<img src=" '.$url.' " border="0" width="60" class="img-rounded" align="center"/>';
                })
                ->rawColumns(['logo'])
                ->make(true);
            }
            return view('e-sport-team.index');
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
        if (\Auth::user()->can('create-e-sport-category')) {
            # code...
            return view('e-sport-team.create');
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
        if (\Auth::user()->can('create-e-sport-team')) {
            # code...
            $this->validate($request,[
                'esport_category_id' => 'required',
                'name' => 'required',
                'logo' => 'required'
            ]);

        // dd('cek');
            $esport_team = new ESportTeam();
            $esport_team->esport_category_id = $request->esport_category_id;
            $esport_team->name = $request->name;
            if ($request->file('logo')) {
                # code...
                $uploadfile = $request->file('logo');
                $filename = $uploadfile->hashName();
                $file = $uploadfile->store('e-sport-team', 'public');
                $esport_team->logo = $filename;
            }
            $esport_team->save();

            return redirect()->route('e-sport-team.index')->with('success', __('E-Sport Team Successfully created'));
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
        if (\Auth::user()->can('edit-e-sport-team')) {
            # code...
            $esport_team = ESportTeam::find($id);
            return view('e-sport-team.edit', compact('esport_team'));
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
        if (\Auth::user()->can('edit-e-sport-team')) {
            # code...
            $this->validate($request,[
                'esport_category_id' => 'required',
                'name' => 'required',
            ]);

            $esport_team = ESportTeam::find($id);
            $esport_team->esport_category_id = $request->esport_category_id;
            $esport_team->name = $request->name;
            if ($request->file('logo')) {
                # code...
                if ($esport_team->logo && file_exists(storage_path('app/public/e-sport-team/' . $esport_team->logo))) {
                    # code...
                    \Storage::delete(['public/e-sport-team/' . $esport_team->logo]);
                }
                $uploadfile = $request->file('logo');
                $filename = $uploadfile->hashName();
                $file = $uploadfile->store('e-sport-team', 'public');
                $esport_team->logo = $filename;
            }
            $esport_team->update();

            // dd($esport_team->logo);
            return redirect()->route('e-sport-team.index')->with('success', __('E-Sport Team Successfully Updated'));
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
        if (\Auth::user()->can('delete-e-sport-team')) {
            # code...
            $esportTeam = ESportTeam::find($id);
            if ($esportTeam->logo) {
                # code...
                $old_logo = $esportTeam->logo;
                $filePatch = public_path() . DIRECTORY_SEPARATOR . 'storage/' . DIRECTORY_SEPARATOR . $esportTeam->logo;
                try {
                    File::delete($filePatch);
                } catch (FileNotFoundException $e){

                }
            }
            $esportTeam->delete();

            return redirect()->route('e-sport-team.index')->with('success', __('E-Sport Team Successfully Deleted'));
        } else{
            return redirect()->back()->with('error', __('Permission denied'));
        }
    }
}
