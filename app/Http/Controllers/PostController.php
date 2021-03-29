<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\Facades\DataTables;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        if (\Auth::user()->can('manage-post')) {
            if ($request->ajax()) {
                $posts = Post::with('category', 'tag')->where('user_id', Auth::user()->id);
                return DataTables::of($posts)
                    ->addColumn('action', function ($posts) {
                        return view('datatable._action', [
                            'model' => $posts,
                            'form_url' => route('posts.destroy', $posts->id),
                            'edit_url' => route('posts.edit', $posts->id),
                            'can_edit' => 'edit-posts',
                            'can_delete' => 'delete-posts',
                            'confirm_message' => 'Apakah anda yakin ?'
                        ]);
                    })
                    ->editColumn('tag', function ($posts) {
                        return $posts->tag->count() ?
                            '<span class="badge badge-primary">' . implode('</span> <span class="badge badge-primary">', $posts->tag->pluck('title')->toArray()) . '</span>' : '';
                    })
                    ->editColumn('title', function ($posts) {
                        return view('datatable.title', [
                            'title' => $posts->title,
                            'slug' => $posts->slug,
                            'user_id' => $posts->user->name,
                            'created' => $posts->created_at->format('d M Y H:i'),
                            'hits' => $posts->hits,
                            'category' => $posts->category->count() ?
                                implode(' ', $posts->category->pluck('title')->toArray()) : ' - '
                        ]);
                    })
                    ->rawColumns(['action', 'tag'])
                    ->escapeColumns(['tag'])
                    ->make(true);
            }
            return view('post.index');
        } else {
            return redirect()->back()->with('error', __('Permission denied.'));
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
        if (\Auth::user()->can('create-post')) {
            # code...
            return view('post.create');
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
}
