<?php

namespace App\Http\Controllers;

use App\ESportCategory;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class ESportCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        if (\Auth::user()->can('manage-e-sport-category')) {
            # code...
            if ($request->ajax()) {
                # code...
                $esport_category = ESportCategory::select()->get();
                return DataTables::of($esport_category)
                ->addColumn('action', function($esport_category){
                    return view('datatables.action_modal',[
                        'row_id' => $esport_category->id,
                        'can_edit' => 'edit-e-sport-category',
                        'can_delete' => 'delete-e-sport-category'
                    ]);
                })
                ->rawColumns(['action'])
                ->make(true);
            }
            return view('e-sport-category.index');
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
        if (\Auth::user()->can('create-e-sport-category')) {
            # code...
            if ($request->id) {
                # code...
                $this->validate($request,[
                    'name' => 'required|unique:e_sport_categories,name'
                ]);
            }

            $name = $request->name;
            ESportCategory::updateOrCreate(
                [
                    'id' => $request->id
                ],
                [
                    'name' => $request->name
                ]
            );
            return response()->json(['success' => 'E-Sport Category saved Successfully']);
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
        if (\Auth::user()->can('edit-e-sport-category')) {
            # code...
            $esport_category = ESportCategory::find($id);
            return response()->json($esport_category);
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
        if (\Auth::user()->can('delete-e-sport-category')) {
            # code...
            ESportCategory::find($id)->delete();
            return response()->json(['success' => 'E-Sport Category deleted Successfully']);
        } else{
            return redirect()->back()->with('error', __('Permission denied'));
        }
    }
}
