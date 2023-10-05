<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property mixed image
 */
class Project extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function featuredImages(){
        return $this->hasMany(ProjectFeatures::class);
    }

    public function lifestyleImages(){
        return $this->hasMany(ProjectLifestyle::class);
    }

    public function planImages(){
        return $this->hasMany(ProjectPlan::class);
    }


}
