<?php

namespace App\Models;

use App\Models\Notice_class;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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
    
    public function classify_to_notice_class(){
        return $this->belongsToMany(Notice_class::class,'notice_class_classify');
    }
    
}
