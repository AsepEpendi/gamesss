<?php

namespace App\Http\Controllers;

use App\Module;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use App\Role;



class RoleController extends Controller
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
            $role = Role::with([
                'permission_role' => function ($sql){
                    $sql->with('permission');
                }
            ]);
            return DataTables::of($role)
                ->addColumn('action', function ($role){
                    return view('datatables.nondelete', [
                        'edit_url' => route('role.edit', $role->id),
                    ]);
                })
                ->editColumn('permission_role', function ($role) {
                    $permisson_name = '';
                    foreach ($role->permission_role as $row) {
                        $permisson_name .= ' ' . '<span class="badge badge-primary">' .
                        $row->permission->display_name . '</span>';
                    }
                    return $permisson_name;
                })
                ->rawColumns(['permission_role', 'action'])
            ->make(true);
        }
        return view('role.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('role.create');
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
        $module = Module::with([
            'permission'
        ])
            ->whereHas('permission')
            ->get();
        $role = Role::find($id);
        return view('role.edit', compact('role', 'module'));
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
        $this->validate($request,[
            'name' => 'required|unique:roles,name,' . $id,
            'display_name' => 'required',
            'description' => 'required'
        ]);

        $role = Role::find($id);
        $role->name = $request->name;
        $role->display_name = $request->display_name;
        $role->description = $request->description;
        $role->update();

        return redirect()->route('role.index')->with('success', __('Role Berhasil diupdate'));
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
