<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use App\Models\BusinessSetting;
use Illuminate\Http\Request;

class BusinessSettingController extends Controller
{
    public function settingPage(){
        return view('backend.settings.setting');
    }



    public function update(Request $request){

//        return $request;

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
                    $business_settings->value = store_file($request->file('header_logo'));
                }

                if ($type == 'favicon' && $request->hasFile('favicon')) {
                    $business_settings->value = store_file($request->file('favicon'));
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
                    $business_settings->value = store_file($request->file('header_logo'));
                }

                if ($type == 'favicon' && $request->hasFile('favicon')) {
                    $business_settings->value = store_file($request->file('favicon'));
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



}
