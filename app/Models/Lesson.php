<?php

namespace App\Models;

use App\Models\Task;
use App\Models\User;
use App\Models\Course;
use App\Models\Section;
use App\Models\Comment;
use App\Models\Platform;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Lesson extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $withCount = ['tasks'];

    //Definimos un atributo para saber si se completo la leccion o no
    public function getCompletedAttribute(){
        return $this->users->contains(auth()->user()->id);
    }

    public function tasks()
    {
        return $this->hasMany(Task::class);
    }

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function description(){
        return $this->hasOne('App\Models\Description');
    }

    public function section(){
        return $this->belongsTo(Section::class);
    }

    public function platform(){
        return $this->belongsTo(Platform::class);
    }

    /*public function user()
    {
        return $this->belongsTo(User::class);
    }*/

    //Relacion muchos a muchos
    public function users(){
        return $this->belongsToMany(User::class);
    }

    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }
}
