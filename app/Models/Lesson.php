<?php

namespace App\Models;

use App\Models\Task;
use App\Models\User;
use App\Models\Course;
use App\Models\Comment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Lesson extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $withCount = ['tasks'];

    public function tasks()
    {
        return $this->hasMany(Task::class);
    }

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }
}
