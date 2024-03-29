<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use App\Models\BusinessSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class BusinessSettingController extends Controller
{
    public function settingPage(){
        return view('backend.settings.setting');
    }



    public function update(Request $request){

        foreach ($request->types as $key => $type) {
            $business_settings = BusinessSetting::where('type', $type)->first();

            if($type == 'app_name'){
                overWriteEnv('APP_NAME', $request[$type]);
            }
            if($type == 'timezone'){
                overWriteEnv('APP_TIMEZONE', $request[$type]);
            }



            if($business_settings!=null){
                if(gettype($request[$type]) == 'array'){
                    $business_settings->value = json_encode($request[$type]);
                }
                else {
                    $business_settings->value = $request[$type];
                }

                if ($type == 'header_logo' && $request->hasFile('header_logo')){
                    $request->validate([
                        'header_logo' => 'mimes:png,jpg,svg|file|max:100'
                    ]);

                    $business_settings->value = store_file($request->file('header_logo'));
                }

                if ($type == 'favicon' && $request->hasFile('favicon')) {
                    $request->validate([
                        'favicon' => 'mimes:png,jpg,svg|file|max:100'
                    ]);
                    $business_settings->value = store_file($request->file('favicon'));
                }

                if ($type == 'profile' && $request->hasFile('profile')) {
                    $request->validate([
                        'profile' => 'mimes:png,jpg,svg|file|max:500'
                    ]);
                    $business_settings->value = store_file($request->file('profile'));
                }
                if ($type == 'concern_image' && $request->hasFile('concern_image')) {
                    $request->validate([
                        'concern_image' => 'mimes:png,jpg,svg|file|max:500'
                    ]);
                    $business_settings->value = store_file($request->file('concern_image'));
                }
                $business_settings->save();
            }
            else{
                $business_settings = new BusinessSetting;
                $business_settings->type = $type;

                if(gettype($request[$type]) == 'array'){
                    $business_settings->value = json_encode($request[$type]);
                }
                else {
                    $business_settings->value = $request[$type];
                }

                if ($type == 'header_logo' && $request->hasFile('header_logo')){
                    $request->validate([
                        'header_logo' => 'mimes:png,jpg,svg|file|max:100'
                    ]);
                    $business_settings->value = store_file($request->file('header_logo'));
                }

                if ($type == 'favicon' && $request->hasFile('favicon')) {
                    $request->validate([
                        'favicon' => 'mimes:png,jpg,svg|file|max:100'
                    ]);
                    $business_settings->value = store_file($request->file('favicon'));
                }
                if ($type == 'profile' && $request->hasFile('profile')) {
                    $request->validate([
                        'profile' => 'mimes:png,jpg,svg|file|max:500'
                    ]);
                    $business_settings->value = store_file($request->file('profile'));
                }
                if ($type == 'concern_image' && $request->hasFile('concern_image')) {
                    $request->validate([
                        'concern_image' => 'mimes:png,jpg,svg|file|max:500'
                    ]);
                    $business_settings->value = store_file($request->file('concern_image'));
                }
                $business_settings->save();
            }
        }

        toast('Setting Updated...', 'success');
        return back();
    }

    public function updateLogo(Request $request){
        return $request;
    }

    public function updateProfile(Request $request){

        if ($request->input('name')){
            Auth::user()->update(['name' => $request->name]);
        }

        if ($request->input('email')){
            Auth::user()->update(['email' => $request->email]);
        }

        if ($request->input('password')){
            Auth::user()->update(['password' => Hash::make($request->password)]);
            Auth::logout();
        }
        toast('Setting Updated...', 'success');
        return back();
    }


}
