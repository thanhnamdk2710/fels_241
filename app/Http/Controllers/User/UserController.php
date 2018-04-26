<?php

namespace App\Http\Controllers\User;

use App\Models\Course;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function courses()
    {
        $courses = Course::orderBy('level_completed')->paginate(config('settings.paginate_course'));

        return view('user.courses.index', compact('courses'));
    }
}
