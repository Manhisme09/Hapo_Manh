<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\CourseUser;
use App\Models\Lesson;
use App\Models\Review;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {
        $otherCourses = Course::showOtherCourses()->get();
        $reviews = Review::recentReview();
        $coursesCount = Course::count();
        $lessonsCount = Lesson::count();
        $learners = CourseUser::countLearner()->get()->count();
        return view('home', compact('otherCourses', 'reviews', 'coursesCount', 'lessonsCount', 'learners'));
    }

    public function test()
    {
        return view('test');
    }
}
