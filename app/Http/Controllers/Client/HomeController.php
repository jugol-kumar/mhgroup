<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Employee;
use App\Models\Gallery;
use App\Models\HomeArea;
use App\Models\HomeItem;
use App\Models\OurConcern;
use App\Models\Post;
use App\Models\Project;
use App\Models\Slider;
use App\Models\Video;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        $sliders = Slider::where('status', 1)->get();
        $items = HomeItem::all();
        $videos = Video::where('type', 'full')->get();
        $halfVideos = Video::where('type', 'half')->get();
        $homeAreas = HomeArea::all();

        return view('frontend.pages.home', compact('sliders', 'items', 'videos', 'halfVideos', 'homeAreas'));
    }

    public function about(){
        $juniorEmp = Employee::where('type', 'junior')->latest()->get(); //take(3)
        $sinEmp = Employee::where('type', 'senior')->latest()->get(); //->take(4)

        $galleries = Gallery::all();

        return view('frontend.pages.about', compact('juniorEmp', 'sinEmp', 'galleries'));
    }

    public function project(){
        $category = Category::with('projects')->get();

        return view('frontend.pages.project', compact('category'));
    }

    public function singleProject($slug = null, $id){
        $project = Project::with('featuredImages','lifestyleImages','planImages','category', 'category.projects')->where('id', $id)->first();

        return view('frontend.pages.single_project', compact('project', 'project'));
    }


    public function gallery(){

        $images = Gallery::where('type', 'image')->get();
        $videos = Gallery::where('type', '!=', 'image')->get();

        return view('frontend.pages.gallery', compact('images', 'videos'));
    }

    public function contact(){
        return view('frontend.pages.contactus');
    }

    public function chairmanMessage(){
        return view('frontend.pages.chairman_message');
    }

    public function newsEvents(){
        $posts = Post::query()->latest()->where('status', 'published')->paginate(10);
        return view('frontend.pages.news_events', compact('posts'));
    }

    public function showEvents($slug=null, $id){
        $post = Post::findOrFail($id);
        return view('frontend.pages.show_news_events', compact('post'));
    }

    public function concern($slug){

        $concern = OurConcern::where('slug', $slug)->first();

        return view('frontend.pages.our_concern', compact('concern'));
    }

}
