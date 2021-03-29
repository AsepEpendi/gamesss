<?php

namespace App\Http\Controllers;

use App\Banner;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        if (\Auth::user()->can('manage-banner')){
            if ($request->ajax()){
                $banner = Banner::select();
                return DataTables::of($banner)
                ->editColumn('action', function ($banner){
                    return view('datatables.action',[
                        'model' => $banner,
                        'form_url' => route('banner.destroy', $banner->id),
                        'edit_url' => route('banner.edit', $banner->id),
                        'can_edit' => 'edit-banner',
                        'can_delete' => 'delete-banner',
                        'confirm_message' => 'Apakah anda yakin ?',
                    ]);
                })
                ->editColumn('status', function ($banner){
                    if ($banner->status == '0'){
                        return 'Tidak aktif';
                    } else{
                        return 'Aktif';
                    }
                })
                ->editColumn('img', function ($banner){
                    $url = asset('storage/banner/' . $banner->img);
                    return '<img src="' . $url . '" border="0" width="60" class="img-rounded" align="center" />';
                })
                ->rawColumns(['img'])
                ->make(true);
            }
            return view('banner.index');
        } else {
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
        if (\Auth::user()->can('create-banner')){
            return view('banner.create');
        } else {
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
        if (\Auth::user()->can('create-banner')) {
            $this->validate($request, [
                'alt_text' => 'required',
                'link' => 'required',
                'text_link' => 'required',
                'highlight_text' => 'required',
                'short_text' => 'required',
                'description' => 'required',
                'status' => 'required',
                'urutan' => 'required|unique:banners,urutan'
            ]);

            $banner = new Banner();
            if ($request->file('img')) {
                $uploadfile = $request->file('img');
                $filename = $uploadfile->hashName();
                $file = $uploadfile->store('banner', 'public');
                $banner->img = $filename;
            }
            $banner->alt_text = $request->alt_text;
            $banner->link = $request->link;
            $banner->text_link = $request->text_link;
            $banner->highlight_text = $request->highlight_text;
            $banner->short_text = $request->short_text;
            $banner->description = $request->description;
            $banner->status = $request->status;
            $banner->urutan = $request->urutan;
            $banner->save();

            return view('banner.index')->with('success', __('Berhasil menambah banner'));
        } else {
            return redirect()->back()->with('error', __('Permission denied.'));
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
        if (\Auth::user()->can('edit-banner')) {
            $banner = Banner::find($id);
            return view('banner.edit', compact('banner'));
        } else {
            return redirect()->back()->with('error', __('Permission denied.'));
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
        if (\Auth::user()->can('edit-banner')) {
            $this->validate($request, [
                'alt_text' => 'required',
                'link' => 'required',
                'text_link' => 'required',
                'highlight_text' => 'required',
                'short_text' => 'required',
                'description' => 'required',
                'status' => 'required',
                'urutan' => 'required|unique:banners,urutan,' . $id,
            ]);

            $banner = Banner::find($id);
            if ($request->file('img')) {
                if ($banner->img && file_exists(storage_path('app/public/banner/' . $banner->img))) {
                    \Storage::delete('public/banner/' . $banner->img);
                }
                $uploadfile = $request->file('img');
                $filename = $uploadfile->hashName();
                $file = $uploadfile->store('banner', 'public');
                $banner->img = $filename;
            }
            $banner->alt_text = $request->alt_text;
            $banner->link = $request->link;
            $banner->text_link = $request->text_link;
            $banner->highlight_text = $request->highlight_text;
            $banner->short_text = $request->short_text;
            $banner->description = $request->description;
            $banner->status = $request->status;
            $banner->urutan = $request->urutan;
            $banner->update();

            return view('banner.index')->with('success', __('Banner berhasil diupdate !!!'));
        } else {
            return redirect()->back()->with('error', __('Permission denied.'));
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
}
