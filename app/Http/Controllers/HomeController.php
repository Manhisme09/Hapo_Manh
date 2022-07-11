<?php

namespace App\Http\Controllers;

use App\Models\Lesson;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $resuilt = Lesson::find(1)->course->toArray();
        echo '<pre>';
        print_r($resuilt);
        echo '</pre>';
        dd();
        //return view('home');
    }
}
