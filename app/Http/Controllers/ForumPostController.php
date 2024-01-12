<?php

namespace App\Http\Controllers;

use App\Models\ForumPost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ForumPostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = ForumPost::all();
        return view("forum.index", ['posts' => $posts]);
        // return view("forum.index");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("forum.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request
            ->validate([
                'title' => 'required|string',
                'message' => 'required|string',
            ]);

        $forum = new ForumPost();
        $forum->title = $request->input('title');
        $forum->message = $request->input('message');
        $forum->user_id = Auth::id();

        $forum->save();

        return redirect()->route('forums.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $post = ForumPost::find($id);
        if($post === null) {
            return view('forum.noshow');
        }
        return view('forum.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
