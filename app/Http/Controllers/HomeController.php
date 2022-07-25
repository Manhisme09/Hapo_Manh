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
        $cheapCourses = Course::showCheapCourses()->get();
        $otherCourses = Course::showOtherCourses()->get();
        $reviews = Review::recentReview()->get();
        $coursesCount = Course::count();
        $lessonsCount = Lesson::count();
        $learners = CourseUser::countLearner()->get()->count();
        return view('home', compact('cheapCourses', 'otherCourses', 'reviews', 'coursesCount', 'lessonsCount', 'learners'));
    }
}
