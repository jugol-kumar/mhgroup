<?php

namespace App\Http\Controllers;

use App\Models\OurConcern;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class OurConcernController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $concerns = OurConcern::all();

        return view('backend.conern.index', compact('concerns'));
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
           'concern_name' => 'required',
           'short_name' => 'required',
            'link' => 'sometimes',
            'address' => 'required',
            'phone' => 'required',
            'email' => 'email|required',
            'about' => 'nullable',
            'concern_image' => 'required|mimes:png,jpg,svg|file|max:1024',
        ]);

        $data['slug'] = Str::slug($request->input('concern_name'));
        $data['image'] = store_file($request->file('concern_image'), 'concerns');
        OurConcern::create($data);
        toast('Concern Created Successfully Done...', 'success');
        return back();
    }

    /**
     * Display the specified resource.
     * @param OurConcern $ourConcern
     */
    public function show(OurConcern $ourConcern)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     * @param OurConcern $ourConcern
     */
    public function edit($id)
    {
        $concern = OurConcern::findOrFail($id);
        return view('backend.conern.edit', compact('concern'));
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param OurConcern $ourConcern
     */
    public function update(Request $request, $id)
    {

        $data = $request->validate([
            'concern_name' => 'required',
            'short_name' => 'required',
            'link' => 'sometimes',
            'address' => 'required',
            'phone' => 'required',
            'email' => 'email|required',
            'about' => 'nullable',
            'concern_image' => 'sometimes|mimes:png,jpg,svg|file|max:1024',
        ]);
        $concern = OurConcern::findOrFail($id);

        if ($request->hasFile('concern_image')){
            Storage::disk('public')->delete('/concerns/'.$concern->image);
            $data['image'] = store_file($request->file('concern_image'), 'concerns');
        }
        $data['slug'] = Str::slug($request->input('concern_name'));
        $concern->update($data);
        toast('Concern Update Successfully Done...', 'success');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     * @param OurConcern $ourConcern
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $ourConcern = OurConcern::findOrFail($id);
        Storage::disk('public')->delete($ourConcern->image);
        $ourConcern->delete();
        toast('Concern Deleted Successfully Done...', 'success');
        return back();
    }
}
