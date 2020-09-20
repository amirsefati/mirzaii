<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classify extends Model
{
    use HasFactory;

    protected $guarded =[];
    
    public function classify_to_class(){
        return $this->belongsToMany(User::class,'classify_user');
    }

    public function classify_to_course(){
        return $this->belongsToMany(Course::class,'course_classify');
    }
    
}
