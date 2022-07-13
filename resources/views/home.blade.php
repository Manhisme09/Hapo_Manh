@extends('layouts.app')

@section('content')

<section>
    <div class="banner col-md-12">
        <div class="banner-title col-md-12">
            <p class="banner-title-first">Learn Anytime, Anywhere <br> <span>at HapoLearn<span><img class="owl"
                            src="{{ asset('images/owl.png') }}" alt=""></span>!</span>
            </p>
            <p class="banner-title-second">Interactive lessons, "on-the-go" <br> practice, peer support.</p>
            <div class="btn-start">
                <p class="btn-start-title">Start Learning Now!</p>
            </div>
        </div>
    </div>
    <div class="banner-bonus"></div>
</section>

<section class="container courses">
    <div class="row courses">
        <div class="course-one col-lg-4">
            <div class="card item">
                <div class="row no-gutters">
                    <div class="card-img-top col-lg-12 col-md-4">
                        <div class="logo"></div>
                    </div>
                    <div class="card-body col-lg-12 col-md-8">
                        <h5 class="card-title">PHP Tutorial</h5>
                        <p class="card-text">I knew hardly anything about HTML, JS, and CSS before entering New Media. I
                            had
                            coded quite a bit, but never touched anything in regards to web development.</p>
                        <a href="#" class="btn btn-hapo">Take This Course</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="course-two col-lg-4">
            <div class="card item">
                <div class="row no-gutters">
                    <div class="card-img-top col-lg-12 col-md-4">
                        <div class="logo"></div>
                    </div>
                    <div class="card-body col-lg-12 col-md-8">
                        <h5 class="card-title">PHP Tutorial</h5>
                        <p class="card-text">I knew hardly anything about HTML, JS, and CSS before entering New Media. I
                            had
                            coded quite a bit, but never touched anything in regards to web development.</p>
                        <a href="#" class="btn btn-hapo">Take This Course</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="course-three col-lg-4">
            <div class="card item">
                <div class="row no-gutters">
                    <div class="card-img-top col-lg-12 col-md-4">
                        <div class="logo"></div>
                    </div>
                    <div class="card-body col-lg-12 col-md-8">
                        <h5 class="card-title">PHP Tutorial</h5>
                        <p class="card-text">I knew hardly anything about HTML, JS, and CSS before entering New Media. I
                            had
                            coded quite a bit, but never touched anything in regards to web development.</p>
                        <a href="#" class="btn btn-hapo">Take This Course</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="other-course">
        <p class="other-title">Other courses</p>
    </div>
    <div class="row courses other">
        <div class="course-other-one col-lg-4">
            <div class="card item">
                <div class="row no-gutters">
                    <div class="card-other-img-top col-lg-12 col-md-4">
                        <div class="logo-other"></div>
                    </div>
                    <div class="card-body col-lg-12 col-md-8">
                        <h5 class="card-title">PHP Tutorial</h5>
                        <p class="card-text">I knew hardly anything about HTML, JS, and CSS before entering New
                            Media,...</p>
                        <a href="#" class="btn btn-hapo">Take This Course</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="course-other-two col-lg-4">
            <div class="card item">
                <div class="row no-gutters">
                    <div class="card-other-img-top col-lg-12 col-md-4">
                        <div class="logo-other"></div>
                    </div>
                    <div class="card-body col-lg-12 col-md-8">
                        <h5 class="card-title">PHP Tutorial</h5>
                        <p class="card-text">I knew hardly anything about HTML, JS, and CSS before entering New
                            Media,...</p>
                        <a href="#" class="btn btn-hapo">Take This Course</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="course-other-three col-lg-4">
            <div class="card item">
                <div class="row no-gutters">
                    <div class="card-other-img-top col-lg-12 col-md-4">
                        <div class="logo-other"></div>
                    </div>
                    <div class="card-body col-lg-12 col-md-8">
                        <h5 class="card-title">PHP Tutorial</h5>
                        <p class="card-text">I knew hardly anything about HTML, JS, and CSS before entering New
                            Media,...</p>
                        <a href="#" class="btn btn-hapo">Take This Course</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="view-all">
        <a href="#">View All Our Courses <i class="fa-solid fa-arrow-right-long"></i> </a>
    </div>
</section>

<section class="why-bg">
    <div class="container-fluid">
        <div class="row align-items-center ">
            <div class="col-lg-5 col-md-7 col-sm-12 why-content ">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <h4 class="why-title">Why HapoLearn?</h4>
                        <div class="rotate-laptop">
                            <img src="{{ asset('images/laptopmini.png') }}">
                        </div>
                    </div>
                </div>
                <div class="why-list">
                    <div class="why-item">
                        <i class="fa-solid fa-circle-check"></i><span class="why-text">Interactive lessons,
                            "on-the-go"
                            practice, peer support.</span>
                    </div>
                    <div class="why-item">
                        <i class="fa-solid fa-circle-check"></i><span class="why-text">Interactive lessons, "on-the-go"
                            practice, peer support.</span>
                    </div>
                    <div class="why-item">
                        <i class="fa-solid fa-circle-check"></i><span class="why-text">Interactive lessons, "on-the-go"
                            practice, peer support.</span>
                    </div>
                    <div class="why-item">
                        <i class="fa-solid fa-circle-check"></i><span class="why-text">Interactive lessons, "on-the-go"
                            practice, peer support.</span>
                    </div>
                    <div class="why-item">
                        <i class="fa-solid fa-circle-check"></i><span class="why-text">Interactive lessons, "on-the-go"
                            practice, peer support.</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 col-md-5 col-sm-12">
                <img src="{{ asset('images/computer.png') }}" alt="why" class="why-img">
            </div>
        </div>
    </div>
    <div class="feedback">
        <p class="feedback-title">Feedback</p>
    </div>
    <div class="feedback-describe">
        What other students turned professionals have to say about us after learning with us and reaching their goals
    </div>
</section>

<section class="container">
    <div class="feedback-slider">
        <div class="feedback-item">
            <div class="feedback-content">
                <div class="title">
                    <p>
                        “A wonderful course on how to start. Eddie beautifully conveys all essentials of a becoming a
                        good
                        Angular developer. Very glad to have taken this course. Thank you Eddie Bryan.”
                    </p>
                </div>

            </div>
            <div class="feedback-user">
                <div class="image"><img src="{{ asset('images/user.png') }}" alt=""></div>
                <div class="infor">
                    <p class="name">Nguyen Duc Manh</p>
                    <p class="language">PHP</p>
                    <div class="evaluate">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="feedback-item">
            <div class="feedback-content">
                <div class="title">
                    <p>
                        “A wonderful course on how to start. Eddie beautifully conveys all essentials of a becoming a
                        good
                        Angular developer. Very glad to have taken this course. Thank you Eddie Bryan.”
                    </p>
                </div>

            </div>
            <div class="feedback-user">
                <div class="image"><img src="{{ asset('images/user.png') }}" alt=""></div>
                <div class="infor">
                    <p class="name">Nguyen Duc Manh</p>
                    <p class="language">PHP</p>
                    <div class="evaluate">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="feedback-item">
            <div class="feedback-content">
                <div class="title">
                    <p>
                        “A wonderful course on how to start. Eddie beautifully conveys all essentials of a becoming a
                        good
                        Angular developer. Very glad to have taken this course. Thank you Eddie Bryan.”
                    </p>
                </div>

            </div>
            <div class="feedback-user">
                <div class="image"><img src="{{ asset('images/user.png') }}" alt=""></div>
                <div class="infor">
                    <p class="name">Nguyen Duc Manh</p>
                    <p class="language">PHP</p>
                    <div class="evaluate">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="feedback-item">
            <div class="feedback-content">
                <div class="title">
                    <p>
                        “A wonderful course on how to start. Eddie beautifully conveys all essentials of a becoming a
                        good
                        Angular developer. Very glad to have taken this course. Thank you Eddie Bryan.”
                    </p>
                </div>
            </div>
            <div class="feedback-user">
                <div class="image"><img src="{{ asset('images/user.png') }}" alt=""></div>
                <div class="infor">
                    <p class="name">Nguyen Duc Manh</p>
                    <p class="language">PHP</p>
                    <div class="evaluate">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="feedback-item">
            <div class="feedback-content">
                <div class="title">
                    <p>
                        “A wonderful course on how to start. Eddie beautifully conveys all essentials of a becoming a
                        good
                        Angular developer. Very glad to have taken this course. Thank you Eddie Bryan.”
                    </p>
                </div>
            </div>
            <div class="feedback-user">
                <div class="image"><img src="{{ asset('images/user.png') }}" alt=""></div>
                <div class="infor">
                    <p class="name">Nguyen Duc Manh</p>
                    <p class="language">PHP</p>
                    <div class="evaluate">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="feedback-item">
            <div class="feedback-content">
                <div class="title">
                    <p>
                        “A wonderful course on how to start. Eddie beautifully conveys all essentials of a becoming a
                        good
                        Angular developer. Very glad to have taken this course. Thank you Eddie Bryan.”
                    </p>
                </div>
            </div>
            <div class="feedback-user">
                <div class="image"><img src="{{ asset('images/user.png') }}" alt=""></div>
                <div class="infor">
                    <p class="name">Nguyen Duc Manh</p>
                    <p class="language">PHP</p>
                    <div class="evaluate">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="become-member">
        <div class="sologal">
            Become a member of our
            growing community!
        </div>
        <div class="start">
            <p>Start Learning Now!</p>
        </div>
    </div>
</section>

<section class="container">
    <div class="row statistic">
        <div class="topic col-lg-12">
            <p>Statistic</p>
        </div>
        <div class="statistic-content col-lg-12">
            <div class="row">
                <div class="statistic-item col-lg-4 col-md-4">
                    <p class="statistic-name">Courses</p>
                    <p class="statistic-quantity">1,586</p>
                </div>
                <div class="statistic-item col-lg-4 col-md-4">
                    <p class="statistic-name">Lessons</p>
                    <p class="statistic-quantity">2,689</p>
                </div>
                <div class="statistic-item col-lg-4 col-md-4">
                    <p class="statistic-name">Learners</p>
                    <p class="statistic-quantity">16,882</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
