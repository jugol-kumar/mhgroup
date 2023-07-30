<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function pagesSection(){
        return view('backend.contents.create');
    }

    public function pagesSectionCreate(){
        return view('backend.contents.index');
    }
}
