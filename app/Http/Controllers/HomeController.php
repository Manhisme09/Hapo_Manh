<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Lesson;
use App\Models\Review;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function __construct()
    {
        $this->course = new Course();
        $this->review = new Review();
        $this->lesson = new Lesson();
        $this->user = new User();
    }
    public function index()
    {
        return view(
            'home',
            [
                'courses' => $this->course->getThreeCourse(),
                'reviews' => $this->review->getReview(),
                'all_courses' => $this->course->getAllCourse(),
                'all_lessons' => $this->lesson->getAllLesson(),
                'all_users' => $this->user->getAllUser(),
            ]
        );
    }

    public function test()
    {
        return view('test');
    }
}
