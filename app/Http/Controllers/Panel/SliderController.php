<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sliders = Slider::paginate(5);
        return view('backend.slider.index', compact('sliders'));
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
            'title' => 'nullable',
            'descriptions' => 'nullable',
            'bg_image' => 'required',
            'button_name' => 'nullable'
        ]);

        $name = 'Slider_'.uniqid().'.'.$request->file('bg_image')->getClientOriginalExtension();
        $path = store_file($request->file('bg_image'),'public', $name);
        $data['bg_image'] = $path;
        Slider::create($data);
        toast('Slider Created Successfully done...', 'success');
        return back();
    }

    /**
     * Display the specified resource.
     * @param Slider $slider
     */
    public function show(Slider $slider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     * @param Slider $slider
     */
    public function edit(Slider $slider)
    {
        return view('backend.slider.edit', compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param Slider $slider
     */
    public function update(Request $request, Slider $slider)
    {

        $data = $request->validate([
            'title' => 'required',
            'descriptions' => 'required',
            'button_name' => 'nullable'
        ]);

        if ($request->hasFile('bg_image')){
            Storage::disk('public')->delete($slider->bg_image);
            $name = 'Slider_'.uniqid().'.'.$request->file('bg_image')->getClientOriginalExtension();
            $data['bg_image'] = store_file($request->file('bg_image'),'public', $name);
        }

        $slider->update($data);
        toast('Slider Item Update Successfully Done...', 'success');
        return redirect()->route('admin.slider.index');
    }

    /**
     * Remove the specified resource from storage.
     * @param Slider $slider
     */
    public function destroy(Slider $slider)
    {
        if ($slider->bg_image){
            Storage::disk('public')->delete($slider->bg_image);
        }
        $slider->delete();
        toast('Slider Item Deleted...', 'success');
        return back();
    }
}
