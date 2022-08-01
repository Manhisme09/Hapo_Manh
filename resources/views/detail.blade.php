@extends('layouts.app')

@section('content')
<div class="detail-course-overview">
    <div class="url-main">
        <div class="url-title">
            <ul class="url-menu">
                <li><a href="">Home</a> <span>></span></li>
                <li><a href="">All courses</a> <span>></span></li>
                <li><a href="">Course detail</a></li>
            </ul>
        </div>
    </div>
    <div class="detail-course-content">
        <div class="row">
            <div class="col-7 content-main" style="background-color: red">
                <div class="image-course"><img
                        src="https://vcdn1-dulich.vnecdn.net/2021/07/16/8-1626444967.jpg?w=1200&h=0&q=100&dpr=1&fit=crop&s=GfgGn4dNuKZexy1BGkAUNA"
                        alt=""></div>
                <div class="course-infor" style="background-color: green">
                    <ul class="menu-course">
                        <li><a href="">Lessons</a></li>
                        <li><a href="">Teacher</a></li>
                        <li><a href="">Reviews</a></li>
                    </ul>
                    <div class="border-bonus"></div>
                </div>
            </div>
            <div class="col-5 content-bonus" style="background-color: yellow">a</div>
        </div>
    </div>
</div>
@endsection
