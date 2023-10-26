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
            'concern_image' => 'required'
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
    public function edit(OurConcern $ourConcern)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param OurConcern $ourConcern
     */
    public function update(Request $request, OurConcern $ourConcern)
    {
        //
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
