<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Project;
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
        $categories = Category::all();
        return view('backend.projects.index', compact('projects', 'categories'));
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
            'image' => 'required',
            'title' => 'required',
            'location' => 'required'
        ]);

        Project::create([
            'category_id' => $request->category_id,
            'title' => $request->title,
            'location' => $request->location,
            'image' => store_file($request->file('image'), 'projects', 'project')
        ]);
        toast('Project Created Successfully Done...', 'success');
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        //
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
            'title' => 'required',
            'location' => 'required'
        ]);

        if ($request->hasFile('image')){
            Storage::disk('public')->delete($project->image);
            $data['image'] = store_file($request->file('image'), 'projects', 'project');
        }

        $project->update($data);
        toast('Project Item Update Successfully Done...', 'success');
        return redirect()->route('admin.project.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {

        if ($project->image){
            if (Storage::disk('public')->exists($project->image)){
                Storage::disk('public')->delete($project->image);
            }
        }
        $project->delete();
        toast('Project Delete Successfully Done...', 'success');
        return back();

    }
}
