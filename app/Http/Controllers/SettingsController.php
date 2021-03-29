<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Setting;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        if (\Auth::user('manage-pengaturan')){
            $settings = Setting::settings();
            return view('settings.index', compact('settings'));
        }else{
            return redirect()->back()->with('error', 'Permission denied');
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
        if (\Auth::user()) {

            if ($request->logo) {
                $request->validate(
                    [
                        'logo' => 'image|mimes:png',
                    ]
                );

                $logoName = 'logo.png';
                $path     = $request->file('logo')->storeAs('public/logo/', $logoName);
            }
            if ($request->small_logo) {
                $request->validate(
                    [
                        'small_logo' => 'image|mimes:png',
                    ]
                );
                $smallLogoName = 'small_logo.png';
                $path          = $request->file('small_logo')->storeAs('public/logo/', $smallLogoName);
            }
            if ($request->favicon) {
                $request->validate(
                    [
                        'favicon' => 'image|mimes:png',
                    ]
                );
                $favicon = 'favicon.png';
                $path    = $request->file('favicon')->storeAs('public/logo/', $favicon);
            }

            if (!empty($request->title_text) || !empty($request->footer_text)) {
                $post = $request->all();
                unset($post['_token']);
                foreach ($post as $key => $data) {
                    \DB::insert(
                        'insert into setting_tables  (`value`, `name`) values (?, ?) ON DUPLICATE KEY UPDATE `value` = VALUES(`value`) ',
                        [
                            $data,
                            $key,
                        ]
                    );
                }
            }

            return redirect()->back()->with('success', 'Pengaturan berhasil diupdate');
        } else {
            return redirect()->back()->with('error', 'Permission denied.');
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

    //
    public function CompanySettings(Request $request)
    {
        # code...
        if (\Auth::user('create-pengaturan')) {
            $request->validate(
                [
                    'company_name' => 'required|string|max:50',
                    'company_email' => 'required',
                ]
            );
            $post = $request->all();
            unset($post['_token']);

            foreach ($post as $key => $data) {
                \DB::insert(
                    'insert into setting_tables (`value`, `name`) values (?, ?) ON DUPLICATE KEY UPDATE `value` = VALUES(`value`) ',
                    [
                        $data,
                        $key,
                    ]
                );
            }
            return redirect()->back()->with('success', __('Profil berhasil diupdate'));
        } else {
            return redirect()->back()->with('error', 'Permission denied.');
        }
    }

    //
    public function SosmedSettings(Request $request)
    {
        # code...
        if (Auth::user('edit-pengaturan')) {
            // $user = \Auth::user();
            $request->validate(
                [
                    'company_fb' => 'required|string|max:50',
                    'company_ig' => 'required',
                ]
            );
            $post = $request->all();
            unset($post['_token']);

            foreach ($post as $key => $data) {
                \DB::insert(
                    'insert into setting_tables (`value`, `name`) values (?, ?) ON DUPLICATE KEY UPDATE `value` = VALUES(`value`) ',
                    [
                        $data,
                        $key,
                    ]
                );
            }
            return redirect()->back()->with('success', __('Sosial media berhasil diupdate'));
        } else {
            return redirect()->back()->with('error', 'Permission denied.');
        }
    }

    //
    public function EmailSettings(Request $request)
    {
        # code...
        if (\Auth::user()->can('manage-email')) {
            $request->validate(
                [
                    'mail_driver' => 'required|string|max:50',
                    'mail_host' => 'required|string|max:50',
                    'mail_port' => 'required|string|max:50',
                    'mail_username' => 'required|string|max:50',
                    'mail_password' => 'required|string|max:50',
                    'mail_encryption' => 'required|string|max:50',
                    'mail_from_address' => 'required|string|max:50',
                    'mail_from_name' => 'required|string|max:50',
                ]
            );

            $arrEnv = [
                'MAIL_DRIVER' => $request->mail_driver,
                'MAIL_HOST' => $request->mail_host,
                'MAIL_PORT' => $request->mail_port,
                'MAIL_USERNAME' => $request->mail_username,
                'MAIL_PASSWORD' => $request->mail_password,
                'MAIL_ENCRYPTION' => $request->mail_encryption,
                'MAIL_FROM_NAME' => $request->mail_from_name,
                'MAIL_FROM_ADDRESS' => $request->mail_from_address,
            ];
            Setting::setEnvironmentValue($arrEnv);

            return redirect()->back()->with('success', __('Email berhasil diupdate'));
        } else {
            return redirect()->back()->with('error', 'Permission denied.');
        }
    }
}
