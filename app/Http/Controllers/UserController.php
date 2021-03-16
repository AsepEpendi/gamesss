<?php

namespace App\Http\Controllers;

use App\RoleUser;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Yajra\DataTables\Facades\DataTables;
use Session;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        # code...
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        //
        if (\Auth::user()->can('manage-pengguna')){
            if ($request->ajax()){
                $user = User::with('roles');
                return DataTables::of($user)
                    ->addColumn('action', function ($user){
                        return view('datatables.resetpass',[
                            'model' => '$user',
                            'form_url' => route('user.destroy', $user->id),
                            'edit_url' => route('user.edit', $user->id),
                            'reset_url' => route('user.resetpass', $user->id),
                            'confirm_message' => 'Apakah anda Yakin ?'
                        ]);
                    })
                ->make(true);
            }
            return view('user.index');
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
        return view('user.create');
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
        $this->validate($request,[
            'name' => 'required',
            'email' => 'required|unique:users',
            'password' => 'min:6|required_with:password_confirmation|same:password_confirmation',
            'password_confirmation' => 'min:6',
            'role_id' => 'required'
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();

        $role_user = new RoleUser();
        $role_user->user_id = $user->id;
        $role_user->role_id = $request->role_id;
        $role_user->user_type = 'App\User';
        $role_user->save();

        return redirect()->route('user.index')->with('success', __('Pengguna Berhasil dibuat'));

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
        $user = DB::table('users')
        ->join('role_user', 'role_user.user_id', '=', 'users.id')
        ->join('roles', 'role_user.role_id', '=', 'roles.id')
        ->select(
            'users.id as id',
            'users.name as name',
            'users.email as email',
            'roles.name as role_name',
            'roles.id as role_id'
        )
        ->where('users.id', $id)
        ->first();

        if ($user->role_name == 'operator'){
            return redirect()->route('user.index');
        }else{
            return view('user.index', compact('user', 'roles'));
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
            'email' => 'required|unique:users,email,' . $id,
            'role_id' => 'required',
            'name' => 'required'
        ]);

        $user = User::find($id);
        $user->email = $request->email;
        $user->name = $request->name;
        $user->update();

        DB::table('role_user')->where('user_id', '=', $id)
            ->update(['role_id' => $request->role_id]);

        return redirect()->route('user.index')->with('success', __('Pengguna Berhasil diupdate'));
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
    public function profile()
    {
        // dd('tes');
        //
        $userDetail = \Auth::user();
        return view('user.profile')->with('userDetail', $userDetail);
    }

    //
    public function editProfile(Request $request)
    {
        # code...
        $userDetail = \Auth::user();
        $user       = User::findOrFail($userDetail['id']);
        $this->validate(
            $request,
            [
                'name' => 'required|max:120',
                'email' => 'required|email|unique:users,email,' . $userDetail['id'],
            ]
        );
        // if ($request->hasFile('profile')) {
        //     $filenameWithExt = $request->file('profile')->getClientOriginalName();
        //     $filename        = pathinfo($filenameWithExt, PATHINFO_FILENAME);
        //     $extension       = $request->file('profile')->getClientOriginalExtension();
        //     $fileNameToStore = $filename . '_' . time() . '.' . $extension;

        //     $dir        = storage_path('app/public/avatar/');
        //     $image_path = $dir . $userDetail['avatar'];

        //     if (File::exists($image_path)) {
        //         File::delete($image_path);
        //     }

        //     if (!file_exists($dir)) {
        //         mkdir($dir, 0777, true);
        //     }

        //     $path = $request->file('profile')->storeAs('public/avatar/', $fileNameToStore);
        // }

        // if (!empty($request->profile)) {
        //     $user['avatar'] = $fileNameToStore;
        // }
        $user['name']  = $request['name'];
        $user['email'] = $request['email'];
        $user->save();

        return redirect()->route('home')->with(
            'success',
            'Profile Berhasil diupdate.'
        );
    }

    //
    public function resetPass($id)
    {
        //
        $user = DB::table('role_user')
            ->join('users', 'role_user.user_id', '=', 'users.id')
            ->join('roles', 'role_user.role_id', '=', 'roles.id')
            ->select('role_user.*', 'users.name', 'users.email', 'users.id', 'roles.display_name')
            ->where('users.id', '=', $id)
            ->first();

        return view('user.reset-password')->with(compact('user'));
    }

    //
    public function updatePass(Request $request,$id)
    {
        # code...
        $this->validate($request, ['password' => 'required']);
            $password = bcrypt($request->password);
            DB::table('users')->where('id', '=', $id)->update(['password' => $password]);
            Session::flash("flash_notification", [
                "level" => "success",
                "message" => "Pengguna Berhasil Mengedit Passwordnya"
            ]);
        return redirect()->route('user.index')->with('success', __('Password Berhasil diupdate'));
    }

    //
    public function updatePassAccount(Request $request)
    {
        # code...
        if (Auth::Check()) {
            $request->validate(
                [
                    'current_password' => 'required',
                    'new_password' => 'required|min:6',
                    'confirm_password' => 'required|same:new_password',
                ]
            );
            $objUser          = Auth::user();
            $request_data     = $request->All();
            $current_password = $objUser->password;
            if (Hash::check($request_data['current_password'], $current_password)) {
                $user_id            = Auth::User()->id;
                $obj_user           = User::find($user_id);
                $obj_user->password = Hash::make($request_data['new_password']);;
                $obj_user->save();

                return redirect()->route('profile', $objUser->id)->with('success', __('Password Berhasil diupdate'));
            } else {
                return redirect()->route('profile', $objUser->id)->with('error', __('Please enter correct current password.'));
            }
        } else {
            return redirect()->route('profile', \Auth::user()->id)->with('error', __('Something is wrong.'));
        }
    }
}
