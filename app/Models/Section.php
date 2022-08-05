<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Lesson;
use App\Models\Course;

class Section extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    //Relacion uno a muchos

    public function lessons(){
        return $this->hasMany(Lesson::class);
    }

    //Relacion 1 a muchos inversa
    public function course(){
        return $this->belongsTo(Course::class);
    }
}
