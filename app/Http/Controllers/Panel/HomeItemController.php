<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use App\Models\HomeItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomeItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = HomeItem::paginate(10);
        return view('backend.homeItems.index', compact('items'));
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
            'link' => 'nullable',
            'itemImage' => 'required'
        ]);
        $data['image'] = store_file($request->file('itemImage'));
        $data['link'] = $request->input('link');
        HomeItem::create($data);
        toast('Home Item Created Successfully done...', 'success');
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(HomeItem $homeItem)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $homeItem = HomeItem::findOrFail($id);
        return view('backend.homeItems.edit', compact('homeItem'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $homeItem = HomeItem::findOrFail($id);

        if($request->hasFile('itemImage')){
            Storage::disk('public')->delete($homeItem->image);
            $name = 'HomeItem'.uniqid().'.'.$request->file('itemImage')->getClientOriginalExtension();
            $homeItem->image = store_file($request->file('itemImage'), 'public', $name);
        }
        $homeItem->title = $request->title;
        $homeItem->link = $request->link;
        $homeItem->save();
        toast('Home Item Update Successfully done...', 'success');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(HomeItem $homeItem)
    {
        //
    }
}
