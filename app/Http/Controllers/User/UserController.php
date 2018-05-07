<?php

namespace App\Http\Controllers\User;

use App\Models\Course;
use App\Models\Lesson;
use App\Models\Word;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('user.home');
    }

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

    public function lessonDetails($slug)
    {
        $lesson = Lesson::where('slug', '=', $slug)->first();
        $words = Word::where('lesson_id', $lesson->id)->get();

        return view('user.lessons.show', compact('lesson', 'words'));
    }

    public function words()
    {
        $words = Word::orderBy('name', 'ASC')->paginate(config('settings.paginate_word'));

        return view('user.words.index', compact('words'));
    }

    public function wordDetails($slug)
    {
        $word = Word::where('name', $slug)->first();

        return view('user.words.show', compact('word'));
    }
}
