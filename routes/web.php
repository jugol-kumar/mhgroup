<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Client\HomeController;
use App\Http\Controllers\Panel\BusinessSettingController;
use App\Http\Controllers\Panel\CategoryController;
use App\Http\Controllers\Panel\DashboardController;
use App\Http\Controllers\Panel\EmployeeController;
use App\Http\Controllers\Panel\GalleryController;
use App\Http\Controllers\Panel\HomeArias;
use App\Http\Controllers\Panel\HomeItemController;
use App\Http\Controllers\Panel\Homevideos;
use App\Http\Controllers\Panel\MessageController;
use App\Http\Controllers\Panel\PageController;
use App\Http\Controllers\Panel\ProjectController;
use App\Http\Controllers\Panel\SliderController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/chairman-message', [HomeController::class, 'chairmanMessage'])->name('chairmanMessage');
Route::get('/project', [HomeController::class, 'project'])->name('project');
Route::get('/gallery', [HomeController::class, 'gallery'])->name('gallery');
Route::get('/news-and-events', [HomeController::class, 'newsEvents'])->name('newsEvents');
Route::get('/contact-us', [HomeController::class, 'contact'])->name('contact');

Route::prefix('panel')->name('admin.')->middleware('guest')->group(function (){
    Route::get('login', [LoginController::class, 'showLoginForm'])->name('showLoginForm');
    Route::post('login', [LoginController::class, 'login'])->name('login');
});

Route::prefix('panel')->name('admin.')->middleware('auth')->group(function (){

   Route::get('dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');


   Route::get('messages', [MessageController::class, 'message'])->name('message');
   Route::post('messages-create', [MessageController::class, 'messageStore'])->name('message.create');
   Route::delete('messages-delete/{id}', [MessageController::class, 'messageDelete'])->name('message.delete');

   Route::resource('slider', SliderController::class);
   Route::resource('homeitems', HomeItemController::class);
   Route::resource('home-videos', Homevideos::class);

   Route::resource('home-arias', HomeArias::class);

   Route::get('pages-section', [PageController::class, 'pagesSection'])->name('pagesSection');
   Route::get('pages-section-create', [PageController::class, 'pagesSectionCreate'])->name('pagesSectionCreate');

   Route::resource('employees', EmployeeController::class);
   Route::resource('gallery', GalleryController::class);

   Route::resource('category', CategoryController::class);
   Route::resource('project', ProjectController::class);

   Route::get('settings', [BusinessSettingController::class, 'settingPage'])->name('settingPage');
   Route::post('settings', [BusinessSettingController::class, 'update'])->name('settings');
   Route::post('settings-appearance', [BusinessSettingController::class, 'updateLogo'])->name('updateLogo');

   Route::post('update-profile', [BusinessSettingController::class, 'updateProfile'])->name('update_profile');


});

Route::any('logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/storage', function (){
   \Illuminate\Support\Facades\Artisan::call('storage:link');
});

Route::fallback(function (){
    return view('errors.404');
});




// test form submit


Route::get("test", function (){
    return view('home');
});

Route::post("test-form", function (){
    return \Illuminate\Support\Facades\Request::all();
});