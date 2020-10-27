<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assigment extends Model
{
    use HasFactory;
    protected $guarded =[];

    public function assigment_to_course(){
        return $this->belongsToMany(Course::class,'course_assigment');

    }
}
