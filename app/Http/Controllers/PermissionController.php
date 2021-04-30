<?php

namespace App\Http\Controllers;

use App\Permission;
use App\Role;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        if (\Auth::user()->can('manage-permissions')) {
            # code...
            if ($request->ajax()){
                $permission = Permission::with('module')->select();
                return DataTables::of($permission)
                ->addColumn('action', function ($permission){
                    return view('datatables.nondelete', [
                        'model' => $permission,
                        'edit_url' => route('permission.edit', $permission->id),
                        'can_edit' => 'edit-permissions'
                    ]);
                })
                ->make(true);
            }
            return view('permission.index');
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
    public function store(Request $request, $id)
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
        if (\Auth::user()->can('edit-permissions')) {
            # code...
            $permission = Permission::find($id);
            return view('permission.edit', compact('permission'));
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
        $this->validate($request, [
            'display_name' => 'required',
            'description' => 'required'
        ]);

        $permission = Permission::find($id);
        $permission->display_name = $request->display_name;
        $permission->description = $request->description;
        $permission->update();

        return redirect()->route('permission.index')->with('success', __('Permission Berhasil diupdate'));
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
    public function attachPermission(Request $request, $role_id)
    {
        # code...
        $role = Role::find($role_id);
        $role->attachPermission($request->permission);
    }

    //
    public function dettachPermission(Request $request, $role_id)
    {
        # code...
        $role = Role::find($role_id);
        $role->detachPermission($request->permission);
    }
}
