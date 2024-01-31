<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Project;
use App\Models\ProjectFeatures;
use App\Models\ProjectLifestyle;
use App\Models\ProjectPlan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::with('category:id,title')->paginate(10);
        return view('backend.projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('backend.projects.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'category_id' => 'required',
            'title' => 'required',
            'location' => 'required',
            'apartment_size' => 'required',
            'land_area' => 'required',
            'number_floors' => 'required',
            'number_apartment' => 'required',
            'bedroom' => 'required',
            'bathroom' => 'required',
            'launch_date' => 'required',
            'collection' => 'required',
            'address' => 'required',
            'map_location' => 'required',

            'builders_logo' => 'required|mimes:png,jpg,svg|file|max:500',
            'about_builders' => 'required',

            'thumbnail' => 'required|mimes:png,jpg,svg|file|max:1024',
            'image' => 'required|mimes:png,jpg,svg|file|max:1024',

            'features_images' => 'required',
            'features_images.*' => ['image', 'mimes:jpeg,png,jpg,svg', 'max:2048'],

            'lifestyle_images' => 'required',
            'lifestyle_images.*' => ['image', 'mimes:jpeg,png,jpg,svg', 'max:2048'],

            'floor_plans_images' => 'required',
            'floor_plans_images.*' => ['image', 'mimes:jpeg,png,jpg,svg', 'max:2048'],
        ]);

        $data['no_floors'] = $request->input('number_floors');
        $data['image'] = store_file($request->file('image'), 'projects', 'project');
        $data['thumbnail'] = store_file($request->file('thumbnail'), 'projects', 'project');
        $data['builders_logo'] = store_file($request->file('builders_logo'), 'builders_logo', 'project');


        $project = Project::create($data);
        $featuredImages=[];
        $lifestyleImages=[];
        $floorPlansImages=[];
        foreach ($request->file("features_images") as $item){
            $featuredImages[] = [
                "image" => store_file($item, 'projects', 'project'),
            ];
        }
        foreach ($request->file("lifestyle_images") as $item){
            $lifestyleImages[] = [
                "image" => store_file($item, 'projects', 'project'),
            ];
        }
        foreach ($request->file("floor_plans_images") as $item){
            $floorPlansImages[] = [
                "image" => store_file($item, 'projects', 'project'),
            ];
        }

        $project->featuredImages()->createMany($featuredImages);
        $project->lifestyleImages()->createMany($lifestyleImages);
        $project->planImages()->createMany($floorPlansImages);

        toast('Project Created Successfully Done...', 'success');
        return redirect()->route('admin.project.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        $project->load('featuredImages', 'lifestyleImages', 'planImages');

        return view('backend.projects.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        $categories = Category::all();

        return view('backend.projects.edit', compact('project', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param Project $project
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Project $project)
    {

        $data = $request->validate([
            'category_id' => 'required',
            'title' => 'required',
            'location' => 'required',
            'apartment_size' => 'required',
            'land_area' => 'required',
            'number_floors' => 'required',
            'number_apartment' => 'required',
            'bedroom' => 'required',
            'bathroom' => 'required',
            'launch_date' => 'required',
            'collection' => 'required',
            'address' => 'required',
            'map_location' => 'required',

            'about_builders' => 'required',


            'builders_logo' => 'sometimes|mimes:png,jpg,svg|file|max:500',
            'thumbnail' => 'sometimes|mimes:png,jpg,svg|file|max:1024',
            'image' => 'sometimes|mimes:png,jpg,svg|file|max:1024',

            'features_images' => 'sometimes',
            'features_images.*' => ['image', 'mimes:jpeg,png,jpg,svg', 'max:2048'],

            'lifestyle_images' => 'sometimes',
            'lifestyle_images.*' => ['image', 'mimes:jpeg,png,jpg,svg', 'max:2048'],

            'floor_plans_images' => 'sometimes',
            'floor_plans_images.*' => ['image', 'mimes:jpeg,png,jpg,svg', 'max:2048'],
        ]);

        $project->update($data);
        toast('Project Item Update Successfully Done...', 'success');
        return redirect()->route('admin.project.index');
    }

    public function updateImage(Request $request, $id)
    {
        $project = Project::findOrFail($id);

        $request->validate([
            'thumbnail' => ['image', 'mimes:jpeg,png,jpg,svg', 'max:2048'],
            'image' => ['image', 'mimes:jpeg,png,jpg,svg', 'max:2048'],
            'builders_logo' => ['image', 'mimes:jpeg,png,jpg,svg', 'max:2048'],
        ]);

        if($request->hasFile('thumbnail')){
            if (Storage::disk('public')->exists($project->thumbnail)){
                Storage::disk('public')->delete($project->thumbnail);
            }
            $project->thumbnail = store_file($request->file('thumbnail'), 'projects', 'project');
        }
        if($request->hasFile('image')){
            if (Storage::disk('public')->exists($project->image)){
                Storage::disk('public')->delete($project->image);
            }
            $project->image = store_file($request->file('image'), 'projects', 'project');
        }
        if($request->hasFile('builders_logo')){
            if (Storage::disk('public')->exists($project->builders_logo)){
                Storage::disk('public')->delete($project->builders_logo);
            }
            $project->builders_logo = store_file($request->file('builders_logo'), 'projects', 'project');
        }

        $project->save();
        toast('Project Files Updated Successfully Done...', 'success');
        return back();
    }

    public function deleteFeaturedImage($id){
        $image = ProjectFeatures::findOrFail($id);
        if (Storage::disk('public')->exists($image->image)){
            Storage::disk('public')->delete($image->image);
        }
        $image->delete();
        toast('Project Featured Image Delete Successfully Done...', 'success');
        return back();
    }
    public function deleteLifestyleImage($id){
        $image = ProjectLifestyle::findOrFail($id);

        if (Storage::disk('public')->exists($image->image)){
            Storage::disk('public')->delete($image->image);
        }
        $image->delete();
        toast('Project Lifestyle Image Delete Successfully Done...', 'success');
        return back();
    }

    public function deleteFloorImage($id){
        $image = ProjectPlan::findOrFail($id);
        if (Storage::disk('public')->exists($image->image)){
            Storage::disk('public')->delete($image->image);
        }
        $image->delete();
        toast('Project Plan Image Delete Successfully Done...', 'success');
        return back();
    }

    public function updateFeaturedImage(Request  $request, $id){
        $request->validate([
            'featuredImage' => ['required','image', 'mimes:jpeg,png,jpg,svg', 'max:2048'],
        ]);

        ProjectFeatures::create([
            'project_id' => $id,
            'image' => store_file($request->featuredImage, 'projects', 'project'),
        ]);
        toast('Project New Featured Image Added Done...', 'success');
        return back();
    }

    public function updateLifestyleImage(Request  $request, $id){
        $request->validate([
            'lifestyleImage' => ['required', 'image', 'mimes:jpeg,png,jpg,svg', 'max:2048'],
        ]);
        ProjectLifestyle::create([
            'project_id' => $id,
            'image' => store_file($request->lifestyleImage, 'projects', 'project'),
        ]);
        toast('Project New Lifestyle Image Added Done...', 'success');
        return back();
    }


    public function updateFLoorImage(Request  $request, $id){
        $request->validate([
            'floor_plan' => ['required','image', 'mimes:jpeg,png,jpg,svg', 'max:2048'],
        ]);
        ProjectPlan::create([
            'project_id' => $id,
            'image' => store_file($request->floor_plan, 'projects', 'project'),
        ]);
        toast('Project Plan Image Added Done...', 'success');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        if (Storage::disk('public')->exists($project->thumbnail)){
            Storage::disk('public')->delete($project->thumbnail);
        }
        if (Storage::disk('public')->exists($project->image)){
            Storage::disk('public')->delete($project->image);
        }
        if (Storage::disk('public')->exists($project->builders_logo)){
            Storage::disk('public')->delete($project->builders_logo);
        }

        $project->delete();
        toast('Project Delete Successfully Done...', 'success');
        return back();

    }
}
