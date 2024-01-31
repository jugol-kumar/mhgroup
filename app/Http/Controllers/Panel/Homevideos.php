<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class Homevideos extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $videos = Video::paginate();
        return view('backend.homevideos.index', compact('videos'));
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
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {

        $data = $request->validate([
            'title' => 'nullable',
            'thumbnail' => 'required|mimes:png,jpg,svg|file|max:1024',
            'video_link' => 'required',
            'link' => 'nullable',
            'button_name' => 'nullable',
            'type' => 'required',
        ]);

        $data['thumbnail'] = store_file($request->file('thumbnail'));
        Video::create($data);
        toast('Home Video Created Successfully done...', 'success');
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $video = Video::findOrFail($id);
        return view('backend.homevideos.edit', compact('video'));
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param string $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, string $id)
    {
        $video = Video::findOrFail($id);

        $data = $request->validate([
            'title' => 'nullable',
            'video_link' => 'required',
            'link' => 'nullable',
            'button_name' => 'nullable',
            'thumbnail' => 'sometimes|mimes:png,jpg,svg|file|max:1024',
        ]);



        if ($request->hasFile('thumbnail')){
            Storage::disk('public')->delete($video->thumbnail);
            $data['thumbnail'] = store_file($request->file('thumbnail'));
        }
        $video->update($data);
        toast('Video Item Update Successfully Done...', 'success');
        return redirect()->route('admin.home-videos.index');
    }

    /**
     * Remove the specified resource from storage.
     * @param string $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(string $id)
    {
        $video = Video::findOrFail($id);
        Storage::disk('public')->delete($video->thumbnail);
        $video->delete();
        toast('Video Item Delete Successfully Done...', 'success');
        return back();
    }
}
