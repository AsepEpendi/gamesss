<?php

namespace App\Http\Controllers;

use App\Channel;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;



class ChannelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        if (\Auth::user()->can('manage-channel')) {
            # code...
            if ($request->ajax()) {
                $channel = Channel::select();
                return DataTables::of($channel)
                    ->addColumn('action', function ($channel) {
                        return view('datatables.action', [
                            'model' => $channel,
                            'form_url' => route('channel.destroy', $channel->id),
                            'edit_url' => route('channel.edit', $channel->id),
                            'can_edit' => 'edit-channel',
                            'can_delete' => 'delete-channel',
                            'confirm_message' => 'Apakah anda yakin ?'
                        ]);
                    })
                    ->editColumn('cover', function ($channel) {
                        $url = asset('storage/channel/' . $channel->cover);
                        return '<img src="' . $url . '" border="0" width="60" class="img-rounded" align="center" />';
                    })
                    ->rawColumns(['cover'])
                    ->make(true);
            }
            return view('channel.index');
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
        if (\Auth::user()->can('create-channel')) {
            # code...
            return view('channel.create');
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
        if (\Auth::user()->can('create-channel')) {
            # code...
            $this->validate($request, [
                'cover' => 'required',
                'title' => 'required',
                'description' => 'required',
            ]);

            $channel = new Channel();
            if ($request->file('cover')) {
                $uploadfile = $request->file('cover');
                $filename = $uploadfile->hashName();
                $file = $uploadfile->store('channel', 'public');
                $channel->cover = $filename;
            }
            $channel->title = $request->title;
            $channel->meta_desc = $request->meta_desc;
            $slug = \Str::slug($channel->title, '-');
            $channel->slug = $slug;
            $channel->description = $request->description;
            $channel->save();

            return redirect()->route('channel.index')->with('success', __('Channel successfully created'));
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
        if (\Auth::user()->can('edit-channel')) {
            # code...
            $channel = Channel::find($id);
            return view('channel.edit', compact('channel'));
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
        if (\Auth::user()->can('edit-channel')) {
            # code...
            $this->validate($request,[
                'title' => 'required',
                'description' => 'required'
            ]);

            $channel = Channel::find($id);
            if ($request->file('cover')) {
                if ($channel->cover && file_exists(storage_path('app/public/channel/' . $channel->cover))) {
                    \Storage::delete('public/channel/' . $channel->cover);
                }
                $uploadfile = $request->file('cover');
                $filename = $uploadfile->hashName();
                $file = $uploadfile->store('channel', 'public');
                $channel->cover = $filename;
            }
            $channel->title = $request->title;
            $channel->meta_desc = $request->meta_desc;
            $channel->description = $request->description;
            $channel->update();

            return redirect()->route('channel.index')->with('success', __('Channel Successfully Updated'));
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
}
