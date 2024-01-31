<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::latest()->paginate(10);
        return view('backend.newsevents.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     */
    public function store(Request $request)
    {

        $data = $request->validate([
            'title' => 'required',
            'details' => 'required',
            'thumbnail' => 'required|mimes:png,jpg,svg|file|max:1024',
            'status' => 'required'
        ]);

        $path=null;
        if ($request->hasFile('thumbnail')){
            $path = store_file($request->file('thumbnail'), 'post', 'post');
        }

        $data['user_id'] = Auth::id();
        $data['image'] = $path;

        Post::create($data);

        toast('Post Added Successfully Done...', 'success');
        return back();
    }

    /**
     * Display the specified resource.
     * @param Post $post
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     * @param Post $post
     */
    public function edit(Post $post)
    {
        return view('backend.newsevents.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param Post $post
     */
    public function update(Request $request, Post $post)
    {
        $data = $request->validate([
            'title' => 'required',
            'details' => 'required',
            'thumbnail' => 'sometimes|mimes:png,jpg,svg|file|max:1024',
            'status' => 'required'
        ]);

        if ($request->hasFile('thumbnail')){
            Storage::disk('public')->delete($post->thumbnail);
            $data['thumbnail'] = store_file($request->file('thumbnail'), 'post', 'post');
        }

        $post->update($data);
        toast('Post Update Successfully Done...', 'success');
        return redirect()->route('admin.post.index');
    }

    /**
     * Remove the specified resource from storage.
     * @param Post $post
     */
    public function destroy(Post $post)
    {
        Storage::disk('public')->delete($post->image);
        $post->delete();
        toast('Post Item Delete Successfully Done...', 'success');
        return back();
    }
}
