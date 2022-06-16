@extends('layouts.app')

@section('content')

<section>
    <div class="banner" style="background-image: url('{{ asset('images/banner.png') }}');">
        <div class="banner_title">
            <p class="banner_title_first">Learn Anytime, Anywhere <br> <span>at HapoLearn!</span>
            </p>
            <p class="banner_title_second">Interactive lessons, "on-the-go" <br> practice, peer support.</p>
            <div class="btn-start">
                <p class="btn-start-title">Start Learning Now!</p>
            </div>
        </div>
    </div>
    <div class="banner_bonus"></div>
</section>

<section class="example">
    <div class="container_course">
        <div class="course one">
            <div class="course_image"><div class="logo"></div></div>
            <div class="course_title">
                <p class="name">HTML/CSS/js Tutorial</p>
                <p class="description">I knew hardly anything about HTML, JS, and CSS before entering New Media. I had coded quite a bit, but never touched anything in regards to web development.</p>
                <div class="btn_take">
                    <p class="btn_take_title">Take This Course</p>
                </div>
            </div>
        </div>
        <div class="course two">
            <div class="course_image"><div class="logo"></div></div>
            <div class="course_title">
                <p class="name">LARAVEL Tutorial</p>
                <p class="description">I knew hardly anything about HTML, JS, and CSS before entering New Media. I had coded quite a bit, but never touched anything in regards to web development.</p>
                <div class="btn_take">
                    <p class="btn_take_title">Take This Course</p>
                </div>
            </div>
        </div>
        <div class="course three">
            <div class="course_image"><div class="logo"></div></div>
            <div class="course_title">
                <p class="name disable">PHP Tutorial</p>
                <p class="description">I knew hardly anything about HTML, JS, and CSS before entering New Media. I had coded quite a bit, but never touched anything in regards to web development.</p>
                <div class="btn_take">
                    <p class="btn_take_title">Take This Course</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
