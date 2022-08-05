<?php

namespace App\Models;

use App\Models\Course;
use Laravel\Jetstream\HasProfilePhoto;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;
    use HasProfilePhoto;

    protected $guarded = ['id'];

    public function courses()
    {
        return $this->hasMany(Course::class);
    }
}
