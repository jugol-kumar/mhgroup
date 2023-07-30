<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Employee;
use App\Models\Gallery;
use App\Models\HomeArea;
use App\Models\HomeItem;
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

        $juniorEmp = Employee::where('type', 'junior')->latest()->take(3)->get();
        $sinEmp = Employee::where('type', 'senior')->latest()->take(4)->get();

        $galleries = Gallery::all();

        return view('frontend.pages.about', compact('juniorEmp', 'sinEmp', 'galleries'));
    }

    public function project(){
        $category = Category::with('projects')->get();
        return view('frontend.pages.project', compact('category'));
    }

    public function contact(){
        return view('frontend.pages.contactus');
    }

}
