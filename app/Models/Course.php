<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $guarded =[];

    public function course_to_classify(){
        return $this->belongsToMany(Classify::class,'course_classify');
    }

    public function course_to_assigment(){
        
    }
}
