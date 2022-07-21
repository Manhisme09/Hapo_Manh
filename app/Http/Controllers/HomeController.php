<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\CourseUser;
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
        $this->courseUser = new CourseUser();
    }
    public function index()
    {
        return view(
            'home',
            [
                'courses' => $this->course->getThreeCourse(),
                'reviews' => $this->review->getReview(),
                'coursesCount' => Course::countt(),
                'lessonsCount' => Lesson::countt(),
                'learners' => CourseUser::countt(),
            ]
        );
    }

    public function test()
    {
        return view('test');
    }
}
