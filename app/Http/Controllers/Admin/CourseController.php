<?php

namespace App\Http\Controllers\Admin;

use App\Models\Course;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Mail\ApprovedCourse;
use Illuminate\Http\Request;
use App\Mail\RejectCourse;

class CourseController extends Controller
{

    public function index()
    {
        $courses = Course::whereStatus(Course::REVISION)->paginate();
        return view('admin.courses.index', compact('courses'));
    }

    public function sales()
    {
        return view('admin.courses.sales');
    }

    public function details(Course $course)
    {
        return view('admin.courses.details', compact('course'));
    }

    public function show(Course $course)
    {
        $this->authorize('revision', $course);
        return view('admin.courses.show', compact('course'));
    }

    public function approved(Course $course)
    {
        $this->authorize('revision', $course);

        if (!$course->lessons || !$course->goals || !$course->requirements || !$course->image) {
            return back()->with('info', "Curso incompleto");
        }
        $course->status = 3;

        if ($course->observation){
            $course->observation->delete();
        }

        $course->save();

        //Enviar correo electronico.
        $mail = new ApprovedCourse($course);

        Mail::to($course->teacher->email)->queue($mail);

        return redirect()->route('admin.courses.index')->with('info', "Curso Publicado");;
    }

    public function observation(Course $course) {

        return view('admin.courses.observation', compact('course'));
    }

    public function reject(Request $request, Course $course) {
        $request->validate([
            'body' => 'required'
        ]);

        $course->observation()->create($request->all());

        $course->status = 1;
        $course->save();

        //Enviar correo electronico.
        $mail = new RejectCourse($course);

        Mail::to($course->teacher->email)->queue($mail);

        return redirect()->route('admin.courses.index')->with('info', "El curso se ha rechazado");;
    }
}
