<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class question extends Model
{
    use HasFactory;
    protected $guarded =[];

    public function question_to_answer(){
        return $this->belongsToMany(Answer::class,'answer_question');
    }
}
