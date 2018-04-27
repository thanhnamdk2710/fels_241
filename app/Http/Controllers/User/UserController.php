<?php

namespace App\Http\Controllers\User;

use App\Models\Course;
use App\Models\Lesson;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function courses()
    {
        $courses = Course::orderBy('level_completed')->paginate(config('settings.paginate_course'));

        return view('user.courses.index', compact('courses'));
    }

    public function lessons($slug)
    {
        $course = Course::where('slug', '=', $slug)->first();
        $lessons = Lesson::where('course_id', $course->id)->get();

        return view('user.lessons.index', compact('course', 'lessons'));
    }
}
