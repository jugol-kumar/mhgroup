<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $images = Gallery::all();
        return view('backend.gallery.index', compact('images'));
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
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'type' => 'required',
            'image' => 'required'
        ]);

        if ($request->input('type') == 'video'){
            $request->validate([
                'video_link' => 'required'
            ]);
        }

        $path=null;
        if ($request->hasFile('image')){
            $path = store_file($request->file('image'), 'gallery', 'Gallery');
        }

        Gallery::create([
            'title' => $request->title,
            'thumb' => $path,
            'type' => $request->input('type'),
            'video' => $request->input('video_link')
        ]);

        toast('Added Success Gallery Item...', 'success');
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Gallery $gallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Gallery $gallery)
    {
        return view('backend.gallery.edit', compact('gallery'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Gallery $gallery)
    {
        if($request->hasFile('image')){
            Storage::disk('public')->delete($gallery->thumb);
            $name = 'HomeItem'.uniqid().'.'.$request->file('image')->getClientOriginalExtension();
            $gallery->thumb = store_file($request->file('image'), 'public', $name);
        }

        $gallery->update([
            'title' => $request->title,
            'video' => $request->input('video_link')
        ]);

        toast('Update Success Gallery Item...', 'success');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Gallery $gallery)
    {
        Storage::disk('public')->delete($gallery->thumb);
        $gallery->delete();
        toast('Gallery Item Deleted...', 'success');
        return back();
    }
}
