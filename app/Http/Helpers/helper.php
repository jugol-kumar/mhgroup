<?php


use App\Models\BusinessSetting;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

if (!function_exists('overWriteEnv')){
    function overWriteEnv($key, $value){
        $envFile = base_path('.env');
        if (File::exists($envFile)) {
            $contents = File::get($envFile);
            $updatedContents = Str::replaceFirst(
                "{$key}=" . env($key),
                "{$key}=\"" . $value . "\"",
                $contents
            );
            File::put($envFile, $updatedContents);
            return "Environment variable updated successfully!";
        }
    }
}


if (!function_exists('get_setting')) {
    function get_setting($key, $default = null)
    {
        $setting = BusinessSetting::where('type', $key)->first();
        return $setting == null ? $default : $setting->value;
    }
}

if (!function_exists('store_file')){
    function store_file($file, $drive=null, $name=null){
        $makeName = $name ? $name.'_'.uniqid().'.'.$file->getClientOriginalExtension() : uniqid().'.'.$file->getClientOriginalExtension();
        $path = Storage::disk('public')->putFileAs($drive ?? 'common', $file, $makeName);
        return $path;
    }
}

