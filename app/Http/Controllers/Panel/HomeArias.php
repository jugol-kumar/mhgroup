<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use App\Models\HomeArea;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomeArias extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $areas = HomeArea::paginate(15);
        return view('backend.arias.index', compact('areas'));
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
        $data = $request->validate([
            'title' => 'required',
            'thumbnail' => 'required',
            'short_content' => 'required|max:200',
            'content' => 'nullable'
        ]);

        $data['thumbnail'] = store_file($request->file('thumbnail'));
        HomeArea::create($data);
        toast('Area item created...', 'success');
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
        $area = HomeArea::findOrFail($id);
        return view('backend.arias.edit', compact('area'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $area = HomeArea::findOrFail($id);

        $data = $request->validate([
            'title' => 'required',
            'short_content' => 'required|max:200',
            'content' => 'nullable'
        ]);

        if ($request->hasFile('thumbnail')){
            Storage::disk('public')->delete($area->thumbnail);
            $data['thumbnail'] = store_file($request->file('thumbnail'));
        }

        $area->update($data);
        toast('Area Item Update Successfully Done...', 'success');
        return redirect()->route('admin.home-arias.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $area = HomeArea::findOrFail($id);
        Storage::disk('public')->delete($area->thumbnail);
        $area->delete();
        toast('Area Item Delete Successfully Done...', 'success');
        return back();
    }
}
