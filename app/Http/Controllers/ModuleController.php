<?php

namespace App\Http\Controllers;

use App\Module;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;


class ModuleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        if ($request->ajax()){
            $module = Module::select();
            return DataTables::of($module)
            ->addColumn('action', function ($module){
                return view('datatables.nondelete', [
                    'model' => $module,
                    'edit_url' => route('module.edit', $module->id),
                ]);
            })
            ->make(true);
        }
        return view('module.index');
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
        $module = Module::find($id);
        return view('module.edit', compact('module'));
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
        $this->validate($request, [
            'name' => 'required|unique:modules,name,' . $id
        ]);
        $module = Module::find($id);
        $module->name = $request->name;
        $module->update();

        return redirect()->route('module.index')->with('success', __('Module Berhasil diupdate'));
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
