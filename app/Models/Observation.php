<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Course;

class Observation extends Model
{
    use HasFactory;

    protected $fillable = ['body', 'course_id'];

    public function course() {
        return $this->belongsTo(Course::class);
    }
}
