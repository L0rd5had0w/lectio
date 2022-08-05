<?php

namespace App\Http\Livewire;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Models\Course;
use App\Models\Lesson;
use Livewire\Component;

class CourseStatus extends Component
{
    use AuthorizesRequests;

    public $course, $current, $lesson, $tasks, $lessons;


    public function mount(Course $course)
    {
        $this->course = $course;
        $this->authorize('enrolled', $course);

        $this->lessons = $course->lessons()->with('tasks')->get();
        $this->current = $course->lessons()->with('tasks')->first();
        // if (!$this->current) {
        //     $this->current = $course->lessons->last();
        // }
        $this->tasks = $this->lessons->pluck('tasks')->collapse();
    }

    public function render()
    {
        return view('livewire.course-status');
    }

    public function changeLesson(Lesson $lesson)
    {
        $this->current = $lesson;
        $this->tasks = $this->lessons->pluck('tasks')->collapse();
    }

    public function completed(){
        if($this->current->completed){
            //Eliminar registro
            $this->current->users()->detach(auth()->user()->id);
        }else{
            //Agregar Registro
            $this->current->users()->attach(auth()->user()->id);
        }

        $this->current = Lesson::find($this->current->id);
        $this->course = Course::find($this->course->id);
    }

    public function getIndexProperty()
    {
        return $this->course->lessons->pluck('id')->search($this->current->id);
    }

    public function getNextProperty()
    {
        if ($this->index == $this->course->lessons->count() - 1) {
            return null;
        } else {
            return $this->course->lessons[$this->index + 1];
        }
    }

    public function getPreviousProperty()
    {
        if ($this->index == 0) {
            return null;
        } else {
            return $this->course->lessons[$this->index - 1];
        }
    }

    public function getAdvanceProperty(){
        $i = 0;
 
        foreach($this->course->lessons as $lesson){
            if($lesson->completed){
                $i++;
            }
        }
        
        $advance = ($i * 100)/($this->course->lessons->count());
        return round($advance, 2);
 
     }
}
