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
        $courses = Course::showCourses();
        $reviews = Review::recentReview();
        $coursesCount = Course::countCourses();
        $lessonsCount = Lesson::countLessons();
        $learners = CourseUser::countLearner();
        return view('home', compact('courses', 'reviews', 'coursesCount', 'lessonsCount', 'learners'));
    }

    public function test()
    {
        return view('test');
    }
}
