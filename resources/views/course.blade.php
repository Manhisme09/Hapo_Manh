@extends('layouts.app')

@section('content')
<div class="container-fluid allcourse-body">
    <div class="allcourse">
        <div class="row">
            <div class="col-1 mr-5 pl-0">
                <button class="btn-filter">
                    <i class="fa-solid fa-arrow-down-wide-short"></i>
                    Filter
                </button>
            </div>
            <form action="" method="GET">
                <div class="form-search">
                    <div class="col-8 box-search">

                        <input type="text" class="input-search" name="key_search" placeholder="Search...">
                        <button>
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </button>
                    </div>

                    <div class="col-1">
                        <button class="btn-search">
                            Search
                        </button>
                    </div>
                </div>
            </form>
        </div>

        <div class="row list-item ">
            @foreach ($allCourses as $course )
            <div class="col-6 mb-4">
                <div class="row">
                    <div class="col-11 box-item">
                        <div class="row course-item">
                            <div class="col-3">
                                <img class="img-item" src="{{ $course->image }}" alt="">
                            </div>

                            <div class="col-8 item-content">
                                <div class="item-title">
                                    {{ $course->course_name }}
                                </div>
                                <div class="item-description">
                                    {{ $course->description }}
                                </div>

                                <div>
                                    <button class="btn-more">
                                        more
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="row justify-content-between">
                            <div class="col-3">
                                <div class="course-learners">
                                    Learners
                                </div>
                                <div class="course-number">
                                    {{ $course->total_learners }}
                                </div>
                            </div>

                            <div class="col-3">
                                <div class="course-learners">
                                    Lessons
                                </div>
                                <div class="course-number">
                                    {{ $course->total_lessons }}
                                </div>
                            </div>

                            <div class="col-3">
                                <div class="course-learners">
                                    Times
                                </div>
                                <div class="course-number">
                                    {{ $course->total_time}} (h)
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        {{ $allCourses->links('layouts.paginate') }}
    </div>
</div>
@endsection
